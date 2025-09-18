/**
 *               ~ CTS WEBSITE ANIMATIONS ~
 * ==============================================
 *             Created by Lombe Chileshe 
 * ============================================== */



// Typing effect on home page
$('#introTypeIt').typeIt({
     speed: 50,
     autoStart: false,
     startDelay: 1500,
     callback: function(){
        $('.enrollNowButton').addClass("slideExpandUp");
     }
    })

//    “Chalo Trust School is an independent educational establishment in Lusaka, Zambia that offers world-class primary and secondary education at an affordable price.  Our curriculum prepares students for adulthood and higher education, and we take pride in producing well-rounded, high quality students. The school is located in a quiet and natural environment conducive for learning and studying.
//<i>Our mission is to create an environment of order, truth, caring, and concern where students of diverse economic and cultural backgrounds learn to live together and begin the habit of life long learning and personal and spiritual development.</i>
//”
    .tiType('Chalo Trust School is an independent educational establishment located in Lusaka, Zambia that offers world-class primary and secondary education at an affordable price.')
    .tiPause(1500)
    .tiType(' Our curriculum prepares students for adulthood and higher education, and we take pride in producing well-rounded, high quality students.')
    .tiPause(500)
    .tiType(' The school is located in a quiet and natural environment conducive for learning and studying.')
    .tiPause(500)
    .tiBreak()
    .tiBreak()
    .tiType(' <i>Our mission is to create an environment of order, truth, caring, and concern where students of diverse economic and cultural backgrounds learn to live together and begin the habit of life long learning and personal and spiritual development.</i>')
    
 
// Provides the dropdown functionality in the menu
$(document).ready(function () {
    
    if (window.innerWidth > 768) {
        $('.dropdown').hover(
            function () {
            $(this).children('.dropdown-content')
                    .delay(100)
                    .slideDown(400);
                   
            },
            function (){
            $(this).children('.dropdown-content')
                .clearQueue()
                .slideUp(0);
        }
       ); 
    }
    
     $(window).resize(function () {
         if ($(window).width() > 768) {
             $( '.dropdown' ).hover(
            function(){
                $(this).children('.dropdown-content')
                    .delay(100)
                        .slideDown(400);
                    
            },
            function(){
                $(this).children('.dropdown-content')
                    .clearQueue()
                        .slideUp(100);
            }
           ); 
         } 
     }).resize();  
     
});



//drop down functionality for mobile
$(document).ready(function (){
     $('#mobileMenuButton').click(
      function() {        
           $('#menu').toggle(700);
              $('#menu').css({
                display : 'block'
            });
            (this.classList.contains("is-active") === true) ? this.classList.remove("is-active") : this.classList.add("is-active");
            $('#schoolHeader').focus();
            }
        );
    
    
        var wasSmall;

        $(window).on('resize', function(e) {
           var isSmall = $(window).width() < 769;

           // If nothing has changed, don't do anything...
           if (isSmall === wasSmall) {
               return;
           }

           if (isSmall) {
               $('#menu').hide();
               $('#menu').css({
                  display : 'none'
               });
           } else {
               $('#menu').show();
               $('#menu').css({
                display : 'flex'
               });
           }

           wasSmall = isSmall;
            var menuBut = $('#mobileMenuButton')[0];
            menuBut.classList.remove("is-active");
        });

}); 
// initializes the slide show at the top of the home page
$(document).ready(function() {
    $("#lightSlider").lightSlider({
        item: 1,
        autoWidth: false,
        slideMove: 1, // slidemove will be 1 if loop is true
        slideMargin: 0,
 
        addClass: '',
        mode: "fade",
        useCSS: true,
        cssEasing: 'cubic-bezier(0.25, 0, 0.25, 1)', //'cubic-bezier(0.25, 0, 0.25, 1)',//
        easing: 'linear', //'for jquery animation',////
 
        speed: 900, //ms'
        auto: true,
        loop: true,
        slideEndAnimation: false,
        pause: 15000,
 
        keyPress: true,
        controls: false,
        prevHtml: '',
        nextHtml: '',
 
        rtl:false,
        adaptiveHeight:false,
 
        vertical:false,
        verticalHeight:500,
        vThumbWidth:100,
 
        thumbItem:0,
        pager: true,
        gallery: false,
        galleryMargin: -50,
        thumbMargin: 5,
        currentPagerPosition: 'middle',
 
        enableTouch:true,
        enableDrag:true,
        freeMove:true,
        swipeThreshold: 40,
        onBeforeStart: function (el) {},
        onSliderLoad: function (el) {},
        onBeforeSlide: function (el) {},
        onAfterSlide: function (el) {},
        onBeforeNextSlide: function (el) {},
        onBeforePrevSlide: function (el) {}
    });
});

    // Extends JQUERY to create functionality for instantly adding and removing a CSS class that performs an animation.
    // This CSS class can be located in any of the various stylesheets on the website.
