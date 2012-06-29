<?php 
$page = '1'; 
?>
<?php include("../inc/header.php"); ?>
<body>

	<!-- Primary Page Layout
	================================================== -->

	<!-- Delete everything in this .container and get started on your own site! -->

	<div class="container">
<div id="form" class="one">
<?php include("nav.php"); ?>
<form action="2.php" method="post" id="commentForm">
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
            <img src="../inc/css/images/form_avatar.png" align="left" style="margin-left:-5px;" ><h1>Quick Sketch – How to Draw like a Pro
                    </h1>
                    <p>Like to draw? Want to get better at drawing? What's the easiest way to learn? Have you ever wondered how comic artists and animators can draw anything at any angle, quickly, without looking at anything, and make it look good? It doesn't make sense if you just watch them draw. What you can't see when you watch them draw is the drawing exercises they did to get that good.</p>
                    <p>Quick sketching is easy, fun, and you can do it while you watch your favorite shows. Then you don't have to feel guilty for sitting in front of the television for a significant amount of time without getting anything done. When I quick sketch on a regular basis (at least a couple times a week) I produce more or less about 20 pages full of drawings for every 30 minutes of entertainment I watch. When I have not been practicing I may produce about half as many drawings in the same amount of time. Out of every 100 pages of drawings I produce I may find 20 or 30 of them that I keep and then I throw the rest away. In the end you have some good drawings, your skill improves rapidly, and you get to watch whatever you want. Sounds easy huh. It is.</p>
                    <p>In this article I'll be going over the true benefit of quick sketching, the two types of quick sketching that I do, and if you put it to practice then you'll find out how to draw as good as your favorite artists and why they draw the way they do. Quick sketch is the fundamental exercise with which you'll use to build your own original style. It will help you to recreate other's styles and create your own original way of drawing.
                    </p>
                 
                    
            </div name="big_gray">
            <!-- video //
    		<div id="big_gray" style="display: block;">
                <div class="embed-container">
                <iframe src="http://player.vimeo.com/video/37116815?title=0&amp;byline=0&amp;portrait=0" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                </div>
                <br>

            <p>
            All of you have to do the same. There are many people who already live in this way according to the answer that the Lord gave them.        
            </p>
            </div name="big_gray">
            // End of video -->
            <div id="big_gray" class="footer">
            <blockquote>
            	<a href="http://pathoftheartist.wordpress.com/files/2007/08/sketch.jpg" target="new"><img src="http://pathoftheartist.wordpress.com/files/2007/08/sketch.jpg" border="4" align="right" class="alignright" height="260" /></a>
                    <p>To the right is an example of some of my own quick sketches. These were done on many different pages and then I cut them out and composited them together for my book. I drew the sketches on the right while watching Napoleon Dynamite, and the ones on the left are all random friends of mine. All of these drawings are done in pen. </p>
	</div><!-- big gray -->
        </div><!-- content -->
    <div id="big_gray" style="display:inline-block;" >
        <div id="next">
            <h3>Go to the next page to keep reading!</h3>
        </div>
            <button id="form-submit" class="next" name="Lesson" value="Finished" type="submit" style="float:right;"></button>
    <div>
    
    </div><!-- end of bigroundforms_form -->
</form>
</div><!-- end of form div -->
<?php include("../inc/google-analytics.php") ; ?>
</body></html>