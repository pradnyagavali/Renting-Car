<?php
session_start();

if(empty($_SESSION['kuchbhi']))
{
	
?>
<html>
<head>

<style type="text/css">
    #inputbtn:hover{cursor:pointer;}
 </style>
<body style="background:url('images/img5.jpg'); background-size: cover;">
<div class="container-fluid" style="margin-top:60px;margin-bottom:60px;color:#34495E;">
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-4">
          <div class="card">  
           

<title>Signup/login</title>
</head>
<body>

<h1><p style="color:white;">GIVE CARS ON RENT </p> </h1>
<h3><p style="color:red;">Create Your Account</p> </h3><br><br>
<form action = "check.php" method = "POST">
<input type ="text" placeholder = "name" name="n" ><br><br>
<input type ="text" placeholder = "email" name ="e"><br><br>
<input type ="text" placeholder = "contact" name ="c"><br><br>
<input type ="password" placeholder = "password" name="p"><br><br>
<input type ="submit"  value = "Register">
</form>

<h3><p style="color:red;">Login</p> </h3>

<form action = "check2.php" method = "POST">
<input type ="text" placeholder = "email" name="a" ><br><br>
<input type ="text" placeholder = "password" name ="b"><br><br>
<input type ="submit"  value = "login">
</form>

</body>
</html>
<?php

}
else
{
	header("location:home.php");
}