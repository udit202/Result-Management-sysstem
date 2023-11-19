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
</head>
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
        border-radius: 5px;
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
    }

    .data>h1 {
        color: navy;
    }

    .data>div {
        width: 98%;
        margin: 1%;
        height: 500px;
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
        width: 400px;
        height: 500px;
        background-color: white;
        border: 2px solid navy;
        border-radius: 5px;
    }

    
    .add_emp {
        margin: 5px;
        background-color: white;
        color: navy;
        border: 1px solid navy;
        font-size: 12px;
        padding: 5px 20px;
        border-radius: 25px;
    }

    .add_emp:hover {
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
    .add_Emp_modal{
        width: 100%;
        text-align: left;
        background-color: transparent;
    }
    .add_Emp_modal>form{
        margin-top: -40px;
    }
    .imd_div{
        margin-top: 30px;
        width: 100%;
        text-align: center;
    }
    .input_div{
        padding-left: 30px;
        text-align: left;
    }
    .input_div>div{
        margin-top: 10px;
    }
    .input_div>div>label{
        font-size: 22px;
        color: navy;
    }
    .input_div>div>input{
        width: 150px;
    }
    .input_div>.add_btn{
        width: 100%;
        text-align: right;
    }
    .input_div>.add_btn>button{
        margin: 5px;
        background-color: white;
        color: navy;
        border: 1px solid navy;
        font-size: 18px;
        padding: 5px 20px;
        border-radius: 25px;
        margin-right: 50px;
    }
    .input_div>.add_btn>button:hover{
        background-color: navy;
        color: white;

    }
    .add_Emp_modal>form>h1{
        text-align: center;
        color: navy;
        font-size: 25px;
    }

</style>

<body>

    <div class="maincontainer">
        <div class="menu_div">
            <div class="logo">
                <h3>
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
            </div>
            <div class="data">
                <h1> Employees</h1>
                <div>
                    <?php
                    require 'php/Emp.php';
                    ?>

                </div>
            </div>
            <div class="data">
                <h1> Request</h1>
                <div>
                    <?php
                   require 'php/Request.php';
                   ?>
                </div>
            </div>
            <div class="data">
                <h1> Students</h1>
            </div>
            <div class="data">
                <h1> Add Std</h1>
            </div>
            <div class="data">
                <h1> Result</h1>
            </div>

        </div>

    </div>
    <script>
        let btn = document.getElementsByClassName("key ");
        let block = document.getElementsByClassName(" data");

        function show(j) {
            i = 0;
            while (i < block.length) {
                block[i].style.display = 'none';
                block[j].style.display = 'inline-block';
                i++;
            }
        }

    </script>
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
            }
            );
        </script>
    </div>
    <div class="add_modal" id="add">
        <div class="add_form">
            <div class="add_form_modal">
                <div class="closebtn">
                    <span class="material-symbols-outlined" id="close_btn">
                        close
                    </span>
                    <div class="add_Emp_modal">
                        <form id="registrationForm" action="<?php  echo $_SERVER['PHP_SELF']; ?>" method="post">
                            <div class="imd_div"> <img src="images/logois.jpg" alt="" style="width: 50px;"> </div>
                            <h1>ADD EMP</h1>
                            <div class="input_div">
                                <div>
                                    <label for="userid">User ID:</label>
                                    <input type="text"  name="uniqe id" >
                                </div>
                                <div>
                                    <label for="regUsername">Username:</label>
                                    <input type="text" id="regUsername"  name="Username">
                                </div>
                                <div>
                                    <label for="Mobile">Mobile No:</label>
                                    <input type="text" id="Mobile" maxlength="10"  name="phone">
        
                                </div>
                                <div>
                                    <label for="regEmail">Email :</label>
                                    <input type="text" id="regEmail" name="gmail" >
                                </div>
                                <div class="Mobile_input">
                                    <label for="regPassword">Password :</label>
                                    <input type="text" id="regPassword" name="password" >
                                </div>
        
                                <div>
                                    <label for="regConfirmPassword">Confirm Password :</label>
                                    <input type="text" id="regConfirmPassword" name="confirmPassword" >
                                </div>
                                <hr>
                            <div class="add_btn">
                                <button type="submit" class="login">Register</button>
                            </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script>
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
        open_modal()
        close_modal();
    </script>
</body>

</html>