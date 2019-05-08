<?php

if (isset($_POST["submit"])){
$na =$_POST['n'];
$em =$_POST['e'];
$co =$_POST['c'];
$pa =$_POST['p'];
$cn =$_POST['a'];
$lo =$_POST['o'];
$da =$_POST['s'];


$conn= mysqli_connect("localhost","root","","car");
//mysql_select_db("car");

if(!$conn){
	die("Connection Failed: ".mysqli_connect_error());
	echo "fail";
}

$s = "SELECT * FROM  book WHERE email = '$em'";
$r= mysqli_query($conn,$s);
$count= mysqli_num_rows($r);

if($count ==1)
{

	echo "Already booked Car";
	
}
else
{
   $sql= "INSERT INTO book VALUES('','$na','$em','$co','$pa','$cn','$lo','$da') ";
   mysqli_query($conn,$sql);

   echo "Car Booked";
   
}

}
?>

<h1>WELCOME </h1>

<a href="home.php">home</a>

<a href="showcase.php">ShowCase</a>

<a href="logout.php">logout</a>

<h2 style="text-align: center; color:#CC0000">Thank you for contacting us. We will give you a call shortly.</h2>

<style type="text/css">
    #inputbtn:hover{cursor:pointer;}
  </style>
        <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-4">
          <div class="card">
            <img src="images/sm.jpg" class="card-img-top">
            <div class="card-body">
              <center>