<?php
	session_start();
	include 'include/conn.php';

	if(!isset($_SESSION['farmer']) || trim($_SESSION['farmer']) == ''){
		header('location: home.php');
	}

	$sql = "SELECT * FROM farmer WHERE id = '".$_SESSION['farmer']."'";
	$query = $conn->query($sql);
	$user = $query->fetch_assoc();
	
?>