<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>MyBioskop</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url() ?>assets/member/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url() ?>assets/member/css/business-casual.css" rel="stylesheet">

</head>


<body>
<nav class="navbar sticky-top navbar-expand-lg navbar-light" style="background-color: rgba(255, 255, 255, 0.9);">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">MYBIOSKOP</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="<?php echo ($_SERVER['PATH_INFO']=="/Mhome/home")? "nav-link active":"nav-link" ?>" href="<?php echo base_url()."index.php/Mhome/home"; ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="<?php echo ($_SERVER['PATH_INFO']=="/Mhome/film")? "nav-link active":"nav-link" ?>" href="<?php echo base_url()."index.php/Mhome/film"; ?>">Film Tayang</a>
        </li>
        <li class="nav-item">
          <a class="<?php echo ($_SERVER['PATH_INFO']=="/daftarbooking/tambah")? "nav-link active":"nav-link" ?>" href="<?php echo site_url('daftarbooking/tambah'); ?>">Booking</a>
        </li>
        <li class="nav-item">
          <a class="<?php echo ($_SERVER['PATH_INFO']=="login/logout")? "nav-link active":"nav-link" ?>" href="<?php echo site_url('login/logout'); ?>">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

  <div class="tagline-upper text-center text-heading text-shadow text-white mt-5 d-none d-lg-block">MYBIOSKOP</div>
  <div class="tagline-lower text-center text-expanded text-shadow text-uppercase text-white mb-5 d-none d-lg-block">BENGKULU | Jl. Buntu | 088938389120</div>
  
