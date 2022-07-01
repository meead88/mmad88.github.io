<?php
session_start();
require 'lib/conn.php'; 
require 'temblete/header.php'; 
if( !isset($_SESSION['email']) ) {
    header("Location: sign-in.php");
}
?>
<main class="">
    <section class="lectures">
        <?php
        $sql = "SELECT * FROM lectures WHERE courseid = '$_GET[id]'";
        $result = mysqli_query($conn , $sql);
        if(mysqli_num_rows($result) > 0){
            while ($row = mysqli_fetch_assoc($result)) { ?>
            <a href="course.php?id=<?=$_GET['id']?>&url=<?=$row['url']?>"><?=$row['name']?></a>
            <?php }
        } else {
            echo "No Results";
        } ?>
    </section>
    <section class="lecture">
        <?php if (!empty($_GET['description'])) :?>
            <P><?=$_GET['description']?></p>
            <?php else : ?>
        <iframe  width="100%" height="315" src="https://www.youtube.com/embed/<?=$_GET['url']?>" title="youtube lectures" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture;" allowfullscreen></iframe>
           <?php endif; ?>
        </section>
</main>
<?php require 'temblete/footer.php'; ?>