<?php
  require_once 'connect.php';
  $parrafos=explode(',', $_POST['parrafos']);
  $parrafosConFoto= array();
  $parrafosConFotoFinal="";
  foreach($parrafos as $parra){
    if($_POST[''.$parra]==="si"){
      $parrafosConFoto[]=$parra;
      if($parrafosConFotoFinal!==""){
        $parrafosConFotoFinal=$parrafosConFotoFinal.','.$parra;
      }else{
        $parrafosConFotoFinal=$parra;
      }
    }
  }
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
      <form enctype="multipart/form-data" action="archivo_word_eng.php" method="post">
        <h4>This are the paragraph you want to include an image in:</h4>
        <?php
          foreach ($parrafosConFoto as $parra) {
            $sql= "SELECT id,texto,categoria FROM parrafos WHERE id=".$parra;
            foreach($db->query($sql) as $parr){

              echo "<h4>".$parr['categoria']."</h4>";
              echo "<p>".nl2br($parr['texto'])."</p>";
              echo "<label for='".$parr['id']."'>¿Where do you want the picture?</label>";
              echo "<label><input required class='with-gap' type='radio' name='".$parr['id']."' value='si'><span>At the beggining of the paragraph</span></label>";
              echo "<label><input required class='with-gap' type='radio' name='".$parr['id']."' value='no'><span>At the end of the paragraph</span></label>";
              echo "<br><br><input required type='file' name='foto".$parr['id']."'>";
            }
          }
          echo "<br><input hidden name='parrafosFinales' value='".$_POST['parrafos']."'>";
          echo "<br><input hidden name='parrafosConFotoFinal' value='".$parrafosConFotoFinal."'>";
        ?>
        <label for="nombre">¿How do you want to name the document?</label><br>
        <input type="text" name="nombre" required style="max-width:50%">
        <br>
      <button type="submit" class="btn">Generate document</button>
      </form>
      <br>
      <br>
      <br>
      <br>
      <br>
      <script type = "text/javascript"
         src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>           
      <script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js">
      </script>
   </body>   
</html>