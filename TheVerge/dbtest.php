<!doctype html>
<html>
<body bgcolor="green" text="white">
<center>

<?php
$server ="localhost";
$user="root";
$pass="";

$connection = mysqli_connect($server, $user, $pass); 

if (!$connection)
  die ('Could not connect: '.mysqli_error($conn));
else
  echo "Successful Connection<br>";

mysqli_select_db($connection,'blog');
echo "   Successful selection of DB<br>";

$q = "select * from home";
$result=mysqli_query($connection,$q);
echo "Successful Query execution<br>";

if (mysqli_num_rows($result) > 0) { 
    // if yes, print them one after another     
    echo "<table cellpadding=10 border=1 bgcolor='red'>"; 
    while($row = mysqli_fetch_array($result)) {   
        echo "<tr>"; 
        echo "<td>".$row['grid']."</td>"; 
        echo "<td>".$row['title']."</td>"; 
        echo "<td>".$row['location']."</td>"; 
        echo "</tr>"; 
    } 
    echo "</table>"; 
} 
else { 
    // if no, print status message 
    echo "No rows found!"; 
} 

?>






<br>END SECTION
</body>
</html>