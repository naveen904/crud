<?php
if(isset($_POST["submit"])){
  include("conn.php");
$name = $_POST["name"];
 
$email = $_POST["email"];
$password = $_POST["password"];
$query = "INSERT INTO Employee(Name,Email,Password) Values('$name', '$email', '$password')";
$data  = mysqli_query($conn, $query);
if ($data) {
  echo "successfully data submitted";
}else {
  echo "data is not submitted";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" >
        <form>
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" name="name">
               </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="email" class="form-control" name="email">
             </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            </div>
            
            <button type="submit" class="btn btn-primary"  name="submit">Submit</button>
          </form>
    </form>
</body>
</html>