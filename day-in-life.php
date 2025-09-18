<?php 
    $title = "School Day | Chalo Trust School";
    include 'core/init.php';
    include 'includes/overall/overall_header.php';
    require_once 'helpers/sidebarWidgetBuilder.php';
?>

<div class="mainContent">
    <h1>A Day in the Life of a Student</h1>
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
        <br><br>
        <img src="images/former-pupil-joshua.png" alt="High Jump">
        
        <div class="leftsidebartext">
            <p> "Even as I come from home, I don't feel like I'm going anywhere different because Chalo Trust School has proven to be home itself."</p>
            
              <p><i>-Alumnus 2015</i></p>
        </div>
        <div class="clear"></div> 
    </div>
    <div class="mainContentRightDiv">
            <div class="infoAreaRightDiv">
                <h5>School Day</h5>
                <h6>Daily Routine</h6>
                <p>Some of our boarding students recently wrote about what a typical day is like for them at Chalo Trust School and thought it would be helpful for other students to learn about how much fun it is.</p>
                 <div class="infoAreaRightDivImg">
                    <img src="images/dayInLife.png" alt="Day In Life Image">
                </div>
                <p><strong>5:00 am </strong><br>Waking up - The siren is blurred and we all jump out of bed and head for the showers. Some students choose to wake up earlier than others so they can get some studying done. Sometimes, especially when we have a sports event coming up, some students wake up very early and go out for a morning jog. </p>
                
                <p><strong>6:15 am</strong><br>Devotion - Once everyone is done with their preparations, we all head to the common room for Morning devotion. Someone leads us in prayer and shares the word of God. On Wednesday mornings, we have a hymn singing session and we always find it uplifting and it sets the tone for a wonderful day.</p>
                
                <p><strong>6:45 am</strong><br>Breakfast - Students leave the hostel and assemble in the multi-purpose hall for breakfast. Students line up to be served and there is always a variety of healthy food on offer. Breakfast on weekdays is usually eaten quickly as most students are rushing to get to class and settle down.</p>
                
                
                <p><strong>7:25 am</strong><br> We leave for class. Dressed to impress in our wonderful uniforms! </p>
                
                <p><strong>7:30 am</strong><br> Classes commence and all the pupils head to their various classes. When students don't have a class, they go to library and use the many wonderful resources provided by the school. We really do have a lot of fun and whilst the work is quite tough our teachers are all really lovely and help us along the way.</p>
                <p><strong>10:10 am</strong><br>Break - The pupils have a break from class. A light snack is served by the dining hall and pupils typically use this time to freshen up or relax for 25 minutes.</p>
                <p><strong>1:10 pm </strong><br>Lunch - Lunch is served in the dining hall and the whole school gathers there to have a meal. During the week, we receive a variety of different dishes ranging from rice , chicken & greens to nshima and beef. Our chefs always ensure they cook a delicious and healthy meal and there's always options for those who might want something else.</p>
                
                <p><strong>2:10 pm</strong><br>Afternoon Lessons - After lunch, we go back for an hour of afternoon lessons. This time is usually used for remedials and revision and is particularly helpful for students who missed certain classes or weren't able to understand certain concepts in class.</p>
                <p><strong>3:20 pm</strong><br> Extra-Curricular activities. Depending on the day, we have various extra-curricular activities taking place. If it's a Monday, we find ourselves in any of the available clubs. If it's a wednesday, we all head to the sports field and engage in our favourite sporting activity. At Chalo, we have a 'sports for all' philosophy so all pupils and teachers change into their sports attire and head out to the sports field.</p>
                
                <p><strong>4:20 pm</strong><br> The school day ends - All the pupils retreat to the hostels and some head over to the tuckshop where they are able to buy a light snack for themselves. On Tuesdays and Thursdays, our scripture union group meets around this time.</p>
                <p><strong>5:20 pm</strong><br>Dinner - There is hot food and we have a variety of different meals on a daily basis.</p>
                <p><strong>6:20 pm</strong><br>Prep - This is done in the dining hall with prefects supervising the rest of the students. The house parents occasionally come in to check up on us, and every once in a while some teachers have remedial lessons for students who need help.</p>
                <p><strong>8:00 pm</strong><br>Evening Devotion - Immediately after prep, evening devotion is held in the dining hall. This is run by the houseparents. Someone prays and the houseparent shares a short exhortation from the Bible.</p>
                <p><strong>8:45 pm</strong><br>Night Snack - Before checking into bed, a light snack is distributed to all the students. It's typically some baked goodie from our very own bakery.</p>
                <p><strong>9:45 pm</strong><br>  Lights out - Exhausted, we jump into bed and soon fall asleep, ready to do it all again!</p>
                
