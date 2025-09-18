<?php 
    $title = "Staff | Chalo Trust School";
    include 'core/init.php';
    include 'includes/overall/overall_header.php';
    require_once 'helpers/sidebarWidgetBuilder.php';
?>
<div class="mainContent">

       <h1>Chalo Trust School Staff</h1>
    
    <div class="pagetopimgdiv">
        <img src="images/staff.JPG" alt="Header Image" style="margin:auto; display: block;">
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
              
                <li><b>Contact Hours</b><br>
                    7:30 - 16:00<br>
                    Monday - Saturday <br><br>
                    <b>Chalo Trust School</b> <br>
                    Chamba Valley, Lusaka <br>
                    <a href="mailto:info@chalotrustschool.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> </a>
                </li>
            </ul>
        </div>
        <div class="clear"></div> 
    </div>
<div class="mainContentRightDiv">
   
    <div class="infoAreaRightDiv">
         <h5>Facaulty</h5>
            
        <!-- For displaying the staff card on screens smaller than 500px -->
        <div class="mobileTabAlternative">
            <div class="accordion">Management</div>
            <div class="panel">
                    <div>
                    <span class="staffCardTitle"><h3>Upper Management</h3></span>
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/1.jpg" alt="Picture of Mr Chileshe">
                        </div>
                        <span class="staffName">Mr. Julius Chileshe</span><br>
                        Executive Chairman <br>
                        <a href="mailto:chairman@chalotrustschool.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> chairman@chalotrustschool.com</a>
                    </div>
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/2.jpg" alt="Picture of Mr Chileshe">
                        </div>
                        <span class="staffName">Mrs. Jenny Chileshe</span><br>
                        Director, Administration<br>
                        <a href="mailto:director@chalotrustschool.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> director@chalotrustschool.com</a> <br>
                        <a href="tel:+260979480254"><i class="fa fa-phone" aria-hidden="true"></i> 097 9480254</a><br>
                        <a href="tel:+260955883097"><i class="fa fa-phone" aria-hidden="true"></i> 095 5883097</a>
                    </div>
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/3.jpg" alt="Picture of Mr Chileshe">
                        </div>
                        <span class="staffName">Chali Chileshe</span><br>
                        Business Development Manager <br>
                        <a href="mailto:business@chalotrustschool.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> chali@chalotrustschool.com</a> <br>
                        <a href="tel:+260979835547"><i class="fa fa-phone" aria-hidden="true"></i> 097 9835547</a>
                    </div>
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/4.jpg" alt="Picture of Mr Chileshe">
                        </div>
                        <span class="staffName">Kaoma Zimba</span><br>
                        School Administrator | Human Resources<br>
                        <a href="mailto:admin@chalotrustschool.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> admin@chalotrustschool.com</a> <br>
                        <a href="tel:+260955670399"><i class="fa fa-phone" aria-hidden="true"></i> 095 5670399</a>
                    </div>
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/5.jpg" alt="Picture of Mr Chileshe">
                        </div>
                        <span class="staffName">Lombe Chileshe</span><br>
                        Technical Manager<br>
                        <a href="mailto:lombechileshe@hotmail.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> lombe@chalotrustschool.com</a><br>
                        <a href="tel:+260971690958"><i class="fa fa-phone" aria-hidden="true"></i> 097 1690958</a>
                        
                    </div>
                    <span class="staffCardTitle"><h3>Middle Management</h3></span>
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/5.jpg" alt="Picture of Mr Chileshe">
                        </div>
                        <span class="staffName">Mr. Paul John Chimba</span><br>
                        Acting Principal | Music | English <br>
                        <a href="mailto:principal@chalotrustschool.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> principal@chalotrustschool.com</a>
                    </div>  
<!--
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/6.jpg" alt="Picture of Mr Chileshe">
                        </div>
                        <span class="staffName">Pastor Timothy Dego MacBrown</span><br>
                       School Principal | Geography | Development Studies <br>
                        <a href="mailto:principal@chalotrustschool.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> principal@chalotrustschool.com</a><br>
                        <a href="tel:+260973823302"><i class="fa fa-phone" aria-hidden="true"></i> 097 3823302</a>
                    </div>
