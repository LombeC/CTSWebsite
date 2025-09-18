<?php 
    $title = "Photo Gallery | Chalo Trust School";
    $metaDescription = "These are some photos from various Chalo Trust School locations";
    $metaKeywords = "Photos, Pictures, Photo Gallery, Chalo Trust School photographs";
    include 'core/init.php';
    include 'includes/overall/overall_header.php';
    require_once 'helpers/sidebarWidgetBuilder.php';
?>
<div class="mainContent">
<h1>Gallery</h1>
    <div class="pagetopimgdiv" >
        <img src="images/header3.jpg" alt="Header Image" style="margin:auto; display: block;">
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
                <h5 style="text-align:center">School Photos</h5>
<!--                 The thumbnails should always be 460px by 460px. This should be edited and acheieved through photoshop-->
                 <div style="color: blue; font-weight: 600; font-size: 0.9em;">Tip: Click/Tap on an image to open the associated Gallery</div>
    <div class="photoBoxWrapper" itemscope itemtype="http://schema.org/ImageGallery">
        <div class="photoBox imgZoomInHoverEffect">
            <div class="photoTitleBox">Infrastructure (5 items)</div>
            <div class="photoBoxContent">
               <div class="my-gallery" itemscope itemtype="http://schema.org/ImageGallery">
                    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                        <a href="images/gallery-images/general/infrastructure2.png" itemprop="contentUrl" data-size="637x585">
                          <img src="images/gallery-images/general/infrastructure2.png" itemprop="thumbnail" alt="Boys Hostel Bathroom"/>
                        </a>
                        <figcaption itemprop="caption description">Boys Hostel Bathroom</figcaption>                                   
                    </figure>

                    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" style="display:none;">
                      <a href="images/gallery-images/general/infrastracture1.jpg" itemprop="contentUrl" data-size="1365x768">
                          <img src="images/gallery-images/general/infrastracture1.jpg" itemprop="thumbnail" alt="Back of the Girls Hostel" />
                      </a>
                      <figcaption itemprop="caption description">Back of the Girls Hostel</figcaption>
                    </figure>

                    <figure style="display:none;" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                      <a href="images/gallery-images/general/infrastructure3.jpg" itemprop="contentUrl" data-size="1366x768">
                          <img src="images/gallery-images/general/infrastructure3.jpg" itemprop="thumbnail" alt="Front of the Classrooms" />
                      </a>
                      <figcaption itemprop="caption description">Front of the Classrooms</figcaption>
                    </figure>

                    <figure style="display:none;" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                      <a href="images/gallery-images/general/infrastructure4.png" itemprop="contentUrl" data-size="842x632">
                          <img src="images/gallery-images/general/infrastructure4.png" itemprop="thumbnail" alt="Front of Boys Hostel" />
                      </a>
                      <figcaption itemprop="caption description">Front of Boys Hostel</figcaption>
                    </figure>
                   
                   <figure style="display:none;" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                      <a href="images/gallery-images/general/infrastructure5.jpg" itemprop="contentUrl" data-size="1366x768">
                          <img src="images/gallery-images/general/infrastructure5.jpg" itemprop="thumbnail" alt="Front of Girls Hostel" />
                      </a>
                      <figcaption itemprop="caption description">Front of Girls Hostel</figcaption>
                    </figure>
                  </div>
            </div>
        </div>
        <div class="photoBox imgZoomInHoverEffect">
            <div class="photoTitleBox">Environment (6 items)</div>
                <div class="photoBoxContent">
                    <div class="my-gallery" itemscope itemtype="http://schema.org/ImageGallery">
                        <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                          <a href="images/gallery-images/general/environment2.png" itemprop="contentUrl" data-size="842x632">
                              <img src="images/gallery-images/general/environment2.png" itemprop="thumbnail" alt="Students in the Green House"/>
                          </a>
                          <figcaption itemprop="caption description">Green House</figcaption>
                        </figure>

                        <figure style="display:none;" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                          <a href="images/gallery-images/general/environment1.png" itemprop="contentUrl" data-size="842x632">
                              <img src="images/gallery-images/general/environment1.png" itemprop="thumbnail" alt="Students in the Green House" />
                          </a>
                          <figcaption itemprop="caption description">Green House</figcaption>
                        </figure>

                        <figure style="display:none;" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                          <a href="images/gallery-images/general/environment3.png" itemprop="contentUrl" data-size="842x632">
                              <img src="images/gallery-images/general/environment3.png" itemprop="thumbnail" alt="Students in the Green House" />
                          </a>
                          <figcaption itemprop="caption description">Students in the Green Housee</figcaption>
                        </figure>
                        
                        <figure style="display:none;" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                          <a href="images/gallery-images/general/environment4.png" itemprop="contentUrl" data-size="842x632">
                              <img src="images/gallery-images/general/environment4.png" itemprop="thumbnail" alt="Students in the Green House" />
                          </a>
                          <figcaption itemprop="caption description">Students in the Green House</figcaption>
                        </figure>
                        
                        <figure style="display:none;" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                          <a href="images/gallery-images/general/environment5.jpg" itemprop="contentUrl" data-size="1366x768">
                              <img src="images/gallery-images/general/environment5.jpg" itemprop="thumbnail" alt="Students in the Green House" />
                          </a>
                          <figcaption itemprop="caption description">Students on the Loan</figcaption>
                        </figure>
                        
                        <figure style="display:none;" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                          <a href="images/gallery-images/general/environment6.jpg" itemprop="contentUrl" data-size="1366x768">
                              <img src="images/gallery-images/general/environment6.jpg" itemprop="thumbnail" alt="Image description" />
                          </a>
                          <figcaption itemprop="caption description"></figcaption>
                        </figure>
                  </div>
            </div>
        </div>
       
