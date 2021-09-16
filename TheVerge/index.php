<html>

<head>
    <link rel="icon" href="resources/favicon.png" type="images/png">
    <title>The Verge</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="css/fonts.css" rel="stylesheet" type="text/css">
    <link href="css/css.css" rel="stylesheet" type="text/css">

    <style>
        .bg-dark {
            background-color: #000 !important;
        }

        .fab :hover {
            color: #e5127d !important;
        }

        nav {
            font-family: "D-DINCondensed" !important;
            font-size: 15pt;
        }
        nav :hover{
            color : #e5127d !important;
        }
    </style>
</head>

<?php
$server = "localhost";
$user = "root";
$pass = "root";

$conn = new mysqli($server, $user, $pass);

mysqli_select_db($conn, 'blog');
?>

<body>
    <div class="header text-center">
        <a class="logo" href="index-rebase.html">
            <img class="logo" src="resources/TheVerge.svg">
        </a>
        <a href="https://www.theverge.com/2019/10/18/20919098/nasa-all-female-spacewalk-live-stream-history-christina-koch-jessica-meir">
            <!-- <strong> -->
            <p id="date">Saturday, April 4, 2020 | <span class="tagline"> The Mac For Most </p></p>
            <!-- </strong> -->
        </a>
        <script>
            var now = new Date()
            days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday']
            months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December']
            var formattedDate = days[now.getDay()] + ", " + months[now.getMonth()] + " " + now.getDate() + ", " + now.getFullYear() + " | The Mac For Most";
            document.getElementById("date").innerHTML = formattedDate;
        </script>
    </div>

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse"></div>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown"> Tech </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"> Google</a></li>
                            <li><a class="dropdown-item" href="#"> Apple </a></li>
                            <li><a class="dropdown-item" href="#"> Microsoft </a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown"> Reviews </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"> Submenu item 1</a></li>
                            <li><a class="dropdown-item" href="#"> Submenu item 2 </a></li>
                            <li><a class="dropdown-item" href="#"> Submenu item 3 </a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown"> Science </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"> Submenu item 1</a></li>
                            <li><a class="dropdown-item" href="#"> Submenu item 2 </a></li>
                            <li><a class="dropdown-item" href="#"> Submenu item 3 </a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown"> Creators </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"> Submenu item 1</a></li>
                            <li><a class="dropdown-item" href="#"> Submenu item 2 </a></li>
                            <li><a class="dropdown-item" href="#"> Submenu item 3 </a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown"> Entertainment </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"> Submenu item 1</a></li>
                            <li><a class="dropdown-item" href="#"> Submenu item 2 </a></li>
                            <li><a class="dropdown-item" href="#"> Submenu item 3 </a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#"> Video </a></li>
                    <li class="nav-item"><a class="nav-link" href="#"> Features </a></li>
                    <li class="nav-item"><a class="nav-link" href="#"> Podcasts </a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown"> More </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"> Submenu item 1</a></li>
                            <li><a class="dropdown-item" href="#"> Submenu item 2 </a></li>
                            <li><a class="dropdown-item" href="#"> Submenu item 3 </a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="navbar-nav sm-icons">
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-instagram"></i></a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-twitter"></i></a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-pinterest-p"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="bg-grad">
        <div class="row text-center content-row">
            <div class="col-lg-9 d-flex flex-row big-box">
                <?php
                $q = "select * from home where grid='1'";
                $result = mysqli_query($conn, $q);
                $row = mysqli_fetch_array($result);
                $l = $row['location'];
                $t = $row['title'];
                $a = $row['link'];
                ?>
                <div class="d-flex justify-content-lg-start colpad">
                    <?php
                    echo "<a href='$a'><img src='$l' class='big-box-img'>";
                    ?>
                </div>
                <div class="d-flex justify-content-lg-center text-center big-box-text">
                    <?php
                    echo "<p class='align-middle'><a href='$a'>$t</a></p>";
                    ?>
                </div>
            </div>

            <div class="col-lg-3 row small-box">
                <?php
                $q = "select * from home where grid='2'";
                $result = mysqli_query($conn, $q);
                $row = mysqli_fetch_array($result);
                $l = $row['location'];
                $t = $row['title'];
                $a = $row['link'];
                ?>
                <div class="col-12 colpad">
                    <?php
                    echo "<a href='$a'><img src='$l' class='small-box-img'>";
                    //                        <img src="resources/acastro_200311_3936_coronavirus_0002.0.0.jpg" style="width: inherit;">
                    ?>
                </div>
                <div class="col-12">
                    <?php
                    echo "<p class='big-box-text'><a href='$a'>$t</a></p";
                    //                        <p class="big-box-text">covid 19 prevention</p>
                    ?>
                </div>
            </div>

        </div>
        <div class="row text-center content-row">

            <div class="col-lg-3 row small-box">
                <div class="col-12 colpad">
                    <img src="resources/acastro_200311_3936_coronavirus_0002.0.0.jpg" style="width: inherit;">
                </div>
                <div class="col-12">
                    <p class="big-box-text">covid 19 prevention</p>
                </div>
            </div>

            <div class="col-lg-9 d-flex flex-row big-box">
                <?php
                $q = "select * from home where grid='1'";
                $result = mysqli_query($conn, $q);
                $row = mysqli_fetch_array($result);
                $l = $row['location'];
                $t = $row['title'];
                $a = $row['link'];
                ?>
                <div class="d-flex justify-content-lg-center text-center big-box-text">
                    <?php
                    echo "<p class='align-middle'><a href='$a'>$t</a></p>";
                    ?>
                </div>
                <div class="d-flex justify-content-lg-start colpad">
                    <?php
                    echo "<a href='$a'><img src='$l' class='big-box-img'>";
                    ?>
                </div>
            </div>

        </div>
        <div class="row text-center content-row">
            <div class="col-lg-9 d-flex flex-row big-box">
                <?php
                $q = "select * from home where grid='1'";
                $result = mysqli_query($conn, $q);
                $row = mysqli_fetch_array($result);
                $l = $row['location'];
                $t = $row['title'];
                $a = $row['link'];
                ?>
                <div class="d-flex justify-content-lg-start colpad">
                    <?php
                    echo "<a href='$a'><img src='$l' class='big-box-img'>";
                    ?>
                </div>
                <div class="d-flex justify-content-lg-center text-center big-box-text">
                    <?php
                    echo "<p class='align-middle'><a href='$a'>$t</a></p>";
                    ?>
                </div>
            </div>

            <div class="col-lg-3 row small-box">
                <div class="col-12 colpad">
                    <img src="resources/acastro_200311_3936_coronavirus_0002.0.0.jpg" style="width: inherit;">
                </div>
                <div class="col-12">
                    <p class="big-box-text">covid 19 prevention</p>
                </div>
            </div>

        </div>
        <div class="row text-center content-row d-flex flex-row highlight-row">
            <div class="col-lg-5 row d-flex justify-content-end">
                <p>the future is now</p>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-5 row d-flex justify-content-start">
                <p>covid 19 prevention</p>
            </div>
        </div>
    </div>

</body>


</html>