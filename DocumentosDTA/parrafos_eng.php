<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <script type="text/javascript"> $(document).ready(function(){
    $('select').formSelect();
  });</script>
      <style type="text/css">  
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
        background-color:navy;
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
      <h3 style="text-align:center">In this page you will be able to write new paragraphs</h3>
      <div class="container" style="margin-top: 40px;margin-bottom: 100px">
        <form action="inserta_parrafo_eng.php" method="post">
            <fieldset>
                <label for="categoria">¿Which category does this paragraph belong to?</label>
                <br>
                  <?php
                    require_once 'connect.php';
                    $sql = "SELECT id, categoria FROM categorias";
                    foreach($db->query($sql) as $categoria){
                    echo'<label><input required class="with-gap" type="radio" name="categoria" value="'.$categoria['categoria'].'"><span>'.$categoria['categoria'].'</span></label>';
                    }
                  ?>
                <br>
                <label for="parrafo">Write your paragraph in here:
                <textarea required name="parrafo" id="parrafo" style="min-height:300px"></textarea>
                </label>
            </fieldset>
                <button type="submit" class="btn">Send</button>
        </form>
      </div>
      <!--JavaScript at end of body for optimized loading-->
      <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>