<?php 
    $title = "About | Chalo Trust School";
    $metaDescription = "Chalo Trust School is a Secondary and Primary Christian, Boarding, Co-education school, that is located in Lusaka’s Chamba Valley, behind Hybrid Poultry Farm. It is off Great East Road, about fifteen minutes drive both from town and the airport. ";
    $metaKeywords = "About Chalo, Chalo Information";
    include 'core/init.php';
    include 'includes/overall/overall_header.php';
    require_once 'helpers/sidebarWidgetBuilder.php';
?>

<div class="mainContent">

       <h1>About Us</h1>
    
    <div class="pagetopimgdiv">
        <img src="images/header3.jpg" alt="Image of the School" style="margin:auto; display: block;">
    </div>
     <div class="clear"></div>
     <div class="leftsidebar">
       <?php
        buildSidebarMenu($aboutSectionSubmenu);
         ?>
        <div class="sidebarContactBox">
            <span class="sidebarContactBoxHeading">Who? What? When</span>
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
        <div class="clear"></div> 
    </div>
<div class="mainContentRightDiv">
   
    <div class="infoAreaRightDiv">
         <h5>About Chalo Trust School</h5>
        <strong>Chalo Trust School</strong> is a Secondary and Primary Christian, Boarding, Co-education school, that is located in Lusaka’s Chamba Valley, behind Hybrid Poultry Farm. It is off Great East Road, about fifteen minutes drive both from town and the airport. It  is situated in a natural and serene environment suitable for serious and un-interrupted study, conferences, seminars, and camps.<br><br> 
        
        The school opened its doors in January 2004. At inception, there were only 9 pupils as against 18 teachers. By the end of the year the enrolment stood at 45 students and by the end of April 2005, the number of students had more than doubled to 110 students. In December 2005 the student membership had soared to 131 students. We currently have a student number of about 170 with 27 teachers giving us a ratio of 1 teacher: 6 students. This allows our students to have as much contact with the teacher as possible. <br><br>
        
        Our mission is to create an environment of order, truth, care, and concern where students of diverse economic, cultural and spiritual backgrounds live together and prepare for tertiary education by beginning the habit of lifelong learning, personal and spiritual development. At Chalo Trust School, we believe that education should inspire a love of learning and prepare individuals to make a positive contribution to the local environment and the world at large. <br><br>

        
        Chalo Trust School provides a time tested and complete Boarding and Day curriculum with a major goal in mind: To inspire the best in your child and to make them realise the full personal potential by exposing them to as many distinguished educational programs as is possible.

        We accommodate both local and international students providing boarding facilities for children coming from any part of the world, while we also have a day school program for pupils within the reachable ranges of Lusaka. <br><br>

        We plan detailed, daily lessons in all major subjects, and our lessons are designed to appeal to different learning styles. Our lessons are written to suit the current syllabus, using the best textbooks and workbooks available. Our program is proven and assures you no gaps in learning. In addition to our lessons, we support students with one on one teaching to students who may seem to be slow in learning and with our Placement Testing, Education Counselors, and Advisory Teaching Service, every student is steadily prepared to handle and pass their exams with confidence.  <br><br>



        We pride ourselves on being able to take Students from all walks of life and educational backgrounds and producing World Class citizens. Our alumni have gone on to do various things in life and each one of them will testify that they wouldn't be successful if it was not for the values that were instilled in them at Chalo Trust School.
        <br><br>
        If you want to read more about <strong>Chalo Trust School</strong>, There is a lot of information available in this section.
        Check out the navigational bar on the left side on the page and be at liberty to find out all you need to know about our school.
        
        <div class="chaloVideoAboutPage">
            <iframe class="vid" src="https://www.youtube.com/embed/B2AzlKbipJY" frameborder="2px" allowfullscreen></iframe>
<!--            <iframe class="vid" src="https://www.youtube.com/embed/P-xlixF7B2U" frameborder="2px" allowfullscreen></iframe>-->
        </div>
        
    </div>

    
</div>  
    <div class="clear"></div> 

</div>
<?php 
    include 'includes/overall/overall_footer.php'; 
?>