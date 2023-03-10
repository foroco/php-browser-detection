<?php

error_reporting(E_ALL);

require_once('../src/BrowserDetection.php');
$Browser = new foroco\BrowserDetection();

// Testing some new User-Agents

$useragent[] = 'IILoader/1.0 CFNetwork/609.1.4 Darwin/12.4.0';
$useragent[] = 'CachedWebView/1.0 CFNetwork/672.1.13 Darwin/13.3.0';
$useragent[] = 'MobileSafari/604.1 CFNetwork/1125.2 Darwin/19.4.0';
$useragent[] = 'MobileSafari/604.1 CFNetwork/1120 Darwin/19.0.0';
$useragent[] = 'iCabMobile/9.14.7 CFNetwork/1121.2.2 Darwin/19.2.0';
$useragent[] = 'MobileSafari/6533.18.5 CFNetwork/485.12.7 Darwin/10.4.0';
$useragent[] = 'ActionExtension/108.2.2 CFNetwork/902.2 Darwin/17.7.0';
$useragent[] = 'MEmpresas/20180706 CFNetwork/808.2.16 Darwin/17.4.0';
$useragent[] = 'AdGuard%20Pro/165 CFNetwork/976 Darwin/18.2.0';
$useragent[] = 'CFNetworkAgent (unknown version) CFNetwork/1121.2.2 Darwin/19.2.0';
$useragent[] = 'Canary-iOS/191 CFNetwork/893.14.2 Darwin/17.3.0';
$useragent[] = 'Finish Line/2.5.2 CFNetwork/897.15 Darwin/17.5.0';
$useragent[] = 'NET.mede/1 CFNetwork/758.5.3 Darwin/15.6.0';
$useragent[] = 'SafariSafeBrowsing/603.3.8 CFNetwork/811.5.4 Darwin/16.7.0';
$useragent[] = 'SafariViewService/1.0 CFNetwork/974.2 Darwin/18.0.0';
$useragent[] = 'Viber/8.1.1.158 CFNetwork/811.5.4 Darwin/16.7.0';
$useragent[] = 'com.apple.mobilenotes.SharingExtension/1124.10 CFNetwork/808.1.4 Darwin/16.1.0';
$useragent[] = 'dataaccessd (unknown version) CFNetwork/811.5.4 Darwin/16.7.0';
$useragent[] = 'Word/16.15.18070902 CFNetwork/901.1 Darwin/17.6.0 (x86_64)';
$useragent[] = 'Safari/10600.1.25 CFNetwork/720.0.7 Darwin/14.0.0 (x86_64)';
$useragent[] = 'Safari/9537.86.7.8 CFNetwork/673.6 Darwin/13.4.0 (x86_64) (MacBookAir6%2C1)';
$useragent[] = '1Password%207/70007000 CFNetwork/902.1 Darwin/17.7.0 (x86_64)';
$useragent[] = 'Safari/6531.9 CFNetwork/454.4 Darwin/10.0.0 (i386) (MacBook4%2C1)';
$useragent[] = 'com.apple.Notes.SharingExtension/555.10.42 CFNetwork/760.7 Darwin/15.6.0 (x86_64)';
$useragent[] = 'com.apple.Safari.SearchHelper/10600.8.3 CFNetwork/720.5.7 Darwin/14.5.0 (x86_64)';
$useragent[] = 'com.apple.WebKit.Networking/10603.3.8 CFNetwork/720.5.7 Darwin/14.5.0 (x86_64)';

$time_start = microtime(true);

foreach ($useragent as $u)
{

	// Detect all possible environment data from User-Agents
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