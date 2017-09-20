<?php snippet('header') ?>

<article>
	<section>
		<div class="wrap size-50">
		<h1><?php echo $page->title()->html() ?></h1>

		<?php foreach ($page->children() as $p) : ?>
			<a href="<?= $p->url() ?>"><?= $p->title() ?></a><br>
		<?php endforeach ?>
		</div>
	</section>

</article>

<?php snippet('footer') ?>