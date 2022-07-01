<!-- <?php
require "conn.php";
require "temblete/header.php";

// if (isset($_POST) && !empty($_POST)) {
//     if (!empty($_POST['send'])) {
//         header ("courses.php");
//     }
// }?>
<section>
    <form action="lectures.php?id=<?=$_GET['id']?>" method="">
        <label for="name"> Lecture Name </label>
        <input type="text" name="name" id="name" placeholder="Course Name"/>
       
        <label for="Description"> Lecture Url </label>
        <input type="text" name="url" id="url" placeholder="lecture url"/>       

        <input type="submit" name="send" id="send" />
    </form>
</section>
<?php
require "temblete/footer.php";
?> -->