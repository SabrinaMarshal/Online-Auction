<?php
session_start();
if(!isset($_SESSION['username']))
header('location:login.php');
?>
<html>
<head>
 <title>Home page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
body {
  font-family: "Lato", sans-serif;
  text-align:center;
}

.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 6px 6px 10px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 200px; /* Same as the width of the sidenav */
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<div class="sidenav">
<img src="auction.svg" style="width:100px;height:100px;margin-left:30px;"><br><br>
  <a href="ProductEntry.html">Auction item</a>
  <a href="categories.php">Categories</a>
  <a href="profile.php">Profile</a>
  <a href="about.html">About Us</a>
  <a href="faq.html">FAQs</a>
  <a href="feedbackForm.php">Feedback</a>
  <a href="logout.php">Logout</a>
</div>

<div class="main">
<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="https://i.pinimg.com/originals/f3/71/fb/f371fb5f4ec66d968087997a159cfd9d.jpg" style="width:100%;height:60%;">
      </div>

      <div class="item">
        <img src="https://i.pinimg.com/originals/69/91/02/6991021f3406953dd925b2c2ba4ff6b3.jpg" style="width:100%;height:60%;">
      </div>
    
      <div class="item">
        <img src="https://mir-s3-cdn-cf.behance.net/project_modules/disp/0d971641611303.589c72747e53e.jpg" style="width:100%;height:60%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<br>
<h2 style="margin-left: 50px;">Welcome <?php echo $_SESSION['username'];?> to the online auction site</h2>
<h3 style="margin-left: 50px;">Sell and Bid to your hearts content!</h3><br>
<p style="font-size:20px;">You can put up items for auction with your prefered starting bid</p>
<p style="font-size:20px;">You can also browse the different categories of products to bid on</p>
</div>
   
</body>
</html>
