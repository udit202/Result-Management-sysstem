<?php
session_start();
if(!isset($_SESSION['exist'])|| $_SESSION['exist']!=true)
{
    header('location:std.php');

}
else{
$std_id = $_SESSION['rollno'];
     $username = $_SESSION['name'];
     $father = $_SESSION['father'];
     $class = $_SESSION['class'];
     $eng = $_SESSION['eng'];
     $maxeng = $_SESSION['maxeng'];
     $Hindi = $_SESSION['hindi'];
     $maxhindi = $_SESSION['maxhindi'];
     $math = $_SESSION['math'];
     $maxmath = $_SESSION['maxmath'];
     $phy = $_SESSION['phy'];
     $maxphy = $_SESSION['maxphy'];
     $chem = $_SESSION['chem'];
     $maxchem = $_SESSION['maxchem'];  
    //  echo $std_id ,$username,$username,$class,$eng,$maxeng,$Hindi,$maxhindi,$math,$maxmath,$phy,$maxphy,$chem,$maxchem;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>result</title>
</head>

<body>
    <style>
        .container {
            text-align: center;
            padding: 0px;

        }

        .data {
            width: 98%;
            position: relative;
            border: 3px solid black;
            text-align: center;
            margin-left: 10px;
            
        }
        img {
            width: 60px;
        }

        table {
            width: calc(100% - 30px);
            border-collapse: collapse;
            margin: 15px;
           
        }

        caption {
            font-size: 1.3em;
            font-weight: bold;
        }


        th {
            text-align: left;
            border: 1px solid black;
        }

        td {
            text-align: left;
            border: 1px solid black;
        } 
        .details>tr>th{
            width: auto;
        }
        .details>tr>td{
            width: auto;
        }
    </style>
    <div class="container">
        <h1>JIND INSTITUTE OF ENGINEERING & TECHNOLOGY</h1>

        <div class="data">
            <img src="images/logois.jpg" alt="">
            <table class="details">
                <caption>12th Result </caption>
                <tr>
                    <th>
                        Roll No:
                    </th>
                    <td>
                        <?php
                        echo $std_id;
                        ?>
                    </td>
                </tr>
                <tr>
                    <th>
                        Name:
                    </th>
                    <td>
                        <?php
                        echo $username;
                        ?>
                    </td>
                </tr>
                <tr>
                    <th>
                        Father Name:
                    </th>
                    <td>
                        <?php
                         echo $father;
                        ?>

                    </td>
                </tr>
                <tr>
                    <th>
                        Branch Name:
                    </th>
                    <td>
                        <?php
                        echo $class;
                        ?>
                    </td>
                </tr>
            </table>
            <table class="marks">
                <tr>
                    <th>Subjects</th>
                    <th>Obtained Marks</th>
                    <th>Total Marks </th>
                    <th>Total</th>
                </tr>
                <tr>
                    <td>
                        English
                    </td>
                    <td>
                        <?php
                         echo $eng;
                        ?>
                    </td>
                    <td>
                    <?php
                        echo $maxeng;
                        ?>
                    </td>
                    <td>
                    <?php
                        echo $eng.'/'.$maxeng;
                        ?>
                    </td>

                </tr>
                <tr>
                    <td>
                        Hindi
                    </td>
                    <td>
                        <?php
                         echo $Hindi;
                        ?>
                    </td>
                    <td>
                    <?php
                        echo $maxhindi;
                        ?>
                    </td>
                    <td>
                    <?php
                        echo $Hindi.'/'.$maxhindi;
                        ?>
                    </td>

                </tr>
                <tr>
                    <td>
                        Mathematics
                    </td>
                    <td>
                        <?php
                         echo $math;
                        ?>
                    </td>
                    <td>
                    <?php
                        echo $maxmath;
                        ?>
                    </td>
                    <td>
                    <?php
                        echo $math.'/'.$maxmath;
                        ?>
                    </td>

                </tr>
                <tr>
                    <td>
                        Physics
                    </td>
                    <td>
                        <?php
                         echo $phy;
                        ?>
                    </td>
                    <td>
                    <?php
                        echo $maxphy;
                        ?>
                    </td>
                    <td>
                    <?php
                        echo $phy.'/'.$maxphy;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Chemistry
                    </td>
                    <td>
                        <?php
                         echo $chem;
                        ?>
                    </td>
                    <td>
                    <?php
                        echo $maxchem;
                        ?>
                    </td>
                    <td>
                    <?php
                        echo $chem.'/'.$maxchem;
                        ?>
                    </td>
                </tr>
                <tr>
                    <th>
                        Grand total
                    </th>
                    <td>
                        <b>
                            <?php
                        echo $eng+$Hindi+$math+$phy+$maxphy;
                        ?>
                        </b>
                    </td>
                    <td>
                        <b>
                            <?php
                        echo $maxeng+$maxhindi+$maxmath+$maxphy+$maxchem;
                        ?>
                        </b>
                    </td>
                    <th><b>
                        <?php
                        echo $eng+$Hindi+$math+$phy+$maxphy.'/'.$maxeng+$maxhindi+$maxmath+$maxphy+$maxchem;
                        ?>
                    </b></th>
                </tr>
            </table>
            <div>
                <p><b>Contact with your HOD for Any Type of Issue.</b></p>
            </div>
        </div>
    </div>
</body>

</html>