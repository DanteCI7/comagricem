<h1 class="text-center">Casos de exito</h1>
<div class="container-fluid">
    <div class="row">
        <div class="col-3">
            <p><a class="btn btn-success" href="caso.php?action=new" role="button">Ingresar un caso nuevo</a>
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <table class="table table-responsive table-bordered">
                <thead>
                    <tr class="bg-success">
                        <th scope="col ">Caso</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Resumen</th>
                        
                        <th scope="col">Activo</th>
                        <th scope="col">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $nReg = 0;
                    foreach ($data as $key => $caso):
                        $nReg++; ?>
                        <tr>
                            <td class='bg-warning'>
                                <?php echo $caso["caso_exito"] ?>
                            </td>
                            <td class='bg-warning'>
                                <?php echo $caso["descripcion"] ?>
                            </td>
                            <td class='bg-warning'>
                                <?php echo $caso["resumen"] ?>
                            </td>
                            
                            <td class='bg-warning'>
                                <?php echo $caso["activo"] ?>
                            </td>

                            <td class='bg-warning'>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="caso.php?action=edit&id=<?php echo $caso["id_caso"] ?>"
                                        type="button" class="btn btn-primary">Modificar</a>
                                    <a href="caso.php?action=delete&id=<?php echo $caso["id_caso"] ?>"
                                        type="button" class="btn btn-danger">Eliminar</a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach ?>
                    <tr>
                    <th scope="col" class='bg-warning'></th>
                    <th scope="col" class='bg-warning'></th>
                    <th scope="col" class='bg-warning'></th>
                    
                    <th scope="col" class='bg-warning'></th>
                        <th class="bg-warning">
                            Se encontraron
                            <?php echo $nReg ?> registros.
                        </th>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>