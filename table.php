<?php
include("conn.php");
$query = "SELECT * from Employee";
$data  =mysqli_query($conn,$query);
$total  =mysqli_num_rows($data);
// $result = mysqli_fetch_assoc($data);
// echo $result['Id'];
if($total>0){
    ?>
    <table border="2">
    
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <!-- <th spancolumn=2>Operations</th> -->
    </tr>    
    
    <?php
    // echo "table have data";
    while($result = mysqli_fetch_assoc($data)){
        echo "<tr>
        <th>".$result['Id']."</th>
        <th >".$result['Name']."</th>
        <th >".$result['Email']."</th>
        <th >".$result['Password']."</th>
        <th><a href='update.php?id=$result[Id]'>Edit</a></th>
        <th><a href='delete.php?id=$result[Id]' onclick='return deletedata()'>Delete</a></th>
      </tr>";        
    }

}else{
    echo "table have  no data";
}
echo "<pre>";
print_r($result);

?>
</table>
<script>
    function deletedata(){
       return confirm("Are you sure to delete this record");
    }
</script>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .table{
            margin: auto;
        }
        #h3{
            margin: auto;
        }
    </style>
</head>
<body>
    <h3 id ="he">Data Table</h3>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
</tbody>
</table> 
</body>
</html> -->