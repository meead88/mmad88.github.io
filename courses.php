<?php
session_start();
require 'lib/conn.php'; 
require 'temblete/header.php'; 
if( !isset($_SESSION['email']) ) {
    header("Location: sign-in.php");
}
?>
<main>
<section class="coursepage">
    <h1>OUR COURSES</h1>
    <?php
    $sql = "SELECT * FROM courses ";
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
</section>
</main>
<?php require 'temblete/footer.php'; ?>
