<?php

include_once('Scraper.php');
$scraper = new Scraper();
$page = $scraper->getWholePage('http://www.oooff.com');
$leftnav = $scraper->getFilteredContent($page,'<div id="leftnav">','</div>');
echo $leftnav;

?>