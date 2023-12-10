<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
</body>
</html>