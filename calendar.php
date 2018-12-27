<?php 
    $title = "Calendar | Chalo Trust School";
    $metaDescription = "Calendar for Chalo Trust School Academic Year";
    $metaKeywords = "School Calendar, Events, School Activities";
    include 'core/init.php';
    include 'includes/overall/overall_header.php';
?>
<div class="mainContent">

<h1>Calendar</h1>
    <div class="pagetopimgdiv">
        <img src="images/header1.jpg" alt="Header Image" style="margin:auto; display: block;">
    </div>
<div class="leftsidebar" style="margin-top:-16px;">
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
        <div class="toggle-list-grid-view">
<!--            <span style="font-size: 1.2em; position: relative; bottom: 9px; right: 6px; color:#3314c2;">VIEW</span>-->
            <div class="tooltip">
                <i class="fa fa-list-alt" aria-hidden="true" style="font-size: 1.8em; position: relative; bottom: 4px; right: 4px;" id="listtoggleicon"></i>
                <span class="tooltiptext">Switch to List View</span>
            </div>
            <label class="switch">
                <input type="checkbox" name="calendarToggle"  id="calendarToggle" checked="true" autocomplete="off">
                <div class="slider round"></div>
            </label> 
            <div class="tooltip">
                <i class="fa fa-calendar" aria-hidden="true" style="font-size: 1.8em; position: relative; bottom: 6px; left: 4px;" id="gridtoggleicon"></i>
                <span class="tooltiptext">Switch to Grid View</span>
            </div>
            
        </div>
    
        <div class="mainCalendarDiv">
            <div class="clear"></div>
              <div id="cts-clndr" class="clearfix">
              <script type="text/template" id="cts-clndr-template">
               <!-- Calendar Controls and heading -->
                <div class="clndr-controls">
                      <div class="clndr-previous-button"><i class="fa fa-arrow-left" aria-hidden="true"></i></div>
                      <div class="clndr-next-button"><i class="fa fa-arrow-right" aria-hidden="true"></i></div>
                      <div class="current-month"><%= month %> <%= year %></div>
                </div>
                
                <!-- Calendar Grid with the days -->
                <div class="clndr-grid">
                          <div class="days-of-the-week clearfix">
                            <% _.each(daysOfTheWeek, function(day) { %>
                              <div class="header-day "><%= day %></div>
                            <% }); %>
                          </div>
                        
                        <div class="days">
                            <% _.each(days, function(day) { %>
                                <div class="<%= day.classes %>" id="<%= day.id %>">
                                <span class="day-number"><%= day.day %></span>
                                    <% _.each(day.events, function(event){ %>
                                        <br><a class="day-link">
                                            <div class="event-title"><%= event.unlabeledTitle %></div>  
                                            <div class="event-title"><%= event.title %></div>
                                            <% if (typeof(event.title2) !== "undefined") { %>
                                                <div class="event-title"><%= event.title2 %></div>
                                            <% } %>
                                            </a>
                                    <% }) %>
                                </div>
                            <% }); %>
                        </div>
                </div>
                   <!-- Calendar Events Cards-->  
                   <% _.each(eventsThisMonth, function(event) { %>
               <div class="event-card-modal <%= event.date %>">
                           <div class="event-card-modal-content ">
                                <div class="event-card-modal-header">
                                    <div class="closeModalButton"><span class="closeModal" id="closeModal">&times;</span></div>
                                    <h6>
                                        <% 
                                            var now = moment(event.date);
                                            print(now.format( 'MMMM Do YYYY' ));
                                        %>
                                    </h6>
                                </div>
                                
                                <div class=" event-card-modal-body ">
                                    <% if (typeof(event.unlabeledTitle) !== "undefined") { %>
                                        <div class="event-item-name"><%= event.unlabeledTitle %></div>
                                    <% } %>
                                    <% if (typeof(event.title) !== "undefined" && event.title !== null) { %>
                                        <div class="event-item-name">Event: <%= event.title %></div>
                                    <% } %> 
                                    <% if (typeof(event.location) !== "undefined" && event.location !== null) { %>
                                        <div class="event-item-location">Venue: <%= event.location %></div>
                                    <% } %>
                                    <% if (typeof(event.time) !== "undefined" && event.time !== null) { %>
                                        <div>Time: 
                                                <% 
                                                    var time = moment(event.date + " " + event.time);
                                                    print(time.format("HH:mm"));
                                                %>
                                        </div>
                                    <% } %>
                                    <br>    
                                    <% if (typeof(event.title2) !== "undefined" && event.title2 !== null) { %>
                                        <div class="event-item-name">Event: <%= event.title2 %></div>
                                    <% } %>                                    
                                    <% if (typeof(event.location2) !== "undefined" && event.location2 !== null) { %>
                                        <div class="event-item-location">Venue: <%= event.location2 %></div>
                                    <% } %>
                                    <% if (typeof(event.time2) !== "undefined" && event.time2 !== null) { %>
                                        <div>Time: 
                                                <% 
                                                    time = moment(event.date + " " + event.time2);
                                                    print(time.format("HH:mm"));
                                                %>
                                        </div>
                                    <% } %>
                                    <br>    
                                    <% if (typeof(event.title3) !== "undefined" && event.title3 !== null) { %>
                                        <div class="event-item-name">Event: <%= event.title3 %></div>
                                    <% } %>                                    
                                    <% if (typeof(event.location3) !== "undefined" && event.location3 !== null) { %>
                                        <div class="event-item-location">Venue: <%= event.location3 %></div>
                                    <% } %>
                                    <% if (typeof(event.time3) !== "undefined" && event.time3 !== null) { %>
                                        <div>Time: 
                                                <% 
                                                    time = moment(event.date + " " + event.time3);
                                                    print(time.format("HH:mm"));
                                                %>
                                        </div>
                                    <% } %>
                                </div>   
                            </div>
                     
                  </div>
                  <% }); %>
              </script>
            </div>
            <div class="clear"></div>
            <div class="calendarListForm" id="cts-clndr2">
               <!-- <table class="calendarListTable" id="term3Calendar">
                    
                        <tr>
                            <th colspan="3" scope="col"> 2018 Term 1</th>
                        </tr>
                        <tr>
                            <td style="width: 25%;">January 22</td>
                            <td>Boarding Student Arrival & Open Day </td>
                            <td style="width: 15%;">10:00</td>
                        </tr>
                        <tr>
                            <td>January 23</td>
                            <td>First day of school / Classes Begin</td>
                            <td>7:20</td>
                        </tr>
                        <tr>
                            <td>January 24</td>
                            <td>Cross Country training begins</td>
                            <td>15:20</td>
                        </tr>
                        <tr>
                            <td>January 29</td>
                            <td>Speed Test Week</td>
                            <td>7:20</td>
                        </tr>
                        <tr>
                            <td>February 02</td>
                            <td>Inter House Cross Country</td>
                            <td>7:20</td>
                        </tr>
                        <tr>
                            <td>February 05</td>
                            <td>Speed Test Week</td>
                            <td>7:20</td>
                        </tr>
                         <tr>
                            <td>February 09</td>
                            <td>Primary Handwriting Competition</td>
                            <td>14:20</td>
                        </tr>
                        <tr>
                            <td>February 09</td>
                            <td>Cholera Awareness Campaign</td>
                            <td>14:20</td>
                        </tr>
                         <tr>
                            <td>February 10</td>
                            <td>ISAZ Inter School Cross Country</td>
                            <td>7:00</td>
                        </tr>
                        <tr>
                            <td>February 12</td>
                            <td>Speed Test Week</td>
                            <td>7:20</td>
                        </tr>
                        <tr>
                            <td>February 14</td>
                            <td>Primary Test 1 Begins</td>
                            <td>7:20</td>
                        </tr>
                        <tr>
                            <td>February 15</td>
                            <td>Humanities Tour of Parliament</td>
                            <td>13:20</td>
                        </tr>
                        <tr>
                            <td>February 16</td>
                            <td>Primary General Quiz</td>
                            <td>14:00</td>
                        </tr>
                        <tr>
                            <td>February 17</td>
                            <td>Visiting Weekend</td>
                            <td>12:00</td>
                        </tr>
                        <tr>
                            <td>February 17</td>
                            <td>Humanities Quiz</td>
                            <td>18:00</td>
                        </tr>
                        <tr>
                            <td>February 19</td>
                            <td>Secondary - Test 1 Begins</td>
                            <td>7:20</td>
                        </tr>
                        <tr>
                            <td>February 23</td>
                            <td>Secondary - Test 1 Ends</td>
                            <td>15:20</td>
                        </tr>
                        <tr>
                            <td>February 24</td>
                            <td>Secondary - Read-a-thon</td>
                            <td>10:00</td>
                        </tr>
                         <tr>
                            <td>March 01</td>
                            <td>Midterm Break begins</td>
                             <td>14:00</td>
                        </tr>
                        <tr>
                            <td>March 01</td>
                            <td>Open Day</td>
                             <td>14:00</td>
                        </tr>
                        <tr>
                            <td>March 11</td>
                            <td>Midterm Break Ends. Boarders Return</td>
                             <td>10:00</td>
                        </tr> 
                        <tr>
                            <td>March 12</td>
                            <td>Youth Day march</td>
                             <td>10:00</td>
                        </tr>  
                        <tr>
                            <td>March 13</td>
                            <td>Classes Resume</td>
                             <td>7:20</td>
                        </tr> 
                        <tr>
                            <td>March 16</td>
                            <td>Biology Tour of CFB Hospital</td>
                            <td>13:20</td>
                        </tr>
                        <tr>
                            <td>March 19</td>
                            <td>Secondary - Test 1 Begins</td>
                            <td>7:20</td>
                        </tr>
                        <tr>
                            <td>March 23</td>
                            <td>Secondary - Test 1 Ends</td>
                            <td>15:20</td>
                        </tr>
                        <tr>
                            <td>March 23</td>
                            <td>Primary - Careers Day</td>
                            <td>14:00</td>
                        </tr>
                        <tr>
                            <td>March 24</td>
                            <td>ICT & Math Interactive Quiz</td>
                            <td>18:00</td>
                        </tr>
                        <tr>
                            <td>March 31</td>
                            <td>PTA Annual General Meeting</td>
                            <td>10:00</td>
                        </tr>
                        <tr>
                            <td>March 31</td>
                            <td>Visiting Weekend</td>
                            <td>12:00</td>
                        </tr>
                        <tr>
                            <td>April 05</td>
                            <td>Spell-a-thon Vs Munali School</td>
                            <td>14:00</td>
                        </tr>
                        <tr>
                            <td>April 05</td>
                            <td>Grade 12 Career Guidance Workshop</td>
                            <td>14:00</td>
                        </tr>
                        <tr>
                            <td>April 06</td>
                            <td>Primary Tour of the Museum</td>
                            <td>14:00</td>
                        </tr>
                        <tr>
                            <td>April 11</td>
                            <td>Internal End of Term Exams Start</td>
                             <td>7:20</td>
                        </tr>
                        <tr>
                            <td>April 19</td>
                            <td>Internal End of Term Exams End</td>
                             <td>12:00</td>
                        </tr>
                        <tr>
                            <td>April 19</td>
                            <td>School Closes. End of Term 1</td>
                             <td>15:00</td>
                        </tr>
                        <tr>
                            <td style="width: 25%;">May 14</td>
                            <td>School Opens - Term 2, 2018 </td>
                            <td style="width: 15%;">10:00</td>
                        </tr>                

                </table> -->
                
            </div>
    
        </div>
      
        </div>
        <div class="clear"></div>
        
</div>


<?php include 'includes/overall/overall_footer.php';?>

<script src="js/ctsCalendar.js"></script>
