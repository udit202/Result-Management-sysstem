
<?php
require 'Db.php';
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST['del_request'])){
        $del_id =  $_POST['del_request'];
        $sql ="DELETE FROM `request` WHERE `request`.`mobile` = $del_id";
        mysqli_query($conn,$sql);
    }
}
?>