<!--
        <div class="photoBox imgZoomInHoverEffect">
            <div class="photoTitleBox">Secondary School (10 items)</div>
            <div class="photoBoxContent">
               <div class="my-gallery" itemscope itemtype="http://schema.org/ImageGallery">
                    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                        <a hrefimages/5.jpg" itemprop="contentUrl" data-size="4128x3096">
                          <img srcimages/5.jpg" itemprop="thumbnail" alt="Image description"/>
                        </a>
                        <figcaption itemprop="caption description">Image caption  1</figcaption>                                   
                    </figure>

                    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" style="display:none;">
                      <a hrefimages/2.jpg" itemprop="contentUrl" data-size="4128x2322">
                          <img srcimages/2.jpg" itemprop="thumbnail" alt="Image description" />
                      </a>
                      <figcaption itemprop="caption description">Image caption 2</figcaption>
                    </figure>

                    <figure style="display:none;" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                      <a hrefimages/3.jpg" itemprop="contentUrl" data-size="4128x2322">
                          <img srcimages/3.jpg" itemprop="thumbnail" alt="Image description" />
                      </a>
                      <figcaption itemprop="caption description">Image caption 3</figcaption>
                    </figure>

                    <figure style="display:none;" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                      <a hrefimages/4.jpg" itemprop="contentUrl" data-size="4128x2322">
                          <img srcimages/4.jpg" itemprop="thumbnail" alt="Image description" />
                      </a>
                      <figcaption itemprop="caption description">Image caption 4</figcaption>
                    </figure>
                   
                   <figure style="display:none;" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                          <a href="https://farm6.staticflickr.com/5023/5578283926_822e5e5791_b.jpg" itemprop="contentUrl" data-size="1024x768">
                              <img src="https://farm6.staticflickr.com/5023/5578283926_822e5e5791_m.jpg" itemprop="thumbnail" alt="Image description" />
                          </a>
                          <figcaption itemprop="caption description">Image caption 2.3</figcaption>
                  </figure>
                   <figure style="display:none;" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                          <a href="https://farm6.staticflickr.com/5023/5578283926_822e5e5791_b.jpg" itemprop="contentUrl" data-size="1024x768">
                              <img src="https://farm6.staticflickr.com/5023/5578283926_822e5e5791_m.jpg" itemprop="thumbnail" alt="Image description" />
                          </a>
                          <figcaption itemprop="caption description">Image caption 2.3</figcaption>
                  </figure>
                   
                   <figure style="display:none;" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                          <a href="https://farm6.staticflickr.com/5023/5578283926_822e5e5791_b.jpg" itemprop="contentUrl" data-size="1024x768">
                              <img src="https://farm6.staticflickr.com/5023/5578283926_822e5e5791_m.jpg" itemprop="thumbnail" alt="Image description" />
                          </a>
                          <figcaption itemprop="caption description">Image caption 2.3</figcaption>
                    </figure>
                   
                   <figure style="display:none;" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                          <a href="https://farm6.staticflickr.com/5023/5578283926_822e5e5791_b.jpg" itemprop="contentUrl" data-size="1024x768">
                              <img src="https://farm6.staticflickr.com/5023/5578283926_822e5e5791_m.jpg" itemprop="thumbnail" alt="Image description" />
                          </a>
                          <figcaption itemprop="caption description">Image caption 2.3</figcaption>
                    </figure>
                   
                   <figure style="display:none;" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                          <a href="https://farm6.staticflickr.com/5023/5578283926_822e5e5791_b.jpg" itemprop="contentUrl" data-size="1024x768">
                              <img src="https://farm6.staticflickr.com/5023/5578283926_822e5e5791_m.jpg" itemprop="thumbnail" alt="Image description" />
                          </a>
                          <figcaption itemprop="caption description">Image caption 2.3</figcaption>
                    </figure>
                   
                   <figure style="display:none;" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                          <a href="https://farm6.staticflickr.com/5023/5578283926_822e5e5791_b.jpg" itemprop="contentUrl" data-size="1024x768">
                              <img src="https://farm6.staticflickr.com/5023/5578283926_822e5e5791_m.jpg" itemprop="thumbnail" alt="Image description" />
                          </a>
                          <figcaption itemprop="caption description">Image caption 2.3</figcaption>
                    </figure>
                  </div>
            </div>
        </div>
        <div class="photoBox imgZoomInHoverEffect">
            <div class="photoTitleBox">Primary School (7 items)</div>
            <div class="photoBoxContent">
               <div class="my-gallery" itemscope itemtype="http://schema.org/ImageGallery">
                    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                        <a hrefimages/1.jpg" itemprop="contentUrl" data-size="4128x3096">
                          <img srcimages/1.jpg" itemprop="thumbnail" alt="Image description" />
                        </a>
                        <figcaption itemprop="caption description">Image caption  1</figcaption>                                   
                    </figure>

                    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" style="display:none;">
                      <a hrefimages/2.jpg" itemprop="contentUrl" data-size="4128x2322">
                          <img srcimages/2.jpg" itemprop="thumbnail" alt="Image description" />
                      </a>
                      <figcaption itemprop="caption description">Image caption 2</figcaption>
                    </figure>

                    <figure style="display:none;" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                      <a hrefimages/3.jpg" itemprop="contentUrl" data-size="4128x2322">
                          <img srcimages/3.jpg" itemprop="thumbnail" alt="Image description" />
                      </a>
                      <figcaption itemprop="caption description">Image caption 3</figcaption>
                    </figure>

                    <figure style="display:none;" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                      <a hrefimages/4.jpg" itemprop="contentUrl" data-size="4128x2322">
                          <img srcimages/4.jpg" itemprop="thumbnail" alt="Image description" />
                      </a>
                      <figcaption itemprop="caption description">Image caption 4</figcaption>
                    </figure>
                   
                   <figure style="display:none;" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                          <a href="https://farm6.staticflickr.com/5023/5578283926_822e5e5791_b.jpg" itemprop="contentUrl" data-size="1024x768">
                              <img src="https://farm6.staticflickr.com/5023/5578283926_822e5e5791_m.jpg" itemprop="thumbnail" alt="Image description" />
                          </a>
                          <figcaption itemprop="caption description">Image caption 2.3</figcaption>
                    </figure>
                   
                   <figure style="display:none;" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                          <a href="https://farm6.staticflickr.com/5023/5578283926_822e5e5791_b.jpg" itemprop="contentUrl" data-size="1024x768">
                              <img src="https://farm6.staticflickr.com/5023/5578283926_822e5e5791_m.jpg" itemprop="thumbnail" alt="Image description" />
                          </a>
                          <figcaption itemprop="caption description">Image caption 2.3</figcaption>
                    </figure>
                   
                   <figure style="display:none;" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                          <a href="https://farm6.staticflickr.com/5023/5578283926_822e5e5791_b.jpg" itemprop="contentUrl" data-size="1024x768">
                              <img src="https://farm6.staticflickr.com/5023/5578283926_822e5e5791_m.jpg" itemprop="thumbnail" alt="Image description" />
                          </a>
                          <figcaption itemprop="caption description">Image caption 2.3</figcaption>
                    </figure>
                  </div>
            </div>
        </div>
