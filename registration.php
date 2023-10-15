<?php  include("connect.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <title>Registration Form</title>
    <link rel="stylesheet" href="registration.css?v=<?php echo time(); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Young Serif:400,700&display=swap">

</head>

<body>
        <div class="container">
            <form action="registration.php" method="post">
            <center>
                <h1>Registration Form</h1>
            </center>
            <div class="form-group">
                <label for="firstname">Firstname:</label>
                <input type="text" id="firstname" name="firstname" placeholder="Firstname" maxlength="32" required>
            </div>
            <div class="form-group">
                <label for="lastname">Lastname:</label>
                <input type="text" id="lastname" name="lastname" placeholder="Lastname" maxlength="32" required>
            </div>
            <div class="form-group">
                <label>Date of Birth:</label>
                <input type="date" id="birthdate" name="birthdate" required>
            </div>
            <div class="form-group">
                <label>Gender:</label>
                <input type="radio" id="male" value="Male" name="gender" required>
                <label for="male">Male</label>
                <input type="radio" id="female" value="Female" name="gender" required>
                <label for="female">Female</label>
                <input type="radio" id="other" value="Other" name="gender" required>
                <label for="other">Other</label>
            </div>
            <div class="form-group">
              <label for="phone">Phone:</label>
              <div class="phone-input">

                  <input type="tel" id="phone" name="phone" placeholder="Phone no." maxlength="10" required>
              </div>
          </div>
            <div class="form-group">
                <label for="medicalIssues">Medical Issues:</label>
                <textarea id="medicalIssues" name="medicalIssues" cols="80" rows="2" placeholder="Medical Issues"
                    required></textarea>
            </div>
            
            <div class="form-group">
                <label for="currentAddress">Current Address:</label>
                <textarea id="currentAddress" name="currentAddress" cols="80" rows="5" placeholder="Current Address"
                    required></textarea>
            </div> 

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter Email" required>
            </div>

            <div class="form-group">
              <label for="password">Password:</label>
              <input type="password" id="password" name="password" placeholder="Enter Password" required>
              <span id="password-error" class="error-message"></span>
            </div>
          
            <div class="form-group">
                <label for="passwordRepeat">Re-type Password:</label>
                <input type="password" id="passwordRepeat" name="passwordRepeat" placeholder="Retype Password" minlength="8" required>
            </div>
            <div class="form-group">
                <button type="submit" class="registerbtn" name="register">Register</button>
                <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
            </div>
</form>
</body>

</html>

<?php
        if($_SERVER['REQUEST_METHOD'] == "POST")
        {
            $fname    = $_POST['firstname'];
            $lname    = $_POST['lastname'];
            $dob      = date('Y-m-d',strtotime($_POST['birthdate']));
            $gender   = $_POST['gender'];
            $phone    = $_POST['phone'];
            $med      = $_POST['medicalIssues'];
            $address  = $_POST['currentAddress'];
            $email    = $_POST['email'];
            $password = $_POST['password'];
            $repeat   = $_POST['passwordRepeat'];

            $sql = "INSERT INTO `table` (`fname`, `lname`, `dob`, `gender`, `phone`, `med`, `address`, `email`, `password`, `repass`) VALUES (' $fname', ' $lname', '$dob ', ' $gender', ' $phone', ' $med', ' $address', '$email', '$password', '$repeat')";
            $data = mysqli_query($conn, $sql);

            if($data)
            {
                echo "Data inserted";
            }
            else
            {
                echo "Failed";
            }
        }
?>