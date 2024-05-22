<?php
include("setting.php");
session_start();
if(!isset($_SESSION['aid']))
{
	header("location:admin.php");
}
$aid=$_SESSION['aid'];
$a=mysqli_query($al, "SELECT * FROM admin WHERE aid='$aid'");
$b=mysqli_fetch_array($a);
$name=$b['name'];
?>

<!DOCTYPE 
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Travel &amp; Tourism System</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="header">
  <div align="center"> <span class="headingMain">Online Tours &amp; Travels System</span> </div>
</div>
<br />
<br />
<div align="center"> <span class="subHead">Welcome <?php echo $name;?></span> <br />
  <br />
  <table border="0">
<tr><td>  <a href="holiday.php" class="cmd">♦ 	Manage Holiday Packages</a></td><td><a href="changePasswordAdmin.php" class="cmd">♦ Change Password</a></td></tr>
<tr><td><a href="orders.php" class="cmd">♦ Orders</a></td><td>
<a href="logout.php" class="cmd">♦ Logout</a>
<tr><td>
</table>
</div>
</body>

</html>