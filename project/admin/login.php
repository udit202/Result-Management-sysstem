<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
  <title>Document</title>
</head>

<body>
  <style>
    .container {
      width: 100%;
      height: 600px;
      background-image: url(images/2157094.webp);
      background-repeat: no-repeat;
      background-size: cover;
      filter: blur(20px);
    }

    .setform {
      position: absolute;
      top: 3px;
      width: 100%;
      height: 600px;
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
      font-size: 24px;
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
      font-size: 17px;
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
  </style>
  <div class="container">

  </div>
  <div class="btn_div">
    <div>
      <a href="Register.php">Register</a>
    </div>
  </div>
  <div class="setform">
    <div>
      <div class="form-container">
        <form id="loginForm" action="<?php
            echo $_SERVER['PHP_SELF']; ?>" method="post">
          <img src="images/logois.jpg" alt="">
          <h2>Teachers Login</h2>
          <div>

            <label for="loginUsername">Mobile No:</label>
            <input type="tel" id="loginUsername" required name="user" pattern="[789][0-9]{9}" maxlength="10">
          </div>
          <div>
            <label for="loginPassword">Password</label>
            <input type="password" id="loginPassword" required name="loginpass">
          </div>
          <p>
            <?php
            require 'php/Db.php';
            if($_SERVER["REQUEST_METHOD"]=="POST"){
              if(isset($_POST['user'])){
                $usermobile = $_POST['user'];
                $password = $_POST['loginpass'];
                $sql = "SELECT *FROM employes WHERE mobile = '$usermobile'";
                $exist = mysqli_query($conn, $sql);
                $num = mysqli_num_rows($exist);
                if($num >0){
                  $sql = "SELECT *FROM employes WHERE mobile = '$usermobile' AND password = '$password'";
                
                $result = mysqli_query($conn, $sql);
                $user = mysqli_num_rows($result);
                if($user ==1){
                  $row=mysqli_fetch_assoc($result);
                  session_start();
                  $_SESSION['logout']=true;
                  $_SESSION['username']= $row['name'];
                  header("location: Admin.php");
        
                }
                else{
                    echo " Password Incorrect";
                }
    
                }
                else{
                  echo " Sorry User Not <a href='Register.php' class='Register' >Register</a>";
                }
                
        
              }
            }
        
            ?>
          </p>
          <button type="submit" class="login">Log In</button>
        </form>


      </div>
    </div>
  </div>

</body>

</html>