-->
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/7.jpg" alt="Picture of Mr Chileshe">
                        </div>
                        <span class="staffName">Pastor Brian Chiwela</span><br>
                        Vice Principal Secondary  | School Chaplain | Religious Studies | Religious Education<br>
                        <a href="mailto:secondary@chalotrustschool.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> secondary@chalotrustschool.com</a>
                    </div>
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/8.jpg" alt="Picture of Mr Chileshe">
                        </div>
                        <span class="staffName">Mrs. Ernestina Dego MacBrown</span><br>
                        Vice Principal Primary<br>
                        <a href="mailto:primary@chalotrustschool.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> primary@chalotrustschool.com</a><br>
                        <a href="tel:+260976476637"><i class="fa fa-phone" aria-hidden="true"></i> 097 6476637</a>
                    </div>
<!--
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/5.jpg" alt="Picture of Mr Chileshe">
                        </div>
                        <span class="staffName">Mr. Paul John Chimba</span><br>
                        Senior Teacher Secondary | Music | English <br>
                        <a href="mailto:pauljohnchimba@gmail.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> pauljohnchimba@gmail.com</a>
                    </div>  
-->
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/5.jpg" alt="Picture of Mr Chileshe">
                        </div>
                        <span class="staffName">Majory Masiye</span><br>
                        Senior Teacher Primary | Reception | Baby Class <br>
                        <a href="mailto:majorymasiye@gmail.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> majorymasiye@gmail.com</a>
                    </div>
                </div>
            </div>
            <div class="accordion">Secondary</div>
            <div class="panel">
                 <div>
                    <span class="staffCardTitle"><h3>Secondary School Management</h3></span>
                     <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/5.jpg" alt="Picture of Mr Chileshe">
                        </div>
                        <span class="staffName">Mr. Paul John Chimba</span><br>
                        Acting Principal | Music | English <br>
                        <a href="mailto:principal@chalotrustschool.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> principal@chalotrustschool.com</a>
                    </div>   
<!--
                     <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/6.jpg" alt="Picture of Mr Chileshe">
                        </div>
                        <span class="staffName">Pastor Timothy Dego MacBrown</span><br>
                       School Principal | Geography | Development Studies <br>
                        <a href="mailto:principal@chalotrustschool.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> principal@chalotrustschool.com</a><br>
                        <a href="tel:+260973823302"><i class="fa fa-phone" aria-hidden="true"></i> 097 3823302</a>
                    </div>
-->
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/7.jpg" alt="Picture of Mr Chileshe">
                        </div>
                        <span class="staffName">Pastor Brian Chiwela</span><br>
                        Vice Principal Secondary  | School Chaplain | Religious Studies | Religious Education<br>
                        <a href="mailto:secondary@chalotrustschool.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> secondary@chalotrustschool.com</a>
                    </div>
<!--
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/5.jpg" alt="Picture of Mr Chileshe">
                        </div>
                        <span class="staffName">Mr. Paul John Chimba</span><br>
                        Senior Teacher Secondary | Music | English <br>
                        <a href="mailto:pauljohnchimba@gmail.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> pauljohnchimba@gmail.com</a>
                    </div>   
-->
                <span class="staffCardTitle"><h3>Heads of Department</h3></span>
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/5.jpg" alt="Picture of Mr Chileshe">
                        </div>
                        <span class="staffName">Mr. Mwiza Harawa</span><br>
                        H.O.D Exams | Computer Science <br>
                        <a href="mailto:exams@chalotrustschool.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> exams@chalotrustschool.com</a>
                    </div>
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/5.jpg" alt="Picture of Mr Chileshe">
                        </div>
                        <span class="staffName">Mr. Levyson Banda</span><br>
                        H.O.D Sciences | Chemistry | Physics | Mathematics <br>
                         <a href="mailto:levysonbanda526@gmail.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> levysonbanda526@gmail.com</a>
                    </div>
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/5.jpg" alt="Picture of Mr Chileshe">
                        </div>
                        <span class="staffName">Miss Beatrice Mukula</span><br>
                        H.O.D Humanities | Commerce | Business Studies | Accounts <br>
                        <a href="mailto:mukula.beatrice@yahoo.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> mukula.beatrice@yahoo.com</a>
                    </div>
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/5.jpg" alt="Picture of Mr Chileshe">
                        </div>
                        <span class="staffName">Mr. Lweendo Chibwe Yambayamba</span><br>
                        H.O.D Languages | English | Religious Education <br>
                        <a href="mailto:lweendoyamba@gmail.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> lweendoyamba@gmail.com</a>
                    </div>
                    <span class="staffCardTitle"><h3>Secondary School Teachers</h3></span>
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/5.jpg" alt="Picture of Mr Chileshe">
                        </div>
                        <span class="staffName">Mrs. Dorcas Zulu</span><br>
                        Business Studies | Commerce  <br>
                        <a href="mailto:dchips507@gmail.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> dchips507@gmail.com</a>
                    </div>
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/5.jpg" alt="Picture of Mr Chileshe">
                        </div>
                        <span class="staffName">Mrs. Olipa Mabezere</span><br>
                        School Librarian | Religious Studies | Religious Education <br>
                        <a href="mailto:library@chalotrustschool.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> library@chalotrustschool.com</a>
                    </div>
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/5.jpg" alt="Picture of Mr Chileshe">
                        </div>
                         <span class="staffName">Ms. Mwaka Namuchimba</span><br>
                        Girls' House Parent <br>
                        <a href="mailto:mwakanamuchimba@yahoo.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> mwakanamuchimba@yahoo.com</a>
                    </div>
