
<?php
require 'Db.php';
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST['Request_id'])){
      // echo var_dump($_POST);
     $admin_id = $_POST['Request_id'];
     $username = $_POST['Username'];
     $mobile = $_POST['phone'];
     $email = $_POST['gmail'];
     $password = $_POST['password'];
    //  $sql = "INSERT INTO `request` (`name`, `mobile`, `email`, `password`, `del`) VALUES ('$username', '$mobile', '$email', '$password', ' $admin_id')";
    //  $result = mysqli_query($conn,$sql);
    $exist = "SELECT * FROM `employes` WHERE mobile = $mobile";
    $userexist = mysqli_query($conn,$exist);
    $num = mysqli_num_rows($userexist);
   if($num>0){
    while($row=mysqli_fetch_assoc($userexist)){
      if($row['mobile']==$mobile){
  //       echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  //   <strong>  !</strong> 
  //   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  // </div>';
  echo '<div class="noti_div pending" id="noti_div" style="margin-top: 30px;">
  <div class="noti_div2">
      <div class="error">
          <h3  class = "exist" style ="padding-left: 50px;">
          <span>'.$row['name'].'</span> !Employee Alredy Exist.
          </h3>
      </div>
      <div class="noti_btn">
          <span class="material-symbols-outlined" id="not_btn">
              close
          </span>
      </div>
  </div>
</div>';
      }
    }
   }
    else{
        $sql = "INSERT INTO `employes` (`name`, `mobile`, `email`, `password`, `del`) VALUES ('$username', '$mobile', '$email', '$password', ' $admin_id')";
    $result = mysqli_query($conn,$sql);
   if($result){
   echo '<div class="noti_div succesfully" id="noti_div" style="margin-top: 30px;">
   <div class="noti_div2">
       <div class="error">
           <h3>
               ! Emp Added suceessfully wow 
           </h3>
       </div>
       <div class="noti_btn">
           <span class="material-symbols-outlined" id="not_btn">
               close
           </span>
       </div>
   </div>
 </div>';
   }
   }
   } 
 }
?>
    