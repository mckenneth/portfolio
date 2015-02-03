<?php
	$project = 'kenton';
	include('header.php');
	include('inc/side.php')
?>

	<main role="main" class="main main--portfolio">
		
		<?php include('inc/wallpaper.php') ?>

		<article class="project" id="<?php echo $project ?>">

			<div class="row--with-border">
				<div class="copy">
		        <p>KENTON magazine is a leading global online fashion and lifestyle magazine for young professionals.  To celebrate a year of successful online publishing, I was commissioned to help redesign their website.</p>

				<p>KENTON was relaunched with a refreshed visual design, sophisticated backend technology and a sleek user interface, re-imagined for a modern and mobile audience.</p>
				</div>
			</div>


	        <div class="row">
	        	<div class="image">
	        		<?php showImg('assets/kenton/kenton_001.jpg'); ?>
	        	</div>
	        </div>
	        
			<div class="row">
				<div class="image image--lg">
	        		<?php showImg('assets/kenton/kenton_002.jpg'); ?>
	        	</div>
	        </div>
			
			<div class="row">
				<div class="image image--md">
	        		<?php showImg('assets/kenton/kenton_003.jpg'); ?>
	        	</div>
	        </div>

	        <div class="row--left">
				<div class="image image--md">
	        		<?php showImg('assets/kenton/kenton_004.jpg'); ?>
	        	</div>
	        </div>

	        <div class="row">
	        	<div class="image browser">
	        		<?php showImg('assets/kenton/kenton_000.jpg'); ?>
	        	</div>
	        </div>
	

	        <hr class="line">
			<div class="row">
				<div class="copy">	
					<dl>	
						<dt>Roles</dt>
						<dd>Responsive Web Design, CMS Integration/Development</dd>

						<dt>Launched</dt>
						<dd>2013</dd>

						<dt>Link</dt>
						<dd><a href="http://kentonmagazine.com" target="_blank" title="Kenton Magazine">kentonmagazine.com</a></dd>
					</dl>
				</div>
			</div>
		<?php include('inc/pagination.php'); ?>  
		</article>
	</main>
<?php include('footer.php') ?>