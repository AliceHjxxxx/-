<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<title>Loading1</title>
		<style>
			body {
				margin: 0;
				padding: 0;
				background: #333;
			}
			.middle {
				position: absolute;
				top: 50%;
				left: 50%;
				transform: translate(-50%, -50%);
			}
			.bar {
				width: 6px;
				height: 2px;
				background: white;
				display: inline-block;
				transform-origin: bottom center;
				animation: loading 1.5s ease-in-out infinite;
			}
			.bar1 {
				animation-delay: 0.1s;
			}
			.bar2 {
				animation-delay: 0.2s;
			}
			.bar3 {
				animation-delay: 0.3s;
			}
			.bar4 {
				animation-delay: 0.4s;
			}
			.bar5 {
				animation-delay: 0.5s;
			}
			.bar6 {
				animation-delay: 0.6s;
			}
			.bar7 {
				animation-delay: 0.7s;
			}
			.bar8 {
				animation-delay: 0.8s;
            }
            
			@keyframes loading {
				0% {
					transform: scaleY(0.1);
					background: #fff;
				}
				50% {
					transform: scaleY(30);
					background:#78909C;
				}
				100% {
					transform: scaleY(0.1);
					background: transparent;
				}
            }
            h3
            {
                color:white;
            }
		</style>
	</head>
	<body>
		<div class="middle">
			<div class="bar bar1"></div>
			<div class="bar bar2"></div>
			<div class="bar bar3"></div>
			<div class="bar bar4"></div>
			<div class="bar bar5"></div>
			<div class="bar bar6"></div>
			<div class="bar bar7"></div>
            <div class="bar bar8"></div>
            <h3>LOADING...</h3>
		</div>
	</body>
</html>

<?php
//声明变量并接受form表单发送过来的数据
error_reporting(E_ALL ^ E_DEPRECATED);

$year = $_POST[ "year" ];
$month = $_POST[ "month" ];
$day = $_POST[ "day" ];

$name = $_POST[ "name" ];
$pwd = $_POST[ "pwd" ];
$birthday = $year . "-" . $month . "-" . $day;
$gender = $_POST[ "gender" ];
$email = $_POST[ "email" ];
$tel = $_POST[ "tel" ];



//字符串拼接，打印输出
header("Content-type:text/html;charset=utf-8");
//连接数据库
$con = mysqli_connect("localhost","root","");

// if($con){
// echo "<br/>连接数据库成功"."<br/>";
// } else{
// echo "<br/>连接数据库失败".mysql_error();
// }
//选择数据库
mysqli_select_db($con,"user");
// if($c){
// echo "<br/>选择数据库成功"."<br/>";
// } else{
// echo "<br/>选择数据库失败".mysql_error();
// }
//设置mysql字符编码

//insert语句
$insert = "insert into users(username,password,gender ,birthday,tel, email) 
values ('$name','$pwd','$gender','$birthday','$tel','$email')";
$res_insert = mysqli_query($con,$insert);
if($res_insert){
  $query = "SELECT  * FROM `users`WHERE `username`='$name'";
  $result =mysqli_query($con,$query);
  $row= mysqli_fetch_assoc($result);
  $tid=$row['id'];
  session_start();
  $_SESSION[ 'id' ] = $row['id'];
  $sql ="CREATE TABLE `$tid` (
	`id` int(20) NOT NULL,
	`name` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
	`number` int(10) NOT NULL,
	`price` int(20) NOT NULL,
	`path` varchar(500) NOT NULL,
	PRIMARY KEY (`id`)
   ) ENGINE=InnoDB DEFAULT CHARSET=latin1";

mysqli_query($con,$sql) or die("创建表格错误：");
    // echo "<script>alert('Successful Register ')</script>";
   header( "refresh:1;url=./home.php" );
} else {
   echo "<script>alert('Fail Register ')</script>";
   header( "refresh:1;url=./index.php" );
 
}
?>