<h1>
    <?php echo ($action == 'edit') ? 'Modificar' : 'Nuevo '; ?> Venta
</h1>

<form class="container-fluid" method="POST" action="venta.php?action=<?php echo ($action); ?>"
    enctype="multipart/form-data">

    <div class="row">
        <div class="col-2">
            <label for="venta" class="text-white">Venta:</label>
        </div>
    </div>
    <div class="row">
        <div class="col-3">
            <input required="required" type="text" class="form-control text-white bg-dark" id="venta" name="data[venta]"
                value="<?php echo isset($data[0]['venta']) ? $data[0]['venta'] : ''; ?>" minlength="3"
                maxlength="200">
        </div>
    </div>
    <div class="row">
        <div class="col-2">
            <label for="descripcion" class="text-white">Descripción:</label>
        </div>
    </div>
    <div class="row">

        <div class="col-3">
            <input required="required" type="text" class="form-control text-white bg-dark" id="descripcion" name="data[descripcion]"
                value="<?php echo isset($data[0]['descripcion']) ? $data[0]['descripcion'] : ''; ?>">
        </div>
    </div>

    <div class="row">
        <div class="col-2">
            <label for="fecha_inicial" class="text-white">Fecha Inicio:</label>
        </div>
    </div>
    <div class="row">
        <div class="col-3">
            <input required="required" type="date" class="form-control text-white bg-dark" id="fecha_inicial" name="data[fecha_inicial]"
                value="<?php echo isset($data[0]['fecha_inicial']) ? $data[0]['fecha_inicial'] : ''; ?>">
        </div>
    </div>

    <div class="row">
        <div class="col-2">
            <label for="fecha_final" class="text-white">Fecha Fin:</label>
        </div>
    </div>
    <div class="row">
        <div class="col-3">
            <input required="required" type="date" class="form-control text-white bg-dark" id="fecha_final" name="data[fecha_final]"
                value="<?php echo isset($data[0]['fecha_final']) ? $data[0]['fecha_final'] : ''; ?>">
        </div>
    </div>

    <div class="row">
        <p></p>
    </div>

    <div class="row">
        <div class="col-2">
            <label for="id_departamento" class="text-white">Departamento:</label>
        </div>
    </div>
    
    <div class="row">
        <div class="col-3">
            <select name="data[id_departamento]" required="required" class="form-control text-white bg-dark">
                <?php
                $selected = " ";
                foreach ($dataDepartamentos as $key => $depto):
                    if ($depto['id_departamento'] == $data[0]['id_departamento']):
                        $selected = "selected";
                    endif;
                    ?>
                    <option value="<?php echo $depto['id_departamento']; ?>" <?php echo $selected; ?>>
                        <?php echo $depto['departamento'] ?></option>
                    <?php $selected = " "; endforeach; ?>
            </select>
        </div>
    </div>

    <div class="row">
        <div class="col-2">
            <label for="archivo" class="text-white">Archivo adjunto:</label>
        </div>
    </div>

    <div class="row">
        <div class="col-3">
        <?php if ($action == 'edit'): ?>
        <div class="alert alert-primary" role="alert">
        <a href="<?php echo $data[0]['archivo']?>" target="_blank">Descargar el adjunto actual</a>
        </div>
        <?php endif;?>
            <input type="file" name="archivo" class="form-control text-white bg-dark"
                value='<?php echo isset($data[0]['archivo']) ? $data[0]['archivo'] : ''; ?>' />
        </div>
    </div>

    <div class="row">
        <p></p>
    </div>


    <div class="row">
        <div class="col-12">
            <input type="submit" class="btn btn-primary mb-3" name="enviar" value="Guardar">
        </div>
    </div>

    <?
    if ($action == 'edit'): ?>
        <input type="hidden" name="data[id_venta]"
            value="<?php echo isset($data[0]['id_venta']) ? $data[0]['id_venta'] : ''; ?>" class="" />
    <? endif; ?>
</form>