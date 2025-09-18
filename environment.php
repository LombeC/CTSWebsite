<?php 
    $title = "School Environment | Chalo Trust School";
    include 'core/init.php';
    include 'includes/overall/overall_header.php';
    require_once 'helpers/sidebarWidgetBuilder.php';
?>

<div class="mainContent">
    <h1>Environment</h1>
    <div class="pagetopimgdiv">
        <img src="images/header1.jpg" alt="Header Image" style="margin:auto; display: block;">
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
            </ul>
        </div>
        <br><br>
        <img src="images/8.jpg" alt="High Jump">
        
        <div class="leftsidebartext">
            <p> There will be a quote from some students here talking about their time at Chalo Trust School</p>
        </div>
        <div class="clear"></div> 
    </div>
    <div class="mainContentRightDiv">
            <div class="infoAreaRightDiv">
                <h5 style="text-align:center; font-size: 1.3em">Chalo Trust School Surroundings</h5>
                <div class="infoAreaRightDivImg">
                    <img src="images/1.jpg" alt="pupils in class">
                </div>
                Chalo Boasts the cleanest and greenest school in Lusaka<br><br>
                
                CTS is set in a serene environment with natural vegetation .At CTS we believe an academic environment must be situated in  a natural environmental where pupils will interact with nature in a way that reduces stress and facilitates long hours of study. At CTS we have special created natural parks for study and relaxation.At CTS pupils are encouraged to participate in tree and flower planting and maintenance of the surrounding of the school
                
            </div>
    </div>              
    <div class="clear"></div> 
</div>


<?php include 'includes/overall/overall_footer.php';?>