<?php $title="Chalo Trust School" ; include 'core/init.php'; include 'includes/overall/overall_header.php'; require_once 'helpers/homepageEventsBuilder.php'; ?>
<style>
	h2,h3,h4,h5,h6{font-family:"Segoe UI",Arial,sans-serif;font-weight:400;margin:0px 0}nav{animation:none;}@media screen and (max-width: 768px){nav{animation:none}}
</style>
<div class="mainContent">
	<ul id="lightSlider">
        <li>
			<div class="sliderNewsItem imgZoomInHoverEffectFast">
				<a href="news/term1-comes-to-a-close.php">
					<div class="leftSliderOverlay"></div>
					<img src="images/index/news-section/schoolsout.jpg" alt="Link to story about new chalo trust school holidyays">
					<div class="rightSliderOverlay"></div>
					<div class="slideshowHeadline">Term 1 Comes to a Close</div>
					
				</a>
			</div>
	   </li>
        <li>
			<div class="sliderNewsItem imgZoomInHoverEffectFast">
				<a href="news/chalo-to-open-on-monday-22nd-January.php">
					<div class="leftSliderOverlay"></div>
					<img src="images/index/news-section/Term1-Back-To-School-Header.jpg" alt="Link to story about new chalo trust school website">
					<div class="rightSliderOverlay"></div>
					<div class="slideshowHeadline">Chalo to open on Monday 22nd January</div>
					<div class="miniHeadline">Term 1 - 2018</div>
				</a>
			</div>
	</li>
<!--
		<li>
			<div class="sliderNewsItem imgZoomInHoverEffectFast">
				<a href="news/welcome-to-our-new-site.php">
					<div class="leftSliderOverlay"></div>
					<img src="images/index/newwebsite.png" alt="Link to story about new chalo trust school website">
					<div class="rightSliderOverlay"></div>
					<div class="slideshowHeadline">Welcome to Our Brand New Website</div>
					<div class="miniHeadline">CTS launches a brand new and improved website!</div>
				</a>
			</div>
		</li>
-->
<!--
		<li>
			<div class="sliderNewsItem imgZoomInHoverEffectFast">
				<a href="news/chalo-holds-annual-talent-show.php">
					<div class="leftSliderOverlay"></div>
					<img src="images/index/talentshownewspic.jpg" alt="picture from Chalo talent show">
					<div class="rightSliderOverlay"></div>
					<div class="slideshowHeadline">Chalo hosts its 13th Talent Show</div>
					<div class="miniHeadline">Students deliver afternoon of wonderful performances</div>
				</a>
			</div>
		</li>
