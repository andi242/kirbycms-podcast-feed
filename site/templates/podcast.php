<?php snippet('header') ?>

    <article>
     <section>
		 <h1><?php echo $page->title()->html() ?></h1>
		 <p><?php echo $page->text()->kirbytext() ?></p>
		<h2>Listen to it.</h2>
		<audio controls>
		<source src="<?php echo $page->audio()->first()->url() ?>" type="<?php echo $page->audio()->first()->mime() ?>">
		</audio> 
	 </section>
    </article>


<?php snippet('footer') ?>