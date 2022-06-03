<?php  
$locahost = 'localhost';
$root = 'root';
$password = '';
$db = 'azloweb';


$connn = new mysqli($locahost,$root,$password,$db);

if(isset($_POST['ask'])){
	$user = $_POST['user'] ;
	$email =$_POST['email'];
	$comment =$_POST['text'];
	$time  = time();
	//$imagename = $_POST['image'];
	// putting a file into a folder 
	 if(isset( $_FILES['fileask']['name'])){
				  
				  //echo $_FILES['fileask']['name'];
				  $directory = "input/";
				  $saveas = $user.'.png';
				  move_uploaded_file($_FILES['fileask']['tmp_name'],$directory.$saveas);
			  }
			  else{ echo 'echo error movinng';}
		  //echo $user.$email ;
	$f =  $connn->query("INSERT  into askestate  values('$user','$email','','$comment','$time')");
	if($f){
		echo '<script> alert(" your review has been sent") </script>'; 
	}
	else{
		echo $connn->error;
	}
}



if(isset($_POST['sell'])){
	$user = $_POST['user'] ;
	$email =$_POST['email'];
	$comment =$_POST['text'];
	$amount = $_POST['amount'];
	$product  = $_POST['product'];
	$phone = $_POST['phone'];
	//$imagename = $_POST['image'];
	// putting a file into a folder 
	 if(isset( $_FILES['filesell']['name'])){
				  
				  //echo $_FILES['fileask']['name'];
				  $directory = "input/";
				  $saveas = $user.'es.png';
				  move_uploaded_file($_FILES['filesell']['tmp_name'],$directory.$saveas);
			  }
			  else{ echo 'echo error movinng';}
		  //echo $user.$email ;
		$there =   $connn->query("select * from estate where person='$user'");
		  if($there->num_rows){
			  
			  echo '<script>alert("use some other username")</script>' ;
		  }
		  else{
	$f =  $connn->query("INSERT  into estate  values('$user','$email','$amount','$comment','$product','$phone')");
	if($f){
		echo '<script> alert(" your review has been sent") </script>'; 
	}
	else{
		echo $connn->error;
	}
		  }
}


if(isset($_GET['ime'])){
$use = $_GET['ime'];

echo   <<<_END
'<img src='.$use."es.png/" style="margin-top:300px; width:100% height:100px;">';
_END;

die();
}


 ?>



<html>
<style>
</style>
<head>
<title> thsi a table</title>
<link rel="stylesheet" type="" href="azloweb.css"/>
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
	 
	 <div id="imag" style="">
	  <span><img src="imagefolder/f.jpg" style=""></span>
	  <span><img src="imagefolder/y.jpg" style=""></span>
	  <span><img src="imagefolder/tw.jpg" style=""></span>
	  <span><img src="imagefolder/in.jpg"style=""></span>
	 </div>
	 
	 <div id="bla">
	 <img src="imagefolder/key.jpg" style="height:30px; width:30px;"><span>Improved way to get your Houses,Cars and Gadgets</span>
	 </div>
</header>
  <section style="">
                          <div>
						    <select style="width:10%; margin-left:10px;">
							   <option>Default</option>
							   <option>Ibadan</option>
							   <option>Lagos</option>
							</select>
						 </div>
  
  <div class="gaside" style="">
  <center>
 <div class="gask"> 
 <button id="ask" onclick="ask()">Ask</button> 
 about gadget anywhere in nigeria and get it deliver to you in few minutes
 </div>
    <form   method="post" action="estate.php" id="cask"   style="visibility:visible;" enctype="multipart/form-data"enctype="multipart/form-data">
	<h1 style="color:purple; font-weight:bold;"> Ask for a Gadget <h1>
	<span>Name</span><input type="text" placeholder="place your name"  name="user"required/><br/>
	<span>email</span><input type="text" placeholder="enter your email" name="email" required/><br/>
	<span>Description of product</span>
	<textarea placeholder="details of product,model, name etc" name="text">
	
	</textarea></br>
	<span>optional</span><input type="file" name="fileask" accept=".png,.jpeg,.jpg" multiple /></br>
	<input type="submit" name="ask" id="asub"></br>
	</form>
</center>
</div>

<div class="g2aside">
<center >
 <div class="gell">
 <button id="sell" onclick="sell()">Sell</button>
 your gadget anywhere in nigeria at an excellent amount
 </div>
 
    <form  id="csell"  method="post"  style="height:400px; "action="estate.php" style="visibility:visible;" enctype="multipart/form-data">
	<h1 style="color:purple; font-weight:bold;"> Sell Gadget</h1>
	<span>username</span><input type="text" placeholder="place your name"  name="user"  required/><br/>
	<span>amount</span><input type="text" placeholder="amount of your product"  name="amount"required/><br/>
	<span>email</span><input type="text" placeholder="enter your email" name="email" required/><br/>
	<span style="font-size:;">name of product</span><input type="text" style="width:65%;"  placeholder="name of product" name="product" required/><br/>
	<span>phone number</span><input type="text" style="width:65%;" placeholder="name of product" name="phone" required/><br/>
	<span>Description of product</span>
	<textarea placeholder="details of product,model, name etc" name="text">
	
	</textarea></br>
	<span>upload</span><input type="file"  accept=".png, .jpeg, .jpg" name="filesell" required/></br>
	<input type="submit" name="sell" id="ssell"></br>
 
 </form>

	</center>
	</div>
    <!-- something from the database will be get here without hassle-->
	 <div id="code">
	 <?php
// fetch gadget table 
// fetch default table with break of 20pieces
include_once 'connection.php';
$res = $conn->query("select * from estate");
if($res->num_rows){
for($i=0; $i<$res->num_rows; $i++ ){
$row = $res->fetch_array(MYSQLI_ASSOC);
echo "<center><div id='sule' style='background-color:#f5f5f5; width:60%; margin-left:400px; margin-top:20px; height:600px;'><a href='estate.php?ime=".$row['product']."'><img src='input/".$row['person']."es.png' style='height:400px; margin-top:20px;width:80%;'></a><br/><br/>".$row['product'].'<br/>phone number:&nbsp;'.$row['phone'].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;amount:&nbsp;'.$row['amount'].'<br/>description:&nbsp;'.$row['description']."<br/><button style='background-color:purple; margin-top:10px; border-color:purple;'>buy now</button><br/></div></center>";
echo <<<_END
<script>

</script>

_END;
}
}
else{
//echo 'no estate yet';
}

?>
	</div>
  </section>
  
  
  
  <!-- website review will be shown here-->
	
  <footer>
  <center>
  &copy; <span>Azlo Comapany </span><br/><br/> 
  
  <div id="ft" style="">
    <span><img src="imagefolder/f.jpg" style=""></span>
	  <span><img src="imagefolder/y.jpg" style=""></span>
	  <span><img src="imagefolder/tw.jpg" style=""></span>
	  <span><img src="imagefolder/in.jpg"style=""></span>
  </div>
  </center>
  
  </footer>
</body>

</html>




