<?php require "functions.php";
if (isset($_POST['submit']))
$usuario=$_POST["username"];
	$data=$_POST["contrasena"];
  if($usuario==$guardados && $data='contrasena'){
    echo ("Usuario y contraseña correctos");
  }else {
    echo "Error, datos erroneos";
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:100|Open+Sans+Condensed:300|Oswald:200|Wire+One" rel="stylesheet">
  <link rel="stylesheet" href="../css/login.css">
    <title>Ingresar</title>
  </head>
  <body>
    <header class="main-header">
      <div class="constant">
        <a href="login.php" class="user">
          <span class="fa fa-user"></span>
        </a>
        <a href="index.php"><h1>tona interior design</h1></a>
        <a href="#" class="toggle-nav">
          <span class="fa fa-bars"></span>
        </a>
      </div>
      <ul class="main-nav">
        <li><a href="index.php">home</a></li>
        <li><a href="nosotros.php">nosotros</a></li>
        <li><a href="portfolio.php">portfolio</a></li>
        <li><a href="cotizaciones.php">cotizaciones</a></li>
        <li><a href="faq.php">faq's</a></li>
        <li><a href="#">contacto</a></li>
        <li><a href="register.php">registrate</a></li>
      </ul>
    </header>
    <div class="login-clean">
      <div class="">
            <form method="post">
                <h2 class="sr-only">Login Form</h2>
                <div class="illustration">
                  <a href="#" class="user">
                    <span class="fa fa-user"></span>
                  </a>
                </div>
                <div class="form-group">
                  <input class="form-control" name="email" placeholder="Email" type="email">
                </div>
                <div class="form-group">
                  <input class="form-control" name="password" placeholder="Contraseña" type="password">
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" id="chk-remember" name="remember"> Recordarme
                  </label>
                </div>
                <br>
                <div class="form-group">
                  <button class="btn btn-primary btn-block" type="submit">Ingresar</button>
                </div>
                <a href="register.php" class="forgot">Olvidaste tu email o tu contraseña?</a>
              </form>
              </div>
        </div>
        <footer class="main-footer">
          <nav class="social">
            <ul>
              <li><a href="#"><span class="fa fa-facebook"></span></a></li>
              <li><a href="#"><span class="fa fa-pinterest"></span></a></li>
              <li><a href="#"><span class="fa fa-instagram"></span></a></li>
            </ul>
          </nav>
          <nav class="contact">
            <ul>
              <li><a href="index.php">home</a></li>
              <li><a href="nosotros.php">nosotros</a></li>
              <li><a href="portfolio.php">portfolio</a></li>
              <li><a href="cotizaciones.php">cotizaciones</a></li>
              <li><a href="faq.php">faq's</a></li>
              <li><a href="#">contacto</a></li>
              <li><a href="register.php">registrate</a></li>
            </ul>
          </nav>
        </footer>
  </body>
</html>
