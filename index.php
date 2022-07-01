<?php
session_start();
require 'lib/conn.php';
require 'lib/helpers.php'; 
require 'temblete/header.php'; 
$error = false;
$success = "";
$fail = "";
function validate($txt, $field){
    if (empty($txt)) {
    $GLOBALS["error"] = true;
    $GLOBALS[$field] = "$field is required";
    }
}
if ( isset($_POST['send'])) {
    validate($_POST['name'] ,'name');
    validate($_POST['email'] ,'email');
    validate($_POST['comment'] ,'comment');
    if (!$error){
        $sql = "INSERT INTO comments (name, email, comment) VALUES ('$_POST[name]', '$_POST[email]', '$_POST[comment]')";
        if ( mysqli_query($conn, $sql)) {
            $success = "thank You For Your Comment";
        }
        else{
            $fail = "Something Went Wrong";
        }
    }
}
?>
<main>
        <section class="landing">
            <div class="jumb">
                <h2>THE FIRST WEB DEVELOPMENT ACADEMY WORLDWIDE </h2>
                <p>Dozens Of Practical Concisely-presented Courses On Every Topic Related To Web Development</p>
                <h3>It's Never Been Easier To Became A Master </h3>
                <a href="register.php" class="joinus-btn">Join Us </a>
            </div>
        </section>
<!-- populer courses -->
        <section class="courses">
            <h2>Populer Courses</h2>
    <?php
    $sql = "SELECT * FROM courses ORDER BY id DESC LIMIT 3 ";
    if ( isset($_GET['category'])) {
        $sql = $sql . "WHERE category = '$_GET[category]'";
    }
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        while ($row = mysqli_fetch_assoc($result)) { ?>
            <section class="course">
                <img src="images/lang.png" alt="course" width="100%" height="150px" />
                <a href="course.php?id=<?= $row['id'] ?>&description=<?=$row['description']?>"><?= $row['name'] ?></a>
                <P><?= substr($row['description'],0 , 70) ?></p>
        </section>
        <?php }
    } else {
        echo "NO Result";
    }
    ?>
</article>
        </section>

<!-- User Comments -->
        <section class="reviews">
            <h2>Users Comments</h2>
            <?php
            $sql = "SELECT * FROM comments WHERE display = 1 ORDER BY id DESC LIMIT 3";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) > 0){
                while ($row = mysqli_fetch_assoc($result)) { ?>
                    <section class="user-comment">
                        <h5><?=$row['name']?></h5>
                        <p><?=$row['comment']?></p>
                </section>
            <?php }
            } else { ?>
                <h1>THERE IS NO COMMENTS YET</h1> <?php ;
            } ?>
        </section>


<!-- Send Review -->
        <section class="send-review">
            <h2>Leave A comment Here </h2>  
            <form action="index.php" method="post">
                <div class="grouping-form">
                    <label>Your name </label>
                    <input type="text" class="name" name="name" placeholder="Your Name"/>
                </div>  
                <h1><?php if( !empty($GLOBALS['name'])) echo $GLOBALS['name']; ?></h1>
                <div class="grouping-form">
                    <label>Your email </label>
                    <input type="email" class="name" name="email" placeholder="Enter Your E-mail" />
                </div>
                <h1><?php if( !empty($GLOBALS['email'])) echo $GLOBALS['email']; ?></h1>
                <div class="grouping">
                    <label class="leave-amassege">leave a message </label>
                    <input type="text" class="message" name="comment" placeholder="Write Your Review Here"/>
                </div>
                <h1><?php if( !empty($GLOBALS['comment'])) echo $GLOBALS['comment']; ?></h1>
                <input type="submit" class="send" name="send" value="send"/>
                <h1><?php if( !empty($GLOBALS['success'])) echo $GLOBALS['success']; ?></h1>
                <h1><?php if( !empty($GLOBALS['fail'])) echo $GLOBALS['fail']; ?></h1>
            </form>
        </section>
        </section>
</main>
<?php require 'temblete/footer.php'; ?>
