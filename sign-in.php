<?php
session_start();
require 'lib/helpers.php';
require 'lib/conn.php';
if (isset($_SESSION['email'])) {
    redirect("index.php");
}
if (isset($_POST) && isset($_POST['send'])) {
    if (!empty($_POST['email']) && !empty($_POST['passward'])) {
        $sql = "SELECT * FROM students WHERE email = '$_POST[email]' AND passward = '$_POST[passward]'";
        if ($result = mysqli_query($conn, $sql)) {
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['role'] = $row['role'];
                if ($_SESSION['role'] == 1)
                header("Location: index.php");
                else 
                header("Location: admin/index.php");
            } else {
                echo "Invalid email/password";
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
        <title>Login</title>
    </head>
    <body>
<section class="log">
    <section class="first">
        <img src="images/signin.jpg">
    </section>
    <section class="last">
            <div class="login">
            <h2><i class="fa-solid fa-user"></i></h2>
            <h1>Login</h1>
            <form action="sign-in.php" method="post">
                <input type="email"    name="email"     placeholder="Email Adress" />
                <input type="password" name="passward"  placeholder="passward" />
                <input type="submit"   name="send"      value="LOGIN" class="login-btn"/>
                <input type="checkbox" class="check"><p>Remember Me</p>
            </form>
            <a href="#" class="forget">Forgrt Passward</a></h3>
            <h3><span>Not a member ?</span>
            <a href="register.php">Create Account</a></h3>
            </div>
    </section>
</section>
</body>
</html>