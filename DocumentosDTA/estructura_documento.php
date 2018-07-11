<?php
  require_once 'conecta.php';
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
      <form action="cargar_fotos.php" method="post">
        <?php
          foreach ($parrafos as $parra) {
            $sql= "SELECT id,texto,categoria FROM parrafos WHERE id=".$parra;
            foreach($db->query($sql) as $parr){
              echo "<h4>".$parr['categoria']."</h4>";
              echo "<p>".nl2br($parr['texto'])."</p>";
              echo "<label for='".$parr['id']."'>¿Quieres incluir una foto en este párrafo?</label>";
              echo "<label><input required class='with-gap' type='radio' name='".$parr['id']."' value='si'><span>si</span></label>";
              echo "<label><input required class='with-gap' type='radio' name='".$parr['id']."' value='no'><span>no</span></label>";
            }
          }
          echo "<br><input hidden name='parrafos' value='".$_POST['parrafos_finales']."'>"
        ?>
        <button type="submit" class="btn">Seguir</button>
      </form>
      <script type = "text/javascript"
         src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>           
      <script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js">
      </script>
   </body>   
</html>