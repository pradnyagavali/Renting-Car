<?php

$image = $_FILES['image'];
$add = $_POST['add'];
$desc = $_POST['desc'];

$image_name = $image['name'];

$conn= mysqli_connect("localhost","root","","car");

move_uploaded_file($image["tmp_name"],"properties/$image_name"); 

$sql= "INSERT INTO properties VALUES('','$image_name','$add','$desc') ";
 mysqli_query($conn,$sql);
 
 echo "Post Uploaded";
 ?>
 <style type="text/css">
    #inputbtn:hover{cursor:pointer;}
 </style>
<body style="background:url('images/img2.jpg'); background-size: cover;">
<div class="container-fluid" style="margin-top:60px;margin-bottom:60px;color:#34495E;">
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-4">
          <div class="card">
		  
<h1><p style="color:pink;">YOUR POST IS UPLOADED </p> </h1>
<h2 style="text-align: center; color:white">Thank you for contacting us. We will give you a call shortly.</h2>

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