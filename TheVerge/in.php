<html>
	<head>
		<title>Admin Management | The Verge</title>
		<link rel="stylesheet" href="css/fonts.css" type="text/css">
		<link rel="icon" href="resources/favicon.png" type="images/png">
		<style>
			body{
				background-color: black;
			}
			p{
				font-family: "DINCONDREG";
				color: white;
				font-size: 150%;
				
			}
			.dbar{
				background-image: linear-gradient(90deg, rgb(247, 198, 38), rgb(229, 18, 125));
				width: 40%;
				height: 10px;
				display: block;
				/*margin-left: 29%;*/
				margin-left: auto;
				margin-right: auto;
				margin-top: -1%;
			}
.logo{
	display: block;
	margin-left: auto;
	margin-right: auto;
	width: 30%;
	padding-top: 2%;
}

hr{
	margin-top: 3%;
	color: rgb(0, 0, 0, 0.2);
	width: 20%;
}
			.buttons{
	width: 17%;
	height: 50px;
	margin-top: 2%;
	margin-left: 2%;
	margin-right: 2%;
	background-image: linear-gradient(90deg, rgb(247, 198, 38), rgb(229, 18, 125));
	border-color: black;
	border-radius: 4px;
	cursor: pointer;
	filter: saturate(0.8);
	filter: contrast(0.9);
	text-decoration: none;
	font-size: 120%
}
			a{
				text-decoration: none;
				font-family: "DINCONDREG";
			}
		</style>
	</head>
<center>
	<body>
		<div class="dbar">
		<p></p>
	</div>
	
	
	<img class="logo" alt="The Verge Logo" src="resources/The_Verge_Logo.png">
	
	<hr class="hr" noshade>
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
	   $thash = md5($password . $salt);
	
	$q="select * from users where username='$username'";
            $result=mysqli_query($conn,$q);
            $row=mysqli_fetch_array($result);
			$hash=$row['hash'];
	
	if($thash!=$hash)
	{
		echo "<p>Invalid Username/Password</p>";
	}
	else
	{
		
		echo "<p>Login Successful</p>";
		/*echo "<br>";
		echo "<a href='http://localhost:8080/www/'><button class='buttons'>Go to homepage</button></a>";
		echo "<a href='http://localhost:8080/phpmyadmin/sql.php?server=1&db=blog&table=home&pos=0'><button class='buttons'>Go to backend</button></a>";*/
		header("refresh:3;url=http://localhost:8080/admindash.php");
		exit();
	}
	mysqli_close($conn);
	?>
	</body>
	</html>