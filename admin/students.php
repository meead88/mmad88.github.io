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
?>
<section class="addcourses">
    <section>
        <?php
        $sql = "SELECT * FROM students";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) >0) { ?>
            <table class="coursestable"> 
                <tr>
                    <th>Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>email</th>
                </tr>
                <?php while ($row = mysqli_fetch_assoc($result)) {?>
                    <tr>
                        <td><?= $row['studentid'] ?></td>
                        <td><?= $row['firstname'] ?></td>
                        <td><?= $row['lastname'] ?></td>
                        <td><?= $row['email'] ?></td>
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