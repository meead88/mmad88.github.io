<?php
session_start();
require 'lib/conn.php'; 
require 'temblete/header.php'; 
if( !isset($_SESSION['email']) ) {
    header("Location: sign-in.php");
}
?>
    <body>
      <section class="welcome">

      </section>
      <section class="address">
         <h1>Welcome To Make Me A Developer Website</h1>
         <h2>THE FIRST WEB DEVELOPMENT ACADEMY WORLDWIDE </h2>
    <address>
               <div class="group">
                <i class="fa-solid fa-location-dot"></i>
               <h4>address</h4>
               <p>Khartoum ,Sudan</p>
            </div>

            <div class="group">
                <i class="fa-solid fa-phone"></i>
                <h4>Lets Talk</h4>
                <p>+345 567 9898</p>
             </div>

             <div class="group">
                <i class="fa-solid fa-envelope"></i>
                <h4>Email</h4>
                <p>mmad@gmail.com</p>
             </div>
             <a href="contact-us.php">Contact Us Now</a>
           </address>
      </section>
    </body>
    </html>
    <?php require 'temblete/footer.php'; ?>