<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/goods.css">
    <link rel="stylesheet" href="../css/host.css"> 
    <link rel="stylesheet" href="../css/swiper.min.css">
    <script src="../Js/jquery.min.js"></script>
    <script src="../Js/goods.js"></script>
    <link rel="stylesheet" href="../css/font-awesome-4.7.0/css/font-awesome.min.css">
 
    <title>SANCTUARY</title>   <link href="../image/login/favicon.ico" rel="shortcut icon" type="image/x-icon">
</head> 

<body  id="p-page">
  <?php
session_start();
if ( !isset( $_SESSION[ "id" ] ) ) {
    header( 'Location:index.php' );
}
$tid=$_SESSION[ "id" ]; 
 header("Content-type:text/html;charset=utf-8");
  error_reporting(E_ALL ^ E_NOTICE);
 $goodsid = $_POST['goodsid'];
// var_dump( $_GET['goodsid']);
//   var_dump($tid);
$con = mysqli_connect("localhost","root",""); 
mysqli_select_db($con,"user");
$con->query("SET NAMES utf8");
$query = "SELECT  * FROM `goods`";
$query1 = "SELECT * FROM `users` where `id`='$tid'";
$query2 = "SELECT * FROM `$tid`";
$result=mysqli_query($con,$query);
$result1=mysqli_query($con,$query1);
$result2=mysqli_query($con,$query2);
$row= mysqli_fetch_assoc($result);
$row1= mysqli_fetch_assoc($result1);
$a=0;$b=0;$c=0;$d=0;$e=0;$total=0;
while($row=mysqli_fetch_row($result)){ 
       $arr[$a]=$row[0];
        $arr1[$b]=$row[1];
        $arr2[$c]=$row[2];
        $arr3[$d]=$row[3];
        $arr4[$e]=$row[4];
        // echo $row[4];
         $a++;$b++; $c++;$d++;$e++;
     }
     while(mysqli_fetch_row($result2)){ 
       $total++;
    }
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
    
<div class="logo" id="logo"> <nav>      
        <div class="icon" id="icon">
     <h4> <i class="fa fa-user-o fa-2x"></i>&nbsp;<a href="host.php"><?php date_default_timezone_set('PRC');
         $showtime=date("H:i");  
     if($showtime>='6:00'&&$showtime<='11:59'){ echo "Good Morning！Dear  ".$row1['username'];}
     else if($showtime>='11:30'&&$showtime<='12:59'){ echo "Good Noon！Dear  ".$row1['username'];}
     else if($showtime>='13:00'&&$showtime<='18:59'){ echo "Good Afternoon！Dear  ".$row1['username'];}
     else if($showtime>='19:00'&&$showtime<='23:59'){ echo "Good Evening！Dear  ".$row1['username'];}
     else{echo "Good Mid-Night！Dear  ".$row1['username'];}
        ?></a> &nbsp;&nbsp; <span class="count" id="count"> <?php echo " ".$total;?></span><i class="fa fa-shopping-cart fa-2x"></i>&nbsp;<a href="shoppingcart.php">Shoppingcart</a></h4>  
       </div>
        <div class="bararea"><h2 onclick="s1()">SANCTUARY</h2>
             <h2 onclick="s2()">ALBUM</h2>
             <h2 onclick="s3()">SMG</h2>
             <h2 onclick="s4()">AROUND</h2>        
        </div>
    </nav>
