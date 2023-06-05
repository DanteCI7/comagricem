<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        <form method="POST" action="login.php?action=reset">
          <!-- Email input -->
          
          <!-- New Password input -->
          <div class="form-outline mb-4">
            <input type="password" id="form1Example23" name="contrasena" class="form-control form-control-lg" />
            <label class="form-label text-white" for="form1Example23">Nueva Contraseña</label>
          </div>

          <input type="hidden" name="correo" value="<?php echo $data['correo']; ?>" />
          <input type="hidden" name="token" value="<?php echo $data['token']; ?>" />
          <!-- Submit button -->
          <input type="submit" name="enviar" value="Restablecer contraseña" class="btn btn-primary btn-lg btn-block">
        </form>
      </div>
    </div>
  </div>
</section>