<!--
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/5.jpg" alt="Picture of Mr Chileshe">
                        </div>
                         <span class="staffName">Mr. Elvis Mwape</span><br>
                        Sports Co-ordinator | Computer Studies <br>
                        <a href="mailto:sports@chalotrustschool.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> sports@chalotrustschool.com</a>
                    </div>
-->
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/5.jpg" alt="Picture of Mr Chileshe">
                        </div>
                         <span class="staffName">Mr. Prince Kajamba</span><br>
                        Agricultural Science | Intergrated Science| Biology <br>
                        <a href="mailto:princekajamba@yahoo.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> princekajamba@yahoo.com</a>
                    </div>
<!--
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/5.jpg" alt="Picture of Mr Chileshe">
                        </div>
                         <span class="staffName">Mr. Victor Mafa</span><br>
                        Mathematics | Geography <br>
                        <a href="mailto:victormafa@gmail.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> victormafa@gmail.com</a>
                    </div>
-->
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/5.jpg" alt="Picture of Mr Chileshe">
                        </div>
                         <span class="staffName">Mr. Nephas Sishenyi</span><br>
                        Boys House Parent | Mathematics<br>
                        <a href="mailto:matobanephas@gmail.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> matobanephas@gmail.com</a>
                    </div>
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/5.jpg" alt="Picture of Mr Chileshe">
                        </div>
                         <span class="staffName">Mr. Hilbrah Wilmot Quagraine</span><br>
                        Intergrated Scince | Biology | Physics <br>
                        <a href="mailto:hilbrahwilmot@gmail.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> hilbrahwilmot@gmail.com</a>
                    </div>
<!--
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/5.jpg" alt="Picture of Mr Chileshe">
                        </div>
                         <span class="staffName">Mr. Lloyd David Simpito</span><br>
                        Social Studies | History <br>
                        <a href="mailto:ld.simpito@gmail.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> ld.simpito@gmail.com</a>
                    </div>
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/5.jpg" alt="Picture of Mr Chileshe">
                        </div>
                         <span class="staffName">Mr. Charles Chitundu Sekelet</span><br>
                        English Language | French <br>
                        <a href="mailto:fkcharlie13@gmail.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> fkcharlie13@gmail.com</a>
                    </div>
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/5.jpg" alt="Picture of Mr Chileshe">
                        </div>
                         <span class="staffName">Mrs. Priviledge Mandivava</span><br>
                        Engish Language | English Literature <br>
                        <a href="mailto:naibepriveledge@gmail.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> naibepriveledge@gmail.com</a>
                    </div>
-->
                </div>
            </div>
            <div class="accordion">Primary</div>
            <div class="panel">
                <div>
                    <span class="staffCardTitle"><h3>Primary School Management</h3></span>
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/5.jpg" alt="Picture of Mr Chileshe">
                        </div>
                        <span class="staffName">Mr. Paul John Chimba</span><br>
                        Acting Principal | Music | English <br>
                        <a href="mailto:principal@chalotrustschool.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> principal@chalotrustschool.com</a>
                    </div>  
<!--
                     <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/6.jpg" alt="Picture of Mr Chileshe">
                        </div>
                        <span class="staffName">Pastor Timothy Dego MacBrown</span><br>
                       School Principal | Geography | Development Studies <br>
                        <a href="mailto:principal@chalotrustschool.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> principal@chalotrustschool.com</a><br>
                        <a href="tel:+260973823302"><i class="fa fa-phone" aria-hidden="true"></i> 097 3823302</a>
                    </div>
