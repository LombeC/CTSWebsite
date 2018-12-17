<?php 
    $title = "Principals Message | Chalo Trust School";
    include 'core/init.php';
    include 'includes/overall/overall_header.php';
    require_once 'helpers/sidebarWidgetBuilder.php';
?>
<div class="mainContent">

       <h1>Message From the Principal</h1>

    <div class="leftsidebar">
       <?php
        buildSidebarMenu($aboutSectionSubmenu);
         ?>
        <div class="sidebarContactBox">
            <span class="sidebarContactBoxHeading">Contact Us</span>
            <ul>
                <li>Have a question? Check out the <a href="faq.php">FAQ</a> page. If you can't find your answer,  the Administrative team can help. <br><a href="contact.php">Contact Page</a></li>
                <li><span class="bluename"><?php echo $principal_name ?><br></span> 
                    School Principal<br>
                    <a href="mailto:principal@chalotrustschool.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> principal@chalotrustschool.com</a>
                </li>
               
            </ul>
        </div>
        <div class="clear"></div> 
    </div>
<div class="mainContentRightDiv">
   
    <div class="infoAreaRightDiv">

<!--
                <div class="infoAreaRightDivImg">
                    <img src="images/1.jpg" alt="pupils in class" style="height:300px">
                </div>
-->
        
        Greetings,<br><br>Welcome to our website where you can learn all you need to know about our school. Chalo Trust School is situated in a very quiet location of Lusaka and the Chalo School community is warm and friendly and offers the highest standards of pastoral care and Education. Having developed its reputation for high-quality holistic education over the years, today's' school has more than 160 students aged 3-18, from all over the country and beyond. <br><br>

        This is an inclusive school with very high academic standards. The Zambia Curriculum and Cambridge IGCSE and O Levels provide the basis for smooth progression and easy transition between the Primary and Secondary sectors, and examination results have been outstanding in recent years. Our experienced teachers are consummate professionals who are always willing to go the extra mile to ensure that all students are offered the opportunity to fulfill their potential both in and beyond the classroom. The result is that, whether they are returning to continue their education, moving on to another school or seeking places at top universities around the world, CTS students are invariably well-equipped to take the next step in their education.<br><br>

        We are justifiably proud of our academic performance but, with our definitive attributes underpinning all that we do, education here means so much more than the pursuit of top grades. Sport and the arts, community service and adventurous activity are all central to the balanced programme we offer at CTS, and we are acutely aware of our obligation to prepare young people to make their way in the world as confident, caring and responsible citizens.<br><br>

        Good schools are built on the efforts of good people, and I believe that our teachers and students are among the very best. Why not come and judge for yourselves? We would be delighted to meet you.
        <br><br>

        <span class="bluename">
            <?php echo $principal_name ?> <br>
            School Principal.
        </span>
</div>  
    

</div>
   <div class="clear"></div>  
</div>
<?php include 'includes/overall/overall_footer.php';?>