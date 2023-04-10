
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Rents</title>
    <link rel="stylesheet" href="/design/css/bootstrap.css">
    <style>
      h3 {
         text-align: left;
         color: #146ee0;
         font-size: xx-large;
      }
      .col {
         display: inline;
      }
      .input-group {
    display: flex;
    flex-direction: column;
    margin-bottom: 20px;
  }
  
  label {
    font-weight: bold;
    margin-bottom: 5px;
  }
  
  input[type="text"], textarea {
    padding: 10px;
    border: none;
    border-radius: 5px;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
    font-size: 16px;
    color: #333;
    margin-bottom: 10px;
  }
  
  input[type="text"]::placeholder, textarea::placeholder {
    color: #999;
  }
  
  input[type="text"]:focus, textarea:focus {
    outline: none;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
  }
  .amazing-button {
  background-color: #146ee0;
  color: #fff;
  border: none;
  border-radius: 5px;
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
  transition: all 0.3s ease;
}

.amazing-button:hover {
  background-color: #fff;
  color: #146ee0;
  border: 2px solid #146ee0;
  box-shadow: 0 0 10px #146ee0;
  transform: scale(1.1);
}
.error-message {
  display: block;
  color: red;
  margin-bottom: 10px;
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


<div class="container ">
<h3>please rate us :</h3>
<br>
<form action="addRate" method="POST">
    <div class="input-group">
      <label for="name">availability:</label>
      <input type="text" id="availability" name="availability" placeholder=" availability">
    </div>
    
    <div class="input-group">
      <label for="email">credibility:</label>
      <input type="text" id="credibility" name="credibility" placeholder=" credibility">
    </div>
    
    <div class="input-group">
      <label for="attitude">attitude:</label>
      <textarea id="attitude" name="attitude" placeholder=" attitude"></textarea>
    </div>
    <?php 
  if(!empty($errors)){
  foreach($errors as $error){?>
    <div class="error-message"><?=$error ?></div>
  <?php }}
  ?>
    <button class="amazing-button">Submit</button>
  </form>
</div>




    
<script src="/design/js/popper.min.js"></script>
<script src="/design/js/jquery-3.6.3.min.js"></script>
<script src="/design/js/bootstrap.js"></script>
</body>
</html>




