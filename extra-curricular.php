<?php 
    $title = "Extra Curricular Activities | Chalo Trust School";
    include 'core/init.php';
    include 'includes/overall/overall_header.php';
    require_once 'helpers/sidebarWidgetBuilder.php';
?>

<div class="mainContent">
    <h1>Extra Curricular Activities</h1>
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
<!--
        <br><br>
        <img src="images/8.jpg" alt="High Jump">
        
        <div class="leftsidebartext">
            <p> There will be a quote from some students here talking about their time at Chalo Trust School</p>
        </div>
-->
        <div class="clear"></div> 
    </div>
    <div class="mainContentRightDiv">
            <div class="infoAreaRightDiv">
                <h5 style="text-align:center; font-size: 1.3em">NON ACADEMIC ACTIVITIES</h5>
<!--
                <div class="infoAreaRightDivImg">
                    <img src="images/1.jpg" alt="pupils in class">
                </div>
-->
                <p>Welcome to the Chalo Trust School Extra-Curricular Activities page. Check out the Specifc activity sections for more information about the activities we have available.</p>
                
                <p>Don't see a club or activity you're interested in? You can help start one! Seek out a teacher who is willing to serve as a club patron or a sports coach and then contact the Principal or Vice Principal.</p>
                
                <p>Studies around the world have shown that pupils who take part in extra curricular activities do better academically than those who do not, and it has been shown further that the best performing students in terms of academics are those who take part in both sporting and non sporting activities.</p>
                
                <p>Chalo Trust School provides a wide range of sporting as well as non-sporting activities designed to meet the needs and interests of each student. We pride ourselves on nurturing student's talents and encouraging to do the best with their God-given skills and abilities. Through offering these enriching opportunities, we see students learn new skills, meet new friends, develop team work and become more independent. Some of our alumni have gone on to pursue careers in many of these disciplines. We can point to alumni who are currently professional sportsmen and sportswomen as well as others who have pursued music and the arts.</p>
                
                <p>We offer an extensive range of extra-curricular activities such as football, netball, volleyball, basketball, and clubs such as JETS club, Environmental Education and Community Services club, Performing Arts Club and Communication Forum Club. We also have entertainment for our students every Saturday evening and we encourage the development and display of a student’s gifts and talents be it musical or athletic gifts. We are a member of the Independent Schools Association of Zambia (ISAZ) and this membership allows us to expose our pupils to other schools through various Inter-School competitions and activities.</p>
                <h6>Sports</h6>
                <div class="infoAreaRightDivImgLeft">
                    <img src="images/FirstPlace.jpg" alt="ISAZ Cross Country">
                </div>
                <p>In keeping with Chalo Trust School’s mission, the sports programs at CTS provide a positive and inclusive atmosphere where participants will grow emotionally, intellectually and physically. Athletic programs are an extension of the classroom at Chalo; important characteristics and skills such as teamwork, sportsmanship, integrity, and resilience are ingrained through team building, practices or workouts, and games.</p>  

                <p>For the past <?php echo(date('Y') - '2004'); ?> years, since our inception in 2004, Chalo has been a beacon of sporting excellence in Lusaka. We have consistently produced the best athletes; Whether it's world class football talent or talented sprinters, or long distance runners, we have had a remarkable record of producing the best athletes.</p>

                <p>Chalo offers a number of different sporting activities that cater to the needs and interests of every child. Every term, we have one major sporting activity which corroborates with the ISAZ program, and then we have numerous other activities and games in other sporting disciplines. During the first term, our major sporting event is Cross Country. We have inter-house cross country events and the best performers qualify to compete with other schools on the national stage through ISAZ. Chalo Trust School are the current ISAZ Cross-Country champions and we have won the last 2 cross country competitions. </p>
                    
                For more information about sports at Chalo, check out our <a href="sports.php">Sports</a> page.<br>
        
                <h6>Clubs</h6>
    
                 <div class="infoAreaRightDivImg">
                    <img src="images/jetsFair.jpg" alt="pupils at the Jets Fair">
                </div>
                <p>We believe that our students should be able to mingle with others in society and contribute whatever they can to help others. The  aim of these interactions is that they learn something useful in the process. Therefore we attach great importance to club activities. At the secondary school level, we have four clubs; and we encourage our students to belong to at least two. The clubs are JETS (Junior Engineers, Technicians and Scientists) where students play generate scientific ideas and learn how to solve problems using the scientific method. Students have successfully come up with incredible projects which they exhibit in the school and at competitions with other schools.</p> 
                
                
                <p>Another club we have is Communication Forum where they learn public speaking communication skills at any level. They develop the confidence to face any audience and practive these skills through various fora such as Debates, Poetry and other forms of public speaking. We also have Art and Drama club which brings out the creativeness of our students. Lastly, we have the Environmental Conservation and Community Service where students are taught to love and take care of nature and also help the needy in society. </p>
                    
                Ultimately, our clubs are designed to stretch the minds of our students and help them develop their skills and talents.
                
                <h6>Entertainment</h6>
                  <div class="infoAreaRightDivImgLeft">
                    <img src="images/talentshow.jpg" alt="performance during the talent show">
                </div>
                <p>We all know the saying; "All work and no play makes jack a dull boy". Our boarding students spend all their time in school so we have to find ways to keep them entertained when they are not in class or studying.</p>

                
                <p>We at Chalo Trust School infuse entertainment into the lives of our students in order to help them keep their minds fresh and relaxed. Being a Christian school, we ensure that we do not deviate from our Christian morals when providing entertainment to our kids. We have entertainment programs every Saturday evening and the activities vary from week to week. These activities include; movies, variety shows, debates, quizzes, drama nights, music night. On occasions, we invite entertainers from outside the school to provide entertainment to the students. </p>

                
                <p>Apart from the weekly entertainment activities, we have two or three major entertainment events per year, where we invite parents and guests from outside to come and be entertained by our very own students. In the second term, we usually hold a Talent Showwhere we invite parents as well as the public to come and witness the Talents God has given our students. In the Third term, we organize a Traditional Day where the students demonstrate to their parents and the public, zambian or african traditional dances. Our students wear beautiful traditional attire and as a school, we serve wonderful traditional delicacies to our students and parents.</p>

                
                Check out our <a href="entertainment.php">Entertainment</a> page for more details about our entertainment program.

            </div>
    </div>              
    <div class="clear"></div> 
</div>


<?php include 'includes/overall/overall_footer.php';?>