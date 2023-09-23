<?php include('include/session.php')?>
<?php include('include/header.php')?>
<?php include('include/sidebar.php')?>
<?php include('include/menubar.php')?>

          <script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>

  <div class="content-wrapper">

        <section class="content-header">
            <h1 class="h3 mb-4 text-gray">Product List</h1>
        </section>


        
        <?php
$ID = $_GET['id'];
 $view = "SELECT * from products where id = '$ID'";
 $result = $conn->query($view);
 $view = $result->fetch_assoc();
  
 ?>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                        	<div class="row">
                            	<div class="col">
                                    <h6 class="h3 m-0 font-weight-bold text-success">Product Info</h6>

                            	</div>
                            </div>
                        </div>
                        <div class="card-body">

                            <form  class="form-horizontal" method="POST" action="crud/update_product.php" enctype="multipart/form-data" id="doctor_form">
        
                            <div class="form-group  row" style="display:none;">
                                <label for="fname" class="col-sm-2 text-right control-label col-form-label text-muted">Farmer  </label>

                                    <div class="input-group col-sm-8 col-xs-11">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-tag"></i></span></div>
                                        <input type="text" class="form-control" name="farmer_id" id="title" placeholder="Category Name Here" value="<?php echo $user['id']?>" required="">
                                </div>
                                </div>


                                <div class="form-group  row" style="display:none;">
                                <label for="fname" class="col-sm-2 text-right control-label col-form-label text-muted"> Category  </label>

                                    <div class="input-group col-sm-8 col-xs-11">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-tag"></i></span></div>
                                        <input type="text" class="form-control" name="category" id="title" placeholder="Category Name Here" value="<?php echo $user['shop_category']?>" required="">
                                </div>
                                </div>






                    
                            <div class="input-group mb-3 ">
                        <label for="cono1" class="col-sm-2 text-right control-label col-form-label text-muted">Category Name</label>

                        
                        <div class="input-group col-sm-8 col-xs-11">

                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-tag"></i></span></div>
                        <select type = "text" class="form-control" name="subcategory" id="subcategory" class="span8 tip"  >
                        <?php
                        $id = $user['id'];
                         $query=mysqli_query($conn,"SELECT * FROM subcategory WHERE farmer_id=$id");
                                            while($row=mysqli_fetch_array($query))
                                            {?>

                                            <option value="<?php echo $row['id'];?>"> <?php echo $row['subcategory'];?></option>
                                            <?php } ?>
                                    
                                    
                                    
                                    </select>
                        </div>
                    </div>




                                <div class="form-group  row">
                                <label for="fname" class="col-sm-2 text-right control-label col-form-label text-muted">Product Name </label>

                                    <div class="input-group col-sm-8 col-xs-11">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-shopping-basket"></i></span></div>
                                        <input type="text" class="form-control" name="pname" id="title" placeholder="Product Name Here" value="<?php echo $view['productName'];?>" required="">
                                </div>
                                </div>


                                <div class="form-group  row">
                                <label for="fname" class="col-sm-2 text-right control-label col-form-label text-muted">Product Price </label>

                                    <div class="input-group col-sm-8 col-xs-11">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa">₱</i></span></div>
                                        <input type="number" class="form-control" name="price" id="title" placeholder="Product Price Here"  value="<?php echo $view['productPrice'];?>" required="">
                                </div>
                                </div>

                                
                                <div class="form-group row ">

                                    <label for="fname" class="col-sm-2 text-right control-label col-form-label text-muted">Product Description</label>
                                    <div class="input-group col-sm-8 col-xs-11">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-at"></i></span></div>
                                        
                                        <textarea rows="3" class="form-control " name="description" id="description" required> <?php echo $view['productDescription'];?></textarea>

                                    </div>


                                    </div>

                                    
                                <div class="form-group  row">
                                <label for="fname" class="col-sm-2 text-right control-label col-form-label text-muted">Quantity </label>

                                    <div class="input-group col-sm-8 col-xs-11">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-tag"></i></span></div>
                                        <input type="number" class="form-control" name="quantity" id="title" placeholder="Quantity Here"  value="<?php echo $view['quantity'];?>" required="">
                                </div>
                                </div>



                                
                                <div class="form-group  row">
                                <label for="fname" class="col-sm-2 text-right control-label col-form-label text-muted">Product Image </label>

                                    <div class="input-group col-sm-8 col-xs-11">
                                <div id="uploaded_image"></div>
                                    <input type="file" name="photo1" id="photo" />

                                <input type="hidden" name="photo1" id="photo" />
                                </div>
                                </div>

                                
                                
                      
                                

                                
                                </div>
                                <div class="modal-footer">
                                <input type="hidden" class="form-control" name="id" id="title" placeholder="State Here" required="" value="<?php echo $view['id'];?>">
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


