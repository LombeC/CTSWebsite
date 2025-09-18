<?php 
    $title = "Frequently Asked Questions | Chalo Trust School";
    include 'core/init.php';
    include 'includes/overall/overall_header.php';
    require_once 'helpers/sidebarWidgetBuilder.php';
?>

<div class="mainContent">

    <h1>Frequently Asked Questions </h1>
    <div class="pagetopimgdiv">
        <img src="images/header6.jpg" alt="Library Header Image" style="margin:auto; display: block;">
    </div>
     <div class="clear"></div>
    
    <div class="leftsidebar">
         <?php
        buildSidebarMenu($aboutSectionSubmenu);
         ?>
        <div class="sidebarContactBox">
            <span class="sidebarContactBoxHeading">Contact Us</span>
            <ul>
                <li>Have a question? If you can't find your answer in the FAQs, the Administrative team can help!</li>
                <li>
                    <span class="bluename">Mrs. Jenny Chileshe<br></span>
                    Director, Administration <br>
                    <i class="fa fa-phone" aria-hidden="true"></i> 097 9480254 <br> 
                    <i class="fa fa-phone" aria-hidden="true"></i> 095 5883099 <br> 
                    <a href="mailto:director@chalotrustschool.com" target="_top">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i> director@chalotrustschool.com
                    </a>
                </li>
               
            </ul>
        </div>
        <br><br>
        <img src="images/former-student-waza.png" alt="Former student quote" style="width: 100%;">
        
        <div class="leftsidebartext">
            <p> "In terms of the ability to analyze and think critically about an issue, I’d say I felt further along than many of my peers in college."</p>
            <p><i> -Alumnus 2006</i></p>
        </div>
         <div class="clear"></div> 
    </div> 
        <div class="mainContentRightDiv">
            <div class="infoAreaRightDiv" style="margin-right:0;">
            <h5>FAQs</h5>
            <div style="color: blue; font-weight: 600; font-size: 0.9em;">Tip: Click/Tap on a question to reveal the answer</div>
            <!--Q1-->
            <div class="accordion">Where is Chalo Trust School located?</div>
            <div class="panel">
              <p>No. 44A/E/609, Lusaka, Zambia. Chalo Trust School is located in Lusaka’s Chamba Valley, behind Hybrid Poultry Farm. It is off Great East Road, about fifteen minutes away from both town and the airport. It is situated in a natural and serene environment suitable for serious and un-interrupted study, conferences, seminars, and camps. For more information on how to find us, use the map located on the <a href="contact.php" target="_blank">Contact Page</a></p>
            </div>
             
            <!--Q2-->
            <div class="accordion">When was Chalo trust school founded?</div>
            <div class="panel">
              <p>Chalo Trust School was opened on the 12th of January, 2004. This year, we are celebrating our <?php echo (date("Y") - 2004); ?>th Year in existence.</p>
            </div>
                
            <!--Q3-->
            <div class="accordion">What is the minimum age to join Chalo Trust School?</div>
            <div class="panel">
              <p>Our youngest class is baby/reception class, so we encourage parents to bring in children as young as 3 years old.</p>
            </div>
            
            <!--Q4-->
            <div class="accordion">Does Chalo Trust School provide boarding services for Primary Students?</div>
            <div class="panel">
              <p>Yes. Chalo Trust School provides boarding facilities for primary school students.</p>
            </div>
             
            <!--Q4-->
            <div class="accordion">Does Chalo Trust School accept international students?</div>
            <div class="panel">
              <p>Yes. Because Chalo is a boarding school, we are able to accept students from any part of the world. Both Zambian and non-Zambian alike.</p>
            </div>
            
            <!--Q5-->
            <div class="accordion">What are the pre-requisites for entering Chalo Trust School?</div>
            <div class="panel">
              <p>Applicants must submit a completed Application Form, previous school records with grade reports, and test scores from their most recent year in school. We also require a school transcript from the applicant’s former school. Students interested in boarding must submit medical records with their application. For more details about the application process, visit this page:  <a href="admission-form.php" target="_blank">Admissions</a></p>
            </div>
            
            <!--Q6-->    
            <div class="accordion">When is the application deadline?</div>
            <div class="panel">
              <p>We enroll students throughout the year so there is no application deadline. Each applicant is evaluated on a case-by-case basis. </p>
            </div>
                
            <!--Q7-->
            <div class="accordion">Is Chalo Trust School accredited?</div>
            <div class="panel">
              <p>Yes, Chalo Trust School is accredited and registered with the Zambian Ministry of Education. We are also affiliated with two examining bodies. Examinations Council of Zambia (ECZ) and Cambridge International Examinations (CIE)</p>
            </div>
                
            <!--Q8-->
            <div class="accordion">What academic calendar system does Chalo Trust School follow?</div>
            <div class="panel">
                    <p>We are on a trimester system, which divides the academic year into three terms. Term 1 takes place from January to March. Term 2 takes place from May to July, and Term 3 takes place from September to November. In between these terms are 4-5 week holidays. Each term is approximately 12-13 weeks long. So students spends about 9 months of the year in school. The other 3 months are holiday months. In Zambia, most schools use the trimester system.</p>
            </div>
            
            <!--Q9-->
            <div class="accordion">What are the school fees?</div>
            <div class="panel">
              <p>Chalo is relatively cheap compared to other schools performing at the same level. For lower primary, a boarding student pays K7,000 per term. For upper primary, a boarding student pays K8,500 per term. For lower secondary, a boarding student pays K10,500 per term. For upper secondary, a boarding student pays K11,500 per term. For more information about all our school fees for both boarding and day school, visit the <a href="secondary-fees.php" target="_blank">Fees Section</a></p>
            </div>
            
            <!--Q10-->
            <div class="accordion">How can I pay the school fees?</div>
            <div class="panel">
              <p>School fees can be paid through our accounts office at Chalo Trust School or can be deposited in the following school bank accounts. <br><br>
            FIRST NATIONAL BANK (FNB): Chalo Trust School: A/C #:0062433797836 (Manda Hill Branch)
            Swift Code: FIRNZMLX <br><br>   

            STANBIC BANK: Chalo Trust School: A/C #:0140031910901 (Mulungushi Branch)
            Swift Code: SBICZMLX<br><br>
            
            After the deposit has been made, parents are required to bring the deposit slip with them as they come to drop off their children. A reciept and a clearance form will be issued upon reciept of the deposit slip or payment. <br>

            A Card Machine is available for visa or mastercard payments through swiping (An admin fee of 2% will apply to all payments made via this method). As a school, we encourage parents to make payments using bank transfers.
                </p>
            </div>
                
            <!--Q11-->
            <div class="accordion">Does Chalo Trust School provide scholarships or financial aid?</div>
            <div class="panel">
              <p>Chalo Trust School doesn't directly provide scholarships or financial aid to students. However, we are affiliated with a number of organizations that sponsor Children to attend CTS, the largest of which is The KUCETEKELA FOUNDATION. The KUCETEKELA FOUNDATION is a non-profit organization whose vision is to provide scholarships to Zambian boys and girls who are academically gifted. These scholarships are provided to young Zambians to attend high quality secondary schools from Grade 8 through Grade 12.
                Check the <a href="http://www.kucetekelafoundation.org/" target="_blank">Kucetekela Foundation website</a> for more details.</p>
            </div>
                
            <!--Q12-->
            <div class="accordion">How many students attend Chalo and what are your class sizes?</div>
            <div class="panel">
              <p>We have around 170 students on average and we intentionally maintain very small class sizes to allow students to have maximum attention from their teachers. On average, we have a ratio of 1 Teacher to 7 Students.</p>
            </div>
                

            <!--Q13-->
            <div class="accordion">What syllabus is used at Chalo Trust School?</div>
            <div class="panel">
              <p>At Chalo, we use a different syllabus for each stage of a student’s academic development. The school is affiliated to two examining boards: The Examinations Council of Zambia (ECZ) for the Primary and Junior Secondary sections, and Cambridge International Examinations (CIE) for the Upper Secondary Section. At the senior level, we offer two distinct syllabuses, both provided by Cambridge University through Cambridge International Examinations (CIE). These programs allow students to go to any university in the world and give them a competitive advantage when it comes to getting accepted to many foreign universities. The two syllabuses are: <a href="http://www.cie.org.uk/programmes-and-qualifications/cambridge-secondary-2/cambridge-o-level/" target="_blank">Cambridge O Levels</a> and <a href="http://www.cie.org.uk/programmes-and-qualifications/cambridge-secondary-2/cambridge-igcse/" target="_blank">Cambridge International General Certificate of Secondary Education (IGCSE)</a>
                For more information about our academic programs, check out our <a href="academics.php" target="_blank">Academics Section</a></p>
            </div>
            
            <!--Q14-->
            <div class="accordion">Does Chalo Trust have a day school program?</div>
            <div class="panel">
              <p>Yes, Chalo allows and encourages Day Scholars to attend (especially students living in Meanwood and Chamba Valley). We drop kids off at home by bus for a nominal fee. </p>
            </div>
            <!--Q15-->
            <div class="accordion">Does Chalo Trust School provide lunch or transport for day-scholars?</div>
            <div class="panel">
              <p>Yes. Chalo has a lunch program for our students in Day School. For a nominal fee, they can have lunch with the boarding students inside the dining hall. To have a look at our diet, visit our <a href="diet.php" target="_blank">Diet Page</a>. 
                We also provide buses for day scholars which drop them off at their doorsteps on a daily basis. For more information about the costs of these services, visit the <a href="primary-fees.php" target="_blank">Fees Section</a> and take a look the 'other' Subsection.</p>
            </div>
            
            <!--Q16-->
            <div class="accordion">What diet is offered at Chalo Trust School?</div>
            <div class="panel">
              <p>Chalo Trust School is committed to providing all our pupils with a healthy, nutritious meal every day. The food is truly one of the highlights of a students’ time at Chalo. Our Head Chef provides a healthy, balanced diet, and input is regularly sought from the student body and parents about meal options. For more details about the diet, visit the <a href="diet.php" target="_blank">Diet Page</a> </p>
            </div>
                
            <!--Q17-->
            <div class="accordion">Does Chalo Trust School have a dress code?</div>
            <div class="panel">
              <p>During School hours, we have a uniform which we require all students to wear. When the students are not in class, we expect all our students to dress in a decent manner. When students come into school, they are given a copy of the school rules, which will give them guidelines on what they can and can not wear on school premises whether they are in class or not.</p>
            </div>
            
            <!--Q18-->
            <div class="accordion">How much do school uniforms cost?</div>
            <div class="panel">
              <p>For Primary students, the average cost for a full uniform set is K650. For Secondary students, a full uniform set costs about K1,400. This includes every item a student would need. For more information, you can contact the accounts department using <a href="mailto:accounts@chalotrustschool.com" target="_top">accounts@chalotrustschool.com</a> or you can use the official <a href="contact.php" target="_blank">Contact Form</a> </p>
            </div>
                
            <!--Q19-->
            <div class="accordion">What extra-curricular activities are available for your students?</div>
            <div class="panel">
              <p>Chalo Trust School provides a wide range of sporting as well as non-sporting activities designed to meet the needs and interests of each student. We pride ourselves on nurturing student's talents and encouraging to do the best with their God-given skills and abilities. Through offering these enriching opportunities, we see students learn new skills, meet new friends, develop team work and become more independent. Some of our alumni have gone on to pursue careers in many of these disciplines. We can point to alumni who are currently professional sportsmen and sportswomen as well as others who have pursued music and the arts.</p>
                <p>We offer an extensive range of extra-curricular activities such as football, netball, volleyball, basketball, and clubs such as JETS club, Environmental Education and Community Services club, Performing Arts Club and Communication Forum Club. We also have entertainment for our students every Saturday evening and we encourage the development and display of a student’s gifts and talents be it musical or athletic gifts. We are a member of the Independent Schools Association of Zambia (ISAZ) and this membership allows us to expose our pupils to other schools through various Inter-School competitions and activities.</p>
                <p>For more information about what activities we offer, visit the <a href="extra-curricular.php" target="_blank">Extra Curricular Activities Section</a>  </p>
            </div>
                
              
            <!--Q20-->
            <div class="accordion">How can I get in touch with the school authorities?</div>
            <div class="panel">
              <p>We recommend that you use the official <a href="contact.php" target="_blank">Contact Form</a> to get in touch with the school. Or you can call the school management on any numbers listed on the side of the page. </p>
            </div>
                
            
            <!--Q21-->
            <div class="accordion">I am interested in working for Chalo. How can I go about the process of applying for employment?</div>
            <div class="panel">
              <p>Chalo Trust School is always looking to hire the best teachers and talented staff. Whenever there is an opening, it will be listed on our <a href="jobs.php" target="_blank">Jobs Page</a>. All the contact details and details about how to send in an application letter will be written there too.</p>
            </div>
        </div>
      </div>      
    <div class="clear"></div>
    </div>
    

<?php 
    include 'includes/overall/overall_footer.php'; 
?>