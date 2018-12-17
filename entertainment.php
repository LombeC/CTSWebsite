<?php 
    $title = "Entertainment | Chalo Trust School";
    include 'core/init.php';
    include 'includes/overall/overall_header.php';
    require_once 'helpers/sidebarWidgetBuilder.php';
?>

<div class="mainContent">
    <h1>Entertainment</h1>
    <div class="pagetopimgdiv">
        <img src="images/header7.jpg" alt="Header Image" style="margin:auto; display: block;">
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
                <h5 style="text-align:center; font-size: 1.3em">ENTERTAINMENT</h5>
                <div class="infoAreaRightDivImg">
                    <img src="images/drama-night.jpg" alt="Drama Night">
                    <p class="imgCaption">Drama Night</p>
                </div>
                <p>We all know the saying; "All work and no play makes jack a dull boy". Our boarding students spend all their time in school so we have to find ways to keep them entertained when they are not in class or studying.</p>

                
                <p>We at Chalo Trust School infuse entertainment into the lives of our students in order to help them keep their minds fresh and relaxed. Being a Christian school, we ensure that we do not deviate from our Christian morals when providing entertainment to our kids. We have entertainment programs every Saturday evening and the activities vary from week to week. These activities include; movies, variety shows, debates, quizzes, drama nights, music night. On occasions, we invite entertainers from outside the school to provide entertainment to the students. </p>

                
                <p>Apart from the weekly entertainment activities, we have two or three major entertainment events per year, where we invite parents and guests from outside to come and be entertained by our very own students. In the second term, we usually hold a Talent Show where we invite parents as well as the public to come and witness the Talents God has given our students. In the Third term, we organize a Traditional Day where the students demonstrate to their parents and the public, zambian or african traditional dances. Our students wear beautiful traditional attire and as a school, we serve wonderful traditional delicacies to our students and parents.</p>
                
                Check out our <a href="entertainment-gallery.php">Entertainment gallery</a> to see many more pictures from our various Entertainment events.
                <!-- <h6>2017 Entertainment Calendar</h6> 
                
                <table class="calendarListTable">
                    
                        <tr>
                            <th colspan="3" scope="col"> 2017 Term 2</th>
                        </tr>
                        <tr>
                            <td style="width: 25%;">May 6</td>
                            <td>Movie Night </td>
                            <td style="width: 15%;">18:00</td>
                        </tr>
                        
                        <tr>
                            <td>May 20</td>
                            <td>Short Story Reading Competition</td>
                            <td>14:00</td>
                        </tr>
                        
                        <tr>
                            <td>May 26</td>
                            <td>Inter-School Debate</td>
                            <td>14:00</td>
                        </tr>
                        <tr>
                            <td>May 26</td>
                            <td>Primary Arts Fair</td>
                            <td>14:00</td>
                        </tr>
                         
                         <tr>
                            <td>May 27</td>
                            <td>Drama Night</td>
                            <td>18:00</td>
                        </tr>
                         
                         <tr>
                            <td>June 3</td>
                            <td>ISAZ Arts Fair</td>
                             <td>8:00</td>
                        </tr>
                        
                        <tr>
                            <td>June 9</td>
                            <td>Primary School Debate</td>
                             <td>14:00</td>
                        </tr>
                        
                        <tr>
                            <td>June 10</td>
                            <td>Maths & ICT Competition</td>
                             <td>18:00</td>
                        </tr>
                        
                        <tr>
                            <td>July 8</td>
                            <td>Quiz</td>
                             <td>18:00</td>
                        </tr>
                        <tr>
                            <td>July 15</td>
                            <td>Talent Show</td>
                             <td>14:00</td>
                        </tr>

                </table> -->
            </div>
    </div>              
    <div class="clear"></div> 
</div>


<?php include 'includes/overall/overall_footer.php';?>