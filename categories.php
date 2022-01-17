<?php
  session_start();
  if(!isset($_SESSION['username']))
  header('location:login.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Categories:</title>
<style>
body{
	background-color: #cce0ff;
	font-family:verdana;
}
.grid-container {
  display: grid;
  grid-gap: 50px 100px;
  grid-template-columns: auto auto auto;
  background-color: #cce0ff;
  padding: 10px;
}

.grid-item {
  background-color: #66a3ff;
  border: 1px solid rgba(0, 0, 0, 0.8);
  padding: 20px;
  font-size: 30px;
  text-align: center;
}

img{
	width: 280px;
	height: 180px;
}
a{
	text-decoration:none;
	color:black;
}
.topnav {
    overflow: hidden;
    background-color: #333;
  }
  
  .topnav a {
    float: left;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
  }
  
  .topnav a:hover {
    background-color: #ddd;
    color: black;
  }
  
  .topnav a.active {
    background-color: #4682b4;
    color: white;
  }
  
  .topnav-right {
    float: right;
  }
</style>
</head>
<body>
<div class="topnav">
      <a  href="home.php">Home Page</a>
      <a  href="ProductEntry.html">Put item for action</a>
      <a  class="active" href="categories.php">Bid on items</a>
	  <a href="profile.php">Profile</a>
      <div class="topnav-right">
	  <a href="about.html">About Us</a>
	  <a href="faq.html">FAQs</a>
      <a  href="feedbackForm.php">Give Feedback</a>
      <a href="logout.php">Logout</a>
      </div>
</div>

<h1>Categories:</h1>

<div class="grid-container">
  <div class="grid-item"><a href="productlist.php?c=Electronics"><img src="electronics.jpg"><br>Electronics</a></div>
  <div class="grid-item"><a href="productlist.php?c=Apparels"><img src="apparel.jpg"><br>Apparels</a></div>
  <div class="grid-item"><a href="productlist.php?c=Footwear"><img src="footwear.jpg"><br>Footwear</a></div>  
  <div class="grid-item"><a href="productlist.php?c=Health & Beauty"><img src="healthbeauty.jpg"><br>Health and beauty</a></div>
  <div class="grid-item"><a href="productlist.php?c=Jewellery"><img src="jewellery.jpg"><br>Jewellery</a></div>
  <div class="grid-item"><a href="productlist.php?c=Books"><img src="books.jpg"><br>Books</a></div>    
</div>


</body>
</html>