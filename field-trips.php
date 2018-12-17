<?php 
    $title = "Field Trips | Chalo Trust School";
    include 'core/init.php';
    include 'includes/overall/overall_header.php';
    require_once 'helpers/sidebarWidgetBuilder.php';
?>

<div class="mainContent">
    <h1>Field Trips</h1>
    <div class="pagetopimgdiv">
        <img src="images/header1.jpg" alt="Header Image" style="margin:auto; display: block;">
    </div>
    <div class="leftsidebar">
        <?php
          buildSidebarMenu($schoolLifeSectionSubmenu);
        ?>
       
        <div class="clear"></div> 
    </div>
    <div class="mainContentRightDiv">
            <div class="infoAreaRightDiv">
                <h5 style="text-align:center; font-size: 1.3em">School Trips</h5>
<!--
                <div class="infoAreaRightDivImg">
                    <img src="images/1.jpg" alt="pupils in class">
                </div>
-->
                CTS arranges educational trips and tours as a means of supplementing what is learned in the classroom. Our pupils are regularly taken to places relevant to their lessons. We believe that they are several different types of learners. Whilst some might be able to grasp concepts after hearing about it, or after reading a book, some students require a physical demonstration of a concept before they are able to pick it up.<br><br>    For example, a teacher might spend time talking about a geographical landmark, but unless a students physically sees this landmark, they will never be able to acknowledge it's importance. This applies to any subject or topic. This is the reason we hold field trips and educational tours. So that our students can get a practical feel of the theoretic concepts that are learned in the classroom <br><br>

                Field Trips and Educational tours have always been at the centre of teaching since time immemorial. Chalo Trust School has always considered educational tours not as a marketing gimmick but the philosophy of the holistic education it provides for the our students.

                It is our policy that each class should go on at least one such educational trip per term.
                The places visited range from hydroelectric power stations to farms, factories and other installations. <br><br>
                
                Occasionally, we have international field trips where our students travel to a place like South Africa. However, this field trip usually only takes place on demand. i.e. When enough students show interest, and enough parents show willingness to pay for the tour. <br><br>
                
                Some more images from our past field trips can be found in the <a href="general-gallery.php">gallery</a>
                
                
            </div>
    </div>              
    <div class="clear"></div> 
</div>


<?php include 'includes/overall/overall_footer.php';?>