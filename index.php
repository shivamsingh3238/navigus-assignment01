<!DOCTYPE html>  
 <html lang="en">  
 <head>  
   <meta charset="UTF-8">  
   <meta name="viewport" content="width=device-width, initial-scale=1.0">  
   <title>Assignment</title>
   <link rel='stylesheet' href="style.css">
 </head>  
 <style>
     .banner-area{
    background-image: url(Image/Background.png);
    background-position: center center;
    background-size: cover;
    height: 100vh;
}

.menu {
    width: 31%;
    float: right;
    list-style: none;
}

.had_div {
   
    max-width: 100%;
    height: 78px;
}

.logo {
    text-decoration: none;
    color: #515f7f;
    font-size: 30px;
    font-family: fantasy;    
    float: left;
}

header {
    max-width: 90%;
    margin-left: 64px;
    margin-top: 1px;
}

.menu li {
    width: 100px;
    line-height: 50px;
    text-align: -webkit-auto;
    color: #2e303a;
    font-size: 14px;
    float: left;
    font-weight: 600;
}

.menu li a {
    text-decoration: none;
    font-family: baloo;
    color: #565e84;
    text-transform: uppercase;
}

.banner-menu h2 {
    font-family: initial;
    margin-top: -80px;
    font-size: 52px;
    color: #6f7ec5;
}

.banner-menu a {
    text-decoration: none;
    border: 1px solid #282d50;
    font-size: 17px;
    padding: 15px 35px;
    color: #bb2a2a;
    display: inline-block;
    margin-top: 5%;
    font-family: poppins;
    text-transform: uppercase;
    border-radius: 18px;
    background-color: #d8d9ea;
    margin-left: 9px;
}

.banner-menu a:hover{
    background: yellow;
    transition: .8s;
    color: #262626;
}
 </style>
 <body>
    <div class="banner-area">
        <div class="had_div">
        <header>
            <a href='#' class='logo'>Navigus</a>

            <ul class='menu'>
                <li><a href='#'>Home</a></li>
                <li><a href='#'>About</a></li>
                <li><a href='#'>Contant</a></li>
            </ul>
        </header>
    </div>
        <div class='banner-menu'>
            <h2>Assignment 1</h2>
            <a href='login.php'>Login</a>
            <a href='signup.php'>Signup</a>
        </div>
    </div>  
    
 </body>  
 </html>
