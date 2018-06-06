<?php
    include("conexion.php");

    $consulta = "SELECT * FROM datos ORDER BY Nombre ASC";
    $resultado = mysqli_query($conexion,$consulta);

    echo "
    <br/>
    <h3 class='form-signin-heading'><i class='glyphicon glyphicon-list'></i> Lista de usuarios</h3>
    <br/>
        <div class='input-group'>
        <input class='form-control' id='system-search' name='q' placeholder='Buscar ...' required>
        <span class='input-group-btn'>
        <button type='submit' class='btn btn-default'>
            <i class='glyphicon glyphicon-search'></i>
        </button>
        </span>
        </div>
    <br/>
    <table class='table table-list-search table-responsive table-hover table-bordered'>
            <thead>
            <tr>
            <th>Datos Personales</th>
            <th>Edad</th>
            <th>Teléfono</th>
            <th>Correo</th>
            <th>Opciones</th>
            </tr>
        </thead>
    <tbody>";

while($fila = mysqli_fetch_array($resultado))
{
    echo "<tr>";
    echo "<td>".$fila['Nombre']. " " .$fila['Apellido']."</td>";
    echo "<td>".$fila['Edad']."</td>";
    echo "<td>".$fila['Telefono']."</td>";
    echo "<td>".$fila['Correo']."</td>";
    echo "<td>
        <a title='eliminar registro' class='btn btn-xs btn-danger' 
            href='delete.php?id=".$fila['ID']."'>
            <i class='glyphicon glyphicon-trash glyphicon'></i>
        </a>
        <a title='actualizar registro' class='btn btn-xs btn-primary' 
        href='edit.php?id=".$fila['ID']."'>
        <i class='glyphicon glyphicon-edit'></i>
    </a>
    </td>";
    echo "</tr>";
}
    echo "</tbody>
    </table>";
?>