$.fn.extend({
        animateCss: function (animationName) {
            var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
            this.addClass('animated ' + animationName).one(animationEnd, function() {
                $(this).removeClass('animated ' + animationName);
            });
        }
    });

    /* JQuery function to display a div on the home page with an animation from animate.css when you scroll to the postion where div should be */
        $(window).scroll(function(){
            $('#animateThis').each(function(){
                var imagePos = $(this).offset().top;

                var topOfWindow = $(window).scrollTop();
                    if(imagePos < topOfWindow+400){
                        $(this).addClass("slideExpandUp");
                    }
            });
        });


        /* JQuery function to display a div on the home page with an animation from animate.css when you scroll to the postion where div should be */
        $(window).scroll(function(){
            $('.bigWelcome').each(function(){
                var imagePos = $(this).offset().top;

                var topOfWindow = $(window).scrollTop();
                    if(imagePos < topOfWindow+ 800){
                        $(this).addClass("slideExpandUp");
                    }
            });
        });
    // Function to add animation to left and right entry divs.

    $(window).scroll(function(){
        $('.leftEntry').each(function(){
            var imagePos = $(this).offset().top;
            
            var topOfWindow = $(window).scrollTop();
            if (imagePos < topOfWindow + 400){
                $(this).addClass("enterFromLeft");
            }
        });
    });


    $(window).scroll(function(){
        $('.rightEntry').each(function(){
            var imagePos = $(this).offset().top;
            
            var topOfWindow = $(window).scrollTop();
            if (imagePos < topOfWindow + 400){
                $(this).addClass("enterFromRight");
            }
        });
    });

   
     /* JQuery function to display the red highlight div whenever someone scrolls to the position where the div is supposed to be  with an animation from animate.css */
    $(window).scroll(function(){
        $('.redHighlight').each(function(){
            var imagePos = $(this).offset().top;

            var topOfWindow = $(window).scrollTop();
            if (imagePos < topOfWindow+400){
                $(this).addClass("fadeIn");
            }
        });
    });

    
/* JQuery function to animate the display of the The h5 heading on top of the pages when someone scrolls to the position where the heading is supposed to be  with an animation from animate.css */
    $(window).scroll(function(){
       $('.infoAreaRightDiv h5').each(function(){
            var imagePos = $(this).offset().top;
            
            var topOfWindow = $(window).scrollTop();
            if( imagePos < topOfWindow + 500){
                $(this).addClass("animated fadeInLeft");
            }
       });
    });
    
    
     /* JQuery function to display the sidebarwidget div when you open a page and whenever someone scrolls to the position where the div is supposed to be  with an animation from animate.css */
    
    $(window).scroll(function(){
        $('.sidebarwidget').each(function(){
            var imagePos = $(this).offset().top;
            
            var topOfWindow = $(window).scrollTop();
            if( imagePos < topOfWindow + 400){
                $(this).addClass("fadeIn");
            }
        });
    });

    //Animates the entrance of the sidebar contact box
    $(window).scroll(function(){
        $('.sidebarContactBox').each(function(){
            var imagePos = $(this).offset().top;
            
            var topOfWindow = $(window).scrollTop();
            if( imagePos < topOfWindow + 400){
                $(this).addClass("fadeIn");
            }
        });
    });

     /* JQuery function to create an animated scrolling effect whenever you go to an anchor located on the same page */
    $('a[href^="#"]').bind('click', function(event){
        var anchor = $(this).attr('href');
        smoothScrollTo(anchor);
        return false;
    });


     /* JQuery function to slide down the submenu on a sidebar widget navigational menu. Uses jquery to create an animation effect. Adds a delay to make sure accidental hovers don't cause the submenu to be opened */
