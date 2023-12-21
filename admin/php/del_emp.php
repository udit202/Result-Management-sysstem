<?php
require 'Db.php';
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST['del_emp_mobile'])){
        $del_id =  $_POST['del_emp_mobile'];
        $sql ="DELETE FROM `employes` WHERE `employes`.`mobile` = $del_id";
        mysqli_query($conn,$sql);
    }
}
?>

