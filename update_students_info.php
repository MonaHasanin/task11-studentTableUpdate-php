<?php

include "./dbconnection.php";

$id = $_GET['id'];

if (isset($_POST['update'])) {
    $student_name=$_POST['student_name'];
    $contact_info=$_POST['contact_info'];
    $email=$_POST['email'];
    $password=$_POST['password'];
  
  $query="UPDATE student
    
                 set
                 student_name='$student_name',
                 contact_info='$contact_info',
                    email = '$email',
                    password = '$password'   
                WHERE  student_id=$id"; 
                
 $stmt = $conn->prepare($query);
 $stmt->execute(); 

 echo "Records UPDATED successfully";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
  
<div class="container">
  <h2>Register form</h2>
  <form action="<?php '_PHP_SELF'; ?>" method="post">
    <div class="form-group">
      <label for="student_name">Student Name:</label>
      <input type="text" class="form-control" id="student_name" placeholder="Enter your name" name="student_name">
    </div>
    
    <div class="form-group">
      <label for="contact_info">Contact Info:</label>
      <input type="text" class="form-control" id="contact_info" placeholder="Enter phone information" name="contact_info">
    </div>
    
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter phone email" name="email">
    </div> 

    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
    </div>
 
    <button type="submit" name="update" class="btn btn-default">Update</button>
  </form>
  
</div>
    
<br><br><br> 
</body>
</html>
