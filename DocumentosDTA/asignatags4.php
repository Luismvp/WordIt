<?php
  require_once 'conecta.php';
  $sql = "SELECT id,tag FROM tags";
  $num = 1;
  $parrafo = $_POST['idparrafo'];
  foreach($db->query($sql) as $tag){
    if(isset($_POST['checkbox'.$num])){
      $sql = "SELECT idNexo,idParrafo,idTag FROM nexo_parrafo_tag";
      $Nnexos=1;
      foreach($db->query($sql) as $nexo){
        $Nnexos++;
      }
      $sql_insert = "INSERT INTO `nexo_parrafo_tag` (`idNexo`,`idParrafo`,`idTag`) VALUES ('$Nnexos','$parrafo','$num') ";
      try{
        $db->query($sql_insert);
      } catch (Exception $error){
        die("Error al insertar la categoria en la base de datos" . $error->getMessage());
      }
    }
    $num++;
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
    </nav><!-- /.container -->
    <h3>Se le han asignado los tags al párrafo</h3>

    <button class="btn"><a href="index.php">Inicio</a></button>
    <script type="text/javascript" src="js/materialize.min.js"></script>
  </body>
</html>