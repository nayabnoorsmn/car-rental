<!DOCTYPE html>
<html lang="en">

<head>

  <title>REGISTRATION</title>
  <link rel="stylesheet" href="css/regs.css" type="text/css">
</head>

<body>

  <?php

  require_once('connection.php');
  if (isset($_POST['regs'])) {
    $fullname = mysqli_real_escape_string($con, $_POST['fullname']);
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $lic = mysqli_real_escape_string($con, $_POST['lic']);
    $ph = mysqli_real_escape_string($con, $_POST['ph']);

    $pass = mysqli_real_escape_string($con, $_POST['pass']);
    $cpass = mysqli_real_escape_string($con, $_POST['cpass']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $Pass = md5($pass);
    if (empty($fullname) || empty($username) || empty($email) || empty($lic) || empty($ph) || empty($pass) || empty($gender)) {
      echo '<script>alert("please fill the place")</script>';
    } else {
      if ($pass == $cpass) {
        $sql2 = "SELECT *from users where EMAIL='$email'";
        $res = mysqli_query($con, $sql2);
        if (mysqli_num_rows($res) > 0) {
          echo '<script>alert("EMAIL ALREADY EXISTS PRESS OK FOR LOGIN!!")</script>';
          echo '<script> window.location.href = "index.php";</script>';

        } else {
          $sql = "insert into users (FULLNAME,UNAME,EMAIL,LIC_NUM,PHONE_NUMBER,PASSWORD,GENDER) values('$fullname','$username','$email','$lic',$ph,'$Pass','$gender')";
          $result = mysqli_query($con, $sql);


          // $to_email = $email;
          // $subject = "NO-REPLY";
          // $body = "THIS MAIL CONTAINS YOUR AUTHENTICATION DETAILS....\nYour Password is $pass and Your Registered email is $to_email"
          //          ;
          // $headers = "From: sender email";
  
          // if (mail($to_email, $subject, $body, $headers))
  
          // {
          //     echo "Email successfully sent to $to_email...";
          // }
  
          // else
  
          // {
          // echo "Email sending failed!";
          // }
          if ($result) {
            echo '<script>alert("Registration Successful Press ok to login")</script>';
            echo '<script> window.location.href = "index.php";</script>';
          } else {
            echo '<script>alert("please check the connection")</script>';
          }

        }

      } else {
        echo '<script>alert("PASSWORD DID NOT MATCH")</script>';
        echo '<script> window.location.href = "register.php";</script>';
      }
    }
  }


  ?>


  <div class="container">
    <form action="register.php" id="register" method="POST">
      <h2>Registration</h2>
      <div class="content">
        <div class="input-box">
          <label for="name">Full Name</label>
          <input type="text" placeholder="Enter full name" name="fullname" required>
        </div>
        <div class="input-box">
          <label for="name" style="margin: 5px -21px;">Username</label>
          <input type="text" placeholder="Enter username" name="username" required>
        </div>
        <div class="input-box">
          <label for="email">Email</label>
          <input type="email" placeholder="Enter your valid email address" name="email" required>
        </div>
        <div class="input-box">
          <label for="phonenumber" style="margin: 5px -21px;">Phone Number</label>
          <input type="tel" placeholder="Enter phone number" name="ph" required>
        </div>
        <div class="input-box">
          <label for="password">Password</label>
          <input type="password" placeholder="Enter new password" name="pass" required>
        </div>
        <div class="input-box">
          <label for="Cpassword" style="margin: 5px -21px;">Confirm Password</label>
          <input type="password" placeholder="Confirm password" name="cpass" required>
        </div>
        <div class="input-box">
          <label for="lic"">License No.</label>
                <input type=" lic" placeholder="license no." name="lic" required>
        </div>
        <span class="gender-title">Gender</span>
        <div class="gender-category">
          <input type="radio" name="gender" id="male">
          <label for="gender">Male</label>
          <input type="radio" name="gender" id="female">
          <label for="gender">Female</label>
          <input type="radio" name="gender" id="other">
          <label for="gender">Other</label>
        </div>
        <div class="alert">
          <p>By clicking Sign Up, you agree to our <a href="#">Terms,</a><a href="#"> Privacy Policy</a> and <a
              href="#">Cookies Policy.</a> You may receive SMS
            notifications from us and can opt out at any time.</p>
        </div>
      </div>
      <div class="button-container">
        <button value="REGISTER" name="regs" type="submit">Register</button>
      </div>
    </form>
  </div>
</body>

</html>