<?php
    include("conexion.php");

    $id = $_GET['id'];

    $consulta = "SELECT * FROM datos WHERE ID=$id";
    $resultado = mysqli_query($conexion,$consulta);
  
?>

  <form method="POST" action="editUser.php">
    <div class='modal-header'>
        <h4 class='modal-title'>Editar</h4>
    </div>
    <div class="modal-body">
      <?php

      while($fila = mysqli_fetch_array($resultado))
      {
          echo "<div class='input-group'>";
          echo "<span class='input-group-addon'><i class='fa fa-user'></i></span>";
          echo "<input type='text' name='nombre' value='".$fila['Nombre']."' class='form-control' placeholder='Ingrese su nombre' required autofocus>";
          echo "</div>";
          echo "<br/>";
          echo "<div class='input-group'>";
          echo "<span class='input-group-addon'><i class='fa fa-user'></i></span>";
          echo "<input type='text' name='apellido' value='".$fila['Apellido']."' class='form-control' placeholder='Ingrese su apellido' required autofocus>";
          echo "</div>";
          echo "<br/>";
          echo "<div class='input-group'>";
          echo "<span class='input-group-addon'><i class='fa fa-pencil'></i></span>";
          echo "<input type='text' name='edad' value='".$fila['Edad']."' class='form-control' placeholder='Ingrese su edad' required autofocus>";
          echo "</div>";
          echo "<br/>";
          echo "<div class='input-group'>";
          echo "<span class='input-group-addon'><i class='fa fa-phone'></i></span>";
          echo "<input type='text' name='telefono' value='".$fila['Telefono']."' class='form-control' placeholder='Ingrese su teléfono'  autofocus>";
          echo "</div>";
          echo "<br/>";
          echo "<div class='input-group'>";
          echo "<span class='input-group-addon'><i class='fa fa-at'></i></span>";
          echo "<input type='email' name='correo' value='".$fila['Correo']."' class='form-control' placeholder='Ingrese su correo'  autofocus>";
          echo "<input type='hidden' name='id' value='".$id."' class='form-control' placeholder='Ingrese su correo'  autofocus>";
          echo "</div>";
      }
      ?>
    </div>
    <div class="modal-footer">
        <a href="index.php" class="btn btn-default btn-danger">
            <i class="fa fa-times-circle"></i> Cerrar
        </a>
        <button type="submit" class="btn btn-primary">
          <i class="fa fa-refresh"></i> Editar
        </button>
    </div>
  </form>