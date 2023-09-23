
<?php
  session_start();
  if(isset($_SESSION['farmer'])){
    header('location:farmer/home.php');

  }


?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Municipal Agriculture Office</title>
      <meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<!-- Tell the browser to be responsive to screen width -->
  	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
      <link rel="stylesheet" href="css/admin_login.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Toast -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

   </head>
   <body>
   <form action="farmer_action.php" method="post">
      <div class="bg-img">
         <div class="content">
             
            <header>Farmer Login Form</header>
                 
            <?php
        if(isset($_SESSION['error'])){
          echo"
              <script type='text/javascript'>
              toastr.error('".$_SESSION['error']."', 'Error')
              toastr.options.timeOut = 3000;
              </script>
              
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
           
          <script type='text/javascript'>
          toastr.success('".$_SESSION['success']."', 'Success')
          toastr.options.timeOut = 3000;
          </script>
          ";
          unset($_SESSION['success']);
        }
      ?>
           <div class="field">
                  <span class="fa fa-user"></span>
                  <input type="email" name="email"  required placeholder="email">
               </div>
               <div class="field space">
                  <span class="fa fa-lock"></span>
                  <input type="password" name="password" class="pass-key" required placeholder="Password">
                  <span class="show">SHOW</span>
               </div>
               <br>
<a onclick="myFunction()">Forgot Password?</a>

<script>
function myFunction() {
  alert("Please Contact Developer");
}
             </script>
              <br><br>
               <div class="field">
                  <input type="submit" name="login" value="Login">
               </div>

             <br>

             <span class="register">Log in Form  <a href="admin_login.php" class ="register">Admin Here</a></span>


            <br>
             <div class="pass">
                  <a href="index.php"><span class="glyphicon glyphicon-menu-left text-decoration-none"></span>Go Back</a>
               </div>
            
         </div>
         </form>
      <script>
         const pass_field = document.querySelector('.pass-key');
         const showBtn = document.querySelector('.show');
         showBtn.addEventListener('click', function(){
          if(pass_field.type === "password"){
            pass_field.type = "text";
            showBtn.textContent = "HIDE";
            showBtn.style.color = "#3498db";
          }else{
            pass_field.type = "password";
            showBtn.textContent = "SHOW";
            showBtn.style.color = "#222";
          }
         });
      </script>

	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</body>
    
</html>

<style>

.bg-img{
  background: url('home_images/bg.jpg');
  height: 100vh;
  background-size: cover;
  background-position: center;
}

.register{
color:white;

}

a{
    text-decoration:none !important;
}
    </style>