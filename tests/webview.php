<?php

require_once('../src/BrowserDetection.php');
$Browser = new foroco\BrowserDetection();

// Testing WebView User-Agents

$useragent[] = 'Mozilla/5.0 (Linux; Android 4.4.4; Coolpad 8675-A Build/KTU84P) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/33.0.0.0 Mobile Safari/537.36 SogouMSESDK hot_sdk_1.5.0';
$useragent[] = 'Mozilla/5.0 (Linux; U; Android 4.2.2; ru-ru; NaviPad TM-7855 3G Build/JDQ39) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Safari/534.30 YandexSearch/7.15/apad';
$useragent[] = 'Mozilla/5.0 (Linux; Android 5.1; T72HMs_3G Build/LMY47I; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/49.0.2623.105 Safari/537.36 YandexSearch/7.40/apad YandexSearchBrowser/7.40';
$useragent[] = 'Mozilla/5.0 (Linux; Android 9; AMN-LX9 Build/HUAWEIAMN-LX9; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/79.0.3945.93 Mobile Safari/537.36 [FB_IAB/FB4A;FBAV/248.1.0.44.116;]';
$useragent[] = 'Mozilla/5.0 (iPhone; CPU iPhone OS 10_3_3 like Mac OS X) AppleWebKit/603.3.8 (KHTML, like Gecko) Mobile/14G60 [FBAN/FBIOS;FBAV/167.0.0.50.95;FBBV/102293131;FBDV/iPhone5,4;FBMD/iPhone;FBSN/iOS;FBSV/10.3.3;FBSS/2;FBCR/NOS;FBID/phone;FBLC/en_GB;FBOP/5;FBRV/104064853]';

$time_start = microtime(true);

foreach ($useragent as $u)
{

	// Detect Browser data from User-Agents
	$result = $Browser->getBrowser($u);

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