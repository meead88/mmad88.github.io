<?php
session_start();
require "conn.php";
require "temblete/header.php";

if (isset($_POST) && !empty($_POST)) {
    if (!empty($_POST['send'])) {
        header ("courses.php");
    }
}?>
<section>
    <form action="courses.php" method="post" enctype="multipart/form-data" class="addlecture">
        <h1>Add New Course</h1>
        <label for="name"> Course Name </label>
        <input type="text" name="name" id="name" placeholder="Course Name"/>
       
        <label for="Description"> Course Description </label>
        <input type="text" name="description" id="description" placeholder="Course description"/>       
       
        <label for="image"> Course Image </label>
        <input type="file" name="image" id="image" placeholder="Course Image" class="file"/>       
       
        <label for="category"> Course category </label>
        <select name="category" id="category" class="select">
            <optgroup>
                <option value="frontend">Frontend</option>
                <option value="backend">Backend</option>
            </optgroup>    
        <input type="submit" name="send" id="send" value="Add" class="send"/>
    </form>
</section>
<?php
require "temblete/footer.php";
?>