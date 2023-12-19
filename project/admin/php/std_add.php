<?php
require 'Db.php';
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST['rollno'])){
     $std_id = $_POST['rollno'];
     $username = $_POST['stdname'];
     $father = $_POST['std_father'];
     $class = $_POST['class'];
     $eng = $_POST['English'];
     $maxeng = $_POST['maxeng'];
     $Hindi = $_POST['Hindi'];
     $maxhindi = $_POST['maxhindi'];
     $math = $_POST['math'];
     $maxmath = $_POST['maxmath'];
     $phy = $_POST['phy'];
     $maxphy = $_POST['maxphy'];
     $chem = $_POST['chem'];
     $maxchem = $_POST['maxchem'];
     $addby =  $_SESSION['username'];    
     $exist = "SELECT * FROM `student` WHERE rollno = $std_id ";
     $stdexist = mysqli_query($conn,$exist);
     $num = mysqli_num_rows($stdexist);
     if($num>0){
        while($row=mysqli_fetch_assoc($stdexist)){
            if($row['rollno']==$std_id){
                // echo $row['name'];
                echo '<div style = "position: relative;  margin-top: 5px;">
                <div class="noti_div pending" id="noti_div">
  <div class="noti_div2">
      <div class="error">
          <h3  class = "exist" style ="padding-left: 50px;">
          <span>'.$row['name'].'</span> !Student Alredy Exist.
          </h3>
      </div>
      <div class="noti_btn">
          <span class="material-symbols-outlined" id="not_btn">
              close
          </span>
      </div>
  </div>
</div></div>';

            }

        }
     }
     else{
         $sql = "INSERT INTO `student` (`id`, `rollno`, `name`, `father`, `class`, `eng`, `hindi`, `math`, `phy`, `chem`, `maxeng`, `maxhindi`, `maxmath`, `maxphy`, `maxchem`, `editby`) VALUES (NULL, '$std_id', '$username', '$father', '$class', '$eng', '$Hindi', '$math', '$phy', '$chem', '$maxeng', '$maxhindi', '$maxmath', '$maxphy', '$maxchem', '$addby')";
       $result = mysqli_query($conn,$sql);
       if($result){
        if($result){
            echo '<div class="noti_div succesfully" id="noti_div">
            <div class="noti_div2">
                <div class="error">
                    <h3>
                        ! Student Added suceessfully wow 
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
}   
?>
