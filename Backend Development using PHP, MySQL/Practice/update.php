<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
</head>
<body style="text-align:center">
  <h1>Update Employee Data</h1>
  <hr>
  <form action="" method="post">
  Enter Id : <br>
  <input type="text" name="id" required style="width:50%"> <br>
  Enter Name : <br>
  <input type="text" name="name" required style="width:50%"> <br>
  Enter Age : <br>
  <input type="number" name="age" style="width:50%" required> <br>
  Enter Designation : <br>
  <input type="text" name="designation" style="width:50%" required> <br>
  Enter Salary : <br>
  <input type="number" name="salary" style="width:50%" required> <br><br>
  <input type="submit" style="width:50%" value="Update Data">
  </form>  

  <?php
   if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $id = $_REQUEST['id'];
    $name = $_REQUEST['name'];
    $age = $_REQUEST['age'];
    $designation = $_REQUEST['designation'];
    $salary = $_REQUEST['salary'];

    $con = mysqli_connect('localhost','root','','mcadb');

    $sql = "update employee_tb set name='$name', age=$age, designation='$designation', salary=$salary where id=$id;";

    $result = $con->query($sql);

    if($result == true)
        echo "Data Updated successfully....";
    else
//       die($con->error);
        echo "Update Failed....";
   }
  ?>
</body>
</html>