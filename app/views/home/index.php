
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="/design/css/bootstrap.css">
    <style>
      h3 {
         margin: 25px;
         text-align: center;
         color: #146ee0;
         font-size: xx-large;
      }
      .col {
         display: inline;
      }
    </style>
</head>
<body>
<?php 
require_once('navbar.php');
?>
<br>
<br>
<br>
<br>
<h3>
   Availbale cars
</h3>

<div class="container ">
  <div class="row justify-content-center">
   <?php foreach($cars as $car){ ?>
  <div class="card text-center mr-5 mb-5" style="width: 18rem;">
  <img src="<?=$car['img'] ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?=$car['name'] ?></h5>
    <p class="card-text"><?=$car['discription'] ?></p>
    <p class="card-text " >$<?=$car['cost'] ?> / hour</p>
    <a href="/home/rent/?id=<?=$car['id'] ?>" class="btn btn-primary">Rent</a>
  </div>
</div>
      <?php } ?>
  </div>
</div>



    
<script src="/design/js/popper.min.js"></script>
<script src="/design/js/jquery-3.6.3.min.js"></script>
<script src="/design/js/bootstrap.js"></script>
</body>
</html>




