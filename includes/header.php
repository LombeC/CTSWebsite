<div id="toptop" style="display:none;"></div>
    <div class="preheader">  
        <style>
            #preheader-facebook-icon{
                font-size: 19px;
            }
            #preheader-twitter-icon{
                font-size: 19px;
            }
            #preheader-search-icon{
                font-size: 17px;
                padding-top: 3px;
            }
            #preheader-mail-icon{
                font-size: 16px;
                margin: 0;
            }
            #preheader-home-icon{
                font-size: 19px;
            }
           
            @media screen and (max-width: 768px){
                #preheader-mail-icon{
                font-size: 23.5px;
                margin-top: 2px;
                margin-left: -2px;
                }
                #preheader-home-icon{
                    font-size: 27px;
                }
            }
        </style>
<!--        <button class="icon" id="mobileMenuButton">&nbsp;<i class="fa fa-bars" aria-hidden="true" style="font-size: 18px;"><span class="nav-toggle-label" >Toggle site navigation</span></i></button>-->
        <button class="c-hamburger c-hamburger--htx icon"  id="mobileMenuButton">
             <span>toggle menu</span>
        </button>
        <a href="#" class="preheaderbutton hideOnMobile">Portal Login</a> 
        <a href="https://www.facebook.com/ChaloTrustschool/" target="_blank" class="hideOnMobile"><i class="fa fa-facebook-official w3-hover-opacity hideOnMobile" id="preheader-facebook-icon"></i></a>
        <a href="https://twitter.com/Chalo_School" target="_blank" class="hideOnMobile" ><i class="fa fa-twitter w3-hover-opacity hideOnMobile" id="preheader-twitter-icon"></i></a>
<!--        <button id="searchButton" class="hideOnMobile"><i class="fa fa-search w3-hover-opacity" aria-hidden="true" id="preheader-search-icon"></i></button>  -->
        <a href="mailto:info@chalotrustschool.com" ><i class="fa fa-envelope w3-hover-opacity" aria-hidden="true" id="preheader-mail-icon"></i></a>
        <a href="/" ><i class="fa fa-home w3-hover-opacity hideOnMobile" aria-hidden="true" id="preheader-home-icon"></i></a>    
    </div>      

    <div class="searchDiv">
        <label for="searchtext" class="searchLabel">Enter Search Below</label>
       <input name="search" id="searchtext" value="" autocomplete="on" placeholder="Search..." type="text" class="searchForm">
    </div>

    <header id="schoolHeader" tabindex="2" >
        
<!--        <div class="clear"></div>-->
        <div class="headerText">
<!--            <div class="headerLogo">-->
                <a href="/"><img src="images/logo8.png" alt="logo" height="250px" width="200px"></a>
<!--            </div>-->
            <h1> CHALO TRUST SCHOOL</h1>
            <p >Dedication, Commitment, Excellence</p>          
        </div>
        <div class="clear"></div>
        
            <?php include 'includes/menu.php'; ?>
            <div class="clear"></div>
    </header>
        