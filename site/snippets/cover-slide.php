<?php $image = makeImage($s) ?>

<section class="bg-gradient-v">
  <span class="background dark" style="background-image:url('<?= $image ?>')"></span>
  <div class="wrap size-60">
    <h2><?= $s->title() ?></h2>
    <?= $s->description()->kirbytext() ?>
  </div>
  <!-- .end .wrap -->
</section>