<?php
	include 'session.php';
	
	$id = $_GET['id'];
		$sql = "DELETE FROM farmer WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Farmer Deleted successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	header('location: ../farmer.php');
	
?>