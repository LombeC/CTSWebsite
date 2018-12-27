<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <?php 
        if (empty($title)){
            echo "<title> Chalo Trust School </title>" . "\n";
        } else {
            echo "<title>", $title , "</title>" . "\n";
        }
    ?>
     <?php 
        if(empty($metaDescription)){
            echo '<meta name="description" content="Chalo Trust School is a private, Secondary and Primary Christian, Boarding, Co-education school, that is located in Lusaka, Zambia.">' . "\n";
        } else {
            echo '<meta name="description" content="', $metaDescription, '">' . "\n";
        }
    
        if(empty($metaKeywords)){
            echo "\t" . '<meta name="keywords" content="Chalo Trust School, Chalo, CTS, Secondary School, best zambian school, primary school, christian boarding school, lusaka school, IGCSE, Cambridge, best school in Zambia ">';
        } else {
            echo "\t" .'<meta name="keywords" content="', $metaKeywords, ',Chalo Trust School, Chalo, CTS, Secondary School, best zambian school, primary school, boarding school" >';
        }
    ?>
	<?php
		if(!empty($addToHead)){
			echo "\n" . $addToHead;
		}	
	?>
    
    <meta name="author" content="Lombe Chileshe"> 
    <!-- <base href="/" /> -->
    <link rel="stylesheet" style="text/css" href="css/style.css">
    <?php 
        $photoswipeCSS1 = '<link rel="stylesheet" href="css/photoswipe.css">';
        $photoswipeCSS2 = '<link rel="stylesheet" href="css/default-skin/default-skin.css">';
        if ($this_file === "entertainment-gallery" || $this_file === "general-gallery" || $this_file === "sports-gallery") {
            echo $photoswipeCSS1 . "\n";
            echo "\t" . $photoswipeCSS2;
        }
        
        if ($this_file === "index" ){
             echo '<link rel="canonical" href="http://www.chalotrustschool.com">';
        }
    ?>
    
     <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="manifest.json">
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">
    <!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '976408142507085');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=976408142507085&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

    
</head>