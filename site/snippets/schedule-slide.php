
<section>
  <div class="wrap">
    <h2><?= $s->title() ?></h2>

    <ul class="work">
    	<?php $start = $s->starttime(); ?>
    	<?php $time = '2014-06-01 '.$start.':00' ?>

    	<li class="work-label">
        	<p class="time"><i class="fa fa-clock-o"></i></p>
        	<p class="activity"><i class="fa fa-cogs"></i></p>
          <p class="people"><i class="fa fa-user"></i></p>
        	<p class="location"><i class="fa fa-map-marker"></i></p>
    	</li>
    	<?php foreach ($s->times()->toStructure() as $t) : ?>
    		<?php $dur = $t->dur() ?>
    		<?php $starttime = date('H:i',strtotime($time)) ?>
    		<?php $endtime = date('H:i',strtotime('+'.$dur.' minutes',strtotime($time))); ?>
    		<li>
    			<a href="#" class="<?php e($t->format() == 'grey','off') ?>">
          			<p class="time"><span><?php echo $starttime.' → '.$endtime ?></span></p>
          			<p class="activity"><span><?= $t->activity() ?></span></p>
                <p class="people"><span><?= $t->people() ?></span></p>
          			<p class="location"><span><?= $t->location() ?></span></p>
    			</a>
      		</li>
      		<?php $time = $endtime ?>
    	<?php endforeach ?>
    </ul>

  </div><!-- .end .wrap -->
</section>  