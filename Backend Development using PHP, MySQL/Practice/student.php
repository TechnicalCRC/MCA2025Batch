<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h2>Student Data</h2>
  <form action="student.php" method="post">
    Enter Student Name : <input type="text" placeholder="Place Name here" name="sname"> <br>
    Enter Student Course : <input type="text" placeholder="Enter Course" name="course"> <br>
    Enter Student Marks : <input type="text" placeholder="Enter Marks" name="marks"> <br>
    <input type="submit" value="Submit Student Data">
  </form>
  <hr>
  <?php

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_REQUEST['sname'] != '' && $_REQUEST['course'] != '' && $_REQUEST['marks'] != '') {
      $name = $_REQUEST['sname'];
      $course = $_REQUEST['course'];
      $marks = $_REQUEST['marks'];
      
      echo "
      <dialog open>
        <h2>Your Student Data are as </h2>
            Your name is $name <br>
            You have choosen $course course <br>
            & Your Marks are $marks 
       <form method='dialog'>
         <button type='submit'>Ok</button>
       </form>
      
      </dialog>
      ";
    }
  }
  ?>


</body>

</html>