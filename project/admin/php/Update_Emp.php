
<?php
require 'Db.php';
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST['Emp_up_id'])){
        // echo var_dump($_POST);
        $Emp_id = $_POST['Emp_up_id'];
        $username = $_POST['up_Emp_name'];
        $mobile = $_POST['up_Emp_mobile'];
        $Email = $_POST['up_Emp_Email'];
        $pass = $_POST['up_Emp_pass'];
        $sql ="UPDATE `employes` SET `name` = '$username', `mobile` = '$mobile', `email` = '$Email', `password` = '$pass' WHERE `employes`.`del` = '$Emp_id'";
        $result= mysqli_query($conn,$sql);
        if($result){
            // echo $Emp_id, $username,$mobile,$Email,$pass;
        };
        
    }
}
?>