-->
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/8.jpg" alt="Picture of Mr Chileshe">
                        </div>
                        <span class="staffName">Mrs. Ernestina Dego MacBrown</span><br>
                        Vice Principal Primary<br>
                        <a href="mailto:primary@chalotrustschool.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> primary@chalotrustschool.com</a><br>
                        <a href="tel:+260976476637"><i class="fa fa-phone" aria-hidden="true"></i> 097 6476637</a>
                    </div>
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/5.jpg" alt="Picture of Mr Chileshe">
                        </div>
                        <span class="staffName">Majory Masiye</span><br>
                        Senior Teacher Primary | Reception | Baby Class <br>
                        <a href="mailto:majorymasiye@gmail.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> majorymasiye@gmail.com</a>
                    </div>
                    <span class="staffCardTitle"><h3>Primary School Teachers</h3></span>
<!--
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/5.jpg" alt="Picture of Mr Chileshe">
                        </div>
                        <span class="staffName">Mrs. Fridah Simuyuni</span><br>
                        Grade 4 <br>
                        <a href="mailto:fridahsimuyuni@gmail.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> fridahsimuyuni@gmail.com</a>
                    </div>
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/5.jpg" alt="Picture of Mr Chileshe">
                        </div>
                        <span class="staffName">Ms. Mulenga Bwalya</span><br>
                        Grade 3 <br>
                    </div>
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/5.jpg" alt="Picture of Mr Chileshe">
                        </div>
                         <span class="staffName">Ms. Victoria Mulekwa</span><br>
                        Grade 2 <br>
                    </div>
-->
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/5.jpg" alt="Picture of Mr Chileshe">
                        </div>
                         <span class="staffName">Mr. Obed Mwango</span><br>
                        Grade 7 <br>
                        <a href="mailto:obedmwango70@gmail.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> obedmwango70@gmail.com</a>
                    </div>
<!--
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/5.jpg" alt="Picture of Mr Chileshe">
                        </div>
                         <span class="staffName">Mr. Charles Lungu</span><br>
                        Grade 6 <br>
                        <a href="mailto:charleslungu2015@gmail.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> charleslungu2015@gmail.com</a>
                    </div>
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/5.jpg" alt="Picture of Mr Chileshe">
                        </div>
                         <span class="staffName">Mrs. Mulenga Mwenya Kayesa</span><br>
                        Grade 5 <br>
                        <a href="mailto:m.mwenya02@gmail.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> m.mwenya02@gmail.com</a>
                    </div>
-->
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/5.jpg" alt="Picture of Mr Chileshe">
                        </div>
                         <span class="staffName">Ms. Royce Phiri</span><br>
                        Primary School Houseparent | Grade 1 <br>
                        Contact Details
                    </div>
                </div>
                
            </div>
            <div class="accordion">Administration</div>
            <div class="panel">
                <div>
                    <span class="staffCardTitle"><h3>Admin</h3></span>
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/4.jpg" alt="Picture of Mr Chileshe">
                        </div>
                        <span class="staffName">Kaoma Zimba</span><br>
                        School Administrator | Human Resources<br>
                        <a href="mailto:admin@chalotrustschool.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> admin@chalotrustschool.com</a> <br>
                        <a href="tel:+260955670399"><i class="fa fa-phone" aria-hidden="true"></i> 095 5670399</a>
                    </div>
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/5.jpg" alt="Picture of Mr Chileshe">
                        </div>
                        <span class="staffName">Mr. James Mwanambiya</span><br>
                        School Accountant<br>
                        <a href="mailto:accounts@chalotrustschool.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> accounts@chalotrustschool.com</a> <br>
                        <a href="tel:+260977333575"><i class="fa fa-phone" aria-hidden="true"></i> 097 7333575</a>
                    </div>
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/5.jpg" alt="Picture of Mr Chileshe">
                        </div>
                        <span class="staffName">Mrs. Waka Silavwe Harawa</span><br>
                        Assistant Accountant<br>
                        <a href="mailto:accounts@chalotrustschool.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> accounts@chalotrustschool.com</a>
                    </div>
<!--
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/5.jpg" alt="Picture of Mr Chileshe">
                        </div>
                        <span class="staffName">Ms. Castine Kazembe</span><br>
                        School Secretary <br>
                        <a href="mailto:info@chalotrustschool.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> info@chalotrustschool.com</a>
                    </div>
