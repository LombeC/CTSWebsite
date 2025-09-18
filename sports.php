<?php 
    $title = "Sports | Chalo Trust School";
    include 'core/init.php';
    include 'includes/overall/overall_header.php';
    require_once 'helpers/sidebarWidgetBuilder.php';
?>

<div class="mainContent">
    <h1>Sports</h1>
    <div class="pagetopimgdiv">
        <img src="images/IsazCrossCountry.jpg" alt="Header Image" style="margin:auto; display: block;">
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
                <li><span class="bluename">Mr Elvis Mwape<br></span> 
                    Sports Co-ordinator <br>
                    <a href="mailto:sports@chalotrustschool.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> sports@chalotrustschool.com</a>
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
<!--                <h5 style="text-align:center; font-size: 1.3em">SPORTS</h5>-->
                <div class="infoAreaRightDivImg">
                    <img src="images/johnny.jpg" alt="Johny Mwanza coming out first at ISAZ cross country 2017">
                </div>
                <p>Sports is an integral part of Chalo Trust School and we pride ourselves on being one of the finest private schools in Lusaka when it comes to sporting excellence. And it's not just talk, We are 2 time ISAZ Cross-country champions and we have come out 2nd at the Interschool athletics for 2 years in a row.</p>

                <p>Studies around the world have shown that pupils who take part in extra curricular activities do better academically than those who do not, and it has been shown further that the best performing students in terms of academics are those who take part in both sporting and non sporting activities.</p>
                
                <p>In keeping with Chalo Trust School’s mission, the sports programs at CTS provide a positive and inclusive atmosphere where participants will grow emotionally, intellectually and physically. Athletic programs are an extension of the classroom at Chalo; important characteristics and skills such as teamwork, sportsmanship, integrity, and resilience are ingrained through team building, practices or workouts, and games.</p> 
                
                <p>Students are able to learn skills that provide continued social development through sporting activity and access to a physically active lifestyle. They learn the correlation between physical activity and healthy living. Students are able to link their biology lessons with physical activing and begin to understand how the muscles, bones, heart and lungs function.</p>
                
                <p>Chalo offers a number of different sporting activities that cater to the needs and interests of every child. Every term, we have one major sporting activity which corroborates with the ISAZ program, and then we have numerous other activities and games in other sporting disciplines. Participation in competitive sports adds an extra dimension to the educational experience at Chalo.You can see this when students go and compete at ISAZ events. You can see and feel the passion from the students and you feel their desire to win and the desire to be the best </p> 
                <div class="infoAreaRightDivImgLeft">
                    <img src="images/FirstPlace.jpg" alt="pupils in class">
                </div>
                <p> During the first term, our major sporting event is Cross Country. We have inter-house cross country events and the best performers qualify to compete with other schools on the national stage through ISAZ. Chalo Trust School are the current ISAZ Cross-Country champions and we have won the last 2 cross country competitions. We also participate in the ISAZ football tournament and play friendly games with other schools. </p> 
                
                <p> During the second term, our major sporting event is Athletics. We have inter-house Athletic events and the best performers qualify to compete with other schools on the national stage through ISAZ. Chalo Trust School are the current ISAZ Athletics runners up and we have come out second at the last 2 ISAZ athletics competitions. </p>
                
                <p> During the third term, the main focus of the school is external examinations, so we naturally participate in fewer sporting activities. However,we still take part in the ISAZ Basketball Tournament that takes place during this period </p>
                
                These are the sports that we offer:
                

                <ol>
                    <li>Football</li>
                    <li>Basketball</li>
                    <li>Volleyball</li>
                    <li>Netball</li>
                    <li>Table Tennis</li>
                    <li>Cross Country</li>
                    <li>Track and Field Athletics</li>
                </ol>
               
                
                Check out our <a href="sports-gallery.php">sports gallery</a> to see many more pictures from our various sporting events.
              <!-- <h6>2017 Sports Calendar</h6> 
                <table class="calendarListTable">
                    
                        <tr>
                            <th colspan="3" scope="col"> 2017 Term 1</th>
                        </tr>
                        <tr>
                            <td style="width: 25%;">January 27</td>
                            <td>Inter-House Cross Country </td>
                            <td style="width: 15%;">8:00</td>
                        </tr>
                        <tr>
                            <td>February 4</td>
                            <td>ISAZ Cross Country </td>
                            <td>7:00</td>
                        </tr>
                        
                        <tr>
                            <td>March 11</td>
                            <td>ISAZ U14 Football Competition</td>
                            <td>8:00</td>
                        </tr>
                       
                         <tr>
                            <td>March 12</td>
                            <td>Ball Games</td>
                            <td>10:00</td>
                        </tr>
                        <tr>
                            <td>March 19</td>
                            <td>ISAZ U19 Football Competition</td>
                             <td>8:00</td>
                        </tr>
                    
                    
                </table>
                
                <table class="calendarListTable">
                    
                        <tr>
                            <th colspan="3" scope="col"> 2017 Term 2</th>
                        </tr>
                        <tr>
                            <td style="width: 25%;">May 8</td>
                            <td>Athletics Training Begins  </td>
                            <td style="width: 15%;">15:00</td>
                        </tr>
                        <tr>
                            <td>May 19</td>
                            <td>Inter-house Athletics</td>
                            <td>7:00</td>
                        </tr>
                        
                        <tr>
                            <td>May 25</td>
                            <td>Ball Games</td>
                            <td>8:00</td>
                        </tr>
                       
                         <tr>
                            <td>May 27</td>
                            <td>ISAZ Midlands Athletics</td>
                            <td>7:00</td>
                        </tr>
                        <tr>
                            <td>June 9</td>
                            <td>Junior ISAZ Athletics</td>
                             <td>8:00</td>
                        </tr>
                        <tr>
                            <td>June 10</td>
                            <td>ISAZ Nationals - Athletics</td>
                             <td>8:00</td>
                        </tr>
                    
                </table> -->
            </div>
    </div>              
    <div class="clear"></div> 
</div>


<?php include 'includes/overall/overall_footer.php';?>