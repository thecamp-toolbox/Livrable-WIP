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
      <span class="button ghost">Voir 
        <svg class="fa-eye">
            <use xlink:href="#fa-eye"></use>
          </svg>
      </span>
    </div>
  </a>
</li>