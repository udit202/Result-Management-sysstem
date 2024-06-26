<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="css/notification.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

</head>

<body>
      <style>
        .container {
          width: 100%;
          height: 700px;
          background-image: url(images/wp5718447.webp);
          background-repeat: no-repeat;
          background-size: cover;
          /* filter: blur(20px); */
        }
    
        .setform {
          position: absolute;
          top: 3px;
          width: 100%;
          height: 700px;
          background-color: transparent;
        }
    
        .setform>div {
          width: 100%;
          height: 100%;
          background-color: transparent;
          position: relative;
          display: flex;
          justify-content: center;
          align-items: center;
        }
    
        .form-container {
          background-color: rgb(28, 26, 26);
          width: 320px;
          height: auto;
          text-align: center;
          border-radius: 8px;
          box-shadow: rgb(238, 239, 240) 0px 20px 30px -10px;
          padding-bottom: 20px;
          margin-left: -25px;
    
        }
    
        img {
          width: 50px;
          margin: 20px 0px 0px;
        }
    
        h2 {
          color: white;
          font-weight: 700;
          font-family: 'Lobster', sans-serif;
        }
    
        label {
          width: 100%;
          display: block;
          font-size: 19px;
          color: rgb(255, 255, 255);
          font-weight: bold;
          margin-bottom: 0px;
        }
    
        input {
          border: none;
          border-radius: 10px;
          color: navy;
          width: 90%;
          padding: 6px 20px;
          margin: 8px 0;
          border: 1px solid #ccc;
          box-sizing: border-box;
          font-size: 15px;
          outline: none;
          box-shadow: rgb(238, 239, 240) 0px 10px 20px -8px;
        }
    
        button {
          /* background-color: rgb(129, 110, 110); */
          background-color: transparent;
          color: white;
          padding: 7px 20px;
          margin: 8px 0px;
          border: none;
          cursor: pointer;
          width: 85%;
          font-size: 17px;
          border: 2px solid white;
        border-radius: 5px;
        }
    
        button:hover {
          background-color: red;
          box-shadow: rgb(238, 239, 240) 0px 20px 30px -10px;
        }
    
        .btn_div {
          position: absolute;
          width: 99%;
          top: 0px;
          text-align: center;
          z-index: 5;
        }
    
        .btn_div>div {
          position: relative;
          top: 30px;
          width: 95%;
          text-align: right;
        }
    
        .btn_div>div>a {
          font-size: 1.3rem;
          text-decoration: none;
          color: white;
          border: 1px solid white;
          border-radius: 4px;
          padding: 6px 20px;
          margin-left: 20px;
          margin-top: 40px;
        }
        .btn_div>div>a:hover{
          background-color: red;
          box-shadow: rgb(238, 239, 240) 0px 20px 30px -10px;
        }
        .message{
          color: red;
          font-size: 16px;
        }
      </style>
  <div class="container">

  </div>
  <div class="btn_div">
    <div>
      <a href="login.php">Login</a>
    </div>
  </div>
  <div class="setform">
    <div>
      <div class="form-container">
        <form id="registrationForm" action="<?php
            echo $_SERVER['PHP_SELF']; ?>" method="post" onsubmit="return validateForm()">
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
          <p id="message" class="message"></p>
          <button type="submit" class="login">Register</button>
        </form>
      </div>
    </div>
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
        echo '<div class="noti_div pending" id="noti_div" style="margin-top: 30px;">
        <div class="noti_div2">
            <div class="error">
                <h3  class = "exist" style ="padding-left: 50px;">
                <span>'.$row['name'].'</span> !Employee Alredy Register. So go on <a href="login.php">Login </a>Page. or Contact with your HOD for Request Acceptness.
                </h3>
            </div>
            <div class="noti_btn">
                <span class="material-symbols-outlined" id="not_btn">
                    close
                </span>
            </div>
        </div>
      </div>';
       }
     }
    }
     else{
         $sql = "INSERT INTO `request` (`name`, `mobile`, `email`, `password`, `del`) VALUES ('$username', '$mobile', '$email', '$password', ' $admin_id')";
     $result = mysqli_query($conn,$sql);
    if($result){
      
      echo '<div class="noti_div succesfully" id="noti_div" style="margin-top: 30px;">
      <div class="noti_div2">
          <div class="error">
              <h3>
              <strong>succesfully sended!</strong> Your request succesfully sended to your HOD.
              </h3>
          </div>
          <div class="noti_btn">
              <span class="material-symbols-outlined" id="not_btn">
                  close
              </span>
          </div>
      </div>
    </div>';

    }
    }
    } 
  }
?>

<script>
  function validateForm() {
    // Get the values from the password and confirm password fields
    var password = document.getElementById("regPassword").value;
    var confirmPassword = document.getElementById("regConfirmPassword").value;

    // Check if the passwords match
    if (password !== confirmPassword) {
      // If passwords don't match, display an error message
      document.getElementById("message").innerHTML = "Passwords do not match";
      // Prevent form submission
      return false;
    } else {
      // If passwords match, clear any previous error message
      document.getElementById("message").style.display="none";
      document.getElementById("message").innerHTML = "";
      // Allow form submission
      return true;
    }
  }
</script>
<script>
  function capture(length){
    let result='';
    const cha='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    const chalen=cha.length;
    let counter=0;
    while(counter<length){
        result=result+cha.charAt(Math.floor(Math.random()*chalen));
        counter=counter+1;
    };
    return result;
}
let cap=capture(5);
document.getElementById('admin').value=cap;
</script>
<script>
  function notification() {
            let btn = document.getElementById("not_btn");
            btn.addEventListener('click', function () {
                let noti_div = document.getElementsByClassName('noti_div')
                i = 0;
                while (i < noti_div.length) {
                    noti_div[i].style.display = 'none';
                    i++;
                }
            })
        }
        notification();
</script>

</body>

</html>