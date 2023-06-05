<page backtop="25mm" backbottom="25mm" backleft="10mm" backright="10mm">
    <page_header>
        <div style="background-color:green;">
            <table>
                <tr>
                    <td><img src="../images/comagricen_logo.jpg" style="width: 180px;" /></td>
                    <td style="padding-left:150px; padding-top:10px;">
                        <h2 style="color:white; text-align:center;">Informe de Venta</h2>
                    </td>
                </tr>
            </table>
        </div>

    </page_header>

    <page_footer> 
        <div style="background-color: green; height:80px;">
        <table>
                <tr>
                    <td>
                    <ul>
                    <li style="color:white">Teléfono: <span>461-399-82-16</span></li>
                    <li style="color:white">Correo Eléctronico: <span>comagricen@gmail.com</span></li>
                </ul>
                    </td>
                    <td style="padding-left:200px; padding-top:5px; padding-bottom:5px;">
                        <img src="../images/comagricen_logo.jpg" style="width: 180px;" />
                    </td>
                </tr>
            </table>
        </div>
    </page_footer>
    <table style="border: 2px; margin-top:5%;">
        <tr>
            <td>
                <ul>
                    <li>Departamento: <span style="color:orange"><?php echo $data[0]['departamento']; ?></span></li>
                    <li>Nombre de la Venta: <span style="color:orange"><?php echo $data[0]['venta']; ?></span></li>
                    <li>Primer pago: <span style="color:orange"><?php echo $data[0]['fecha_inicial']; ?></span></li>
                    <li>Ultimo pago: <span style="color:orange"><?php echo $data[0]['fecha_final']; ?></span></li>
                </ul>
        </td>
        </tr>
    </table>
    

  


</page>