-->
                    
                </div>
            </div>
        </div>
  
        <!-- For displaying the staff card on screens larger than 500px -->
          <div class="tabDiv">
              
           <nav class="tab">
                <ul class="tabMenu">
                    <li><a class="tablinks activeTab" onclick=" return openTab(event,'Management','block')"> Management</a></li>
                    <li><a class="tablinks" onclick="return openTab(event, 'Secondary','block')">Secondary</a></li>
                    <li><a class="tablinks" onclick="return openTab(event, 'Primary','block')">Primary</a></li>
                    <li><a class="tablinks lastChild" onclick="return openTab(event, 'Administration','block')">Administration</a></li>
                </ul>   
            </nav>
              
              <style>
                .showImage {
                    display: block;
                }
            </style>
        
            <div class="staffBox">
                <div id="Management" class="tabContent staffdefault">
                    <span class="staffCardTitle"><h3>Upper Management</h3></span>
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/1.jpg" alt="Picture of Mr Chileshe">
                        </div>
                        <span class="staffName">Mr. Julius Chileshe</span><br>
                        Executive Chairman <br>
                        <a href="mailto:chairman@chalotrustschool.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> chairman@chalotrustschool.com</a>
                    </div>
                    <div class="staffCard ">
                        <div class="staffCardImage">
                            <img src="images/staff/jenny.JPG" alt="Picture of Mr Chileshe">
                        </div>
                        <span class="staffName">Mrs. Jenny Chileshe</span><br>
                        Director, Administration<br>
                        <a href="mailto:director@chalotrustschool.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> director@chalotrustschool.com</a> <br>
                        <a href="tel:+260979480254"><i class="fa fa-phone" aria-hidden="true"></i> 097 9480254</a><br>
                        <a href="tel:+260955883097"><i class="fa fa-phone" aria-hidden="true"></i> 095 5883097</a>
<!--                        <a href="tel:+260977333575"><i class="fa fa-phone" aria-hidden="true"></i> 097 7333575</a>-->
                    </div>
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/3.jpg" alt="Picture of Mr Chileshe">
                        </div>
                        <span class="staffName">Chali Chileshe</span><br>
                        Business Development Manager <br>
                        <a href="mailto:business@chalotrustschool.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> chali@chalotrustschool.com</a> <br>
                        <a href="tel:+260979835547"><i class="fa fa-phone" aria-hidden="true"></i> 097 9835547</a>
                    </div>
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/4.jpg" alt="Picture of Mr Chileshe">
                        </div>
                        <span class="staffName">Kaoma Zimba</span><br>
                        School Administrator | Human Resources<br>
                        <a href="mailto:admin@chalotrustschool.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> admin@chalotrustschool.com</a> <br>
                        <a href="tel:+260955670399"><i class="fa fa-phone" aria-hidden="true"></i> 095 5670399</a>
                    </div>
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/5.jpg" alt="Picture of Mr Chileshe">
                        </div>
                        <span class="staffName">Lombe Chileshe</span><br>
                        Technical Manager<br>
                        <a href="mailto:lombe@chalotrustschool.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i>lombe@chalotrustschool.com</a><br>
                        <a href="tel:+260971690958"><i class="fa fa-phone" aria-hidden="true"></i> 097 1690958</a>
                        
                    </div>
                    <span class="staffCardTitle"><h3>Middle Management</h3></span>
                     <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/5.jpg" alt="Picture of Mr Chileshe">
                        </div>
                        <span class="staffName">Mr. Paul John Chimba</span><br>
                        Acting Principal | Music | English <br>
                        <a href="mailto:principal@chalotrustschool.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> principal@chalotrustschool.com</a>
                    </div>  
<!--
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/6.jpg" alt="Picture of Mr Chileshe">
                        </div>
                        <span class="staffName">Pastor Timothy Dego MacBrown</span><br>
                       School Principal | Geography | Development Studies <br>
                        <a href="mailto:principal@chalotrustschool.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> principal@chalotrustschool.com</a><br>
                        <a href="tel:+260973823302"><i class="fa fa-phone" aria-hidden="true"></i> 097 3823302</a>
                    </div>
-->
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/7.jpg" alt="Picture of Mr Chileshe">
                        </div>
                        <span class="staffName">Pastor Brian Chiwela</span><br>
                        Vice Principal Secondary  | School Chaplain | Religious Studies | Religious Education<br>
                        <a href="mailto:secondary@chalotrustschool.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> secondary@chalotrustschool.com</a>
                    </div>
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/8.jpg" alt="Picture of Mr Chileshe">
                        </div>
                        <span class="staffName">Mrs. Ernestina Dego MacBrown</span><br>
                        Vice Principal Primary<br>
                        <a href="mailto:primary@chalotrustschool.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> primary@chalotrustschool.com</a><br>
                        <a href="tel:+260976476637"><i class="fa fa-phone" aria-hidden="true"></i> 097 6476637</a>
                    </div>
