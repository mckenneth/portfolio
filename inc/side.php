<nav class="nav" role="navigation">	
	<h1 class="brand">	
	<?php
		$brand = '<img class="logo" src="data:image/svg+xml;base64,'.$logo_svg.'" width="56" height="31" alt="Mlicon">';

		if (($url == $home) || ($url == $home.'index.php')) {
		 	echo $brand;
		} else { 
		 	echo '<a href="'. $home .'" class="pageExit">'. $brand .'</a>';
		}
	?>
	</h1>
	<ul class="global-nav">
		<li class="global-nav__btn global-nav__btn--about">
			<a id="about" class="global-nav__link" href="" title="Info">
				<i class="icon-information"></i>
			</a>
		</li>
	</ul>
</nav>