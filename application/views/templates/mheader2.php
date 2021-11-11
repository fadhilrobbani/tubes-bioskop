<?php 
if(!isset($_SERVER['PATH_INFO'])){
	header('Location: /Login');
}
?>
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
	<style>
		.card{
			width: 400px;
			height: auto;
			margin: auto;
			margin-top: 120px;
			border-radius: 20px;
			background-color: rgba(255, 255, 255, 0.9);
			border: none;
			padding: 0;
		}

		.card form {
			margin: auto;
			margin-top: 0;
			margin-bottom: 30px;
		}
		.card h2{
			text-align: center;
			margin: 30px;
		}
	</style>

</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgba(255, 255, 255, 0.9);">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">MYBIOSKOP</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="<?php echo ($_SERVER['PATH_INFO']=="/Login")? "nav-link active":"nav-link" ?>" href="<?php echo site_url('/Login'); ?>">Login</a>
        </li>
        <li class="nav-item">
          <a class="<?php echo ($_SERVER['PATH_INFO']=="/daftarpemesan/register")? "nav-link active":"nav-link" ?>" href="<?php echo site_url('daftarpemesan/register'); ?>">Register</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


  
  
</div>
</div>

<!-- Welcome Message -->

</div>
</div>
</div>
