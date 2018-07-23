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
      body{
        text-align: center;
      }
    	a{
    		color:white;
    		padding-left: 5%;
    		padding-right: 5%;
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
      <h2>Elige el idioma en el que vas a escribir tu documento, o los párrafos que vayas a incluir en la base de datos</h2>
      <form action="InicioEsp.php" method="post">
      <h4>Español</h4>
      <button type="submit" class="btn">ir</button>
      </form>
      <form action="InicioEng.php" method="post">
      <h4>Inglés</h4>
      <button type="submit" class="btn">Go</button>
      </form>
		</div>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
  </body>
</html>