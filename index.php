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
                IndianProducts is a service to help Indians choose products made in India by wholly owned Indian companies over imported ones. The service currently under construction. Err, even the name hasn't been decided yet!
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
                <div class='intro-para'>Gingerbread soufflé tootsie roll fruitcake jelly beans tootsie roll chocolate bar donut dessert. Candy canes cupcake unerdwear.com sugar plum jelly-o. Tart cupcake cotton candy applicake chocolate jelly-o ice cream topping. Topping donut candy powder cotton candy. Liquorice sweet roll jelly. Sweet roll apple pie dragée gingerbread jelly beans gingerbread sweet roll sugar plum muffin. Sweet macaroon jelly-o gummi bears chocolate chupa chups caramels.</div>
                <div class='intro-para'>Chupa chups chocolate bar muffin macaroon powder gingerbread caramels. Chupa chups gingerbread applicake bonbon carrot cake pudding oat cake. Ice cream unerdwear.com dessert lollipop bonbon brownie sugar plum tootsie roll chocolate cake. Gummies pie icing dessert lemon drops wafer gummies. Liquorice macaroon wafer soufflé candy canes. Cupcake jelly-o liquorice dessert cupcake carrot cake lollipop pastry.</div>
            </div>
        </div>
	</body>
</html>";
?>