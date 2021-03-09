<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SANCTUARY</title>
    <link rel="stylesheet" href="../css/login1.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="../css/font-awesome-4.7.0/css/font-awesome.min.css">
    <link href="../image/login/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <script type="text/javascript" src="../Js/login.js"></script>
    <script type="text/javascript" src="../Js/register.js"></script>


</head>
<body>
    <div class="welcome" id="index">
        <span>sanctuary </span>
        <div class="bt">
            <input type="button" id="bt1" value="Login" onclick="loginpop()">
            <input type="button" id="bt2" value="Register" onclick="regpop()">
        </div>
    </div>
    <div id="log"> 
    
        <form action="logincheck.php" class="box" method="POST" onsubmit="return lcheckall();">                     
             <img src="../image/register/wr.png" class="re-icon" onclick="returnin()"> <h1> Login</h1>
            <input type="text" name="name" placeholder="Username" id="loname" onblur="uname()" >
            <input type="password" name="pwd" placeholder="Password" id="lopwd" onblur="upwd()">
            <input type="submit" value="Enter The Sanctuary">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-google-plus-g"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
            <a href="#"><i class="fab fa-qq"></i></a>
        </form>
    </div>
    <div id="reg">
           
        <form action="regcheck.php" class="rbox" method="POST" onsubmit="return checkall();">
         <img src="../image/register/wr.png" class="re-icon" onclick="returnin()">
            <h1>Register</h1>  
            <input type="text" class="username" name="name" placeholder="Username" id="rgname" onblur="rname()">     
            <input type="password" name="pwd" placeholder="Password" id="rgpwd" onblur="rpwd()">
            <input type="password" name="repwd" placeholder="Password again" id="rgrepwd" onblur="regpwd()"> 
            <label><img src="../image/register/m1.png" class="sex"><input type="radio" name="gender" value="LFGG" checked> </label>
            <label><img src="../image/register/w1.png"  class="sex"><input type="radio" name="gender" value="LFJJ"></label>
            <br><div><input type="text" name="year" class="date" placeholder="Year" id="year" onblur="ryear()">&nbsp;/&nbsp;
            <input type="text" name="month" class="date" placeholder="Month" id="month" onblur="rmonth()">&nbsp;/&nbsp;
            <input type="text" name="day" class="date" placeholder="Day" id="day" onblur="rday()"></div></br>
            <input type="tel" name="tel" placeholder="Telephone" id="tel" onblur="rtel()">
            <input type="email" name="email" placeholder="E-mail" id="email" onblur="remail()">
            <input type="submit" value="Just Follow Him！">
            </form>

    </div>
    
    <script>
</script>
</body>
</html>