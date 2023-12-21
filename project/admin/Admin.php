<?php
session_start();
if(!isset($_SESSION['logout'])|| $_SESSION['logout']!=true)
{
    header('location:login.php');

}
?>
<?php
require 'php/Db.php';
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/notification.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

</head>

<body>
    <style>
        .maincontainer {
            width: 100%;
            height: 625px;
            background-color: white;
            position: relative;
        }

        .menu_div {
            position: absolute;
            top: 3px;
            left: 2px;
            width: 150px;
            height: 615px;
            border: 2px solid navy;
            border-radius: 5px;
            background-color: white;
            overflow: scroll;
        }

        ::-webkit-scrollbar {
            width: 5px;
            height: 10px;

        }

        ::-webkit-scrollbar-thumb {
            background: black;
            border-radius: 25px;
        }

        .menu_div>div {
            width: 100%;
            text-align: center;
            color: navy;
        }

        .menu_div>div>ul {
            list-style: none;
            text-align: left;
            margin-left: -20px;
        }

        .menu_div>div>ul>li {
            position: relative;
            left: -13px;
            width: 120px;
            font-size: 23px;
            margin-top: 30px;
            text-align: left;
            border: 1px solid navy;
            border-radius: 25px;
            background-color: transparent;
            padding: 5px 7px;
        }

        .menu_div>div>ul>li:hover {
            background-color: navy;
            color: white;

        }

        .icon {
            font-size: 30px;
            position: absolute;
            top: 3px;
            right: 3px;
        }

        .heading_div {
            position: absolute;
            top: 3px;
            right: 0px;
            width: calc(100% - 158px);
            height: 40px;
            background-color: navy;
            text-align: center;
            color: white;
            overflow: hidden;
        }

        .heading_div>h2 {
            margin-top: 6px;
        }

        .data_container {
            position: absolute;
            top: 45px;
            right: 0px;
            width: calc(100% - 163px);
            height: 575px;
            background-color: white;
            border: 2px solid navy;
            border-radius: 5px;
            overflow: scroll;
        }

        .data {
            width: 100%;
            height: 557px;
            margin-top: -21px;
            display: none;
            text-align: center;
            position: relative;
            top: 0px;
        }

        .data>div>h1 {
            color: navy;
        }

        .data>div {
            width: 98%;
            margin: 1%;
            height: 550px;
            overflow: scroll;
        }

        .home {
            display: block;
        }

        .Home_data {
            position: relative;
        }

        .Home_data>img {
            width: 350px;
            z-index: -2;
        }

        .Home_data>div {
            width: 100%;
            position: absolute;
            top: 5px;
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .Home_data>div>div {
            width: 220px;
            height: 140px;
            margin-top: 30px;
            margin-bottom: 20px;
            border-radius: 25px;
            text-align: center;
            color: white;
        }

        .Home_data>div>:nth-child(1) {
            background-color: rgb(9, 9, 36);
        }

        .Home_data>div>:nth-child(2) {
            background-color: rgb(35, 2, 41);
        }

        .Home_data>div>:nth-child(3) {
            background-color: rgb(5, 23, 42);
        }



        .closebtn {
            text-align: right;
        }

        .closebtn>span {
            font-size: 40px;
        }

        .close_div {
            display: none;
        }
        .up_std,
        .del_std {
            margin: 5px;
            background-color: white;
            color: navy;
            border: 1px solid navy;
            font-size: 12px;
            padding: 5px 20px;
            border-radius: 25px;

        }

        .up_std:hover,
        .del_std:hover {
            background-color: navy;
            color: white;
        }

        .basic_details {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            width: 100%;
        }

        .basic_details>div {
            width: 250px;
            margin: 10px;
            text-align: center;
            font-size: 19px;
            color: navy;
        }

        .subjects>div {
            padding: 30px 2px;
            margin-bottom: 30px;
            border-radius: 25px;
        }

        .subjects>div:hover {
            box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
        }

        .close_up_std {
            width: 100%;
            text-align: right;
            margin-right: 30px;
            padding-right: 40px;
        }

        #std_close_btn {
            cursor: pointer;
            color: white;
        }

        .addstd_div>button:hover {
            background-color: white;
            border: 2px solid navy;
            color: navy;
            font-size: 15pxs;
        }

        .developer {
            background-color: rgb(9, 9, 61);
            color: white;
            text-align: center;
            border-radius: 25px;
        }

        .key {
            cursor: pointer;
        }

        .updates_std_pos {

            position: absolute;
            top: 12px;
            width: 100%;
            display: flex;
            justify-content: center;
            z-index: 5;


        }

        .updates_std_pos>div {
            background-color: rgb(6, 6, 51);
            color: white;
            width: 80%;
            border-radius: 25px;
            border: 2px solid rgb(85, 85, 131);
            overflow: scroll;
            height: 550px;
            padding: 20px;
        }

        .update_std {
            width: 100%;
            text-align: center;
        }

        .update_std>h1 {
            color: white;

        }

        .up_del>div>label {
            color: white;
        }

        .up_mark>div>label {
            color: white;

        }

        .update_stu {
            position: relative;
            top: 0px;
        }

        .update_btn_div {
            width: 80%;
            position: absolute;
            bottom: 10px;
            text-align: right;
            border-radius: 25px;
        }

        .update_btn_div>button {
            background-color: white;
            border-radius: 25px;
            font-size: 16px;
            padding: 2px 10px;
            color: rgb(6, 6, 51);
            transition: font-size 0.5s;
            border: 2px solid white;
            cursor: pointer;
        }

        .update_btn_div>button:hover {
            background-color: rgb(6, 6, 51);
            border-radius: 25px;
            font-size: 14px;
            color: white;
        }

        .update_btn_div>:nth-child(2) {
            margin-right: 30px;
            margin-left: 20px;
        }

        #up_rollno {
            border: none;
            background-color: rgb(6, 6, 51);
            color: white;
        }
    </style>
    <style>
        #not_btn {
            cursor: pointer;
        }
    </style>
    <style>
        .std_del_modal {
            position: absolute;
            top: 0;
            width: 100%;
            display: none;
        }

        .del_std_div {
            position: relative;
            display: flex;
            height: 600px;
            justify-content: center;
            align-items: center;
        }

        .del_std_div>div {
            width: 400px;
            height: auto;
            background-color: navy;
            border-radius: 25px;
            z-index: 3;
        }

        .std_close_cross {
            width: 100%;
            text-align: right;
        }

        .close_std_btn {
            font-size: 40px;
            margin: 5px;
            color: white;
            cursor: pointer;
            transition: font-size 0.5s;
        }

        .close_std_btn:hover {
            font-size: 35px;
        }

        .std_del_form {
            width: 100%;
        }

        .std_del_form {
            width: 100%;
            text-align: left;
            margin-left: 20px;
            font-size: 18px;
            color: white;
        }

        .std_del_form>form>:nth-child(1) {
            width: 90%;
            font-size: 18px;
        }

        .del_std_buttons {
            width: 95%;
            text-align: right;
            margin-bottom: 20px;
        }

        .del_std_buttons>button {
            margin: 5px;
            font-size: 15px;
            padding: 3px 20px;
            background-color: white;
            border-radius: 25px;
            border: 2px solid navy;
            color: navy;
            margin-right: 20px;
        }

        .del_std_buttons>button:hover {
            font-size: 15px;
            padding: 3px 20px;
            background-color: navy;
            border-radius: 25px;
            border: 2px solid white;
            color: white;
        }
    </style>
    <div class="maincontainer">
        <div class="menu_div">
            <div class="logo">
                <h3 class="logo_text">
                    JIET
                </h3>
                <img src="images/logois.jpg" alt="" style="width: 50px;">
                <h2>
                    <span class="material-symbols-outlined" style="font-size: 30px;">
                        person_apron
                        </span>
                        <br>
                <?php
                echo $_SESSION['username'];
                ?>
                </h2>
                <ul>
                    <li class="key" onclick="show(0)"><span class="material-symbols-outlined icon">
                            home
                        </span><span class="menu_text">Home</span></li>

                    <li class="key" onclick="show(1)"><span class="material-symbols-outlined icon">
                            group
                        </span><span>Students</span></li>
                    <li class="key" onclick="show(2)"><span class="material-symbols-outlined icon">
                            person_add
                        </span><span>Add Std</span></li>
                    <li class="key" onclick="show(3)"><span class="material-symbols-outlined icon">
                            breaking_news_alt_1
                        </span><span>Result</span></li>
                    
                    <li class=" key logbtn"><span class="material-symbols-outlined icon">
                        <a href="Logout.php" class="logout">logout</a>
                        </span><span><a href="Logout.php" class="logout">LogOut</a></span></a></li>
                    

                        <style>
                            .logout{
                                text-decoration: none;
                                color: navy;
                                border-radius: 25px;
                            }
                            .logout:hover,.key:hover{
                                
                                background-color: navy;
                                color: white;
                            }
                        </style>
                </ul>
            </div>
        </div>
        <div class="heading_div">
            <h2>JIND INSTITUTE OF ENGINEERING AND TECHNOLOGY</h2>
        </div>
        <div class="data_container">
            <div class="data home">
                <h1>
                    WELCOME IN <br>
                    JIND INSTITUTE OF ENGINEERING AND TECHNOLOGY <br>
                    RESULT MANAGEMENT SYSTEM
                </h1>
                <div class="Home_data">
                    <!-- <img src="images/logois.jpg" alt=""> -->
                    <div>
                        <div>
                            <h1>
                                Students
                            </h1>
                            <h1>
                                <?php
                                $sql = "SELECT * FROM `student`";
                                $result = mysqli_query($conn,$sql);
                                $num = mysqli_num_rows($result);
                                echo $num;
                                ?>
                            </h1>
                        </div>
                    </div>

                </div>
            </div>

            <div class="data">
                <h1> Students</h1>
                <div>
                    <?php
                    require 'php/update_std.php';
                    require 'php/student.php';
                    require 'php/del_std.php';
                    ?>
                </div>
            </div>
            <div class="data ">
                <div>
                    <?php
                   require 'php/std_add.php';
                   ?>
                    <h1> Add Std</h1>
                    <form action="<?php  echo $_SERVER['PHP_SELF']; ?>" method="post" class="addstdform">
                        <div style="width: 100%;">
                            <br>
                            <div style="width: 100%;" class="basic_details">
                                <div>
                                    <label for="">RollNo :</label>
                                    <input type="text" name="rollno" required>
                                </div>
                                <div>
                                    <label for="">Name :</label>
                                    <input type="text" name="stdname" required>
                                </div>
                                <div style="margin-top: -5px;">
                                    <label for="">Father Name :</label>
                                    <input type="text" name="std_father" required>
                                </div>
                                <div>
                                    <label for="">Branch :</label>
                                    <input type="text" value="12th" name="class" required>
                                </div>
                            </div>
                            <hr>
                            <div style="width: 100%;" class="basic_details subjects">
                                <div>
                                    <label for="">English :</label>
                                    <br>
                                    <br>
                                    <label for="">Optained Marks :</label>
                                    <input class="num" type="number" max="100" min="0" name="English" required>
                                    <br>
                                    <br>
                                    <label for="">Max Marks :</label>
                                    <input class="num" type="number" max="100" min="0" name="maxeng" required>
                                </div>
                                <div>
                                    <label for="">Hindi :</label>
                                    <br>
                                    <br>
                                    <label for="">Optained Marks :</label>
                                    <input class="num" type="number" max="100" min="0" name="Hindi" required>
                                    <br>
                                    <br>
                                    <label for="">Max Marks :</label>
                                    <input class="num" type="number" max="100" min="0" name="maxhindi" required>
                                </div>
                                <div>
                                    <label for="">Mathmatics :</label>
                                    <br>
                                    <br>
                                    <label for="">Optained Marks :</label>
                                    <input class="num" type="number" required max="100" name="math" min="0">
                                    <br>
                                    <br>
                                    <label for="">Max Marks :</label>
                                    <input class="num" type="number" required max="100" name="maxmath" min="0">
                                </div>
                                <div>
                                    <label for="">Physics :</label>
                                    <br>
                                    <br>
                                    <label for="">Optained Marks :</label>
                                    <input class="num" type="number" max="100" min="0" name="phy" required>
                                    <br>
                                    <br>
                                    <label for="">Max Marks :</label>
                                    <input class="num" type="number" max="100" min="0" name="maxphy" required>
                                </div>
                                <div>
                                    <label for="">chemistry :</label>
                                    <br>
                                    <br>
                                    <label for="">Optained Marks :</label>
                                    <input class="num" type="number" max="100" min="0" name="chem">
                                    <br>
                                    <br>
                                    <label for="">Max Marks :</label>
                                    <input class="num" type="number" max="100" min="0" name="maxchem" required>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="addstd_div" style="width: 100%;text-align: right;">
                            <button type="submit">Add Student</button>
                            <button type="reset">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="data">
                <h1> Result</h1>
            </div>

        </div>


    </div>
    <div class="links">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.js"
            integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
        <script>
            $(document).ready(function () {
                $('#Student_table').DataTable();
            }
            );
        </script>
    </div>




    <style>
        .std_update_modal {
            display: none;
        }
    </style>
    <div class="std_del_modal" id="std_del_modal">
        <div class="del_std_div">
            <div class="std_close_cross">
                <span class="material-symbols-outlined close_std_btn " id="close_std_btn">
                    close
                </span>
                <div class="std_del_form">
                    <form action="<?php  echo $_SERVER['PHP_SELF']; ?>" method="post">
                        <div>
                            <p>Are you sure you want to Delete</p>
                            <p class="" id="std_name_para"></p>
                            <p>whose Roll No:</p>
                            <p class="" id="std_rollno_para"></p>
                            <input type="text" name="del_rollno" class="del_std_input" id="del_std_input" hidden>
                        </div>
                        <hr>
                        <div class="del_std_buttons">
                            <button type="submit">Delete</button>
                            <button type="button">Cancel</button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
    <div class="std_update_modal" id="updates_stp_pos">
        <div class="updates_std_pos">
            <div class="">
                <div class="close_up_std">
                    <span class="material-symbols-outlined add_close_btn" id="std_close_btn">
                        close
                    </span>
                </div>
                <div class="update_std">
                    <h1 class="update_heading">
                        Update Student
                    </h1>
                    <form action="<?php  echo $_SERVER['PHP_SELF']; ?>" method="post" class="addstdform">
                        <div style="width: 100%;" class="update_stu">
                            <br>
                            <div style="width: 100%;" class="basic_details up_del">
                                <div>
                                    <label for="">RollNo :</label>
                                    <input type="text" name="up_rollno" id="up_rollno">
                                </div>
                                <div>
                                    <label for="">Name :</label>
                                    <input type="text" name="up_std_name" id="std_name" required>
                                </div>
                                <div style="margin-top: -5px;">
                                    <label for="">Father Name :</label>
                                    <input type="text" name="father" id="std_father" required>
                                </div>
                                <div>
                                    <label for="">Branch :</label>
                                    <input type="text" value="12th" name="class" id="Branch" required>
                                </div>
                            </div>
                            <hr>
                            <div style="width: 100%;" class="basic_details subjects up_mark">
                                <div>
                                    <label for="">English :</label>
                                    <br>
                                    <br>
                                    <label for="">Optained Marks :</label>
                                    <input class="num" type="number" max="100" min="0" id="eng" required name="eng">
                                    <br>
                                    <br>
                                    <label for="">Max Marks :</label>
                                    <input class="num" id="maxeng" type="number" max="100" min="0" required
                                        name="maxeng">
                                </div>
                                <div>
                                    <label for="">Hindi :</label>
                                    <br>
                                    <br>
                                    <label for="">Optained Marks :</label>
                                    <input class="num" id="hindi" type="number" max="100" min="0" required name="hindi">
                                    <br>
                                    <br>
                                    <label for="">Max Marks :</label>
                                    <input class="num" id="maxhindi" type="number" max="100" min="0" required
                                        name="maxhindi">
                                </div>
                                <div>
                                    <label for="">Mathmatics :</label>
                                    <br>
                                    <br>
                                    <label for="">Optained Marks :</label>
                                    <input class="num" id="math" type="number" required max="100" min="0" name="math">
                                    <br>
                                    <br>
                                    <label for="">Max Marks :</label>
                                    <input class="num" id="maxmath" type="number" required max="100" min="0"
                                        name="maxmath">
                                </div>
                                <div>
                                    <label for="">Physics :</label>
                                    <br>
                                    <br>
                                    <label for="">Optained Marks :</label>
                                    <input class="num" id="phy" type="number" max="100" min="0" required name="phy">
                                    <br>
                                    <br>
                                    <label for="">Max Marks :</label>
                                    <input class="num" id="maxphy" type="number" max="100" min="0" required
                                        name="maxphy">
                                </div>
                                <div>
                                    <label for="">chemistry :</label>
                                    <br>
                                    <br>
                                    <label for="">Optained Marks :</label>
                                    <input class="num" type="number" id="chem" max="100" min="0" required name="chem">
                                    <br>
                                    <br>
                                    <label for="">Max Marks :</label>
                                    <input class="num" type="number" id="maxchem" max="100" min="0" required
                                        name="maxchem">
                                    <input type="text" name="editby" id="editby" hidden>
                                </div>
                            </div>
                            <hr>
                        </div>


                        <div class="update_btn_div ">
                            <button type="submit" class="up_btn">Update Student</button>
                            <button type="reset">Reset</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <script>
        function del_std_modal() {
            const close_btn = document.getElementById("close_std_btn");
            const std_del_modal = document.getElementById("std_del_modal");
            const del_btn = document.getElementsByClassName('del_std');
            let i = 0;
            while (i < del_btn.length) {
                del_btn[i].addEventListener('click', function () {
                    std_del_modal.style.display = "block";
                })
                i++;
            }

            close_btn.addEventListener('click', function () {
                std_del_modal.style.display = "none";
            })
        }
        function fetch_std_del() {
            const del_btn = document.getElementsByClassName('del_std');
            let i = 0;
            while (i < del_btn.length) {
                del_btn[i].addEventListener('click', function (e) {
                    let tr = e.target.parentNode.parentNode;
                    let del_std_input = document.getElementById('del_std_input');
                    let std_name_p = document.getElementById('std_name_para');
                    let std_rollno_p = document.getElementById('std_rollno_para');
                    let std_name = tr.getElementsByTagName('td')[1].innerHTML;
                    let std_rollno = tr.getElementsByTagName('td')[0].innerHTML;
                    del_std_input.value = std_rollno
                    std_name_p.innerHTML = std_name;
                    std_rollno_p.innerHTML = std_rollno
                })
                i++;
            }

        }
        fetch_std_del()
        del_std_modal()
    </script>



    <link rel="stylesheet" href="css/DBA.css">
    <script src="js/DBA_Script.js"></script>
    <script>
        function update_std() {

            let open_btn = document.getElementsByClassName('up_std');
            let crossbtn = document.getElementById("std_close_btn");
            let update_form = document.getElementById('updates_stp_pos')
            crossbtn.addEventListener('click', function () {
                update_form.style.display = "none";
            })
            let i = 0;
            while (i < open_btn.length) {
                open_btn[i].addEventListener('click', function () {
                    update_form.style.display = "block";
                })
                i++;
            }
        }
        function fech_update_std() {
            let open_btn = document.getElementsByClassName('up_std');
            let i = 0;
            while (i < open_btn.length) {
                open_btn[i].addEventListener('click', function (e) {
                    let tr = e.target.parentNode.parentNode;
                    let std_id = tr.getElementsByTagName('td')[0].innerHTML;
                    let username = tr.getElementsByTagName('td')[1].innerHTML;
                    let father = tr.getElementsByTagName('td')[2].innerHTML;
                    let Std_class = tr.getElementsByTagName('td')[3].innerHTML;
                    let eng = tr.getElementsByTagName('td')[4].innerHTML;
                    let maxeng = tr.getElementsByTagName('td')[5].innerHTML;
                    let Hindi = tr.getElementsByTagName('td')[6].innerHTML;
                    let maxhindi = tr.getElementsByTagName('td')[7].innerHTML;
                    let math = tr.getElementsByTagName('td')[8].innerHTML;
                    let maxmath = tr.getElementsByTagName('td')[9].innerHTML;
                    let phy = tr.getElementsByTagName('td')[10].innerHTML;
                    let maxphy = tr.getElementsByTagName('td')[11].innerHTML;
                    let chem = tr.getElementsByTagName('td')[12].innerHTML;
                    let maxchem = tr.getElementsByTagName('td')[13].innerHTML;
                    let editby = tr.getElementsByTagName('td')[14].innerHTML;
                    let inp_std_id = document.getElementById('up_rollno').value = std_id;
                    let in_username = document.getElementById('std_name').value = username;
                    let in_father = document.getElementById('std_father').value = father;
                    let in_Std_class = document.getElementById('Branch').value = Std_class;
                    let in_eng = document.getElementById('eng').value = eng;
                    let in_maxeng = document.getElementById('maxeng').value = maxeng;
                    let in_Hindi = document.getElementById('hindi').value = Hindi;
                    let in_maxhindi = document.getElementById('maxhindi').value = maxhindi;
                    let in_math = document.getElementById('math').value = math
                    let in_maxmath = document.getElementById('maxmath').value = maxmath;
                    let in_phy = document.getElementById('phy').value = phy;
                    let in_maxphy = document.getElementById('maxphy').value = maxphy;
                    let in_chem = document.getElementById('chem').value = chem;
                    let in_maxchem = document.getElementById('maxchem').value = maxchem;
                    let in_editby = document.getElementById('editby').value = $editby;
                })
                i++;
            }

        }
        fech_update_std()
        update_std()
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

        function show(j) {
            let btn = document.getElementsByClassName("key ");
            let block = document.getElementsByClassName(" data");
            i = 0;
            while (i < block.length) {
                block[i].style.display = 'none';
                block[j].style.display = 'inline-block';
                i++;
            }
        }

        notification();

    </script>
    <div class="developer">
        <h2>
            DEVELOPED BY UDIT DHIMAN
        </h2>

    </div>


</body>

</html>