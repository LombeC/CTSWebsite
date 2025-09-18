<?php 
    $title = "Library & ICT Lab | Chalo Trust School";
    include 'core/init.php';
    include 'includes/overall/overall_header.php';
    require_once 'helpers/sidebarWidgetBuilder.php';
?>
<div class="mainContent">

       <h1>Library And ICT Lab</h1>
    
    <div class="pagetopimgdiv">
        <img src="images/header6.jpg" alt="Header Image" style="margin:auto; display: block;">
    </div>
     
     <div class="clear"></div>
    <div class="leftsidebar">
       <?php
           buildSidebarMenu($academicsSectionSubmenu);
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
                    School Principal<br>
                    <a href="mailto:principal@chalotrustschool.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> principal@chalotrustschool.com</a>
                </li>
                <li><span class="bluename">Mrs Mabesere<br></span> 
                    School Librarian<br>
                    <a href="mailto:library@chalotrustschool.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i>library@chalotrustschool.com</a>
                </li>
                <li><span class="bluename">Mr Harawa<br></span> 
                    I.C.T and Exams Co-ordinator<br>
                    <a href="mailto:exams@chalotrustschool.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> exams@chalotrustschool.com</a>
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
         <h5>Library</h5>
        <p>Chalo Trust School has 2 seperate libraries. One for the primary school and one for the secondary school</p>
        <p>The Secondary Library is located in the Lab building. It is open Monday to Friday 7.30am to 4.15pm.</p>
        <style>
            #primaryLibraryPic {
                width: 340px;
            }
        </style>
        <div class="infoAreaRightDivImgLeft" id="primaryLibraryPic">
                    <img src="images/primary-Library.jpg" alt="Primary School Library">
                </div>
        <p> The Primary School Library is located on the east wing of the primary school. It is open Monday to Friday 7.30am to 4.15pm.</p>
        <p>The libraries are used by students, teachers and the CTS community. They runs a flexible timetable where teachers book classes and work collaboratively with the School Librarian.

        Together, they posess over 10,000 resources to support the teaching and learning at every section of school. They also have an extensive print, digital and online collection including books, ebooks, newspapers, databases, magazines and journals in various languages languages.  </p>
       

        <p>
        The library department organizes various activities like read-a-thons and spell-a-thons to encourage students to develop the habit of reading all kinds of books on a daily basis. The libraries are regularly involved in offering after school activities, including reading and homework club. </p>
        

        <p> The Chalo Trust School library exists to encourage students to become lifelong learners. It assists students in becoming information literate so that they may be proficient consumers and producers of information. </p>
        
        <p> We are committed to helping staff and students to effectively and efficiently find and access relevant information for both educational and personal use.</p>
        
        <h5>ICT Lab</h5>
        <div class="generalImageWholeDiv">
            <img src="images/ict2.jpg" alt="Image of ICT Lab" width="100%" height="auto" style="display:block; margin:auto;">
        </div>
        <p>The CTS Information and Communication Technology Department aims primarily at guiding students towards a clear understanding of Information Technology, developing and refining the skills of digital literacy essential in the contemporary work environment, and instilling an enthusiasm for computing, programming and networking in both theory and practice.</p>

        <p>A significant aim is that every student acquires, develops and refines IT skills to the extent that exercise of such skills becomes instinctual. Thus the student's attention becomes sharply focused on the learning objectives, rather than on the means necessary to achieve them.</p>

        <p>We currently have two computer labs to cater to the needs of the ever-growing sophistication in Information Technology. One for the primary school and another for the secondary school. The secondary lab is networked with internet access and is fully protected and monitored for safety and security.</p>
       

    </div>

    
</div>              

    <div class="clear"></div> 

</div>



<?php include 'includes/overall/overall_footer.php';?>