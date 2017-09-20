<?php snippet('header') ?>

<article id="webslides">  <!-- Slideshow -->

  <section class="bg-primary aligncenter">
   <span class="background dark" style="background-image:url('<?= $site->url() ?>/assets/images/thecamp2.jpg')"></span>
    <!--.wrap = container (width: 90%) with fadein animation -->
    <div class="wrap">
      <p class="text-subtitle"><?= $page->parent()->startdate() ?> → <?= $page->parent()->startdate() ?></p>
      <h1 class="text-landing"><?= $page->parent()->offre() ?></h1>
      <p class="text-symbols"><?= $page->parent()->client() ?></p>
      <p>Livrable d'atelier</p>
    </div>
    <!-- .end .wrap -->
  </section>

  <?php foreach ($page->children() as $s) : ?>

    <?php if ($s->template() == 'cover-slide') : ?>
      <?php snippet('cover-slide',array('s' => $s)) ?>

    <?php elseif ($s->template() == 'default-slide') : ?>
      <?php snippet('default-slide', array('s' => $s)) ?>

    <?php elseif ($s->template() == 'card-slide') : ?>
      <?php snippet('card-slide', array('s' => $s)) ?>      

    <?php elseif ($s->template() == 'portfolio-slide') : ?> 
      <?php snippet('portfolio-slide', array('s' => $s)) ?>

    <?php endif ?>

  <?php endforeach ?>

</article>

<?php snippet('footer') ?>