<html>

<head>
    <link rel="icon" href="resources/favicon.png" type="images/png">
    <title>The Verge</title>
    <meta charset="UTF-8">
<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
    <!--<link rel="stylesheet" media="screen and (max-width: 700px)" href="css/indexsmall.css">!-->
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="bootstrap/js/bootstrap.js" type="text/javascript">
    <link href="css/fonts.css" rel="stylesheet" type="text/css">
</head>

<?php
    $server="localhost";
    $user="root";
    $pass="root";

    $conn=new mysqli($server,$user,$pass);

    mysqli_select_db($conn,'blog');


?>

<body class="embed-responsive-1by1">
		<div class="content container col-md-12">

    <header class="header contianer">
        <div class="hdiv">
            <a href="index.php"><img class="logo" alt="The Verge" src="resources/The_Verge_Logo.png"></a>
            <a href="https://www.theverge.com/2019/10/18/20919098/nasa-all-female-spacewalk-live-stream-history-christina-koch-jessica-meir"><strong><p id="date">Saturday, April 4, 2020 | The Mac For Most</p></strong></a>
            <script>
                var now = new Date()
                days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday']
                months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December']
                var formattedDate = days[now.getDay()] + ", " + months[now.getMonth()] + " " + now.getDate() + ", " + now.getFullYear() + " | The Mac For Most";
                document.getElementById("date").innerHTML = formattedDate;
            </script>
        </div>
    </header>

    <nav class="container col-md-12">
        <div class="navb">
        <hr size="1" noshade id="navhr">
            <ul>
                <li class="dropdown">
                    <a href="#" class="dropbtn"><b>Tech</b></a>
                    <div class="dropdown-content">
                        <a href="#"><b>Amazon</b></a>
                        <a href="#"><b>Apple</b></a>
                        <a href="#"><b>Facebook</b></a>
                        <a href="#"><b>Google</b></a>
                        <a href="#"><b>Microsoft</b></a>
                        <a href="#"><b>Samsung</b></a>
                        <a href="#"><b>Tesla</b></a>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropbtn"><b>Reviews</b></a>
                    <div class="dropdown-content">
                        <a href="#"><b>Phones</b></a>
                        <a href="#"><b>Laptops</b></a>
                        <a href="#"><b>Headphones</b></a>
                        <a href="#"><b>Cameras</b></a>
                        <a href="#"><b>Smartwatches</b></a>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropbtn"><b>Science</b></a>
                    <div class="dropdown-content">
                        <a href="#"><b>Space</b></a>
                        <a href="#"><b>Nasa</b></a>
                        <a href="#"><b>SpaceX</b></a>
                        <a href="#"><b>Health</b></a>
                        <a href="#"><b>Energy</b></a>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropbtn"><b>Entertainment</b></a>
                    <div class="dropdown-content">
                        <a href="#"><b>Film</b></a>
                        <a href="#"><b>TV</b></a>
                        <a href="#"><b>Games</b></a>
                        <a href="#"><b>Music</b></a>
                        <a href="#"><b>Books</b></a>
                    </div>
                </li>
                <li><a href="#"><b>Video</b></a></li>
                <li><a href="#"><b>Features</b></a></li>
                <li><a href="https://www.theverge.com/podcasts"><b>Podcasts</b></a></li>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropbtn"><b>More</b></a>
                    <div class="dropdown-content">
                        <a href="#"><b>Newsletters</b></a>
                        <a href="#"><b>Store</b></a>
                    </div>
                </li>

				<a href="https://www.facebook.com/verge" id="social"><img src="resources/facebook.png" class="facebook"></a>
				<a href="https://twitter.com/verge" id="social"><img src="resources/twitter.png" class="twitter"></a>
				<a href="https://www.theverge.com/rss/index.xml" id="social"><img src="resources/rss.png" class="rss"></a>
				<a href="signup.html" ><img src="resources/profile.png" class="profile"></a>
				
            </ul>
			
            <hr size="1" noshade id="navhr">
        </div>
    </nav>

    <div class="wrapperm container col-md-12">
    <div class="gm">
        <?php
            $q="select * from home where grid='m'";
            $result=mysqli_query($conn,$q);
            $row=mysqli_fetch_array($result);
			$l=$row['location'];
			$t=$row['title'];
			$a=$row['link'];
            echo "<a href='$a'><img src='".$l."' alt='Covid-19 Alert' class='imgm'></a>";
            echo "<p class='titlem container'><a href='$a'>".$t."</a></p>";
        ?>
    </div>
