<?php snippet('header') ?>

<?php date_default_timezone_set('UTC'); ?>
<?php setlocale(LC_TIME, "fr_FR", ""); ?>

<?php $project = $page->parent() ?>

<article id="webslides">  <!-- Slideshow -->

  <!-- Page de ouverture générée automatiquement -->
  <section class="bg-primary aligncenter">
   <span class="background dark" style="background-image:url('<?= $site->url() ?>/assets/images/thecamp2.jpg')"></span>
    <!--.wrap = container (width: 90%) with fadein animation -->
    <div class="wrap">
      <!-- conversion des dates en texte compréhensible -->
      <?php 
        $startdate = strftime("%d/%m/%Y", strtotime($project->startdate('l j F Y')));
        $enddate = strftime("%d/%m/%Y", strtotime($project->enddate('l j F Y')));
      ?>
      <p class="text-subtitle"><?= $startdate ?> → <?= $enddate ?></p>
      <h1 class="text-landing"><?= $project->offre() ?></h1>
      <p class="text-symbols"><?= $project->client() ?></p>
      <p>Livrable</p>
    </div>
  </section>

  <?php snippet('slides-loop', array('page' => $page)) ?>

  <!-- Intégrer page de fin générée automatiquement --> 
  <section class="fullscreen">
    <div class="card-50">
      <figure>
        <img src="<?= $site->url() ?>/assets/images/thecamp1.jpg" alt="thecamp">
        <figcaption>
            <svg class="fa-camera">
              <use xlink:href="#fa-camera"></use>
            </svg>
            Architectes Corinne Vezzoni
        </figcaption>
      </figure>
      <!-- end figure-->
      <div class="flex-content aligncenter">
        <h2>
          Contact
        </h2>
        <p>
          Arthur Schmitt<br>
          <a href="mailto:arthur@thecamp.fr">arthur@thecamp.fr</a><br>
          O7 69 70 40 84 
        </p>
      </div>
      <!-- end .flex-content-->
    </div>
    <!-- end .card-50-->
  </section>

</article>

<?php snippet('footer') ?>