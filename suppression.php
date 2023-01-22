<?php 

include('connection.php');

	echo $id= $_GET['id'];

	
	$sql="DELETE FROM participant WHERE Id=$id";
	$res= mysqli_query($connect, $sql);

	if ($res == TRUE) {
		
	    header("location:".SITEURL."liste.php");
	} else {
		
	    header("location:".SITEURL."liste.php");
	}

?>