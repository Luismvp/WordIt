<?php
  require_once 'conecta.php';
  $cat = $_POST["categoria"];
  $parrafo = $_POST['parrafo'];
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
    <h4>Elige ahora algún tag para el párrafo en cuestión</h4>

    <form action="asignatags4.php" method="post">
      <input type="number" name="idparrafo" hidden value=<?php echo "'".$parrafo."'"?>>
      <?php
                    $sql = "SELECT id, tag, category FROM tags WHERE category='".$cat."'";
                    foreach($db->query($sql) as $tag){
                    echo'<label><input class="filled-in" type="checkbox" name="checkbox'.$tag['id'].'"><span>'.$tag['tag'].'</span></label><br>';
                    }
                  ?>
      <button type="submit" class="btn">Asignar tags</button>
    </form>
    <script type="text/javascript" src="js/materialize.min.js"></script>
  </body>
</html>