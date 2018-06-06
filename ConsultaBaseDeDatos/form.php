<form class="form-signin" method="POST" action="register.php">
    <h3 class="form-signin-heading text-left"><i class="fa fa-address-card"></i> Nuevo usuario</h3>
    <br/>
    <div class="input-group">
      <span class="input-group-addon"><i class="fa fa-user"></i></span>
      <input type="text"  name="nombre" class="form-control" placeholder="Ingrese su nombre" required autofocus>
    </div>
    <br/>
    <div class="input-group">
      <span class="input-group-addon"><i class="fa fa-user"></i></span>
      <input type="text" name="apellido" class="form-control" placeholder="Ingrese su apellido" required>
    </div>
    <br/>
    <div class="input-group">
      <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
      <input type="text" name="edad" class="form-control" placeholder="Ingrese su edad" required>
    </div>
    <br/>
    <div class="input-group">
      <span class="input-group-addon"><i class="fa fa-phone"></i></span>
      <input type="text" name="telefono" class="form-control" placeholder="Ingrese su número" >
    </div>
    <br/>
    <div class="input-group">
      <span class="input-group-addon"><i class="fa fa-at"></i></span>
      <input type="email" name="correo" class="form-control" placeholder="Ingrese su correo" >
    </div>
    <br/>
    <button class="btn btn-sm btn-primary btn-block" type="submit"><i class="glyphicon glyphicon-log-in"></i> Ingresar</button>
</form>
    