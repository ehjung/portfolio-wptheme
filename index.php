<?php get_header(); ?>

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/least.min.css">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">  

<div id="main-content" class="main-content">

	<ul class="vertical_nav">
		<li><a href="#">about me</a></li>
		<li><a id="scroll2" href="#">traditional</a></li>
		<li><a id="scroll3" href="#">digital</a></li>
		<li><a href="#">resume</a></li>
		<li><a href="#">contact me</a></li>
	</ul>
	<button class="nav-toggle" type="button" data-toggle="collapse" data-target=".vertical_nav-collapse">Navigation</button>

	<div class="traditional_container-full">
		<div class="traditional_content" name="traditional">
			<a name="traditional" />
			<h1> Traditional Works </h1>
			
					<!-- Image Gallery starts here --> 

		<section>
<ul id="gallery">
    <li id="fullPreview"></li>
    
    <li>
        <a href="http://scitechdaily.com/images/New-VLT-Image-of-Messier-100.jpg"></a>
        <img data-original="http://scitechdaily.com/images/New-VLT-Image-of-Messier-100.jpg" src="http://scitechdaily.com/images/New-VLT-Image-of-Messier-100.jpg" width="240" height="150" alt="Ocean" />
        
        <div class="overLayer"></div>
        <div class="infoLayer">
            <ul>
                <li>
                    <h2>
                        Subway
                    </h2>
                </li>
                <li>
                    <p>
                        View Painting
                    </p>
                </li>
            </ul>
        </div>
        
        <div class="projectInfo">
            <strong>
                Day, Month, Year:
            </strong> sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
        </div>
    </li>
</ul>
</section>

			<!-- Image Gallery ends here -->


		</div>
	</div>

	<div class="digital_container-full">
		<div class="digital_content">
			<a name="digital" />
			<h1> This is another header </h1>
			<p> Here's some content stuff </p>
		</div>
	</div>
</div>

<?php get_footer(); ?>