<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/host.css">
    <link rel="stylesheet" href="../css/shoppingcart.css">
    <script src="../Js/jquery.min.js"></script>
    <script src="../Js/dealdata.js"></script>
    <script src="../Js/shoppingcart.js"></script>
    <link rel="stylesheet" href="../css/font-awesome-4.7.0/css/font-awesome.min.css">

    <title>SANCTUARY</title>   <link href="../image/login/favicon.ico" rel="shortcut icon" type="image/x-icon">

</head>
<body>
<?php
session_start();
if ( !isset( $_SESSION[ "id" ] ) ) {
    header( 'Location:index.php' );
}
$tid=$_SESSION[ "id" ]; 
 header("Content-type:text/html;charset=utf-8");
  error_reporting(E_ALL ^ E_NOTICE);
  $con = mysqli_connect("localhost","root",""); 
mysqli_select_db($con,"user");
$con->query("SET NAMES utf8");
  $query = "SELECT * FROM `users` where `id`='$tid'";
  $result=mysqli_query($con,$query);
  $row= mysqli_fetch_assoc($result);
  $query1 = "SELECT  * FROM `$tid`";
  $result1=mysqli_query($con,$query1);
  $a=0;$b=0;$c=0;$d=0;$e=0;
  while($row1=mysqli_fetch_row($result1)){ 
         $arr[$a]=$row1[0];
          $arr1[$b]=$row1[1];
          $arr2[$c]=$row1[2];
          $arr3[$d]=$row1[3];
          $arr4[$e]=$row1[4];
          // echo $row[4];
           $a++;$b++; $c++;$d++;$e++;
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


<div class="logo"> <nav>      
        <div class="icon">
       <h4> <i class="fa fa-user-o fa-2x"></i>&nbsp;<a href="host.php"><?php date_default_timezone_set('PRC');
         $showtime=date("H:i");  
     if($showtime>='6:00'&&$showtime<='11:59'){ echo "Good Morning！Dear  ".$row['username'];}
     else if($showtime>='11:30'&&$showtime<='12:59'){ echo "Good Noon！Dear  ".$row['username'];}
     else if($showtime>='13:00'&&$showtime<='18:59'){ echo "Good Afternoon！Dear  ".$row['username'];}
     else if($showtime>='19:00'&&$showtime<='23:59'){ echo "Good Evening！Dear  ".$row['username'];}
     else{echo "Good Mid-Night！Dear  ".$row['username'];}
        ?></a> &nbsp;&nbsp;<i class="fa fa-shopping-bag fa-2x"></i>&nbsp;<a href="goods.php">Return The Market</a></h4>  
       </div>
    </nav>
</div> 



<div class="detail"><h3 class="n-title"> Name</h3>   <h3 class="num-title"> Num</h3>  <h3 class="p-title">Unit  Price</h3> </div>
<div class="list" id="count">  <?php  $total=0; $j=1; for($i=0;$i<$a;$i++){ $total=$total+($arr2[$i]*$arr3[$i]);?>
<div class="buy" id="buy">
<h2 class="text1"><?php  echo $j ?></h2>
<div class="picbox"><img src="<?php echo "$arr4[$i]" ?>" class="pic"></div>
<div class="text"><?php echo $arr1[$i] ?></div>
<div class="text2" id="text2"><input type="button" value="－" class="movenum" name="<?php echo "$arr[$i]"?>" onclick="minus(this)">
<span><?php echo $arr2[$i] ?></span><input type="button" name="<?php echo "$arr[$i]"?>" value="＋" class="movenum" onclick="plus(this)"></div>
<div class="text3"><?php echo "￥ ".$arr3[$i] ?></div>
<input type="button" name="<?php echo "$arr[$i]"?>" value="✖"  class="close"  onclick="del(this)">
</div>
<?php $j++;}?>
</div>
<div class="bill" id="count2">
<div class="info"><form><table ><th colspan="2"><h1> Receiver Info</h1></th>
<tr><td><label><i class="fa fa-user-circle"></i>&nbsp;Receiver's name</td><td><input type="text" id="rcvname"></label></td></tr>
<tr><td><label><i class="fa fa-phone "></i>&nbsp;Receiver's Phone number</td><td><input type="text" id="rcvtel"></label></td></tr>
<tr><td><label><i class="fa fa-address-card"></i>&nbsp;Receiver's address</td><td></address><input type="text" class="address" id="rcvaddr"></label></td></tr>
</table></div>
<div class="total" >
<h1 >Total：￥<?php echo "$total";?></h1>
<h5>please check the bill carefully before paying it</h5>
<input type="submit" value="Payment" class="pay" onclick="check()"></form>
</div>
</div>
</body>
<footer>Copyright Reserve</footer>
</html>