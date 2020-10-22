<?php
session_start();
include 'db.php';



//-------------register----------------

if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['cell']) && isset($_POST['address'])){
   
    $error = 0;
   
    $check = "select * from login where email='$_POST[email]' ";
    $rs = $con->query($check);
    if($rs->num_rows>0){

        
        $error = 1;
        echo $error;
       
        
    }
    
    if($error==0){
       
        function check($x){
            global $con;
            $removeSpace = trim($x);
            $removeSlash = stripslashes($removeSpace);
            $y = mysqli_real_escape_string($con, $removeSlash);
            return $y;
            
        }
   
        
        
        $name = check($_POST['username']);
        $pass=check($_POST['password']);
        $mdpass =md5($pass);    
        $email = check($_POST['email']);
        $cell = check($_POST['cell']);
        $address= check($_POST['address']);

       
        $userValue = "INSERT login set 
            username='$name',
            email='$email', 
            cell_no='$cell', 
            address='$address',
            password='$mdpass'";
    
    
      
        $con->query($userValue);
        $last_id = $con->insert_id; 
    
        $sqlSelect = "SELECT * FROM login WHERE user_id = '$last_id' ";
        $result = $con->query($sqlSelect);
        
 
  }
    
}


?>