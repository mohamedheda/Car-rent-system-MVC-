<!DOCTYPE html>
<html>
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: 'Raleway', sans-serif;
    }
ul {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  z-index: 999;
  list-style-type: none;
  margin: 0;
  padding: 5px;
  overflow: hidden;
  background-color: #333;
}

li {
  float: right;
}
ul h3  {
   float: left;
   margin: 0;
   color: white;
   padding-top: 15px;
   padding-bottom: 15px;
   padding-left: 35px;
}

li a {
  font-size: medium;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  padding-top: 25px;

}

li a:hover {
  background-color: #146ee0;
  text-decoration: none;
  color: white;
}
</style>
</head>
<body>

<ul>
  
<i class="fa-solid fa-car"></i>
    <h3>CAR</h3>
  <li><a class="active" href="/user/logout">Logout</a></li>
  <li><a href="/home/index">Home</a></li>
  <li><a href="/home/rate">Return Car</a></li>
</ul>

</body>
</html>
