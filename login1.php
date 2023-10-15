<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Login Page</title>
  <link rel="stylesheet" href="login1.css?v=<?php echo time();?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <form action="login1.php" method="post">

  
    <div class="container">
       <center> <h1>Admin Login</h1> </center>
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" id="email" name="email" required>
  
      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" id="password" name="password" required>
  
      <!-- <button type="button" onclick="submitForm()">Login</button> -->
      <div class="form-group">
                <button type="submit" class="registerbtn" value="login" name="login">Login</button>
            </div>
      <!-- <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label> -->
    <!-- </div>
    <div class="container"> -->
      <!-- <button type="button" class="cancelbtn">Cancel</button> -->
      <div class="containerr"><b><p>New Here</p></b>
      <!-- <a href="registration.html" style="text-decoration: none;"><button type="button" class="regbtn">Register</button></a>  -->
      <div class="regi" ><a href="http://localhost/mnprjct/miniproject/miniproject/registration.php" style="text-decoration: none; color:blue;"><b>Click here Register Now</b></a><br></div>
      <span class="psw">Forgot <a href="#">password?</a></span></div>
    </div>

  </form>
  <!-- <script>
    function submitForm() {
      var email = document.getElementById("email").value;
      var pass = document.getElementById("password").value;
      if (email === 'vijetnaik21@gmail.com' && pass === '12345678') {
        alert("Logging you in");
        window.location.assign("index.html");
      } else {
        alert("Invalid Credentials");
      }
    }
  </script> -->
</body>
</html>

<?php

include("connect.php");
ini_set('display_errors','Off');
        if(isset($_POST['login']))
        {
            $username = $_POST['email'];
            $pwd = $_POST['password'];
        }

        $sql = "SELECT * FROM `table` WHERE email = '$username' && password = '$pwd'";
        $data = mysqli_query($conn, $sql);

        $total = mysqli_num_rows($data);
        // echo "<br>";
        // echo $total;
        if($total == 1)
        {
          $_SESSION['user_name'] = $username;
          header('location:index.php');
        }
        else
        {
          // echo "Login Failed";
        }
?>