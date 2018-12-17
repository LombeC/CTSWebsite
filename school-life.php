<?php 
    $title = "School Life | Chalo Trust School";
    include 'core/init.php';
    include 'includes/overall/overall_header.php';
    require_once 'helpers/sidebarWidgetBuilder.php';
?>

<div class="mainContent">
    <h1>Life at Chalo Trust School</h1>
        <div class="pagetopimgdiv">
        <img src="images/header4.jpg" alt="Header Image" style="margin:auto; display: block;">
    </div>
    <div class="leftsidebar">
        <?php
          buildSidebarMenu($schoolLifeSectionSubmenu);
        ?>
        <div class="sidebarContactBox">
            <span class="sidebarContactBoxHeading">Contact Us</span>
            <ul>
                <li>Have a question? Check out the <a href="faq.php">FAQ</a> page. If you can't find your answer,  the Administrative team can help. <br><a href="contact.php">Contact Page</a></li>
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
                    School Principal <br>
                   <a href="mailto:principal@chalotrustschool.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> principal@chalotrustschool.com</a>
                </li>
                <li><span class="bluename">Administration<br></span> 
                    <a href="mailto:info@chalotrustschool.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> info@chalotrustschool.com</a>
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
                <h5 style="text-align:center; font-size: 1.3em">School Life</h5>
                    
                We at Chalo Trust School believe in education of the whole child. Our philosophy is that, education should not only involve books and academics but it should be the process of improving every facet of a student; Things like, how they interact with other people in a community and how they resolve differences; how they take care of themselves; how they develop hobbies and hone their talents and skills; and several other facets that make us human beings. At Chalo, we believe we shouldn't only teach our children to be 'book smart', but to be 'street smart' too.<br><br>
                
                Boarding students spend approximately 9 months of a year in school. CTS becomes their first home for this period and therefore, as a school, it is our goal to make this place truly a home away from home. We provide various activities and services to help provide a truly spectactular school life for our students.<br>
                <h6><a href="boarding.php" class="titleLink">Boarding</a></h6>
                <div class="infoAreaRightDivImgLeft">
                    <img src="images/girlsHostel2.png" alt="Girls Hostel">
                </div>
                <p>Chalo Trust School is a <strong>Christian Boarding School</strong> offering state of the art boarding facilities for both secondary and primary students. We provide high quality accommodation to our students which is unrivaled in Zambia. Boarding students live in dormitories with two to four students per dorm for the smaller dorm rooms and four to six students for the bigger, spacious rooms. Each Hostel is complete with its own well maintained shower and ablution area, common room and study area. Three healthy and complete meals, created by chefs, are served to students each day, as well as snacks at various points of the day</p> 
                
                <p>Each hostel has a resident house parent who provides pastoral care, guidance and counselling, and basic medical care. The school does laundry for the pupils but only for their school uniforms and linen. Pupils are encouraged to do part of their own laundry, in order to encourage them to take responsibility. This indeed is the essence of boarding life, that our children must learn to do what they do not do at home where maids and servants do everything for them.
                Our dedicated and experienced houseparents care for the everyday life of boarding students and strive to create a safe and nurturing environment, and to provide students with everything they need to succeed academically and socially.</p>
                    
                Check out our <a href="boarding.php">boarding</a> page for more details about the boarding school 
        
                <h6><a href="extra-curricular.php" class="titleLink">Extra Curricular activities.</a></h6>
    
                 <div class="infoAreaRightDivImg">
                    <img src="images/7.jpg" alt="Flying Jump Sports">
                </div>
                <p>Studies around the world have shown that pupils who take part in extra curricular activities do better academically than those who do not, and it has been shown further that the best performing students in terms of academics are those who take part in both sporting and non sporting activities.</p>
                
                <p>Chalo Trust School provides a wide range of sporting as well as non-sporting activities designed to meet the needs and interests of each student. We pride ourselves on nurturing student's talents and encouraging to do the best with their God-given skills and abilities. Through offering these enriching opportunities, we see students learn new skills, meet new friends, develop team work and become more independent. Some of our alumni have gone on to pursue careers in many of these disciplines. We can point to alumni who are currently professional sportsmen and sportswomen as well as others who have pursued music and the arts.</p>
                
                Check out our <a href="extra-curricular.php">Extra Curricular Activities</a> page for more details about the activities we have available.
                
                <h6><a href="field-trips.php" class="titleLink">Field Trips</a></h6>
<!--
                <div class="infoAreaRightDivImg">
                    <img src="images/1.jpg" alt="pupils in class">
                </div>
-->
                <p>CTS arranges educational trips and tours as a means of supplementing what is learned in the classroom. Our pupils are regularly taken to places relevant to their lessons. We believe that they are several different types of learners. Whilst some might be able to grasp concepts after hearing about it, or after reading a book, some students require a physical demonstration of a concept before they are able to pick it up.</p>
                
                <p>For example, a teacher might spend time talking about a geographical landmark, but unless a students physically sees this landmark, they will never be able to acknowledge it's importance. This applies to any subject or topic. This is the reason we hold field trips and educational tours. So that our students can get a practical feel of the theoretic concepts that are learned in the classroom</p>
               
                Check out our <a href="field-trips.php">Field Trips page</a> page for more details 
                
<!--                <h6><a href="environment.php" class="titleLink">School Environment</a></h6>-->
<!--
                  <div class="infoAreaRightDivImgLeft">
                    <img src="images/1.jpg" alt="pupils in class">
                </div>
-->
<!--
                Chalo has a very peaceful serene blah blah .........
                
                
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                Pri quas audiam virtute ut, case utamur fuisset eam ut, iisque accommodare an eam. Reque blandit qui eu, cu vix nonumy volumus. Legendos intellegam id usu, vide oporteat vix eu, id illud principes has. Nam tempor utamur gubergren no.

                Ex soleat habemus usu, te nec eligendi deserunt vituperata. Natum consulatu vel ea, duo cetero repudiare efficiendi cu. Has at quas nonumy facilisis, enim percipitur mei ad. Mazim possim adipisci sea ei, omnium aeterno platonem mei no. <br><br>
                Check out our <a href="environment.php">Environment</a> page for more details about students we have here and to see some student testimonies
-->


            </div>
    </div>              
    <div class="clear"></div> 
</div>


<?php include 'includes/overall/overall_footer.php';?>