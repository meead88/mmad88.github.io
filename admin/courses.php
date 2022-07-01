<?php
session_start();
require "conn.php";
require "temblete/header.php";
if ( !isset($_SESSION['email']) ) {
    header("Location: sign-in.php");
}
if ($_SESSION['role'] != 2 ) {
    header("Location: ../index.php");
}
if (isset($_POST) && !empty($_POST)) {
    if ($_POST['send'] != null && !empty($_FILES['image'])) {

        $name = $_FILES['image']['name'];
        $location = $_FILES['image']['tmp_name'];

        $upload = '../courseimages/'.$name;
        if ($_FILES['image']['error'] == 0) {
            if (move_uploaded_file($location, $upload)) {
                    $sql = "INSERT INTO courses (name, description, category , image) VALUES ('$_POST[name]', '$_POST[description]','$_POST[category]', '$upload')";
                    if (mysqli_query($conn, $sql)) {
                        echo "new record";
                    } else{
                        echo "error";
                    }
            }
        }
    }
}?>
<section class="addcourses">
    <a href="addcourse.php" class="add">Add New Course</a>
    <section>
        <?php
        $sql = "SELECT * FROM courses";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) >0) { ?>
            <table class="coursestable"> 
                <tr>
                    <th>Id</th>
                    <th>Course Name</th>
                    <th>Description</th>
                    <th>category</th>
                </tr>
                <?php while ($row = mysqli_fetch_assoc($result)) {?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><a href="lectures.php?id=<?= $row['id'] ?>"><?= $row['name'] ?></a></td>
                        <td><?= substr($row['description'], 0, 50)?></td>
                        <td><?= $row['category'] ?></td>
                    </tr>
                <?php } ?>
            </table>
        <?php
        } else {
            echo"no result";
        } ?>
    </section>
</section>
<?php
require "temblete/footer.php";
?>