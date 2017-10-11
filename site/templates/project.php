<?php snippet('header') ?>

<?php date_default_timezone_set('UTC'); ?>
<?php setlocale(LC_TIME, "fr_FR", ""); ?>

<article>

	<section class="bg-primary aligncenter">
		<span class="background dark" style="background-image:url('<?= $site->url() ?>/assets/images/thecamp2.jpg')"></span>
	    <!--.wrap = container (width: 90%) with fadein animation -->
	    <div class="wrap">
	      <!-- conversion des dates en texte compréhensible -->
	      <?php if ($page->startdate() != '' && $page->enddate() != '') : ?>
		      <?php 
		        $startdate = strftime("%d/%m/%Y", strtotime($page->startdate('l j F Y')));
		        $enddate = strftime("%d/%m/%Y", strtotime($page->enddate('l j F Y')));
		      ?>
		      <p class="text-subtitle"><?= $startdate ?> → <?= $enddate ?></p>
		  <?php endif ?>
	      <h1 class="text-landing"><?= $page->offre() ?></h1>
	      <p class="text-symbols"><?= $page->client() ?></p>
	      <p>Page projet</p>
	      <svg class="fa-caret-down fa-4x">
            <use xlink:href="#fa-caret-down"></use>
        </svg>
	    </div>
	</section>

	<section>
		<div class="wrap">
		<h1><?php echo $page->title()->html() ?></h1>
			<div class="grid ms">
				<div class="column">
					<?php $children = $page->children()->visible() ?>
					<?php if ($children != '') : ?> 
						<h3>Documents</h3>
						<?php foreach ($children as $p) : ?>
							<strong><?= $p->title() ?></strong>
							<a href="<?= $p->url() ?>" class="button" target="_blank">  
								<svg class="fa-eye">
						            <use xlink:href="#fa-eye"></use>
						        </svg>
						        Voir
							</a><br>
						<?php endforeach ?>
					<?php endif ?>
				</div>
				<div class="column">
					<?php if ($page->hasDocuments()) : ?>
						<h3>Téléchargements</h3>
						<?php foreach ($page->documents() as $doc) : ?>
							<a href="<?= $doc->url() ?>" target="_blank" download>
								<?= $doc->name() ?> (<?= $doc->niceSize() ?>)
								<svg class="fa-download">
							        <use xlink:href="#fa-download"></use>
							    </svg>
							</a>
						<?php endforeach ?>
					<?php endif ?>
				</div>
			</div>
		</div>
	</section>

	<!-- Fichiers en téléchargement --> 

	<!-- Un jour avoir le profil de la personne qui fait le contact --> 

</article>

<?php snippet('footer') ?>