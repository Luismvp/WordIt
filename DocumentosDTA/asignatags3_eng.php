<?php
  require_once 'connect.php';
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

      <a href="InicioEng.php">Home</a>

      <a href="categorias_eng.php">Write new category</a>

      <a href="tags_eng.php">Write new tags</a>

      <a href="parrafos_eng.php">Write new paragraph</a>
    </nav>
    <h4>Choose the tags you want to assign to the paragraph:</h4>

    <form action="asignatags4_eng.php" method="post">
      <input type="number" name="idparrafo" hidden value=<?php echo "'".$parrafo."'"?>>
      <?php
                    $sql = "SELECT id, tag, category FROM tags WHERE category='".$cat."'";
                    foreach($db->query($sql) as $tag){
                    echo'<label><input class="filled-in" type="checkbox" name="checkbox'.$tag['id'].'"><span>'.$tag['tag'].'</span></label><br>';
                    }
                  ?>
      <button type="submit" class="btn">Assign tags</button>
    </form>
    <script type="text/javascript" src="js/materialize.min.js"></script>
  </body>
</html>