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
$validusername=$validuemail=$validpassword=$validuphone=$validufacebook=$validutwitter=$validuinstagram="";
$viewerrusername=$viewerruemail=$viewerrpassword=$viewerruphone=$viewerrufacebook=$viewerrutwitter=$viewerruinstagram="";
session_start();
if (isset($_SESSION['u_username'])){
    $viewElement="d-block";
    $viewerrusername=$_SESSION['u_username'];
    $validusername="is-invalid";  
}
if (isset($_SESSION['u_uemail'])){
    $viewElement="d-block";
    $viewerruemail=$_SESSION['u_uemail'];
    $validuemail="is-invalid";  
}
if (isset($_SESSION['u_password'])){
    $viewElement="d-block";
    $viewerrpassword=$_SESSION['u_password'];
    $validpassword="is-invalid" ; 
}
if (isset($_SESSION['u_uphone'])){
    $viewElement="d-block";
    $viewerruphone=$_SESSION['u_uphone'];
    $validuphone="is-invalid";  
}
if (isset($_SESSION['u_ufacebook'])){
    $viewElement="d-block";
    $viewerrufacebook=$_SESSION['u_ufacebook'];
    $validufacebook="is-invalid";  
}
if (isset($_SESSION['u_utwitter'])){
    $viewElement="d-block";
    $viewerrutwitter=$_SESSION['u_utwitter'];
    $validutwitter="is-invalid" ; 
} 
if (isset($_SESSION['u_uinstagram'])){
    $viewElement="d-block";
    $viewerruinstagram=$_SESSION['u_uinstagram'];
    $validuinstagram="is-invalid" ; 
}      
    

$_SESSION['u_username']="";
$_SESSION['u_uemail']="";
$_SESSION['u_password']="";
$_SESSION['u_uphone']="";
$_SESSION['u_ufacebook']="";
$_SESSION['u_utwitter']="";
$_SESSION['u_uinstagram']="";

session_unset();

?>
<body>
<?php require_once "navbar.php"; ?>

<div class="w-75 m-auto py-5 text-center ">
        <div >
            <img width="200" src="./imges/PHP_logo.png" alt="php logo">
        </div>
        <div>  
            <h1 class="my-5">Sign Up ....</h1> 
        </div>
        <div class="text-start ">
            <form method="post"  onclick="preventDefault()" action="./business_logic/handel_signup.php">
                <div class="mb-3">
                    <label class="fs-5 " for="username">User name</label>
                    <span class="text-danger ps-4 fs-5 fw-bolder <?php echo  $viewElement  ?> "><?php echo $viewerrusername ?></span>
                    <input type="text" class="form-control <?php echo $validusername ?>" id="username" name="username">
                </div>
                <div class="mb-3">
                    <label class="fs-5" for="password">password</label>
                    <label class="text-danger  ps-4 fs-5 fw-bolder   <?php echo  $viewElement  ?> "><?php echo $viewerrpassword ?></label>
                    <input type="password" class="form-control <?php echo $validpassword ?>" id="password" name="password">
                </div>
                <div class="mb-3">
                    <label class="fs-5" for="uemail">E-mail</label>
                    <label class="text-danger ps-4 fs-5 fw-bolder   <?php echo  $viewElement  ?> "><?php echo $viewerruemail ?></label>
                    <input type="text" class="form-control <?php echo $validuemail ?>" id="uemail" name="uemail">
                </div>
                <div class="mb-3">
                    <label class="fs-5" for="uphone">Phone No.</label>
                    <label class="text-danger ps-4 fs-5 fw-bolder   <?php echo  $viewElement  ?> "><?php echo $viewerruphone ?></label>
                    <input type="text" class="form-control <?php echo $validuphone ?>" id="uphone" name="uphone">
                </div>
                <div class="mb-3">
                    <label class="fs-5" for="ufacebook">Facebook URL</label>
                    <label class="text-danger ps-4 fs-5 fw-bolder   <?php echo  $viewElement  ?> "><?php echo $viewerrufacebook ?></label>
                    <input type="text" class="form-control <?php echo $validufacebook ?>" id="ufacebook" name="ufacebook">
                </div>
                <div class="mb-3">
                    <label class="fs-5" for="utwitter">Twitter URL</label>
                    <label class="text-danger ps-4 fs-5 fw-bolder   <?php echo  $viewElement  ?> "><?php echo $viewerrutwitter ?></label>
                    <input type="text" class="form-control <?php echo $validutwitter ?>" id="utwitter" name="utwitter">
                </div>
                <div class="mb-3">
                    <label class="fs-5" for="uinstagram">Instagram URL</label>
                    <label class="text-danger ps-4 fs-5 fw-bolder   <?php echo  $viewElement  ?> "><?php echo $viewerruinstagram ?></label>
                    <input type="text" class="form-control <?php echo $validuinstagram ?>" id="uinstagram" name="uinstagram">
                </div>
          
                <div class="text-center">
                
                    <div class="m-2 text-center d-inline-block">
                        <button class="btn btn-danger" name="Savebtn">Save</button>
                    </div>
                </div>
            </form>
        </div>
 
</div>
<script src="./js/bootstrap.bundle.js"></script>
</body>
</html>