</div> 
<div class="swiper-container" id="container"> 
    <div class="parallax-bg" data-swiper-parallax="-9%"></div>
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="title" data-swiper-parallax="-300">STILL MOVING UNDER THE GUNFIRE</div>
        <div class="subtitle" data-swiper-parallax="-200">Hold On!</div>
        <div class="text" data-swiper-parallax="-100">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dictum mattis velit, sit amet faucibus felis iaculis nec. Nulla laoreet justo vitae porttitor porttitor. Suspendisse in sem justo. Integer laoreet magna nec elit suscipit, ac laoreet nibh euismod. Aliquam hendrerit lorem at elit facilisis rutrum. Ut at ullamcorper velit. Nulla ligula nisi, imperdiet ut lacinia nec, tincidunt ut libero. Aenean feugiat non eros quis feugiat.</p>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="title" data-swiper-parallax="-300" data-swiper-parallax-opacity="0">SANCTURY</div>
        <div class="subtitle" data-swiper-parallax="-200">We Are In A Peace World</div>
        <div class="text" data-swiper-parallax="-100">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dictum mattis velit, sit amet faucibus felis iaculis nec. Nulla laoreet justo vitae porttitor porttitor. Suspendisse in sem justo. Integer laoreet magna nec elit suscipit, ac laoreet nibh euismod. Aliquam hendrerit lorem at elit facilisis rutrum. Ut at ullamcorper velit. Nulla ligula nisi, imperdiet ut lacinia nec, tincidunt ut libero. Aenean feugiat non eros quis feugiat.</p>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="title" data-swiper-parallax="-300">I WILL FIGHT FOR YOU</div>
        <div class="subtitle" data-swiper-parallax="-200">1037</div>
        <div class="text" data-swiper-parallax="-100">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dictum mattis velit, sit amet faucibus felis iaculis nec. Nulla laoreet justo vitae porttitor porttitor. Suspendisse in sem justo. Integer laoreet magna nec elit suscipit, ac laoreet nibh euismod. Aliquam hendrerit lorem at elit facilisis rutrum. Ut at ullamcorper velit. Nulla ligula nisi, imperdiet ut lacinia nec, tincidunt ut libero. Aenean feugiat non eros quis feugiat.</p>
        </div>
      </div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination swiper-pagination-white"></div>
    
    <!-- Add Navigation -->
    <div class="swiper-button-prev swiper-button-white"></div>
    <div class="swiper-button-next swiper-button-white"></div>
  </div>

  <div class="albumarea" id="album"><h1>————————————   ALBUM   ————————————</h1>
    <?php  for($i=0;$i<$a;$i++){
        if( $arr[$i]<"100") {?>
<a href="music_sample.php"><div class="goodsbx">
<div class="picbx"><img src="<?php echo $arr4[$i]?>" class="pic"></div>
<h3><?php echo  $arr1[$i]?></h3>
<h3>￥<?php echo $arr2[$i]?></h3></a>
<input type="button" value="加入购物车" name="<?php echo $arr[$i]?>"  class="goodsadd"  onclick="test(this)">
</div><?php }}?></div> 
<div class="sanctuaryarea" id="sanctuary">
<h1>————————————   SANCTURAY  ————————————</h1>
<?php for($i=0;$i<$a;$i++)
{ if( $arr[$i]>='100'&& $arr[$i]<'200') {?>
<a href="#"><div class="goodsbx2">
<div class="picbx2"><img src="<?php echo $arr4[$i]?>" class="pic2"></div>
<h3><?php echo $arr1[$i]?></h3>
<h3>￥<?php echo $arr2[$i]?></h3></a>
<input type="button" value="加入购物车" name="<?php echo $arr[$i]?>"  class="goodsadd" onclick="test(this)">
</div><?php }}?></div>
<div class="smgarea" id="smg">
<h1>————————————   Still Moving Under The Gunfire  ————————————</h1>
<?php for($i=0;$i<$a;$i++)
{ if( $arr[$i]>='200'&& $arr[$i]<'300') {?>
<a href="#"><div class="goodsbx3">
<div class="picbx3"><img src="<?php echo $arr4[$i]?>" class="pic3"></div>
<h3><?php echo $arr1[$i]?></h3>
<h3>￥<?php echo $arr2[$i];?></h3></a>
<input type="button" value="加入购物车" name="<?php echo $arr[$i]?>"  class="goodsadd" onclick="test(this)">
</div><?php }}?></div>
<div class="aroundarea" id="around">
<h1>————————————   AROUND  ————————————</h1>
<?php for($i=0;$i<$a;$i++)
{ if( $arr[$i]>='300'&& $arr[$i]<'400') {?>
<a href="#"><div class="goodsbx2">
<div class="picbx2"><img src="<?php echo $arr4[$i]?>" class="pic2"></div>
<h3><?php echo $arr1[$i]?></h3>
<h3>￥<?php echo $arr2[$i]; ?></h3></a>
<input type="button" value="加入购物车" name="<?php echo $arr[$i]?>"  class="goodsadd" onclick="test(this)">
</div><?php }}?></div>
<!-- </div> -->
  <!-- Swiper JS -->
  <script src="../JS/swiper.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
   var swiper = new Swiper('.swiper-container', {
    speed: 600,
    parallax: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
    
  </script>
</body>
</html>