<?php 
  $people = $s->people()->toStructure();
  $count = $people->count(); 
  $batch = 16;
  $div = floor($count/$batch); 
 ?>

  <?php 
  for ($i=$div; $i>=0; $i--) {
    $inv = $div-$i; 
    $offset = $batch*$inv;
    $chunk = $people->offset($offset)->limit($batch);
  ?>
    <section>
      <div class="wrap">
        <h2><?= $s->title() ?> <?php e($inv > 0, '(suite)') ?></h2>

        <ul class="flexblock">
          <?php foreach ($chunk as $someone) : ?>
            <li>
              <p><b><?= $someone->name() ?></b></p>
              <?= $someone->text() ?>
            </li>
          <?php endforeach ?>
        </ul>
      </div><!-- .end .wrap -->
    </section>
  <?php 
  };
  ?>

