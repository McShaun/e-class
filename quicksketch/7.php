<?php 
$page = '7'; 
?>
<?php include("../inc/header.php"); ?>
<body>
<div class="container">
<div id="form" class="one">
<?php include("nav.php"); ?>
<form action="form2.php" method="post" id="commentForm">
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
                <h2>Warming up and Research</h2>
<p>If you need to draw an important illustration but are frustrated with your ability to draw, take a look at your favorite artist's artwork and do some quick sketching. This will help you to warm up and build up some rhythm in your work flow. If you need to do an illustration that requires a realistic style then it is important for you to gather some reference images and some study sketches. For me, the research stage is the most fun and it has a huge effect on how my work comes out. There are times when I've gathered 100s of photos just to help me design one character. I collect the photos and then do lighting quick sketches of the images in those photos. I try to find as many interesting shapes and explore different styles to create an original design based on the nature of my character. Ultimately you should get closer and closer to catching the essence of your subject. The audience should be able to feel your expression.</p>

<p>Before modeling and rigging my 3D character I did tons of research. I would collect 100s of images of black people and then sketch the images. In these sketches I'm looking at Jimmy Hendrix. After drawing him a number of times I then translated his emotions into my character Samuel which you can see towards the bottom right of the image. I was drawing so much at that time that my sketches were good enough to put in my portfolio. These drawings may appear to have quite a bit of detail but I drew them insanely fast. Sketching with pen is great because no matter how fast you move the pen can keep up without slowing you down. It also shades very quickly if you like to record the lighting in your subject.</p>
<a href="http://pathoftheartist.wordpress.com/files/2007/08/sketch3.jpg" target="new"><img src="http://pathoftheartist.wordpress.com/files/2007/08/sketch3.jpg" align="right" alt="Quick Sketch - Samuel" border="4" height="370" width="500" class="alignright"></a>
<h2>Publish your best drawings.</h2>
<p>Keep a stack of your favorite sketches. I tend to throw away all the drawings that I copied from other artists. I've thrown away 1,000s of sketches. I could try to keep them all but what is the point? I have them all on file in my mental library and I can recreate them at any time. If you have a thick stack of drawings drawn directly from nature then scan them in and composite them together for your portfolio. You can upload them to websites, publish them in a book, or create a movie out of them, whatever you want.  That can then be your portfolio.  When I graduated from college I collected all my best art along with some of my sketches I had composited together and I made a book called, "The Art of Shaun McMillan." To download a free copy just click on the cover below.  Many of the pages in my book are quick sketches I did in college. Some of them are research sketches, some are character designs, and some of them are just sketches I did while watching movies and tv shows. You might notice some Napoleon Dynamite drawings and some desperate housewives sketches in the book.</p>
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
        <h3>Go to the next page to finish!</h3>
    </div>
        <button id="form-submit" class="done" name="Lesson" value="Finished" type="submit" style="float:right;"></button>
<div>

</div><!-- end of bigroundforms_form -->
</form>
</div><!-- end of form div -->
</div name="cotainer">

<?php include("../inc/google-analytics.php") ; ?>
</body></html>