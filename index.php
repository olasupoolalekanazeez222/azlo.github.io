<?php  
$locahost = 'localhost';
$root = 'root';
$password = '';
$db = 'azloweb';


$connn = new mysqli($locahost,$root,$password,$db);

if(isset($_POST['submit'])){
	$user = $_POST['user'] ;
	$email =$_POST['email'];
	$comment =$_POST['text'];
	$time  = time();
	$star = $_POST['star'];
	$keyword = $_POST['keyword'];
		  //echo $user.$email ;
	$f =  $connn->query("INSERT  into review  values('$user','$email','$comment','','$keyword','$time','$star')");
	if($f){
		echo '<script>  your review has been sent </script>'; 
	}
	else{
		echo $connn->error;
	}
}

 ?>
<html>
<style>
</style>
<head>
<link rel="stylesheet" type="" href="azloweb.css"/>
<title> buy and sell your house</title>
</head>
<body style="background-color:;">
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
	  <span><img src="imagefolder/f.jpg"></span>
	  <span><img src="imagefolder/y.jpg"></span>
	  <span><img src="imagefolder/tw.jpg" ></span>
	  <span><img src="imagefolder/in.jpg"></span>
	 </div>
	 
	 <div id="bla">
	 <img src="imagefolder/key.jpg" style="height:30px; width:30px;"><span>Improved way to get your Houses,Cars and Gadgets</span>
	 </div>
</header>

  <section>
  
    
	
	 <center>
	  <div class="mess"  id="zero" style="visibility:hidden; ">
	 <div style="background-color:white; width:40%; border-radius:300px;"><img src="imagefolder/car.jpg"></div><br/>
	 <span> Do you want to buy,sell or rent your car or swap</span></br>
	<a href="automobile.php" ><button>automobile</button></a>
	  </div>
  
	
	<center>
  <div class="mes" id="one" style="visibility:hidden; ">  
  <span> Get your house, car and gadget at an afordable price.</span></br><br/><br/>
  <span style="font:size:10px;"> Navigate to <a href="automobile.php" style="font-weight:bold;">automobile</a>,&nbsp;<a href="estate.php" style="font-weight:bold;">estate</a>&nbsp; and <a href="gadget.php" style="font-weight:bold;">gadget</a>
  to ask or sell property anywhere in nigeria</span><br/>
  
  </div>
	    <div class="mess"  id="two" style="visibility:hidden; ">
	 <div style="background-color:white; width:40%; border-radius:300px;"><img src="imagefolder/reales.jpg"></div><br/>
	 <span> Do you want to sell,buy,rent Estate</span></br>
	<a href="estate.php"> <button>Estate</button></a>
	  </div>
        <div class="mess" id="three" style="visibility:hidden; ">
	 <div style="background-color:white; width:40%; border-radius:300px;"><img src="imagefolder/gad.jpg"></div><br/>
	 <span> Do you want to buy or sell your Gadgets</span></br>
	 <a href="gadget.php"><button>Gadget</button></a>
	
	 </div>
      <div class="mess">
	
	 <div style="background-color:white; width:40%; border-radius:300px;" ><img src="imagefolder/es.jpg" id="four"></div><br/>
	 <span>get a house in Nigeria in one click</span><br/>
	 <a href="estate.php"><button>Estate</button></a>
	
	 </div>
     <div class="mess">
	
	 <div style="background-color:#f5f5f5; width:40%; border-radius:300px;"><img src="imagefolder/phoneh.jpg"></div><br/>
	 <span> get your gadget in one click</span><br/>
	 <a href="gadget.php"><button>Gadget</button></a>
	 
	 </div>
       <div class="mess">
	 <div style="background-color:white; width:40%; border-radius:300px;"><img src="imagefolder/set.jpg"></div><br/>
	 <span> get your car in one click</span><br/>
	 <a href="automobile.php"><button>Automobile</button></a>
	 </div>
	  </center>
      
	  
	  
	  <!-- something from the database will be get here without hassle-->
	  
	
  </section>
  
  
  
  <!-- website review will be shown here-->
  
     <center>
    <form action="index.php"  method="post" id="formy">
	<h4 style="padding-top:10px;">Leave a Review</h4>
	<span>Name:</span><input type="text" placeholder="place your name"  name="user" /><br/>
	<span>email:</span><input type="email" placeholder="enter your email" name="email" /><br/>
	<span>comment:</span>
	<textarea placeholder="comment here" name="text" >
	
	</textarea></br>
	<span>optional:</span><input type="file" name="image" /></br>
	<span>key:</span><input type="text" placeholder="enter your customer key" name="keyword" /><br/>
	<span>star:</span><input type="text" name="star" maxlength="1" placeholder="rank from 1-5" /><br/>
	
	<input type="submit" name="submit" id="sub"/></br>
	</form>

	
	
	<h1 style="color:#9370db;"> Comments:</h1>
 
	</center>
<?php
// fetch review table 
// fetch default table with break of 20pieces 
include_once 'connection.php';
$res = $conn->query("select * from review");
if($res->num_rows){
for($i=0; $i<$res->num_rows; $i++ ){
$row = $res->fetch_array(MYSQLI_ASSOC);

echo "<center><div id='sule' style='background-color:#F5f5f5;margin-top:20px; color:; width:70%;height:100px; padding-top:10px; border-radius:5px;'>'<img src='imagefolder/lekan.jpg' style='height:10px; width:10px;'><br/>".$row['user'].'<br/>'.$row['text']."</div></center>";
echo <<<_END
<script>

</script>

_END;
}
}
else{
echo 'no rewiew yet';
}




?>


 <footer>
  <center>
  copyright&copy; <span>Azlo Comapany </span> 
  
  <div id="ft" style="">
    <span><img src="imagefolder/f.jpg" style=""></span>
	  <span><img src="imagefolder/y.jpg" style=""></span>
	  <span><img src="imagefolder/tw.jpg" style=""></span>
	  <span><img src="imagefolder/in.jpg"style=""></span>
  </div>
  </center>
  
  </footer>
  <script>
  setTimeout(function(){
	let zero =   document.getElementById("zero");
     zero.style.visibility = "visible";	
	  setTimeout(function(){
	let one =   document.getElementById("one");
     one.style.visibility = "visible";	
	  setTimeout(function(){
	let two =   document.getElementById("two");
     two.style.visibility = "visible";	
	  setTimeout(function(){
	let three =   document.getElementById("three");
     three.style.visibility = "visible";	
	 
  },1000)
  },1000)
  },1000)
  },1000);
  
 
  </script>
</body>

</html>