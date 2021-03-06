<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/fontawesome.min.css">
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
	<title>Admin Dashboard</title>
</head>
<body>
<?php
include("../include/header.php"); 
include("../include/connection.php");
?>

<div class="container-fluid">
	<div class="col-md-12">
		<div class="row">
			<div class="col-md-2" style="margin-left: -30px;">
				<?php include"sidenav.php";  ?>
			</div>
			<div class="col-md-10">
				<h4>Admin Dashboard</h4>
				<div class="col-md-12 my-1">
					<div class="row">
			<div class="col-md-3 bg-success mx-2" style="height: 130px;">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-8">
							<?php
							$ad=mysqli_query($connect,"SELECT *FROM admin"); 
							$num=mysqli_num_rows($ad);
							?>
							<h5 class="my-2 text-white text-center" style="font-size: 30px;">0</h5>
							<h5 class="my-2 text-white text-center" style="font-size: 30px;">Total</h5>
							<h5 class="my-2 text-white text-center" style="font-size: 30px;">Admin</h5>
						</div>

						<div class="col-md-3">
							<a href="admin.php"><i class="fa users-cog fa-3x my-4;" style="color: white;"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 bg-success mx-1 my-1" style="height: 130px;" >
			
			<div class="col-md-12">
					<div class="row">
						<div class="col-md-8">
							<?php 
 							$doctor=mysqli_query($connect,"SELECT *FROM doctors WHERE status='Approved'");
 							$num2=mysqli_num_rows(doctors);
							 ?>
							<h5 class="my-2 text-white text-center" style="font-size: 30px;"><?php echo $num2 ?></h5>
							<h5 class="my-2 text-white text-center" style="font-size: 30px;">Total</h5>
							<h5 class="my-2 text-white text-center" style="font-size: 30px;">Doctor</h5>
						</div>

						<div class="col-md-3">
							<a href="doctor.php"><i class="fa users-cog fa-3x my-4;" style="color: white;"></i></a>
						</div>
					</div>
				</div>


			</div>
			<div class="col-md-3 bg-info mx-1 my-1" style="height: 130px;" >
						<div class="col-md-12">
					<div class="row">
						<div class="col-md-8">
							<?php  
							$p=mysqli_query($connect,"SELECT *FROM patient");
							$pp=mysqli_num_rows($p);

							?>
							<h5 class="my-2 text-white text-center" style="font-size: 30px;"><?php echo $pp; ?></h5>
							<h5 class="my-2 text-white text-center" style="font-size: 30px;">Total</h5>
							<h5 class="my-2 text-white text-center" style="font-size: 30px;">Patient</h5>
						</div>

						<div class="col-md-3">
							<a href=""><i class="fa users-cog fa-3x my-4;" style="color: white;"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 bg-warning mx-1 my-1" style="height: 130px;" >
						<div class="col-md-12">
					<div class="row">
						<div class="col-md-8">
							<?php
							$re=mysqli_query($connect,"SELECT *FROM report";)
							$rep=mysqli_num_rows($re);
							?>

							<h5 class="my-2 text-white text-center" style="font-size: 30px;"><?php echo $rep;  ?></h5>
							<h5 class="my-2 text-white text-center" style="font-size: 30px;">Total</h5>
							<h5 class="my-2 text-white text-center" style="font-size: 30px;">Report</h5>
						</div>

						<div class="col-md-3">
							<a href="report.php"><i class="fa users-cog fa-3x my-4;" style="color: white;"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 bg-danger mx-1 my-1" style="height: 130px;" >
						<div class="col-md-12">
					<div class="row">
						<div class="col-md-8">
							<?php 

								$job=mysqli_query($connect,"SELECT *FROM doctors WHERE status='Pending'");
								    $num1=mysqli_num_rows($job);
							 ?>
							<h5 class="my-2 text-white text-center" style="font-size: 30px;"><?php echo $num1;
							 ?></h5>
							<h5 class="my-2 text-white text-center" style="font-size: 30px;">Total</h5>
							<h5 class="my-2 text-white text-center" style="font-size: 30px;">Job Requset</h5>
						</div>

						<div class="col-md-3">
							<a href="job_request.php"><i class="fa users-cog fa-3x my-4;" style="color: white;"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 bg-warning mx-1 my-1" style="height: 130px;" >
						<div class="col-md-12">
					<div class="row">
						<div class="col-md-8">
							<?php
							$in=mysqli_query($connect,"SELECT sum(amount_paid) as profit FROM income");
							$row=mysqli_fetch_array($in);
							$inc=$row['profit'];


							?>
							<h5 class="my-2 text-white text-center" style="font-size: 30px;"><?php echo "$inc"; ?></h5>
							<h5 class="my-2 text-white text-center" style="font-size: 30px;">Total</h5>
							<h5 class="my-2 text-white text-center" style="font-size: 30px;">Income</h5>
						</div>

						<div class="col-md-3">
							<a href="income.php"><i class="fa users-cog fa-3x my-4;" style="color: white;"></i></a>
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