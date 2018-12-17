<?php 
    $title = "Videos | Chalo Trust School";
    include 'core/init.php';
    include 'includes/overall/overall_header.php';
    require_once 'helpers/sidebarWidgetBuilder.php';
?>

<div class="mainContent">
<h1>Video Gallery</h1>
    <div class="pagetopimgdiv" >
        <img src="images/header1.jpg" alt="Header Image" style="margin:auto; display: block;">
    </div>
        <div class="leftsidebar">
            <?php
              buildSidebarMenu($gallerySectionSubmenu);
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
        </div>
        <div class="mainContentRightDiv">
            <div class="infoAreaRightDiv">
                <h5 style="text-align:center">Videos</h5>
                    <div class="videoContainer">
                        Videos Coming Soon
<!--
                        <div class="chaloVideo">
                            <div class="videoHeading">Treasured Vessels - Talent Show 2017</div>
                            <iframe class="vid" src="https://www.youtube.com/embed/P-xlixF7B2U" frameborder="2px" allowfullscreen></iframe>
                        </div>
-->
<!--
                        <div class="chaloVideo">
                            <div class="videoHeading">Treasured Vessels - Talent Show 2017</div>
                            <iframe class="vid" src="https://www.youtube.com/embed/P-xlixF7B2U" frameborder="2px" allowfullscreen></iframe>
                        </div>
                        <div class="chaloVideo">
                            <div class="videoHeading">Treasured Vessels - Talent Show 2017</div>
                            <iframe class="vid" src="https://www.youtube.com/embed/P-xlixF7B2U" frameborder="2px" allowfullscreen></iframe>
                        </div>
                        <div class="chaloVideo">
                            <div class="videoHeading">Treasured Vessels - Talent Show 2017</div>
                            <iframe class="vid" src="https://www.youtube.com/embed/P-xlixF7B2U" frameborder="2px" allowfullscreen></iframe>
                        </div>
-->
                    </div>
                    <!-- status elements -->
                    <div class="scroller-status">
                      <div class="loader-ellips infinite-scroll-request">
                        <span class="loader-ellips__dot"></span>
                        <span class="loader-ellips__dot"></span>
                        <span class="loader-ellips__dot"></span>
                        <span class="loader-ellips__dot"></span>
                      </div>
                      <p class="scroller-status__message infinite-scroll-last">End of Content</p>
                      <p class="scroller-status__message infinite-scroll-error">No more pages to load</p>
                    </div>
<!--                    <p><button class="view-more-button">View More</button></p> -->
                <div class="clear"></div>
                   <!--  <div class="pagination">
                          <a href="videos.php" class="active">1</a>
                          <a class="pagination__next" href="videos2.php">2</a>
                          <a  href="videos3.php">3</a>
                    </div> -->
            </div>
           
        </div>
    <div class="clear"></div>
</div>

<?php include 'includes/overall/overall_footer.php';?>