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
if (empty($_GET['id'])){
    header("Location: courses.php");
}
if (isset($_POST) && !empty($_POST)) {
    if ($_POST['send'] != null ) {
        $sql = "INSERT INTO lectures (name, url , courseid) VALUES ('$_POST[name]', '$_POST[url]', '$_GET[id]')";
        if (mysqli_query($conn, $sql)) {
            ?><h2>NO Result</h2><?php
        } else{
            echo "error";
        }

    }
}

    if (!empty($_GET['lectureid']) ) {
        $id = $_GET['lectureid'];
        $sql = "DELETE FROM lectures WHERE id = $id";
        if (mysqli_query($conn, $sql)) {
            echo "delete record";
        } else{
            echo "error";
        }

    }
?>
<section class="lecturepage" >
    <form action="lectures.php?id=<?=$_GET['id']?>" method="post" class="addlecture">
        <h1>Add New Lecture</h1>
        <label for="name"> Lecture Name </label>
        <input type="text" name="name" id="name" placeholder="Course Name"/>
       
        <label for="Description"> Lecture Url </label>
        <input type="text" name="url" id="url" placeholder="lecture url"/>       

        <input type="submit" name="send" id="send" class="send" value="Add"/>
    </form>
</section>
<section class="addcourses">
    <!-- <a href="addlectures.php" class="add">Add New Lecture</a> -->
    <section>
        <?php
        $sql = "SELECT * FROM lectures WHERE courseid = $_GET[id]";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) >0) { ?>
            <table class="coursestable"> 
                <tr>
                    <th>Id</th>
                    <th>lecture Name</th>
                    <th>lecture Url</th>
                    <th>Action</th>
                </tr>
                <?php while ($row = mysqli_fetch_assoc($result)) {?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['name'] ?></td>
                        <td><?= $row['url'] ?></td>
                        <td><a href="lectures.php?id=<?=$_GET['id']?>&lectureid=<?= $row['id'] ?>">Delete</a></td>
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