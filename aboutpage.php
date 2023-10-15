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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="agprof.css">
    <title>Document</title>
</head>
<body>
    
    <div class="about-section">
        <h1>About Us </h1>
        <p>Some text about who we are and what we do.</p>
        <p>Resize the browser window to see that this page is responsive by the way.</p>
      </div>
      <h2 style="text-align:center">Our Team</h2>
      <nav style="justify-content: space-between;display: flex;">
      <div class="row">
        <div class="column">
          <div class="card">
            <img src="/w3images/team1.jpg" alt="ARJUN" style="width:100%">
            <div class="container">
              <h2>Arjun Naik</h2>
              <p class="title">Member 1</p>
              <p>Some text about who we are </p>
              <p>arjunnaik0402@student.sfit.ac.in</p>
              <p><button class="button">Contact</button></p>
            </div>
          </div>
        </div>
      
        <div class="column">
          <div class="card">
            <img src="/w3images/team2.jpg" alt="VIJET" style="width:100%">
            <div class="container">
              <h2>Vijet Naik</h2>
              <p class="title">Member 2</p>
              <p>Some text about who we are </p>
              <p>vijetnaik21@student.sfit.ac.in</p>
              <p><button class="button">Contact</button></p>
            </div>
          </div>
        </div>
      
        <div class="column">
          <div class="card">
            <img src="/w3images/team3.jpg" alt="OMKAR" style="width:100%">
            <div class="container">
              <h2>Omkarrrr Parab</h2>
              <p class="title">Member 3</p>
              <p>Some text about who we are </p>
              <p>omkarparab1104@student.sfit.ac.in</p>
              <p><button class="button">Contact</button></p>
            </div>
          </div>
        </div>
      </div>
    
      <div class="column">
        <div class="card">
          <img src="/w3images/team2.jpg" alt="Hrushikesh" style="width:100%">
          <div class="container">
            <h2>Hrushikesh Pandit</h2>
            <p class="title">Member 4</p>
            <p>SOME TEXT</p>
            <p>hrushikeshpandit05@gmail.com</p>
            <p><button class="button">Contact</button></p>
          </div>
        </div>
      </div>
    </nav>
</body>
</html>