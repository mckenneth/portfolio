<nav class="pagination">
  <?php 
if ( $url == '/m/') { } elseif ( $url == '/m/index.php') { } else { ?>
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
