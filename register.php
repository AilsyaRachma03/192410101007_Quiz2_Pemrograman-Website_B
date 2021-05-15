<?php 
include_once('config.php');
$database = new database();
if(isset($_POST['register']))
{
    $username = $_POST['username'];
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $prodi = $_POST['prodi'];
    $fakultas = $_POST['fakultas'];
    $email = $_POST['email'];
    if($database->register($username, $password,$nama, $nim, $prodi, $fakultas, $email))
    {
      header('location:login.php');
    }
}

?>

<!-- UI  -->
<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
    <!-- <meta name="description" content=""> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script type="text/javascript" src="jquery.js"></script>
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

<!-- <main role="main" class="flex-shrink-0"> -->
  <div class="container py-5">
  <!-- class="mt-5" -->
    <h1 >Daftar</h1>
    <p class="lead">Daftarkan Identitas Anda</p>
    <hr/>
    <div class="row">
    <div class="col-lg-10">

        <form class="mb-5" method="post" action="">
          <div class="form-group">
            <!-- USERNAME  -->
            <h6>&nbsp; &nbsp; Username</h6>
              <div class="col-sm-10">
                <input type="text" class="form-control mb-1" id="username" name="username" placeholder="Masukan username">
              </div>
          </div>


          <!-- NAMA  -->
          <div class="form-group">
            <h6>&nbsp; &nbsp; Nama</h6>
            <div class="col-sm-10">
              <input type="text" class="form-control mb-1" id="nama" name="nama" placeholder="Masukan nama">
            </div>
          </div>


          <!-- NIM  -->
          <div class="form-group">
            <h6>&nbsp; &nbsp;  Nim</h6>
            <div class="col-sm-10">
              <input type="text" class="form-control mb-1" id="nim" name="nim" placeholder="Masukan nim">
            </div>
          </div>


          <!-- PRODI  -->
          <div class="form-group">
              <h6>&nbsp; &nbsp;  Nama Prodi</h6>
              <div class="col-sm-10">
                  <input type="text" class="form-control mb-1" id="prodi" name="prodi" placeholder="Masukan nama prodi">
              </div>
          </div>

        
          <!-- FAKULTAS  -->
          <div class="form-group">
                <h6>&nbsp; &nbsp; Nama Fakultas</h6>
                <div class="col-sm-10">
                    <input type="text" class="form-control mb-1" id="fakultas" name="fakultas" placeholder="Masukan nama fakultas">
                </div>
          </div>

          <div class="form-group">
                <h6>&nbsp; &nbsp; Email</h6>
                <div class="col-sm-10">
                    <input type="text" class="form-control mb-1" id="email" name="email" placeholder="Masukan Email">
                </div>
          </div>
      

          <!-- PASSWORD  -->
          <div class="form-group">
            <h6>&nbsp; &nbsp; Password</h6>
            <div class="col-sm-10">
              <input type="password" class="form-control mb-1" id="password" name="password" placeholder="Buat password 8 karakter">
            </div>
          </div>

        <!-- class="form-checkbox" -->
        <!-- Check Pw -->
        <div style="margin-left:30px;">
          <p> <input type="checkbox" class="form-checkbox">&nbsp; Tampilkan Password</p>
        </div>
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

        <!-- BUTTON   -->
        <div class="form-group">
          <div class="col-sm-10">
          <button type="submit" class="btn btn-info btn-block" name="register">Daftar</button>
            <a href="login.php" class="btn btn-warning btn-block">Masuk</a>
            
          </div>
        </div>

    </form>
   </div>
  </div>
</div>
<!-- </main> -->

<!-- class="col-sm-2 col-form-label" -->
</body>
</html>