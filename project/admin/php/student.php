<?php
require 'Db.php';
 echo '<table id="Student_table" class="display" style="width: 94%;">
 <thead>
<tr>
 <th scope="col" >No</th>
 <th scope="col" >RollNo</th>
 <th scope="col" >name</th>
 <th scope="col">Father name</th>
 <th scope="col" >Class</th>
 <th scope="col">English</th>
 <th scope="col">Max-Engl</th>
 <th scope="col">Hindi</th>
 <th scope="col">Max-Hindi</th>
 <th scope="col">Math</th>
 <th scope="col">Max-math</th>
 <th scope="col">Physics</th>
 <th scope="col">Max-Phy</th>
 <th scope="col">Chemistry</th>
 <th scope="col">Max-Chem</th>
 <th scope="col">Edit By</th>
 <th scope="col" >features</th>
</tr>
</thead>
<tbody>';
 

$sql = "SELECT * FROM `student`";
$result = mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);
// if($result){
// echo "working";
// }
$no = 1;
if($num>0){
while ($row=mysqli_fetch_assoc($result)){
echo '<tr>
<th scope="row" >'.$no.'</th>
<td>'.$row['rollno'].'</td>
<td>'.$row['name'].'</td>
<td>'.$row['father'].'</td>
<td>'.$row['class'].'</td>
<td>'.$row['eng'].'</td>
<td>'.$row['maxeng'].'</td>
<td>'.$row['hindi'].'</td>
<td>'.$row['maxhindi'].'</td>
<td>'.$row['math'].'</td>
<td>'.$row['maxmath'].'</td>
<td>'.$row['phy'].'</td>
<td>'.$row['maxphy'].'</td>
<td>'.$row['chem'].'</td>




<td>'.$row['maxchem'].'</td>
<td>'.$row['editby'].'</td>
<td>  <button type="button" class="up_std" id="up_std">Add</button> <button type="button" class="Req_del" id="del_req">Delete</button></td>

</tr>';
$no = $no+1;
}
}
echo '</tbody></table>';
?>