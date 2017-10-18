<?php snippet('header') ?>

<article>
	<section>
		<div class="wrap"> 
			<h2>Documents</h2>
			<ul class="flexblock plans">
				<?php foreach ($site->pages()->visible()->filterBy('template','slideshow') as $s) : ?>
					<?php snippet('slideshow-card',array('prez'=>$s)) ?>
				<?php endforeach ?>
			</ul>
		</div>
		<div class="wrap size-50 aligncenter">
			<a href="/programs" class="button">Programmes</a>
		</div>
	</section>
</article>

<?php snippet('footer') ?>