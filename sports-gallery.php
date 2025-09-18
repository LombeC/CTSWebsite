<?php 
    $title = "Sports Gallery | Chalo Trust School";
    include 'core/init.php';
    include 'includes/overall/overall_header.php';
    require_once 'helpers/sidebarWidgetBuilder.php';
?>
<div class="mainContent">
<h1>Sports Gallery</h1>
    <div class="pagetopimgdiv" >
        <img src="images/header4.jpg" alt="Header Image" style="margin:auto; display: block;">
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
                <li><span class="bluename"><?php echo $principal_name ?>n<br></span>
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
                <h5 style="text-align:center">Sports Photos</h5>
                
                Pictures Coming Soon
<!--                 The thumbnails should always be 460px by 460px. This should be edited and acheieved through photoshop-->
<!--
                 <div style="color: blue; font-weight: 600; font-size: 0.9em;">Tip: Click/Tap on an image to open the associated Gallery</div>
                <div class="photoBoxWrapper" itemscope itemtype="http://schema.org/ImageGallery">
                    <div class="photoBox imgZoomInHoverEffect">
                        <div class="photoTitleBox">2017 Inter-house Athletics (4 items)</div>
                        <div class="photoBoxContent">
                           <div class="my-gallery" itemscope itemtype="http://schema.org/ImageGallery">
                                <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <a hrefimages/1.jpg" itemprop="contentUrl" data-size="4128x3096">
                                      <img srcimages/1.jpg" itemprop="thumbnail" alt="Image description"/>
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
                              </div>
                        </div>
                    </div>
                    <div class="photoBox imgZoomInHoverEffect">
                        <div class="photoTitleBox">2017 ISAZ Athletics (3 items)</div>
                            <div class="photoBoxContent">
                                <div class="my-gallery" itemscope itemtype="http://schema.org/ImageGallery">
                                    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                      <a hrefimages/5.jpg" itemprop="contentUrl" data-size="4128x3096">
                                          <img srcimages/5.jpg" itemprop="thumbnail" alt="Image description"/>
                                      </a>
                                      <figcaption itemprop="caption description">Image caption 2.1</figcaption>
                                    </figure>

                                    <figure style="display:none;" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                      <a href="https://farm7.staticflickr.com/6175/6176698785_7dee72237e_b.jpg" itemprop="contentUrl" data-size="1024x683">
                                          <img src="https://farm7.staticflickr.com/6175/6176698785_7dee72237e_m.jpg" itemprop="thumbnail" alt="Image description" />
                                      </a>
                                      <figcaption itemprop="caption description">Image caption 2.2</figcaption>
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
                        <div class="photoTitleBox">2017 ISAZ Nationals (4 items)</div>
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
                              </div>
                        </div>
                    </div>
                    <div class="photoBox imgZoomInHoverEffect">
                        <div class="photoTitleBox">2017 Term 1 Cross Country (104 items)</div>
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
                              </div>
                        </div>
                    </div>
                </div>
-->
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