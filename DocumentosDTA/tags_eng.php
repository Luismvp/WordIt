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
<h3>In this page you will be able to write new tags for your paragraphs</h3>
<div class="container" style="margin-top: 40px;margin-bottom: 100px">
  <form action="inserta_tag_eng.php" method="post">
      <fieldset>
        <label for="categoria">¿Which category does is tag belong to?</label>
        <br>
        <?php
          require_once 'connect.php';
          $sql = "SELECT id, categoria FROM categorias";
          foreach($db->query($sql) as $categoria){
            echo'<label><input required class="with-gap" type="radio" name="categoria" value="'.$categoria['categoria'].'"><span>'.$categoria['categoria'].'</span></label>';
          }
        ?>
        <br>
        <label for="tag">¿How do you want to name this tag?</label>
        <br>
        <input required type="text" name="tag" id="tag" placeholder="Ej: Carreton Eléctrico">
        <br>
      </fieldset>
          <button type="submit" class="btn">Send</button>
  </form>
</div>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>