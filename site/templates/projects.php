<?php snippet('header') ?>

<article>
	<section>
		<div class="wrap size-50">
			<h2><?= $page->title() ?></h2>
			<ul class="description">
				<?php foreach ($page->children()->visible() as $p) : ?>
					<li>
						<a href="<?= $p->url() ?>" >
							<span><?= $p->title() ?></span>
						</a>
					</li>
				<?php endforeach ?>
			</ul>
		
			<!-- Hidden projects only for loged in users -->
			<?php if ($site->user()) : ?>
				<hr>
				<ul class="description">
					<h2>Projects cachés</h2>
					<?php foreach ($page->children()->invisible() as $p) : ?>
						<li>
							<a href="<?= $p->url() ?>" >
								<span><?= $p->title() ?></span>
							</a>
						</li>
					<?php endforeach ?>
				</ul>
			<?php endif ?>

		</div> <!-- Fin wrap -->
	</section>
</article>

<?php snippet('footer') ?>