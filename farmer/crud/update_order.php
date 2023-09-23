<?php


	include 'session.php';

	if(isset($_POST['submit'])){
		$order_id = $_POST['order_id'];
		$status = $_POST['status'];
		$location = $_POST['city'].' '.$_POST['province'].' '.$_POST['street'];
		$remark = $_POST['remark'];

		
            
        $insert = "INSERT INTO ordertrackhistory(order_id,farmer_location, status, remark, postingDate) 
		VALUES ('$order_id', '$location','$status', '$remark', NOW())";
		if($conn->query($insert)){
			$_SESSION['success'] = 'Order In Process Successfully';

            $sql ="UPDATE orders SET orderStatus = '$status' Where order_id = '$order_id'  ";
            if($conn->query($sql)){
            }
       
		}
		else{
			$_SESSION['error'] = $conn->error;
		}


	}


	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	
    header('location: ../pending_order.php');

    ?>