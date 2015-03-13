<!-- if home, don't show navigation  -->

<?php if ($is_home): else: ?>
    <ul class="project-nav buttons <?php echo $projNavclass ?>">
        <li class="project-nav__li buttons__li project-nav__li--index">
        	<a class="project-nav__link project-nav__link--index button" href="<?php echo $backtohome ?>" title="View All"><i class="icon-grid"></i></a>
        </li>


        <?php if ($nextproject != '') { ?>
        <li class="project-nav__li buttons__li project-nav__li--next">
            <a class="project-nav__link project-nav__link--next button" href="<?php echo $nextproject ?>" title="Next"><i class="icon-right"></i></a>
        </li>
        <?php } ?> 


        <?php if ($prevproject != '') { ?>
            <li class="project-nav__li buttons__li project-nav__li--prev">
                <a class="project-nav__link project-nav__link--prev button" href="<?php echo $prevproject ?>" title="Previous"><i class="icon-left"></i></a>
            </li>
        <?php } ?>
    </ul>
<?php endif; ?>