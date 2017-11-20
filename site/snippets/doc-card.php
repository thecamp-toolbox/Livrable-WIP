<a href="<?= $doc->url() ?>" class="button ghost download" target="_blank" download>
	<?php if ($doc->readablename() != '') : ?> 
		<?= $doc->readablename() ?>
	<?php else : ?>
		<?= $doc->name() ?>
	<?php endif ?>
	 (<?= $doc->niceSize() ?>)
	<svg class="fa-download">
        <use xlink:href="#fa-download"></use>
    </svg>
</a>