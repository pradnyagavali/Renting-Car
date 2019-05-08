<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: yellow;
  padding: 14px 20px;
  margin: 8px 0;
  border: inset;
  cursor: pointer;
  width: 57%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #D321CA;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 75%;
  }
}
</style>
</head>
<body>
<a href="home.php">About us</a><br>
<h1><p style="color:white;">CAR RENTING COMPANY </p> </h1>
<h1><p style="color:red;">Admin Login </p> </h1>
<input type="button" value="Not Admin" onclick="window.location.href='login.php'" />
<form action="index.php",method="POST">
   <div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>
  

  <div class="container">
    <label for="uname"><b><p style="color:white;">Username</b></label>
    <input type="text" placeholder="Enter Username" name="em" required> <br>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pa" required><br>
        
    <button type="submit">Login</button><form action="index.php"><br>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
<style type="text/css">
    #inputbtn:hover{cursor:pointer;}
 </style>
<body style="background:url('images/imag3.jpg'); background-size: cover;">
<div class="container-fluid" style="margin-top:60px;margin-bottom:60px;color:#34495E;">
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-4">
          <div class="card">  

</body>
</html>