-->
	</ul>
	<div class="indexContainer grayContainer welcomeContainer">
		<div class="welcome"> <span class="bigWelcome">WELCOME TO<br>OUR WORLD</span>  <span class="introWelcome"><div id="introTypeIt"></div> </span>
			<div class="enrollNowButtonDiv"> <a href="about.php" role="button" class="enrollNowButton greenButton hoverableButton"><span>Learn More</span></a>  <a href="admission-form.php" role="button" class="enrollNowButton blueButton hoverableButton"><span>Enroll Now</span></a>
			</div>
		</div>
	</div>
	<div class="indexContainer whiteContainer flexContainer">
		<div class="flexContainerBox flexContainerBox1">
			<div class="flexContainerBoxBorderRight"></div>
			<div class="flexContainerBoxHeading"> <a href="general-gallery.php">WORLD CLASS <span style="color:#111"><br>FACILITIES</span></a>
			</div>
			<div class="flexContainerBoxTextBox">
				<ul>
					<li>Room & Board</li>
					<li>Well-Stocked Libraries</li>
					<li>Internet-Connected I.C.T Lab</li>
					<li>Modern Science Lab</li>
					<li>Sports Facilities</li>
				</ul>
			</div>
		</div>
		<div class="flexContainerBox flexContainerBox2">
			<div class="flexContainerBoxBorderRight"></div>
			<div class="flexContainerBoxHeading"> <a href="academics.php">QUALITY <span style="color:#111"><br>EDUCATION</span></a>
			</div>
			<div class="flexContainerBoxTextBox">
				<ul>
					<li>Cambridge IGCSE & GCEs</li>
					<li>10+ Years of Premier Education</li>
					<li>Valuable Resources for Students</li>
					<li>Student Oriented Learning</li>
					<li>Excellent Teaching Staff</li>
				</ul>
			</div>
		</div>
		<div class="flexContainerBox flexContainerBox3">
			<div class="flexContainerBoxBorderRight"></div>
			<div class="flexContainerBoxHeading"> <a href="academics.php">STUDENT <span style="color:#111"><br>BENEFITS</span></a>
			</div>
			<div class="flexContainerBoxTextBox">
				<ul>
					<li>Small Class Sizes</li>
					<li>Low Teacher:Student Ratio</li>
					<li>Maximum Contact with Teachers</li>
					<li>Mentorship Programs</li>
					<li>Student Counselling</li>
				</ul>
			</div>
		</div>
		<div class="flexContainerBox flexContainerBox4">
			<div class="flexContainerBoxBorderRight"></div>
			<div class="flexContainerBoxHeading"> <a href="about.php">MULTIFACETED <span style="color:#111"><br>APPROACH</span></a>
			</div>
			<div class="flexContainerBoxTextBox">
				<ul>
					<li>Innovative Teaching Methods</li>
					<li>Use of Technology in Learning</li>
					<li>Developing the "Whole" Child</li>
					<li>Nurturing Talents & Gifts</li>
					<li>Extra-Curricular Program</li>
				</ul>
			</div>
		</div>
		<div class="clear"></div>
	</div>
	<div class="indexContainer grayContainer" id="homepagetab">
		<div class="mobileTabAlternative">
			<h2>FEATURES</h2>
			<div class="whiteline"></div>
			<div class="accordion"> <span style="text-align: center; color: #aa0000; font-size: 1.2em; font-weight: 700;">Academics</span>
			</div>
			<div class="panel" style="background: #ededed;">
				<div class="tabsflexContainer">
					<div class="homepageTabContentBlock tabsflexContainerBox">
						<figure class="roundDiv ">
							<a href="primary.php">
								<img src="images/index/header8.jpg">
								<figcaption>Primary</figcaption>
							</a>
						</figure>
					</div>
					<div class="homepageTabContentBlock tabsflexContainerBox">
						<figure class="roundDiv">
							<a href="lower-secondary.php">
								<img src="images/index/header9.jpg">
								<figcaption>Lower Secondary</figcaption>
							</a>
						</figure>
					</div>
					<div class="homepageTabContentBlock tabsflexContainerBox">
						<figure class="roundDiv">
							<a href="upper-secondary.php">
								<img src="images/index/header10.jpg">
								<figcaption>Upper Secondary</figcaption>
							</a>
						</figure>
					</div>
					<div class="homepageTabContentBlock tabsflexContainerBox">
						<figure class="roundDiv">
							<a href="library-ict-lab.php">
								<img src="images/index/header6.jpg">
								<figcaption>Library & ICT Labs</figcaption>
							</a>
						</figure>
					</div>
				</div>
			</div>
			<div class="accordion"> <span style="text-align: center; color: #aa0000; font-size: 1.2em; font-weight: 700;">School Life</span>
			</div>
			<div class="panel" style="background: #ededed;">
				<div class="tabsflexContainer">
					<div class="homepageTabContentBlock tabsflexContainerBox">
						<figure class="roundDiv">
							<a href="boarding.php">
								<img src="images/index/girls-hostel.jpg">
								<figcaption>Boarding School</figcaption>
							</a>
						</figure>
					</div>
					<div class="homepageTabContentBlock tabsflexContainerBox">
						<figure class="roundDiv">
							<a href="extra-curricular.php">
								<img src="images/jetsFair.jpg">
								<figcaption>Extra Curricular</figcaption>
							</a>
						</figure>
					</div>
					<div class="homepageTabContentBlock tabsflexContainerBox">
						<figure class="roundDiv">
							<a href="sports.php">
								<img src="images/index/7.jpg">
								<figcaption>Sports</figcaption>
							</a>
						</figure>
					</div>
					<div class="homepageTabContentBlock tabsflexContainerBox">
						<figure class="roundDiv">
							<a href="entertainment.php">
								<img src="images/index/header7.jpg">
								<figcaption>Entertainment</figcaption>
							</a>
						</figure>
					</div>
				</div>
			</div>
			<div class="accordion"> <span style="text-align: center; color: #aa0000; font-size: 1.2em; font-weight: 600;">Spotlight</span>
			</div>
			<div class="panel" style="background: #ededed;">
				<div class="tabsflexContainer">
					<div class="homepageTabContentBlock tabsflexContainerBox">
						<figure class="roundDiv">
							<a href="general-gallery.php">
								<img src="images/index/1.jpg">
								<figcaption>Gallery</figcaption>
							</a>
						</figure>
					</div>
					<div class="homepageTabContentBlock tabsflexContainerBox">
						<figure class="roundDiv">
							<a href="calendar.php">
								<img src="images/index/calendar.jpg">
								<figcaption>Calendar</figcaption>
							</a>
						</figure>
					</div>
					<div class="homepageTabContentBlock tabsflexContainerBox">
						<figure class="roundDiv">
							<a href="about.php">
								<img src="images/index/header1.jpg">
								<figcaption>About Chalo</figcaption>
							</a>
						</figure>
					</div>
					<div class="homepageTabContentBlock tabsflexContainerBox">
						<figure class="roundDiv">
							<a href="day-in-life.php">
								<img src="images/index/header-diet.jpg">
								<figcaption>Student Life</figcaption>
							</a>
						</figure>
					</div>
				</div>
			</div>
		</div>
		<div class="tabDiv">
			<nav class="tab">
				<ul class="tabMenu">
					<li><a class="tablinks activeTab" onclick=" return openTab(event, 'Academics', 'flex')">Academics</a>
					</li>
					<li><a class="tablinks" onclick="return openTab(event, 'ChaloLife', 'flex')">Chalo Life</a>
					</li>
					<li><a class="tablinks lastChild" onclick="return openTab(event, 'Spotlight', 'flex')">Spotlight</a>
					</li>
				</ul>
			</nav>
			<div id="Academics" class="tabContent default tabsflexContainer">
				<div class="homepageTabContentBlock tabsflexContainerBox">
					<figure class="roundDiv ">
						<a href="primary.php">
							<img src="images/index/primary-index.jpg">
							<figcaption>Primary</figcaption>
						</a>
					</figure>
				</div>
				<div class="homepageTabContentBlock tabsflexContainerBox">
					<figure class="roundDiv">
						<a href="lower-secondary.php">
							<img src="images/index/lower-secondary-index.jpg">
							<figcaption>Lower Secondary</figcaption>
						</a>
					</figure>
				</div>
				<div class="homepageTabContentBlock tabsflexContainerBox">
					<figure class="roundDiv">
						<a href="upper-secondary.php">
							<img src="images/index/upper-secondary-index.jpg">
							<figcaption>Upper Secondary</figcaption>
						</a>
					</figure>
				</div>
				<div class="homepageTabContentBlock tabsflexContainerBox">
					<figure class="roundDiv">
						<a href="library-ict-lab.php">
							<img src="images/index/library-index.jpg">
							<figcaption>Library & ICT Labs</figcaption>
						</a>
					</figure>
				</div>
			</div>
			<div id="ChaloLife" class="tabContent tabsflexContainer">
				<div class="homepageTabContentBlock tabsflexContainerBox">
					<figure class="roundDiv">
						<a href="boarding.php">
							<img src="images/index/girls-hostel.jpg">
							<figcaption>Boarding School</figcaption>
						</a>
					</figure>
				</div>
				<div class="homepageTabContentBlock tabsflexContainerBox">
					<figure class="roundDiv">
						<a href="extra-curricular.php">
							<img src="images/jetsFair.jpg">
							<figcaption>Extra Curricular</figcaption>
						</a>
					</figure>
				</div>
				<div class="homepageTabContentBlock tabsflexContainerBox">
					<figure class="roundDiv">
						<a href="sports.php">
							<img src="images/index/7.jpg">
							<figcaption>Sports</figcaption>
						</a>
					</figure>
				</div>
				<div class="homepageTabContentBlock tabsflexContainerBox">
					<figure class="roundDiv">
						<a href="entertainment.php">
							<img src="images/index/header7.jpg">
							<figcaption>Entertainment</figcaption>
						</a>
					</figure>
				</div>
			</div>
			<div id="Spotlight" class="tabContent tabsflexContainer">
				<div class="homepageTabContentBlock tabsflexContainerBox">
					<figure class="roundDiv">
						<a href="general-gallery.php">
							<img src="images/index/1.jpg">
							<figcaption>Gallery</figcaption>
						</a>
					</figure>
				</div>
				<div class="homepageTabContentBlock tabsflexContainerBox">
					<figure class="roundDiv">
						<a href="calendar.php">
							<img src="images/index/calendar.jpg">
							<figcaption>Calendar</figcaption>
						</a>
					</figure>
				</div>
				<div class="homepageTabContentBlock tabsflexContainerBox">
					<figure class="roundDiv">
						<a href="about.php">
							<img src="images/index/header1.jpg">
							<figcaption>About Chalo</figcaption>
						</a>
					</figure>
				</div>
				<div class="homepageTabContentBlock tabsflexContainerBox">
					<figure class="roundDiv">
						<a href="day-in-life.php">
							<img src="images/index/header-diet.jpg">
							<figcaption>Student Life</figcaption>
						</a>
					</figure>
				</div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
	<div class="indexContainer whiteContainer">
		<br>
		<h2><a href="calendar">Events</a></h2> 
		<?php createHomepageEventsDiv(); ?>
		<div class="clear"></div>
	</div>
	<div class="indexContainer grayContainer" id="socialMediaContainer">
		<div class="socialContainerHeaderAndIcons">Chalo<b>Social</b>&nbsp;
			<br> <a href="https://www.facebook.com/ChaloTrustschool/" target="_blank"><i class="fa fa-facebook-official w3-hover-opacity" aria-hidden="true" ></i></a>  <a href="https://twitter.com/Chalo_School" target="_blank"><i class="fa fa-twitter w3-hover-opacity" aria-hidden="true" ></i></a>  <a href="https://www.youtube.com/channel/UC_0yaO3T_yGds-xS4LnDUAA" target="_blank"><i class="fa fa-youtube w3-hover-opacity" aria-hidden="true"></i></a>
		</div>
	</div>
	<section class="indexContainer blackContainer home-give">
		<div class="giveNowTextBox">
			<div>
				<h2 class="h2"><strong>Giving Opportunities</strong></h2>
				<p>The <a href="http://www.kucetekelafoundation.org/" target="_blank">Kucetekela Foundation</a> is a non-profit organization which provides scholarships to Zambian boys and girls who are academically promising but financially disadvantaged to attend excellent secondary schools like Chalo. This scholarship, combined with a system of mentoring, will endow the children with outstanding education and guidance which will empower them to contribute and compete successfully in life.</p>
				<p>KF and Chalo have a partnership which sees KF sponsor an average of 15-20 students to attend Chalo every year. Through this generous initiative, KF have impacted hundreds of students’ lives and hope to impact millions more. Numerous people have given towards this cause, and today we ask that you, too, help make this possible.</p>
			</div>
			<div> <a href="http://www.kucetekelafoundation.org/donate.html" class="giveNowButton goldButton" target="_blank">Give Now</a>
			</div>
		</div>
		<div class="clear"></div>
	</section>
</div>
<?php include 'includes/overall/overall_footer.php';?>