<!--
                <h6>Weekend routine</h6>
                <p>Weekends are a little different when compared to weekdays. Children have time to rest and relax in preparation for the next school week. We have recreational activities which allow our students to relax. This is a brief breakdown of a saturday and sunday as seen through the eyes of a student</p>
            
                 <div class="infoAreaRightDivImgLeft">
                    <img src="images/chaloproducts.png" alt="pupils in class">
                </div>
                <p><strong>6:00 am </strong><br>Wake up - The prefects go around waking students wake you up each morning by knocking on your door and saying ‘Good Morning'. It is pretty much like home. We then proceed to take a shower... Some people wake up much earler to shower and study but most of us shower at this time and get ready for school before breakfast. Sometimes, we can have sport training before school so this makes your mornings a little busier, but we also have a quick breakfast on weekdays.</p>
                <p><strong>8.00 am</strong><br>Breakfast - We have lots of different things for breakfast including cooked breakfast, fresh fruit salad, bircher muesli, yoghurt and flavoured milk. Our Chef (Eric) is French and he is great and always wants to make us happy. We have a food comment box to write suggestions, and a recipe of the month competition where someones recipe from home is cooked for everyone.</p>
                <p><strong>8.40 am</strong><br> We leave for school. Dressed to impress in our wonderful uniforms!</p>
                <p><strong>8.45 am</strong><br> The school day commences and we have classes in so many different subjects it is fantastic. We really do have a lot of fun and whilst the work is quite tough our teachers are all really lovely and help us along the way.</p>
                <p><strong>10.50 am</strong><br>Break - We come back to the boarding house to collect our recess snack where Mrs Campbell and Mrs Tarran are always there with a smile to say hello.</p>
                <p><strong>1.10 pm </strong><br>Lunch- Lunch is served outside of the boarding house and we all sit on the grassed area outside to have our lunch. This area is known as the Boarders Lawn since it is so full of boarders every lunchtime from every year group. We often see our ‘Big Sisters' at this time who check that we are going OK. Having a friend in Year 10 is excellent!</p>
                <p><strong>3.35 pm</strong><br> The school day ends and afternoon tea is served in the courtyard. It's always yummy and is a time to sit and relax with friends from lots of different year groups and the boarding staff. Often we then have sports training, or Sewing Club or Art Club to rush off to or we have leisure time. The Café is open in the boarding house which is like a tuck shop and on Mondays and Thursdays we collect our washing that has been done for us and check to see if we have got a Tidy Room Award.</p>
                <p><strong>5.30 pm</strong><br>Dinner - There is hot food and we have a variety of different meals on a daily basis.</p>
                <p><strong>6.30 pm</strong><br>Prep - This is supervised in the dining room for us and we have four tutors work alongside us to help us with our work. These tutors have all been to St Mary's as boarders so they know how hard some of the work can be. We are all learning a lot and now finding our feet with what is expected of us. The tutors are really great. There is also a Maths Club on Monday night and an English Club on Wednesday night when the teachers come to help us.</p>
                <p><strong>8.30 pm</strong><br>Evening Devotion - This is run by GAP students who are like older sisters to us. They have finished school overseas and come to live and work in the boarding house for six months. We have bread and toast and we love the hot chocolate and milo machine at this time.</p>
                <p><strong>9.00 pm</strong><br>Night Snack - We are checked at this time and need to be ready for bed at 9.00pm. Often we will then read or chat with our room mate for a little while about our days.</p>
-->
                
            </div>
    </div>              
    <div class="clear"></div> 
</div>


<?php include 'includes/overall/overall_footer.php';?>