</div>
    <div class="wrapper container col-md-12">
        <div class="g1" id="grid">
        <?php
            $q="select * from home where grid='1'";
            $result=mysqli_query($conn,$q);
            $row=mysqli_fetch_array($result);
            $l=$row['location'];
			$t=$row['title'];
			$a=$row['link'];
			echo "<a href='$a'><img class='img1 container' src='$l'></a>";
            echo "<p class='title1 container'><a href='$a'>$t</a></p>";
        ?>
        </div>

        <div class="g2 container" id="grid">
        <?php
            $q="select * from home where grid='2'";
            $result=mysqli_query($conn,$q);
            $row=mysqli_fetch_array($result);
            $l=$row['location'];
			$t=$row['title'];
			$a=$row['link'];
            echo "<a href='$a'><img class='img2' src='$l'></a>";
            echo "<p class='title2'><a href='$a'>".$t."</a></p>";
        ?>
        </div>
    
    </div>
    
    <div class="wrapper2">
        
        <div class="g3" id="grid">
        <?php
            $q="select * from home where grid='3'";
            $result=mysqli_query($conn,$q);
            $row=mysqli_fetch_array($result);
            $l=$row['location'];
			$t=$row['title'];
			$a=$row['link'];
			echo "<a href='$a'><img class='img2' src='$l'></a>";
			echo "<p class='title2'><a href='$a'>".$t."</a></p>";
        ?>
        </div>
        
        <div class="g4" id="grid">
        <?php
            $q="select * from home where grid='4'";
            $result=mysqli_query($conn,$q);
            $row=mysqli_fetch_array($result);
            $l=$row['location'];
			$t=$row['title'];
			$a=$row['link'];			
			echo "<a href='$a'><img class='img3' src='$l'></a>";
			echo "<p class='title3'><a href='$a'>$t</a></p>";
        ?>
        </div>
    </div>

    <div class="wrapper">
        <div class="g5" id="grid">
        <?php
            $q="select * from home where grid='5'";
            $result=mysqli_query($conn,$q);
            $row=mysqli_fetch_array($result);
            $l=$row['location'];
			$t=$row['title'];
			$a=$row['link'];
			echo "<a href='$a'><img class='img4' src='$l'></a>";
            echo "<p class='title4'><a href='$a'>$t</a></p>";
			?>
        </div>
        <div class="g6" id="grid">
        <?php
            $q="select * from home where grid='6'";
            $result=mysqli_query($conn,$q);
            $row=mysqli_fetch_array($result);
            $l=$row['location'];
			$t=$row['title'];
			$a=$row['link'];
            echo "<a href='$a'><img class='img2' src='$l'></a>";
            echo "<p class='title2'><a href='$a'>".$t."</a></p>";
        ?>
        </div>
    </div>

    <div class="wrapper3">
        <div class="g7" id="grid">
        <?php
            $q="select * from home where grid='7'";
            $result=mysqli_query($conn,$q);
            $row=mysqli_fetch_array($result);
            $l=$row['location'];
			$t=$row['title'];
			$a=$row['link'];
            echo "<a href='$a'><img class='img2' src='$l'></a>";
            echo "<p class='title2'><a href='$a'>".$t."</a></p>";
        ?>
        </div>
        <div class="g8" id="grid">
        <?php
            $q="select * from home where grid='8'";
            $result=mysqli_query($conn,$q);
            $row=mysqli_fetch_array($result);
            $l=$row['location'];
			$t=$row['title'];
			$a=$row['link'];
            echo "<a href='$a'><img class='img2' src='$l'></a>";
            echo "<p class='title2'><a href='$a'>".$t."</a></p>";
        ?>
        </div>

        <div class="g9" id="grid">
        <?php
            $q="select * from home where grid='9'";
            $result=mysqli_query($conn,$q);
            $row=mysqli_fetch_array($result);
            $l=$row['location'];
			$t=$row['title'];
			$a=$row['link'];
            echo "<a href='$a'><img class='img2' src='$l'></a>";
            echo "<p class='title2'><a href='$a'>".$t."</a></p>";
        ?>
        </div>
</div>
	
	<div class="wrapperf">
    <div class="gf">
        <?php
            $q="select * from home where grid='f'";
            $result=mysqli_query($conn,$q);
            $row=mysqli_fetch_array($result);
			$l=$row['location'];
			$t=$row['title'];
			$a=$row['link'];
            echo "<a href='$a'><p class='titlef'>".$t."</p></a>";
            echo "<a href='$a'><p class='titlef1'>".$l."</p></a>";
		mysqli_close($conn);
        ?>
    </div>
</div>	

<div class="footer">
<img src="resources/The_Verge_Logo.png" class="fimg">
<p class="ftext"> © 2020 Vox Media, Inc. All Rights Reserved </p>
</div>
	</div>
</body>

</html>