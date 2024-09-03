<?php

require_once('../src/BrowserDetection.php');
$Browser = new foroco\BrowserDetection();

// Test random User-Agents from SQLite database

$db = new SQLite3('useragents.db');
$db->exec("PRAGMA journal_mode=WAL;");
$db->exec("PRAGMA synchronous=NORMAL;");
$results = $db->query('SELECT ua FROM useragents');

$time_start = microtime(true);
$counter = 0;

while ($row = $results->fetchArray())
{
	$result = $Browser->getAll($row['ua']);
	if (microtime(true) - $time_start > 1) break;
	$counter++;
}

$time_end = microtime(true);
$time_result = $time_end - $time_start;

echo '<p style="font-size:21px">Iterations: '.$counter.' RPS.</p>';
echo '<p style="font-size:21px">Execution time: '.substr($time_result,0,7).' sec.</p>';

?>