<?php
session_start();
if(!isset($_SESSION['username']))
header('location:login.php');
$connection =mysqli_connect("localhost", "root", ""); 
$db = mysqli_select_db($connection,"auction");
$_SESSION['productid']=$_GET['p'];
$pid=$_SESSION['productid'];

?>
<html>
<head> <title> Place your bid </title>
<style>
     button[type=submit] {
      
      background-color:#4682B4;
      color: white;
      padding: 14px 20px;
      border: none
     
    }
    table {
  border-collapse: collapse;
  width: 100%;
  margin-left:auto; 
   margin-right:auto;

}

th, td {
  text-align: left;
  padding: 8px;
  font-size: 100%;
  
  
}

tr:nth-child(even){background-color: #f2f2f2}

th {
	
  color: black;
 
}
    
    </style>

</head>
<body>
    <table style="width:600px"  border="1">

<?php

//MySQL Query to read data
$query = mysqli_query( $connection,"select * from prod where prod_id='$pid'");
while ($row = mysqli_fetch_assoc($query)) {
    ?>
    <tr>
<th> Product Image:</th><td>

<img src="images/<?php echo $row['prod_pic']?>" alt="Image" style="width:100px; height:100px;"/>
 </td></tr>
    <tr>
    <th> Product Name:</th>
    <td>
<?php
echo $row['prod_name'];
?> </td></tr><tr>
<th> Product Category:</th>
<td>
<?php
echo $row['prod_category'];
?> </td></tr><tr>
<th> Condition:</th><td>
<?php
echo $row['prod_condition'];
?> </td></tr><tr>
<th> Description:</th><td>
<?php
echo $row['prod_description'];
?> </td></tr><tr>

<th> Starting bid</th><td>
<?php
echo $row['prod_price'];
?> </td></tr><tr>
<th> 
Highest bid:
</th><td>
<?php
echo $row['bid_price'];
?> </td></tr>
<th> Bid End Date</th><td>
<?php
echo $row['end_date'];
?> </td></tr>
<tr>
<th> Bid End Date</th><td>
<?php
echo $row['end_date'];
?> </td></tr><tr>
<th> 
Product put up by
</th><td>
<?php
echo $row['user'];
?> </td></tr>
<?php
}
?>
</table>
<br><br><br>

<form  method="post" action="payment.php"   enctype="multipart/form-data" align="center" >
Enter your bid <br>
<input type="number" id="bid_price" name="bid_price" min="1" required/><br><br>
<button type=submit  name="bid" >Place bid</button>

</form>
<a href="home.php">Return home</a><br>
<a href="logout.php">LOGOUT</a><br><br>
</body>
</html>