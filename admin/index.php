<?php
//Asignamos a variables los valores para poder realizar la conexión a mysql
  $servername = "localhost";
  $username = "openMarchante";
  $password = "open2015";
  $db = "openMarchante";
  // Crear conección a la base de datos
    $conn = mysqli_connect($servername, $username, $password, $db);
    if (!$conn) {
      die("Conección fallida: " . mysqli_connect_error());
  }
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>LogINOpenMarchante</title>
    <link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body><header>
    <i class="fa fa-lock fa-lg"></i>
      Iniciar
    </header>
    <?php
    if(isset($_GET['usuario']))
    {
        $user =$_GET['usuario'];
        $pass =$_GET['password'];

        $sql = "SELECT usuario, password from Usuario where usuario = '$user' and password = '$pass'";
        /* Para ejecutar la consulta y lo resultado están en la variable $result */
        $result = mysqli_query($conn, $sql);
        /* $numrows tiene el número de reglones regrwesados por la consulta del
           SELECT, si es igual a 1, entonces el user y pass son válidos, si es 0
           son inválido ya sea el user o el pass o ambos. */
        $numrows = mysqli_num_rows($result);
            if($numrows == 1){
                include("holamundo.html");
                }else {
                include("loginIncorrecto.html");
                }

      }else{
        include("loginOM.html");
      }
    //include("loginOM.html");
    ?>
    <footer>
      <aside >
            By GOT IT!
      </aside>

    </footer>
  </body>
  </html>
