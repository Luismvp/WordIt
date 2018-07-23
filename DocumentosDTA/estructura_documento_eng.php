<?php
  require_once 'connect.php';
  $parrafos=explode(',', $_POST['parrafos_finales']);
?>
<html>
   <head>
      <title>The Materialize Selects Example</title>
      <meta name = "viewport" content = "width = device-width, initial-scale = 1">      
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <script type = "text/javascript"
         src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>           
      <script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js">
      </script> 
      
      <script>
         $(document).ready(function() {
            $('select').material_select();
         });
      </script>
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
      <form action="cargar_fotos_eng.php" method="post">
        <?php
          foreach ($parrafos as $parra) {
            $sql= "SELECT id,texto,categoria FROM parrafos WHERE id=".$parra;
            foreach($db->query($sql) as $parr){
              echo "<h4>".$parr['categoria']."</h4>";
              echo "<p>".nl2br($parr['texto'])."</p>";
              echo "<label for='".$parr['id']."'>¿Do you want to include an image in this paragraph?</label>";
              echo "<label><input required class='with-gap' type='radio' name='".$parr['id']."' value='si'><span>yes</span></label>";
              echo "<label><input required class='with-gap' type='radio' name='".$parr['id']."' value='no'><span>no</span></label>";
            }
          }
          echo "<br><input hidden name='parrafos' value='".$_POST['parrafos_finales']."'>"
        ?>
        <button type="submit" class="btn">Go</button>
      </form>
      <script type = "text/javascript"
         src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>           
      <script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js">
      </script>
   </body>   
</html>