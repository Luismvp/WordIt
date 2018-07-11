<?php
  require_once 'conecta.php';
  $category = $_POST['categoria'];
  $tags = $_POST['tags'];
  $parrafosHastaAhora=$_POST['parrafosHastaAhora2'];
  echo $parrafosHastaAhora;
  $sql1 = "SELECT id, tag FROM tags";
  $sql2 = "SELECT id,texto, categoria FROM parrafos";
  $sql3 = "SELECT idNexo,idParrafo,idTag FROM nexo_parrafo_tag";
  $idTags=array();
  $idTextos=array();
  $textos=array();
  foreach($db->query($sql1) as $fila){
    foreach ($tags as $tag) {
      if($tag === $fila['tag']){
        $idTags[]=$fila['id'];
      }
    }
  }
  foreach($db->query($sql2) as $texto){
    if($texto['categoria'] == $category){
      $idTextos[]=$texto['id'];
    }
  }
  foreach($db->query($sql3) as $nexo){
    foreach ($idTags as $tagg) {
      foreach ($idTextos as $textoo) {
        if($textoo == $nexo['idParrafo'] and $tagg == $nexo['idTag']){
          $textos[]=$textoo;
        }
      }
    }
  }
  $parrafos=array();
  $num = 0;
  foreach($db->query($sql2) as $texto){
    foreach ($textos as $id) {
      if($texto['id'] == $id){
        foreach($parrafos as $parra){
          if($parra[0] === $texto['texto']){
            $num++;
          }
        }
        if($num<1){
          $parrafos[]=array($texto['texto'],$texto['id']);
        }
        $num=0;
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
      <div class = "row">
         <form class = "col s12" action="seleccion.php" method="post">
          <h4>Selecciona el párrafo que quieres elegir para esta categoría</h4>
          <?php
            foreach ($parrafos as $parr) {
                echo'<p>'.nl2br($parr[0]).'</p>';
                echo'<p><label><input required class="with-gap" type="radio" name="parrafo" value="'.$parr[1].'"/><span>Seleccionar este párrafo</span></label></p>';
            }
          ?>   
          <input hidden name="parrafosHastaAhora" value=<?php echo '"'.$parrafosHastaAhora.'"'?>>
          <button type="submit" class="btn">Siguiente párrafo</button>       
         </form> 

         <button class="btn" style="min-height:100px"><a href="index.php">Volver al principio</a></button>    
      </div>
      <script type = "text/javascript"
         src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>           
      <script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js">
      </script>
   </body>   
</html>