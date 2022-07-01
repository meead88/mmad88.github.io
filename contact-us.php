<?php
session_start();
require 'lib/conn.php'; 
require 'lib/helpers.php'; 
require 'temblete/header.php'; 
if ( !isset($_SESSION['email']) ) {
    header("Location: sign-in.php");
}
if ($_SESSION['role'] != 2 ) {
    header("Location: ../index.php");
}
if (isset($_POST) && !empty($_POST)) {
    if ($_POST['send'] != null ) {
        $sql = "INSERT INTO messages (firstname,  lastname , email , message) VALUES ('$_POST[firstname]', '$_POST[lastname]', '$_GET[email]','$_POST[message]')";
        if (mysqli_query($conn, $sql)) {
            echo "Thank You For Your Message";
            redirect('index.php');
        } else{
            echo "error";
        }

    }
}
?>
<html>
    <head>
        <meta charset="UTF-8" />
        <script src="https://kit.fontawesome.com/79eb98cc7e.js" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css" />
        <title>Contact US</title>
    </head>
    <body>
        <article>
            <div class="contact-us">
                <div class="head">
            <h1>Send Us A Message</h1>
            <h3>WE'D LOVE TO HEAR FROM YOU.</h3></div>
            <form action="contact-us.php" method="post">
                <input type="text" name="firstname" class="group" placeholder="First Name" />
                <input type="text" name="lastname" class="group"placeholder="Last Name" />
                <input type="email" name="email" placeholder="Email Adress" />
                <input type="text" name="message" class="textarea" placeholder="write us a message" />
                <input type="submit"  name="send" id="send" value="Send Message" />
            </form>
            </div>
        </article>
</body>
</html>
<?php require 'temblete/footer.php'; ?>