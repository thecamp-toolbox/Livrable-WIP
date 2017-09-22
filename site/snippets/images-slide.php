<!-- Masonry --> 

<section class="images">
  	<div class="wrap">
  		<h2><?= $s->title() ?></h2>
  		<div class="grid">
	    	<?php foreach ($s->images() as $img) : ?>
	    		<?php $thumb = $img->thumb([
				  'width'   => 300, 
				  'height'  => 200, 
				  'quality' => 80
				]) ?>
				<a href="<?= $img->url() ?>">
					<img class="grid-item" src="<?= $thumb->url() ?>">
				</a>
	    	<?php endforeach ?>
    	</div>
	</div>
</section>

