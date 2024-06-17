<?php
$n = $_REQUEST['name'];
$a = $_REQUEST['age'];

echo "<h1>Your Name is $n</h1>";
echo "<br>Your Age is <b> $a </b>";

echo '<table border=1>
    <tr>  
      <td>  Name </td>
      <td> ' . $n . '   </td>
    </tr>
    <tr>  
      <td>  Age </td>
      <td> ' . $a . '   </td>
    </tr>  
   </table>';
