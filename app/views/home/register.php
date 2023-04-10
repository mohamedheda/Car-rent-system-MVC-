<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="/design/css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 16px;
      color: #eee;
      }
      body {
      background: url("/uploads/media/default/0001/01/b5edc1bad4dc8c20291c8394527cb2c5b43ee13c.jpeg") no-repeat center;
      background-size: cover;
      }
      h1, h2 {
      text-transform: uppercase;
      font-weight: 400;
      }
      h2 {
      margin: 0 0 0 8px;
      }
      .main-block {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100%;
      padding: 25px;
      background: rgba(0, 0, 0, 0.5); 
      }
      .left-part, form {
      padding: 25px;
      }
      .left-part {
      text-align: center;
      }
      .fa-graduation-cap {
      font-size: 72px;
      }
      form {
      background: rgba(0, 0, 0, 0.7); 
      border-radius: 3%;
      }
      .title {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
      }
      .h11 {
        text-align: center;
        color: #146ee0;
      }
      .h12 {
        text-align: center;
        color: #000;
      }
      .info {
      display: flex;
      flex-direction: column;
      }
      input, select {
      padding: 5px;
      margin-bottom: 30px;
      background: transparent;
      border: none;
      border-bottom: 1px solid #eee;
      }
      input::placeholder {
      color: #eee;
      }
      option:focus {
      border: none;
      }
      option {
      background: black; 
      border: none;
      }
      .checkbox input {
      margin: 0 10px 0 0;
      vertical-align: middle;
      }
      .checkbox a {
      color: #26a9e0;
      }
      .checkbox a:hover {
      color: #85d6de;
      }
      .btn-item, button {
      padding: 10px 5px;
      margin-top: 20px;
      border-radius: 5px; 
      border: none;
      background: #26a9e0; 
      text-decoration: none;
      font-size: 15px;
      font-weight: 400;
      color: #fff;
      }
      .btn-item {
      display: inline-block;
      margin: 20px 5px 0;
      }
      button {
      width: 100%;
      }
      button:hover, .btn-item:hover {
      background: #85d6de;
      }
      @media (min-width: 568px) {
      html, body {
      height: 100%;
      }
      .main-block {
      flex-direction: row;
      height: calc(100% - 50px);
      }
      .left-part, form {
      flex: 1;
      height: auto;
      }
      }
    </style>
</head>
<body>
      <div class="row">
        <div class="col text-align-center">
            <br>
            <h1 class="h11">Welcome to our website</h1>
            <h5 class="h12">Do you want to rent a car ? register now..</h5>
            <br>
        </div>
      </div>
      
      <form action="/user/store" method="POST">
        <div class="title">
          <i class="fas fa-pencil-alt"></i> 
          <h2>Register </h2>
        </div>
        <div class="info">
          <input class="fname" type="text" name="name" placeholder="enter your name"  value="<?php if(!empty($_POST)){echo $_POST['name'];}?>"> 
          <input class="fname" type="text" name="email" placeholder="enter your email"  value="<?php if(!empty($_POST)){echo $_POST['email'];}?>">
          <input type="text" name="password" placeholder="enter a password" value="<?php if(!empty($_POST)){echo $_POST['password'];}?>">
        </div>
        <?php 
        if(!empty($errors) ){
          foreach($errors as $error){?>
            <span class="alert alert-danger"><?=$error?></span><br><br>
          <?php }
        }
        ?>
    <button>Register</button>
<br>
        <br>
        
        <p>Have an account? <a href="login">Login Now</a></p>
      </form>
</body>
</html>