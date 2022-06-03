<?php

$locahost = 'localhost';
$root = 'root';
$password = '';
$db = 'azloweb';


$conn = new mysqli($locahost,$root,$password,$db);
$_SESSION['nature'] = false;
if(isset($_POST['login'])){
	$username = $_POST['username'];
	$password = $_POST['pass'];
	
$res = $conn->query("select * from admin where username='$username' and password='$password'");
if($res->num_rows){
	// number of row exist 
	// create a session variable 
	$_SESSION['nature'] = true;
	$_SESSION['username'] = $username; 
	$_SESSION['password'] = $password;
	header('location:admin.php');
}
else{
	
	echo "<script>alert('incorrect password')</script>";
}


}






?>
<html>
<style>
</style>
<head>
<link rel="stylesheet" type="" href="azloweb.css"/>
<title> thsi a table</title>
</head>
<body>
<header>
<br/>
    <div style="background-color:white; width:10%; height:70px; border-radius:40px; margin-left:3px; margin-top:px;"><img src="imagefolder/az.png" id="logo" ><h1 id="azlo" style="color:red">Azlo<h1></div>
     <ul id="heady">
	 <li><a href="index.php">Home</a></li>
	 <li><a href="estate.php">Estate</a></li>
	 <li><a href="automobile.php">Automobile</a></li>
	 <li><a href="gadget.php">Gadget</a></li>
	 </ul>
	 
	 <div id="imag" style="background-color:white; height:60px; width:15%; padding-top:5px; margin-bottom:10px; border-radius-top:5px;">
	  <span><img src="imagefolder/f.jpg" style="width:30px; height:30px;"></span>
	  <span><img src="imagefolder/y.jpg" style="width:30px; height:30px;"></span>
	  <span><img src="imagefolder/tw.jpg" style="width:30px; height:30px;"></span>
	  <span><img src="imagefolder/in.jpg"style="width:30px; height:30px;"></span>
	 </div>
	 
	 <div id="bla">
	 <img src="imagefolder/key.jpg" style="height:30px; width:30px;"><span>Improved way to get your Houses,Cars and Gadgets</span>
	 </div>
</header>

<section>
      <center>
	  
	  <form method="post" action="loginadmin.php">
	     <h1> Log in as an Admin</h1>
	   <span>username</span><input type="text" name="username"/><br/>
	   <span>password</span><input type="text" name="pass"/><br/><br/>
	   <input type="submit" value="login" name="login"><br/>
	  
	  
	  </form>
	  
	  </center>
</section>
</body>

</html>