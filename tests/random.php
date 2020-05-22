<?php

require_once('../src/BrowserDetection.php');
$Browser = new foroco\BrowserDetection();

// Test random User-Agents from SQLite database

// Random User-Agents count
$useragents_random_count = 30;

$db = new SQLite3('useragents.db');
$db->exec("PRAGMA journal_mode=WAL;");
$db->exec("PRAGMA synchronous=NORMAL;");
$results = $db->query('SELECT ua FROM useragents LIMIT '.$useragents_random_count.' OFFSET ABS(RANDOM()) % MAX((SELECT COUNT(*) FROM useragents), 1);');

while ($row = $results->fetchArray())
{
    $useragent[] = ($row['ua']);
}

$time_start = microtime(true);

foreach ($useragent as $u)
{

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