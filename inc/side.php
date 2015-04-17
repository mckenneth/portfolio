<nav class="nav" role="navigation">	
	<h1 class="brand">	
		<?php
			if (($url == $home) || ($url == $home.'index.php')) {
			 	echo $brand;
			} else { 
			 	echo '<a href="'. $home .'" class="brand__link pageExit">'. $brand .'</a>';
			}
		?>
	</h1>
	
	<div class="global-nav">
		<ul class="buttons">
			<li class="buttons__li">
				<a id="about" class="button" href="#" title="Info">
					<i class="icon-info"></i>
				</a>
			</li>
		</ul>
	</div>
	
	<ul class="styleguide-nav buttons">
		<li class="buttons__li styleguide-nav__li">
			<a href="#typography" class="styleguide-nav__link scrollto button">
				<i class="icon-typography"></i>
			</a>
		</li>
		<li class="buttons__li styleguide-nav__li">
			<a href="#palettes" class="styleguide-nav__link scrollto button">
				<i class="icon-palettes"></i>
			</a>
		</li>
		<li class="buttons__li styleguide-nav__li">
			<a href="#images" class="styleguide-nav__link scrollto button">
				<i class="icon-images"></i>
			</a>
		</li>
		<li class="buttons__li styleguide-nav__li">
			<a href="#elements" class="styleguide-nav__link scrollto button">
				<i class="icon-elements"></i>
			</a>
		</li>
		<li class="buttons__li styleguide-nav__li">
			<a href="#animations" class="styleguide-nav__link scrollto button">
				<i class="icon-animation"></i>
			</a>
		</li>
	</ul>
</nav>