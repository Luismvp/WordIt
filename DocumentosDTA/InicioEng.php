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
    		padding-left: 2%;
    		padding-right: 2%;
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

  		<a href="categorias_eng.php">Write new category</a>

  		<a href="tags_eng.php">Write new tags</a>

      <a href="asignatags1_eng.php">Assign tags to a paragraph</a>

  		<a href="parrafos_eng.php">Write new paragraph</a>

      <a href="seleccion_borrar_eng.php">Delete paragraph</a>

      <a href="index.php">Choose languaje</a>
  	</nav><!-- /.container -->
		<div class="content"style="text-align: center;">
      <h2>Welcome to the Document creator of DTA</h2>
      <p>Special Warning: This tool will be useless unless the information included in it is correct.</p> 
      <p>Before writting categories, tags or paragraphs and introducing them in the database, please check that</p>
      <p>ortography and grammar are correct, and that every paragraph is coherent, in order to avoid extra work.</p>
			<h4>Watch the info included in the database</h4>
			<button class="btn"><a href="lista_eng.php">go</a></button>
      <form action="seleccion_eng.php" method="post">
      <h4>Write a word document</h4>
      <input type="text" hidden name="parrafosHastaAhora" value="0">
      <input type="text" hidden name="parrafo" value="0">
      <button type="submit" class="btn">Begin</button>
      </form>
		</div>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
  </body>
</html>