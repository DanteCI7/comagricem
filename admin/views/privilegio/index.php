<h1 class="text-center">Lista de privilegios</h1>
<div class="container-fluid">

        <div class="col-3">
            <p><a class="btn btn-success" href="privilegio.php?action=new" role="button">Crear nuevo privilegio</a>
            </p>
        </div>

    <div class="row">
        <div class="col-12">
            <table class="table table-responsive table-bordered">
                <thead>
                    <tr class="bg-success">
                        <th scope="col">ID</th>
                        <th scope="col">Privilegio</th>
                        <th scope="col">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $nReg = 0;
                    foreach ($data as $key => $privilegio):
                        $nReg++; ?>
                        <tr>
                            <td class="text-white">
                                <?php echo $privilegio["id_privilegio"] ?>
                            </td>
                            <td class="text-white">
                                <?php echo $privilegio["privilegio"] ?>
                            </td>
                            <td class="col-4 text-white">
                                <div class="btn-group" privilegioe="group" aria-label="Basic example">
                                    <a href="privilegio.php?action=edit&id=<?php echo $privilegio["id_privilegio"] ?>"
                                        type="button" class="btn btn-primary">Modificar</a>
                                    <a href="privilegio.php?action=delete&id=<?php echo $privilegio["id_privilegio"] ?>"
                                        type="button" class="btn btn-danger">Eliminar</a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach ?>
                    <tr>
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