<!DOCTYPE html>
<html>
<head>
	<title>Doctor's Dashboard</title>
</head>
<body>
<?php
include("../include/header.php");
?>
<div class="container-fluid">
	<div class="col-md-12">
		<div class="row">
			<div class="col-md-2" style="margin-left: -30px;">
				<?php 
				include("sidenav.php");
				 ?>
			</div>
			<div class="col-md-10">
				<div class="container-fluid">
					<h5>Doctor's Dashboard</h5>
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-3 mx-2 bg-info" style="height:150px;">
								<div class="col-md-12">
									<div class="row">
										<div class="col-md-8 ">
											<h5 class="text-white my-4">My Profile</h5>
										</div>
										<div class="col-md-4">
											<a href="profile.php"><i class="fa fa-user-circle fa-3x my-4" style="color: white;"></i></a>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-3 mx-2 bg-success" style="height:150px;">
								<div class="col-md-12">
									<div class="row">
										<div class="col-md-8 ">
							<h5 class="text-white my-2" style="font-size: 30px;">0</h5>
							<h5 class="text-white my-4">Total</h5>
							<h5 class="text-white my-4">Patient</h5>
										</div>
										<div class="col-md-4">
											<a href="#"><i class="fa fa-procedures fa-3x my-4" style="color: white;"></i></a>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-3 mx-2 bg-danger" style="height:150px;">
							<div class="col-md-12">
									<div class="row">
										<div class="col-md-8 ">
							<h5 class="text-white my-2" style="font-size: 30px;">0</h5>
							<h5 class="text-white my-4">Total</h5>
							<h5 class="text-white my-4">Appoinment</h5>
										</div>
										<div class="col-md-4">
											<a href="#"><i class="fa fa-calendar fa-3x my-4" style="color: white;"></i></a>
										</div>
									</div>
								</div>
							</div>


						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

</body>
</html>