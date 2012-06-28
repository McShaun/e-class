<?php 
$page = '5'; 
?>
<?php include("../inc/header.php"); ?>
<body>
<div class="container">
<div id="form" class="one">
<?php include("nav.php"); ?>
<form action="6.php" method="post" id="commentForm">
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
                <h2>Don't work at it.</h2>
<p>When I first began training as an artist I was attending 4 hour drawing classes. This was exhausting to me. I would get tired of drawing after a couple of hours. Once I began to enjoy it I could go for 3 or 4 hours. When I finally broke through I found that I could draw for hours on end without getting tired. It become like hand writing or typing, it is just something you do and it doesn't take much effort. It could also be compared to a video game. I am combing different shapes, techniques, and different styles. It becomes fun because you are exploring the world of design in the same way that a gamer combines different buttons and actions in reaction to a virtual world.</p>
<h2>Drawing out of your head.</h2>
<p>Professional artists do not draw from nothing. It looks like they are drawing from nothing but they aren't. Most gather as many photographs and illustrations as possible before attempting to draw anything, but there are times when you will see an artist drawing without looking at anything. They appear to be drawing from nothing but they aren't. Let me explain.</p>
<p>An artist oberves the world and then recreates it with his tools. The world is an infinite source of images and each artist has his own library of images in his head. By observing an image in nature the artist scans the image and places it in his memory. Memories can't hold very much information, but the images in nature throw tons of information at us. The amount of information we can keep in our head is limited, so to put more in we have to translate what we see into something that is much easier to remember. For example if you look at a dog and you notice he has a certain shape. Then you can memorize that shape. The shape is much easier to remember than the actual image of the dog because I dog has texture, color, lighting, details, and a million other bits of information. Each time you draw something it is like writing something down and then sticking it in your library. Then when you want to draw an image of a dog you just search your library for that shape that you memorized. If you try to draw a dog without ever having translated that image then you will find it impossible.</p>
<p>The important thing to learn from quick sketching is how to translate complex images into simple drawings. Then you build up your library so that you can recreate those images very quickly and efficiently.</p>
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