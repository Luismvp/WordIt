<?php
  require_once 'connect.php';
  $category = $_POST['categoria'];
  $sql2 = "SELECT id,texto, categoria FROM parrafos WHERE categoria='".$category."'";
    $parrafos=array();
  foreach($db->query($sql2) as $fila){
    $parrafos[]=$fila;
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
      <div class = "row">
         <form class = "col s12" action="asignatags3_eng.php" method="post">
          <h4>Select the paragraph of this category that you want to choose:</h4>
          <?php
            foreach ($parrafos as $parr) {
                echo'<p>'.nl2br($parr['texto']).'</p>';
                echo'<p><label><input required class="with-gap" type="radio" name="parrafo" value="'.$parr['id'].'"/><span>Seleccionar este párrafo</span></label></p>';
            }
          ?> 
          <input hidden type="text" value=<?php echo '"'.$category.'"'?> name="categoria">  
          <button type="submit" class="btn">Choose tags</button>       
         </form>    
      </div>
      <script type = "text/javascript"
         src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>           
      <script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js">
      </script>
   </body>   
</html>