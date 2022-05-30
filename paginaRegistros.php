<?php 
    include("con_db.php");
    $usuarios = "SELECT * FROM datos";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cssPaginaRegistros.css">
</head>
<body>

    <div class="container-table">
        <div class="table__title">Datos de usuario</div>
        <div class = "table__header" >Nombre</div>
        <div class = "table__header" >Email</div>
        <div class = "table__header" >Fecha Registro</div>

        <?php $resultado = mysqli_query($conex, $usuarios);
        while($row = mysqli_fetch_assoc($resultado)) { ?>

        <div class="table__item"> <?php echo $row["nombre"]?></div>
        <div class="table__item"> <?php echo $row["email"]?></div>
        <div class="table__item"> <?php echo $row["fecha_reg"]?></div>

        <?php } mysqli_free_result($resultado);?>
    </div>
    

    <div class="boton">
        <a href="index.php" ><input type="button" name = "index" value="Inicio"></a>
    </div>
</body>
</html>