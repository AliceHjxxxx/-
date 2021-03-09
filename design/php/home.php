<!DOCTYPE html>
<html >
	<head>
		<meta http-equiv="content-type" content="text/html;charset=utf-8"  />
		 <meta name="author" content="www.lanrenmb.com" />
		<meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />

		<title></title>
			<link rel='stylesheet' id='camera-css'  href='../css/camera.css' type='text/css' media='all'> 		
		<script type="text/javascript" src="../Js/jquery.min.js"></script> 
		<link rel="stylesheet" href="../css/host.css"> 

    <link rel="stylesheet" href="../css/font-awesome-4.7.0/css/font-awesome.min.css">
		 <script type='text/javascript' src='../Js/slider/jquery.mobile.customized.min.js'></script>
		<script type='text/javascript' src='../Js/slider/jquery.easing.1.3.js'></script> 
		<script type='text/javascript' src='../Js/slider/camera.min.js'></script>  
		<script>
			jQuery(function(){
				
				jQuery('#camera_wrap_4').camera({
					height: 'auto',
					loader: 'bar',
					pagination: false,
					thumbnails: false,
					hover: false,
					opacityOnGrid: false
				});
			});
		</script>
	</head>
	<body class="o-page p-home">
	<?php
session_start();
if ( !isset( $_SESSION[ "id" ] ) ) {
    header( 'Location:index.php' );
}
error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-type:text/html;charset=utf-8");
//连接数据库
$con = mysqli_connect("localhost","root","");
    //选择数据库
mysqli_select_db($con,"user");
$id = $_SESSION[ 'id' ];

$query ="SELECT  * FROM `users`WHERE `id`='$id'";
$result =mysqli_query($con,$query);
$row= mysqli_fetch_assoc($result);
?>

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
		<div id="page">
			<!-- Header -->
		<div class="hello"><h1>Welcome To The Sanctuary！Dear<?php echo " ".$row['username']?></h1></div>
			<div id="content">
				<div class="home-content">
					<!-- <span id="Logo" class="svg">
						<img src="img/logo-pages.svg" />
					</span> -->
				</div>
				<div class="fluid_container">
					<div class="camera_wrap camera_black_skin camera_emboss pattern_1" id="camera_wrap_4">
						<div data-thumb="../image/home/2-th.jpg" data-src="../image/home/2.jpg">
							<div class="bannerContent fadeFromBottom">
								
							</div>
						</div>
						<div data-thumb="../image/home/1-th.jpg"  data-src="../image/home/1.jpg">
							<div class="bannerContent fadeFromBottom">
							
							</div>
						</div>
						<div data-thumb="../image/home/3-th.jpg"  data-src="../image/home/3.jpg">
							<div class="bannerContent fadeFromBottom">
							
							</div>
						</div>
						<div data-thumb="../image/home/4-th.jpg"  data-src="../image/home/4-th.jpg">
							<div class="bannerContent fadeFromBottom">
							
							</div>
						</div>
					</div><!-- #camera_wrap_3 -->

				</div>
			</div>
			
			<!-- Menu navigation -->
		
			
		</div>
		
	</body>
</html>