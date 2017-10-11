<section class="">
    <div class="wrap">

      <h2><?= $s->title() ?></h2>

      <?= $s->description()->kirbytext() ?>

      <?php if ($s->items() != '') : ?>
        <ul class="flexblock gallery">
          <?php foreach($s->items()->toStructure() as $item): ?>
            <li>
              <a href="<?= $item->theurl() ?>">
                <figure>
                  <?php if ($item->img() != '') : ?>
                    <?php $theimg = $item->img()->toFile() ?>
                    <?= $theimg->crop(400,300) ?>
                  <?php endif ?>
                  <figcaption>
                    <h2><?= $item->title() ?></h2>
                    <p><?= $item->text() ?></p>
                  </figcaption>
                </figure>
              </a>
            </li>
          <?php endforeach ?>
        </ul>
      <?php endif ?>

    </div>
    <!-- .end .wrap -->
  </section>