<!--
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/5.jpg" alt="Picture of Mr Chileshe">
                        </div>
                        <span class="staffName">Mr. Paul John Chimba</span><br>
                        Senior Teacher Secondary | Music | English <br>
                        <a href="mailto:pauljohnchimba@gmail.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> pauljohnchimba@gmail.com</a>
                    </div>  
-->
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/5.jpg" alt="Picture of Mr Chileshe">
                        </div>
                        <span class="staffName">Majory Masiye</span><br>
                        Senior Teacher Primary | Reception | Baby Class <br>
                        <a href="mailto:majorymasiye@gmail.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> majorymasiye@gmail.com</a>
                    </div>
                </div>

                <div id="Secondary" class="tabContent">
                    <span class="staffCardTitle"><h3>Secondary School Management</h3></span>
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/5.jpg" alt="Picture of Mr Chileshe">
                        </div>
                        <span class="staffName">Mr. Paul John Chimba</span><br>
                        Acting Principal | Music | English <br>
                        <a href="mailto:principal@chalotrustschool.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> principal@chalotrustschool.com</a>
                    </div> 
                    
<!--
                     <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/6.jpg" alt="Picture of Mr Chileshe">
                        </div>
                        <span class="staffName">Pastor Timothy Dego MacBrown</span><br>
                       School Principal | Geography | Development Studies <br>
                        <a href="mailto:principal@chalotrustschool.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> principal@chalotrustschool.com</a><br>
                        <a href="tel:+260973823302"><i class="fa fa-phone" aria-hidden="true"></i> 097 3823302</a>
                    </div>
-->
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/7.jpg" alt="Picture of Mr Chileshe">
                        </div>
                        <span class="staffName">Pastor Brian Chiwela</span><br>
                        Vice Principal Secondary  | School Chaplain | Religious Studies | Religious Education<br>
                        <a href="mailto:secondary@chalotrustschool.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> secondary@chalotrustschool.com</a>
                    </div>
<!--
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/5.jpg" alt="Picture of Mr Chileshe">
                        </div>
                        <span class="staffName">Mr. Paul John Chimba</span><br>
                        Senior Teacher Secondary | Music | English <br>
                        <a href="mailto:pauljohnchimba@gmail.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> pauljohnchimba@gmail.com</a>
                    </div>   
-->
                <span class="staffCardTitle"><h3>Heads of Department</h3></span>
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/5.jpg" alt="Picture of Mr Chileshe">
                        </div>
                        <span class="staffName">Mr. Mwiza Harawa</span><br>
                        H.O.D Exams | Computer Science <br>
                        <a href="mailto:exams@chalotrustschool.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> exams@chalotrustschool.com</a>
                    </div>
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/5.jpg" alt="Picture of Mr Chileshe">
                        </div>
                        <span class="staffName">Mr. Levyson Banda</span><br>
                        H.O.D Sciences | Chemistry | Physics | Mathematics <br>
                         <a href="mailto:levysonbanda526@gmail.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> levysonbanda526@gmail.com</a>
                    </div>
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/5.jpg" alt="Picture of Mr Chileshe">
                        </div>
                        <span class="staffName">Miss Beatrice Mukula</span><br>
                        H.O.D Humanities | Commerce | Business Studies | Accounts <br>
                        <a href="mailto:mukula.beatrice@yahoo.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> mukula.beatrice@yahoo.com</a>
                    </div>
                    <div class="staffCard">
                        <div class="staffCardImage showImage">
                            <img src="images/staff/yambayamba.jpeg" alt="Picture of Mr Yambayamba">
                        </div>
                        <span class="staffName">Mr. Lweendo Chibwe Yambayamba</span><br>
                        H.O.D Languages | English | Religious Education <br>
                        <a href="mailto:lweendoyamba@gmail.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> lweendoyamba@gmail.com</a>
                    </div>
                    <span class="staffCardTitle"><h3>Secondary School Teachers</h3></span>
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/5.jpg" alt="Picture of Mr Chileshe">
                        </div>
                        <span class="staffName">Mrs. Dorcas Zulu</span><br>
                        Business Studies | Commerce  <br>
                        <a href="mailto:dchips507@gmail.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> dchips507@gmail.com</a>
                    </div>
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/5.jpg" alt="Picture of Mr Chileshe">
                        </div>
                        <span class="staffName">Mrs. Olipa Mabezere</span><br>
                        School Librarian | Religious Studies | Religious Education <br>
                        <a href="mailto:library@chalotrustschool.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> library@chalotrustschool.com</a>
                    </div>
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/5.jpg" alt="Picture of Mr Chileshe">
                        </div>
                         <span class="staffName">Ms. Mwaka Namuchimba</span><br>
                        Girls' House Parent <br>
                        <a href="mailto:mwakanamuchimba@yahoo.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> mwakanamuchimba@yahoo.com</a>
                    </div>
