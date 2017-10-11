
<?php
  foreach ($page->children() as $s) {

    if ($s->template() == 'cover-slide') {
      snippet('cover-slide',array('s' => $s));

    } elseif ($s->template() == 'default-slide') {
      snippet('default-slide', array('s' => $s)); 

    } elseif ($s->template() == 'card-slide') {
      snippet('card-slide', array('s' => $s));

    } elseif ($s->template() == 'portfolio-slide') {
      snippet('portfolio-slide', array('s' => $s));
      
    } elseif ($s->template() == 'quote-slide') {
      snippet('quote-slide', array('s' => $s));

    } elseif ($s->template() == 'data-slide') {
      snippet('data-slide', array('s' => $s));

    } elseif ($s->template() == 'steps-slide') {
      snippet('steps-slide', array('s' => $s));
      
    } elseif ($s->template() == 'schedule-slide') {
      snippet('schedule-slide', array('s' => $s));

    } elseif ($s->template() == 'images-slide') {
      snippet('images-slide', array('s' => $s));

    } elseif ($s->template() == 'long-list-slide') {
      snippet('long-list-slide', array('s' => $s));

    } elseif ($s->template() == 'chapter-slide') {
      snippet('chapter-slide', array('s' => $s));

    };
  };
?>
