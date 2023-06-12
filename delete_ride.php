<?php
include 'includes/dbcon.php';
if (isset($_GET['deleteid'])) {
	$id=$_GET['deleteid'];
	$sql= "delete from `ridess` where id=$id";
	$result=mysqli_query($con,$sql);

	if ($result) {

		//echo "Supprimer avec success";
	     header('driver_dashboard.php');
	}else{
        die(mysqli_error($con));
    }

}
?>