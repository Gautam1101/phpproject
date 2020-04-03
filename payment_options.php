<div class="box" style="padding:30px"><!------box strat-->
<?php 
 $session_email=$_SESSION['customer_email'];
 $select_customer = "select * from customers where customer_email='$session_email'";
 $run_customer = mysqli_query( $con,$select_customer);
 $row_customer = mysqli_fetch_array($run_customer );
 $customer_id = $row_customer['customer_id'];


?>
   <h1 class="text-center">Payment option</h1>
   <p class="lead text-center"><!------text-center strat-->
      <a href="orders.php?c_id=<?php  echo $customer_id ?>">ofline</a>
   </p><!------text-center finish-->
   <p class="lead">
     <a href="#">Paypal Payment
        <img src="images/paypall_img.png" alt="" class="img-responsive">
     </a>
   </p>

</div><!------box finish-->