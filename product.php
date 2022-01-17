<?php
  session_start();
  if(!isset($_SESSION['username']))
  header('location:login.php');
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "auction");
  $user=$_SESSION['username'];

  if (isset($_POST['submit'])) {
	  $name=$_POST['prod_name'];
	  $category=$_POST['prod_category'];
	  $condition=$_POST['prod_condition'];
	  $description=$_POST['prod_description'];
	  $price=$_POST['prod_price'];
	  $start_date=$_POST['startdate'];
	  $end_date=$_POST['enddate'];
	
	// Get image name
	$image = $_FILES['prod_pic']['name'];
	

	// image file directory
	$target = "images/".basename($_FILES['prod_pic']['name']);

	$sql = "INSERT INTO prod ( prod_name,prod_category,prod_condition,prod_description,prod_price,start_date,end_date,prod_pic,bid_price,user,bid_user ) 
	VALUES ('$name', '$category','$condition','$description','$price','$start_date','$end_date','$image','$price','$user','$user')";
	// execute query
	mysqli_query($db, $sql);

	if (move_uploaded_file($_FILES['prod_pic']['tmp_name'], $target)) {
		$msg = "Image uploaded successfully";
	}else{
		$msg = "Failed to upload image";
	}
	echo "Item put up to auction";
	header('location:home.php');?>
<?php
}



  $result = mysqli_query($db, "SELECT * FROM prod");
?>