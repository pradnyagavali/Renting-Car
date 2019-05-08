<?php

$em =$_POST['a'];
$pa =$_POST['b'];


$conn= mysqli_connect("localhost","root","","car");


$sa = "SELECT * FROM  cars WHERE email = '$em' AND password ='$pa'";
$ra = mysqli_query($conn,$sa);
$count= mysqli_num_rows($ra);

if($count ==1)
{
	session_start();
	$_SESSION['kuchbhi']=$em;
	header("location:home.php");
}
else
{
   echo "Username and Password is incorrect";
   
}
?>
<form action = "index.php" method = "POST">
<style type="text/css">
    #inputbtn:hover{cursor:pointer;}
  </style>
        <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-4">
          <div class="card">
            <img src="images/smil.jpg" class="card-img-top">
            <div class="card-body">
              <center>