<?php 
session_start();
include_once('config.php');
$database = new database();

if(isset($_SESSION['is_login']))
{
    header('location:home.php');
}

if(isset($_COOKIE['username']))
{
  $database->relogin($_COOKIE['username']);
  header('location:home.php');
}

if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    if(isset($_POST['remember']))
    {
      $remember = TRUE;
    }
    else
    {
      $remember = FALSE;
    }

    if($database->login($username,$password,$remember))
    {
      header('location:home.php');
    }
}
?>


<!-- UI  -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="jquery.js"></script>
    <title>Masuk</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  </head>
  <body class="p-3 mb-2 bg-dark text-white">

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-light bg-warning">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#">UNEJ SANTUY</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

      <li class="nav-item active">
        <a class="nav-link" href="login.php">Masuk <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="register.php">Daftar <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#" > Banyak Tugas ? <span class="sr-only">(current)</span></a>
        </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-info my-2 my-sm-0" type="submit">Search</button>
  
    </form>
  </div>
</nav>

    <!-- Container  -->
    <div class="container py-5">
    <h1 class="h3 mb-3 font-weight-normal text-center"><b>Masuk</b></h1>
    <div class="row">
    <div class="col-lg-10">

      <form method="post" class="mb-5" action="" style="margin-left: 200px">
        <div class="form-group">
          <!-- USERNAME  -->
          <br>
          <h5>Username</h5>
          <input type="text" class="form-control mb-1" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username" name="username" >
        </div>

        <!-- PASSOWORD  -->
        <div class="form-group">
          <h5>Password</h5>
          <input type="password" class="form-control mb-1" id="password" placeholder="Password" name="password" >
          <!-- Check Pw -->
          <p> <input type="checkbox" class="form-checkbox"> Tampilkan Password </p>
          <!-- Check Password -->
          <script type="text/javascript">
                        $(document).ready(function(){		
                          $('.form-checkbox').click(function(){
                            if($(this).is(':checked')){
                              $('#password').attr('type','text');
                            }else{
                              $('#password').attr('type','password');
                            }
                          });
                        });
                      </script>
        </div>

        <!-- REMEMBER ME   -->
        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me" name="remember"> Ingat Saya
          </label>
        </div>
        <br>

        <!-- BUTTON   -->
        <button class="btn btn-lg btn-info btn-block" type="submit" name="login">Masuk</button>
        <a href="register.php" class="btn btn-lg btn-warning btn-block" > Daftar</a>

  </form>
  </div>
  </div>
</body>
</html>