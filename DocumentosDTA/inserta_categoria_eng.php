<?php
  require_once 'connect.php';
  $cat = $_POST["categoria"];
  $sql = "SELECT id, categoria FROM categorias";
  $num = 1;
  foreach($db->query($sql) as $categoria){
    $num++;
  }
  $sql_insert = "INSERT INTO `categorias` (`id`,`categoria`) VALUES ('$num','$cat') ";
  try{
      $db->query($sql_insert);
  } catch (Exception $error){
      die("Error al insertar la categoria en la base de datos" . $error->getMessage());
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

      <a href="InicioEng.php">Home</a>

      <a href="categorias_eng.php">Write new category</a>

      <a href="tags_eng.php">Write new tags</a>

      <a href="parrafos_eng.php">Write new paragraph</a>
    </nav>
    <h3>Your categorty has been included in the database</h3>
    <button class="btn"><a href="InicioEng.php">Home</a></button>
    <script type="text/javascript" src="js/materialize.min.js"></script>
  </body>
</html>