<!--
TO-DO: REPLACE THE TEACHER WITH A NEW TEACHER
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/5.jpg" alt="Picture of Mr Chileshe">
                        </div>
                         <span class="staffName">Mr. Elvis Mwape</span><br>
                        Sports Co-ordinator | Computer Studies <br>
                        <a href="mailto:sports@chalotrustschool.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> sports@chalotrustschool.com</a>
                    </div>
-->
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/5.jpg" alt="Picture of Mr Chileshe">
                        </div>
                         <span class="staffName">Mr. Prince Kajamba</span><br>
                        Agricultural Science | Intergrated Science| Biology <br>
                        <a href="mailto:princekajamba@yahoo.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> princekajamba@yahoo.com</a>
                    </div>
<!--
TO-DO: REPLACE THE TEACHER WITH A NEW TEACHER
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/5.jpg" alt="Picture of Mr Chileshe">
                        </div>
                         <span class="staffName">Mr. Victor Mafa</span><br>
                        Mathematics | Geography <br>
                        <a href="mailto:victormafa@gmail.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> victormafa@gmail.com</a>
                    </div>
-->
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/5.jpg" alt="Picture of Mr Chileshe">
                        </div>
                         <span class="staffName">Mr. Nephas Sishenyi</span><br>
                        Boys House Parent | Mathematics<br>
                        <a href="mailto:matobanephas@gmail.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> matobanephas@gmail.com</a>
                    </div>
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/5.jpg" alt="Picture of Mr Chileshe">
                        </div>
                         <span class="staffName">Mr. Hilbrah Wilmot Quagraine</span><br>
                        Intergrated Scince | Biology | Physics <br>
                        <a href="mailto:hilbrahwilmot@gmail.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> hilbrahwilmot@gmail.com</a>
                    </div>
<!--
TO-DO: REPLACE THE TEACHER WITH A NEW TEACHER
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/5.jpg" alt="Picture of Mr Chileshe">
                        </div>
                         <span class="staffName">Mr. Lloyd David Simpito</span><br>
                        Social Studies | History <br>
                        <a href="mailto:ld.simpito@gmail.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> ld.simpito@gmail.com</a>
                    </div>
-->
<!--
TO-DO: REPLACE THE TEACHER WITH A NEW TEACHER
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/5.jpg" alt="Picture of Mr Chileshe">
                        </div>
                         <span class="staffName">Mr. Charles Chitundu Sekelet</span><br>
                        English Language | French <br>
                        <a href="mailto:fkcharlie13@gmail.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> fkcharlie13@gmail.com</a>
                    </div>
-->
<!--
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/5.jpg" alt="Picture of Mr Chileshe">
                        </div>
                         <span class="staffName">Mrs. Priviledge Mandivava</span><br>
                        Engish Language | English Literature <br>
                        <a href="mailto:naibepriveledge@gmail.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> naibepriveledge@gmail.com</a>
                    </div>
-->
                </div>
                <div id="Primary" class="tabContent">
                    <span class="staffCardTitle"><h3>Primary School Management</h3></span>
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/5.jpg" alt="Picture of Mr Chileshe">
                        </div>
                        <span class="staffName">Mr. Paul John Chimba</span><br>
                        Acting Principal | Music | English <br>
                        <a href="mailto:principal@chalotrustschool.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> principal@chalotrustschool.com</a>
                    </div> 
<!--
                     <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/6.jpg" alt="Picture of Mr Chileshe">
                        </div>
                        <span class="staffName">Pastor Timothy Dego MacBrown</span><br>
                       School Principal | Geography | Development Studies <br>
                        <a href="mailto:principal@chalotrustschool.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> principal@chalotrustschool.com</a><br>
                        <a href="tel:+260973823302"><i class="fa fa-phone" aria-hidden="true"></i> 097 3823302</a>
                    </div>
