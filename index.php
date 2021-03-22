<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>HMS HOME PAGE</title>
</head>
<body>
<?php
include("include/header.php");
?>
 
<div style="margin-top: 50px; "></div> 
<div class="container">
	<div class="col-md-12">
		<div class="row">
			<div class="col-md-3 mx-1 shadow">
			 <img src="img/hospital.png" style="width:100%; height: 190px">
			 	<h6 class="text-center">Click on The Button for more Info..</h6>
			<a href="">
				<button class="btn btn-success my-3" style="margin-left: 30%;text-align: center;">Click for More Info!!!</button>
			</a>
			</div>
			
			<div class="col-md-3 mx-1 shadow">
			<img src="img/patient.png" style="width:100%; height: 190px">
			<h6 class="text-center">We are Employing For Doctor</h6>
			<a href="">
				<button class="btn btn-success my-3" style="margin-left: 30%">Apply Now!!!</button>
			</a>
			</div>
			<div class="col-md-3 mx-1 shadow">
				<img src="img/doctor.png" style="width:100%; height: 190px">
					<h6 class="text-center">Create Account so that we can take good care of you</h6>
			<a href="">
				<button class="btn btn-success my-3" style="margin-left: 30%">Create Account!!!</button>
			</a>
			</div>
		</div>
	</div>
</div> 

</body>
</html>