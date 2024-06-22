<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
</head>
<body>
  <h1>Insert Employee Data</h1>
  <hr>
  <form action="insert.php" method="post">
  Enter Name : <br>
  <input type="text" name="name" required style="width:50%"> <br>
  Enter Age : <br>
  <input type="number" name="age" style="width:50%" required> <br>
  Enter Designation : <br>
  <input type="text" name="designation" style="width:50%" required> <br>
  Enter Salary : <br>
  <input type="number" name="salary" style="width:50%" required> <br>
  <input type="submit" style="width:50%" value="Insert Data">
  </form>  

  <?php
   if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_REQUEST['name'];
    $age = $_REQUEST['age'];
    $designation = $_REQUEST['designation'];
    $salary = $_REQUEST['salary'];

    $con = mysqli_connect('localhost','root','','mcadb');

    $sql = "insert into employee_tb(name,age,designation,salary) values('$name',$age,'$designation',$salary)";
    $result = $con->query($sql);

    if($result == true)
        echo "Data Inserted successfully....";
    else
//       die($con->error);
        echo "Insert Failed....";
   }

  ?>



</body>
</html>