<?php

require_once('../src/BrowserDetection.php');
$Browser = new foroco\BrowserDetection();

// Testing some common User-Agent strings

$useragent[] = 'Mozilla/5.0 (iPhone; CPU iPhone OS 12_3_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1.1 Mobile/15E148 Safari/604.1';
$useragent[] = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 11.0) AppleWebKit/602.1.50 (KHTML, like Gecko) Version/11.0 Safari/602.1.50';
$useragent[] = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 11_0) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0 Safari/605.1.15';
$useragent[] = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.16; rv:82.0) Gecko/20100101 Firefox/82.0';
$useragent[] = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.1 Safari/605.1.15';
$useragent[] = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_16) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0 Safari/605.1.15';
$useragent[] = 'Mozilla/5.0 (Linux; Android 10; Redmi Note 9 Pro) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.101 Mobile Safari/537.36';
$useragent[] = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:84.0) Gecko/20100101 Firefox/84.0';
$useragent[] = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36';
$useragent[] = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.60 YaBrowser/20.12.0.963 Yowser/2.5 Safari/537.36';
$useragent[] = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36';
$useragent[] = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75';
$useragent[] = 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36 OPR/73.0.3856.329';
$useragent[] = 'Mozilla/5.0 (iPhone; CPU iPhone OS 14_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.2 Mobile/15E148 Safari/604.1';
$useragent[] = 'Mozilla/5.0 (Linux; U; Android 9; ru-ru; Redmi Note 8T Build/PKQ1.190616.001) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/71.0.3578.141 Mobile Safari/537.36 XiaoMi/MiuiBrowser/12.5.2-gn';
$useragent[] = 'Mozilla/5.0 (iPhone; CPU iPhone OS 12_4 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) GSA/137.2.345735309 Mobile/15E148 Safari/604.1';
$useragent[] = 'Mozilla/5.0 (Linux; Android 10; JNY-LX1; HMSCore 5.0.2.301) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 HuaweiBrowser/10.1.4.303 Mobile Safari/537.36';
$useragent[] = 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_5_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Mobile/15E148 Version/13.5.1 Safari/605.1.15 AlohaBrowser/2.23.3';
$useragent[] = 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.89 Atom/8.1.0.31 Safari/537.36';
$useragent[] = 'Mozilla/5.0 (BB10; Kbd) AppleWebKit/537.35+ (KHTML, like Gecko) Version/10.3.2.2876 Mobile Safari/537.35+';
$useragent[] = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.87 Safari/537.36 Brave/18';
$useragent[] = 'Mozilla/5.0 (Linux; Android 7.1.1; Moto E (4) Plus Build/NMA26.42-113; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/44.0.2403.119 Mobile Safari/537.36 ACHEETAHI/1';
$useragent[] = 'Mozilla/5.0 (SMART-TV; X11; Linux armv7l) AppleWebkit/537.42 (KHTML, like Gecko) Chromium/25.0.1349.2 Chrome/25.0.1349.2 Safari/537.42';
$useragent[] = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/81.0.4044.122 Chrome/81.0.4044.122 Safari/537.36';
$useragent[] = 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) coc_coc_browser/91.0.146 Chrome/85.0.4183.146 Safari/537.36';
$useragent[] = 'Mozilla/5.0 (Linux; Android 9) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.136 Mobile Safari/537.36 DuckDuckGo/5';
$useragent[] = 'Mozilla/5.0 (Linux; U; Android 6.0.1;ru_ru; LEX722 Build/WIXCNFN5802001232S) AppleWebKit/537.36 (KHTML, like Gecko)Version/4.0 Chrome/49.0.0.0 Mobile Safari/537.36 EUI Browser/5.8.020S';
$useragent[] = 'Mozilla/5.0 (Linux; Android 5.1.1; SM-J120H Build/LMY47V; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/68.0.3440.91 Mobile Safari/537.36 [FB_IAB/FB4A;FBAV/244.0.0.43.118;]';
$useragent[] = 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_7 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Mobile/15E148 LightSpeed [FBAN/MessengerLiteForiOS;FBAV/248.0.0.16.123;FBBV/193428402;FBDV/iPhone11,2;FBMD/iPhone;FBSN/iOS;FBSV/13.7;FBSS/3;FBCR/;FBID/phone;FBLC/cs_CZ;FBOP/0]';
$useragent[] = 'Mozilla/5.0 (X11; Gentoo; rv:75.1) Gecko/20100101 Firefox/75.1';
$useragent[] = 'Mozilla/5.0 (iPhone; CPU OS 14_0_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) FxiOS/26.0  Mobile/15E148 Safari/605.1.15';
$useragent[] = 'Mozilla/5.0 (Linux; Android 6.0) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Focus/6.0 Chrome/87.0.4280.101 Mobile Safari/537.36';
$useragent[] = 'Mozilla/5.0 (Linux; Android 10; JSN-L21 Build/HONORJSN-L21; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/83.0.4103.101 Mobile Safari/537.36 Instagram 145.0.0.32.119 Android (29/10; 480dpi; 1080x2255; HUAWEI/HONOR; JSN-L21; HWJSN-H; kirin710; ru_RU; 219308759)';
$useragent[] = 'Mozilla/5.0 (Windows Phone 8.1; ARM; Trident/7.0; Touch; rv:11.0; IEMobile/11.0; NOKIA; Lumia 530 Dual SIM) like Gecko';
$useragent[] = 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; .NET4.0C; .NET4.0E)';
$useragent[] = 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4350.0 Iron Safari/537.36';
$useragent[] = 'Mozilla/5.0 (Linux; Android 9; Pixel 3; Windows 10 Mobile) AppleWebKit/537.36 (KHTML, like Gecko) Kiwi Chrome/63.0.3239.111 Mobile Safari/537.36';
$useragent[] = 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Maxthon/4.9.5.1000 Chrome/39.0.2146.0 Safari/537.36';
$useragent[] = 'Mozilla/5.0 (Linux; U; Android 6.0; zh-CN; MZ-M5s Build/MRA58K) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/57.0.2987.108 MZBrowser/7.13.110-2019112819 UWS/2.15.0.4 Mobile Safari/537.36';
$useragent[] = 'Opera/9.80 (Android 4.1.1; Linux; Opera Tablet/ADY-1111101223; U; ru) Presto/2.9.201 Version/11.50';
$useragent[] = 'Opera/9.80 (J2ME/MIDP; Opera Mini/4.0.10247/191.212; U; ru) Presto/2.12.423 Version/12.16';
$useragent[] = 'Opera/9.80 (Android; Opera Mini/36.2.2254/189.67; U; ru) Presto/2.12.423 Version/12.16';
$useragent[] = 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:60.9) Gecko/20100101 Goanna/4.4 Firefox/60.9 PaleMoon/28.7.2';
$useragent[] = 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_7 like Mac OS X; ru-RU) AppleWebKit/537.36 (KHTML, like Gecko) Version/13.7 Mobile/17H35 Safari/537.36 Puffin/5.2.4IP';
$useragent[] = 'Mozilla/5.0 (Linux; Android 8.0.0; SAMSUNG SM-C9000) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/13.2 Chrome/83.0.4103.106 Mobile Safari/537.36';
$useragent[] = 'Mozilla/5.0 (SMART-TV; Linux; Tizen 5.0) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/2.2 Chrome/63.0.3239.84 TV Safari/537.36';
$useragent[] = 'Mozilla/5.0 (Linux; U; Android 8.1.0; en-US; DUB-LX1 Build/HUAWEIDUB-LX1) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/57.0.2987.108 UCBrowser/12.11.5.1185 Mobile Safari/537.36';
$useragent[] = 'Mozilla/5.0 (Linux; U; Android 6.0; ru-RU; Lenovo A2016a40 Build/MRA58K) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/57.0.2987.108 UCBrowser/12.10.0.1163 UCTurbo/1.9.10.900 Mobile Safari/537.36';
$useragent[] = 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.143 Safari/537.36 Vivaldi/1.95.1077.45';
$useragent[] = 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:56.0; Waterfox) Gecko/20100101 Firefox/56.2.6';
$useragent[] = 'Mozilla/5.0 (Linux; arm; Android 9; SM-J415FN) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.117 YaApp_Android/10.62 YaSearchBrowser/10.62 BroPP/1.0 SA/1 Mobile Safari/537.36';
$useragent[] = 'Mozilla/5.0 (iPhone; CPU iPhone OS 12_4_1 like Mac OS X) AppleWebKit/601.1.46 (KHTML, like Gecko) Version/12.0 YaBrowser/16.4.1.9336.10 Mobile/16G102 Safari/601.1';
$useragent[] = 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.125 YaBrowser/20.8.2.95 Yowser/2.5 Safari/537.36';
$useragent[] = 'Mozilla/5.0 (Linux; arm_64; Android 9; LLD-L31) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.136 YaBrowser/20.2.4.153.00 Mobile Safari/537.36';
$useragent[] = 'Mozilla/5.0 (Windows NT 6.2; ARM; Trident/7.0; Touch; rv:11.0; WPDesktop; Lumia 1520) like Gecko';
$useragent[] = 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; SLCC1; Tablet PC 2.0; Lunascape 6.3.4.23051)';
$useragent[] = 'Mozilla/5.0 (iPhone; CPU iPhone OS 6_0 like Mac OS X) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Mobile Safari/537.36';

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