<?php 
//This function builds a sidebar menu widget. It takes an input of an array which contains the pages and subpages contained in a section.
//The sidebar menu can then be displayed on any page in that section and can be built up dynamically. To make changes to multiple 
//Pages in the section, you would only need to change the section menu array.
function buildSidebarMenu($sideMenuArray){
    //We need to get the url of the current file. This allows us to make a comparison and then set the active class.
//    $current_file = explode('/',$_SERVER['SCRIPT_NAME']);
//    $current_file = end($current_file);
//    $current_file = explode('.' , $current_file);
//    $current_file = current($current_file);
    $current_file = explode('/',$_SERVER['SCRIPT_NAME']);
     $current_file = end($current_file);
//    $current_file = explode('.' , $current_file);
//    $current_file = current($current_file);
    //$current_file = '..' . $current_file;
    //print($current_file);
/*Trim numbers out of the current_file variable. Applicable to cases where there's multiple pages of the same content.(e.g.videos , videos2 .... e.t.c) */
    $current_file = preg_replace('/\d/','', $current_file);
     
     $current_file = explode ('.' , $current_file);
     $current_file = current($current_file);
  
       
    ?>
    <!-- Start building the sidebar widget using HTML -->
        <div class="sidebarwidget">
             <!-- Sidebar menu heading section -->
            <div class="sidebarExplore">
                <span class="sidebarHeading">
                    <i class="fa fa-globe" aria-hidden="true" style="font-size: 18px;"></i>&nbsp;EXPLORE THIS SECTION
                </span>     
            </div>
             <!-- Then start the sidebar menu. Place the sidebar menu inside an unordered list. Apply various styles from the css file to determine the appearance of the sidebar -->
            <ul class="sidebarExploreList"> <?php 
        // Loop through the side menu array which has been passed to the function. Use the array to render the menu.
            foreach($sideMenuArray as $link){
                // if the subpages element of the array is set and is not empty then apply the 'dropdownsidebar' css class to the menu item   
                // because it means that that the menu item has submenu (Subpages) items.
                if (isset($link['subpages']) && !empty($link['subpages'])){
                     ?>
                        <li class="dropdownsidebaritem">
                            <!-- If the current file is the active file, then apply the activesidebar class to the <a> element, else just render the element without that class -->
                            <?php if($current_file === $link['url']){ ?>
                                <a href="<?php echo $link['url']; ?> " class="activeSideBarItem"> 
                                    <?php echo $link['text']?> <i class="fa fa-chevron-circle-down rotateOnHover"></i>
                                </a>
                           <?php } else { ?>
                                <a href="<?php echo $link['url']; ?> " > 
                                    <?php echo $link['text']?> <i class="fa fa-chevron-circle-down rotateOnHover"></i>
                                </a> 
                           <?php } ?>
                            <!-- Because this menu item has submenu items, open up a div to display the submenu items -->
                            <div class="sidebarExploreSubmenu" style="font-size: 12px;"> 
                                <!-- Use a foreach loop to display all the submenu items. append them to the submenu div -->
                                <?php foreach($link['subpages'] as $linkValue){ 
                                    // If this is the active submenu file is the current file, then add the activesidebaritem class to the //element else just render it. 
                                    if($current_file === $linkValue['url']){ ?>
                                    <a href="<?php echo $linkValue['url']; ?>" style="font-size: 15px; font-weight:bold; padding: 7px; border-bottom:1px solid #666;" class="activeSideBarItem"><?php echo $linkValue['text']; ?></a>
                                   <?php } else { ?>
                                        <a href="<?php echo $linkValue['url']; ?>" style="font-size: 15px; font-weight:bold; padding: 7px; border-bottom:1px solid #666;" ><?php echo $linkValue['text']; ?></a>  
                                    <?php }
                                 } ?> 
                            </div>
                        </li> <?php 
                    //Decides what to do for menu items without any submenu items. Just simply renders them.
                    // Checks if any of these elements are the current active file , and adds the activesidebaritem class if they are, else if 
                    // just renders them.
                } else {
                     ?><li>
                        <?php if($current_file === $link['url']){ ?>
                            <a href="<?php echo $link['url']; ?> " class="activeSideBarItem"> <?php echo $link['text']?></a>
                       <?php } else { ?>
                            <a href="<?php echo $link['url']; ?> " > <?php echo $link['text']?></a>
                    <?php } ?>

                    </li> <?php 
                }

            }  ?>
            </ul>
        </div>  
    <?php
}

// Different arrays that will be used for different section menus
        $aboutSectionSubmenu = array(
                'Background' => array('text' => 'Background and History', 'url' => 'background'),
                'Vision' => array('text' => 'Vision and Mission','url' => 'vision'),
                'Principals Message' => array('text' => 'Principal\'s Message','url' => 'principal-message'),
                'FAQs' => array('text' => 'FAQs','url' => 'faq')
            );
        
        $academicsSectionSubmenu = array(
                'Primary Curriculum' => array('text' => 'Primary Curriculum', 'url' => 'primary'),
                'Lower Secondary Curriculum' => array('text' => 'Lower Secondary Curriculum','url' => 'lower-secondary'),
                'Upper Secondary Curriculum' => array('text' => 'Upper Secondary Curriculum','url' => 'upper-secondary'),
                'Library and ICT Lab' => array('text' => 'Library and ICT Lab','url' => 'library-ict-lab'),
                'Staff' => array('text' => 'Staff','url' => 'staff')
            );

         $schoolLifeSectionSubmenu = array(
                'Boarding School' => array(
                                'text' => 'Boarding School', 
                                'url' => 'boarding'
                                ),
                'School Diet' => array(
                                'text' => 'School Diet', 
                                'url' => 'diet'
                                ),
                'A Day in the Life of a Student' => array(
                                'text' => 'A Day in the Life of a Student', 
                                'url' => 'day-in-life'
                                ),
                'Extra Curricular Activites' => array(
                                'text' => 'Extra Curricular Activites', 
                                'url' => 'extra-curricular',
                                'subpages' => array ( 
                                    'Sports' => array('text' => 'Sports','url' => 'sports'),
                                    'Entertainment' => array('text' => 'Entertainment','url' => 'entertainment')
                                    )
                                ),
                'Field Trips' => array(
                                'text' => 'Field Trips', 
                                'url' => 'field-trips'
                                )
//             ,
//                'School Environment' => array(
//                                'text' => 'School Environment', 
//                                'url' => 'environment'
//                                )
                        );  
            $newsSectionSubmenu = array(
                'News' => array('text' => 'News', 'url' => 'news'),
                'Newsletters' => array('text' => 'Newsletters','url' => 'newsletters'),
                'Jobs' => array('text' => 'Jobs','url' => 'jobs')
            );
            $gallerySectionSubmenu = array(
                'General School Gallery' => array('text' => 'General School Gallery', 'url' => 'general-gallery'),
                'Sports Gallery' => array('text' => 'Sports Gallery','url' => 'sports-gallery'),
                'Entertainment Gallery' => array('text' => 'Entertainment Gallery','url' => 'entertainment-gallery'),
                'Videos' => array('text' => 'Videos','url' => 'videos')
            );
?>

