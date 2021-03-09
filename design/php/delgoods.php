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
$query = "DELETE FROM `$tid`  WHERE `id`='$goodsid'";
$result=mysqli_query($con,$query);
if (!$result) { printf("Error: %s\n", mysqli_error($con)); exit();}
?>