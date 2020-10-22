<?php 

include 'db.php';
session_start();
//
//-------------login--------------
//


if(isset($_POST['log_email']) && isset($_POST['log_password'])){
        
        $email = $_POST['log_email'];
        $pass = md5($_POST['log_password']); 
        
        $sql = "select * from login where email='$email' and password='$pass'";
        
        $res = $con->query($sql);
        
        
        if($res->num_rows>0){
            while($row = $res->fetch_assoc()){
                $_SESSION['user_id']=$row['user_id'];
                $_SESSION['username']=$row['username'];
                $_SESSION['email']=$row['email'];
                $_SESSION['password']=$row['password'];
                $_SESSION['cell_no']=$row['cell_no'];
               
                $sub_qry = "insert login_details set
                        user_id = '".$row['user_id']."' ";
                $con->query($sub_qry);
                $_SESSION['login_details_id'] = $con->insert_id; 
                 echo 5;
            }
            
            
                 
            }
        
           
           
        }
        
       
?>