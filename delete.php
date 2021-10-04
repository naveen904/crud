<?php
include "conn.php";
$id = $_GET['id'];
echo $id;
$query = "DELETE from Employee WHERE Id= '$id'";
  $data  = mysqli_query($conn, $query);
  if ($data) {
    // echo "successfully deleted";
    header("Location://localhost/crud/table.php");
    exit;
  }else {
    echo "not deleted";}
// $query = "SELECT * from Employee where Id= '$id'";
// $data = mysqli_query($conn,$query);
// $result = mysqli_fetch_assoc($data);
// //echo "<pre>";
// $name = $result['Name'];
// $email = $result['Email'];
// $password = $result['Password'];
 
// if(isset($_POST["delete"])){
//     include("conn.php");
//   $name = $_POST["name"];
   
//   $email = $_POST["email"];
//   $password = $_POST["password"];

  
//   }
  
?>
