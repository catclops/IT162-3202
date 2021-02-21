<?php include "includes/header.php";?>
<section>
<form action="index.php" method="post">
<div>
    <label>
        Name:<br /><input type="text" name="Name" required="required" placeholder="Full Name (required)" title="Name is required" tabindex="10" size="44" autofocus />
    </label>
</div>
<br>
<div>	
    <label>
        Email:<br /><input type="email" name="Email" required="required" placeholder="Email (required)" title="A valid email is required" tabindex="20" size="44" />
    </label>
</div>
<br>
<div>	
    <label>
        How Did You Hear About Us?:<br />
        <select name="How_Did_You_Hear_About_This_Site?" required="required" title="How You Heard is required" tabindex="30">
            <option value="">Please Choose Method</option>
            <option value="Ad">Ad</option>
            <option value="Online">Online</option>
            <option value="Referral">Referral</option>
            <option value="Television">Television</option>
            <option value="Other">Other</option>
        </select>
    </label>
</div>
<br>
<div>	
    <fieldset>
        <legend>What Services Are You Interested In?</legend>
        <input type="checkbox" name="Interested_In[]" value="Website: Creation" tabindex="40" /> Website: Creation <br />
        <input type="checkbox" name="Interested_In[]" value="Website: Redesign" /> Website: Redesign <br />
        <input type="checkbox" name="Interested_In[]" value="Text Editing" /> Text Editing <br />
        <input type="checkbox" name="Interested_In[]" value="Other" /> Other <br />
    </fieldset>
</div>
<br>
    <div>	
    <fieldset>
        <legend>Would you like to join our mailing list?</legend>
        <input type="radio" name="Join_Mailing_List?" value="Yes" 
        required="required" title="Mailing list is required" tabindex="50"  
        /> Yes <br />
        <input type="radio" name="Join_Mailing_List?" value="No" /> No <br />
    </fieldset>
</div>
<br>
<div>	
    <label>
        Comments:<br /><textarea name="Comments" cols="60" rows="8" placeholder="Your comments are important to us!" tabindex="60"></textarea>
    </label>
</div>	
<br>
<div class="g-recaptcha" data-sitekey="6LeDaSoUAAAAACnEiqA3QAkiRU-Q_wtk0vuBa_OX"></div>
<br>
<div>
    <input type="submit" value="submit" />
</div>
</form>
<!-- END HTML FORM -->

    <!--         
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
        ignore this jquery.min.js file 
        because header.php had included the 
        "<script src="js/jquery-1.12.4.js"></script>"
    -->
    <script type="text/javascript" src="https://www.google.com/recaptcha/api.js?hl=en"></script>
    <script>
        /**
        * requires reCAPTCHA so user doesn't lose form data 
        *
        * https://stackoverflow.com/questions/27706594/how-can-i-make-recaptcha-a-required-field
        * 
        * In this version, jQuery is required and code will find first form on page and require 
        * the reCAPTCHA for that form using document.forms[0]
        */
    
        function checkRecaptcha() {
            res = $('#g-recaptcha-response').val();
            if (res == "" || res == undefined || res.length == 0)
                return false;
            else
                return true;
        }
        $(function() {
            let thisForm = document.forms[0];
            $(thisForm).submit(function(e) {            
                if(!checkRecaptcha()) {
                    alert("Please confirm you are not a robot.");
                    return false;
                }
            });
        }); 
    </script>
</section>
 
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
<h3>Useful Web Resources</h3>
<ul>
    <li><a href="https://www.w3schools.com/html/html5_syntax.asp" target="_blank">W3Schools: HTML Syntax</a></li>
    <li><a href="https://google.github.io/styleguide/htmlcssguide.html" target="_blank">Google: HTML/CSS Style Guide</a></li>
    <li><a href="https://embedresponsively.com/" target="_blank">Embedded Link Generator</a></li>
</ul>
</aside>
<!-- END RIGHT COL -->
<?php include "includes/footer.php";?>


   

