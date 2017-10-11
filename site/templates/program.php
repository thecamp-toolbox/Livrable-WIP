<?php snippet('header') ?>

<?php date_default_timezone_set('UTC'); ?>
<?php setlocale(LC_TIME, "fr_FR", ""); ?>

<article>

	<!-- cover -->
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

	<!-- Main presentations and downloads -->
	<section>
		<div class="wrap">
		<h1><?php echo $page->title()->html() ?></h1>
			<div class="grid ms">
				<div class="column">
					<?php $children = $page->children()->filterBy('template','slideshow')->visible() ?>
					<?php if ($children != '') : ?> 
						<h3>Productions</h3>
						<ul class="flexblock plans">
							<?php foreach ($children as $p) : ?>
								<?php snippet('slideshow-card',array('prez'=>$p)) ?>
							<?php endforeach ?>
						</ul>
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

	<?php foreach ($page->children()->filterBy('template','project') as $pro) : ?>
		<section>
			<div class="wrap">
				<h2><?= $pro->title() ?></h2>
				<?= $pro->description()->kirbytext() ?>
			</div>
		</section>
	<?php endforeach ?>

	<section>
		<div class="wrap">
    <ul class="flexblock plans">
      <li>
        <a href="#" title="Register">
          <h2>PRESENTATION</h2>
          <div>
            <span class="price">Free</span>
            <ul>
              <li>
                <svg class="fa-check">
                  <use xlink:href="#fa-check"></use>
                </svg>
                <strong>Free</strong> forever
              </li>
              <li>
                <svg class="fa-check">
                  <use xlink:href="#fa-check"></use>
                </svg>
                <strong>Eternal</strong> sunshine
              </li>
              <li>
                <svg class="fa-check">
                  <use xlink:href="#fa-check"></use>
                </svg>
                <strong>Ads</strong>
              </li>
            </ul>
            <span class="button ghost">Select</span>
          </div>
        </a>
      </li>
      <li>
        <a href="#" title="Purchase">
          <h2>Good Karma</h2>
          <div>
            <span class="price"><sup>$</sup>40 <sup>/year</sup></span>
            <ul>
              <li>
                <svg class="fa-check">
                  <use xlink:href="#fa-check"></use>
                </svg>
                <strong>Exclusive</strong> content
              </li>
              <li>
                <svg class="fa-check">
                  <use xlink:href="#fa-check"></use>
                </svg>
                <strong>Unlimited</strong> projects
              </li>
              <li>
                <svg class="fa-check">
                  <use xlink:href="#fa-check"></use>
                </svg>
                <strong>Unlimited</strong> users
              </li>
            </ul>
            <span class="button">Select</span>
          </div>
        </a>
      </li>
    </ul>
  </div>
  <!-- .end .wrap -->

	</section>

	<!-- Un jour avoir le profil de la personne qui fait le contact --> 

</article>

<?php snippet('footer') ?>