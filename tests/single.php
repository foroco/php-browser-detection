<?php

require_once('../src/BrowserDetection.php');
$Browser = new foroco\BrowserDetection();

// Testing one single User-Agent string

$useragent = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.61 Safari/537.36';

$time_start = microtime(true);

// Detect all possible environment data from User-Agent
$result = $Browser->getAll($useragent);

echo '<div style="font-size:16px; font-weight:bold"><pre>';
echo $useragent;
echo '</pre></div>';

echo '<div style="font-size:18px; font-weight:bold"><pre>';
print_r($result);
echo '</pre></div>';

echo '<div style="font-size:16px; font-weight:bold"><pre>';
echo '--------------------------------------------------------------------------------';
echo '</pre></div>';

$time_end = microtime(true);
$time_result = $time_end - $time_start;

echo '<p style="font-size:21px">Total execution time: '.substr($time_result,0,7).' sec.</p>';

?>