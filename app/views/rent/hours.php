<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select hours</title>
    <style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f2f2f2;
			margin: 0;
			padding: 0;
		}

		.container1 {
			margin: 50px auto;
			width: 400px;
			background-color: #fff;
			padding: 20px;
			border-radius: 5px;
			box-shadow: 0px 0px 5px #ccc;
		}

		h2 {
			text-align: center;
			margin-top: 0;
		}
        .container form {
            width: 100%;
        }
		.container input[type="text"] {
			display: block;
			width: 100%;
			padding: 10px;
			border: none;
			border-bottom: 2px solid #ccc;
			background-color: transparent;
			transition: border-bottom-color 0.2s ease-in-out;
			font-size: 16px;
		}

		input[type="text"]:focus {
			border-bottom-color: #2196F3;
			outline: none;
		}



        .container {
			margin: 50px auto;
			width: 600px;
			background-color: #fff;
			padding: 20px;
			border-radius: 5px;
			box-shadow: 0px 0px 5px #ccc;
			display: flex;
			flex-wrap: wrap;
			justify-content: space-between;
			align-items: stretch;
		}

		.card {
			flex: 1 1 300px;
			margin: 10px;
			background-color: #fff;
			border-radius: 5px;
			box-shadow: 0px 0px 5px #ccc;
			overflow: hidden;
		}

		.card img {
			display: block;
			width: 100%;
			height: 200px;
			object-fit: cover;
		}

		.card .content {
			padding: 20px;
		}

		.card h3 {
			margin-top: 0;
			margin-bottom: 10px;
			font-size: 24px;
		}

		.card p {
			margin: 0;
			font-size: 16px;
			line-height: 1.5;
			color: #666;
		}

		.card .price {
			font-size: 24px;
			font-weight: bold;
			color: #2196F3;
			margin-top: 10px;
            text-align: center;
		}


        .btn {
  background-color: #2196F3;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  font-size: 16px;
  cursor: pointer;
  transition: background-color 0.5s;
  margin-top: 15px;
}

.btn:hover {
  background-color: #333;
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

    <div class="container1">
		<div class="card">
			<img src="<?=$car['img'] ?>" alt="Card Image">
			<div class="content">
				<h3><?=$car['name'] ?></h3>
				<p><?=$car['discription'] ?></p>
				<div class="price">$<?=$car['cost'] ?></div>
			</div>
		</div></div>
<div class="container">
		<h2>How many hours do you rent this car?</h2>
        <form action="/rent/hours" method="POST">
        <input type="text" name="hours" placeholder="Enter number of hours">
        <input type="hidden" name="id" value="<?=$car['id'] ?>">
        <div class="error-message"><?php if(!empty($errors)){
            foreach($errors as $error){
                echo $error;
            }
        } ?></div>
        <button class="btn">Select</button>
        </form>
	
	</div>
</body>
</html>