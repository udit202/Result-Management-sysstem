<?php 
require 'register.php';
?>
<!DOCTYPE html>
<html>

<head>
  <title>Login and Registration Form</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
  <style>
    

    body {
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
      text-align: center;
      padding: 20px;
    }
    .btn_div {
      text-align: right;
     
    }
    .form-container {
      display: flex;
      justify-content: space-around;
      margin-top: 30px;
    }

    form {
      background-color: #fff;
      border-radius: 5px;
      padding: 20px;
      width: 380px;
      padding-right: 40px;
      padding-top: 0px;
      margin-top: 0px;
    }

    h2 {
      margin-top: 0px;
      color: navy;
    }

    label {
      display: block;
      margin-bottom: 5px;
      font-size: 14px;
      font-weight: bold;
    }

    input {
      width: 100%;
      padding: 8px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .login {
      width: 100%;
      padding: 10px;
      background-color: navy;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .login:hover {
      background-color: rgb(46, 24, 45);
    }

    img {
      width: 50px;
    }

    #registrationForm {
      display: none;
    }

    .log {
      font-size: 10px;
      border: 2px solid navy;
      padding: 6px 15px;
      border-radius: 7px;

    }

    .log:hover {
      background-color: navy;
      color: white;

    }
  </style>
  <div class="btn_div">
    <button class="log" id="log">Login</button>
    <button class="log" id="Reg">Register</button>
  </div>

  <div class="form-container">
    <form id="loginForm" action="<?php
    echo $_SERVER['PHP_SELF']; ?>" method="post">
      <img src="admin/images/logois.jpg" alt=""> <br> <br>
      <h2>Login</h2>
      <div>

        <label for="loginUsername">Email</label>
        <input type="text" id="loginUsername" required name="user">
      </div>
      <div>
        <label for="loginPassword">Password</label>
        <input type="password" id="loginPassword" required name="log">
      </div>
      <button type="submit" class="login">Log In</button>
    </form>

    <form id="registrationForm" onsubmit="return validateForm()" action="<?php
    echo $_SERVER['PHP_SELF']; ?>" method="post">
      <img src="admin/images/logois.jpg" alt=""> <br>
      <h2>Registration</h2>
      <div>

        <input type="text" id="admin" name="admin" hidden >
      </div>
      <div>
        <label for="regUsername">Username</label>
        <input type="text" id="regUsername" required name="Username">
      </div>
      <div>
        <label for="Mobile">Mobile No.</label>
        <input type="tel" id="Mobile" maxlength="10" required name="phone">

      </div>
      <div>
        <label for="regEmail">Email</label>
        <input type="email" id="regEmail" name="gmail" required>
      </div>
      <div class="Mobile_input">
        <label for="regPassword">Password</label>
        <input type="password" id="regPassword" name="password" required>
      </div>

      <div>
        <label for="regConfirmPassword">Confirm Password</label>
        <input type="password" id="regConfirmPassword" name="confirmPassword" required>
      </div>
      <span id="message"></span><br>
      <button type="submit" class="login">Register</button>
    </form>
  </div>

  <script data-two_delay_id="two_64e4d3f860ecb" data-two_delay_src="script.js"></script>
  <script src="log.js"></script>
  <script src="id.js"></script>
  <script>
    function validateForm() {
      var password = document.getElementById("regPassword").value;
      var confirmPassword = document.getElementById("regConfirmPassword").value;
      var message = document.getElementById("message");

      if (password !== confirmPassword) {
        message.innerHTML = "Passwords do not match";
        message.style.color = "red";
        return false;
      } else {
        message.innerHTML = "Passwords match";
        message.style.color = "green";
        return true;
      }

    }
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>


</body>

</html>
