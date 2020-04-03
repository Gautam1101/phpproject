<?php 
$active='cart';
include('includes/header.php');
?>
<div id="content"><!--content  strat -->
    <div class="container"><!--container  strat -->
        <div class="col-md-12"><!--col-md-12  strat -->
          <ul class="breadcrumb">
              <li> <a href="index.php">Home</a></li>
              <li>Cart</li>
          </ul>

        </div><!--col-md-12  finsh -->
        <div id="cart" class="col-md-9"><!--col-md-9  strat -->
            <div class="box"><!--box  strat -->
                <form action="cart.php" method="post" enctype="multipart/form-data">
                <h1> Shopping Cart</h1>
                <?php 
                  $ip_add=getRealIpUser();
                  $select_cart = "select * from cart  where ip_add = '$ip_add'";
                  $run_cart = mysqli_query($con,$select_cart);
                  $count = mysqli_num_rows($run_cart);

                ?>
                <p class="text-muted">Currently you have <?php echo $count; ?> item</p>
                <div class="table-responsive"><!--table-responsive  strat -->
                   <table class="table"><!--table  strat -->
                       <thead><!--thead  strat -->
                           <tr>
                               <th colspan="2">Product</th>
                               <th>Quantity</th>
                               <th>Unit Price</th>
                               <th >Size</th>
                               <th colspan="1">Delete</th>
                               <th colspan="1">Sub-Total</th>
                           </tr>
                       </thead><!--thead  finish -->
                         <tbody class="text-center"><!--tbody  strat -->
                         <?php 
                         $total=0;
                           while($row_cart=mysqli_fetch_array($run_cart)){

                            $pro_id = $row_cart['p_id'];
                            $pro_size = $row_cart['size'];
                            $pro_qty = $row_cart['qty'];

                            $get_products = "select * from products where product_id = '$pro_id'";
                            $run_products = mysqli_query($con, $get_products);
                            while($row_products=mysqli_fetch_array($run_products)){
                                $product_title = $row_products['product_title'];
                                $product_img1 = $row_products['product_img1'];
                                $only_price = $row_products['product_price'];
                                $sub_total = $row_products['product_price'] * $pro_qty;
                                $total += $sub_total;

                         ?>
                         <tr>
                             <td >
                                 <img src="admin_area/product_images/<?php echo  $product_img1;  ?>" class="img-responsive" alt="">
                             </td>
                             <td>
                             <a href="details.php/pro_id=$pro_id"><?php echo $product_title; ?></a>
                             </td>
                             <td>
                             <?php echo  $pro_qty; ?>
                             </td>
                             <td>
                             <?php echo  $only_price; ?>
                             </td>
                             <td>
                             <?php echo $pro_size;  ?>
                             </td>
                             <td>
                                 <input type="checkbox" name="remove[]" value="<?php echo $pro_id; ?>">
                             </td>
                             <td>
                             <?php echo $sub_total;  ?>
                             </td>
                         </tr>
                              <?php  
                           }}
                              ?>
                         </tbody><!--tbody  finish -->
                        
                        
                         <tfoot><!--tfoot  begin -->
                              <th colspan="5">Total</th>
                              <th colspan="2"><?php echo $sub_total;  ?></th>

                         </tfoot><!--tfoot  finish -->

                   </table><!--table  finish -->

                </div><!--table-responsive  finish -->

                <div class="box-footer"><!--box-footer  begin -->
                    <div class="pull-left"><!--pull-left  begin -->
                    <button type="submit" name="update" value="Update Cart" class="btn btn-default"><!--btn btn-default begin -->
                          
                       <i class="fa fa-refresh"></i> Update Cart

                    </button><!--btn btn-default begin -->
                   
                    </div><!--pull-left  finish -->
                    <div class="pull-right"><!--pull-left  begin -->
                        
                        <a href="index.php" class="btn btn-default">
                       <i class="fa fa-chevron-left"></i> Continue Shopping

                         </a><!--btn btn-default begin -->
                         <a href="index.php" class="btn btn-primary">preccessed Checkout
                       <i class="fa fa-chevron-right"></i>

                         </a><!--btn btn-default begin -->


                    </div><!--pull-left  finish -->
                </div><!--box-footer  finish -->
            
            </form>
         </div><!--box  finish -->
         <?php 
         function update_cart(){
             global $con;
             if(isset($_POST['update'])){
                 foreach($_POST['remove'] as $remove_id){
                     $delete_product = "delete from cart where p_id='$remove_id'";
                     $run_delete = mysqli_query($con, $delete_product);
                     if( $run_delete){
                         echo"
                         <script>window.open('cart.php','_self'); </script>;
                         ";
                     }

                 }
             }


         }

         echo @$up_cart = update_cart();
         ?>
        
        </div><!--col-md-9  finish -->

        <div class="col-md-3"><!--col-md-3 strat -->
           <div id="order-summary" class="box"><!--order-summary strat -->
               <div class="box-header"><!--box-header strat -->
                 <h2 class="text-center pt1">Order Summary</h2>
               <p class="text-muted">Shapping and delivery cost are calculated based on value Enter</p>

               <div class="table-responsive"><!--table-responsive strat -->
                   <table class="table"><!--table strat -->
                        <tbody class="text-center"><!--tbody strat -->
                        <tr>
                            <th>Sub Rotal</th>
                            <td><?php echo $sub_total;?></td>
                        </tr>
                        <tr>
                            <th>Shipping Handling</th>
                            <td>$0</td>
                        </tr>
                        <tr>
                            <th>Tax</th>
                            <td>$0</td>
                        </tr>
                        <tr>
                            <th>Total</th>
                            <td><?php echo '$'.$sub_total;  ?></td>
                        </tr>

                        </tbody><!--tbody finish -->

                   </table><!--table finish -->
                   
               </div><!--table-responsive strat -->
               </div><!--box-header finish -->
           </div><!--order-summary finish -->

        </div><!--col-md-3  finish -->
     </div><!--content  finish -->
</div><!--container  finish -->

<!-- footer start  -->
<?php 
include('includes/footer.php');
?>
<!-- footer finish -->