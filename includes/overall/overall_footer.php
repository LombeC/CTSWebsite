    <?php include 'includes/footer.php'; ?> 
<!--    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="libs/lightslider/js/lightslider.min.js"></script>
    <script src="js/animatescroll.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.typeit/4.4.0/typeit.min.js"></script> 
    <script src="js/ctsAnimations.min.js"></script>
    <script src="js/moment.min.js" type="text/javascript"></script> 
    <script src="js/underscore-min.js" type="text/javascript"></script>
    <script src="js/clndr.min.js" type="text/javascript"></script>
    <script src="js/photoswipe.min.js"></script> 
    <script src="js/photoswipe-ui-default.min.js"></script>
    <script src="js/ctsPhotoSwipes.min.js"></script>
    <script src="js/infinite-scroll.pkgd.min.js"></script>
    <script src="js/ctsInfiniteScroll.js"></script>
    
    <?php 
        $ctsMapScript = '<script src="js/ctsMap.js"></script>';
        $ctsMapKey = '<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDiOfSJKZqf3EdcjmeZJR4Wct3eWJomhnA&callback=myMap"></script>';
        if($this_file === 'contact'){
            echo $ctsMapScript . "\n";;
            echo "\t" . $ctsMapKey; 
        }
    ?>
    <script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
	
	  ga('create', 'UA-103247054-2', 'auto');
	  ga('send', 'pageview');
	
      </script>
</body>
</html>