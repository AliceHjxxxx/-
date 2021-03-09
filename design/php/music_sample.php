<!DOCTYPE html>
<html lang="UTF-8">
<head>
<?php header("Content-type:text/html;charset=utf-8");?>
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="../css/host.css">
	<link rel="stylesheet" href="../css/music_sample.css">  
    <link rel="stylesheet" href="../css/player/player.css">
 
    <link rel="stylesheet" href="../css/font-awesome-4.7.0/css/font-awesome.min.css">

    <title>SANCTUARY</title>   <link href="../image/login/favicon.ico" rel="shortcut icon" type="image/x-icon">

</head>

<body>
    <?php  
 error_reporting(E_ALL ^ E_NOTICE);
$name = $_POST["muname"];
// $name = $_GET["muname"];
//  $test= $_POST["clicknum"];
//  file_put_contents('sos.log', json_encode($_POST), true);
//  $json_obj=json_encode($name);
// $name = $_GET['muname'];
 echo  $name;
// echo $test;
$con = mysqli_connect("localhost","root",""); 
mysqli_select_db($con,"user");
$con->query("SET NAMES utf8");
$query = "SELECT  * FROM `music` WHERE `name`='$name'"; 
$result=mysqli_query($con,$query);
if (!$result) { printf("Error: %s\n", mysqli_error($con)); exit();}
$row= mysqli_fetch_assoc($result);
$clickadd=$row['clicknum']+1;
$q2="UPDATE `music` SET `clicknum`='$clickadd' WHERE `name`='$name'";
$r2=mysqli_query($con,$q2);
// mysqli_close($con);
$q3 = "SELECT  * FROM `music`";
$r3=mysqli_query($con,$q3);
$arr=array();
$arr1=array();
$i=0;
$j=0;
while($row1=mysqli_fetch_row($r3)){ 
       $arr[$i]=$row1[0];
       $arr1[$j]=$row1[1];
   
    //   echo "名：". $arr[$i]."<br/>";     
    //   echo "点击数：".$arr1[$j]."<br/>";   
       $i++;$j++;
}
for ($i = 0; $i < 11; $i++) {
    for ($j = 0; $j < 11- $i - 1; $j++) {
        if ($arr1[$j] < $arr1[$j + 1]) {
            $temp =$arr1[$j];
            $name=$arr[$j];
            $arr1[$j] = $arr1[$j + 1];
            $arr[$j] = $arr[$j + 1];
            $arr1[$j + 1] = $temp;
            $arr[$j + 1] = $name ;
        }
    }
    // echo '第'.($i+1).'次排序后的结果';
    // var_dump($arr1);
    // var_dump($arr);
    // echo '<br>';
}
// for($i=0;$i<5;$i++)
// {
// $sq="SELECT  * FROM `music` WHERE `clicknum`='$arr1[$i]'";
// $sr=mysqli_query($con,$sq);
// $srow= mysqli_fetch_assoc($sr);
//  $arr[$i]=$srow['name'];
// // $clicknum=$srow['clicknum'];
// // $in="INSERT INTO `range`(`name`, `clicknum`) VALUES ('$name','$clicknum')";
// }

mysqli_close($con);
?>
</body>

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
<!-- <script type='text/javascript' src='../Js/shoppingcart.js'></script> -->
<?php
session_start();
if ( !isset( $_SESSION[ "id" ] ) ) {
    header( 'Location:index.php' );
}
$tid=$_SESSION[ "id" ]; 
 header("Content-type:text/html;charset=utf-8");
  error_reporting(E_ALL ^ E_NOTICE);
  ?>
<section class="sample">
<div class="se-header"><h1>About Album </h1> </div></div>
<div id="content">
				
				
                <div id=single-p><div class="single-album">	<img src="../image/album/11.jpg"  /></div>
                    <div clsss="intro">
                        <h2>伟大的渺小</h2>
						<h3>中文名称  伟大的渺小</h3>
						<h3>外文名称  Message In A Bottle</h3>
						<h3>专辑语言  普通话</h3>
						<h3>专辑歌手 林俊杰</h3>
                        <h3>专辑时长  46分55秒</h3>
                    </div>
                
                  <h4> 售价:&nbsp;￥200</p><h5>前50名可获得签名专辑</h4>
                  
                    
                   
            <i class="fa  fa-hand-o-right fa-2x"><input type="button" value="加入购物车"  var="12" class="add"  onclick="addcart()"></i>
               
                      <h6><i class="fa fa-inbox"></i>&nbsp;产品在1-3个工作日发货&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="fa fa-info-circle"></i>&nbsp;不换不退&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="fa fa- fa-commenting-o"></i>&nbsp;有问题请及时联系客服</h6>     
                </div>             
    <div class="prod-single-content" id="count">
    <div class="music-detail" id="music-detail">
						
<table>
	<tr><td>曲序</td>
	<td>曲目</td><td>作曲</td><td>填词</td><td>编曲</td><td>制作</td><td><i class="fa fa-headphones fa-2x" ></i></td></tr>	
	<tr><td>01</td>
		<td>圣所</td>
		<td  rowspan="11">林俊杰</td>
		<td>张思尔</td>
		<td>The Swaggernautz</td>
        <td rowspan="8">林俊杰</td>
<td><input type="button" id="trylisten" var="11" value="试听" ></td>
        </tr>		
			<tr><td>02</td>
		<td>伟大的渺小</td>
		<td>小寒</td>
        <td >吴庆隆</td>
