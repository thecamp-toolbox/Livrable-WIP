<li>
  <a href="<?= $prez->url() ?>" title="<?= $prez->title() ?>" target="_blank">
    <h2>PRESENTATION</h2>
    <div>
      <h1><?= $prez->title() ?></h1>
      <ul>
        <li>
          <svg class="fa-sticky-note-o">
            <use xlink:href="#fa-sticky-note-o"></use>
          </svg>
          <strong><?= $prez->children()->count() ?></strong> slides
        </li>
        <?php if ($prez->maker() != '') : ?> 
          <li>
            <svg class="fa-user">
              <use xlink:href="#fa-user"></use>
            </svg>
            <?= $prez->maker() ?>
          </li>
        <?php endif ?>
        <?php if ($prez->bu() != '') : ?>
        <li>
          <svg class="fa-cube">
            <use xlink:href="#fa-cube"></use>
          </svg>
          <strong><?= $prez->bu() ?></strong>
        </li>
      <?php endif ?>
      </ul>
      <span class="button ghost">Voir 
        <svg class="fa-eye">
            <use xlink:href="#fa-eye"></use>
          </svg>
      </span>
    </div>
  </a>
</li>