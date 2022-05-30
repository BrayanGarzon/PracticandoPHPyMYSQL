<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    
    <form method= "post" >
        <h1>¡Suscribete!</h1>
        <input type="text"   name= "name" placeholder = "Nombre Completo">
        <input type="email"  name= "email" placeholder = "Email">
        <input type="submit" name= "register" >
        <a class="a" href="paginaRegistros.php"><input type="button" name = "mostrarRegistro" value="Ver registros"></a>
        

    </form>
    <?php
    include("registrar.php");
    ?>


</body>
</html>