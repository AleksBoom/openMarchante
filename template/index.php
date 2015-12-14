<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>openMarchante</title>
    <link rel="stylesheet" href="css/normalize.css"/>
    <link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/main.css"/>
    <link rel="stylesheet" href="css/responsive.css"/>
    <link rel="stylesheet" href="css/responsiveslides.css"/>
    
    
  </head>
  <body>
   
      
      
      <section>
       
         <?php
            if(!isset($_GET['index'])){
                /*cuando se entra al sistema por primera vez entramos acá*/
                include("index.html");
            } else {
            
               } 
                ?>
    </section>
       
        
  <footer>
    <section>
    <aside>
      <h3>Información</h3>
      <ul>
          <li><a href="login.html">Acerca de</a></li>
          <li><a href="login.html">Delivery Information</a></li>
          <li><a href="login.html">Privacy Policy</a></li>
          <li><a href="login.html">Terms & Conditions</a></li>
        </ul>
    </aside>
    <aside>
      <h3>Customer Service</h3>
      <ul>
          <li><a href="login.html">Contact Us</a></li>
          <li><a href="index.php">Returns</a></li>
          <li><a href="login.html">Site Map</a></li>
    </ul>
    </aside>
    <aside>
      <h3>Extras</h3>
      <ul>
          <li><a href="http://www.despegar.com.mx/">Despegar.com</a></li>
          <li><a href="http://www.mundotravel.es/">Mundo travel</a></li>
          <li><a href="http://www.bestday.com.mx/">BestDay</a></li>
          <li><a href="http://mundojoven.com/">Mundo Joven</a></li>
    </ul>
    </aside>
    <aside class="ultimo">
      <h3>Mi cuenta</h3>
      <ul>
        <li><a href="login.html">Login</a></li>
        <li><a href="registro.html">Registrar nuevo usuario</a></li>
        <li><a href="lista-deseos.html">Lista de deseos</a></li>
        <li><a href="lista-compras.html">Lista de compras</a></li>
    </ul>
    </aside>
    <div class="reset">
    </div>
    <hr/>
    <p>Power By OpenMarchante: got it!<br/>
      Your Store, CopyLeft 2015</p>
  </section>
  </footer>
  <script>
  </script>
  </body>
</html>