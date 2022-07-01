<footer>
            <!-- <section>
                <a href="#home">What Are We ?</a>
            </section> -->
            <section class="social">
                <p>We Are Social</p>
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-linkedin-in"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-youtube"></i>
                <i class="fa-brands fa-pinterest"></i>
            </section>
            <section class="rights">
                <p> All Copy Rights &copy; 2022 M M A D </p>
                <a href="contact-us.php" >Contact Us</a>
                <a href="about-us.php" >About US</a>
                <?php if (isset($_SESSION['email'])) { ?>
                    <a href="../logout.php">Logout</a>
                <?php }?>
                <span>made with <i class="fas fa-heart"></i></span>
            </section>
        </footer>
         <script>
             var menulist = document.getElementById("menulist")
             menulist.style.maxHeight = "0px"
             function togglemenu(){
                 if( menulist.style.maxHeight == "0px")
                 {
                     menulist.style.maxHeight = "750px";
                 }
                 else{
                    menulist.style.maxHeight = "0px";

                 }
            }
         </script>
    </body>
</html>