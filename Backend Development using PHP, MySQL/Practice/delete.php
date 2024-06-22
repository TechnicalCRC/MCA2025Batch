<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
</head>
<body style="text-align:center">
  <h1>Delete Employee Data</h1>
  <hr>
  <form action="" method="post" style="text-align:right">
  Enter Id : <br>
  <input type="text" name="id" required style="width:50%"> <br>
  <br><br>
  <input type="submit" style="width:50%" value="Delete Record">
  </form>  

  <?php
   if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $id = $_REQUEST['id'];

    $con = mysqli_connect('localhost','root','','mcadb');

    $sql = "delete from employee_tb where id=$id;";

    $result = $con->query($sql);
     

    if(mysqli_affected_rows($con) > 0)
{   //     echo "Data Deleted successfully... . " . $con->affected_rows;
  echo "Data Deleted successfully... . " . mysqli_affected_rows($con);

   }   else
     //  die;
        echo "Delete Failed...." . $con->affected_rows;
   }
  ?>
</body>
</html>