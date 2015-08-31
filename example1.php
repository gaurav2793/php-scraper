<?php

include_once('Scraper.php');
$scraper = new Scraper();
$page = $scraper->getWholePage('http://www.oooff.com');
echo $page;

?>