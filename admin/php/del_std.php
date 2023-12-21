
<?php
require 'Db.php';
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST['del_rollno'])){
        $del_id =  $_POST['del_rollno'];
        $sql ="DELETE FROM `student` WHERE `student`.`rollno` = $del_id";
        $result = mysqli_query($conn,$sql);
        if($result){
            echo '<div class="noti_div succesfully" id="noti_div" style="top:25px;">
   <div class="noti_div2">
       <div class="error">
           <h3 color = red;>
               Student Deleted Succesfully &#128526
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
        else{
            echo "not Updated";
        }
    }
}
?>