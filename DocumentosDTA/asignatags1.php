<?php
   require_once 'conecta.php';
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
      <div class = "row">
         <h4>Encuentra el párrafo que buscas filtrando a través de las categorías</h4>
         <form class = "col s12" action="asignatags2.php" method="post">
            <div class = "row">
            <label>Selección de categoria</label>
               <select name="categoria" required>
                  <option value = "" disabled selected>Selecciona la categoría a la que pertenece el párrafo:</option>
                  <?php
                     require_once 'conecta.php';
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