<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />

  <title>
    <?php wp_title('|',true,'right'); ?>
    <?php bloginfo('name'); ?>
  </title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-37018915-1', 'radcircle.com');
  ga('send', 'pageview');
</script>

<!-- user agent -->

<?php
	/* 
	 * 	Add this to support sites with sites with threaded comments enabled.
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	wp_head();
	
	wp_get_archives('type=monthly&format=link');
?>
</head>
<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<div id="container">
    <div id="navigation"> <!-- Start Navigation Bar -->
<a href="http://radcircle.com"><img src="http://radcircle.com/images/Radcircle-Logo-50x50.png" width="60" height="60" alt="Radcircle Logo" class="fl fade"></a>

<?php get_search_form(); ?>
<ul id="menu"> 

  <li><a href="#" class="drop">Info <span class="gray">&#9662;</span></a>  
  <div class="dropdown_5columns menufade">


            <div class="col_5">  
                <p class="menutitle">It's all about the circle.</p><br />
                    <div class="radcirclelinks"><a href="http://radcircle.com/about">About.</a></div>
                    <div class="radcirclelinks"><a href="http://radcircle.com/team.php">Meet the Team.</a></div>
                    <div class="radcirclelinks"><a href="http://radcircle.com/our-adventure">Get involved.</a></div>
                    <div class="radcirclelinks"><a href="http://radcircle.com/contact">Contact.</a></div>
                    <div class="radcirclelinks"><a href="http://radcircle.com/our-adventure">College Reps.</a></div>
                    <div class="radcirclelinks"><a href="http://radcircle.com/submissions">Submit Music.</a></div>
          </div>
      </div>
    </li> 

    <li><a href="#" class="drop">Discover Music <span class="gray">&#9662;</span></a>  
    <div class="dropdown_5columns menufade">            
    <p class="menutitle">Discover all kinds of music.</p>

    <div class="genre-container">
    <ul class="radcircle-edm">
        <li class="genre-opener">Electronic:</li>
        <li><a href="http://radcircle.com/category/dubstep-2">Dubstep</a></li>
        <li><a href="http://radcircle.com/category/electro-house">Electro-House</a></li>
        <li><a href="http://radcircle.com/category/moombahton">Moombahton</a></li>
        <li><a href="http://radcircle.com/category/progressive">Progressive</a></li>
        <li><a href="http://radcircle.com/category/trap-2">Trap</a></li>
    </ul>
    </div>

     <div class="genre-container">
    <ul class="radcircle-strings">
        <li class="genre-opener">Strings:</li>
        <li><a href="http://radcircle.com/category/acoustic">Acoustic</a></li>
        <li><a href="http://radcircle.com/category/alternative">Alternative</a></li>
        <li><a href="http://radcircle.com/category/folk">Folk</a></li>
        <li><a href="http://radcircle.com/category/indie">Indie</a></li>
    </ul>
    </div>

    <div class="genre-container">
    <ul class="radcircle-flow">
        <li class="genre-opener">Flow:</li>
        <li><a href="http://radcircle.com/category/freestyle">Freestyle</a></li>
        <li><a href="http://radcircle.com/category/hip-hop-rap">Hip Hop &amp; Rap</a></li>
    </ul>
    </div>

    </div>
    </li>  

<!--
    <li><a href="#" class="drop">New <span class="gray">&#9662;</span></a>  
    <div class="dropdown_5columns menufade">            
    <p class="menutitle">Check out Electric Rush on Facebook.</p>
    <a href="http://facebook.com/ElectricRush"><img src="http://i.imgur.com/qGlkw3Z.png" alt="Electric rush" width="1024" height="150" class="fade"></a>


    </div>
    </li>
-->

<!--
    <li><a href="#" class="drop">Follow <span class="gray">&#9662;</span></a>  
    <div class="dropdown_5columns menufade">            
    <p class="menutitle">Keep up to date and in touch.</p>

            <div class="col_1 marginten">  
                <a href="http://facebook.com/radcircle"><img src="http://radcircle.com/images/facebook-icon-140-white.png" height="140" width="140" alt="Radcircle on Facebook" class="fade"></a>
            </div> 

            <div class="col_1">  
                <a href="http://twitter.com/radcircle"><img src="http://radcircle.com/images/twitter-icon-140-white.png" height="140" width="140" alt="Radcircle on Twitter" class="fade"></a>
            </div>  

           <div class="col_1">  
                <a href="http://soundcloud.com/radcircle"><img src="http://radcircle.com/images/soundcloud-icon-140-white.png" height="140" width="140" alt="Radcircle on Soundcloud" class="fade"></a>
            </div>  

            <div class="col_1">  
                <a href="http://spotify.com"><img src="http://radcircle.com/images/spotify-icon-140-white.png" height="140" width="140" alt="Radcircle on Spotify" class="fade"></a>
            </div>  

            <div class="col_1">  
                <a href="http://youtube.com/user/radcircle"><img src="http://radcircle.com/images/youtube-icon-140-white.png" height="140" width="140" alt="Radcircle on YouTube" class="fade"></a>
            </div>   

             <div class="col_1">  
                <a href="http://instagram.com/radcircle"><img src="http://radcircle.com/images/instagram.png" height="140" width="140" alt="Radcircle on Instagram" class="fade"></a>
            </div> 

            <div class="col_1">  
               <a href="http://radcircle.com/feed"><img src="http://radcircle.com/images/rss.png" height="140" width="140" alt="Radcircle RSS" class="fade"></a>
            </div>            
    </div>
    </li>  
-->

<div class="facebook-header-box-container">
<div class="fb-like" data-href="http://facebook.com/radcircle" data-width="100px" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
</div>

<div class="twitter-header-box-container">
<a href="https://twitter.com/Radcircle" class="twitter-follow-button" data-show-count="false">Follow @Radcircle</a>
</div>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>


</ul> 
<img src="http://radcircle.com/images/underbar.png" width="1024" height="10" alt="Radcircle Underbar">
</div> <!-- End Navigation Bar -->