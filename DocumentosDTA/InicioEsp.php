<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <style>
    	a{
    		color:white;
    		padding-left: 1%;
    		padding-right: 1%;
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

  		<a href="categorias.php">Escribir categorías</a>

  		<a href="tags.php">Escribir tags</a>

      <a href="asignatags1.php">Asignar tags a párrafos</a>

  		<a href="parrafos.php">Escribir párrafos</a>

      <a href="seleccion_borrar.php">Borrar párrafos</a>

      <a href="index.php">Elige idioma</a>
  	</nav><!-- /.container -->
		<div class="content"style="text-align: center;">
      <h2>Bienvenido al creador de ofertas de DTA</h2>
      <p>Además, esta herramienta solo es útil si la información que añadimos es correcta.</p> 
      <p>Antes de escribir categorías, tags y sobre todo párrafos, comprobar que no contienen</p>
      <p>faltas de ortografía, que son coherentes y que la sintaxis es adecuada.</p>
			<h4>Ver todas las tablas de la base de datos</h4>
			<button class="btn"><a href="lista.php">Ver</a></button>
      <form action="seleccion.php" method="post">
      <h4>Escribir 
      oferta en word</h4>
      <input type="text" hidden name="parrafosHastaAhora" value="0">
      <input type="text" hidden name="parrafo" value="0">
      <button type="submit" class="btn">Empezar</button>
      </form>
		</div>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
  </body>
</html>