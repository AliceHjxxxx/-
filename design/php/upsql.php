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
session_start();
if ( !isset( $_SESSION[ "id" ] ) ) {
    header( 'Location:update.php' );
}
header("Content-type:text/html;charset=utf-8");
//声明变量并接受form表单发送过来的数据
error_reporting(E_ALL ^ E_DEPRECATED);
$name = $_POST[ "mn" ];
$gender = $_POST[ "mg" ];
$email = $_POST[ "ma" ];
$tel = $_POST[ "mt" ];
$birth = $_POST[ "mb" ];
$id = $_SESSION[ 'id' ];
$con = mysqli_connect("localhost","root","");
$c=mysqli_select_db($con,"user");
$result=mysqli_query($con,"UPDATE `user`.`users` SET `username` = '$name', `gender` = '$gender',`birthday` = '$birth',`tel` = '$tel',`email` = '$email' WHERE `users`.`id` = $id;");
if($result)
{
    echo  "<script>alert('修改成功！');</script>";
    header( "refresh:1;url=./host.php" );
}
else
{
    echo  "<script>alert('修改失败！');</script>";
    header( "refresh:1;url=./update.php" );
}
?>