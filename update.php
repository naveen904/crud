<?php 
include "conn.php";
$id = $_GET['id'];
//echo $id;
$query = "SELECT * from Employee where Id= '$id'";
$data = mysqli_query($conn,$query);

$result = mysqli_fetch_assoc($data);
// echo "<pre>";
// $id = $result['Id'];
$name = $result['Name'];
$email = $result['Email'];
$password = $result['Password'];
 
if(isset($_POST["update"])){
    include("conn.php");
  $name = $_POST["name"];
   
  $email = $_POST["email"];
  $password = $_POST["password"];
//   $query = "UPDATE  Employee SET Name='$name', '$email', 'password' WHERE Id='$id'";
$query = "UPDATE  Employee SET Name='$name',Email='$email', password='$password' WHERE Id= '$id'";
  $data  = mysqli_query($conn, $query);
  if ($data) {
    echo "successfully updated";
  }else {
    echo "not updated";
  }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <form action="" method="post";>
      
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" value="<?php echo $name;?>" name="name">
               </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="email" class="form-control" value="<?php echo $email;?>" name="email">
             </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" value="<?php echo $password;?>"  name="password">
            </div>
            
            <button type="submit" class="btn btn-primary"  name="update">Update</button>
        
    </form>
</body>
</html>