-->
        
    </div>
               <br><br>
        More Pictures Coming Soon
        </div>
        </div>
    <div class="clear"></div>
</div>


<!-- Root element of PhotoSwipe. Must have class pswp. -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

    <!-- Background of PhotoSwipe. 
         It's a separate element as animating opacity is faster than rgba(). -->
    <div class="pswp__bg"></div>

    <!-- Slides wrapper with overflow:hidden. -->
    <div class="pswp__scroll-wrap">

        <!-- Container that holds slides. 
            PhotoSwipe keeps only 3 of them in the DOM to save memory.
            Don't modify these 3 pswp__item elements, data is added later on. -->
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>

        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
        <div class="pswp__ui pswp__ui--hidden">

            <div class="pswp__top-bar">

                <!--  Controls are self-explanatory. Order can be changed. -->

                <div class="pswp__counter"></div>

                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                <button class="pswp__button pswp__button--share" title="Share"></button>

                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                <!-- element will get class pswp__preloader--active when preloader is running -->
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                      <div class="pswp__preloader__cut">
                        <div class="pswp__preloader__donut"></div>
                      </div>
                    </div>
                </div>
            </div>

            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div> 
            </div>

            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
            </button>

            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
            </button>

            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>

        </div>

    </div>

</div>

<?php include 'includes/overall/overall_footer.php';?>