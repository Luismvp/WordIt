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
    <?php
	require_once 'conecta.php';
	$sql = "SELECT id, texto, categoria FROM parrafos";

	echo "<br><hr><table><thead><th>numero</th><th>texto</th><th>categoria</th></thead>";
	foreach ($db->query($sql) as $fila) {
		echo "<tr>";
		echo "<td>".$fila['id']."\t"."</td>";
		echo "<td>".$fila['texto']."\t"."</td>";
		echo "<td>".$fila['categoria']."\t"."</td>";
		echo "</tr>";
	}
	echo "</table>";
  echo "<hr><br>";
  $sql = "SELECT id,categoria FROM categorias";
  echo "<table><thead><th>numero</th><th>categoria</th></thead>";
  foreach ($db->query($sql) as $fila) {
    echo "<tr>";
    echo "<td>".$fila['id']."\t"."</td>";
    echo "<td>".$fila['categoria']."\t"."</td>";
    echo "</tr>";
  }
  echo "</table>";
  echo "<hr><br>";
  $sql = "SELECT id, tag FROM tags";
  echo "<table><thead><th>numero</th><th>tag</th></thead>";
  foreach ($db->query($sql) as $fila) {
    echo "<tr>";
    echo "<td>".$fila['id']."\t"."</td>";
    echo "<td>".$fila['tag']."\t"."</td>";
    echo "</tr>";
  }
  echo "</table>";
  echo "<hr><br>";
	?>

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>