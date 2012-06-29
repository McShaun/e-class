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
           <!--
           </div name="big gray">
           <div class="clear"></div>                     
        	<div id="big_gray"> 
            -->    
				<h3>Effortless and fluid.</h3>
                <p>
When you quick sketch you are basically looking at something and then drawing it on the page. Most young artists or inexperienced artists focus intensely on the paper and the lines that they are drawing. What you want to do is focus on the subject you are drawing. Scan the screen and look for shapes, forms, and expressions. I usually just look at the characters/people and then draw them somewhere on the page.</p>
				<p>
If you are really good then you could memorize the composition of the subject within the television frame. For instance you could try to memorize how big the character is on the screen and how close to one side or the other they are. On your paper you'll want to draw the frame first and then place the character within the frame. This isn't necessary though and I don't recommend it unless you plan to become a story board artist.</p>

            <!-- // video
            <div class="embed-container">
            <iframe src="http://player.vimeo.com/video/37116816?title=0&amp;byline=0&amp;portrait=0" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
            </div> 
            video // -->
    
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