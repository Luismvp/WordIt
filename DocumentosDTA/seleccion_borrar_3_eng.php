<?php
  require_once 'connect.php';
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

      <a href="InicioEng.php">Home</a>

      <a href="categorias_eng.php">Write new category</a>

      <a href="tags_eng.php">Write new tags</a>

      <a href="asignatags1_eng.php">Assign tags</a>

      <a href="parrafos_eng.php">Write new paragraph</a>
    </nav>
    <h4>The paragraph you've chosen has been deleted from the database</h4>
    </form>
    <script type="text/javascript" src="js/materialize.min.js"></script>
  </body>
</html>