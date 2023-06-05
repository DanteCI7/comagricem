<h1 class="text-center">Ventas</h1>
<div class="container-fluid">
    <div class="row">
        <div class="col-3">
            <p><a class="btn btn-success" href="venta.php?action=new" role="button">Ingresar una venta nueva</a>
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <table class="table table-responsive table-bordered">
                <thead>
                    <tr class="bg-success">
                        <th scope="col">Nombre de la venta</th>
                        <th scope="col">departamento</th>
                        <th scope="col">descripción</th>
                        <th scope="col">fecha de inicio</th>
                        <th scope="col">fecha de fin</th>
                    
                        <th scope="col">operación</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $nReg = 0;
                    foreach ($data as $key => $venta):
                        $nReg++; ?>
                        <tr>
                            <td class="text-white">
                                <?php echo $venta["venta"] ?>
                            </td>
                            <td class="text-white">
                                <?php echo $venta["departamento"] ?>
                            </td>
                            <td class="text-white">
                                <?php echo $venta["descripcion"] ?>
                            </td>
                            <td class="text-white">
                                <?php echo $venta["fecha_inicial"] ?>
                            </td>
                            <td class="text-white">
                                <?php echo $venta["fecha_final"] ?>
                            </td>

                            <td class="text-white">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="reporte.php?action=venta&id=<?php echo $venta["id_venta"] ?>"
                                        type="button" class="btn btn-warning" target ="blank">Reporte</a>
                                    <a href="reporte.php?action=excel&id=<?php echo $venta["id_venta"] ?>"
                                        type="button" class="btn btn-success" target ="blank">Excel</a>
                                    <a href="venta.php?action=edit&id=<?php echo $venta["id_venta"] ?>"
                                        type="button" class="btn btn-primary">Modificar</a>
                                    <a href="venta.php?action=delete&id=<?php echo $venta["id_venta"] ?>"
                                        type="button" class="btn btn-danger">Eliminar</a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach ?>
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th class="text-white">
                            Se encontraron
                            <?php echo $nReg ?> registros.
                        </th>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>