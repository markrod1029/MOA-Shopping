<?php include('include/session.php')?>
<?php include('include/header.php')?>
<?php include('include/sidebar.php')?>
<?php include('include/menubar.php')?>

          
  <div class="content-wrapper">

        <section class="content-header">
            <h1 class="h3 mb-4 text-gray">Password Setting</h1>
        </section>


        
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

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                        	<div class="row">
                            <div class="col">
                                    <h6 class="h3 m-0 font-weight-bold text-success">Password Info</h6>

                            	</div>
                            </div>
                        </div>
                        <div class="card-body">

                        <form  class="form-horizontal" method="POST" action="crud/password_update.php" enctype="multipart/form-data" id="doctor_form">

                        <center><img class="img-circle" src="../images/logo.png" width="150px" height="150px">
                        
                        
                            
                    
                                    <div class="form-group  row mt-4 ">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label text-muted">Current Password </label>

                                    <div class="input-group col-sm-6 col-xs-11">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-cog"></i></span></div>
                                        <input type="text" class="form-control" name="old" id="title"  placeholder="Current Password Here" required="">
                                </div>
                                </div>

                                <div class="form-group  row ">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label text-muted">New Password</label>

                                    <div class="input-group col-sm-6 col-xs-11">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-cog"></i></span></div>
                                        <input type="text" class="form-control" name="new" id="title" placeholder="New Password Here" required="">
                                </div>
                                </div>

                                <div class="form-group  row ">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label text-muted">Confirm Password </label>

                                    <div class="input-group col-sm-6 col-xs-11">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-cog"></i></span></div>
                                        <input type="text" class="form-control" name="confirm" id="title"  placeholder="Confirm Password Here" required="">
                                </div>
                                </div>


                            


                                </center>
                                </div>
                                <div class="modal-footer">
                                    <input type="submit" name="submit" id="submit_button" class="btn btn-success" value="Update" />
                                    <button type="reset" class="btn btn-default">Reset</button>
                                </div>
                        </form>

                        </div>
                    </div>
    </div>



</div>



<?php include 'include/footer.php' ?>

</div>


</body>
</html>


