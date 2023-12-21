<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

        .maindiv {
            position: absolute;
            top: 5px;
            width: 100%;
            height: auto;
            z-index: 3;
        }

        .maindiv>div {
            position: relative;
            width: 100%;
            height: 600px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .maindiv>div>div {
            width: 300px;
            height: auto;
            padding: 15px;
            background-image: url(images/2157094.webp);
            background-size: cover;
            backdrop-filter: blur(50px);
            text-align: center;
            border: 2px solid gray;
            border-radius: 8px;
            z-index: 1;
            box-shadow: rgb(238, 239, 240) 0px 20px 30px -10px;
        }

        .maindiv>div>div>img {
            margin: 15px;
            width: 60px;
            mix-blend-mode: luminosity;
            border-radius: 4px;

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
        }

        input:focus {
            border: none;
        }

        form>div {
            width: 90%;
            text-align: right;
            margin-top: 20px;
        }

        label {
            margin-left: 6%;
            width: 90%;
            display: block;
            font-size: 24px;
            color: rgb(255, 255, 255);
            text-align: left;
            font-weight: bold;
        }

        button {
            background-color: rgb(129, 110, 110);
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            margin-left: 15px;
            font-size: 17px;
        }

        button:hover {
            color: white;
            background-color: #03ff9ed1;
            /* opacity: 0.8; */
        }

        p {
            font-size: 17px;
            font-weight: 500;

        }
    </style>
    <div class="container">

    </div>
    <style>
        .btn_div{
            width: 98%;
            position: absolute;
            top: 0px;
            height: 60px;
            z-index: 5;
            margin: 5px;
        }
        .btn_div>div{
            position: relative;
            text-align: right;
            margin-top: 20px;
        }
        .btn_div>div>:nth-child(2){
            margin-right: 40px;
        }
        .btn_div>div>a{
            text-decoration: none;
            padding: 6px 20px;
            margin-left: 20px;
            margin-top: 30px;
            color: white;
            font-size: 1.3rem;
            border: 1px solid white;
            border-radius: 4px;
        }
        a:hover{
            background-color: red;
            
            box-shadow: rgb(238, 239, 240) 0px 20px 30px -10px;
        }
    </style>
    <div class="btn_div">
        <div>
            <!-- <a href="login.php">login</a>
            <a href="DBAlogin.php">Admin</a> -->
        </div>
    </div>
    <div class="maindiv">
        <div>
            <div class="login_div">
                <img src="images/logois.jpg" alt="">
                <form action="<?php
        echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <br>
                    <label for="rollno">Mobile No:</label>
                    <input type="text" id="rollno" name="admin_mobile" placeholder="Please Enter your Mobile No" required>
                    <br><br>
                    <label for="fname">password:</label>
                    <input type="text" name="password" id="fname" placeholder="Please Enter your password" required>
                    <br>
                    <p style="color: red;">
                    <?php
                    
        require 'php/Db.php';
        if($_SERVER["REQUEST_METHOD"]=="POST"){
          if(isset($_POST['admin_mobile'])){
            
            $usermobile = $_POST['admin_mobile'];
            $password = $_POST['password'];
            $sql = "SELECT *FROM admin WHERE mobile = '$usermobile'";
            $exist = mysqli_query($conn, $sql);
            $num = mysqli_num_rows($exist);
            if($num >0){
              $admm = "SELECT *FROM admin WHERE mobile = '$usermobile' AND password = '$password'";
            $result = mysqli_query($conn, $admm);
            $user = mysqli_num_rows($result);
            if($user ==1){           
              $row=mysqli_fetch_assoc($result);           
              $_SESSION['admin']=true;
              $_SESSION['username']= $row['name'];
            echo "<script>
                            window.location.href='DBA.php'
                        </script>";
    
            }
            else{
                echo " Password Incorrect";
            }

            }
            else{
              echo " Sorry User Not exist";
            }
            
    
          }
        }
    
        ?>
                    </p>

                    <div>
                        <button type="submit">Log In</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</body>

</html>