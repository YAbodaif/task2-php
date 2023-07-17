<?php

if(isset($_POST['Savebtn']))
{
  $username=htmlspecialchars(trim($_POST['username']));
  $password=htmlspecialchars(trim($_POST['password']));
  $uemail=htmlspecialchars(trim($_POST['uemail']));
  $uphone=htmlspecialchars(trim($_POST['uphone']));
  $ufacebook=htmlspecialchars(trim($_POST['ufacebook']));
  $utwitter=htmlspecialchars(trim($_POST['utwitter']));
  $uinstagram=htmlspecialchars(trim($_POST['uinstagram']));

//validate user Name
      if(empty($username))
      {$err_username="User Name Is required";}
      elseif(! is_string($username))
      {$err_username="User Name must be string ";}

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
      
//validate Phone
if(empty($uphone))
{$err_uphone="Phone Is required";}
elseif(! is_string($uphone))
{$err_uphone="phone must be string ";}
elseif(strlen($uphone)<11)
{$err_uphone="phone must be 11 No.";}
elseif(!filter_var($uphone,FILTER_VALIDATE_REGEXP,array( "options" => array("regexp" => "/[0-9]/"))))
      {$err_uphone="Phone must be Number Digets only ";}

//validate facebook
if(empty($ufacebook))
{$err_ufacebook="Facebook Is required";}
elseif(! is_string($ufacebook))
{$err_ufacebook="Facebook url must be string ";}
elseif(!filter_var($ufacebook,FILTER_VALIDATE_URL))
{$err_ufacebook="Facebook URL Is Not Valid";}

//validate twitter
if(empty($utwitter))
{$err_utwitter="twitter Is required";}
elseif(! is_string($utwitter))
{$err_utwitter="twitter url must be string ";}
elseif(!filter_var($utwitter,FILTER_VALIDATE_URL))
{$err_utwitter="twitter URL Is Not Valid";}

//validate instagram
if(empty($uinstagram))
{$err_uinstagram="instagram Is required";}
elseif(! is_string($uinstagram))
{$err_uinstagram="instagram url must be string ";}
elseif(!filter_var($uinstagram,FILTER_VALIDATE_URL))
{$err_uinstagram="twitter URL Is Not Valid";}

 //catch error
 if(! isset($err_username) && ! isset($err_uemail) && ! isset($err_password) && ! isset($err_uphone) && ! isset($err_ufacebook) && ! isset($err_utwitter) && ! isset($err_uinstagram)){
 session_start();
 $_SESSION['u_username']=$username;
 $_SESSION['u_password']=$password;
 $_SESSION['u_email']=$uemail;
 $_SESSION['u_uphone']=$uphone;
 $_SESSION['u_ufacebook']=$ufacebook;
 $_SESSION['u_utwitter']=$utwitter;
 $_SESSION['u_uinstagram']=$uinstagram;
 header('location:../index.php');

 }
 else
 {
   session_start();
   if (isset($err_username)) {  $_SESSION['u_username']=$err_username;}
   if (isset($err_uemail))   {$_SESSION['u_uemail']=$err_uemail;}
   if (isset($err_password)) {  $_SESSION['u_password']=$err_password;}
   if (isset($err_uphone))   {$_SESSION['u_uphone']=$err_uphone;}
   if (isset($err_ufacebook))   {$_SESSION['u_ufacebook']=$err_ufacebook;}
   if (isset($err_utwitter))   {$_SESSION['u_utwitter']=$err_utwitter;}
   if (isset($err_uinstagram))   {$_SESSION['u_uinstagram']=$err_uinstagram;}

     header("location:../signup.php");
  }


}


