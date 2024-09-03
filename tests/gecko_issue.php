<?php

require_once('../src/BrowserDetection.php');
$Browser = new foroco\BrowserDetection();

// Testing new Gecko based User-Agent strings

$useragent[] = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:125.0) Gecko/20100101 Firefox/125.0';
$useragent[] = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:120.0) Gecko/20100101 Firefox/120.0';
$useragent[] = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0';
$useragent[] = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/110.0';
$useragent[] = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/109.0';
$useragent[] = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.16; rv:108.0) Gecko/20100101 Firefox/108.0';
$useragent[] = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.16; rv:109.0) Gecko/20100101 Firefox/109.0';
$useragent[] = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.16; rv:109.0) Gecko/20100101 Firefox/110.0';
$useragent[] = 'Mozilla/5.0 (Android 7.1.1; Mobile; rv:109.0) Gecko/111.0 MaxBrowser/111.0';
$useragent[] = 'Mozilla/5.0 (Android 10; Mobile; rv:100.0) Gecko/100.0 Firefox/100.0 QwantMobile/4.2';
$useragent[] = 'Qwant/2.5 (Android 8.0.0; Mobile; rv:63.0) Gecko/63.0 Firefox/59.0 QwantBrowser/63.0.1';
$useragent[] = 'Mozilla/5.0 (Android; Mobile) Gecko/68.0 Firefox/68.0 QwantMobile/3.5';
$useragent[] = 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:60.9) ArtisReader/28.7.2 ArtisBrowser/28.7.2';

$time_start = microtime(true);

foreach ($useragent as $u)
{
	// Detect possible environment data from User-Agents
	$result = $Browser->getAll($u);

	echo '<div style="font-size:16px; font-weight:bold"><pre>';
	echo $u;
	echo '</pre></div>';

	echo '<div style="font-size:18px; font-weight:bold"><pre>';
	print_r($result);
	echo '</pre></div>';

	echo '<div style="font-size:16px; font-weight:bold"><pre>';
	echo '--------------------------------------------------------------------------------';
	echo '</pre></div>';

}

$time_end = microtime(true);
$time_result = $time_end - $time_start;

echo '<p style="font-size:21px">Total execution time: '.substr($time_result,0,7).' sec.</p>';

?>