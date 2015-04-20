<? 
	$title = "M'c kenneth Licon - Graphic Designer / Interactive Media Developer";
	$description = "I'm a cross-disciplinary graphic designer and web developer, specializing in eCommerce and front-end development.";
	include('header.php') ?>
	<? include('inc/side.php') ?>
	<main role="main" class="main">
		<section role="article" class="intro">
			<h3 class="intro__text">
		        <strong>Hello</strong>. Bonjour.<br />
		        My name is <br class="break"/><a id="name" href="#">M'c kenneth</a><br />
		        I'm a <a href="#projectgrid" class="scrollto--projects">Graphic Designer</a> &amp; <br/>
		        <a href="#projectgrid" class="scrollto--projects">Front-end Developer</a>.
	        </h3>
			<div class="mck" role="banner">
				<img class="layer" data-depth="0.5" src="<?php echo 'data:image/svg+xml;base64,'.$logo_outline
				?>" width="996" height="551.04" alt="Mlicon">
				<img class="layer" data-depth="0.2" src="<?php echo 'data:image/svg+xml;base64,'.$logo
				?>" width="996" height="551.04" alt="Mlicon">
			</div>
	    </section>

	    <!-- item grid -->
		<section role="grid" class="project-grid" id="project-grid">
    		<article class="item" id="kokko">
	    		<a class="item__link" href="kokko">
	    			<h2 class="item__header">
	    				<img class="item__logo" src="assets/kokko/kokko_logo_w.png" alt="KOKKO">
	    			</h2>
	    		</a>
	    		<img class="item__img" src="assets/kokko/kokko_cover.jpg" width="400" height="300">
    		</article>	

    		<div class="item--spacer--gray">
	    		<img class="item__img" src="img/spacer.png" width="400" height="300" alt="spacer">
	    	</div>

	    	<article class="item" id="kenton">
	    		
	    		<a class="item__link" href="kenton">
	    			<h2 class="item__header"><img class="item__logo" src="assets/kenton/kenton_logo_w.png" alt="Kenton"></h2>
	    		</a>
	    		<img class="item__img" src="assets/kenton/kenton_cover.jpg" width="400" height="300">
    		</article>

    		<div class="item--spacer">
    			<img class="item__img" src="img/spacer.png" width="400" height="300" alt="spacer">
    		</div>   		

			<article class="item" id="artesia">
	    		<a class="item__link" href="artesia">
	    			<h2 class="item__header">
	    				<img class="item__logo" src="assets/artesia/artesia_logo_w.png" alt="Artesia">
	    			</h2>
	    		</a>
	    		<img class="item__img" src="assets/artesia/artesia_cover.jpg" width="400" height="300">
    		</article>

    		<article class="item" id="oakandfort">
	    		<a class="item__link" href="oakandfort">
	    			<h2 class="item__header">
	    				<img class="item__logo" src="assets/oakandfort/oakandfort_logo_w.png" alt="Oak + Fort">
	    			</h2>
	    		</a>
	    		<img class="item__img" src="assets/oakandfort/oakandfort_cover.jpg" width="400" height="300">
    		</article> 
    		
    		

			<article class="item" id="pekarskystein">
	    		<a class="item__link" href="pekarskystein">
	    			<h2 class="item__header">
	    				<img class="item__logo" src="assets/pekarskystein/pekarskystein_logo_w.png" alt="Pekarsky Stein">
	    			</h2>
	    		</a>
	    		<img class="item__img" src="assets/pekarskystein/pekarskystein_cover.jpg" width="400" height="300">
    		</article> 

			<div class="item item--spacer"><img class="item__img" src="img/spacer.png" width="400" height="300" alt="spacer"></div>
	
    		
    		<div class="item--spacer--gray"><img class="item__img" src="img/spacer.png" width="400" height="300" alt="spacer"></div>

    		<div class="item item--spacer"><img class="item__img" src="img/spacer.png" width="400" height="300" alt="spacer"></div>

			<article class="item" id="stringamdenecky">
	    		<a class="item__link" href="stringamdenecky">
	    			<h2 class="item__header">
	    				<img class="item__logo" src="assets/stringamdenecky/stringamdenecky_logo_w.png" alt="Stringam Denecky">
	    			</h2>
	    		</a>
	    		<img class="item__img" src="assets/stringamdenecky/stringamdenecky_cover.jpg" width="400" height="300">
    		</article> 

			<article class="item" id="arrivehome">
	    		<a class="item__link" href="arrivehome">
	    			<h2 class="item__header">
	    				<img class="item__logo" src="assets/arrivehome/arrivehome_logo_w.png" alt="Arrive Home">
	    			</h2>
	    		</a>
	    		<img class="item__img" src="assets/arrivehome/arrivehome_cover.jpg" width="400" height="300">
    		</article>
    		
    		<article class="item" id="cityofvancouver">
	    		<a class="item__link" href="cityofvancouver">
	    			<h2 class="item__header">
	    				<img class="item__logo" src="assets/cityofvancouver/cityofvancouver_logo_w.png" alt="City of Vancouver">
	    			</h2>
	    		</a>
	    		<img class="item__img" src="assets/cityofvancouver/cityofvancouver_cover.jpg" width="400" height="300">
    		</article>
    		<div class="item--spacer--gray">
	    		<img class="item__img" src="img/spacer.png" width="400" height="300" alt="spacer">
	    	</div> 
    		<!-- <article class="item" id="onegoodidea">
	    		<a class="item__link" href="onegoodidea">
	    			<h2 class="item__header"><img class="item__logo" src="assets/onegoodidea/onegoodidea_logo_w.png" alt="One Good Idea"></h2>
	    		</a>
	    		<img class="item__img" src="assets/onegoodidea/onegoodidea_cover.jpg" width="400" height="300">
    		</article> 	 -->
    		<div class="clear"></div>	
		</section>
	</main>
<? include('footer.php') ?>