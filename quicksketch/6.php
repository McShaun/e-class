<?php 
$page = '6'; 
?>
<?php include("../inc/header.php"); ?>
<body>
<div class="container">
<div id="form" class="one">
<?php include("nav.php"); ?>
<form action="7.php" method="post" id="commentForm">
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
                <h2>The 2 types of Quick Sketch.</h2>
<p>
There are 2 kinds of quick sketching that I do. Each serves a different purpose and pushes my drawing skill in two different directions so I'll explain each one separately.</p>

<h3>Quick Sketch Exercise #1 – Copying Style.</h3>
<p>If you watch a cartoon or anime then you are translating from another artist's translation. The point here is obvious, you like their style and you want to recreate it. I call this Sharingan. Sharingan is a Japanese term used in the show Naruto. If you've never seen it then I'll give you a brief explanation. Sharingan is a ninja who has special eyes that give him the ability to perform any other ninja's special tricks as soon as they see the ninja perform it. One of the main characters in Naruto is his sensei who is known as the famous, "Copy Ninja." He is famous because he has copied so many different ninjas that he is now considered nearly impossible to defeat. The point of quick sketching is to be able to recreate images and styles simply by observing them.</p>
<p>The purpose of drawing other artist's translations is to let their style influence you. When quick sketching from a moving image we often have to memorize what we can from that instant that we see the image and make up for the rest with our own style or memory. So if you try to copy someone else's style while watching the television you will probably end up drawing in your own style instead of theirs. You only see their style for an instant and then you spend 5 minutes staring down at the page. If you end up drawing in your own style then you miss the point of this first exercise.</p>
<p>The simple solution to this is to hit pause on your favorite movie and then keep looking at the same image in great detail as you draw. Draw exactly the way they draw and don't get carried away drawing in your own style. Let them influence you.</p>
<blockquote>
<h3>Good artists copy, but great artists steal. – Picasso -</h3></blockquote>
<p>Try to find the essence of how they draw. Keep redrawing their drawings until you find what makes their drawings fundamentally different. Try to figure out what lines they start with and what basic shapes their designs are derived from. For instance, the character designer of the Toon Disney show, "Kim Possible" often derives his designs from a figure eight.</p>
<p>In the end try to draw their character in an original unseen pose. If you can recreate their style without looking at their drawings then you are finished. That is the ultimate test. Now you have not only copied their style, but now you have stolen it. Good job <img src="http://www.drawalot.com/smblog/wp-includes/images/smilies/icon_smile.gif" alt=":)" class="wp-smiley"> </p>
<p>If you steal several different styles then you will be able to derive your own style by combining different elements from each artist into your own original style.</p>

<h3>Quick Sketching Exercise #2 – Copying Nature</h3>
<p>This is the most important form of quick sketching and probably the most difficult. Try to look at nature and derive cartoons or simplified shapes from real images. This is direct translation. You are no longer looking at another artist's translation of nature but you are directly translating yourself. Look at actors and try to capture their personality in as few lines as possible. I think this exercise will be more fun for you after you have stolen several artists styles. Then you will have more tools to operate with. When you see an actor you'll be able to attack with your choice of cartoony style, Disney style, or comic book style, or any other style that you have recently copied.</p>
<h3>Be Lightning Fast</h3>
<p>Work fast. Find an interesting subject, memorize it, and then copy the image onto the page with lightning fast strokes.</p>
<p>Push yourself to keep doubling your speed. Draw with fewer and fewer lines. Don't draw and redraw over the same line. Nail it in perfectly the first time. This comes with time and practice, but eventually you should be able to nail the essence of what you see on the screen with a couple of minutes. To do this you have to find the right line to draw first. The right shape to add on top of that line. Then you have to draw a line for each arm or leg capturing the weight and proportions for each form with that one or two lines. The ultimate master is the person who can translate a complex image into two lines or three lines so well that another person can see the drawing and know exactly what the original image was. My favorite artist is the founder of my church, Joshua Jung. He is from Korea and is world famous for his line art paintings and calligraphy. He can draw a woman with one line and everyone recognizes instantly that it is a woman. He also draws lighting fast creating master drawings withing a few minutes.</p>
<h3>Combine the two exercises.</h3>
<p>If you copy a huge variety of styles you'll start to see some common ground among them. If you draw directly from nature then you'll start to see how and where your favorite artists found their inspirations. This is when the realizations for your own original style will come. It is a truly rewarding experience. It will give you a complete and thorough understanding of WHY your favorite artwork looks the way it looks.</p>
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