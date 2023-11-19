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
        <th class="empty"></th>
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
     <td hidden>'.$row['id'].'</td>
    <td>'.$row['name'].'</td>
    <td>'.$row['mobile'].'</td>
    <td>'.$row['email'].'</td>
    <td>'.$row['password'].'</td>
    <td>'.$row['del'].'</td>
    <td>  <button type="button" class="add_emp btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" id="add_emp">Edit</button>  <button type="button" class=" btn btn-primary" >Deleted</button> </td>
    
  </tr>';
  $no = $no+1;
  }
  
}
echo '</tbody></table>';
?>

