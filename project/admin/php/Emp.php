<?php

echo '<table class="table" id="Request" style="width: 94%;">
<thead>
    <tr>
        <th scope="col" >No</th>
        <th scope="col" >name</th>
        <th scope="col">mobile</th>
        <th scope="col" >email</th>
        <th scope="col">password</th>
        <th scope="col">id</th>
        <th scope="col" >features</th>
    </tr>
</thead>
<tbody>';
$sql = "SELECT * FROM `employes`";
$result = mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);
if($result){
    echo "working";
}
$no = 1;
if($num>0){
  while ($row=mysqli_fetch_assoc($result)){
    echo '<tr>
    <th scope="row" >'.$no.'</th>
    <td>'.$row['name'].'</td>
    <td>'.$row['mobile'].'</td>
    <td>'.$row['email'].'</td>
    <td>'.$row['password'].'</td>
    <td>'.$row['del'].'</td>
    <td>  <button type="button" class="Emp_up " id="Emp_up">Edit</button>  <button type="button" class="Emp_del" >Deleted</button> </td>
    
  </tr>';
  $no = $no+1;
  }
  
}
echo '</tbody></table>';
?>

