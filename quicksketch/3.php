<?php 
$page = '3'; 
?>
<?php include("../inc/header.php"); ?>
<body>

<div class="container">
<div id="form" class="one" >
<?php include("nav.php"); ?>
<form action="4.php" method="post" id="commentForm">
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
        	
<h2>It's not about good drawings.  It's about drawing good.</h2>
<p>Don't try to produce good drawings. It's like a rabbit, if you chase the rabbit he will run away from you. Instead of trying to make every one of your drawings look really good, just focus on trying to capture the essence of what you are drawing. As soon as you capture the interesting shape, the emotion, or the essence of what you saw on the screen try to recreate it on the page with a few strokes of your pen.  Drawing is very intuitive and requires an extreme sensitivity to capture images that are on your brain for just an instant.  If you get distracted you'll quickly lose the subject.  You should NOT be focusing on the physical paper or pen/pencil but on the subject that you are capturing.  Stay focused on the subject you are drawing, not the drawing itself.</p>
			
			
            <blockquote>
                    <p>AS SOON AS YOU HAVE DRAWN A UNDERSTANDABLE IMAGE ON THE PAGE MOVE ON. DON'T FINISH YOUR DRAWINGS AND DON'T ADD DETAIL!</p>
			</blockquote>

<p>I know this is hard for beginners but don't fall into this trap. You'll never grow as an artist if you spend a 1,000 hours adding insignificant lines to your drawings. Capture the image in as few lines as possible then move on.  If you keep drawing for a significant amount of time then eventually some of those drawings will come out really nicely.  But most of them may look really bad.  That's fine because the bad drawings are a part of the learning process.  If you try to make them all good it will distract you from practicing and learning.</p>
                       
        </div><!-- big gray -->
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