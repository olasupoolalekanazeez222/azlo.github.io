<?php

session_start();
if($_SESSION == ''){
	
	die("not log in go to `loginadmin` admin to log in ");
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
<ul>
<li>upload review
<div id="upr">
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
</div></li>
<li>upload estate
<div>
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
	</aside>
</div>
</li>
<li>upload auto
<div>
<center >
 <div class="gell">
 <button id="sell" onclick="sell()">Sell</button>
 your gadget anywhere in nigeria at an excellent amount
 </div>
 
    <form  id="csell"  method="post"  style="height:400px; "action="automobile.php" style="visibility:visible;" enctype="multipart/form-data">
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
	</aside>
</div>
</li>
<li>upload gadget
<div>
<center >
 <div class="gell">
 <button id="sell" onclick="sell()">Sell</button>
 your gadget anywhere in nigeria at an excellent amount
 </div>
 
    <form  id="csell"  method="post"  style="height:400px; "action="gadget.php" style="visibility:visible;" enctype="multipart/form-data">
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
	</aside>
</div>
</li>
</ul>
</section>
	
   <footer>
  <center>
  &copy; <span>Azlo Comapany </span> 
   <div style="background-color:white; width:20%; height:50px; border-radius:40px; padding-top:10px;">
    <span><img src="imagefolder/f.jpg" style="width:30px; height:30px;"></span>
	  <span><img src="imagefolder/y.jpg" style="width:30px; height:30px;"></span>
	  <span><img src="imagefolder/tw.jpg" style="width:30px; height:30px;"></span>
	  <span><img src="imagefolder/in.jpg"style="width:30px; height:30px;"></span>
  </div>
  </center>
  
  </footer>
</body>

</html>