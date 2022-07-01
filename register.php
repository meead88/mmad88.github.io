<?php
session_start();
require 'lib/conn.php';
require 'lib/helpers.php';

$success = false;
$exist = false ;
if (isset($_POST) && isset($_POST['send'])) {

    if (
        !empty($_POST['firstname']) && !empty($_POST['lastname'])
        && !empty($_POST['email']) && !empty($_POST['passward'])
    ) {

        $sql = "SELECT * FROM students WHERE email = '$_POST[email]'";
        if ($result = mysqli_query($conn, $sql)) {
            if (mysqli_num_rows($result) > 0) {
                $exist =true;
            } else {
                $sql = "INSERT INTO students (firstName, lastName, email, passward)
                VALUES ('$_POST[firstname]', '$_POST[lastname]', '$_POST[email]', '$_POST[passward]' )";
                if (mysqli_query($conn, $sql)) {
                    $success = true;
                    redirect('sign-in.php');
                } else {

                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
            }
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } else {
        echo "All Fields Are Required";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <script src="https://kit.fontawesome.com/79eb98cc7e.js" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css" />
        <title>register</title>
    </head>
    <body>
<article>
    <section class="first">
        <img src="images/signin.jpg">
    </section>
    <section class="last">
            <div class="register">
            <?php 
                if($success){
                    echo '<div class="success">
                         <h2>Success</h2>
                         <h2>you have successfully registered!</h2>
                     </div>';
                }
                if($exist){
                    echo '<div class="success">
                    <i class="fa-solid fa-exclamation"></i>
                    <p>Email Already Exists</p>
                </div>';
                }
            ?>
     <h2><i class="fa-solid fa-pencil"></i></h2>
            <h1>Sign Up</h1>
                <form action="register.php" method="post">
                <input type="text"           name="firstname"    id="firstname"      placeholder="firstname" />
                <input type="text"           name="lastname"     id="lastname"       placeholder="lastname" />
                <input type="text"           name="email"        id="email"          placeholder="Email" />
                <input type="password"       name="passward"     id="password"       placeholder="password" />
                <input type="submit"         name="send"         id="send"           value="send" />
        </form>
        <h3><span>Already A Member ?</span>
            <a href="sign-in.php">sign in</a></h3>
            </div>
    </section>
</article>
</body>
</html>