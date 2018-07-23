<?php
  require_once 'conecta.php';
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

      <a href="InicioEsp.php">Inicio</a>

      <a href="categorias.php">Escribir categorías</a>

      <a href="tags.php">Escribir tags</a>

      <a href="parrafos.php">Escribir párrafo</a>
    </nav><!-- /.container -->
      <div class = "row">
         <form class = "col s12" action="asignatags3.php" method="post">
          <h4>Selecciona el párrafo que quieres elegir para esta categoría</h4>
          <?php
            foreach ($parrafos as $parr) {
                echo'<p>'.nl2br($parr['texto']).'</p>';
                echo'<p><label><input required class="with-gap" type="radio" name="parrafo" value="'.$parr['id'].'"/><span>Seleccionar este párrafo</span></label></p>';
            }
          ?> 
          <input hidden type="text" value=<?php echo '"'.$category.'"'?> name="categoria">  
          <button type="submit" class="btn">Elegir tags</button>       
         </form>    
      </div>
      <script type = "text/javascript"
         src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>           
      <script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js">
      </script>
   </body>   
</html>