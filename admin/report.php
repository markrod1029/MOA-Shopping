<?php include('include/session.php')?>
<?php include('include/header.php')?>
<?php include('include/sidebar.php')?>
<?php include('include/menubar.php');
$today = date('M-d-Y-D');
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
                                            <th>Customer ID</th>
                                            <th>Date</th>
                                            <th>Total Quantity</th>
                                            <th>Total Amount</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                    <?php 
                    $id = $user['id'];
                    $sql = "SELECT  DISTINCT order_id,total_q,total_p,orderDate,customer_id,orderStatus FROM orders
                    WHERE  orderStatus = 'Delivered'                    
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

 

                        if($row["orderStatus"] == 'Delivered')
                        {
                            $status = '<span class="badge badge-success"  style="font-size:15px;">' . $row["orderStatus"] . '</span>';
                        }

                  

                    ?>
                        <tr>
                        <td><?php echo $row['order_id'];?> </td>
                        <td><?php echo $customer_id;?></td>
                        <td><?php echo $row['orderDate'];?></td>
                        <td><?php echo $row['total_q']?></td>
                        <td><?php echo $row['total_p']?></td>
                        <td><?php echo $status?></td>

                    

                    <div align="center">
                    <td>
                    <a  name="edit" href="view_order.php?id=<?php echo $row['order_id']?>" class="btn btn-primary btn-circle btn-sm" ><i class="fas fa-eye"></i></a>
                    </div>
                    </td>
                    
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