<?php 
$active='contact';
include('includes/header.php');
?>

<div id="content"><!--content  strat -->
    <div class="container"><!--container  strat -->
        <div class="col-md-12"><!--col-md-12  strat -->
          <ul class="breadcrumb">
              <li> <a href="index.php">Home</a></li>
              <li>Contact</li>
          </ul>

        </div><!--col-md-12  finsh -->

        <div class="col-md-3"><!--col-md-3 start -->
        <?php 
          include('includes/sidebar.php')
        ?>
        </div><!--col-md-3 finish -->
        <div class="col-md-9"><!--col-md-9 start -->
            <div class="box"><!--box start -->
                <div class="box-header"><!--box-header start -->
                   <center><!--center start -->
                     <h2>fell free to contact us</h2>
                     <p class="text-muted">
                         if you have any qustion feel free to  ask us  our service availble24/7
                     </p>

                   </center><!--center finish -->
                   <form action="contact.php" method="post"><!--form begin -->
                       <div class="form-group"><!--form-group begin -->
                           <label for="#">Name</label>
                             <input type="text" class="form-control" name="name" required>
                        </div><!--form-group finish -->
                        <div class="form-group"><!--form-group begin -->
                           <label for="#">Email</label>
                             <input type="email" class="form-control" name="email" required>
                        </div><!--form-group finish -->
                        <div class="form-group"><!--form-group begin -->
                           <label for="#">Subject</label>
                             <input type="text" class="form-control" name="subject" required>
                        </div><!--form-group finish -->
                        <div class="form-group"><!--form-group begin -->
                           <label for="#">Message</label>
                            <textarea name="message" id="#" cols="10" rows="4" class="form-control"></textarea>
                        </div><!--form-group finish -->
                        <div class="text-center"><!--text-center begin -->
                        <button type="submit" name="submit" class="btn btn-primary">
                        <i class="fa fa-user-md"></i> Send Message</button>
                            
                        </div><!--text-center finish -->

                   </form><!--form finish -->

                   <?php 
                       
                       if(isset($_POST['submit'])){
                           
                           /// Admin receives message with this ///
                           
                           $sender_name = $_POST['name'];
                           
                           $sender_email = $_POST['email'];
                           
                           $sender_subject = $_POST['subject'];
                           
                           $sender_message = $_POST['message'];
                           
                           $receiver_email = "manmohankumar023@gmail.com";
                           
                           mail($receiver_email,$sender_name,$sender_subject,$sender_message,$sender_email);
                           
                           /// Auto reply to sender with this ///
                           
                           $email = $_POST['email'];
                           
                           $subject = "Welcome to my website";
                           
                           $msg = "Thanks for sending us message. ASAP we will reply your message";
                           
                           $from = "manmohankumar023@gmail.com";
                           
                           mail($email,$subject,$msg,$from);
                           
                           echo "<h2 align='center'> Your message has sent sucessfully </h2>";
                           
                       }
                       
                       ?>

                </div><!--box-header finish -->

            </div><!--box finish -->
        </div><!--col-md-9 finish -->





  </div><!--container  finish -->
  </div><!--content  finish -->


<!-- footer start  -->
<?php 
include('includes/footer.php');
?>
<!-- footer finish -->