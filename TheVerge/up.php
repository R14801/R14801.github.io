<html>
<center>
<?php

    $server="localhost";
    $user="root";
    $pass="";

    $conn=mysqli_connect($server,$user,$pass);

    if(!$conn)
        die("Connection unsuccessful".mysqli_error($user));
        

        mysqli_select_db($conn,'blog');


       $username = $_POST['username'];
	   $password = $_POST['password'];
		$email = $_POST['email'];
		$hash = md5($password . $salt);
	
	
       
        $q = "INSERT INTO users (username,password,email,hash)
     VALUES ('$username','$password','$email','$hash')";
	$result = mysqli_query($conn,$q);
	


 
$q = "select * from users";
$result=mysqli_query($conn,$q);


if (mysqli_num_rows($result) > 0) { 
        
    echo "<table cellpadding=18 border=4 bgcolor='white'>"; 
    while($row = mysqli_fetch_array($result)) { 

	
        echo "<tr>"; 
        echo "<td>".$row['username']."</td>"; 
        echo "<td>".$row['password']."</td>"; 
		echo "<td>".$row['email']."</td>";
		echo "<td>".$row['hash']."</td>";
		echo "</tr>"; 
    } 
    echo "</table>"; 
} 
else { 
   
    echo "No rows found!"; 
} 

	mysqli_close($conn);
	
	header("Location: signin.html");
exit();
?>
</center>
</body>
</html>