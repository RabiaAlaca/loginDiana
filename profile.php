
<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header('location:index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="">
    <title>R & D Covid-19 Beschuitzer</title>
     <link rel="shortcut icon" href="icons/logo.jpg"/>
</head>
<body>
    <!--nav bar--->
 <nav class="navbar navbar-expand-lg bg-dark navbar-dark navbar-fixed-top">
  <a class="navbar-brand" href="#"><img src="icons/logo.jpg" style="width:50px; height:50px; border-radius:50%;" alt="logo" class="img-fluid"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php"><i class="fas fa-home"></i> Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#"><i class="fas fa-box"></i> Product</a>
      </li>
    
       <li class="nav-item">
        <a class="nav-link" href="about.php"><i class="fa fa-info"></i> About</a>
      </li>  
       
       <li class="nav-item">
        <a class="nav-link" href="contact.php"><i class="fa fa-address-card"></i> Conact Us</a>
      </li>
    </ul>
    
    
    <ul class="navbar-nav ml-auto">
     <li class="nav-item">
       
                <div class="dropdown dropleft">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="cart_container"><i class="fas fa-shopping-cart"></i> Cart <span class="badge">0</span></a>
                 
                    <div class="dropdown-menu" style="width:400px;">
                        <div class="card p-2">
                           <div class="card-header">
                               <div class="row">
                                   <div class="col-md-3">Sl No</div>
                                   <div class="col-md-3">Product Image</div>
                                   <div class="col-md-3">Product Name</div>
                                   <div class="col-md-3">Price</div>
                               </div>
                           </div>
                            <div class="card-body">
                                <div id="cart_product">
                                    
                               
<!--
                                <div class="row">
                                   <div class="col-md-3">Sl No</div>
                                   <div class="col-md-3">Product Image</div>
                                   <div class="col-md-3">Product Name</div>
                                   <div class="col-md-3">Price in &#2547;</div>
                               </div>
-->
                            </div>
                            </div>
                        </div>
                    </div>
                    
                </div>                
                
         </li> 
      <li class="nav-item mr-4 px-4">
       
                <div class="dropdown dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"><?php  echo ' Hi, '.$_SESSION['username'].' ! '; ?></a>
                 
                   <ul class="dropdown-menu p-2">
                       <li><a href="cart.php" style="text-decoration:none;"><i class="fas fa-shopping-cart"></i> Cart</a></li><hr>
                       
                       <li><a href="logout.php" style="text-decoration:none;"><i class="fas fa-user-lock"></i> Logout</a></li>
                   </ul>
                    
                </div>                
                
         </li> 
       
     
    </ul>
    
  </div>
</nav>
   
   
   <!--main part-->
   
   
   <div class="container-fluid">
       <div class="row">
           <div class="col-md-1"></div>
           <div class="col-md-2 mt-2">
               <div class="card" id="get_category">
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
                
                

                
           </div>
           
           <div class="col-md-8">
               <div class="card mt-2">
                  <div class="card-header list-group-item-info">
                   <h3>Products</h3>
                  </div>
                  <div class="card-body" id="get_product">
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
           </div>
           
           <div class="col-md-1"></div>
       </div>
<!--       ----------2nd row-------------->
       <div class="row mt-2">
          <div class="col-4"></div>
          
           <div class="col-4">
              <ul class="pagination" id="pageno">
<!--
                  <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">Next</a></li>
-->
                </ul> 
               
           </div>
           
           <div class="col-4"></div>
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
    <script src="jq/custom.js"></script>
</body>
</html>