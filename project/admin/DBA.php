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
<style>

</style>

<body>
    <style>
        #not_btn {
            cursor: pointer;
        }
    </style>
    <div class="maincontainer">
        <div class="menu_div">
            <div class="logo">
                <h3 class="logo_text">
                    JIET
                </h3>
                <img src="images/logois.jpg" alt="" style="width: 50px;">
                <ul>
                    <li class="key" onclick="show(0)"><span class="material-symbols-outlined icon">
                            home
                        </span><span class="menu_text">Home</span></li>
                    <li class="key" onclick="show(1)"> <span class="material-symbols-outlined icon">
                            badge
                        </span><span>Employees</span></li>
                    <li class="key" onclick="show(2)"><span class="material-symbols-outlined icon">
                            person_alert
                        </span><span> Request</span></li>
                    <li class="key" onclick="show(3)"><span class="material-symbols-outlined icon">
                            group
                        </span><span>Students</span></li>
                    <li class="key" onclick="show(4)"><span class="material-symbols-outlined icon">
                            person_add
                        </span><span>Add Std</span></li>
                    <li class="key" onclick="show(5)"><span class="material-symbols-outlined icon">
                            breaking_news_alt_1
                        </span><span>Result</span></li>


                    <!-- <li class="key" onclick="show(5)"><span class="material-symbols-outlined icon">
                            person
                        </span><span>profile</span></li>
                    <li class="key" onclick="show(5)"><span class="material-symbols-outlined icon">
                            logout
                        </span><span>Log Out</span></li> -->

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
                <div>
                    <img src="images/logois.jpg" alt="">

                </div>
            </div>
            <div class="data">
                <h1> Employees</h1>
                <div>
                    <?php
                    require 'php/Emp.php';
                    require 'php/del_emp.php';

                    ?>

                </div>
            </div>
            <div class="data">
                <h1> Request</h1>
                <div>
                    <?php
                   require 'php/Request.php';
                   require 'php/del_request.php';
                    require 'php\Request_to_Emp.php';
                    ?>
                </div>
            </div>
            <div class="data">
                <h1> Students</h1>
                <div>
                    <?php
                    require 'php/update_std.php';
                    require 'php/student.php';
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

            .closebtn {
                text-align: right;
            }

            .closebtn>span {
                font-size: 40px;
            }

            .close_div {
                display: none;
            }

            .add_modal {
                position: absolute;
                top: 0px;
                width: 100%;
                background-color: transparent;
                height: 500px;
                display: none;
            }

            .add_form {
                margin-top: 40px;
                width: 100%;
                height: 400px;
                background-color: transparent;
                display: flex;
                justify-content: center;
            }

            .add_form_modal {
                width: 350px;
                height: 500px;
                background-color: rgb(0, 0, 41);
                border: 2px solid navy;
                border-radius: 25px;
            }


            .add_emp,
            .Req_del,
            .up_std,
            .Emp_up,
            .Emp_del {
                margin: 5px;
                background-color: white;
                color: navy;
                border: 1px solid navy;
                font-size: 12px;
                padding: 5px 20px;
                border-radius: 25px;

            }

            .add_emp:hover,
            .Req_del:hover,
            .Emp_up:hover,
            .up_std:hover,
            .Emp_del:hover {
                background-color: navy;
                color: white;
            }

            .del_btn {
                margin: 5px;
                background-color: white;
                color: navy;
                border: 1px solid navy;
                font-size: 12px;
                padding: 5px 20px;
                border-radius: 25px;
            }

            .del_btn:hover {
                background-color: navy;
                color: white;
            }

            .add_Emp_modal {
                width: 100%;
                text-align: left;
                background-color: transparent;
            }

            .add_Emp_modal>form {
                margin-top: -40px;
            }

            .imd_div {
                margin-top: 30px;
                width: 100%;
                text-align: center;
            }

            .input_div {
                padding-left: 30px;
                text-align: left;
            }

            .input_div>div {
                margin-top: 10px;
            }

            .input_div>div>label {
                font-size: 22px;
                color: white;
            }

            .input_div>hr {
                text-align: left;
                width: 50%;
            }

            .add_close_btn {
                color: white;
                padding: 5px;
                font-size: 35px;
                transition: font-size 0.5s;
            }

            .add_close_btn:hover {
                font-size: 30px;
            }

            .input_div>div>input {
                width: 150px;
                border-radius: 25px;
                border: none;
                color: white;
                background-color: rgb(0, 0, 41);
                font-size: 22px;
            }

            .input_div>.add_btn {
                width: 100%;
                text-align: right;
                color: white;

            }

            .input_div>.add_btn>button {
                margin: 5px;
                background-color: white;
                color: navy;
                border: 1px solid navy;
                font-size: 18px;
                padding: 5px 20px;
                border-radius: 25px;
                margin-right: 50px;
                cursor: pointer;
                transition: font-size 0.5s;
            }

            .input_div>.add_btn>button:hover {
                background-color: rgb(0, 0, 41);
                border: 2px solid white;
                color: white;
                font-size: 15px;

            }

            .add_Emp_modal>form>h1 {
                text-align: center;
                color: white;
                font-size: 25px;
            }

            .logo_text {
                text-align: center;
                /* margin-left: -100px; */
            }

            #close_btn {
                cursor: pointer;
            }

            .del_modal {
                width: 100%;
                height: 600px;
                position: absolute;
                top: 0px;
                display: none;
                text-align: center;
            }

            .del_form {
                position: relative;
                width: 100%;
                height: 600px;
            }

            .del_form_modal {
                width: 100%;
                height: 600px;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .del_req_modal {
                width: 440px;
                height: 230px;
                background-color: navy;
                border: 2px solid navy;
                border-radius: 25px;
                padding: 25px;
                text-align: left;
            }

            #del_modal_close_btn {
                width: 100%;
                font-size: 35px;
                text-align: right;
                transition: font-size 0.4s;

            }

            #del_modal_close_btn:hover {
                font-size: 30px;
            }

            .close_del_icon {
                color: white;
                font-size: 35px;
                cursor: pointer;
            }

            .del_req_form>p {
                font-size: 25px;
                color: white;
            }

            .del_btn_div {
                width: 100%;
                text-align: right;
            }

            .Del_req_btn:hover {
                border: 2px solid white;
            }

            .del_name {
                margin-top: 0px;
                color: white;
                text-align: left;



            }

            .addstd_div {
                padding-bottom: 15px;
            }

            .addstd_div>button {
                padding: 5px 7px;
                border-radius: 25px;
                border: 1px solid navy;
                background-color: navy;
                color: white;
                cursor: pointer;


            }

            .addstd_div>:nth-child(2) {
                margin-right: 15px;
            }

            .addstdform>input {
                margin: 15PX;
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
        </style>
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
                $('#myTable').DataTable();
                $('#Request').DataTable();
                $('#Student_table').DataTable();
            }
            );
        </script>
    </div>
    <div class="add_modal" id="add">
        <div class="add_form">
            <div class="add_form_modal">
                <div class="closebtn">
                    <span class="material-symbols-outlined add_close_btn" id="close_btn">
                        close
                    </span>
                    <div class="add_Emp_modal">
                        <form id="registrationForm" action="<?php  echo $_SERVER['PHP_SELF']; ?>" method="post"
                            id="Add_Emp_form">
                            <div class="imd_div"> <img src="images/logois.jpg" alt="" style="width: 50px;"> </div>
                            <h1>ADD EMP</h1>
                            <div class="input_div">
                                <div>
                                    <label for="userid">User ID:</label>
                                    <input type="text" name="Request_id" id="Request_id">
                                </div>
                                <hr>
                                <div>
                                    <label for="regUsername">Username:</label>
                                    <input type="text" id="regUsername" name="Username">
                                </div>
                                <hr>
                                <div>
                                    <label for="Mobile">Mobile No:</label>
                                    <input type="text" id="Mobile" maxlength="10" name="phone" required>

                                </div>
                                <hr>
                                <div>
                                    <label for="regEmail">Email :</label>
                                    <input type="text" id="regEmail" name="gmail">
                                </div>
                                <hr>
                                <div class="Mobile_input">
                                    <label for="regPassword">Password :</label>
                                    <input type="text" id="regPassword" name="password">
                                </div>

                                <hr>
                                <div class="add_btn">
                                    <button type="submit" class="login" id="login_btn">Add</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>

    </style>
    <div class="del_modal" id="del_modal">
        <div class="del_form">
            <div class="del_form_modal">
                <div class="del_req_modal">
                    <div class="del_modal_close_btn">
                        <span class="material-symbols-outlined close_del_icon" id="del_modal_close_btn">
                            close
                        </span>
                    </div>

                    <form action="<?php  echo $_SERVER['PHP_SELF']; ?>" class="del_req_form" method="post">
                        <p>Are you sure you want to Delete</p>
                        <p class="del_name" id="del_name"></p>
                        <input type="text" id="del_mobile" name="del_request" style="background-color: white;" hidden>
                        <hr>
                        <div class="del_btn_div">
                            <button type="submit" class="Req_del Del_req_btn" id="Del_req_btn">Delete</button>
                            <button type="button" class="Req_del Del_req_btn" id="cancel_del_btn">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <style>
        .Emp_del_modal {
            width: 100%;
            height: 600px;
            border-radius: 25px;
            position: absolute;
            top: 5px;
            display: none;
        }

        .Emp_del_modal>div {
            width: 100%;
            height: 600px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .Emp_del_modal>div>div {
            width: 440px;
            height: auto;
            background-color: navy;
            align-content: center;
            margin: 10px;
            border-radius: 25px;


        }

        .emp_close_cross {
            width: 100%;
            color: white;
            text-align: right;
        }

        .emp_close_cross>span {
            font-size: 40px;
            cursor: pointer;
            padding: 10px;
            transition: font-size 0.3s;
        }

        .emp_close_cross>span:hover {
            font-size: 30px;

        }

        .Emp_del_form {
            color: white;
            font-size: 20px;
            padding-left: 23px;
            margin-top: 0px;
        }

        .Emp_del_form>div {
            width: 100%;
            text-align: right;
        }

        .Emp_del_form>div>button {
            margin-bottom: 10px;
        }

        .Emp_del_form>div>button:hover {
            border: 2px solid white;
        }

        .std_update_modal {
            display: none;
        }
    </style>

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
                                    <input type="text" name="up_rollno" id="up_rollno" disabled>
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
                                    <input class="num" id="maxeng" type="number" max="100" min="0" required name="maxeng">
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
                                    <input class="num" id="maxhindi" type="number" max="100" min="0" required name="maxhindi">
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
                                    <input class="num" id="maxmath" type="number" required max="100" min="0" name="maxmath">
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
                                    <input class="num" id="maxphy" type="number" max="100" min="0" required name="maxphy">
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
                                    <input class="num" type="number" id="maxchem" max="100" min="0" required name="maxchem">
                                    <input type="text" name="editby" id="editby"  hidden>
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
    <div class="Emp_del_modal" id="Emp_del_modal">
        <div>
            <div>
                <div class="emp_close_cross">
                    <span class="material-symbols-outlined " id="close_emp_del_modal_btn">
                        close
                    </span>
                </div>
                <div>
                    <form action="<?php  echo $_SERVER['PHP_SELF']; ?>" class="Emp_del_form" method="post">
                        <p>Are you sure you want to Delete</p>
                        <p class="del_name" id="del_emp_name">udit</p>
                        <input type="text" id="del_emp_mobile" name="del_emp_mobile" style="background-color: white;"
                            hidden>
                        <hr>
                        <div class="">
                            <button type="submit" class="Emp_del">Delete</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
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
        function fech_update(){
            let open_btn = document.getElementsByClassName('up_std');
            let i = 0;
            while(i<open_btn.length){
                open_btn[i].addEventListener('click', function(e){
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
                    let inp_std_id = document.getElementById('up_rollno').value=std_id;
                    let in_username = document.getElementById('std_name').value =username;
                    let in_father = document.getElementById('std_father').value=father;
                    let in_Std_class = document.getElementById('Branch').value=Std_class;
                    let in_eng = document.getElementById('eng').value=eng;
                    let in_maxeng = document.getElementById('maxeng').value=maxeng;
                    let in_Hindi = document.getElementById('hindi').value=Hindi;
                    let in_maxhindi =document.getElementById('maxhindi').value=maxhindi;
                    let in_math =document.getElementById('math').value=math
                    let in_maxmath =document.getElementById('maxmath').value =maxmath;
                    let in_phy = document.getElementById('phy').value = phy;
                    let in_maxphy = document.getElementById('maxphy').value=maxphy;
                    let in_chem = document.getElementById('chem').value =chem;
                    let in_maxchem = document.getElementById('maxchem').value=maxchem;
                    let in_editby = document.getElementById('editby').value = 'udit';
                    
                    
                })
                i++;
            }

        }
        fech_update()
        update_std()
        function emp_del_modal() {
            let Emp_del_btn = document.getElementsByClassName('Emp_del');
            let Emp_del_modal = document.getElementById('Emp_del_modal');
            let close_emp_del_modal_btn = document.getElementById('close_emp_del_modal_btn');

            close_emp_del_modal_btn.addEventListener('click', function () {
                Emp_del_modal.style.display = "none";
            })
            let i = 0;
            while (i < Emp_del_btn.length) {
                Emp_del_btn[i].addEventListener('click', function (e) {
                    Emp_del_modal.style.display = "block";
                    let tr = e.target.parentNode.parentNode;
                    let Emp_name = tr.getElementsByTagName('td')[0].innerHTML;
                    let Mobile_no = tr.getElementsByTagName('td')[1].innerHTML;
                    let input_del_mobile = document.getElementById('del_emp_mobile').value = Mobile_no;
                    let name = document.getElementById('del_emp_name').innerText = Emp_name;

                })
                i++;

            }
        }
        emp_del_modal()
        let modal_div = document.getElementById("add");
        let close_btn = document.getElementById("close_btn");
        let open_addmodal_btn = document.getElementsByClassName('add_emp');
        function close_modal() {

            close_btn.addEventListener('click', function () {
                modal_div.style.display = "none";
                // modal_div.classList.toggle('close_div');

            })
        }
        function open_modal() {
            i = 0;
            while (i < open_addmodal_btn.length) {
                open_addmodal_btn[i].addEventListener('click', function () {
                    modal_div.style.display = "block";
                })
                i++;
            }
        }
        // function notification() {
        //     let btn = document.getElementById("not_btn");
        //     btn.addEventListener('click', function () {
        //         let noti_div = document.getElementsByClassName('noti_div')
        //         i = 0;
        //         while (i < noti_div.length) {
        //             noti_div[i].style.display = 'none';
        //             i++;
        //         }
        //     })
        // }
        function fetchdata() {
            let btn_add_Emp = document.getElementsByClassName('add_emp');
            // console.log(btn_add_Emp);
            i = 0;
            while (i < btn_add_Emp.length) {

                btn_add_Emp[i].addEventListener('click', function (e) {
                    let tr = e.target.parentNode.parentNode;
                    let Emp_id = tr.getElementsByTagName('td')[4].innerHTML;
                    let Emp_name = tr.getElementsByTagName('td')[0].innerHTML;
                    let Mobile_no = tr.getElementsByTagName('td')[1].innerHTML;
                    let Email = tr.getElementsByTagName('td')[2].innerHTML;
                    let password = tr.getElementsByTagName('td')[3].innerHTML;
                    let Emp_id_inp = document.getElementById('Request_id').value = Emp_id;
                    let Emp_name_inp = document.getElementById('regUsername').value = Emp_name;
                    let Emp_mobile_inp = document.getElementById('Mobile').value = Mobile_no;
                    let Emp_Email_inp = document.getElementById('regEmail').value = Email;
                    let Emp_password_inp = document.getElementById('regPassword').value = password;
                    // console.log(EmplengthEmp_up_id,Emp_name,Mobile_no,Email,password,c_password);
                })
                i++;
            }

        }

        function open_req_del_modal() {
            let open_btn = document.getElementsByClassName('Req_del');
            let del_modal = document.getElementById('del_modal');
            i = 0;
            while (i < open_btn.length) {
                open_btn[i].addEventListener('click', function () {
                    del_modal.style.display = "block";
                })
                i++;
            }
        }
        function close_del_modal() {
            let close_del_modal_btn = document.getElementById('del_modal_close_btn');
            let cancel_del_btn = document.getElementById('cancel_del_btn');
            let del_modal = document.getElementById('del_modal');
            close_del_modal_btn.addEventListener('click', function () {
                del_modal.style.display = "none";
                // modal_div.classList.toggle('close_div');

            })
            cancel_del_btn.addEventListener('click', function () {
                del_modal.style.display = "none";
                // modal_div.classList.toggle('close_div');

            })
        }
        function fetch_for_del_req_modal() {
            let fetch_btn = document.getElementsByClassName('Req_del');
            i = 0;
            while (i < fetch_btn.length) {
                fetch_btn[i].addEventListener('click', function (e) {
                    let tr = e.target.parentNode.parentNode;
                    let Emp_name = tr.getElementsByTagName('td')[0].innerHTML;
                    let Mobile_no = tr.getElementsByTagName('td')[1].innerHTML;
                    let input_del_mobile = document.getElementById('del_mobile').value = Mobile_no;
                    let name = document.getElementById('del_name').innerText = Emp_name;
                    console.log(name);

                })
                i++;
            }
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
        open_req_del_modal();
        fetch_for_del_req_modal();
        close_del_modal()
        fetchdata();
        open_modal();
        close_modal();
        // notification();

    </script>
    <div class="developer">
        <h2>
            DEVELOPED BY UDIT DHIMAN
        </h2>

    </div>


</body>

</html>