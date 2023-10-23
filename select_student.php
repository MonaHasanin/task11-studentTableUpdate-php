<?php
include ".\dbconnection.php"; //اسم الفايل الي عليه الداتا الربط
echo "<br>";
$data = $conn->query("SELECT * from student")->fetchAll();


echo "<br>";
echo "<br>";

?>


<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body> 
    <div class="container"></div>
<h2>School Data</h2>

<table>
    <thead>
  <tr>
    <th>Student Name</th>
    <th>Contact Info </th>
    <th>Student Id</th>
    <th>Email</th>
    <th>Password</th>
    <th>Update</th>
   </tr>
</thead>
   <tbody>
 <?php
        foreach($data as $row){
        echo "<tr>
        <td>{$row['student_name']}</td>
        <td>{$row['contact_info']}</td>
        <td>{$row['student_id']}</td>  
        <td>{$row['email']}</td>
        <td>{$row['password']}</td>
        <td><a class='btn btn-primary'href='update_students_info.php?id={$row['student_id']}'>Update students </a></td>
        </tr>";
        }
  ?>
</tbody>
  </table>
</div>
</body>
</html>