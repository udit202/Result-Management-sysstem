
<?php
require 'Db.php';
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST['up_rollno'])){
        // echo var_dump($_POST);
        $std_id = $_POST['up_rollno'];
        $username = $_POST['up_std_name'];
        $father = $_POST['father'];
        $class = $_POST['class'];
        $eng = $_POST['eng'];
        $maxeng = $_POST['maxeng'];
        $Hindi = $_POST['hindi'];
        $maxhindi = $_POST['maxhindi'];
        $math = $_POST['math'];
        $maxmath = $_POST['maxmath'];
        $phy = $_POST['phy'];
        $maxphy = $_POST['maxphy'];
        $chem = $_POST['chem'];
        $maxchem = $_POST['maxchem'];
        $sql ="UPDATE `student` SET `name` = '$username', `father` = '$father', `class` = '$class', `eng` = '$eng', `hindi` = '$Hindi', `math` = '$math', `phy` = '$phy', `chem` = '$chem', `maxeng` = '$maxeng', `maxhindi` = '$Hindi', `maxmath` = '$maxmath', `maxphy` = '$maxphy', `maxchem` = '$maxchem', `editby` = 'parveen' WHERE `student`.`rollno` = '$std_id'"; 
         $result = mysqli_query($conn,$sql);
        if($result){
            echo '<div class="noti_div succesfully" id="noti_div" style="top:25px;">
   <div class="noti_div2">
       <div class="error">
           <h3 color = red;>
               Student Updated Succesfully &#128526
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
            echo "not Uodated please contect with Hod";
        }
echo "udit Dhiman";
    }
}

?>
