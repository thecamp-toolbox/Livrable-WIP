<section>
  <div class="wrap">
    <h2><?= $s->title() ?></h2>
    <?= $s->text()->kirbytext() ?>
    <ul class="flexblock metrics border">
    	<?php foreach ($s->datas()->toStructure() as $d) : ?>
		    <li>
		    	<?php if ($d->position() == 'top') : ?>
		    		<?= $d->text() ?>
		    	<?php endif ?>
		      	<?php if ($d->icon() != '') : ?>
			        <span>
			            <svg class="fa-<?= $d->icon() ?>">
			            	<use xlink:href="#fa-<?= $d->icon() ?>"></use>
			            </svg>
			        </span>
			    <?php elseif ($d->numb() != '') : ?>
			    	<span>
			    		<?= $d->numb() ?>
			    	</span>
			    <?php endif ?>
			    <?php if ($d->position() == 'bottom') : ?>
		        	<?= $d->text() ?>
		        <?php endif ?>
		    </li>
	 	<?php endforeach ?>
    </ul>
  </div>
  <!-- .end .wrap -->
</section>  