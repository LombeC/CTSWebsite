<?php 
    $title = "Secondary Fees | Chalo Trust School";
    $metaDescription = "Chalo is relatively cheap compared to other schools performing at the same level. For lower secondary, a boarding student pays K10,500 per term. For upper secondary, a boarding student pays K11,500 per term.";
    $metaKeywords = "Fees at Chalo, Chalo Fees, School Fees";
    include 'core/init.php';
    include 'includes/overall/overall_header.php';
?>
<div class="mainContent">
    <h1 id="top"><?php echo date('Y');?> Secondary School Fees</h1>
    
    <div class="pagetopimgdiv">
        <img src="images/header3.jpg" alt="Header Image" style="margin:auto; display: block;">
    </div>
     
     <div class="clear"></div>
   
    <div class="rightsidebar">
        <div class="sidebarwidget">
            <div class="sidebarExplore">
                
                    <span class="sidebarHeading">
                    <i class="fa fa-globe" aria-hidden="true" style="font-size: 18px;"></i>&nbsp;EXPLORE THIS SECTION</span>
                
            </div>
            <ul class="sidebarExploreList">
                <li class="dropdownsidebaritem">
                    <a href="primary-fees.php"> Primary Fees&nbsp<i class="fa fa-chevron-circle-down rotateOnHover"></i></a>
                    <div class="sidebarExploreSubmenu" style="font-size: 12px;">
                        <span class="sidebarSubHeading"> Boarding</span>
                        <a href="primary-fees.php#grade1boardingfees" style="font-size: 15px; font-weight:bold; padding: 5px;">Grade 1 - 3</a>
                        <a href="primary-fees.php#grade4boardingfees" style="font-size: 15px; font-weight:bold; padding: 5px;">Grade 4 - 7</a>
                        <a href="primary-fees.php#boardingotherfees" style="font-size: 15px; font-weight:bold; padding: 5px;">Other Costs</a>
                        <span class="sidebarSubHeading"> Day School</span>
                        <a href="primary-fees.php#receptiondayschoolfees" style="font-size: 15px; font-weight:bold; padding: 5px;">Reception</a>
                        <a href="primary-fees.php#grade1dayschoolfees" style="font-size: 15px; font-weight:bold; padding: 5px;">Grade 1 - 3</a>
                        <a href="primary-fees.php#grade4dayschoolfees" style="font-size: 15px; font-weight:bold; padding: 5px;">Grade 4 - 7</a>
                        <a href="primary-fees.php#dayschoolotherfees" style="font-size: 15px; font-weight:bold; padding: 5px;">Other Costs</a>
                    </div>
                </li>
                <li class="dropdownsidebaritem">
                    <a href="secondary-fees.php" class="activeSideBarItem">Secondary Fees&nbsp<i class="fa fa-chevron-circle-down rotateOnHover"></i></a>
                    <div class="sidebarExploreSubmenu" style="font-size: 12px;">
                        <span class="sidebarSubHeading"> Boarding</span>
                        <a href="#grade8boardingfees" style="font-size: 15px; font-weight:bold; padding: 5px;">Grade 8 - 9</a>
                        <a href="#grade10boardingfees" style="font-size: 15px; font-weight:bold; padding: 5px;">Grade 10 - 12</a>
                        <a href="#otherboardingfees" style="font-size: 15px; font-weight:bold; padding: 5px;">Other Costs</a>
                        <span class="sidebarSubHeading"> Day School</span>
                        <a href="#grade8dayschoolfees" style="font-size: 15px; font-weight:bold; padding: 5px;">Grade 8 - 9</a>
                        <a href="#grade10dayschoolfees" style="font-size: 15px; font-weight:bold; padding: 5px;">Grade 10 - 12</a>
                        <a href="#otherdayschoolfees" style="font-size: 15px; font-weight:bold; padding: 5px;">Other Costs</a>
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
                <li><span class="bluename"><?php echo $principal_name ?><br></span>
                    School Principal <br>
                    <a href="mailto:principal@chalotrustschool.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> principal@chalotrustschool.com</a>
                </li>
                <li><span class="bluename">Pastor Brian<br></span>   
                    Vice Principal, Secondary School<br>
                    <a href="mailto:secondary@chalotrustschool.com" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i> secondary@chalotrustschool.com</a>
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
        
        <h3 style="text-align:center; color:#aa0000;">Boarding School</h3>
        <div class="feesDiv">
        <h4 id="grade8boardingfees">Junior Secondary (Grade 8 - 9) | New Boarder Students</h4>
        <table class="feesTable">

      <tr>
        <th>Description</th>
        <th>Price (ZMK)</th>
      </tr>
      <tr>
        <td>Application Fee</td>
        <td>K500.00</td>
      </tr>
      <tr>
        <td>Enrolment Fee</td>
        <td>K2,000.00</td>
      </tr>
      <tr>
        <td>Tuition Fee</td>
        <td>K6,000.00</td>
      </tr>
      <tr>
        <td>Boarding Fee</td>
        <td>K16,500.00</td>
      </tr>
      <tr>
        <td>PTA (Term)</td>
        <td>K500.00</td>
      </tr>
      <tr>
        <td>Medical Fund (Per Term)</td>
        <td>K1,000.00</td>
      </tr>
      <tr>
        <td>Maintenance Fee</td>
        <td>K1,600.00</td>
      </tr>
      <tr>
        <td>Library Fund</td>
        <td>K1,500.00</td>
      </tr>
      <tr>
        <td>Local Educational Tour</td>
        <td>K600.00</td>
      </tr>
      <tr>
        <td>Internet Fee</td>
        <td>K500.00</td>
      </tr>
      <tr>
        <td class="totalFees">Total</td>
        <td class="totalFees">K30,700.00</td>
      </tr>

    </table>

    </div>

    <div class="feesDiv">
        <h4>Junior Secondary (Grade 8 - 9) | Returning Boarder Students</h4>
        <table class="feesTable">

      <tr>
        <th>Description</th>
        <th>Price (ZMK)</th>
      </tr>
      <tr>
        <td>Tuition Fee</td>
        <td>K6,000.00</td>
      </tr>
      <tr>
        <td>Boarding Fee</td>
        <td>K16,500.00</td>
      </tr>
      <tr>
        <td>PTA (Term)</td>
        <td>K500.00</td>
      </tr>
      <tr>
        <td>Medical Fund (Per Term)</td>
        <td>K1,000.00</td>
      </tr>
      <tr>
        <td>Maintenance Fee</td>
        <td>K1,600.00</td>
      </tr>
      <tr>
        <td>Library Fund</td>
        <td>K1,500.00</td>
      </tr>
      <tr>
        <td>Local Educational Tour</td>
        <td>K600.00</td>
      </tr>
      <tr>
        <td>Internet Fee</td>
        <td>K500.00</td>
      </tr>
      <tr>
        <td class="totalFees">Total</td>
        <td class="totalFees">K28,200.00</td>
      </tr>
    </table>

    </div>

        <div class="feesDiv">
        <h4 id="grade10boardingfees">Senior Secondary (Grade 10 - 12) | New Boarder Students</h4>
        <table class="feesTable">

      <tr>
        <th>Description</th>
        <th>Price (ZMK)</th>
      </tr>
      <tr>
        <td>Application Fee</td>
        <td>K500.00</td>
      </tr>
      <tr>
        <td>Enrolment Fee</td>
        <td>K2,000.00</td>
      </tr>
      <tr>
        <td>Tuition Fee</td>
        <td>K6,500.00</td>
      </tr>
      <tr>
        <td>Boarding Fee</td>
        <td>K17,000.00</td>
      </tr>
      <tr>
        <td>PTA (Term)</td>
        <td>K500.00</td>
      </tr>
      <tr>
        <td>Medical Fund (Per Term)</td>
        <td>K1,000.00</td>
      </tr>
      <tr>
        <td>Maintenance Fee</td>
        <td>K1,600.00</td>
      </tr>
      <tr>
        <td>Library Fund</td>
        <td>K1,700.00</td>
      </tr>
      <tr>
        <td>Local Educational Tour</td>
        <td>K600.00</td>
      </tr>
      <tr>
        <td>Internet Fee</td>
        <td>K500.00</td>
      </tr>
      <tr>
        <td class="totalFees">Total</td>
        <td class="totalFees">K31,900.00</td>
      </tr>

    </table>

    </div>

    <div class="feesDiv">
        <h4>Senior Secondary (Grade 10 - 12) | Returning Boarder Students</h4>
        <table class="feesTable">

      <tr>
        <th>Description</th>
        <th>Price (ZMK)</th>
      </tr>
      <tr>
        <td>Tuition Fee</td>
        <td>K6,500.00</td>
      </tr>
      <tr>
        <td>Boarding Fee</td>
        <td>K17,000.00</td>
      </tr>
      <tr>
        <td>PTA (Term)</td>
        <td>K500.00</td>
      </tr>
      <tr>
        <td>Medical Fund (Per Term)</td>
        <td>K1,000.00</td>
      </tr>
      <tr>
        <td>Maintenance Fee</td>
        <td>K1,600.00</td>
      </tr>
      <tr>
        <td>Library Fund</td>
        <td>K1,700.00</td>
      </tr>
      <tr>
        <td>Local Educational Tour</td>
        <td>K600.00</td>
      </tr>
      <tr>
        <td>Internet Fee</td>
        <td>K500.00</td>
      </tr>
      <tr>
        <td class="totalFees">Total</td>
        <td class="totalFees">K29,400.00</td>
      </tr>
    </table>

    </div>
    
    <div class="feesDiv">
        <h4 id="otherboardingfees">Other Costs</h4>
        <table class="feesTable">

      <tr>
        <th>Description</th>
        <th>Price (ZMK)</th>   
      </tr>

    <tr>
        <td>Uniform Set (Boys)</td>
        <td>K2,230.00</td>

      </tr>
        <tr>
        <td>Uniform Set (Girls)</td>
        <td>K2,520.00</td>

      </tr>
    
    </table>

    </div>
    <br>
    
    <h3 style="text-align:center; color:#aa0000">Day School</h3>
    
        <div class="feesDiv">
        <h4 id="grade8dayschoolfees">Junior Secondary (Grade 8 - 9) | New Day School Students</h4>
        <table class="feesTable">

      <tr>
        <th>Description</th>
        <th>Price (ZMK)</th>
      </tr>
      <tr>
        <td>Application Fee</td>
        <td>K500.00</td>
      </tr>
      <tr>
        <td>Enrolment Fee</td>
        <td>K2,000.00</td>
      </tr>
      <tr>
        <td>Tuition Fee</td>
        <td>K6,000.00</td>
      </tr>
      <tr>
        <td>PTA (Term)</td>
        <td>K500.00</td>
      </tr>
      <tr>
        <td>Medical Fund (Per Term)</td>
        <td>K1,000.00</td>
      </tr>
      <tr>
        <td>Maintenance Fee</td>
        <td>K1,600.00</td>
      </tr>
      <tr>
        <td>Library Fund</td>
        <td>K1,500.00</td>
      </tr>
      <tr>
        <td>Local Educational Tour</td>
        <td>K600.00</td>
      </tr>
      <tr>
        <td>Internet Fee</td>
        <td>K500.00</td>
      </tr>
      <tr>
        <td class="totalFees">Total</td>
        <td class="totalFees">K14,200.00</td>
      </tr>

    </table>

    </div>

    <div class="feesDiv">
        <h4>Junior Secondary (Grade 8 - 9) | Returning Day School Students</h4>
        <table class="feesTable">

      <tr>
        <th>Description</th>
        <th>Price (ZMK)</th>
      </tr>
      <tr>
        <td>Tuition Fee</td>
        <td>K6,000.00</td>
      </tr>
      <tr>
        <td>PTA (Term)</td>
        <td>K500.00</td>
      </tr>
      <tr>
        <td>Medical Fund (Per Term)</td>
        <td>K1,000.00</td>
      </tr>
      <tr>
        <td>Maintenance Fee</td>
        <td>K1,600.00</td>
      </tr>
      <tr>
        <td>Library Fund</td>
        <td>K1,500.00</td>
      </tr>
      <tr>
        <td>Local Educational Tour</td>
        <td>K600.00</td>
      </tr>
      <tr>
        <td>Internet Fee</td>
        <td>K500.00</td>
      </tr>
      <tr>
        <td class="totalFees">Total</td>
        <td class="totalFees">K11,700.00</td>
      </tr>
    </table>

    </div>

        <div class="feesDiv">
        <h4 id="grade10dayschoolfees">Senior Secondary (Grade 10 - 12) | New Day School Students</h4>
        <table class="feesTable">

      <tr>
        <th>Description</th>
        <th>Price (ZMK)</th>
      </tr>
      <tr>
        <td>Application Fee</td>
        <td>K500.00</td>
      </tr>
      <tr>
        <td>Enrolment Fee</td>
        <td>K2,000.00</td>
      </tr>
      <tr>
        <td>Tuition Fee</td>
        <td>K6,500.00</td>
      </tr>
      <tr>
        <td>PTA (Term)</td>
        <td>K500.00</td>
      </tr>
      <tr>
        <td>Medical Fund (Per Term)</td>
        <td>K1,000.00</td>
      </tr>
      <tr>
        <td>Maintenance Fee</td>
        <td>K1,600.00</td>
      </tr>
      <tr>
        <td>Library Fund</td>
        <td>K1,700.00</td>
      </tr>
      <tr>
        <td>Local Educational Tour</td>
        <td>K600.00</td>
      </tr>
      <tr>
        <td>Internet Fee</td>
        <td>K500.00</td>
      </tr>
      <tr>
        <td class="totalFees">Total</td>
        <td class="totalFees">K14,900.00</td>
      </tr>

    </table>

    </div>

    <div class="feesDiv">
        <h4>Senior Secondary (Grade 10 - 12) | Returning Day School Students</h4>
        <table class="feesTable">

      <tr>
        <th>Description</th>
        <th>Price (ZMK)</th>
      </tr>
      <tr>
        <td>Tuition Fee</td>
        <td>K6,500.00</td>
      </tr>
      <tr>
        <td>PTA (Term)</td>
        <td>K500.00</td>
      </tr>
      <tr>
        <td>Medical Fund (Per Term)</td>
        <td>K1,000.00</td>
      </tr>
      <tr>
        <td>Maintenance Fee</td>
        <td>K1,600.00</td>
      </tr>
      <tr>
        <td>Library Fund</td>
        <td>K1,700.00</td>
      </tr>
      <tr>
        <td>Local Educational Tour</td>
        <td>K600.00</td>
      </tr>
      <tr>
        <td>Internet Fee</td>
        <td>K500.00</td>
      </tr>
      <tr>
        <td class="totalFees">Total</td>
        <td class="totalFees">K12,400.00</td>
      </tr>
    </table>

    </div>
    
    <div class="feesDiv">
        <h4 id="otherdayschoolfees">Other Costs</h4>
        <table class="feesTable">

      <tr>
        <th>Description</th>
        <th>Price (ZMK)</th>   
      </tr>
     <tr>
        <td>Uniform Set (Boys)</td>
        <td>K2,230.00</td>

      </tr>
        <tr>
        <td>Uniform Set (Girls)</td>
        <td>K2,520.00</td>

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