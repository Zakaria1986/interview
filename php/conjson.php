<?php
 $evntJson = 'data/events.json';
 $rtclJson = 'data/articles.json';

 $events = json_decode(file_get_contents($evntJson));
 $articles = json_decode(file_get_contents($rtclJson));

?>