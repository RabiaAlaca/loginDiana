
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
   
    <title>R &amp; D Covid-19 Beschuitzer</title>
     <link rel="shortcut icon" href="icons/logo.jpg"/>
</head>
<body>
   
   
<?php
session_start();
if(isset($_SESSION['user_id'])){
    header('location:profile.php');
}
include './template/signup_modal.php';
include './template/signin_modal.php';

?>

    <!--nav bar--->
 <nav class="navbar navbar-expand-lg  navbar-dark" uk-sticky="top: 100; animation: uk-animation-slide-top; bottom: #sticky-on-scroll-up" style="z-index:111;">
  <a class="navbar-brand" href="#"><img src="icons/logo.jpg" style="width:50px; height:50px; border-radius:50%;" alt="logo" class="img-fluid"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse " id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active text-outline-dark" href="#"><i class="fas fa-home"></i> Home</a>
      </li>
    
       <li class="nav-item">
        <a class="nav-link" href="about.php"><i class="fa fa-info"></i> About</a>
      </li>  
       
       <li class="nav-item">
        <a class="nav-link" href="contact.php"><i class="fa fa-address-card"></i> Conact Us</a>
      </li>
    
    </ul>

   
    
    <ul class="nav navbar-nav ml-auto">
     
       
      <li class="nav-item">
      <div class="btn-group">
       <button type="button" class="btn btn-outline-primary btn-sm mr-1" data-toggle="modal" data-target="#exampleModal">
          <i class="fas fa-lock"></i> Sign In
        </button>


        <a class="nav-link btn btn-outline-success btn-sm" href="customer_reg.php" data-toggle="modal" data-target="#signup"><i class="fas fa-user-plus"></i> Sign Up</a>
        </div>
      </li>
    </ul>
    
  </div>
</nav>
   
        
<!-- =====regitration success message======  -->
         <?php

            if(isset($_GET['msg'])){

            ?>

            <div class="alert alert-success alert-dismissible fade show mx-auto" role="alert" style="width:410px; margin-bottom:0;">
              <?php echo $_GET['msg']; ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <?php  
            }
            ?>

<!-- ======  header=========-->
    <div id="header" class="d-none d-md-block">
        
   </div>
   
   <!--==========main part============-->
   
   
   <div class="container-fluid">
       <div class="row">
           <div class="col-md-1"></div>
           <div class="col-md-3">
               <div class="card shadow my-2" id="get_category">
<!--
                  <div class="card-header bg-primary text-light">
                    <h4 class="text-center">Categories</h4>
                  </div>
-->
                  <div class="card-body">
                     <ul class="list-group list-group-flush">
<!--
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus acin</li>
                        <li class="list-group-item">Vestibulum at</li>
-->
                      </ul>
                  </div>
                </div>
                              
                              
                               
        <!-- =================  Hot offer =============  -->
                               
                               
                               
            <div class="card shadow my-2" id="get_category">

                  <div class="card-header text-light" style="background-color: palevioletred">
                    <h4 class="text-center"><i class="fab fa-hotjar"></i> Hot Offer</h4>
                  </div>

                  <div class="card-body">
                   <img src="icons/index.png" class="align-center" alt="" style="width:70px; height:60px;"><br>
                     <em>Use coupoun code <kbd>ANhBA</kbd> to get 45% discount</em>
                  </div>
                </div>
                <!-- =================End Hot offer =============  -->
                
                
                 <!-- =================  Admin =============  -->
                               
                               
                               
            <div class="card shadow my-2" id="get_category">

                  <div class="card-header text-light bg-secondary">
                    <h4 class="text-center"><i class="fas fa-user-cog"></i> Admin</h4>
                  </div>

        <div class="card-body">
            <form action="admin_action.php" method="post" id="admin_login_form">
          
             
              <input type="email" class="form-control" id="ad_email" name="email" placeholder="Enter email" required>
             
              <input type="password" class="form-control mt-1" id="ad_password" name="password" placeholder="Enter password" required>
             
           
         
            <button class="btn btn-secondary btn-block btn-sm text-center mt-2" id="admin_btn" name="admin_btn" type="submit">Log In</button>
        

            </form>
                  </div>
                </div>
                <!-- =================!End Admin =============  -->
                        
    <!-- =================  Sologan =============  -->
                               
                               
                               
            <div class="card shadow my-2 sologan" id="get_category">

                 <h4 class="py-4 text-center "><i class="fas fa-soap"></i> Join In, <br>Safe Out</h4>
                </div>
                <!-- =================!End discount =============  -->
                
                
           </div>
           
           <div class="col-md-7">
               <div class="card mt-2 shadow my-2">
                 
                 <h3 class="px-3 mt-2">New Products</h3> <hr>
                  <div class="card-body" id="get_index_product">
                  
<!--
                      <div class="row">
                          <div class="col-md-4">
                            <div class="card mt-2">
                              <div class="card-header list-group-item-info">
                               Samsung Galaxy s6
                              </div>
                              <div class="card-body" >
                                <img style="width:100%;height:100%;" src="img/samsung-galaxy-mobile-png-4.png" alt="" >
                                 
                              </div>
                              <div class="card-footer">
                                   6000&#2547; <button class="btn btn-danger btn-sm" style="float:right;">Add to cart</button>
                              </div>
                            </div>
                      </div>
                    </div>
-->
                 
                 
                  </div>
             
                 
                </div>
                
                
<!--                featured product-->
                
                <div class="card mt-2 shadow my-2">
                 
                 <h3 class="px-3 mt-2">Featured Products</h3> <hr>
                  <div class="card-body" id="featured_product">
                  
<!--

                      <div class="row">
                          <div class="col-md-4">
                            <div class="card mt-2">
                             
                              <div class="card-body" >
                                <img style="width:180px;height:150px;" src="img/samsung-galaxy-mobile-png-4.png" alt="" >
                                 
                              </div>
                              <p class="p-2 text-center">Samsung Galaxy s6 -  6000 <i class='fas fa-euro-sign'></i></p>
                            
                            </div>
                      </div>
                    </div>
-->

                  </div>
                 
                </div>
                
                <em class="text-center text-muted">*Please login first before adding a product to Cart</em>
           </div>
           
           <div class="col-md-1"></div>
       </div>
   </div>
   

   
 <!--   footer-->
  <?php
     include './template/footer.php';
    ?>
  
 
    
    <script src="https://kit.fontawesome.com/e0862f3c22.js" crossorigin="anonymous"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>
    <script src="jq/admin.js"></script>
    <script src="jq/custom.js"></script>
</body>
</html>