<?php
$products= [
    'product 1' => [
     'price' => '1200',
     'img' => '1.png',
     'desc' => 'Helw'
     ],
     'product 2' => [
     'price' => '2200',
     'img' => '2.png',
     'desc' => 'Hadek'
     ],
     'product 3' => [
        'price' => '3200',
        'img' => '3.png',
        'desc' => 'Nos Helw'
     ],
     'product 4' => [
        'price' => '420',
        'img' => '4.png',
        'desc' => 'Nos Hadek'
        ],
        'product 5' => [
        'price' => '52000',
        'img' => '5.png',
        'desc' => 'Mesh Helw'
        ],
        'product 6' => [
           'price' => '6200',
           'img' => '6.png',
           'desc' => 'Mesh Hadek'
        ]
     ];
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">

</head>
<body>
<?php require_once "navbar.php"; ?>
<div class="container-fluid text-center">
<div class=" row  container">
<?php foreach ($products as $key => $value){ ?>
<div class="col-4">
    <div class="card " >
     <img src="./imges/<?php echo ($value['img']) ?>" width="100px" height="100px" class="card-img-top" alt="<?php echo  $key ?>">
      <div class="card-body">
       <h5 class="card-title"><?php echo  $key ?></h5>
       <p class="card-text"><?php echo $value['desc'] ?></p>
       <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
</div>

<?php } ?>
</div>
</div>

<script src="./js/bootstrap.bundle.js"></script>

</body>
</html>