-->
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/8.jpg" alt="Picture of Mr Chileshe">
                        </div>
                        <span class="staffName">Mrs. Ernestina Dego MacBrown</span><br>
                        Vice Principal Primary<br>
                        <a href="mailto:priamry@chalotrustschool.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> primary@chalotrustschool.com</a><br>
                        <a href="tel:+260976476637"><i class="fa fa-phone" aria-hidden="true"></i> 097 6476637</a>
                    </div>
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/5.jpg" alt="Picture of Mr Chileshe">
                        </div>
                        <span class="staffName">Majory Masiye</span><br>
                        Senior Teacher Primary | Reception | Baby Class <br>
                        <a href="mailto:majorymasiye@gmail.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> majorymasiye@gmail.com</a>
                    </div>
                    <span class="staffCardTitle"><h3>Primary School Teachers</h3></span>
<!--
TO-DO: REPLACE THE TEACHER WITH A NEW TEACHER
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/5.jpg" alt="Picture of Mr Chileshe">
                        </div>
                        <span class="staffName">Mrs. Fridah Simuyuni</span><br>
                        Grade 4 <br>
                        <a href="mailto:fridahsimuyuni@gmail.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> fridahsimuyuni@gmail.com</a>
                    </div>
-->
<!--
TO-DO: REPLACE THE TEACHER WITH A NEW TEACHER
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/5.jpg" alt="Picture of Mr Chileshe">
                        </div>
                        <span class="staffName">Ms. Mulenga Bwalya</span><br>
                        Grade 3 <br>
                    </div>
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/5.jpg" alt="Picture of Mr Chileshe">
                        </div>
                         <span class="staffName">Ms. Victoria Mulekwa</span><br>
                        Grade 2 <br>
                    </div>
-->
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/5.jpg" alt="Picture of Mr Chileshe">
                        </div>
                         <span class="staffName">Mr. Obed Mwango</span><br>
                        Grade 7 <br>
                        <a href="mailto:obedmwango70@gmail.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> obedmwango70@gmail.com</a>
                    </div>
<!--
TO-DO: REPLACE THE TEACHER WITH A NEW TEACHER
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/5.jpg" alt="Picture of Mr Chileshe">
                        </div>
                         <span class="staffName">Mr. Charles Lungu</span><br>
                        Grade 6 <br>
                        <a href="mailto:charleslungu2015@gmail.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> charleslungu2015@gmail.com</a>
                    </div>
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/5.jpg" alt="Picture of Mr Chileshe">
                        </div>
                         <span class="staffName">Mrs. Mulenga Mwenya Kayesa</span><br>
                        Grade 5 <br>
                        <a href="mailto:m.mwenya02@gmail.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> m.mwenya02@gmail.com</a>
                    </div>
-->
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/5.jpg" alt="Picture of Mr Chileshe">
                        </div>
                         <span class="staffName">Ms. Royce Phiri</span><br>
                        Primary School Houseparent | Grade 1 <br>
                        Contact Details
                    </div>
                </div>
                <div id="Administration" class="tabContent">
                    <span class="staffCardTitle"><h3>Admin</h3></span>
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/4.jpg" alt="Picture of Mr Chileshe">
                        </div>
                        <span class="staffName">Kaoma Zimba</span><br>
                        School Administrator | Human Resources<br>
                        <a href="mailto:admin@chalotrustschool.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> admin@chalotrustschool.com</a> <br>
                        <a href="tel:+260955670399"><i class="fa fa-phone" aria-hidden="true"></i> 095 5670399</a>
                    </div>
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/5.jpg" alt="Picture of Mr Chileshe">
                        </div>
                        <span class="staffName">Mr. James Mwanambiya</span><br>
                        School Accountant<br>
                        <a href="mailto:accounts@chalotrustschool.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> accounts@chalotrustschool.com</a> <br>
                        <a href="tel:+260977333575"><i class="fa fa-phone" aria-hidden="true"></i> 097 7333575</a>
                    </div>
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/5.jpg" alt="Picture of Mr Chileshe">
                        </div>
                        <span class="staffName">Mrs. Waka Silavwe Harawa</span><br>
                        Assistant Accountant<br>
                        <a href="mailto:accounts@chalotrustschool.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> accounts@chalotrustschool.com</a>
                    </div>
<!--
TO-DO: REPLACE THE TEACHER WITH A NEW SECRETARY
                    <div class="staffCard">
                        <div class="staffCardImage">
                            <img src="images/5.jpg" alt="Picture of Mr Chileshe">
                        </div>
                        <span class="staffName">Ms. Castine Kazembe</span><br>
                        School Secretary <br>
                        <a href="mailto:info@chalotrustschool.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> info@chalotrustschool.com</a>
                    </div>
-->
                    
                </div>
            </div> 
        </div>
    </div>

    
</div>              

    <div class="clear"></div> 

</div>



<?php include 'includes/overall/overall_footer.php';?>