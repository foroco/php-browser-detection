<?php

require_once('../src/BrowserDetection.php');
$Browser = new foroco\BrowserDetection();

// Testing some new User-Agent strings

$useragent[] = 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_3_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Mobile/15E148 Version/12.1.2 Safari/605.1.15 SEB/2.1.15';
$useragent[] = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2825.0 Xvast/1.0.0.8 Safari/537.36';
$useragent[] = 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 ADG/11.0.2566 AOLBUILD/11.0.2566 Safari/537.36';
$useragent[] = 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.4.3282.140 Elements Browser/1.1.4 Safari/537.36';
$useragent[] = 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.59 Safari/537.36 115Browser/8.4.0';
$useragent[] = 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.59 Safari/537.36 115Browser/B0B6B';
$useragent[] = 'Mozilla/5.0 (Windows NT 6.0) AppleWebKit/5350 (KHTML, like Gecko) Chrome/38.0.875.0 Mobile Safari/5350';
$useragent[] = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Falkon/3.1.0 Chrome/77.0.3865.129 Safari/537.36';
$useragent[] = 'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:52.9) Gecko/20100101 Goanna/4.1 Firefox/52.9 Basilisk/20180427';
$useragent[] = 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:68.9) Gecko/20100101 Goanna/4.5 Firefox/68.9 Basilisk/52.9.0';
$useragent[] = 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.2882.0 Safari/537.36 AOLShield/60.0.2882.0';
$useragent[] = 'Mozilla/5.0 (Windows NT 6.0; rv:52.0) Gecko/20100101 AOLShield/52.4.2';
$useragent[] = 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/534.34 (KHTML, like Gecko) Dooble/1.40 Safari/534.34';
$useragent[] = 'Mozilla/5.0 (iPhone; U; CPU iPhone OS 4_3_2 like Mac OS X; en-us) AppleWebKit/533.17.9 (KHTML, like Gecko) Version/5.0.2 Mobile/8H7 Safari/6533.18.5 UCTurbo/1.6.3.900';
$useragent[] = 'Mozilla/5.0 (Windows; U; Windows NT 5.2;. en-US) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.108 Safari/537.36 UCTurbo/1.9.6.900';
$useragent[] = 'Mozilla/5.0 (Linux; U; Android 9; ru; SM-J530FM Build/PPR1.180610.011) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/57.0.2987.108 UCBrowser/12.10.0.1163 UCTurbo/1.9.3.900 Mobile Safari/537.36';
$useragent[] = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.103 Safari/537.36 OPR/60.0.3255.50962 OPRGX/60.0.3255.50962';
$useragent[] = 'Mozilla/5.0 (Linux; U; Android 4.0.3; ru-ru; HUAWEI MediaPad Build/HuaweiMediaPad) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Safari/534.30 com.browser.tssomas/10.0.4-001e';
$useragent[] = 'Mozilla/5.0 (Linux; Android 8.0.0; SM-J737T1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.90 Mobile SFBrowser/13.0.2115.30 Mobile Safari/537.36';
$useragent[] = 'Mozilla/5.0 (Linux; U; Android 6.0;ru_ru; Le X625 Build/HEXCNFN5801809301S) AppleWebKit/537.36 (KHTML, like Gecko)Version/4.0 Chrome/49.0.0.0 Mobile Safari/537.36 EUI Browser/5.8.018S';
$useragent[] = 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_6; en-us) AppleWebKit/528.16 (KHTML, like Gecko) Fluid/0.9.6 Safari/528.16';
$useragent[] = 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_8_0; nl-nl) AppleWebKit/601.4.4 (KHTML, like Gecko) Fluid/1.7.1 Safari/532.3+';
$useragent[] = 'Mozilla/5.0 (Windows NT 6.2; Win64; x64) AppleWebKit/538.1 (KHTML, like Gecko) Google Earth Pro/7.3.2.5776 Safari/538.1';
$useragent[] = 'Mozilla/5.0 (Windows; N; Windows NT 6.1; de-DE) AppleWebKit/532.4 (KHTML, like Gecko) Google Earth/7.1.5.1557 Safari/532.4';
$useragent[] = 'iCabMobile/9.14.7 CFNetwork/1121.2.2 Darwin/19.2.0';
$useragent[] = 'Mozilla/5.0 (i686) AppleWebKit/537.6+ (KHTML, like Gecko) WebKitGTK+/1.10.2 luakit/039e319';
$useragent[] = 'Mozilla/5.0 (x86_64) AppleWebKit/538.15+ (KHTML, like Gecko) WebKitGTK+/2.4.9 luakit';
$useragent[] = 'Word/16.15.18070902 CFNetwork/901.1 Darwin/17.6.0 (x86_64)';
$useragent[] = 'Safari/10600.1.25 CFNetwork/720.0.7 Darwin/14.0.0 (x86_64)';
$useragent[] = 'Safari/9537.86.7.8 CFNetwork/673.6 Darwin/13.4.0 (x86_64) (MacBookAir6%2C1)';
$useragent[] = 'MobileSafari/6533.18.5 CFNetwork/485.12.7 Darwin/10.4.0';
$useragent[] = '%EC%82%AC%EC%A0%84/12.11.60 CFNetwork/894 Darwin/17.4.0';
$useragent[] = '1Password%207/70007000 CFNetwork/902.1 Darwin/17.7.0 (x86_64)';
$useragent[] = 'ActionExtension/108.2.2 CFNetwork/902.2 Darwin/17.7.0';
$useragent[] = 'AdGuard%20Pro/165 CFNetwork/976 Darwin/18.2.0';
$useragent[] = 'CFNetworkAgent (unknown version) CFNetwork/1121.2.2 Darwin/19.2.0';
$useragent[] = 'Canary-iOS/191 CFNetwork/893.14.2 Darwin/17.3.0';
$useragent[] = 'Finish Line/2.5.2 CFNetwork/897.15 Darwin/17.5.0';
$useragent[] = 'Links (0.98; Darwin 6.0 Power Macintosh)';
$useragent[] = 'Links (2.1pre33; Darwin 8.11.0 Power Macintosh; 169x55)';
$useragent[] = 'Mozilla/5.0 (iPad; CPU OS 12_1_1 like Mac OS X) Book%20Creator/116 Darwin/18.2.0';
$useragent[] = 'Mozilla/5.0 (X11; U; Darwin i386; en-US; rv:1.9.1.4) Gecko/20100311 Shiretoko/3.5.5';
$useragent[] = 'NET.mede/1 CFNetwork/758.5.3 Darwin/15.6.0';
$useragent[] = 'Safari/13604.1.38.1.6 CFNetwork/887 Darwin/17.0.0';
$useragent[] = 'Safari/6531.9 CFNetwork/454.4 Darwin/10.0.0 (i386) (MacBook4%2C1)';
$useragent[] = 'SafariSafeBrowsing/603.3.8 CFNetwork/811.5.4 Darwin/16.7.0';
$useragent[] = 'SafariViewService/1.0 CFNetwork/974.2 Darwin/18.0.0';
$useragent[] = 'Viber/8.1.1.158 CFNetwork/811.5.4 Darwin/16.7.0';
$useragent[] = 'com.apple.Notes.SharingExtension/555.10.42 CFNetwork/760.7 Darwin/15.6.0 (x86_64)';
$useragent[] = 'com.apple.Safari.SearchHelper/10600.8.3 CFNetwork/720.5.7 Darwin/14.5.0 (x86_64)';
$useragent[] = 'com.apple.WebKit.Networking/10603.3.8 CFNetwork/720.5.7 Darwin/14.5.0 (x86_64)';
$useragent[] = 'com.apple.mobilenotes.SharingExtension/1124.10 CFNetwork/808.1.4 Darwin/16.1.0';
$useragent[] = 'dataaccessd (unknown version) CFNetwork/811.5.4 Darwin/16.7.0';

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