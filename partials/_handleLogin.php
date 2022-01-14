<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
         include '_dbconnect.php';
         $email=$_POST['email'];
         $password=$_POST['password'];
    $sql="SELECT * FROM `user` WHERE `email`='$email'&&`pass`='$password'";
    $result=mysqli_query($conn,$sql);
    $numrows=mysqli_num_rows($result);
    if($numrows==1){
            session_start();
            $_SESSION['loggedin']=true;
            $_SESSION['loginEmail']=$user_email;
            //echo "login".$user_email;
            header("Location:/pwa/mainpage/?loginsuccess=true");
        }
           else{

            header("Location: /pwa/Login/index.php?Loginsuccess=false");
           }
       
    
}
?>



<?php
//     $showError="false";
//     if($_SERVER["REQUEST_METHOD"]=="POST"){
//         include '_dbconnect.php';
//         $email=$_POST['email'];
//         $password=$_POST['password'];
//         $sql= "SELECT * FROM `user` WHERE  email= '$email'"; 
//         $result = mysqli_query($conn, $sql);
//         $numRows= mysqli_num_rows($result);
//       // print_r ($numRows);
//         if($numRows){
//             $row = mysqli_fetch_assoc($result);
            
//            if($password==$row['pass']){
//               // echo "ok";
//             session_start();
//             $_SESSION['loggedin']=true;
//             $_SESSION['sno']=$row['sno'];
//             $_SESSION['email']=$email;
//             echo "logg in". $email;               
//            }            
//         header("Location: /pwa/main.php");
      
//      }
//      header("Location: /pwa/Login/index.php?Loginsuccess=false");
           
        
// }
        
 ?>    