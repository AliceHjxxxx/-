<?php
session_start();
if ( !isset( $_SESSION[ "id" ] ) ) {
    header( 'Location:index.php' );
}
$mnum=0;
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
$query = "SELECT * FROM `$tid` where `id`=' $goodsid'";
$result=mysqli_query($con,$query);
$row= mysqli_fetch_assoc($result);
if (!$result) { printf("Error: %s\n", mysqli_error($con)); exit();}
if($row['number']>1)
{
$mnum=$row['number']-1;
$q3="UPDATE `$tid` SET `number`='$mnum' WHERE `id`='$goodsid'";
mysqli_query($con,$q3);
}
?>