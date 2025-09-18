<?php 
    $title = "Primary Fees | Chalo Trust School";
    $metaDescription = "Chalo is relatively cheap compared to other schools performing at the same level. For lower primary, a boarding student pays K7,000 per term. For upper primary, a boarding student pays K8,500 per term.";
    $metaKeywords = "Fees at Chalo, Chalo Fees, School Fees";
    include 'core/init.php';
    include 'includes/overall/overall_header.php';
?>
<div class="mainContent">
            <h1 id="top"><?php echo date('Y');?> Primary School Fees</h1>
    <div class="pagetopimgdiv">
        <img src="images/header5.jpg" alt="Header Image" style="margin:auto; display: block;">
    </div>
     
    <div class="rightsidebar">
        <div class="sidebarwidget">
            <div class="sidebarExplore">
                <span class="sidebarHeading">
                <i class="fa fa-globe" aria-hidden="true" style="font-size: 18px;"></i>&nbsp;EXPLORE THIS SECTION</span>
            </div>
            <ul class="sidebarExploreList">
                <li class="dropdownsidebaritem">
                    <a href="primary-fees.php" class="activeSideBarItem"> Primary Fees&nbsp<i class="fa fa-chevron-circle-down rotateOnHover"></i></a>
                    <div class="sidebarExploreSubmenu" style="font-size: 12px;">
                        <span class="sidebarSubHeading"> Boarding</span>
                        <a href="#grade1boardingfees" style="font-size: 15px; font-weight:bold; padding: 5px;">Grade 1 - 3</a>
                        <a href="#grade4boardingfees" style="font-size: 15px; font-weight:bold; padding: 5px;">Grade 4 - 7</a>
                        <a href="#boardingotherfees" style="font-size: 15px; font-weight:bold; padding: 5px;">Other Costs</a>
                        <span class="sidebarSubHeading"> Day School</span>
                        <a href="#receptiondayschoolfees" style="font-size: 15px; font-weight:bold; padding: 5px;">Reception</a>
                        <a href="#grade1dayschoolfees" style="font-size: 15px; font-weight:bold; padding: 5px;">Grade 1 - 3</a>
                        <a href="#grade4dayschoolfees" style="font-size: 15px; font-weight:bold; padding: 5px;">Grade 4 - 7</a>
                        <a href="#dayschoolotherfees" style="font-size: 15px; font-weight:bold; padding: 5px;">Other Costs</a>
                    </div>
                </li>
                <li class="dropdownsidebaritem">
                    <a href="secondary-fees.php">Secondary Fees&nbsp<i class="fa fa-chevron-circle-down rotateOnHover"></i></a>
                    <div class="sidebarExploreSubmenu" style="font-size: 12px;">
                        <span class="sidebarSubHeading"> Boarding</span>
                        <a href="secondary-fees.php#grade8boardingfees" style="font-size: 15px; font-weight:bold; padding: 5px;">Grade 8 - 9</a>
                        <a href="secondary-fees.php#grade10boardingfees" style="font-size: 15px; font-weight:bold; padding: 5px;">Grade 10 - 12</a>
                        <a href="secondary-fees.php#otherboardingfees" style="font-size: 15px; font-weight:bold; padding: 5px;">Other Costs</a>
                        <span class="sidebarSubHeading"> Day School</span>
                        <a href="secondary-fees.php#grade8dayschoolfees" style="font-size: 15px; font-weight:bold; padding: 5px;">Grade 8 - 9</a>
                        <a href="secondary-fees.php#grade10dayschoolfees" style="font-size: 15px; font-weight:bold; padding: 5px;">Grade 10 - 12</a>
                        <a href="secondary-fees.php#otherdayschoolfees" style="font-size: 15px; font-weight:bold; padding: 5px;">Other Costs</a>
                    </div>
                </li>
                <li><a href="admission-form.php">Admission Forms</a></li>
                <li><a href="fee-policy.php">School Fee Policy</a></li>
            </ul>
        </div>
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
                <li><span class="bluename">Mr. Lombe Chileshe<br></span>
                    Technical Manager <br>
                    <a href="mailto:info@chalotrustschool.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> info@chalotrustschool.com</a>
                </li>
                <li><span class="bluename"><?php echo $principal_name ?><br></span>
                    School Principal <br>
                   <a href="mailto:principal@chalotrustschool.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> principal@chalotrustschool.com</a>
                </li>
                
                <li><span class="bluename">Mrs. Dego<br></span>
                    Vice Principal, Primary School<br>
                    <a href="mailto:primary@chalotrustschool.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> primary@chalotrustschool.com</a>
                </li>
                <li><span class="bluename">Accounts Department<br></span> 
                    <a href="mailto:accounts@chalotrustschool.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> accounts@chalotrustschool.com</a>
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
    
    
    <div class="mainFeeDiv">
            <h3 style="text-align:center; color:#aa0000">Nursery</h3>

            <div class="feesDiv">
            <h4 id="nurseryfees">Nursery | New Students</h4>
            <table class="feesTable">

              <tr>
                <th>Description</th>
                <th>Price (ZMK)</th>
              </tr>

              <tr>
                <td>Tuition Fees</td>
                <td>K4,000.00</td>
              </tr>
              <tr>
                <td>Enrolment (one-off)</td>
                <td>K1,500.00</td>
              </tr>
              <tr>
                <td>Development Fees</td>
                <td>K300.00</td>
              </tr>
              <tr>
                <td class="totalFees">Total</td>
                <td class="totalFees">K5,800.00</td>
              </tr>
            </table>

            </div>

            <div class="feesDiv">
                <h4>Nursery | Returning Students</h4>
                <table class="feesTable">

              <tr>
                <th>Description</th>
                <th>Price (ZMK)</th>
              </tr>
              <tr>
                <td>Tuition Fees</td>
                <td>K4,000.00</td>
              </tr>
              <tr>
                <td class="totalFees">Total</td>
                <td class="totalFees">K4,000.00</td>
              </tr>
            </table>

            </div>

            <br>
            <h3 style="text-align:center; color:#aa0000">Boarding School</h3>

            <div class="feesDiv">
            <h4 id="grade1boardingfees">Lower Primary (Grade 1 - 3) | New Students</h4>
            <table class="feesTable">

              <tr>
                <th>Description</th>
                <th>Price (ZMK)</th>
              </tr>

              <tr>
                <td>Tuition Fees</td>
                <td>K4,500.00</td>
              </tr>
              <tr>
                <td>Enrolment (one-off)</td>
                <td>K1,500.00</td>
              </tr>
              <tr>
                <td>Development Fees</td>
                <td>K300.00</td>
              </tr>
              <tr>
                <td>Boarding Fees</td>
                <td>K23,900.00</td>
              </tr>
              <tr>
                <td class="totalFees">Total</td>
                <td class="totalFees">K30,200.00</td>
              </tr>
            </table>

            </div>

            <div class="feesDiv">
                <h4>Lower Primary (Grade 1 - 3) | Returning Students</h4>
                <table class="feesTable">

              <tr>
                <th>Description</th>
                <th>Price (ZMK)</th>
              </tr>
              <tr>
                <td>Tuition Fees</td>
                <td>K4,500.00</td>
              </tr>
              <tr>
                <td>Boarding Fees</td>
                <td>K23,900.00</td>
              </tr>
              <tr>
                <td class="totalFees">Total</td>
                <td class="totalFees">K28,400.00</td>
              </tr>
            </table>

            </div>

                <div class="feesDiv">
                <h4 id="grade4boardingfees">Upper Primary (Grade 4 - 7) | New Students</h4>
                <table class="feesTable">

              <tr>
                <th>Description</th>
                <th>Price (ZMK)</th>
              </tr>

              <tr>
                <td>Tuition Fees</td>
                <td>K5,000.00</td>
              </tr>
              <tr>
                <td>Enrolment (one-off)</td>
                <td>K1,500.00</td>
              </tr>
              <tr>
                <td>Development Fees</td>
                <td>K500.00</td>
              </tr>
              <tr>
                <td>Boarding Fees</td>
                <td>K25,500.00</td>
              </tr>
              <tr>
                <td class="totalFees">Total</td>
                <td class="totalFees">K32,500.00</td>
              </tr>

            </table>

            </div>

            <div class="feesDiv">
                <h4>Upper Primary (Grade 4 - 7) | Returning Students</h4>
                <table class="feesTable">

              <tr>
                <th>Description</th>
                <th>Price (ZMK)</th>
              </tr>
              <tr>
                <td>Tuition Fees</td>
                <td>K5,000.00</td>
              </tr>
              <tr>
                <td>Boarding Fees</td>
                <td>K25,500.00</td>
              </tr>
              <tr>
                <td class="totalFees">Total</td>
                <td class="totalFees">K30,500.00</td>
              </tr>
            </table>

            </div>

            <div class="feesDiv">
                <h4 id="boardingotherfees">Other Costs</h4>
                <table class="feesTable">

              <tr>
                <th>Description</th>
                <th>Price (ZMK)</th>   
              </tr>
    
            <tr>
                <td>Uniform Set (Boys)</td>
                <td>K1,060.00</td>

              </tr>
            <tr>
                <td>Uniform Set (Girls)</td>
                <td>K1,140.00</td>

              </tr>    

            </table>

            </div>
            <br>
            
            <h3 style="text-align:center; color:#aa0000">Day School</h3>


            <div class="feesDiv">
                <h4 id="grade1dayschoolfees">Lower Primary (Grade 1 - 3) | New Students</h4>
                <table class="feesTable">

              <tr>
                <th>Description</th>
                <th>Price (ZMK)</th>
              </tr>
              <tr>
                <td>Tuition Fees</td>
                <td>K4,500.00</td>
              </tr>
              <tr>
                <td>Enrolment (one-off)</td>
                <td>K1,500.00</td>
              </tr>
              <tr>
                <td>Development Fees</td>
                <td>K300.00</td>
              </tr>
              <tr>
                <td class="totalFees">Total</td>
                <td class="totalFees">K6,300.00</td>
              </tr>
            </table>

            </div>

            <div class="feesDiv">
                <h4>Lower Primary (Grade 1 - 3) | Returning Students</h4>
                <table class="feesTable">

              <tr>
                <th>Description</th>
                <th>Price (ZMK)</th>
              </tr>
              <tr>
                <td>Tuition Fees</td>
                <td>K4,500.00</td>
              </tr>
              <tr>
                <td class="totalFees">Total</td>
                <td class="totalFees">K4,500.00</td>
              </tr>
            </table>

            </div>

                <div class="feesDiv">
                <h4 id="grade4dayschoolfees">Upper Primary (Grade 4 - 7) | New Students</h4>
                <table class="feesTable">

              <tr>
                <th>Description</th>
                <th>Price (ZMK)</th>
              </tr>

              <tr>
                <td>Tuition Fees</td>
                <td>K5,000.00</td>
              </tr>
              <tr>
                <td>Enrolment (one-off)</td>
                <td>K1,500.00</td>
              </tr>
              <tr>
                <td>Development Fees</td>
                <td>K500.00</td>
              </tr>
              <tr>
                <td class="totalFees">Total</td>
                <td class="totalFees">K7,000.00</td>
              </tr>

            </table>

            </div>

            <div class="feesDiv">
                <h4>Upper Primary (Grade 4 - 7) | Returning Students</h4>
                <table class="feesTable">

              <tr>
                <th>Description</th>
                <th>Price (ZMK)</th>
              </tr>
              <tr>
                <td>Tuition Fees</td>
                <td>K5,000.00</td>
              </tr>
              <tr>
                <td class="totalFees">Total</td>
                <td class="totalFees">K5,000.00</td>
              </tr>
            </table>

            </div>

            <div class="feesDiv">
                <h4 id="dayschoolotherfees">Other Costs</h4>
                <table class="feesTable">

              <tr>
                <th>Description</th>
                <th>Price (ZMK)</th>   
              </tr>
            <tr>
                <td>Uniform Set (Boys)</td>
                <td>K1,060.00</td>

              </tr>
            <tr>
                <td>Uniform Set (Girls)</td>
                <td>K1,140.00</td>

              </tr>

            <tr>
                <td>Transport (Optional))</td>
                <td>K1,550.00</td>

              </tr>
            <tr>
                <td>Lunch & Tea Break (Optional)</td>
                <td>K1,250.00</td>

              </tr>


            </table>

        </div>
    </div>

    <a href="#top" class="backtotop">BACK TO TOP</a>

</div>
<?php include 'includes/overall/overall_footer.php';?>