$(document).ready(function() {

    $( '.dropdownsidebaritem' ).hover(
    function(){
        $(this).children('.sidebarExploreSubmenu')
            .delay(100)
                .slideDown(700);
    },
    function(){
        $(this).children('.sidebarExploreSubmenu')
            .clearQueue()
            .slideUp(700);
    }
    );
    });
    
    $(document).ready(function(){
         $("#searchButton").click(function() {
             $(".searchDiv").toggle();
         });
    });
   // Adding the backtotop button when the page is scrolled more than a certain amount
    $(window).scroll(function() {
    if ($(this).scrollTop() >= 1000) {        // If page is scrolled more than 1000px
        $('#returnToTop').fadeIn(200);    // Fade in the arrow
    } else {
        $('#returnToTop').fadeOut(200);   // Else fade out the arrow
    }
    });
    $('#returnToTop').click(function() {      // When arrow is clicked
//        $('body,html').animate({
//        scrollTop : 0                       // Scroll to top of body
//    }, 500);
//        console.log("returnToTop clicked")
        $("#toptop").animatescroll({scrollSpeed:4000,easing:'easeOutBounce'});
});
    
    
 
    /* Function for opening tabs and navigating between tabs */
    function openTab(evt, tabName, displayType) {
    // Declare all variables
    var i, tabContent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabContent = document.getElementsByClassName("tabContent");
    var tabContentLen = tabContent.length;
    for (i = 0; i < tabContentLen; i++) {
        tabContent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    var tablinksLen = tablinks.length;
    for (i = 0; i < tablinksLen; i++) {
        tablinks[i].className = tablinks[i].className.replace(" activeTab", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(tabName).style.display = displayType;
    evt.currentTarget.className += " activeTab";
    return true;
}


/* Creates the functionality for toggling between the list calendar and the grid calendar */   
    var width = window.innerWidth;
    var height = window.innerHeight;

    if (window.innerWidth  < 968) {
         $("#cts-clndr").hide();
         $(".toggle-list-grid-view").hide();
    } else {
       $("#cts-clndr2").hide();
        $("input[name=calendarToggle]").click(function(){
            $("#cts-clndr2, #cts-clndr").toggle(1000); 
        });

        $("#listtoggleicon").click(function(){
            if($('#cts-clndr2:visible').length == 0){
                $("#calendarToggle").prop('checked', false);
                $("#cts-clndr2, #cts-clndr").toggle(1000);
            }   
        });

        $("#gridtoggleicon").click(function(){
            if($('#cts-clndr:visible').length == 0){
                $("#calendarToggle").prop('checked', true);
                $("#cts-clndr2, #cts-clndr").toggle(1000);
            }      
        });
    }
//Function for showing the timeline divs on the background and history page. Animates their entry
    (function() {
      'use strict';

      // define variables
      var items = document.querySelectorAll(".timeline li");

      // check if an element is in viewport
      // http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport
      function isElementInViewport(el) {
        var rect = el.getBoundingClientRect();
        return (
          rect.top >= 100 &&
          rect.left >= 0 &&
          rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
          rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
      }
        
         function isElementOutsideViewport(el) {
        var rect = el.getBoundingClientRect();
        return (
          rect.top >= 400 &&
          rect.left >= 0 &&
          rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
          rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
      }
        function isElementVisible(el) {
            var rect     = el.getBoundingClientRect(),
                vWidth   = window.innerWidth || doc.documentElement.clientWidth,
                vHeight  = window.innerHeight || doc.documentElement.clientHeight,
                efp      = function (x, y) { return document.elementFromPoint(x, y) };     

            // Return false if it's not in the viewport
            if (rect.right < 0 || rect.bottom < 0 
                    || rect.left > vWidth || rect.top > vHeight)
                return false;

            // Return true if any of its four corners are visible
            return (
                  el.contains(efp(rect.left,  rect.top))
              ||  el.contains(efp(rect.right, rect.top))
              ||  el.contains(efp(rect.right, rect.bottom))
              ||  el.contains(efp(rect.left,  rect.bottom))
            );
        }

      function addInViewClass() {
        var itemsLen = items.length;
        for (var i = 0; i < itemsLen; i++) {
          if (isElementInViewport(items[i])) {
            items[i].classList.add("in-view");
          }
        }
      }
        
      function removeInViewClass(){
          var itemsLen = items.length;
          for (var i = 0; i < itemsLen; i++){
              if(isElementOutsideViewport(items[i])){
                  items[i].classList.remove("in-view");
              }
          }
      }

      // listen for events
      window.addEventListener("load", addInViewClass);
      window.addEventListener("resize", addInViewClass);
//      window.addEventListener("scroll", addInViewClass);
      
        $(function(){
            var lastScroll = 0;
            $(window).scroll(function(event){
                var currentScrollPos = $(this).scrollTop();
                
                if(currentScrollPos > lastScroll){
                    addInViewClass();
                } else {
                    removeInViewClass();
                }
                lastScroll = currentScrollPos;
            });
        });
        

    })();
// Functionality for expanding a Question div on the frequently asked questions page.
var acc = document.getElementsByClassName("accordion");
var i;
var accLen = acc.length;
for (i = 0; i < accLen; i++) {
  acc[i].onclick = function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
    
  }
}

 // t: current time, b: begInnIng value, c: change In value, d: duration
            jQuery.easing['jswing'] = jQuery.easing['swing'];

            jQuery.extend( jQuery.easing,
            {
                def: 'easeOutQuad',
                swing: function (x, t, b, c, d) {
                    //alert(jQuery.easing.default);
                    return jQuery.easing[jQuery.easing.def](x, t, b, c, d);
                },
                easeInQuad: function (x, t, b, c, d) {
                    return c*(t/=d)*t + b;
                },
                easeOutQuad: function (x, t, b, c, d) {
                    return -c *(t/=d)*(t-2) + b;
                },
                easeInOutQuad: function (x, t, b, c, d) {
                    if ((t/=d/2) < 1) return c/2*t*t + b;
                    return -c/2 * ((--t)*(t-2) - 1) + b;
                },
                easeInCubic: function (x, t, b, c, d) {
                    return c*(t/=d)*t*t + b;
                },
                easeOutCubic: function (x, t, b, c, d) {
                    return c*((t=t/d-1)*t*t + 1) + b;
                },
                easeInOutCubic: function (x, t, b, c, d) {
                    if ((t/=d/2) < 1) return c/2*t*t*t + b;
                    return c/2*((t-=2)*t*t + 2) + b;
                },
                easeInQuart: function (x, t, b, c, d) {
                    return c*(t/=d)*t*t*t + b;
                },
                easeOutQuart: function (x, t, b, c, d) {
                    return -c * ((t=t/d-1)*t*t*t - 1) + b;
                },
                easeInOutQuart: function (x, t, b, c, d) {
                    if ((t/=d/2) < 1) return c/2*t*t*t*t + b;
                    return -c/2 * ((t-=2)*t*t*t - 2) + b;
                },
                easeInQuint: function (x, t, b, c, d) {
                    return c*(t/=d)*t*t*t*t + b;
                },
                easeOutQuint: function (x, t, b, c, d) {
                    return c*((t=t/d-1)*t*t*t*t + 1) + b;
                },
                easeInOutQuint: function (x, t, b, c, d) {
                    if ((t/=d/2) < 1) return c/2*t*t*t*t*t + b;
                    return c/2*((t-=2)*t*t*t*t + 2) + b;
                },
                easeInSine: function (x, t, b, c, d) {
                    return -c * Math.cos(t/d * (Math.PI/2)) + c + b;
                },
                easeOutSine: function (x, t, b, c, d) {
                    return c * Math.sin(t/d * (Math.PI/2)) + b;
                },
                easeInOutSine: function (x, t, b, c, d) {
                    return -c/2 * (Math.cos(Math.PI*t/d) - 1) + b;
                },
                easeInExpo: function (x, t, b, c, d) {
                    return (t==0) ? b : c * Math.pow(2, 10 * (t/d - 1)) + b;
                },
                easeOutExpo: function (x, t, b, c, d) {
                    return (t==d) ? b+c : c * (-Math.pow(2, -10 * t/d) + 1) + b;
                },
                easeInOutExpo: function (x, t, b, c, d) {
                    if (t==0) return b;
                    if (t==d) return b+c;
                    if ((t/=d/2) < 1) return c/2 * Math.pow(2, 10 * (t - 1)) + b;
                    return c/2 * (-Math.pow(2, -10 * --t) + 2) + b;
                },
                easeInCirc: function (x, t, b, c, d) {
                    return -c * (Math.sqrt(1 - (t/=d)*t) - 1) + b;
                },
                easeOutCirc: function (x, t, b, c, d) {
                    return c * Math.sqrt(1 - (t=t/d-1)*t) + b;
                },
                easeInOutCirc: function (x, t, b, c, d) {
                    if ((t/=d/2) < 1) return -c/2 * (Math.sqrt(1 - t*t) - 1) + b;
                    return c/2 * (Math.sqrt(1 - (t-=2)*t) + 1) + b;
                },
                easeInElastic: function (x, t, b, c, d) {
                    var s=1.70158;var p=0;var a=c;
                    if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
                    if (a < Math.abs(c)) { a=c; var s=p/4; }
                    else var s = p/(2*Math.PI) * Math.asin (c/a);
                    return -(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
                },
                easeOutElastic: function (x, t, b, c, d) {
                    var s=1.70158;var p=0;var a=c;
                    if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
                    if (a < Math.abs(c)) { a=c; var s=p/4; }
                    else var s = p/(2*Math.PI) * Math.asin (c/a);
                    return a*Math.pow(2,-10*t) * Math.sin( (t*d-s)*(2*Math.PI)/p ) + c + b;
                },
                easeInOutElastic: function (x, t, b, c, d) {
                    var s=1.70158;var p=0;var a=c;
                    if (t==0) return b;  if ((t/=d/2)==2) return b+c;  if (!p) p=d*(.3*1.5);
                    if (a < Math.abs(c)) { a=c; var s=p/4; }
                    else var s = p/(2*Math.PI) * Math.asin (c/a);
                    if (t < 1) return -.5*(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
                    return a*Math.pow(2,-10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )*.5 + c + b;
                },
                easeInBack: function (x, t, b, c, d, s) {
                    if (s == undefined) s = 1.70158;
                    return c*(t/=d)*t*((s+1)*t - s) + b;
                },
                easeOutBack: function (x, t, b, c, d, s) {
                    if (s == undefined) s = 1.70158;
                    return c*((t=t/d-1)*t*((s+1)*t + s) + 1) + b;
                },
                easeInOutBack: function (x, t, b, c, d, s) {
                    if (s == undefined) s = 1.70158; 
                    if ((t/=d/2) < 1) return c/2*(t*t*(((s*=(1.525))+1)*t - s)) + b;
                    return c/2*((t-=2)*t*(((s*=(1.525))+1)*t + s) + 2) + b;
                },
                easeInBounce: function (x, t, b, c, d) {
                    return c - jQuery.easing.easeOutBounce (x, d-t, 0, c, d) + b;
                },
                easeOutBounce: function (x, t, b, c, d) {
                    if ((t/=d) < (1/2.75)) {
                        return c*(7.5625*t*t) + b;
                    } else if (t < (2/2.75)) {
                        return c*(7.5625*(t-=(1.5/2.75))*t + .75) + b;
                    } else if (t < (2.5/2.75)) {
                        return c*(7.5625*(t-=(2.25/2.75))*t + .9375) + b;
                    } else {
                        return c*(7.5625*(t-=(2.625/2.75))*t + .984375) + b;
                    }
                },
                easeInOutBounce: function (x, t, b, c, d) {
                    if (t < d/2) return jQuery.easing.easeInBounce (x, t*2, 0, c, d) * .5 + b;
                    return jQuery.easing.easeOutBounce (x, t*2-d, 0, c, d) * .5 + c*.5 + b;
                }
            });

        $('html').css({display: 'none'});
        $(document).ready(function(){
            var hashURL = location.hash;
            console.log(hashURL);
            if(hashURL != "" && hashURL.length > 1){
                $(window).scrollTop(0);
                $('html').css({display: 'block'});
                smoothScrollTo(hashURL);
            } else {
                $('html').css({display: 'block'});
            }
        });
        
        function smoothScrollTo(anchor) {
            var duration= 800; //time (milliseconds) it takes to reach anchor point
            var targetY = $(anchor).offset().top;
            $("html, body").animate({
                "scrollTop" : targetY
            }, duration, 'easeInOutCubic');
            location.hash = "";
        }  
