<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <script src="https://kit.fontawesome.com/79eb98cc7e.js" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css" />
        <title>M M A D </title>
    </head>
    <body>
        <header class="main-header">
            <div class="container">
            <img class="logo" src="images/logo.png" alt="logo-image" width="30%"/>
            <form action="search.php" method="get">
                <input type="search" class="search" name="search" placeholder="search"/>
            </form>
            <h1><i id="search" class="fa-solid fa-magnifying-glass"></i></h1>
            <nav id="menulist">
                <a href="index.php">Home</a>
                <a href="courses.php">Courses</a>
                <?php if (isset($_SESSION['email'])) { ?>
                    <a href="../logout.php">Logout</a>
                <?php } else { ?>
                    <a href="../sign-in.php">login</a> 
                <?php } ?>
            </nav>
        </div>
        </header>
