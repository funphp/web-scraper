<?php
require 'vendor/autoload.php';
use funphp\WebScraper;
$longOpts  = array(
    "startDate::",
    "endDate::",
    "concurrency::",
    "maxResultsPerAuthor::",
    "wait::",
);
$options = getopt(null, $longOpts);
$scrapper = new WebScraper();
foreach($options as $attribute => $value) {
  $scrapper->$attribute = $value;
}
print_r($scrapper->parse());
?>
