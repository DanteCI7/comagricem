<h1 class="text-center">Empleados</h1>
<div class="container-fluid">
    <div class="row">
        <div class="col-3">
            <p><a class="btn btn-success" href="empleado.php?action=new" role="button">Nuevo empleado</a>
            </p>
        </div>
    </div>

    <div class="col-3 mb-5">
        <div class="col-12">
            <table class="table table-responsive table-bordered">
                <thead>
                    <tr class="bg-success">
                        <th scope="col">Foto</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido paterno</th>
                        <th scope="col">Apellido materno</th>
                        <th scope="col">Fecha nacimiento</th>
                        <th scope="col">RFC</th>
                        <th scope="col">CURP</th>
                        <th scope="col">Operación</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $nReg = 0;
                    foreach ($data as $key => $empleado):
                        $nReg++; ?>
                        <tr>
                            <td>
                                <?php echo '<img width="300" src="data:image/png;base64,'.base64_encode($empleado['foto']).'"/>'; ?>
                            </td>
                            <td class="text-white">
                                <?php echo $empleado["nombre"] ?>
                            </td>
                            <td class="text-white">
                                <?php echo $empleado["primer_apellido"] ?>
                            </td>
                            <td class="text-white">
                                <?php echo $empleado["segundo_apellido"] ?>
                            </td>
                            <td class="text-white">
                                <?php echo $empleado["fechaNacimiento"] ?>
                            </td>
                            <td class="text-white">
                                <?php echo $empleado["rfc"] ?>
                            </td>
                            <td class="text-white">
                                <?php echo $empleado["curp"] ?>
                            </td>

                            <td >
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="empleado.php?action=edit&id=<?php echo $empleado["id_empleado"] ?>"
                                        type="button" class="btn btn-primary">Modificar</a>
                                    <a href="empleado.php?action=delete&id=<?php echo $empleado["id_empleado"] ?>"
                                        type="button" class="btn btn-danger">Eliminar</a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach ?>
                    <tr>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
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