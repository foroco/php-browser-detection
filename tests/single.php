<?php

error_reporting(E_ALL);

require_once('../src/BrowserDetection.php');
$Browser = new foroco\BrowserDetection();

// Testing one single User-Agent string

//$Browser->setTouchSupport();

$useragent = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36';

/*
$useragent = 'Word/16.15.18070902 CFNetwork/901.1 Darwin/17.6.0 (x86_64)';
$useragent = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 11_0_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36';
$useragent = 'Opera/9.80 (SpreadTrum; Opera Mini/4.4.33961/191.233; U; ru) Presto/2.12.423 Version/12.16';
$useragent = 'Mozilla/5.0 (CrKey armv7l 1.5.16041) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.0 Safari/537.36';
$useragent = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_2) AppleWebKit/604.4.7 (KHTML, like Gecko)'; //?
$useragent = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.0; rv:75.0) Gecko/20100101 Firefox/75.0';
$useragent = 'Mozilla/5.0 (X11; CrOS x86_64 13982.69.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.130 Safari/537.36';
$useragent = 'Mozilla/5.0 (X11; CrOS aarch64 13904.97.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.167 Safari/537.36';
$useragent = 'Mozilla/5.0 (X11; CrOS armv7l 12371.89.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.120 Safari/537.36';
$useragent = 'Mozilla/5.0 (X11; U; CrOS i686 0.9.128; en-US) AppleWebKit/534.10 (KHTML, like Gecko) Chrome/8.0.552.339';
$useragent = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36';
$useragent = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Silk/60.2.12 like Chrome/60.0.3112.107 Safari/537.36';
*/

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