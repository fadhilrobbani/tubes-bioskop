<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<title>MyBioskop | Admin</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
	<link rel="stylesheet" href="<?php echo base_url('assets/datatables/dataTables.bootstrap.css') ?>"/>
	<link href="<?php echo base_url('assets/vendor/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
	<!-- MetisMenu CSS -->
	<link href="<?php echo base_url('assets/vendor/metisMenu/metisMenu.min.css') ?>" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="<?php echo base_url('assets/css/sb-admin-2.css') ?>" rel="stylesheet">
	
	<style>


	h2{
		color:white;
		text-align: center;
		margin-top: 0px;
		font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
	}

	.homepage{
		background-color: #428BCA;
	}

	#waktu{
		
		margin-top: 0px;
		font-size: medium;
		font-style: italic;
	}
	#clock{
		
		margin-top: 0px;
	}
	.row{
		margin-top: 0px;
	}

	.fa-4x:hover{
		color:greenyellow;
	}

	.fa-calendar{
		
		<?php if($_SERVER['PATH_INFO']=="/tayang") { ?>
				<?php echo "color:greenyellow;" ?>
			<?php } ?>
	}

	.fa-video-camera{
		
		<?php if($_SERVER['PATH_INFO']=="/studio") { ?>
				<?php echo "color:greenyellow;" ?>
			<?php } ?>
	}
	.fa-users{
		
		<?php if($_SERVER['PATH_INFO']=="/daftarpemesan") { ?>
				<?php echo "color:greenyellow;" ?>
			<?php } ?>
	}
	.fa-list-alt{
		
		<?php if($_SERVER['PATH_INFO']=="/daftarbooking") { ?>
				<?php echo "color:greenyellow;" ?>
			<?php } ?>
	}
	.fa-film{
		
		<?php if($_SERVER['PATH_INFO']=="/film") { ?>
				<?php echo "color:greenyellow;" ?>
			<?php } ?>
	}
	.fa-list{
		
		<?php if($_SERVER['PATH_INFO']=="/home") { ?>
				<?php echo "color:greenyellow;" ?>
			<?php } ?>
	}

	#logout{
		margin: 0px;
		padding: 0px;
	}
	#timer{
		padding: 0;
		margin: 0px;
		margin-right: 30px;
		font-size: smaller;

	}

	.navbar-brand h4{
		padding: 0;
		margin: 0px;
		margin-left: 30px;
	}

	.dataTables_wrapper {
		min-height: 500px
	}
	
	.dataTables_processing {
		position: absolute;
		top: 50%;
		left: 50%;
		width: 100%;
		margin-left: -50%;
		margin-top: -25px;
		padding-top: 20px;
		text-align: center;
		font-size: 1.2em;
		color:black;
	}
</style>
</head>
<body>
	
	
	<!-- Main Menu -->
	<div id="wrapper">
			
	<!-- Navigation -->
	<nav class="navbar navbar-default sticky-top" role="navigation" style="margin-bottom: 0">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo site_url('home'); ?>"><h4>MYBIOSKOP</h4></a>

			</div>
			<!-- /.navbar-header -->

			<ul class="nav navbar-top-links navbar-right">
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo site_url('login/logout'); ?>">
						<i class="fa fa-user fa-fw"></i>Logout<i class=""></i>
					</a>
					
					<!-- /.dropdown-user -->
				</li>
				<!-- /.dropdown -->
			</ul>
			<!-- /.navbar-top-links -->
	
			<div class="navbar-default sidebar" role="navigation">
				<div class="sidebar-nav navbar-collapse">
					<ul class="nav" id="side-menu">
						<?php echo generate_sidemenu();?>
					</ul>
				</div>
				<!-- /.sidebar-collapse -->
			</div>
			<!-- /.navbar-static-side -->
		</nav>
		<!-- Main Menu -->
		<div id="page-wrapper">
