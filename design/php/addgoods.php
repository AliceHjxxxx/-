<!-- 
<script type='text/javascript' src='../Js/goods.js'></script> -->

<?php
session_start();
if ( !isset( $_SESSION[ "id" ] ) ) {
    header( 'Location:index.php' );
}
$tid=$_SESSION[ "id" ]; 
 header("Content-type:text/html;charset=utf-8");
  error_reporting(E_ALL ^ E_NOTICE);
 $goodsid = $_POST['goodsid'];
//  $goodsid = $_GET['goodsid'];
// var_dump( $_GET['goodsid']);
  var_dump($tid);
$con = mysqli_connect("localhost","root",""); 
mysqli_select_db($con,"user");
$con->query("SET NAMES utf8");
 $query = "SELECT  * FROM `goods` WHERE `id`='$goodsid'"; 
$result=mysqli_query($con,$query);
if (!$result) { printf("Error: %s\n", mysqli_error($con)); exit();}
 $row= mysqli_fetch_assoc($result);
//  var_dump($result);
$rid=$row['id'];
 $rn=$row['name'];
 $rp=$row['price'];
//  $rs=$row['stock']-1;
 $rpath=$row['path'];
 $q1 = "SELECT  * FROM `$tid` WHERE `id`='$goodsid'";
 $r1=mysqli_query($con,$q1);
  $row1= mysqli_fetch_assoc($r1);
 if(empty($row1))
 { 
    $q2="INSERT INTO `$tid`(`id`, `name`, `number`, `price`, `path`) VALUES ('$rid','$rn','1',' $rp',' $rpath')"; 
    mysqli_query($con,$q2);
  
 }
else
{
    $cnum=$row1['number']+1;
    $q3="UPDATE `$tid` SET `number`='$cnum' WHERE `id`='$goodsid'";
    mysqli_query($con,$q3);
}   
  // $q4="UPDATE `goods` SET `stock`='$rs' WHERE `id`='$goodsid'";    
  // mysqli_query($con,$q4);
 ?>  