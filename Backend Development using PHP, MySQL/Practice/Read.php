<!DOCTYPE html>
<html lang="en">

<head>
  <title>Read Employee Data</title>
</head>

<body>
  <h1> Read Employee Data</h1>
  <hr>
  <form method="post">
    <input type="submit" value="Display Data">
    <button>Show Data</button>
  </form>
  <hr>
  <?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $con = mysqli_connect('localhost', 'root', '', 'mcadb');
    $sql = 'select * from employee_tb';
    $result = $con->query($sql);

    echo "
    <table border=1>
      <tr>
       <th> Employee Id</th>
       <th> Employee Name </th>
       <th> Employee Age </th>
       <th> Employee Designation </th>
       <th> Employee Salary </th>
      </tr> 
    ";
    while ($row = $result->fetch_assoc()) {
      echo "<tr> 
            <td>" . $row['id'] . " </td> 
            <td> " . $row['name'] . " </td> 
            <td> " . $row['age'] . " </td> 
            <td> " . $row['designation'] . " </td> 
            <td> " . $row['salary'] . "</td>
          </tr>";
    }
    echo "</table>";
  }
  else
   echo 'Kindly click on button to show the record';
  ?>

</body>

</html>