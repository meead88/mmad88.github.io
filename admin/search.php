<?php
session_start();
require 'conn.php';
require 'temblete/header.php'; 
if( !isset($_SESSION['email'])) {
    header("location: sign-in.php");
}?>
<ul class="searchpage">
    <h1>Search Result</h1>
    <?php
    $search = $_GET['search'];
    $sql = "SELECT * FROM courses WHERE name like '%$search%'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        while ($row = mysqli_fetch_assoc($result)) { ?>
        <li>
            <h3><a href="courses.php?id=<?= $row['id'] ?>"><?= $row['name']?></a></h3>
        </li>
    <?php }
    } else {
        echo "NO RESULT";
    } ?>
</ul>
<?php require 'temblete/footer.php'; 
?>