<?php


	include 'conn.php';

	if(isset($_POST['submit'])){
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$contact = $_POST['number'];
		$street = $_POST['street'];
		$city = $_POST['city'];
		$state = $_POST['province'];
		$id = $_POST['id'];



			$fileinfo=PATHINFO($_FILES["photo1"]["name"]);
			$newFilename=$fileinfo['filename']. "." . $fileinfo['extension'];
			move_uploaded_file($_FILES["photo1"]["tmp_name"],'../../images/' .$newFilename);
			$location = $newFilename;
	
           

		$fileinfo=PATHINFO($_FILES["shop_logo"]["name"]);
        $newFilename=$fileinfo['filename']. "." .$fileinfo['extension'];
        move_uploaded_file($_FILES["shop_logo"]["tmp_name"],'../../images/' .$newFilename);
        $location1 = $newFilename;

			
        

        if(empty($location) && empty($location1) &&  $location == '.' && $location1 == '.' ){
            
			
			
			$sql = "UPDATE farmer SET fname = '$fname', lname = '$lname', 
            email = '$email', contact = '$contact', street = '$street', city = '$city', state = '$state' WHERE id = '$id'";
   

		
          }


		 else if(empty($location) && $location == '.'   ){
			$sql = "UPDATE farmer SET  fname = '$fname',  lname = '$lname', email = '$email', contactno = '$contact',
			street = '$street', city = '$city', state = '$state', shop_logo = '$location1'  WHERE id = '$id'";
		
			
		  }


		  else if(!empty($location1) && $location1 == '.' ){

			
		$sql = "UPDATE farmer SET photo = '$location',  fname = '$fname',  lname = '$lname', email = '$email', contactno = '$contact',
			street = '$street', city = '$city', state = '$state' WHERE id = '$id'";
		  }
          else{

			$sql = "UPDATE farmer SET photo = '$location',  fname = '$fname',  lname = '$lname', email = '$email', contactno = '$contact',
			street = '$street', city = '$city', state = '$state', shop_logo = '$location1'  WHERE id = '$id'";
		
		
        
	}

	if($conn->query($sql)){
		$_SESSION['success'] = 'Admin Updated successfully';
	}
	else{
		$_SESSION['error'] = $conn->error;
	}


}






	else{
		$_SESSION['error'] = 'Fill up add form first';
	}



	
    header('location: ../profile.php');

    ?>