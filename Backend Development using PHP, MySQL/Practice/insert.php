<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
</head>
<body>
  <h1>Employee Data</h1>
  <form action="insert.php" method="post">
  Enter Name : <input type="text" name="name" required> <br>
  Enter Age : <input type="number" name="age" required> <br>
  Enter Designation : <input type="text" name="designation" required> <br>
  Enter Salary : <input type="number" name="salary" required> <br>
  <input type="submit" value="Insert Data">
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
        echo "Insert Failed....";
   }

  ?>



</body>
</html>