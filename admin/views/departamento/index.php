
<h1>Departamentos</h1>
<a href="departamento.php?action=new" class="btn btn-success">Nuevo</a>
<br><br>
<table class="table table-bordered">
  <thead>
    <tr class="bg-success">
      <th scope="col" class="col-md-1">id</th>
      <th scope="col" class="col-md-8">Departamento</th>
      <th scope="col" class="col-md-3">Opciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($data as $key => $departamento): ?>
    <tr>
      <th scope="row" class='bg-warning'><?php echo $departamento['id_departamento']; ?></th>
      <td class='bg-warning'><?php echo $departamento['departamento']; ?></td>
      <td class="bg-warning">
          <div class="btn-group" role="group" aria-label="Menu Renglon">
            <a class="btn btn-primary " href="departamento.php?action=edit&id=<?php echo $departamento['id_departamento']?>">Modificar</a>
            <a class="btn btn-danger" href="departamento.php?action=delete&id=<?php echo $departamento['id_departamento']?>">Eliminar</a>
          </div>
      </td> 
    </tr>
    <?php endforeach; ?>
  </tbody>
  <tr>
      <th scope="col" class='bg-warning'></th>
      <th scope="col" class='bg-warning'></th>
      <th scope="col" class='bg-warning'>Se encontraron <?php echo sizeof($data); ?> registros.</th>
    </tr>
</table>