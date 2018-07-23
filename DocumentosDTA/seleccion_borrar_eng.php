<?php
   require_once 'connect.php';
      $parrafos = $_POST['parrafosHastaAhora'];
      $parrafosPagina2 = $_POST['parrafo']; 
      if($parrafos==="0"){
         $parrafos=$parrafosPagina2;
      }else{
         $parrafos= $parrafos.','.$parrafosPagina2;
      }
      echo $parrafos;


?>
<html>
   <head>
      <title>The Materialize Selects Example</title>
      <meta name = "viewport" content = "width = device-width, initial-scale = 1">      
      <link rel = "stylesheet"
         href = "https://fonts.googleapis.com/icon?family=Material+Icons">
      <link rel = "stylesheet"
         href = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
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

      <a href="asignatags1_eng.php">Assign tags</a>

      <a href="parrafos_eng.php">Write new paragraph</a>
    </nav>
      <div class = "row">
         <h4>Find the paragraph you´re looking using the categories as a filter</h4>
         <form class = "col s12" action="seleccion_borrar_2_eng.php" method="post">
            <div class = "row">
            <label>Category selection</label>
               <select required name="categoria">
                  <option value = "" disabled selected>Select the category of your paragraph:</option>
                  <?php
                     require_once 'connect.php';
                     $sql = "SELECT id, categoria FROM categorias";
                     foreach($db->query($sql) as $categoria){
                        echo '<option value="'.$categoria['categoria'].'">'.$categoria['categoria'].'</option>';
                     }
                  ?>
               </select>               
            </div>
            <div class = "row">
              <button type="submit" class="btn">Elegir</button>             
            </div>   
         </form>       
      </div>
   </body>   
</html>