<?php 
$page = '2'; 
?>
<?php include("../inc/header.php"); ?>
<body>

<div class="container">
<div id="form" class="one">
<?php include("nav.php"); ?>
<form action="3.php" method="post" id="commentForm">
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
        </div><!-- big gray -->
        	<div id="big_gray">
            	<img src="../inc/css/images/form_avatar.png" align="left" style="margin-left:-5px;" >
                <h3>It Doesn't Take Much</h3>
        		<p>
                All you need is a fat stack of paper, a clipboard, something to draw with, and something inspirational to look at. Personally I like to use a ball point pen. Most people probably like to use a pencil but I don't recommend pencils. I recommend anything but a pencil. Ball point pens are good because they produce a consistent line without much effort. Sharpies are good because they produce a bold line and force you to draw with only one line for each side of the shape. Markers are even better. Pencils are not good because to produce a thick line they require effort. The point of quick sketching is to sketch quickly and effortlessly. It should flow out of your arm just like breathing, and pencils don't really allow you to do that as well as pens and markers.</p>
				<p>Here is an example of some of my own quick sketches. These were done on many different pages and then I cut them out and composited them together for my book. I drew the sketches on the right while watching Napoleon Dynamite, and the ones on the left are all random friends of mine. All of these drawings are done in pen.
				</p>
            <div class="embed-container">
            <iframe src="http://player.vimeo.com/video/37116816?title=0&amp;byline=0&amp;portrait=0" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
            </div>
	</div><!-- big gray -->
    <div class="clear"></div>                     
        <div id="big_gray">
        	<p>
    All of you too, if you are in the same situation as this Samaritan woman, the answer for you is the same. 
    		</p>
        </div><!-- big gray -->
    </div><!-- content -->
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