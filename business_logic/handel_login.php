<?php

if(isset($_POST['loginbtn']))
{
  // $username=htmlspecialchars(trim($_POST['username']));
  $password=htmlspecialchars(trim($_POST['password']));
  $uemail=htmlspecialchars(trim($_POST['uemail']));

//validate user Name
      // if(empty($username))
      // {$err_username="User Name Is required";}
      // elseif(! is_string($username))
      // {$err_username="User Name must be string ";}

//validate E-mail
      if(empty($uemail))
      {$err_uemail="E-mail Is required";}
      elseif(! is_string($uemail))
      {$err_uemail="E-mail must be string ";}
      elseif(!filter_var($uemail,FILTER_VALIDATE_EMAIL))
      {$err_uemail="Email Is Not Valid";}

//Validate Password
      if(empty($password))
      {$err_password="Password Is required";}
      elseif(! is_string($password))
      {$err_password="Password must be string ";}
      elseif(!filter_var($password,FILTER_VALIDATE_REGEXP,array( "options" => array("regexp" => "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/"))))
      {$err_password="password must be Minimum eight characters, at least one uppercase letter, one lowercase letter and one number ";}

 //catch error
 if( ! isset($err_uemail) & ! isset($err_password)){
 session_start();
 $_SESSION['u_email']=$uemail;
 $_SESSION['u_password']=$password;
 header('location:../allproducts.php');

 }
 else
 {
   session_start();
   if (isset($err_username)) {  $_SESSION['err_username']=$err_username;}
   if (isset($err_uemail))   {$_SESSION['err_uemail']=$err_uemail;}
   if (isset($err_password)) {  $_SESSION['err_password']=$err_password;}
     header("location:../login.php");
  }


}

