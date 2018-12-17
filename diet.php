<?php 
    $title = "Diet | Chalo Trust School";
    include 'core/init.php';
    include 'includes/overall/overall_header.php'; 
    require_once 'helpers/sidebarWidgetBuilder.php';
?>

<div class="mainContent">
    <h1>School Diet</h1>
     <div class="pagetopimgdiv">
        <img src="images/header-diet.jpg" alt="Header Image" style="margin:auto; display: block;">
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
        
        <div class="clear"></div> 
    </div>
    <div class="mainContentRightDiv">
            <div class="infoAreaRightDiv" id="dietRightAreaDiv">
                <h5>Dining and Meals</h5>
<!--
                <div class="infoAreaRightDivImg">
                    <img src="images/1.jpg" alt="pupils in class">
                </div>
-->
                <p>Chalo Trust School is committed to providing all our pupils with a healthy, nutritious meal every day. The food is truly one of the highlights of a students’ time at Chalo. Our Head Chef provides a healthy, balanced diet, and input is regularly sought from the student body and parents about meal options. Menus are designed on a rotational basis and sent home to parents each year.Students with allergies are appropriately accommodated and we can easily cater for a wide range of fussy eaters.</p>
                
                <p>The students typically have 5 meals on a weekday and 4 meals on a weekend when breakfast is served a little late. They have breakfast, Tea break, Lunch, Super and a night snack after prep. The meals includes rice, pasta, chips (french fries), nshima, beef ,rice, chicken, sausages, eggs, T- bone, tea, juice, bread, scones, dough nuts, jungle oats, banana, water melons, oranges. Our goal is to make Chalo truly home away from home and ensure that our students do not miss home in anyway in terms of what they eat.</p>
               
                <table class="boardingTable">
                <thead>
                    <tr> 
                        <th>Day</th>
                        <th>Breakfast</th>
                        <th>Teabreak</th>
                        <th>Lunch</th>
                        <th>Supper</th>
                        <th>Night Snack</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="tableDay" data-title="Day">Monday</td>
                        <td data-title="Breakfast" class="mealsColumns">Oats Porridge, bread toasted/plain  with  butter,jam or syrup. tea with milk</td>
                        <td data-title="Teabreak" class="mealsColumns">Scones, tea with milk</td>
                        <td data-title="Lunch" class="mealsColumns">Nshima, beef stew & vegetables</td>
                        <td data-title="Supper" class="mealsColumns">Rice, Chicken, Vegetables and fruits</td>
                        <td data-title="Night Snack" class="mealsColumns">Sweet buns</td>
                    </tr>
                     <tr>
                        <td class="tableDay" data-title="Day">Tueday</td>
                        <td data-title="Breakfast">Oats Porridge, bread toasted/plain  with  butter,jam or syrup. tea with milk</td>
                        <td data-title="Teabreak">Sweet buns, tea</td>
                        <td data-title="Lunch">Nshima, roasted chicken with vegetables</td>
                        <td data-title="Supper">Lasagna or Spaghetti, mince, vegetables and fruit</td>
                        <td data-title="Night Snack">Scones</td>
                    </tr>
                     <tr>
                        <td class="tableDay" data-title="Day">Wednesday</td>
                        <td data-title="Breakfast">Oats Porridge, bread toasted/plain  with  butter,jam or syrup. tea with milk</td>
                        <td data-title="Teabreak">Scones, tea with milk</td>
                        <td data-title="Lunch">Rice, roasted Chicken with coleslaw and juice</td>
                        <td data-title="Supper">Nshima beef stew and vegetables</td>
                        <td data-title="Night Snack">Sweet buns</td>
                    </tr>
                     <tr>
                        <td class="tableDay" data-title="Day">Thursday</td>
                        <td data-title="Breakfast">Oats Porridge, bread toasted/plain  with  butter,jam or syrup. tea with milk</td>
                        <td data-title="Teabreak">Sweet buns, tea with milk</td>
                        <td data-title="Lunch">Nshima, meat balls and vegetables</td>
                        <td data-title="Supper">Rice, Chicken and Coleslaw</td>
                        <td data-title="Night Snack">Scones</td>
                    </tr>
                     <tr>
                        <td class="tableDay" data-title="Day">Friday</td>
                        <td data-title="Breakfast">Oats Porridge, bread toasted/plain  with  butter,jam or syrup. tea with milk</td>
                        <td data-title="Teabreak">Scones, tea with milk</td>
                        <td data-title="Lunch">Nshima roasted chicken with vegetables</td>
                        <td data-title="Supper">Chips, Hungarian Sausage with coleslaw</td>
                        <td data-title="Night Snack">Biscuits</td>
                    </tr>
                     <tr>
                        <td class="tableDay" data-title="Day">Saturday</td>
                        <td data-title="Breakfast">Cornflakes, toasted or plain bread, egg, baked beans, tea/Cocoa with milk</td>
                        <td data-title="Teabreak">N/A</td>
                        <td data-title="Lunch">Rice Chicken with vegetables and juice</td>
                        <td data-title="Supper">Nshima, T-bone vegetables and fruits</td>
                        <td data-title="Night Snack">Scones</td>
                    </tr>
                     <tr>
                        <td class="tableDay" data-title="Day">Sunday</td>
                        <td data-title="Breakfast">Toasted or plain bread, baked beans, B/fast sausages, tea/cocoa with milk</td>
                        <td data-title="Teabreak">N/A</td>
                        <td data-title="Lunch">Nshima, beef stew with vegetables and fruits</td>
                        <td data-title="Supper">Rice, mince, vegetables and fruits.</td>
                        <td data-title="Night Snack">Biscuits</td>
                    </tr>           
                </tbody>

                </table>
                <h6>Tuck-Shop</h6>
                The school runs a Tuck shop that supplies pupils and the surrounding community with essentials. Pupils are not, however, allowed to keep pocket money on their person. Instead, parents are advised to deposit a sum of  money stipulated by school authorities from time to time. Against this amount, pupils get provisions from the tuck-shop. In order to help them budget, only a limited amount is allowed per week and children who exhaust this allocation, are not allowed to buy for that particular week. The school also provides a snack at break.
                
            </div>
    </div>              
    <div class="clear"></div> 
</div>


<?php include 'includes/overall/overall_footer.php';?>