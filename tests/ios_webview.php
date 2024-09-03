<?php

error_reporting(E_ALL);

require_once('../src/BrowserDetection.php');
$Browser = new foroco\BrowserDetection();

// Testing some new User-Agents

$useragent[] = 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_5 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Mobile/15E148';
$useragent[] = 'Mozilla/5.0 (iPad; CPU OS 10_3_4 like Mac OS X) AppleWebKit/600.1.4 (KHTML, like Gecko) GSA/9.0.60246 Mobile/14G61 Safari/600.1.4';
$useragent[] = 'Mozilla/5.0 (iPad; CPU OS 13_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Mobile/15E148 OPT/2.5.3';
$useragent[] = 'Mozilla/5.0 (iPhone; CPU iPhone OS 14_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Mobile/15E148 SRCHAPP';
$useragent[] = 'Mozilla/5.0 (iPhone; CPU iPhone OS 9_2 like Mac OS X) AppleWebKit/601.1.46 (KHTML, like Gecko) OPiOS/13.0.1.100754 Mobile/13C75 Safari/9537.53';
$useragent[] = 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_3_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) CriOS/111.0.5563.72 Mobile/15E148 Safari/604.1';
$useragent[] = 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_3_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) FxiOS/110.0 Mobile/15E148 Safari/605.1.15';
$useragent[] = 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_5_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Mobile/15E148 Version/13.5.1 Safari/605.1.15 AlohaBrowser/2.23.3';
$useragent[] = 'Mozilla/5.0 (iPad; U; CPU OS 6_0_1 like Mac OS X) AppleWebKit/536.26 (KHTML, like Gecko) Version/6.0 Mobile/10A523 Safari/8536.25 XiaoMi/MiuiBrowser/10.7.2';
$useragent[] = 'Mozilla/5.0 (iPhone; U; CPU iPhone OS 4_3_2 like Mac OS X; en-us) AppleWebKit/533.17.9 (KHTML, like Gecko) Version/5.0.2 Mobile/8H7 Safari/6533.18.5 UCTurbo/1.10.3.900';
$useragent[] = 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_7 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Mobile/15E148 LightSpeed [FBAN/MessengerLiteForiOS;FBAV/248.0.0.16.123;FBBV/193428402;FBDV/iPhone11,2;FBMD/iPhone;FBSN/iOS;FBSV/13.7;FBSS/3;FBCR/;FBID/phone;FBLC/cs_CZ;FBOP/0]';
$useragent[] = 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_7 like Mac OS X; ru-RU) AppleWebKit/537.36 (KHTML, like Gecko) Version/13.7 Mobile/17H35 Safari/537.36 Puffin/5.2.4IP';
$useragent[] = 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_3_1 like Mac OS X) AppleWebKit/605.1.33 (KHTML, like Gecko) Mobile/15E302 YaBrowser/19.5.2.38.10 YaApp_iOS/25.00 YaApp_iOS_Browser/25.00 Safari/604.1';
$useragent[] = 'Mozilla/5.0 (iPhone; CPU iPhone OS 12_4_1 like Mac OS X) AppleWebKit/601.1.46 (KHTML, like Gecko) Version/12.0 YaBrowser/16.4.1.9336.10 Mobile/16G102 Safari/601.1';
$useragent[] = 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Mobile/15E148 YaBrowser/23.7.0.2091.10 YaApp_iOS/2307.0 YaApp_iOS_Browser/2307.0 Safari/604.1 SA/3';
$useragent[] = 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_5_1 like Mac OS X; ru) AppleWebKit/537.51.1 (KHTML, like Gecko) Mobile/20F75 UCBrowser/11.3.5.1203 Mobile';
$useragent[] = 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko)  Mobile/15E148 Safari/604.1';
$useragent[] = 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_6 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Mobile/15E148 Safari/605.1.15';
$useragent[] = 'Mozilla/5.0 (iPhone; CPU iPhone OS 17_1_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Mobile/15E148 SP-engine/2.85.0 main/1.0 baiduboxapp/13.47.0.10 (Baidu; P2 17.1.2) NABar/1.0 themeUA=Theme/default';
$useragent[] = 'Mozilla/5.0 (iPhone; CPU iPhone OS 10_0_1 like Mac OS X) AppleWebKit/602.1.32 (KHTML, like Gecko) Mobile/14A403 Twitter for iPhone';
$useragent[] = 'Mozilla/5.0 (iPhone; CPU iPhone OS 10_1_1 like Mac OS X) AppleWebKit/602.2.14 (KHTML, like Gecko) Mobile/14B100 KAKAOTALK 5.9.2';
$useragent[] = 'Mozilla/5.0 (iPhone; CPU iPhone OS 10_1_1 like Mac OS X) AppleWebKit/602.2.14 (KHTML, like Gecko) Mobile/14B100 MicroMessenger/6.3.30 NetType/WIFI Language/en';

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