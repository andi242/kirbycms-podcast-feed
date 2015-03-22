<?php
echo page('podcasts')->children()->visible()->limit(10)->podcastfeed(array(
  'title'       => 'Your podcast title',
  'description' => 'Your podcast description',
  'link'        => 'podcasts' // this is the page all podcast episodes reside in as children
));

?>
