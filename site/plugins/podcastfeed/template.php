<!-- generator="<?php echo $generator ?>" -->
<rss xmlns:itunes="http://www.itunes.com/dtds/podcast-1.0.dtd" version="2.0">

  <channel>
    <title><?php echo xml($title) ?></title>
    <link><?php echo xml($link) ?></link>
    <language>de-de</language>
    <copyright>&#x2117; &amp; &#xA9; <? echo date(Y) ?> <? echo c::get('pod_author'); ?></copyright>
    <itunes:subtitle><? echo xml(c::get('pod_subtitle')); ?></itunes:subtitle>
    <itunes:author><? echo xml(c::get('pod_author')); ?></itunes:author>
    <itunes:summary><? echo xml(c::get('pod_description')); ?></itunes:summary>
    <description><? echo xml(c::get('pod_description')); ?></description>
    <itunes:owner>
	    <itunes:name><? echo xml(c::get('pod_author')); ?></itunes:name>
    	<itunes:email><? echo xml(c::get('pod_email')); ?></itunes:email>
    </itunes:owner>
    <itunes:image href="<? echo c::get('pod_cover'); ?>" />
    <itunes:category text="<? echo xml(c::get('pod_cat0')); ?>">    
    <itunes:category text="<? echo xml(c::get('pod_cat1')); ?>"/>
    </itunes:category>

<?php foreach($items as $item): ?>
<item>
  <title><?php echo xml($item->title()) ?></title>
  <itunes:author><? echo xml(c::get('pod_author')); ?></itunes:author>
  <itunes:subtitle><?php echo xml($item->subtitle()) ?></itunes:subtitle>
  <itunes:summary><?php echo xml($item->text()->kirbytext()) ?></itunes:summary>
  <enclosure url="<?php echo $item->audio()->first()->url() ?>" length="<?php echo $item->audio()->first()->size() ?>" type="<?php echo $item->audio()->first()->mime() ?>" />
  <pubDate><?php echo $datefield == 'modified' ? $item->modified('r') : $item->date('r', $datefield) ?></pubDate>
  <link><?php echo xml($item->url()) ?></link>
  <guid><?php echo xml($item->url()) ?></guid>
</item>
<?php endforeach ?>

  </channel>
</rss>
