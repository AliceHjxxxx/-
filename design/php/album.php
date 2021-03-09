<!DOCTYPE html>
<html lang="UTF-8">
    <?php
    header("Content-type:text/html;charset=utf-8");
    ?>

<head>

    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="../css/album.css">
    <link rel="stylesheet" href="../css/host.css"> 
    <link rel="stylesheet" href="../css/font-awesome-4.7.0/css/font-awesome.min.css">

    <title>SANCTUARY</title>   <link href="../image/login/favicon.ico" rel="shortcut icon" type="image/x-icon">

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
     <li ><a href="shoppingcart.php"><i class="fa fa-shopping-cart"></i>Shopping Cart</a></li>
     <!-- <li ><a href="#"><i class="fa fa-film"></i>Gallery</a></li> -->
     <li ><a href="contact.php"><i class="fa fa-envelope-open"></i>Contact Us</a></li>
     <li ><a href="index.php"><i class="fa fa-sign-out"></i>Sign out</a></li>
    </ul>
</div>
    <!-- Swiper -->
     <div class="se-header"><h1>About Album </h1> 
        <!-- <h4 ><i class="fa fa-info-circle"></i>Tips : you can double click any ablum to know about the detail</h4> --></div>  
        
    <div class="swiper-container">
  <h4 class="tips"><i class="fa fa-info-circle"></i>Tips : you can double click any ablum to know about the detail</h4>
        <div class="swiper-wrapper">
           
            <div class="swiper-slide">
                <div class="bx">
              <img src="../image/album/1.jpg" >
                </div>
                <div class="detail">
                    <h3>乐行者</h3>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="bx">
                    <img src="../image/album/2.jpg">
                </div>
                <div class="detail">
                    <h3>江南</h3>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="bx">
                    <img src="../image/album/3.jpg">
                </div>
                <div class="detail">
                    <h3>编号89757</h3>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="bx">
                    <img src="../image/album/4.jpg">
                </div>
                <div class="detail">
                    <h3>曹操</h3>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="bx">
                    <img src="../image/album/5.jpg">
                </div>
                <div class="detail">
                    <h3>西界</h3>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="bx">
                    <img src="../image/album/6.jpg">
                </div>
                <div class="detail">
                    <h3>JJ陆</h3>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="bx">
                    <img src="../image/album/7.jpg">
                </div>
                <div class="detail">
                    <h3>她说</h3>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="bx">
                    <img src="../image/album/8.jpg">
                </div>
                <div class="detail">
                    <h3>学不会</h3>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="bx">
                    <img src="../image/album/13.jpg">
                </div>
                <div class="detail">
                    <h3>因你而在</h3>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="bx">
                    <img src="../image/album/12.jfif">
                </div>
                <div class="detail">
                    <h3>新地球</h3>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="bx">
                    <img src="../image/album/14.jpg">
                </div>
                <div class="detail">
                    <h3>和自己对话</h3>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="bx">
                    <img src="../image/album/9.jpg">
                </div>
                <div class="detail">
                    <h3>不为谁而做的歌</h3>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="bx">  <a href="music_sample.php">
                    <img src="../image/album/11.jpg">
                </div>
                <div class="detail">
               <h3>伟大的渺小</h3></a>
                </div>
            </div>

        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>
    <script type="text/javascript" src="../Js/swiper.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: 'auto',
            coverflowEffect: {
                rotate: 60,
                stretch: 0,
                depth: 500,
                modifier: 1,
                slideShadows: true,
            },
            pagination: {
                el: '.swiper-pagination',
            },
        });
    </script>
</body>

</html>