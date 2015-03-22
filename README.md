# kirbycms-podcast-feed

generate a valid (audio!) podcast feed xml

1. Copy folders/files to your installation
1. set variables in the plugins config.php
1. check `templates/podcastfeed.php`  for your page where all episodes are located in as children
2. create content
3. upload 1 audio file per episode, the plugin only grabs the latest anyway.

## blueprint
contains a blueprint for podcast episodes (`$page->children())`, since a valid date is necessary.


let [feedvalidator.org](http://feedvalidator.org) check your feed.