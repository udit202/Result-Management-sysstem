<?php
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
                        session_start();
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
                        header("location: result.php");
                        $_SESSION['exist']=true;
              $_SESSION['username']= $row['name'];
              header("location: result.php");
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