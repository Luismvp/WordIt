<?php
  require_once 'conecta.php';
  $cat = $_POST["categoria"];
  $texto = $_POST["texto"];
  $sql = "SELECT id, texto, categoria FROM parrafos";
  $num = 1;
  foreach($db->query($sql) as $parrafo){
    $num++;
  }
  $sql_insert = "INSERT INTO `parrafos` (`id`,`texto`,`categoria`) VALUES ('$num','$texto','$cat') ";
  try{
      $db->query($sql_insert);
  } catch (Exception $error){
      die("Error al insertar el disco en la base de datos" . $error->getMessage());
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <style type="text/css">  
      body{
        text-align: center;
      }
      a{
        color:white;
        padding-left: 3%;
        padding-right: 3%;
      }
      a:hover{
        color:grey;
      }
      nav{
        text-align: center;
        background-color: navy;
      }
      .content{
        text-align: center;
      }
      </style>
  </head>

  <body>
    <nav style="text-align: center;">

      <a href="index.php">Inicio</a>

      <a href="categorias.php">Escribir categorías</a>

      <a href="tags.php">Escribir tags</a>

      <a href="parrafos.php">Escribir párrafo</a>
    </nav>
    <h3>Tu párrafo ha sido incluido en la base de datos</h3>
    <button class="btn"><a href="index.php">Volver a inicio</a></button>
    <script type="text/javascript" src="js/materialize.min.js"></script>
  </body>
</html>