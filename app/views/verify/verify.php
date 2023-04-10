<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <style>
.radio-selection {
  background-color: #fff;
  border: 2px solid #0077b6;
  border-radius: 10px;
  padding: 20px;
  margin: 20px;
}

.radio-selection h2 {
  color: #0077b6;
  font-size: 24px;
  margin-bottom: 10px;
}


input[type="radio"] + label {
  display: inline-block;
  cursor: pointer;
  padding: 10px;
  border-radius: 5px;
  border: 2px solid #0077b6;
  margin-bottom: 10px;
  transition: all 0.3s ease-in-out;
}

input[type="radio"] + label:hover {
  background-color: #0077b6;
  color: #fff;
}

input[type="radio"]:checked + label {
  background-color: #0077b6;
  color: #fff;
}


.checkmark {
		  position: absolute;
		  top: 0;
		  left: 0;
		  height: 25px;
		  width: 25px;
		  background-color: #eee;
		  border-radius: 50%;
		}

		.container:hover input ~ .checkmark {
		  background-color: #ccc;
		}

		.container input:checked ~ .checkmark {
		  background-color: #2196F3;
		}

		.checkmark:after {
		  content: "";
		  position: absolute;
		  display: none;
		}

		.container input:checked ~ .checkmark:after {
		  display: block;
		}

		.container .checkmark:after {
		  top: 9px;
		  left: 9px;
		  width: 8px;
		  height: 8px;
		  border-radius: 50%;
		  background: white;
		}


.button-container {
  text-align: center;
}

.button {
  background-color: #0077b6;
  border: none;
  border-radius: 5px;
  color: white;
  font-size: 16px;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 10px;
  cursor: pointer;
  box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4);
  transition: all 0.2s ease-in-out;
}

.button:hover {
  background-color: #0077b6;
  transform: scale(1.05);
}



    </style>
</head>
<body>
<?php 
require_once('navbar.php');
?>

    <div class="radio-selection">
        <form action="/verify/verifyStrategy" method="POST">
          <input type="hidden" name="id" value="<?= $id?>">
          <input type="hidden" name="hours" value="<?= $hours?>">
        <h2>Identity Verify</h2>
    <input type="radio" id="id" name="identity" value="id">
    <label for="id">ID</label><br>

    <input type="radio" id="passport" name="identity" value="passport">
    <label for="passport">Passport</label><br>

    <input type="radio" id="driving-license" name="identity" value="driving-license">
    <label for="driving-license">Driving License
        
    </label>
    <br>
<div class="button-container">
  <button  class="button">Choose</button>
</div>
 
</form>
</div>




</body>
</html>