<td><input type="button" id="trylisten" var="1" value="试听"></td>
       </tr>
			<tr><td>03</td>
		<td>穿越</td>
		<td>林雨果</td>
        <td>吴庆隆</td>
<td> <input type="button" id="trylisten" var="2" value="试听"></td>
      </tr>
			<tr><td>04</td>
		<td>四点四十四</td>
		<td>张怀秋</td>
        <td>林俊杰</td>
<td> <input type="button" id="trylisten" var="3" value="试听"></td>
    </tr>
		<tr><td>05</td>
			<td>我继续</td>		
			<td>方文山</td>
            <td>林俊杰</td> 
<td> <input type="button" id="trylisten" var="4" value="试听"> </td>   
            </tr>
			<tr><td>06</td>
				<td>剪云者</td>
					<td>易家扬</td>
                    <td>Martin Tang</td>
<td> <input type="button" id="trylisten" var="5" value="试听"></td>
                   </tr>
					<tr><td>07</td>
						<td>黑夜问白天</td>
						<td>易家扬</td>
                        <td>Terence Teo</td>
<td><input type="button" id="trylisten" var="6" value="试听"></td>
                       </tr>
						<tr><td>08</td>
							<td>丹宁执着</td>
							<td>周信廷</td>
                            <td>Kenn C</td>
<td><input type="button" id="trylisten" var="7" value="试听"></td>
                            </tr>
							<tr><td>09</td>
							<td>身为风帆</td>
							<td>姚若龙</td>
							<td>吴庆隆</td>
                            <td>许环良</td>
<td><input type="button" id="trylisten" var="8" value="试听"></td>
                            </tr>
							<tr><td>10</td>
								<td>小瓶子</td>
								<td>林俊杰、林怡凤</td>
								<td>蔡政勋、田雅欣</td>
                                <td rowspan="2">林俊杰</td> 
<td><input type="button" id="trylisten" var="9" value="试听"></td>                          
                            </tr>
								<tr><td>11</td>
									<td>Until The Day</td>
									<td>林俊杰</td>
                                    <td>吴庆隆</td>
<td><input type="button" id="trylisten" var="10" value="试听"></td>
                                </tr>
                                </table>
                             </div>
 <div class="show-range">
     
 <br> 	<h2><i class="fa fa-heart"></i>&nbsp;&nbsp;推荐榜单</h2></br> 

 <h3>
     <?php for($i=0;$i<3;$i++)
{   
    $range=$i+1;
    // echo '';
    echo "<p class='top'> TOP".$range;
    echo "</p>";
    echo "              ";
    if($arr[$i]=="圣所")
    {  
        echo "<input type='button' value='圣所' var=11 class='range'>";
               
    }
   else if($arr[$i]=="伟大的渺小")
    {
        echo "<input type='button' value='伟大的渺小' var=1 class='range'>";
    }
  else if($arr[$i]=="穿越")
    {
        echo "<input type='button' value='穿越' var=2  class='range'>";
   
    }
   else if($arr[$i]=="四点四十四")
    {
        echo "<input type='button' value='四点四十四' var=3 class='range'>";
    }
  else if($arr[$i]=="我继续")
    {
        echo "<input type='button' value='我继续' var=4  class='range'>";
    }
   else if($arr[$i]=="剪云者")
    {
        echo "<input type='button' value='剪云者' var=5  class='range'>";
    }
    else if($arr[$i]=="黑夜问白天")
    {
        echo "<input type='button' value='黑夜问白天' var=6  class='range'>";
    }
    else if($arr[$i]=="丹宁执着")
    {
        echo "<input type='button' value='丹宁执着' var=7  class='range'>";
    }
    else if($arr[$i]=="身为风帆")
    {
        echo "<input type='button' value='身为风帆' var=8  class='range'>";
    }
    else if($arr[$i]=="小瓶子")
    {
        echo "<input type='button' value='小瓶子' var=9  class='range'>";
    }
    else if($arr[$i]=="Until The Day")
    {
        echo "<input type='button' value='Until The Day' var=10  class='range'>";
    }
    echo  "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;播放量：".$arr1[$i];
    echo  '<br>';
    echo  '<br>';
}?> </h3>
   </div>
 </div>
    <script src="../Js/jquery.min.js"></script>
    <script src="../Js/player/index.js"></script>
    <script src="../Js/player/range.js"></script>
<div class="player">   <div id="dowebok">
  
  <div id="player">
      <div id="player-track">
          <div id="album-name"></div>
          <div id="track-name"></div>
          <div id="track-time">
              <div id="current-time"></div>
              <div id="track-length"></div>
          </div>
          <div id="s-area">
              <div id="ins-time"></div>
              <div id="s-hover"></div>
              <div id="seek-bar"></div>
          </div>
      </div>
      <div id="player-content">
          <div id="album-art">
              <img src="../image/album/11.jpg" class="active" id="_1">
              <div id="buffer-box">加载中...</div>
          </div>
          <div id="player-controls">
              <div class="control">
                  <div class="button" id="play-previous">
                      <i class="fa fa-backward"></i>
                  </div>
              </div>
              <div class="control">
                  <div class="button" id="play-pause-button">
                      <i class="fa fa-play"></i>
                  </div>
              </div>
              <div class="control">
                  <div class="button" id="play-next">
                      <i class="fa fa-forward"></i>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
</div>

			</div>
</section>
</html>