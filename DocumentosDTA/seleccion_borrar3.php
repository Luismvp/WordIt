<?php
  require_once 'conecta.php';
  $cat = $_POST["categoria"];
  $parrafo = $_POST['parrafo'];
  $sql2 = "DELETE parrafos, nexo_parrafo_tag FROM parrafos LEFT JOIN nexo_parrafo_tag ON (parrafos.id=nexo_parrafo_tag.idParrafo) WHERE id='".$parrafo."'";
  try{
      $db->query($sql2);
  } catch (Exception $error){
      die("Error al borrar el párrafo de la tabla parrafos: " . $error->getMessage());
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

      <a href="InicioEsp.php">Inicio</a>

      <a href="categorias.php">Escribir categorías</a>

      <a href="tags.php">Escribir tags</a>

      <a href="parrafos.php">Escribir párrafo</a>
    </nav><!-- /.container -->
    <h4>El párrafo que has elegido ha sido eliminado de la base de datos</h4>
    </form>
    <script type="text/javascript" src="js/materialize.min.js"></script>
  </body>
</html>