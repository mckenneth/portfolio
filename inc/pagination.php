<!-- if home, don't show navigation  -->

<div class="row">
    <span class="scrollUp" id="scroll-to-top">Top &uarr;</span>
</div>

<?php if (($url !== $home) || ($url !== $home.'index.php'))  { ?>

    <ul class="project-nav">
    	<li class="project-nav__btn project-nav__btn--index"><a class="project-nav__link pageExit" href="<?php echo $home ?>" title="View All"><i class="icon-photos-outline"></i></a></li>
	
		<?php if ($prevproject != '') { ?>
        <li class="project-nav__btn"><a class="project-nav__link project-nav__link--prev pageExit" href="<?php echo $prevproject ?>" title="Previous"><i class="icon-chevron-left"></i></a></li>
        <?php } ?>

        <?php if ($nextproject != '') { ?>
        <li class="project-nav__btn"><a class="project-nav__link project-nav__link--next pageExit" href="<?php echo $nextproject ?>" title="Next"><i class="icon-chevron-right"></i></a></li>
        <?php } ?> 
    </ul>
<?php } ?>