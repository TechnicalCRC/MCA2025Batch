<?php
 session_start();
 if(!isset($_SESSION['username'])){
  header('location:../Login.php');
 }
 echo 'Welcome Mr. ' . $_SESSION['username'];

?>
<br><br><br>
<a href="../Logout.php">Logout</a>