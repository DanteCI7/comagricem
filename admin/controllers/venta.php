<?php
require_once(__DIR__."/sistema.php");
require_once(__DIR__."/departamento.php");
class Venta extends Sistema
{
    public function get($id = null)
    {
        $this->db();
        if (is_null($id)) {
            $sql = "select * from venta p  left join departamento d 
            on p.id_departamento = d.id_departamento ";
            $st = $this->db->prepare($sql);
            $st->execute();
            $data = $st->fetchAll(PDO::FETCH_ASSOC);
        } else {
            $sql = "select * from venta p  left join departamento d 
            on p.id_departamento = d.id_departamento where p.id_venta=:id";
            $st = $this->db->prepare($sql);
            $st->bindParam(":id", $id, PDO::PARAM_INT);
            $st->execute();
            $data = $st->fetchAll(PDO::FETCH_ASSOC);
        }


        return $data;
    }

    public function new ($data)
    {

        $this->db();
        $nombrearchivo = str_replace(" ", "_", $data['venta']);
        $nombrearchivo = substr($nombrearchivo, 0, 20);

        $sql = "INSERT INTO venta (venta, descripcion, fecha_inicial,
        fecha_final, id_departamento) 
        VALUES (:venta, :descripcion, :fecha_inicial, :fecha_final
        ,:id_departamento)";

        $sesubio = $this->uploadfile("archivo", "upload/ventas/", $nombrearchivo);

        if ($sesubio) {
            $sql = "INSERT INTO venta (venta, descripcion, fecha_inicial,
        fecha_final, id_departamento, archivo) 
        VALUES (:venta, :descripcion, :fecha_inicial, :fecha_final
        ,:id_departamento, :archivo)";
        }

        $st = $this->db->prepare($sql);
        $st->bindParam(":venta", $data['venta'], PDO::PARAM_STR);
        $st->bindParam(":descripcion", $data['descripcion'], PDO::PARAM_STR);
        $st->bindParam(":fecha_inicial", $data['fecha_inicial'], PDO::PARAM_STR);
        $st->bindParam(":fecha_final", $data['fecha_final'], PDO::PARAM_STR);
        $st->bindParam(":id_departamento", $data['id_departamento'], PDO::PARAM_INT);

        if ($sesubio) {
            $st->bindParam(":archivo", $sesubio, PDO::PARAM_STR);
        }
        $st->execute();

        $rc = $st->rowCount();
        return $rc;
    }

    public function delete($id)
    {
        $this->db();
        $this->db->beginTransaction();
        try{
            $sql2 = "DELETE FROM venta WHERE id_venta=:id";
            $st2 = $this->db->prepare($sql2);
            $st2->bindParam(":id", $id, PDO::PARAM_INT);
            $st2->execute();
            $rc = $st2->rowCount();
            $this->db->commit();
        }catch(PDOException $Exception){
            $this->db->rollback();
        }
      
        return $rc;
    }

    public function edit($id, $data)
    {
        $archivo_fijo = "ruta/";

        $this->db();
        $nombrearchivo = str_replace(" ", "_", $data['venta']);
        $nombrearchivo = substr($nombrearchivo, 0, 20);
        $nombrearchivo = $this->uploadfile("archivo", "upload/ventas/", $nombrearchivo);
        if ($nombrearchivo) {
            $sql = "UPDATE venta 
        SET venta =:venta, descripcion =:descripcion,
        fecha_inicial =:fecha_inicial, fecha_final =:fecha_final,
        id_departamento =:id_departamento, archivo =:archivo
         where id_venta =:id";
        } else {
            $sql = "UPDATE venta 
            SET venta =:venta, descripcion =:descripcion,
            fecha_inicial =:fecha_inicial, fecha_final =:fecha_final,
            id_departamento =:id_departamento
             where id_venta =:id";
        }
        $st = $this->db->prepare($sql);
        $st->bindParam(":id", $id, PDO::PARAM_INT);
        $st->bindParam(":venta", $data['venta'], PDO::PARAM_STR);
        $st->bindParam(":descripcion", $data['descripcion'], PDO::PARAM_STR);
        $st->bindParam(":fecha_inicial", $data['fecha_inicial'], PDO::PARAM_STR);
        $st->bindParam(":fecha_final", $data['fecha_final'], PDO::PARAM_STR);
        $st->bindParam(":id_departamento", $data['id_departamento'], PDO::PARAM_INT);
        if ($nombrearchivo) {
            $st->bindParam(":archivo", $nombrearchivo, PDO::PARAM_STR);
        }
        $st->execute();
        $rc = $st->rowCount();
        return $rc;
    }

   
    public function chartventa($id = null){
        $this->db();
        if (is_null($id)) {
            $sql = "select month(p.fecha_inicial)as mes, count(p.id_venta) 
            as cantidad from venta p order by 1 desc";
            $st = $this->db->prepare($sql);
            $st->execute();
            $data = $st->fetchAll(PDO::FETCH_ASSOC);
        } else {
            $sql = "select * from tarea t left join venta p 
            on p.id_venta = t.id_venta where t.id_venta=:id";
            $st = $this->db->prepare($sql);
            $st->bindParam(":id", $id, PDO::PARAM_INT);
            $st->execute();
            $data = $st->fetchAll(PDO::FETCH_ASSOC);
        }


        return $data;
    }
}

$venta = new Venta; //Objeto de la clase venta
?>