<?php include "includes/header.php";?>
<h2 class="subheader">Contact Vu</h2>
<p><?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "vanguyen106@gmail.com";  //place your/your client's email address here
        $toName = "Vu"; //place your client's name here
        $website = "IT162 Contact Form";  //place NAME of your client's website

        echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	?></p>
 <?php include "includes/footer.php";?>


