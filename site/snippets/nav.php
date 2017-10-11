
<?php if ($page->template() == 'slideshow' || $page->template() == 'livrable') : ?>
  <a href="<?= $page->parent()->url() ?>" class="burger">
    <?php snippet('galet') ?>
  </a>
<?php elseif ($page->template() == 'project') : ?>
  <a href="http://thecamp.fr" class="burger">
    <?php snippet('galet') ?>
  </a>
<?php else : ?>
  <a href="<?= $site->url() ?>" class="burger">
    <?php snippet('galet') ?>
  </a>
<?php endif ?>
