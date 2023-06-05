<?php
require_once(__DIR__.'/controllers/sistema.php');
require_once('../vendor/autoload.php');
use Spipu\Html2Pdf\Html2Pdf;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Exception\ExceptionFormatter;
use PhpOffice\PhpSpreadsheet\{Spreadsheet,IOFactory};
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$html2pdf = new Html2Pdf();
$action = (isset($_GET["action"])) ? $_GET["action"] : 'get';
$id = (isset($_GET["id"])) ? $_GET["id"] : null;
$sistema->db();
switch ($action) {
    case 'venta':
        $sql = "SELECT p.venta,p.fecha_inicial, p.fecha_final ,d.departamento 
        from venta p 
        left JOIN departamento d on d.id_departamento= p.id_departamento
        where p.id_venta= :id_venta";
        $st = $sistema->db->prepare($sql);
        $st->bindParam(":id_venta", $id, PDO::PARAM_INT);
        $st->execute();
        $data = $st->fetchAll(PDO::FETCH_ASSOC);

        

        try {
            ob_start();
            include("pdfDiseño.php");
            $content = ob_get_clean();
            $html2pdf = new Html2Pdf('P', 'A4', 'fr', true, 'UTF-8', array(10,10,10,10));
            $html2pdf->pdf->SetDisplayMode('fullpage');
            $html2pdf->writeHTML($content);
            $html2pdf->output('ejemplo.pdf');
        } catch (Html2PdfException $e) {
            $html2pdf->clean();
            $formatter = new ExceptionFormatter($e);
            echo $formatter->getHtmlMessage();
        }

        $html2pdf->writeHTML($html);
        $html2pdf->output();
        break;
        
        case 'excel':
            $sql = "SELECT p.venta,p.fecha_inicial, p.fecha_final, d.departamento 
            from venta p 
            left JOIN departamento d on d.id_departamento= p.id_departamento
            where p.id_venta= :id_venta";
            $st = $sistema->db->prepare($sql);
            $st->bindParam(":id_venta", $id, PDO::PARAM_INT);
            $st->execute();
            $data = $st->fetchAll(PDO::FETCH_ASSOC);

            $excel = new Spreadsheet();
            $hojaActiva = $excel->getActiveSheet();
            $hojaActiva -> setTitle("Excel Reporte");
            $hojaActiva -> getColumnDimension('A')->setWidth(30);
            $hojaActiva->setCellValue('A1', 'Departamento');
            $hojaActiva -> getColumnDimension('B')->setWidth(30);
            $hojaActiva->setCellValue('B1', 'Venta');
            $hojaActiva -> getColumnDimension('C')->setWidth(70);
            $hojaActiva->setCellValue('C1', 'Primer Pago');
            $hojaActiva -> getColumnDimension('E')->setWidth(20);
            $hojaActiva->setCellValue('D1', 'Ultimo Pago');


            $fila=2;

            foreach ($data as $key => $rows){
                $hojaActiva ->setCellValue('A'.$fila,$rows['departamento']);
                $hojaActiva ->setCellValue('B'.$fila,$rows['venta']);
                $hojaActiva ->setCellValue('C'.$fila,$rows['fecha_inicial']);
                $hojaActiva ->setCellValue('D'.$fila,$rows['fecha_final']);
                $fila++;
            }

            $writer = new Xlsx($excel);
            $writer->save('reporte.xlsx');
            
            header("Content-disposition: attachment; filename=reporte.xlsx");
            header("Content-type: application/xlsx");
            readfile("reporte.xlsx");

            break;

            case 'pdf':
                $sql = "SELECT archivo from venta where id_venta=:id_venta";
                $st = $sistema->db->prepare($sql);
                $st->bindParam(":id_venta", $id, PDO::PARAM_INT);
                $st->execute();
                $data = $st->fetchAll(PDO::FETCH_ASSOC);
                print_r($st);
                break;
    default:
        $html = '<h1>Sin reporte</h1>No hay ningun reporte a generar';
}

?>