<?php

include("../include/connection.php");
$query="SELECT *FROM doctors WHERE status='Pending'ORDER BY date_reg ASC";
$res=mysqli_query($connect,$query);
$output="";
$output.="
<table class='table table-bordered'>
<tr>
<th>ID</th>
<th>Firstname</th>
<th>Surname</th>
<th>Username</th>
<th>Email</th>
<th>Gender</th>
<th>Phone</th>
<th>Country</th>
<th>Date Registered</th>
</tr>

</table>

";

if (mysqli_num_rows($res)<1) 
{
	$output.="
	<tr>
	<td colspan='8'>No Job Request Yet..</td>
	</tr>
	";
}
while ($row=mysqli_fetch_array($res)) 
{
	$output.="
    <tr>
<td>".$row['id']."</td>
<td>".$row['firstname']."</td>
<td>".$row['surname']."</td>
<td>".$row['username']."</td>
<td>".$row['email']."</td>
<td>".$row['gender']."</td>
<td>".$row['phone']."</td>
<td>".$row['country']."</td>
<td>".$row['date_reg']."</td>
<td>".$row['']."</td>
<td>
<div class='col-md-12'>
<div class='row'>
<div class='col-md-6'>
<button id='.$row['id']'."'class='btn btn-success approve'>Approve</button>
</div>
<div class='col-md-6'>
<button id='.$row['id']'."'class='btn btn-danger reject'>Reject</button>
</div>
</div>
</div>
 </td>     
	";
}
$output .="
</tr>
</table>
";

?>