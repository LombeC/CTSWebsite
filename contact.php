<?php 
    $title = "Contact | Chalo Trust School";
    $metaKeywords = "Contact Form, Contact Us, Phone Number for Chalo Trust School, Chalo Address";
    session_start();

    require_once 'helpers/security.php';
  
    $errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : [];
    $fields = isset($_SESSION['fields']) ? $_SESSION['fields'] : [];
    include 'core/init.php';
    include 'includes/overall/overall_header.php';
?>
<div class="mainContent">
    <h1>Contact</h1>

    <div id="leftDiv">
        
        <?php if(!empty($errors)): ?>
            <div class="messagePanel">
                <ul>
                    <li><?php echo implode('</li><li>', $errors); ?> </li>
                </ul>
            </div>
        <?php endif; ?>
        <?php
        if(isset($_GET['success']) === true && empty($_GET['success']) === true){
        ?>
            <div class="messagePanel2">
                 Thank you for contacting us. Your Message has been sent and you will receive a reply as soon as possible.
            </div>
        <?php } ?>
      <form id="contactForm" name="contactForm" action="sendEmail.php" method="post">
            <h3>Send us a message</h3>
            <label for="name"> Name</label>
            <input type="text" id="name" name="name" placeholder="Your name" <?php echo isset($fields['name']) ? ' value = "' . sanitizeString($fields['name']) .'" ' : '';?> >

            <label for="email">Email*</label>
            <input type="email" id="email" name="email" placeholder="Your email address"  <?php echo isset($fields['email']) ? ' value = "' . sanitizeString($fields['email']) .'" ' : '';?>>
          
            <div class="antispam">Leave this empty: <input type="text" name="url" /></div>
              <label for="subject">Subject</label> 
            <input type="text" id="subject" name="subject" placeholder="Your subject"  <?php echo isset($fields['subject']) ? ' value = "' . sanitizeString($fields['subject']) .'" ' : '';?>>
              <style>

              </style>
            <label for="message">Message*</label>
            <textarea id="message" name="message" placeholder="Write something"><?php echo isset($fields['message']) ?sanitizeString($fields['message']) : ''?></textarea>
                <div class="formButtons">
                    <button type="submit" value="Send">Send</button>
                    <input type="reset" value="Reset">
              </div>
      </form> 
    </div>
    
    <div id="rightDiv">
      
        <h3>Visit Us</h3>
        <div id="visitUsMini"> 
            <div>
            <h4>Address</h4>
                <i class="fa fa-map-marker"></i> Plot No 44A/E/609,<br /> Hybrid Rd,
            Chamba Valley.<br />
            Lusaka, Zamba<br />
                 <hr>
            </div>
            
            <div>
                <h4>Contact Details</h4>
                <i class="fa fa-phone" aria-hidden="true"></i><a href="tel:+260979480254"> 0979480254 <br></a>
                <i class="fa fa-phone" aria-hidden="true"></i><a href="tel:+260955883097"> 0955883097 <br></a>
                <i class="fa fa-phone" aria-hidden="true"></i><a href="tel:+260955883099"> 0955883099 <br></a>
                <i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@chalotrustschool.com" target="_top"> info@chalotrustschool.com</a>
            </div>
           
            <div>
                 <hr>
            <h4>Our Location</h4>
                <div id="googleMap" class="w3-round-large" style></div>
            </div>
        </div> 
    </div>
</div> 
<div class="clear"></div>
 

<?php 

include 'includes/overall/overall_footer.php';
unset($_SESSION['errors']);
unset($_SESSION['fields']);
?>