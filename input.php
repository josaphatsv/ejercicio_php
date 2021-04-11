<?php

//ejemplo 
$target_path  =  "uploads/";
$target_path  =  $target_path  .  basename($_FILES['uploadedfile']['name']);
if (move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
    echo "El archivo " . basename($_FILES['uploadedfile']['name']) . " se ha subido con éxito";
} else {
    echo "Hubo un error subiendo el archivo, por favor inténtalo de nuevo!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <table>
    <tr><td><label for="nombre">Nombre</label></td><td>
    <input type="text" name="txtname" placeholder="Texto demo"></td></tr>

    <tr><td><label for="nombre">Contraseña</label>
    </td><td><input type="password" name="txtpassword" />
    </td></tr>
    
    <tr><td><label for="nombre">Checkbox</label>
    </td><td><input type="checkbox" name="cbdemo" ></td></tr>
    
    <tr>
    <td>
    <label for="nombre">Radio</label></td>
    <td><input type="radio" name="rddemo" ></td>
    </tr>
    
    <tr>
    <td>Archivo<br>
    las variables $_FILES que son de php esta obsoletas hoy se hace base php.ini<br>
     dicha restriccion se puede emular con js de querer hacer pruebas<br>  
    https://www.php.net/manual/es/reserved.variables.files.php<br>
    queda ejemplo decomo puede ser la subida
    </td>
    <td> <input type="file" name="fdemo" id="fdemo" accept="image/*,.doc,.docx,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" ></td>
    </tr>
    <tr><td>    <label for="ciudades">Select</label></td>
        <td>    <select name="ciudades">
       <optgroup label="Latinoamerica">
          <option value="El Salvador">El Salvador</option>
          <option value="Guatemala">Guatemala</option>
        </optgroup><optgroup label="Europa">
          <option value="madrid">Madrid</option>
          <option value="londres">Londres</option>
        </optgroup>
     </select></td></tr>
     <tr>
     <td><label for="tipo">Select multiple</label><br>
     
     <p>El primer el elemento se selecciona con un click, ,<br>
     pero los adicionales se seleccionan usando<BR>
      (ctrl+click) ó (cmd+click) 
     según el navegador y sistema operativo</p>
     </td><td>
    <select name="tipo" multiple="true">
   <option value="musico">Músico</option>
   <option value="pintor">Pintor</option>
   <option value="actor">Actor</option>
   <option value="escultor">Escultor</option>
</select></td>
     </tr>
</td><td>
<tr><td><label for="textarea">Textarea</label></td><td><textarea></textarea></td></tr>
    </table>
    
    </form>

</body>
</html>