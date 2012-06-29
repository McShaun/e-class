<?php 
$page = '4'; 
?>
<?php include("../inc/header.php"); ?>
<body>
<div class="container">
<div id="form" class="one">
<?php include("nav.php"); ?>
<form action="5.php" method="post" id="commentForm">
<?php
  foreach($_POST as $key=>$value){
    if ($key!="submit"){
      $value=htmlentities(stripslashes(strip_tags($value)));
      echo "\t<input type=\"hidden\" name=\"$key\" value=\"$value\">\n";
    }
  }
?>
<div id="bigroundforms_form">
	<div id="content">		
    <div class="clear"></div>                     
        <div id="big_gray">
                <h1>Quick Sketch – How to Draw like a Pro <strong style="font-weight:100; font-size:18px;">Continued...</strong>
                </h1>
                </div>
                <div id="big_gray">
                <h3>Use Rhythm to Build up your Speed</h3>
<p>Find your rhythm and keep your flow. Build up momentum by drawing quickly and moving on to another drawing after a few minutes. Don't slow down. Build up your pace slowly. When people watch me sketch they always ask me, "Why is your hand constantly moving in circles? You move your hand in three circles and then make a line on the third stroke – why do you do that?" This isn't intentional on my part but it is true. I tend to keep my arm moving in a certain rhythm when I sketch. I didn't really have an answer for the them in the beginning but now that I have learned to play the guitar I understand why. You have to keep your rhythm so that the lines will flow out of your hand. When playing guitar your left hand changes position on the fret and your right hand keeps strumming. Your right hand has to keep strumming to a certain rhythm. In drawing too you must find rhythm. Your lines should also have rythm when you look at them.</p>

				</div name="big_gray">
                <div id="big_gray" class="footer">
            <blockquote>
            	<a href="http://pathoftheartist.wordpress.com/files/2007/08/sketch2.jpg" target="new"><img src="http://pathoftheartist.wordpress.com/files/2007/08/sketch2.jpg" border="4" align="right" class="alignright" height="260" /></a>
                    <p>Some of these I did with sharpie and some of them I drew with Brush pen. Brush pen is great because once you scan it in it looks like you drew it in ink using a paint brush. The ones on the left I drew while watching the movie, "The Last Samurai." The ones on the right I drew while looking at Discovery magazine.</p>
	</div><!-- big gray -->
    <!-- // Video 
    <div id="big_gray" style="display: block;">
            <div class="embed-container">
            <iframe src="http://player.vimeo.com/video/38568174?title=0&amp;byline=0&amp;portrait=0" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
            </div>
    </div name="big_gray">
    // Video -->
	
    </div><!-- content -->
<!-- End Video tabs ////////////////////////////////////////      -->
<!-- end of custom additions before post loop -->
<div id="big_gray">
    <div id="next">
        <h3>Go to the next page to keep reading!</h3>
    </div>
        <button id="form-submit" class="next" name="Lesson" value="Finished" type="submit" style="float:right;"></button>
<div>

</div><!-- end of bigroundforms_form -->
</form>
</div><!-- end of form div -->
</div name="cotainer">

<?php include("../inc/google-analytics.php") ; ?>
</body></html>