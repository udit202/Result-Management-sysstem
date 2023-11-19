<?php
require 'admin/php/Db.php';
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST['admin'])){
      // echo var_dump($_POST);
     $admin_id = $_POST['admin'];
     $username = $_POST['Username'];
     $mobile = $_POST['phone'];
     $email = $_POST['gmail'];
     $password = $_POST['password'];
    //  $sql = "INSERT INTO `request` (`name`, `mobile`, `email`, `password`, `del`) VALUES ('$username', '$mobile', '$email', '$password', ' $admin_id')";
    //  $result = mysqli_query($conn,$sql);
     $exist = "SELECT * FROM `request` WHERE mobile = $mobile";
     $userexist = mysqli_query($conn,$exist);
     $num = mysqli_num_rows($userexist);
    if($num>0){
     while($row=mysqli_fetch_assoc($userexist)){
       if($row['mobile']==$mobile){
         echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
     <strong> '.$row['name'].' !</strong> Your Request in the pending wait for confirmation or contact with your principal
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>';
       }
     }
    }
     else{
         $sql = "INSERT INTO `request` (`name`, `mobile`, `email`, `password`, `del`) VALUES ('$username', '$mobile', '$email', '$password', ' $admin_id')";
     $result = mysqli_query($conn,$sql);
    if($result){
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>succesfully sended!</strong> Your request succesfully sended to your HOD.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    }
    } 
  }
?>