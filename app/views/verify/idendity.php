<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        label[for="file-upload"] {
  background-color: #fcd535;
  border-radius: 5px;
  color: #fff;
  cursor: pointer;
  display: inline-block;
  font-size: 16px;
  padding: 10px 20px;
  transition: background-color 0.3s ease;
}

label[for="file-upload"]:hover {
  background-color: #0069d9;
}


button {
  background-image: linear-gradient(to bottom, #fcd535, #fcd535);
  border: none;
  border-radius: 5px;
  color: #fff;
  cursor: pointer;
  display: inline-block;
  font-size: 16px;
  padding: 10px 20px;
  transition: background-color 0.3s ease;
}

button:hover {
  background-image: linear-gradient(to bottom, #0069d9, #005cbf);
}

button:focus {
  outline: none;
  box-shadow: 0 0 0 3px rgba(0, 123, 255, 0.5);
}
.error-message {
  display: block;
  color: red;
  margin-bottom: 10px;
}
    </style>
    <link rel="stylesheet" href="/design/css/bootstrap.css">
</head>
<body>
<?php 
require_once('navbar.php');
?>
<h3>
<div class="container mt-5">
    <h1 style="color:#fcd535;font-size:75px">ID Card</h1>
<p>Take pictures of both sides of your government issued ID card
</p>
<img src="https://bin.bnbstatic.com/static/images/kyc/overview-id-card-icon2.png" style="width: 25%;" alt="">
<br>
<br>
<ul >
    <li >Upload a complete image of your ID document.</li>
    <li >Ensure all details are readable in the image you upload.</li>
    <li >Ensure the document is the original and has not expired.</li>
    <li >Place documents against a solid-colored background.</li>
</ul>
<br>
<br>
<div class="container">
  <form action="strategyType" method="POST" enctype="multipart/form-data">
    <input type="hidden"  name="id" value="<?= $_POST['id'] ?>">
    <input type="hidden" name="hours" value="<?= $_POST['hours'] ?>">
    <input type="hidden" name="identity" value="<?= $_POST['identity'] ?>">
    <label for="file-upload">Choose a front image :</label>
  <input type="file" id="file-upload" name="front">
  <br>
  <label for="file-upload">Choose a back image:</label>
  <input type="file" id="file-upload" name="back">
  <br>
  <br>

  <?php 
  if(!empty($error)){?>
    <div class="error-message"><?=$error ?></div>
  <?php }
  ?>
</div>


  <button>Submit</button>
</form>
</div>




<script src="/design/js/popper.min.js"></script>
<script src="/design/js/jquery-3.6.3.min.js"></script>
<script src="/design/js/bootstrap.js"></script>
</body>
</html>