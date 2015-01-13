<?php
    $url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    $home = 'http://'.$_SERVER['HTTP_HOST'].'/portfolio/';

    $projects = array('kokko', 'kenton', 'oakandfort', 'arrivehome', 'pekarskystein', 'stringamdenecky', 'artesia', 'cityofvancouver', 'onegoodidea' );
    $x = array_search($project, $projects);
    $nextproject = $projects[($x +1)];
    $prevproject = $projects[($x -1)];
?>

<nav class="nav" role="navigation">
    <h1><a href="<?php echo $home ?>" class="logo">MLicon</a></h1>

    <?php
	if ( $url == $home) { } elseif ( $url == $home.'index.php') { } else { ?>
	<ul class="project-nav">
	    <?php if ($nextproject != '') { ?>
	    <li class="project-nav__next"><a href="<?php echo $nextproject ?>.php" title="Next"><i class="icon-chevron-right"></i></a></li>
	    <?php } ?>

	    <?php if ($prevproject != '') { ?>
	    <li class="project-nav__prev"><a href="<?php echo $prevproject ?>.php" title="Previous"><i class="icon-chevron-left"></i></a></li>
	    <?php } ?>

	    <li class="project-nav__index"><a href="index.php" title="View All"><i class="icon-grid"></i></a></li>
	</ul>
	<?php } ?>

</nav>
