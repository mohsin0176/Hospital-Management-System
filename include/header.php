<!DOCTYPE html>
<html>
<head>
	<title> HOSPITAL MANAGEMENT SYSTEM</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
 <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/fontawesome.min.css">
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
 <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

</head>
<body>

<nav class="navbar navbar-expand-lg navabr-info bg-info">
	<h5>Hospital Management System</h5>
	<div class="mr-auto">
		
	</div>
	<ul class="navbar-nav">
		<?php
         if (isset($_SESSION['admin'])) 
         {
         	$user=$_SESSION['admin'];
         	 echo '
		<li class="nav-item"><a href="#" class="nav-link text-white">'.$user.'</a></li>
		<li class="nav-item"><a href="logout.php" class="nav-link text-white">logout</a></li>';
         }
         else
         {
         	echo '<li class="nav-item"><a href="" class="nav-link text-white">Admin</a></li>
		<li class="nav-item"><a href="" class="nav-link text-white">Doctor</a></li>
		<li class="nav-item"><a href="" class="nav-link text-white">Patient</a></li>';
         }
		?>
	</ul>
</nav>

</body>
</html>