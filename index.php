<?php 
$active='home';
include('includes/header.php');
?>

    <!-- ------------------------------------------navbar finish--------------------------------------------->

       <!-- ------------------------------------------carousel begin--------------------------------------------->
     
    <div class="container-fluid">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="admin_area/slides_images/slider1.jpg" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="admin_area/slides_images/slider2.jpg" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="admin_area/slides_images/slider3.jpg" alt="New york" style="width:100%;">
      </div>
      <div class="item">
        <img src="admin_area/slides_images/slider4.jpg" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>
  <!-- ------------------------------------------carousel end--------------------------------------------->
  <!-- ------------------------------------------box start--------------------------------------------->
  <div id="advantages"><!----advantages begin----->
      <div class="container"><!----container begin----->
          <div class="same-height-row"><!----same-height-row begin----->
             <div class="col-sm-4" data-aos="fade-right" data-aos-delay="200"><!----col-sm-4 begin----->
                 <div class="box same-height"><!----box same-height begin----->
                    <div class="icon"><!----icon begin----->
                       <i class="fa fa-thumbs-up"></i>
                    
                    </div><!----icon finish----->
                  
                   <h3><a href="#">Best Offer</a></h3>
                   <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus, illo.</p>
                 </div><!----box same-height finish----->   
             
             </div><!----col-sm-4 finish----->
             <div class="col-sm-4"><!----col-sm-4 begin----->
                 <div class="box same-price"><!----box same-height begin----->
                    <div class="icon"><!----icon begin----->
                       <i class="fa fa-heart"></i>
                    
                    </div><!----icon finish----->
                  
                   <h3><a href="#">Best Price</a></h3>
                   <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus, illo.</p>
                 </div><!----box same-height finish----->   
             
             </div><!----col-sm-4 finish----->
             <div class="col-sm-4"><!----col-sm-4 begin----->
                 <div class="box same-height"><!----box same-height begin----->
                    <div class="icon"><!----icon begin----->
                       <i class="fa fa-tag"></i>
                    
                    </div><!----icon finish----->
                  
                   <h3><a href="#">100% Original</a></h3>
                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, blanditiis.</p>
                 </div><!----box same-height finish----->   
             
             </div><!----col-sm-4 finish----->
             

          </div><!----same-height-row begin----->
      
      </div><!----container finish----->

  </div><!----advantages finish----->
   <!-- ------------------------------------------box end--------------------------------------------->
 <!-- ------------------------------------------Our Product Begin--------------------------------------------->
<div id="hot"><!----#hot begin----->
    <div class="box"><!----box begin----->
       <div class="container-fluid"><!----container begin----->
          <div class="col-md-12"><!----col-md-12 begin----->

          <h2>Our Product</h2>
            
          </div><!----col-md-12 finish----->

       </div><!----#container finish----->
      
    </div><!----#ox finish----->

</div><!----#hot finish----->


<div id="content" class="container"><!----content begin----->
   <div class="row"><!----row begin----->
   <?php 
    getPro();
   ?>
   </div><!----row finish----->

</div><!----content finish----->
 <!-- ------------------------------------------Our Product Begin--------------------------------------------->

   <?php 
   include('includes/footer.php');
   ?>
</body>
</html>