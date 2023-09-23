<?php include('include/session.php')?>
<?php include('include/header.php')?>
<?php include('include/sidebar.php')?>
<?php include('include/menubar.php')?>

          <script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>

  <div class="content-wrapper">

        <section class="content-header">
            <h1 class="h3 mb-4 text-gray">Shop List</h1>
        </section>





                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                        	<div class="row">
                            	<div class="col">
                                    <h6 class="h3 m-0 font-weight-bold text-success">Shop Info</h6>

                            	</div>
                            </div>
                        </div>
                        <div class="card-body">
                        <form  class="form-horizontal" method="POST" action="crud/update_shop.php" enctype="multipart/form-data" id="doctor_form">

                        
                        <?php
$ID = $_GET['id'];
 $view = "SELECT * from farmer_shop where id = '$ID'";
 $result = $conn->query($view);
 $row = $result->fetch_assoc();
  
 ?>


                                <div class="form-group  row">
                                <label for="fname" class="col-sm-2 text-right control-label col-form-label text-muted">Farmer Shop Name </label>

                                    <div class="input-group col-sm-8 col-xs-11">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-shopping-basket"></i></span></div>
                                        <input type="text" class="form-control" name="farmer_name" id="title" placeholder="Farmer Shop Here" value="<?php $row['shop_logo'];?>" required="">
                                </div>
                                </div>


                            

                                
                                <div class="form-group row ">

                                    <label for="fname" class="col-sm-2 text-right control-label col-form-label text-muted">Shop Description</label>
                                    <div class="input-group col-sm-8 col-xs-11">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-at"></i></span></div>
                                        
                                        <textarea rows="3" class="form-control " name="description" id="description" required><?php $row['shop_description']?></textarea>

                                    </div>


                                    </div>

                                    
                            


                                
                                <div class="form-group  row">
                                <label for="fname" class="col-sm-2 text-right control-label col-form-label text-muted">Product Image </label>

                                    <div class="input-group col-sm-8 col-xs-11">
                                <div id="uploaded_image"></div>
                                    <input type="file" name="photo" id="photo" />

                                <input type="hidden" name="photo" id="photo" />
                                </div>
                                </div>

                                
                              

                                

                                
                                </div>
                                <div class="modal-footer">
                                <input type="hidden" class="form-control" name="farmer_id" id="title" value="<?php echo $user['id']?>" required="">

                                    <input type="submit" name="submit" id="submit_button" class="btn btn-success" value="Add" />
                                    <button type="reset" class="btn btn-default">Reset</button>
                                </div>
                        </form>

                
                        </div>
                    </div>
    </div>



</div>



<?php include 'include/footer.php' ?>


<script>
function getSubcat(val) {
	$.ajax({
	type: "POST",
	url: "get_subcat.php",
	data:'cat_id='+val,
	success: function(data){
		$("#subcategory").html(data);
	}
	});
}
function selectCountry(val) {
$("#search-box").val(val);
$("#suggesstion-box").hide();
}
</script>	
</body>
</html>


