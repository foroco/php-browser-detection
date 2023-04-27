<?php

require_once('../src/BrowserDetection.php');
$Browser = new foroco\BrowserDetection();

// Testing new Gecko based User-Agent strings

$useragent[] = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.16; rv:108.0) Gecko/20100101 Firefox/108.0';
$useragent[] = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.16; rv:109.0) Gecko/20100101 Firefox/109.0';
$useragent[] = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.16; rv:109.0) Gecko/20100101 Firefox/110.0';

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