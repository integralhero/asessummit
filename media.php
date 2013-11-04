<?php 
$page_name = "Media";
$page_title = "Photos and Videos";
$page_desc = "Content from previous Summit conferences";
include('inc/header.php'); ?>

<div id="myCarousel" class="carousel slide">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <!-- Carousel items -->
  <div class="carousel-inner">
    <div class="active item"><img height=auto width=600px src="img/talk.jpg">
	    <div class="carousel-caption">
	    <p>During a talk by Andrew Ng of Coursera.</p>
	    </div>
    </div>
    <div class="item">
	    <img height=auto width=600px src="img/winners.jpg">
	    <div class="carousel-caption">
	    <p>The winners of 2013 pitch competition.</p>
	    </div>
    </div>
    <div class="item">
	    <img height=auto width=600px src="img/yelp.jpg">
	    <div class="carousel-caption">
	    <p>A Q&A with the COO of Yelp!, Geoff Donaker.</p>
	    </div>
    </div>
  </div>
  <!-- Carousel nav -->
  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div>

<h1><small>More Media</small></h1>
<HR>
<section>
Here's a collection of photos and videos from past conferences:<BR>

<ul class="images">
<li>
<article>
	<a class="social" href="https://www.dropbox.com/sh/kzwwfec27ppaxhc/4-3LcBAN1U"><img src="img/dropbox.png"></a>
	<caption> Stanford Summit 2013</caption>
</article>
</li>
<li>
<article>
	<a class="social" href="https://picasaweb.google.com/SummitDirectors/ASESSUMMIT2008?authkey=Gv1sRgCLPlh-T72oXiAQ"><img src="img/picasa.png"></a>
	<caption> Stanford Summit 2008</caption>
</article>
</li>
</ul>
</section>
<?php include('inc/footer.php'); ?>