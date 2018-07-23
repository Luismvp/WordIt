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
    <?php
	require_once 'connect.php';
	$sql = "SELECT id, texto, categoria FROM parrafos";

	echo "<br><hr><table><thead><th>id</th><th>text</th><th>category</th></thead>";
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
  echo "<table><thead><th>id</th><th>category</th></thead>";
  foreach ($db->query($sql) as $fila) {
    echo "<tr>";
    echo "<td>".$fila['id']."\t"."</td>";
    echo "<td>".$fila['categoria']."\t"."</td>";
    echo "</tr>";
  }
  echo "</table>";
  echo "<hr><br>";
  $sql = "SELECT id, tag FROM tags";
  echo "<table><thead><th>id</th><th>tag</th></thead>";
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