<?php
    session_start();
    include("connect.php");
    error_reporting(0);
    $userprofile = $_SESSION['user_name'];
    if($userprofile == true)
    {

    }
    else
    {
        header('location:login1.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        
        <link rel="stylesheet" href="style2.css" >
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            DASHBOARD
        </title>
    </head>
    <body>
        <header>
            <nav class="navbar">
                <img src="images/nayalogo (2).png" class="logo">
                <ul>
                    <li><b><a href="index.php"><img src="images/nayahomepic.png" class="propicc" zoom></a></li></b>
                    <li><b><a href="profile5.html"><img src="images/profilepic.png" class="propic"></a></li></b>
                </ul>
            </nav>
            </header>
            <div class="headerr">
            <div class="side-nav">
                <div class="user">
                    <img src="images/user.png" class="user-img">
                <div>
                    <h2>Arjun Naik</h2>
                        <p>arjunnaik0402@gmail.com</p>
                    </div>
                    <img src="images/star.png" class="star-img">
            </div>
                    <ul>
                        <a href="index.php" style="text-decoration: none;" ><li><img src="images/dashboard.png"><p>Home</p></li></a>
                        <a href="profile5.html" style="text-decoration: none;"><li><img src="images/reports.png"><p>Profile</p></li></a>
                        <li><img src="images/projects.png"><p>Tutorial</p></li>
                        <a href="aboutpage.php" style="text-decoration: none;"><li><img src="images/members.png"><p>About Us</p></li></a>
                        <li><img src="images/messages.png"><p>Contact Us</p></li>
                    </ul>
                    <ul>
                        <a href="logout.php" style="text-decoration: none;"><li><img src="images/logout.png"><b><p>Log Out</p></b></li></a>
                    </ul>
                </div>
            </div>
        <div class="container">
        <div class="parent"id="aa">
               <div class="cc"><h1>HEARTBEAT</h1></div>
                
               <div><IMG class="img_deg" SRC="images/heartbeat.gif" width="190" height="135"></div> 
                <div><h2 id="count-el"><span>0</span></h2></div>
            </div>
                <div class="parent" id="bb"><h1>TEMPERATURE</h1>
                    
                    <IMG class="img_deg" SRC="images/temp.gif" width="-500" height="175"> 
                    <h2 id="temp-el"><span>0</span></h2></span>
                    
                </div>
                <button type="button" class="btn btn-log" onclick="start()">Start</button>
            </div>
                
                
                <script src="index.js"></script>
                
    </body>
</html>
