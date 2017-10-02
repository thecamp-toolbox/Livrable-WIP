<?php snippet('header') ?>

<?php date_default_timezone_set('UTC'); ?>
<?php setlocale(LC_TIME, "fr_FR", ""); ?>

<article>

	<section class="bg-primary aligncenter">
		<span class="background dark" style="background-image:url('<?= $site->url() ?>/assets/images/thecamp2.jpg')"></span>
	    <!--.wrap = container (width: 90%) with fadein animation -->
	    <div class="wrap">
	      <!-- conversion des dates en texte compréhensible -->
	      <?php 
	        $startdate = strftime("%d/%m/%Y", strtotime($page->startdate('l j F Y')));
	        $enddate = strftime("%d/%m/%Y", strtotime($page->enddate('l j F Y')));
	      ?>
	      <p class="text-subtitle"><?= $startdate ?> → <?= $enddate ?></p>
	      <h1 class="text-landing"><?= $page->offre() ?></h1>
	      <p class="text-symbols"><?= $page->client() ?></p>
	      <p>Page projet</p>
	      <svg class="fa-caret-down fa-4x">
            <use xlink:href="#fa-caret-down"></use>
        </svg>
	    </div>
	</section>

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

	<!-- Fichiers en téléchargement --> 

	<!-- Un jour avoir le profil de la personne qui fait le contact --> 

</article>

<?php snippet('footer') ?>