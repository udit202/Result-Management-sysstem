`<?php
session_start();
// header("location: result.php");
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
            background-image: url(admin/images/wp3842278.webp);
            background-repeat: no-repeat;
            background-size: cover;
            /* filter: blur(20px); */
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
            background-image: url(images/wp5718447.webp);
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
            /* border-radius: 10px; */
            color: white;
            width: 90%;
            padding: 6px 20px;
            margin: 8px 0;
            border: none;
            border-bottom: 1px solid #ccc;
            box-sizing: border-box;
            font-size: 19px;
            outline: none;
            background-color: transparent;
            text-shadow: 1px 1px white;
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
    <div class="container" >

    </div >
    <style>
        .btn_div{
            width: 98%;
            background-color: black;
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
            <a href="login.php">Login</a>
            <a href="DBAlogin.php">Admin</a>
        </div>
    </div>
    <div class="maindiv">
        <div>
            <div class="login_div">
                <img src="images/logois.jpg" alt="">
                <form action="<?php
        echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <br>
                    <label for="rollno">RollNo:</label>
                    <input type="text" id="rollno" name="stdRollno" placeholder="Please Enter your RollNo" required>
                    <br><br>
                    <label for="fname">Father Name:</label>
                    <input type="text" name="fname" id="fname" placeholder="Please Enter your Father Name" required>
                    <br>
                    <p style="color: red;">
                        <?php
                     require 'php/Db.php';  
                    if($_SERVER["REQUEST_METHOD"]=="POST"){
                        if(isset($_POST['stdRollno']))
                        $Rollno = $_POST['stdRollno'];
                    $father = $_POST['fname'];
                    $sql = "SELECT * FROM student WHERE rollno = '$Rollno'";
                    $exist = mysqli_query($conn, $sql);
                    $num = mysqli_num_rows($exist);
                    if($num==1){
                        $try = "SELECT *FROM student WHERE rollno = '$Rollno' AND father = '$father'";
                        $result = mysqli_query($conn, $try);
                         $user = mysqli_num_rows($result);
                       if($user==1){
                        $row=mysqli_fetch_assoc($result);
                        $_SESSION['exist']=true;
                        $_SESSION['rollno']= $row['rollno'];
                        $_SESSION['name']= $row['name'];
                        $_SESSION['father']= $row['father'];
                        $_SESSION['class']= $row['class'];
                        $_SESSION['eng']= $row['eng'];
                        $_SESSION['maxeng']= $row['maxeng'];
                        $_SESSION['hindi']= $row['hindi'];
                        $_SESSION['maxhindi']= $row['maxhindi'];
                        $_SESSION['math']= $row['math'];
                        $_SESSION['maxmath']= $row['maxmath'];
                        $_SESSION['phy']=$row['phy'];
                        $_SESSION['maxphy']=$row['maxphy'];
                        $_SESSION['chem']=$row['chem'];
                        $_SESSION['maxchem']= $row['maxchem'];
                        echo "<script>
                            window.location.href= 'result.php'
                        </script>";
                        
                              }
                              else{
                                echo "Wrong Father name";
                              }
                    }
                    else{
                        echo " Student not exist";
                    }
                    }
                    ?>
                    </p>

                    <div>
                        <button type="submit">Search</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</body>

</html>