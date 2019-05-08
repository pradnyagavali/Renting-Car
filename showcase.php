<?php
session_start();

if(empty($_SESSION['kuchbhi']))
{
	header("location:login.php");
}
else
{
?>
<html>
<head>
<title>ShowCase</title>
<style>

.main
{
	width:200px;
	height:250px;
	border:1px solid black;
	float:left;
	margin-left:20px;
}
.imagepro
{
	width:90%;
	height:170px;
	margin-left:5%;
	border:1px solid black;
	float:left;
	margin-top:10px;
}
.pro
{
    width:100%;
	height:100%;
}
</style>
</head>
<body>

<h1>WELCOME  <?php echo $_SESSION['kuchbhi']; ?> </h1>

<a href="home.php">home</a><br>

<a href="showcase.php">ShowCase</a><br>

<a href="logout.php">logout</a><br>

<?php

$conn= mysqli_connect("localhost","root","","car");

$aql = "SELECT* FROM properties";
$res= mysqli_query($conn,$aql);

while($r =mysqli_fetch_array($res))
{
	echo'<div class="main">
	        <div class="imagepro"><image class="pro" src="./properties/'.$r['image_name'].'"></div>
			<div>'.$r['address'].'</div>
			<div>'.$r['description'].'</div>
		</div>';

}
?>

</body>
</html> 
<?php
}
?>
<input type="button" value="want to book " onclick="window.location.href='book.php'" />
