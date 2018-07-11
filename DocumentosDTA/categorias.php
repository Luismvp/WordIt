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
<h3>En esta página puedes escribir nuevas categorías</h3>
<div class="container" style="margin-top: 40px;margin-bottom: 100px">
  <form action="inserta_categoria.php" method="post">
      <fieldset>
          <label for="categoria">¿Qué nombre le quieres dar a esta categoría de párrafo?</label>
          <br>
          <input required type="text" name="categoria" id="categoria" placeholder="Ej: Bastidores">
          <br>
      </fieldset>
          <button type="submit" class="btn">Enviar</button>
  </form>
</div>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>