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
    </nav>
<h3>En esta página puedes escribir nuevos tags para tus párrafos</h3>
<div class="container" style="margin-top: 40px;margin-bottom: 100px">
  <form action="inserta_tag.php" method="post">
      <fieldset>
        <label for="categoria">¿A qué categoría pertenece este tag?</label>
        <br>
        <?php
          require_once 'conecta.php';
          $sql = "SELECT id, categoria FROM categorias";
          foreach($db->query($sql) as $categoria){
            echo'<label><input required class="with-gap" type="radio" name="categoria" value="'.$categoria['categoria'].'"><span>'.$categoria['categoria'].'</span></label>';
          }
        ?>
        <br>
        <label for="tag">¿Qué nombre le quieres dar a este tag de párrafo?</label>
        <br>
        <input required type="text" name="tag" id="tag" placeholder="Ej: Carreton Eléctrico">
        <br>
      </fieldset>
          <button type="submit" class="btn">Enviar</button>
  </form>
</div>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>