<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
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
      width: 320px;
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

    .log:hover {
      background-color: navy;
      color: white;

    }

    p {
      color: red;
    }

    a {
      text-decoration: none;
    }

    a:hover {
      color: white;
    }
    .Register{
      text-decoration: underline;
    }
    .Register:hover{
      color: navy;
    }
    
  </style>
  <div class="btn_div">
    <button class="log" id="Reg"><a href="Register.php">Register</a></button>
  </div>

  <div class="form-container">
    <form id="loginForm" action="<?php
        echo $_SERVER['PHP_SELF']; ?>" method="post">
      <img src="images/logois.jpg" alt=""> <br> <br>
      <h2>Login</h2>
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
</body>

</html>