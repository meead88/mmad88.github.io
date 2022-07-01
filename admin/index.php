<?php
session_start();
require 'conn.php';
require 'temblete/header.php'; 
if(!isset($_SESSION['email'])) {
    header("location: ../sign-in.php");
}  else
 if ( $_SESSION['role'] !=2 ) {
    header("location: ../index.php");
}
if (isset($_GET) && !empty($_GET)) {
    if (!empty($_GET['id'])) {
        $sql = "UPDATE comments SET display = 1 WHERE id = '$_GET[id]'";
        if (mysqli_query($conn, $sql)) {
            echo "comment will appear to the users";
        } else {
            echo "error";
        }
    }
}
?>
<section>

<!-- courses number -->
    <section class="numbers">
        <?php
        $sql = "SELECT * FROM courses";
        $result = mysqli_query($conn, $sql);
        ?>
        <h1>Number Of <a href="courses.php">Courses</a></h1>
        <h1><?= mysqli_num_rows($result) ?></h1>
    </section>
<!-- students number -->

    <section class="numbers">
        <?php
        $sql = "SELECT * FROM students";
        $result = mysqli_query($conn, $sql);
        ?>
        <h1>Number Of <a href="students.php">Students</a></h1>
        <h1><?= mysqli_num_rows($result) ?></h1>
    </section>

<!-- lectures number -->
<section class="numbers">
        <?php
        $sql = "SELECT * FROM lectures";
        $result = mysqli_query($conn, $sql);
        ?>
        <h1>Number Of <a href="lectures.php">Lectures</a></h1>
        <h1><?= mysqli_num_rows($result) ?></h1>
    </section>
</section>



<!-- comments -->
<section>
    <section class="comments">
        <h1>User Comments</h1>
        <?php
        $sql = "SELECT * FROM comments where display = 0 ORDER BY id DESC";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <section class="user-comment">
                    <h4><?= $row['name'] ?></h4>
                    <p><?= $row['comment'] ?></p>
                    <nav>
                        <a href="index.php?id=<?=$row['id']?>&action=1">Add This Comment</a>
                    </nav>
            </section>    
        <?php }
        } else {
            echo "No Result";
        } ?>
    </section>
</section>

<?php 
require 'temblete/footer.php';