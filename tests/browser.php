<?php

require_once('../src/BrowserDetection.php');
$Browser = new foroco\BrowserDetection();

// Testing some main and rare User-Agents

$useragent[] = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.61 Safari/537.36';
$useragent[] = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.102 Safari/537.36 Edge/18.18363';
$useragent[] = 'Mozilla/5.0 (Windows NT 5.1; rv:36.0) Gecko/20100101 Firefox/36.0';
$useragent[] = 'Mozilla/5.0 (Windows NT 6.3; WOW64; Trident/7.0; rv:11.0) like Gecko';
$useragent[] = 'Mozilla/5.0 (Mobile; Windows Phone 8.1; Android 4.0; ARM; Trident/7.0; Touch; rv:11.0; IEMobile/11.0; Microsoft; Lumia 640 Dual SIM) like iPhone OS 7_0_3 Mac OS X AppleWebKit/537 (KHTML, like Gecko) Mobile Safari/537';
$useragent[] = 'Mozilla/5.0 (Windows NT 10.0; ARM; Lumia 930) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2486.0 Safari/537.36 Edge/13.10586';
$useragent[] = 'Mozilla/5.0 (Android 6.0; Mobile; rv:52.7.3) Gecko/52.7.3 Firefox/52.7.3';
$useragent[] = 'Mozilla/5.0 (Linux; U; Android 2.1.1; de-de; SAMSUNG-SGH-I997R Build/GINGERBREAD) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1';
$useragent[] = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:3.4) Goanna/20180412 PaleMoon/27.9.0';
$useragent[] = 'Mozilla/4.0 (compatible; Linux 2.6.22) NetFront/3.4 Kindle/2.0 (screen 600x800)';
$useragent[] = 'Mozilla/5.0 (BB10; Touch) AppleWebKit/537.35+ (KHTML, like Gecko) Version/10.3.3.2205 Mobile Safari/537.35+';
$useragent[] = 'Mozilla/5.0 (X11; FreeBSD amd64) AppleWebKit/534.34 (KHTML, like Gecko) konqueror/5.0.97 Safari/534.34';
$useragent[] = 'Mozilla/5.0 (SMART-TV; LINUX; Tizen 3.0) AppleWebKit/538.1 (KHTML, like Gecko) Version/3.0 TV Safari/538.1';
$useragent[] = 'Mozilla/5.0 (GNU; rv:1.9.1.7) Gecko/20100107 IceCat/3.6 (like Firefox/3.6)';
$useragent[] = 'Mozilla/4.5 (compatible; iCab 2.8.1; Macintosh; I; PPC)';
$useragent[] = 'Mozilla/5.0 (iPhone; CPU iPhone OS 8_3 like Mac OS X), AppleWebKit/600.1.4 (KHTML, like Gecko) Version/8.0 Mobile/12F70 Safari/600.1.4 (compatible; Google-AMPHTML)';
$useragent[] = 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.87 UBrowser/7.0.185.1002 Safari/0FA802';
$useragent[] = 'Mozilla/5.0 (Windows NT 6.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2974.77 Safari/537.36';
$useragent[] = 'Mozilla/5.0 (Linux; Android 8.1.0; SM-J727T1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.119 Mobile Safari/537.36';
$useragent[] = 'Mozilla/5.0 (Linux; Android 5.0; E2333 Build/26.1.B.3.109) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 YaBrowser/18.1.2.70.00 Mobile Safari/537.36';
$useragent[] = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Brave Chrome/79.0.3945.136 Safari/537.36';
$useragent[] = 'Mozilla/5.0 (iPhone; CPU iPhone OS 10_0_2 like Mac OS X) AppleWebKit/602.1.50 (KHTML, like Gecko) Version/10.0 Mobile/14A456 Safari/602.1 AlohaBrowser/1.4';
$useragent[] = 'Mozilla/5.0 (iPad; U; CPU OS 4_3_3 like Mac OS X; de-de) AppleWebKit/533.17.9 (KHTML, like Gecko) Version/5.0.2 Mobile/8J2 Safari/6533.18.5';
$useragent[] = 'MEmpresas/20180706 CFNetwork/808.2.16 Darwin/17.4.0';
$useragent[] = 'QwantMobile/2.0 (Android 7.0; Mobile; rv:57.0) Gecko/57.0 QwantBrowser/57.0';
$useragent[] = 'Mozilla/5.0 (Mobile; rv:63.0) Gecko/63.0 Firefox/63.0';
$useragent[] = 'BlackBerry8520/5.0.0.681 Profile/MIDP-2.1 Configuration/CLDC-1.1 VendorID/600';
$useragent[] = 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:65.0) Gecko/20100101 Firefox/65.0 IceDragon/65.0.2';
$useragent[] = 'Mozilla/5.0 (Linux; Android 4.4.4; Coolpad 8675-A Build/KTU84P) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/33.0.0.0 Mobile Safari/537.36 SogouMSESDK hot_sdk_1.5.0';
$useragent[] = 'Mozilla/5.0 (iPhone; CPU iPhone OS 6_0 like Mac OS X) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Mobile Safari/537.36';
$useragent[] = 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.4150.0 Iron Safari/537.36';
$useragent[] = 'Mozilla/5.0 (iPad; CPU OS 9_3_4 like Mac OS X) AppleWebKit/601.1 (KHTML, like Gecko) CriOS/80.0.3987.122 Mobile/13G35 Safari/601.1.46';
$useragent[] = 'Mozilla/5.0 (Android 8.1.0; Tablet; rv:68.6.0) Gecko/68.6.0 Firefox/68.6.0';
$useragent[] = 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.9) Gecko/20061219 Iceape/1.0.7 (Debian-1.0.7-3)';
$useragent[] = 'Mozilla/5.0 (X11; CrOS armv7l 10575.55.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36';
$useragent[] = 'Mozilla/5.0 (Linux; U; Android 4.2.2; ru-ru; NaviPad TM-7855 3G Build/JDQ39) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Safari/534.30 YandexSearch/7.15/apad';
$useragent[] = 'Mozilla/5.0 (Linux; Android 5.1; T72HMs_3G Build/LMY47I; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/49.0.2623.105 Safari/537.36 YandexSearch/7.40/apad YandexSearchBrowser/7.40';
$useragent[] = 'Mozilla/5.0 (Linux; Android 9; AMN-LX9 Build/HUAWEIAMN-LX9; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/79.0.3945.93 Mobile Safari/537.36 [FB_IAB/FB4A;FBAV/248.1.0.44.116;]';
$useragent[] = 'Mozilla/5.0 (iPhone; CPU iPhone OS 10_3_3 like Mac OS X) AppleWebKit/603.3.8 (KHTML, like Gecko) Mobile/14G60 [FBAN/FBIOS;FBAV/167.0.0.50.95;FBBV/102293131;FBDV/iPhone5,4;FBMD/iPhone;FBSN/iOS;FBSV/10.3.3;FBSS/2;FBCR/NOS;FBID/phone;FBLC/en_GB;FBOP/5;FBRV/104064853]';
$useragent[] = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:52.0) Gecko/20100101 Firefox/52.0 Cyberfox/52.7.0';
$useragent[] = 'Mozilla/3.0 (compatible; MSIE3.00; Windows 2002)';
$useragent[] = 'Mozilla/4.0 (compatible; MSIE 4.01; AOL 4.0; Mac_68K)';

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