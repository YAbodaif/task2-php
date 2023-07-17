<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">

</head>


<?php
$viewElement="d-none";
$validusername=$validuemail=$validpassword="";
$viewerrusername=$viewerruemail=$viewerrpassword="";
session_start();
if (isset($_SESSION['err_username'])){
    $viewElement="d-block";
    $viewerrusername=$_SESSION['err_username'];
    $validusername="is-invalid";  
}
if (isset($_SESSION['err_uemail'])){
    $viewElement="d-block";
    $viewerruemail=$_SESSION['err_uemail'];
    $validuemail="is-invalid";  
}
if (isset($_SESSION['err_password'])){
    $viewElement="d-block";
    $viewerrpassword=$_SESSION['err_password'];
    $validpassword="is-invalid" ; 
}
       
    

$_SESSION['err_username']="";
$_SESSION['err_uemail']="";
$_SESSION['err_password']="";

session_unset();

?>
<body>
<?php require_once "navbar.php"; ?>

<div class="w-75 m-auto py-5 text-center ">
        <div >
            <img width="200" src="./imges/PHP_logo.png" alt="php logo">
        </div>
        <div>  
            <h1 class="my-5">Login to system....</h1> 
        </div>
        <div class="text-start ">
            <form method="post" action="./business_logic/handel_login.php">
                <div class="mb-3">
                    <label class="fs-5 " for="username">User name</label>
                    <span class="text-danger ps-4 fs-5 fw-bolder <?php echo  $viewElement  ?> "><?php echo $viewerrusername ?></span>

                    <input type="text" class="form-control <?php echo $validusername ?>" id="username" name="username">
                </div>
                <div class="mb-3">
                    <label class="fs-5" for="uemail">E-mail</label>
                    <label class="text-danger ps-4 fs-5 fw-bolder   <?php echo  $viewElement  ?> "><?php echo $viewerruemail ?></label>
                    <input type="text" class="form-control <?php echo $validuemail ?>" id="uemail" name="uemail">
                </div>
                <div class="mb-3">
                    <label class="fs-5" for="password">password</label>
                    <label class="text-danger  ps-4 fs-5 fw-bolder   <?php echo  $viewElement  ?> "><?php echo $viewerrpassword ?></label>

                    <input type="password" class="form-control <?php echo $validpassword ?>" id="password" name="password">
                </div>
                <div class="text-center">
                    <div class="m-2 text-center d-inline-block">
                        <button class="btn btn-danger" name="loginbtn">Login</button>
                    </div>
                    <div class="m-2 text-center d-inline-block">
                        <button class="btn btn-danger" name="signupbtn">Sign up</button>
                    </div>
                </div>
            </form>
        </div>
 
</div>
<script src="./js/bootstrap.bundle.js"></script>
</body>
</html>