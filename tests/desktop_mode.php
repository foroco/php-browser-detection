<?php

require_once('../src/BrowserDetection.php');
$Browser = new foroco\BrowserDetection();

// Testing some User-Agents of browsers which works in Desktop Mode

$useragent[] = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36';
$useragent[] = 'Mozilla/5.0 (X11; Linux aarch64) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/81.0.4044.138 Safari/537.36 DuckDuckGo/5';
$useragent[] = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.1 Mobile/15E148 Safari/604.1';
$useragent[] = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.1 Safari/604.1';
$useragent[] = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/534.24 (KHTML, like Gecko) Chrome/71.0.3578.141 Safari/534.24 XiaoMi/MiuiBrowser/12.2.6-g';
$useragent[] = 'Mozilla/5.0 (X11; Linux x86_64; rv:68.0) Gecko/20100101 Firefox/68.0';
$useragent[] = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.90 Safari/537.36 OPR/52.3.2517.140547';
$useragent[] = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/9.2 Chrome/67.0.3396.87 Safari/537.36';
$useragent[] = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.103 YaBrowser/19.4.5.141.00 Safari/537.36';
$useragent[] = 'Mozilla/5.0 (X11; U; U; Linux x86_64; ru-ru) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36 Puffin/7.8.3.40913AP';
$useragent[] = 'Mozilla/5.0 (Linux; U; Android 7.1.1; ru-ru; ZTE A2017G Build/NMF26V) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/71.0.3578.141 Mobile Safari/537.36 XiaoMi/MiuiBrowser/12.2.6-g';
$useragent[] = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/534.24 (KHTML, like Gecko) Chrome/61.0.3163.128 Safari/534.24 XiaoMi/Mint Browser/3.4.7';
$useragent[] = 'Mozilla/5.0 (Linux; Android 7.1.1; ZTE A2017G Build/NMF26V) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/81.0.4044.138 Mobile Safari/537.36 Maxthon/3241';
$useragent[] = 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) MxBrowser/5.2.3.3241 Chrome/30.0.1551.0 Safari/537.36';
$useragent[] = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.136 Iron Safari/537.36';
$useragent[] = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.111 Safari/537.36 OPR/38.0.2220.41 AlohaBrowser/2.18.1';
$useragent[] = 'Mozilla/5.0 (Linux; Android 7.1.1; ZTE A2017G Build/NMF26F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.111 Mobile Safari/537.36 AlohaBrowser/2.18.1';
$useragent[] = 'Mozilla/5.0 (Linux; Android 7.1.1; ZTE A2017G Build/NMF26V) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.128 Mobile Safari/537.36 (Ecosia android@69.0.3497.128)';
$useragent[] = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.128 Safari/537.36 (Ecosia android@69.0.3497.128)';
$useragent[] = 'Mozilla/5.0 (Linux; Android 7.1.1; ZTE A2017G Build/NMF26V; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/81.0.4044.138 Mobile Safari/537.36 PHX/4.9';
$useragent[] = 'Mozilla/5.0 (Android; Mobile) Gecko/68.0 Firefox/68.0 QwantMobile/3.5';
$useragent[] = 'Mozilla/5.0 (Android; Mobile) Gecko/68.0 Firefox/68.0 QwantMobile/3.5';
$useragent[] = 'Mozilla/5.0 (Linux; Android 7.1.1) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/81.0.4044.138 Mobile Safari/537.36 webexplorer/4';
$useragent[] = 'Mozilla/5.0 (X11; Linux aarch64) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/81.0.4044.138 Safari/537.36 webexplorer/4';
$useragent[] = 'Mozilla/5.0 (Linux; Android 7.1.1; ZTE A2017G Build/NMF26V) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/76.0.3809.111 NoxBrowser/2.0.0 Mobile Safari/537.36';
$useragent[] = 'Mozilla/5.0 (Android 7.1.1; Mobile; rv:68.0) Gecko/68.0 Firefox/68.0 Turkcell-YaaniBrowser/6.1.3 Mobile Turkcell-TR';
$useragent[] = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/81.0.4044.138 Mobile Safari/537.36';
$useragent[] = 'Mozilla/5.0 (X11; Linux x86_64; rv:69.0) Gecko/20100101 Firefox/69.0';
$useragent[] = 'Mozilla/5.0 (Linux; Android 7.1.1; ZTE A2017G Build/NMF26V) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.0.2785.97 Mobile Safari/537.36 Start/53.0.2785.97';
$useragent[] = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.0.2785.97 Safari/537.36 Start/53.0.2785.97';
$useragent[] = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/83.0.4103.106 Mobile Safari/537.36';
$useragent[] = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Safari/537.36 Atom/1.0.3';
$useragent[] = 'Mozilla/5.0 (Windows NT 6.2; ARM; Trident/7.0; Touch; rv:11.0; WPDesktop; Virtual) like Gecko';
$useragent[] = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_4) AppleWebKit/600.7.12 (KHTML, like Gecko) Version/8.0.7 Safari/600.7.12 (000154)';
$useragent[] = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_4) AppleWebKit/600.7.12 (KHTML, like Gecko) Version/8.1.3 Safari/600.7.12';

$time_start = microtime(true);

foreach ($useragent as $u)
{
	// Set touch support mode (simulate)
	$Browser->setTouchSupport();

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