<?php 
    $title = "Newsletters | Chalo Trust School";
    include 'core/init.php';
    include 'includes/overall/overall_header.php';
    require_once 'helpers/sidebarWidgetBuilder.php';
?>
<div class="mainContent">
<h1>NEWSLETTER</h1>
    <div class="leftsidebar">
        <?php
          buildSidebarMenu($newsSectionSubmenu);
        ?>
        <div class="sidebarContactBox">
            <span class="sidebarContactBoxHeading">Contact Us</span>
            <ul>
                <li>Have a question? Check out the <a href="faq.php">FAQ</a> page. If you can't find your answer,  the Administrative team can help. <br><a href="contact.php">Contact Page</a></li>
                <li><span class="bluename">Information Desk <br></span> 
                    School Administration<br>
                    <a href="mailto:info@chalotrustschool.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> info@chalotrustschool.com</a>
                </li>
               <li>
                    <span class="bluename">Mrs. Jenny Chileshe<br></span>
                    Director, Administration <br>
                    <i class="fa fa-phone" aria-hidden="true"></i> 097 9480254 <br> 
                    <i class="fa fa-phone" aria-hidden="true"></i> 095 5883099 <br> 
                    <a href="mailto:director@chalotrustschool.com" target="_top">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i> director@chalotrustschool.com
                    </a>
                </li>
                <li><span class="bluename"><?php echo $principal_name ?><br></span> 
                    School Principal<br>
                    <a href="mailto:principal@chalotrustschool.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> principal@chalotrustschool.com</a>
                </li>
                
                <li><b>Contact Hours</b><br>
                    7:30 - 16:00<br>
                    Monday - Saturday <br><br>
                    <b>Chalo Trust School</b> <br>
                    Chamba Valley, Lusaka <br>
                    <a href="mailto:info@chalotrustschool.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> info@chalotrustschool.com</a>
                </li>
            </ul>
        </div>
        
    </div>

    <div class="mainContentRightDiv" id="newsDiv"> 
        <article class="newsLetter">
                <div class="newsLetterText">
                <div class="newsCardHeadline"><h3><a href="newsletters/Chalo_Trust_School_End_Of_Term_1_2018_NewsLetter.pdf">2018 Term 1 - End of Term Newsletter</a></h3>
                
                </div>
            <div class="newsCardStory">
                <span class="largeScreenNews">
                        <p>We are happy to have successfully completed the first term of 2018. We give the Almighty God all the glory for what he enables us to do through his abundant grace.This term has been an irregular academic period in that, we opened and closed schools later than what we have been accustomed to. As you may be aware, Lusaka City and part of the nation were hit with a severe Cholera outbreak early this year.Public and private learning institutions were advised to keep closed during the heat of the pandemic, until at the reopening directive of the government.</p>
                        We encourage our parents to read through all the contents of the newsletter as it has some very important announcements regarding the school's affairs in the second term.
                    </span> 
                    <span class="smallScreenNews">
                        We are happy to have successfully completed the first term of 2018. We give the Almighty God all the glory for what he enables us to do through his abundant grace.This term has been an irregular academic period in that, we opened and closed schools later than what we have been accustomed to.
                    </span><br>  
            <a href="newsletters/Chalo_Trust_School_End_Of_Term_1_2018_NewsLetter.pdf" class="readmoreButton">Read More</a></div>
            </div>
            
            <div class="clear"></div>
        </article>
        
        <article class="newsLetter">
                <div class="newsLetterText">
                <div class="newsCardHeadline"><h3><a href="newsletters/Chalo%20Trust%20School%20-%20End%20of%20Term%202%20-%202017%20-%20%20Newsletter.pdf">2017 Term 2 - End of Term Newsletter</a></h3>
                
                </div>
            <div class="newsCardStory">
                <span class="largeScreenNews">
                       <p>What a delight to end another term on a blissful note. The Lord’s mercies have indeed been in so much in abundance. We have had a very successful term; we give thanks to the Almighty for seeing us through.
                        We thank the general student populace for their cooperation during this terms learning period. </p>
                        We encourage our parents and students to read through this newsletter to the end, so that you can be kept abreast with our future activities and plans, and capture the important dates in our calendar.
                    </span> 
                    <span class="smallScreenNews">
                        What a delight to end another term on a blissful note. The Lord’s mercies have indeed been in so much in abundance. We have had a very successful term; we give thanks to the Almighty for seeing us through.
                        We thank the general student populace for their cooperation during this terms learning period
                    </span><br>  
            <a href="newsletters/Chalo%20Trust%20School%20-%20End%20of%20Term%202%20-%202017%20-%20%20Newsletter.pdf" class="readmoreButton">Read More</a></div>
            </div>
            
            <div class="clear"></div>
        </article>
        
    </div>
    <div class="clear"></div>
</div>
<?php include 'includes/overall/overall_footer.php';?>