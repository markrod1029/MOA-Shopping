<?php include('include/session.php')?>
<?php include('include/header.php')?>
<?php include('include/sidebar.php')?>
<?php include('include/menubar.php');
$today = date('Y-m-d');
 
?>

          
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
  <div class="content-wrapper">

  <section class="content-header">
  <h1 class="h3 mb-4 text-gray">Pending Order Transaction</h1>
        </section>




                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                        	<div class="row">
                        	<div class="col">
                            
                                <div class="card-body">

                                <div class="table-responsive">
                                <table class="table table-bordered text-center" id="example1" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Farmer ID</th>
                                            <th>Customer ID</th>
                                            <th>Date</th>
                                            <th>Total Quantity</th>
                                            <th>Total Amount</th>
                                            <th>Status</th>
                                            <th>Payment Method</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                    
                                    <?php 
                    $id = $user['id'];
                    $sql = "SELECT  DISTINCT order_id,total_q,total_p,orderDate,customer_id,orderStatus,paymentMethod,farmer_id FROM orders
                    WHERE  orderStatus != 'Delivered' AND  orderStatus != 'Cancel' AND orderStatus != 'wait' 
                     ";

                    $query = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($query)) 
                    {

                        $customerid = $row['customer_id'];
                        $sql1 = "SELECT * FROM customer WHERE id = $customerid";
    
                        $query1 = mysqli_query($conn, $sql1);
                        while ($row1 = mysqli_fetch_assoc($query1)) 
                        {
                            
                        $customer_id = $row1['customer_id'];

                        }

                        

                                $farmerid = $row['farmer_id'];
                        $sql2 = "SELECT * FROM farmer WHERE id = $farmerid";
    
                        $query2 = mysqli_query($conn, $sql2);
                        while ($row2 = mysqli_fetch_assoc($query2)) 
                        {
                        $farmer_id = $row2['farmerid'];

                        }

 
                        if($row["orderStatus"] == 'Pending')
                        {
                            $status = '<span class="badge badge-warning"  style="font-size:15px;">' . $row["orderStatus"] . '</span>';
                        }

                        if($row["orderStatus"] == 'In Process')
                        {
                            $status = '<span class="badge badge-primary " style="font-size:15px;">' . $row["orderStatus"] . '</span>';
                        }

                        if($row["orderStatus"] == 'Delivered')
                        {
                            $status = '<span class="badge badge-success"  style="font-size:15px;">' . $row["orderStatus"] . '</span>';
                        }

                  

                    ?>
                        <tr>
                        <td><?php echo $row['order_id'];?> </td>
                        <td><?php echo $farmer_id;?></td>
                        <td><?php echo $customer_id;?></td>
                        <td><?php echo $row['orderDate'];?></td>
                        <td><?php echo $row['total_q']?></td>
                        <td><?php echo $row['total_p']?></td>
                        <td><?php echo $status?></td>
                        <td><?php echo $row['paymentMethod']?></td>


                    

                  
                    
                    <?php
                            }
                    ?>

                        </tr>        


                                        
                                    </tbody>
                                </table>
                            </div>


                                </div>
                            </div>
                        </div>
                        </div>
                    </div>





    </div>


<?php include 'include/footer.php'; ?>
</div>



</body>
</html>



<style>
#gmap_canvas{
    width:100%; 
}
@media (max-width: 667px) {      
#gmap_canvas{
   position:absolute;
   top:450px;
   width:90%; 

left:10px;
  }
          }


  </style>