<?php

$na =$_POST['n'];
$em =$_POST['e'];
$co =$_POST['c'];
$pa =$_POST['p'];

$conn= mysqli_connect("localhost","root","","car");

if(!$conn){
	die("Connection Failed: ".mysqli_connect_error());
	echo "fail";
}

$s = "SELECT * FROM  cars WHERE email = '$em'";
$r= mysqli_query($conn,$s);
$count= mysqli_num_rows($r);

if($count ==1)
{

	echo "Email Already in Use";
	
}
else
{
   $sql= "INSERT INTO cars VALUES('','$na','$em','$co','$pa') ";
   mysqli_query($conn,$sql);

   echo "Account Created";
   
}

?>
<style type="text/css">
    #inputbtn:hover{cursor:pointer;}
 </style>
 <div class="container-fluid" style="margin-top:60px;margin-bottom:60px;color:#34495E;">
   <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-4">
          <div class="card">
          <img src="images/smil.jpg" class="card-img-top">
            <div class="card-body">
              <center>
             
<form action="index.php">
<input type="submit" value="Go to index">
</form>