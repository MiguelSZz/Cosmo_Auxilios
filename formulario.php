<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="Styles/style(1).css">
</head>

    <?php    
    if(isset($_POST['submit'])){
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $tipoId = $_POST['tipoId'];
        $numeroDoc = $_POST['numeroDoc'];
        $consulta = $_POST['consulta'];
    }
    ?>

      <div class="container">
        <form class="form" form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <h2>Registro</h2>

        <label for="nombre">Escribe tu nombre</label>
      <input type="text" name="nombre" class="box" required value="<?php if(isset($nombre)) echo $nombre ?>">
      <label for="Teléfono">Numero telefónico</label>
      <input type="number" name="telefono" class="box" required value="<?php if(isset($telefono)) echo $telefono ?>">
      <label for="correo">Correo(*):</label>
      <input type="text" name="correo" class="box" required value="<?php if(isset($correo)) echo $correo ?>">
      <label for="numero">Tipo de Documento(*):</label>
      <select name="tipoId" class="box">
        <option value="CI">CC</option>
        <option value="CE">CE</option>
      </select>
      <label for="numero">Número de Documento(*):</label>
      <input type="number" name="numeroDoc" class="box" required value="<?php if(isset($numeroDoc)) echo $numeroDoc ?>">
      <label for="">Consulta:</label>
      <textarea name="consulta" rows="10" cols="60" class="box" required value="<?php if(isset($consulta)) echo $consulta ?>"> </textarea>
      <input type="submit" name="submit" class="box">
      <?php
      include ("validar.php");
      ?>

    </form>
    <div class="info">

<img src="Img/Captura (1).PNG" class="img-1" alt="">

<div class="location">
    <div class="icons">
        <img src="Img/pga (1).PNG" alt="">

        <p>200 test Mdll</p>

    </div>
    </div>

    <div class="icons">
        <img src="Img/numbera (1).PNG" alt="">

        <p>SSSJ</p>

    </div>

    <div class="icons">
        <img src="Img/emla (1).PNG" alt="">

        <p>Testma.com</p>

    </div>
    <div class="social">
        <img src="Img/fca (1).PNG" alt="">
        <img src="Img/emla (1).PNG" alt="">
        <img src="Img/Cinst (1).PNG" alt="">
    </div>
</div>

</div>
</div>
    </div>
            
</body>

</html>