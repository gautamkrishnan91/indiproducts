<?php  echo"
<html>
	<head>";
		include 'headers.php';
        echo"
		<script src='js/slides.min.jquery.js'></script>
        <script>
			$(function(){
				$('#slides').slides({
					preload: true,
					preloadImage: 'images/loading.gif',
					play: 3000,
					pause: 2500,
					hoverPause: true
				});
			});
		</script>
	</head>
	<body>";
		include 'header.php';
        echo"
        <div id='content-wrapper'>
            <div id='left-about-pane'>
                <h2>What is IndianProducts?</h2>
                Wypas lollipop gingerbread pie tart sesame snaps. Carrot cake chocolate tootsie roll powder. Sugar plum bear claw gingerbread cake lollipop marshmallow. Dragee sesame snaps wypas bonbon faworki lemon drops sesame snaps. Pie candy muffin. Lollipop cotton candy chocolate cake gummies chocolate bar.
            </div>
            <div id='center-gallery'>
                <div id='slider-wrapper'>
                    <div id='slides'>
                        <div class='slides_container'>
                            <a href='http://www.flickr.com/photos/jliba/4665625073/' title='145.365 - Happy Bokeh Thursday! | Flickr - Photo Sharing!' target='_blank'><img src='images/slide-1.jpg' width='480' height='300' alt='Slide 1'></a>
                            <a href='http://www.flickr.com/photos/stephangeyer/3020487807/' title='Taxi | Flickr - Photo Sharing!' target='_blank'><img src='images/slide-2.jpg' width='480' height='300' alt='Slide 2'></a>
                            <a href='http://www.flickr.com/photos/childofwar/2984345060/' title='Happy Bokeh raining Day | Flickr - Photo Sharing!' target='_blank'><img src='images/slide-3.jpg' width='480' height='300' alt='Slide 3'></a>
                            <a href='http://www.flickr.com/photos/b-tal/117037943/' title='We Eat Light | Flickr - Photo Sharing!' target='_blank'><img src='images/slide-4.jpg' width='480' height='300' alt='Slide 4'></a>
                            <a href='http://www.flickr.com/photos/bu7amd/3447416780/' title='“I must go down to the sea again, to the lonely sea and the sky; and all I ask is a tall ship and a star to steer her by.” | Flickr - Photo Sharing!' target='_blank'><img src='images/slide-5.jpg' width='480' height='300' alt='Slide 5'></a>
                            <a href='http://www.flickr.com/photos/streetpreacher/2078765853/' title='twelve.inch | Flickr - Photo Sharing!' target='_blank'><img src='images/slide-6.jpg' width='480' height='300' alt='Slide 6'></a>
                            <a href='http://www.flickr.com/photos/aftab/3152515428/' title='Save my love for loneliness | Flickr - Photo Sharing!' target='_blank'><img src='images/slide-7.jpg' width='480' height='300' alt='Slide 7'></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id='right-why-pane'>
                <div id='right-why-pane-title'>
                    Why buy only Indian Products?
                </div>
                <ul>
                    <li>Your money directly reaches the people.</li>
                    <li>Sustains indegeneously made goods and services.</li>
                    <li>Has a direct impact on the economy.</li>
                </ul>
            </div>
            <div class='clear'></div>
            <div id='brand-showcase-index'>
                <div class='brand-showcase-header'>Top Electronics brands<div class='brand-showcase-header-viewall'>View all</div></div>
                <div class='brand-showcase-boxes'>
                    <div class='brand-showcase-element'>
                        <div class='brand-showcase-element-box'></div>
                        <div class='brand-showcase-element-text'>Hello</div>
                    </div>
                    <div class='brand-showcase-element'>
                        <div class='brand-showcase-element-box'></div>
                        <div class='brand-showcase-element-text'>Hello</div>
                    </div>
                    <div class='brand-showcase-element'>
                        <div class='brand-showcase-element-box'></div>
                        <div class='brand-showcase-element-text'>Hello</div>
                    </div>
                    <div class='brand-showcase-element'>
                        <div class='brand-showcase-element-box'></div>
                        <div class='brand-showcase-element-text'>Hello</div>
                    </div>
                    <div class='brand-showcase-element'>
                        <div class='brand-showcase-element-box'></div>
                        <div class='brand-showcase-element-text'>Hello</div>
                    </div>
                </div>
                <div class='brand-showcase-header'>Top Food and Beverages brands<div class='brand-showcase-header-viewall'>View all</div></div>
                <div class='brand-showcase-boxes'>
                    <div class='brand-showcase-element'>
                        <div class='brand-showcase-element-box'></div>
                        <div class='brand-showcase-element-text'>Hello</div>
                    </div>
                    <div class='brand-showcase-element'>
                        <div class='brand-showcase-element-box'></div>
                        <div class='brand-showcase-element-text'>Hello</div>
                    </div>
                    <div class='brand-showcase-element'>
                        <div class='brand-showcase-element-box'></div>
                        <div class='brand-showcase-element-text'>Hello</div>
                    </div>
                    <div class='brand-showcase-element'>
                        <div class='brand-showcase-element-box'></div>
                        <div class='brand-showcase-element-text'>Hello</div>
                    </div>
                    <div class='brand-showcase-element'>
                        <div class='brand-showcase-element-box'></div>
                        <div class='brand-showcase-element-text'>Hello</div>
                    </div>
                </div>
            </div>
        </div>
	</body>
</html>";
?>