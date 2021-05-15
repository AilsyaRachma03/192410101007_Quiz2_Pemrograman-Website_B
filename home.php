<?php 
session_start();
if(! isset($_SESSION['is_login']))
{
  header('location:login.php');
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- <meta name="description" content=""> -->
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
        <a class="nav-link" href="home.php">Beranda <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="logout.php">Keluar <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#" > Banyak Tugas ? <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#" > <?php echo $_SESSION['email']; ?>  <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-info my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<!-- <main role="main" class="container"> -->
<div class="container py-5">
    <div class="row">
    <div class="col-lg-10">

<!-- <a href="logout.php" class="form-inline my-2 my-lg-0 btn btn-secondary">Keluar</a> -->
<div class="starter-template">
    <h1 >Selamat Datang Mahasiswa </h1>
    <br>
    <br>
    <h1><?php echo $_SESSION['nama']; ?> </h1>
    <h3>Anda terdaftar dengan Nomor Induk Mahasiswa <?php echo $_SESSION['nim'];?> </h3>
    <h3>Prodi &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $_SESSION['prodi']; ?> </h3>
    <h3>Fakultas : <?php echo $_SESSION['fakultas']; ?> </h3>
    <br>
    <br>
    <br>
    <h1 style="margin-left:200px;" class="lead text-center"> <b>Selamat Anda adalah Mahasiswa Unej >_< </b></h1>
  </div>
</div>
</div>
</div>

</body>
</html>