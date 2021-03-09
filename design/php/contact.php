<!DOCTYPE html>
<html lang="Zh-CN">
<head>
	<meta charset="utf-8">
  <title>SANCTUARY</title>   <link href="../image/login/favicon.ico" rel="shortcut icon" type="image/x-icon">

	<link rel="stylesheet" href="../css/contact.css">
	<link rel="stylesheet" href="../css/host.css"> 
    <link rel="stylesheet" href="../css/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/index.css">
  </head>
  <body>
	<input type="checkbox" id="check">
    <label for="check">
        <i class="fa fa-bars" id="btn"></i>  
        <i class="fa fa-times" id="cancel"></i>  
     </label>
    <div class="sidebar">
    <header><a href="home.php">SANCTURY</a></header>
    <ul>
     <li ><a href="host.php"><i class="fa fa-qrcode"></i>Personal</a></li>
     <li ><a href="album.php"><i class="fa fa-music"></i>Music</a></li>
     <li ><a href="goods.php"><i class="fa fa-shopping-bag"></i>Market</a></li>
     <li ><a href="shoppingcart.php"><i class="fa fa-shopping-cart"></i>Shopping cart</a></li>
     <!-- <li ><a href="#"><i class="fa fa-film"></i>Gallery</a></li> -->
     <li ><a href="contact.php"><i class="fa fa-envelope-open"></i>Contact Us</a></li>
     <li ><a href="index.php"><i class="fa fa-sign-out"></i>Sign out</a></li>
    </ul>
</div>
	<div id="wrap">
		<h1>SEND A MESSAGE</h1>
		<br><br><br>
		<div id="form-wrap">
			<form>
				<p>HELLO JFJProduction,</p>
				<label for="email">Your Message:</label>
				<textarea name="message" id="message" value="Your Message"></textarea>
				
				<p>BEST,</p>
				<label for="name">Name:</label>
				<input type="text" name="name" value="" id="name" />
				
				<label for="email">Email:</label>
				<input type="text" name="email" value="" id="email" />
				
				<input type="submit" name="submit" value="NOW, I SEND THANKS!" />
			</form>
		</div>
	</div>
  </body>
</html>
