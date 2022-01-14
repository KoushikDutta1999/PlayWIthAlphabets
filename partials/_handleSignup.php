<?php
  $showError="false";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        include '_dbconnect.php';
        $fname=$_POST['firstname'];
        $lname=$_POST['lastname'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $pass=$_POST['password'];
        $bday=$_POST['birthday'];

        $address=$_POST['address'];
        $city=$_POST['city'];
        $state=$_POST['state'];
        $zip=$_POST['zip'];


    $exitsql = "SELECT * FROM `user` WHERE `email`='$email'";
    $result = mysqli_query($conn, $exitsql);
    
    $numRows= mysqli_fetch_assoc($result);
    
    if($numRows>0){
        $showError="user name already exists";
    }
    else{
        // if($pass==$cpass){
            $hash=password_hash($pass,PASSWORD_DEFAULT);
            $sql="INSERT INTO `user` (`fname`, `lname`, `email`, `pass`, `address`, `pno`, `dob`, `city`, `state`, `zip`) VALUES ('$fname', '$lname', '$email', '$pass', '$address', '$phone', '$bday', '$city', '$state', '$zip')";
            
            // INSERT INTO `users` ( `user_email`, `user_pass`, `tstamp`) VALUES ( '$user_email', '$hash', current_timestamp())";
            $result = mysqli_query($conn, $sql);
            if($result){
                $showAlert= true;
                header("Location: /pwa/Login/?signupsuccess=true");
                exit();
            }
        // }
        // else{
        //     $showError="password do not match";
        //     header("Location: /forum/index.php?signupsuccess=true");
        // }
    }
    //echo 'unable to signup';
    header("Location: /pwa/signup/?signupsuccess=false");

}
        

?>