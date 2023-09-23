<?php
include('include/config.php');


?>
<?php include('include/header.php');?>

    <body class="cnt-home">
	
		
	
    <!-- ============================================== HEADER ============================================== -->
<header class="header-style-1">
<?php include('include/top-header.php');?>
<?php include('include/main-header.php');?>
<?php include('include/menu-bar.php');?>

<div class="body-content outer-top-xs" id="top-banner-and-menu">
	<div class="container">
		<div class="furniture-container homepage-container">
            <div class="row">


                    <div class="col-xs-12 col-lg-12 col homebanner-holder">
                        <div id="hero" class="homepage-slider3">
                            <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-lf">
                                <div class="full-width-slider">	
                                    <div class="item" style="background-image: url(assets/images/sliders/corn.jpg);">
                                        <!-- /.container-fluid -->
                                    </div><!-- /.item -->
                                </div><!-- /.full-width-slider -->
                                
                                <div class="full-width-slider">
                                    <div class="item full-width-slider" style="background-image: url(assets/images/sliders/farm.jpg);">
                                    </div><!-- /.item -->
                                </div><!-- /.full-width-slider -->

                            </div><!-- /.owl-carousel -->
                        </div>
                    </div>
            </div>

            <div id="product-tabs-slider" class="scroll-tabs inner-bottom-vs  wow fadeInUp">
                <div class="more-info-tab clearfix">
                <h3 class="new-product-title pull-left">Featured Products</h3>
                    <ul class="nav nav-tabs nav-tab-line pull-right" id	="new-products-1">
                        <li class="active"><a href="#all" data-toggle="tab">All</a></li>
                        <li><a href="#Crops" data-toggle="tab">Crops</a></li>
                        <li><a href="#Vegtables" data-toggle="tab">Vegtables</a></li>
                        <li><a href="#Fruits" data-toggle="tab">Fruits</a></li>
                    </ul><!-- /.nav-tabs -->
                </div>

                <div class="tab-content outer-top-xs">
				<div class="tab-pane in active" id="all">			
					<div class="product-slider">
						<div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">

                    
                        <?php
							$ret=mysqli_query($conn,"select * from farmer");
							while ($row=mysqli_fetch_array($ret)) 
							{
								# code...


							?>
<div class="item item-carousel">
			<div class="products">
				
	<div class="product">		
		<div class="product-image">
			<div class="image">
				<a href="visit_shop.php?id=<?php echo htmlentities($row['id']);?>">
				<img  src="<?php echo (!empty($row['shop_logo']))? 'images/'.$row['shop_logo']:'images/admin.png'; ?>" data-echo="<?php echo (!empty($row['shop_logo']))? 'images/'.$row['shop_logo']:'images/admin.png'; ?>"  width="130" height="250" style ="border-radius:50%;"alt=""></a>
			</div>		

		</div>
			
		
		<div class="product-info text-left" style="position:relative;left:18px;">
			<h3 class="name"><a href="visit_shop.php??id=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['shop_name']);?></a></h3>
			<div class="rating rateit-small"></div>
			<div class="description"></div>
			<div class="action"><a href="visit_shop.php?id=<?php echo $row['id']; ?>" class="lnk btn btn-primary">Visit Shop</a></div>


			
			
		</div>
				
			</div>
      
			</div>
		</div>
	<?php } ?>
	
		
								

        </div>

    </div>
</div>
<?php include('include/brands-slider.php');?>

<?php include('include/script.php');?>

</body>
</html>


