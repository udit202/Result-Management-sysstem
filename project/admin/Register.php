<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
          border-radius: 9px;
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
          width: 105%;
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
          margin-top: 5px;
          width: 50px;
        }
    
        .log {
          border: 2px solid navy;
          padding: 6px 17px;
          border-radius: 25px;
          font-size: 18px;
    
        }
        .log:hover{
          background-color: navy;
          color: white;
    
        }
    
       a{
        text-decoration: none;
       }
       a:hover{
        color: white;
       }
       .noti{
        width: 98%;
        position: absolute;
        top: 5px;
       }
      </style>
      <div class="btn_div">
        <button class="log" id="log"><a href="login.php" >Login</a></button>
      </div>
    
      <div class="form-container">
        <form id="registrationForm"  action="<?php
        echo $_SERVER['PHP_SELF']; ?>" method="post">
          <img src="images/logois.jpg" alt=""> <br>
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
      <?php
require 'php/Db.php';
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST['admin'])){
      // echo var_dump($_POST);
     $admin_id = $_POST['admin'];
     $username = $_POST['Username'];
     $mobile = $_POST['phone'];
     $email = $_POST['gmail'];
     $password = $_POST['password'];
     $exist = "SELECT * FROM `request` WHERE mobile = $mobile";
     $userexist = mysqli_query($conn,$exist);
     $num = mysqli_num_rows($userexist);
    if($num>0){
     while($row=mysqli_fetch_assoc($userexist)){
       if($row['mobile']==$mobile){
         echo '<div class="alert alert-danger alert-dismissible fade show noti" role="alert">
     <strong> '.$row['name'].' !</strong> You Already Register So go on <a href="login.php">Login </a>Page. or Contact with your HOD for Request Acceptness.
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>';
       }
     }
    }
     else{
         $sql = "INSERT INTO `request` (`name`, `mobile`, `email`, `password`, `del`) VALUES ('$username', '$mobile', '$email', '$password', ' $admin_id')";
     $result = mysqli_query($conn,$sql);
    if($result){
      echo '<div class="alert alert-success alert-dismissible fade show noti" role="alert">
      <strong>succesfully sended!</strong> Your request succesfully sended to your HOD.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    }
    } 
  }
?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
    
</body>
</html>