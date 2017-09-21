<?php snippet('header') ?>

<article>

	<section>
		<div class="wrap size-50">
		<h1><?php echo $page->title()->html() ?></h1>
		<?php foreach ($page->children()->visible() as $p) : ?>
			<h3><?= $p->title() ?></h3>
			<a href="<?= $p->url() ?>" class="button" target="_blank">		          
				<svg class="fa-eye">
		            <use xlink:href="#fa-eye"></use>
		        </svg>
		        Voir
			</a><br>
		<?php endforeach ?>
		</div>
	</section>

	<!-- Un jour avoir le profil de la personne qui fait le contact -->

</article>

<?php snippet('footer') ?>