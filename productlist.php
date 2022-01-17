<?php
  session_start();
  if(!isset($_SESSION['username']))
  header('location:login.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Products</title>
<style>
body{
	background-color:#e6f0ff;
}
img{
	width: 120px;
	height: 140px;
	margin:0 15px 0 10px;
	float:left;
}
div{
    background-color: #80b3ff;
	font-family:verdana;
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
      <a  href="categories.php">Bid on items</a>
	  <a href="profile.php">Profile</a>
      <div class="topnav topnav-right">
	  <a href="about.html">About Us</a>
	  <a href="faq.html">FAQs</a>
      <a  href="feedbackForm.php">Give Feedback</a>
      <a href="logout.php">Logout</a>
      </div>
</div>
<?php 
$db = mysqli_connect("localhost", "root", "", "auction");
$_SESSION['category']=$_GET['c'];
if(!isset($_SESSION['category']))
header('location:categories.php');
$today= date("Y-m-d");
echo $today;
$cat=$_SESSION['category'];?>
<h2 style="font-family:'Courier New'">Category: <?php echo $cat?></h2>
<?php
$list="select * from prod where prod_category='$cat' and end_date >'$today'";
$result=mysqli_query($db,$list);
while ( $rows = $result->fetch_assoc() ) {
	?>
	<a style="text-decoration:none;" href="bid.php?p=<?php echo $rows['prod_id']?>">
	<div>
	<br><img src="images/<?php echo $rows['prod_pic']?>"/><br>
	Product name:<?php echo $rows['prod_name']?><br>
	Product condition:<?php echo $rows['prod_condition']?><br>
	Product description:<?php echo $rows['prod_description']?><br>
	Price:<?php echo $rows['prod_price']?><br>
	Bidding start date:<?php echo $rows['start_date']?><br>
	Bidding end date:<?php echo $rows['end_date']?><br><br><hr>
	</div></a>
<?php
}
?>
<?php
$query = mysqli_query($db, "INSERT INTO pastProd select * from prod where prod_category='$cat' and end_date<'$today' ");
	$query = mysqli_query($db, "DELETE FROM prod where prod_category='$cat' and end_date<'$today'");
	?>
</body>
</html>
  