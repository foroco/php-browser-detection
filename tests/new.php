<?php

error_reporting(E_ALL);

require_once('../src/BrowserDetection.php');
$Browser = new foroco\BrowserDetection();

// Testing some new User-Agents

// New

// 2.6

$useragent[] = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.135 Safari/537.36 Edge/12.10240';
$useragent[] = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.102 Safari/537.36 Edge/18.18362';
$useragent[] = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.116 Safari/537.36 Edg/80.0.361.61';

$useragent[] = 'Mozilla/5.0 (iPad; CPU OS 13_1_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Mobile/15E148 [FBAN/MessengerForiOS;FBAV/243.0.0.43.118;FBBV/185083733;FBDV/iPad5,3;FBMD/iPad;FBSN/iOS;FBSV/13.1.3;FBSS/2;FBID/tablet;FBLC/es_ES;FBOP/5]';
$useragent[] = 'Mozilla/5.0 (Linux; Android 10; SM-G973F Build/QP1A.190711.020; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/83.0.4103.106 Mobile Safari/537.36 [FB_IAB/MESSENGER;FBAV/359.0.0.30.118;;]';

$useragent[] = 'Mozilla/5.0 (Linux; Android 13; SM-A127F Build/TP1A.220624.014; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/104.0.5112.97 Mobile Safari/537.36 TwitterAndroid';
$useragent[] = 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_5 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Mobile/19F77 Twitter for iPhone/9.14';

$useragent[] = 'Mozilla/5.0 (Windows; U; Windows NT 10.0; en-US; Valve Steam GameOverlay/1641596129; ) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.105 Safari/537.36';
$useragent[] = 'Mozilla/5.0 (Windows; U; Windows NT 10.0; en-US; Valve Client/1660960119; ) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.105 Safari/537.36';
$useragent[] = 'Mozilla/5.0 (Windows; U; Windows NT 10.0; en-US; Valve Steam Client/default/1654574690; ) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.105 Safari/537.36';

$useragent[] = 'Mozilla/5.0 (Linux; U; Android 10; zh-CN; M2006C3LG Build/QP1A.190711.020) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/69.0.3497.100 UWS/3.22.1.227 Mobile Safari/537.36 AliApp(LA/7.12.0) UCBS/2.11.1.1 TTID/600000@lazada_android_7.12.0 WindVane/8.5.0 720X1449';
$useragent[] = 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_6_1 like Mac OS X; zh-CN) AppleWebKit/605.1.15 (KHTML, like Gecko) Mobile/19G82 UCBrowser/15.0.4.1842 Mobile AliApp(TUnionSDK/0.1.20.4)';

$useragent[] = 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_5 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Mobile/19F77 Ariver/1.1.0 AliApp(AP/10.2.65.8000) Nebula WK RVKType(1) AlipayDefined(nt:WIFI,ws:375|748|3.0) AlipayClient/10.2.65.8000 Language/zh-Hans Region/CN NebulaX/1.0.0';
$useragent[] = 'Mozilla/5.0 (Linux; U; Android 12; zh-CN; KB2000 Build/RKQ1.211119.001) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/69.0.3497.100 UWS/3.22.2.43 Mobile Safari/537.36 UCBS/3.22.2.43_220223200704 NebulaSDK/1.8.100112 Nebula AlipayDefined(nt:WIFI,ws:360|0|3.0) AliApp(AP/10.3.0.8000) AlipayClient/10.3.0.8000 Language/zh-Hans useStatusBar/true isConcaveScreen/true Region/CNAriver/1.0.0';

$useragent[] = 'Bing/390206001 CFNetwork/1220.1 Darwin/20.3.0';
$useragent[] = 'Mozilla/5.0 (Linux; Android 10; NEN-LX1 Build/HUAWEINEN-LX1; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/83.0.4103.106 Mobile Safari/537.36 BingWeb/11.0.28178704';
$useragent[] = 'Mozilla/5.0 (iPad; CPU OS 14_0 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Mobile/15E148 Safari/601.1 bingipadclient BingWeb';

$useragent[] = 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_1_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Mobile/15E148 [Pinterest/iOS]';
$useragent[] = 'Mozilla/5.0 (Linux; Android 11; SM-A202F Build/RP1A.200720.012; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/87.0.4280.141 Mobile Safari/537.36 [Pinterest/Android]';
$useragent[] = 'Pinterest for Android/10.28.2 (lisbon; 11)';

$useragent[] = 'Mozilla/5.0 (iPhone; CPU OS 15_5 like Mac OS X) AppleWebKit/600.1.4 (KHTML, like Gecko) 1Password/7.9.6 (like Version/15.5 Mobile/19F77 Safari/600.1.4)';

$useragent[] = 'Browser/97 CFNetwork/1327.0.4 Darwin/21.2.0';

$useragent[] = 'iTunes/4.7.1 (Linux; N; Linux; x86_64-linux; IT; utf8) SqueezeCenter, Squeezebox Server, Logitech Media Server/8.3.1/git353c504';
$useragent[] = 'iTunes/10.5.1 (Windows; Microsoft Windows Vista Home Premium Edition (Build 6000)) AppleWebKit/534.51.22';
$useragent[] = 'iTunes/4.7.1 (Windows; N; Windows 10; 8664; FR; cp1252) SqueezeCenter, Squeezebox Server, Logitech Media Server/8.4.0/1678489609';
$useragent[] = 'iTunes/12.9 (Windows; Microsoft Windows 10 x64 Enterprise Edition (Build 19042); x64) AppleWebKit/7606.1032.1000.6';
$useragent[] = 'iTunes/9.0.2 (Macintosh; Intel Mac OS X 10.11.6) AppleWebKit/1601.7.8';
$useragent[] = 'iTunes/11.0.3 (Macintosh; OS X 10.8.5) AppleWebKit/536.30.1';
$useragent[] = 'iTunes/4.7.1 (Linux; N; QLMS 2.X (QNAP TurboStation) [Debian 9 stretch]; x86_64-linux; SV; utf8) SqueezeCenter, Squeezebox Server, Logitech Media Server/8.3.2/1677516824';
$useragent[] = 'iTunes/12.10.9 (Windows; Microsoft Windows 7 Service Pack 1 Home Premium Edition (Build 7601)) AppleWebKit/7609.3005.1003.3';
$useragent[] = 'iTunes/4.7.1 (Linux; N; Debian; armv7l-linux; DA; utf8) SqueezeCenter, Squeezebox Server, Logitech Media Server/8.3.0/1667251155';

// 2.5

$useragent[] = 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Mobile/15E148 QQ/8.8.50.617 V1_IPH_SQ_8.8.50_1_APP_A Pixel/1080 MiniAppEnable SimpleUISwitch/0 StudyMode/0 CurrentMode/0 CurrentFontScale/1.353000 QQTheme/1000 Core/WKWebView Device/Apple(iPhone 7Plus) NetType/4G QBWebViewType/1 WKType/1';
$useragent[] = 'Mozilla/5.0 (iPhone; CPU iPhone OS 14_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Mobile/15E148 QQ/8.6.5.638 V1_IPH_SQ_8.6.5_1_APP_A Pixel/1080 MiniAppEnable SimpleUISwitch/0 StudyMode/0 QQTheme/1000 Core/WKWebView Device/Apple(iPhone 8Plus) NetType/WIFI QBWebViewType/1 WKType/1';
$useragent[] = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.0.2785.21 Safari/537.36 MMS/1.0.2531.0';
$useragent[] = 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.2.2403.1 Amigo/44.2.2403.1 MRCHROME SOC Safari/537.36';
$useragent[] = 'Mozilla/5.0 (Linux; Android 10; ET51 Build/10-16-10.00-QG-U79-STD-HEL-04; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/87.0.4280.101 Safari/537.36 (AirWatch Browser v22.07.0.18)';
$useragent[] = 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_6_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Mobile/15E148 Version/13.6.1 Safari/605.1.15 (AirWatch Browser v22.07)';
$useragent[] = 'Mozilla/5.0 (iPad; CPU OS 11_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Mobile/15E302 Safari/9537.53 DiigoBrowser';
$useragent[] = 'MyApp/1.8.199 (iOS; iPhone XS; Version 13.3 (Build 17C45)) CFNetwork/1121.2.1 Darwin/19.3.0';
$useragent[] = 'Mozilla/5.0 (QtEmbedded; U; Linux; C) AppleWebKit/533.3 (KHTML, like Gecko) MAG200 stbapp ver: 6 rev: 1a90f4f Mobile Safari/533.3';
$useragent[] = 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.2 Mobile/15E148 Snapchat/11.68.0.37 (like Safari/8612.3.6.0.4, panda)';
$useragent[] = 'WhatsApp/2.21.10.25 i';
$useragent[] = 'WhatsApp/2.21.11.17 A';
$useragent[] = 'Mozilla/5.0 (Linux; Android 10; SM-G986B Build/QP1A.190711.020; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/78.0.3904.96 Mobile Safari/537.36 Viber/16.5.0.18';
$useragent[] = 'Viber/18.0.1.286 CFNetwork/1335.0.3 Darwin/21.6.0';
$useragent[] = 'MobileSafari/604.1 CFNetwork/1125.2 Darwin/19.4.0';
$useragent[] = 'Dalvik/2.1.0 (Linux; U; Android 5.1; Lenovo A1010a20 Build/LMY47I)';
$useragent[] = 'MobileSafari/604.1 CFNetwork/1120 Darwin/19.0.0';
$useragent[] = 'Mozilla/5.0 (X11; U; Linux i686; it; rv:1.9.0.6) Gecko/2009020409 Iceweasel 3.0.6 (Debian 5.0';
$useragent[] = 'Mozilla/5.0 (X11; Linux x86_64; rv:31.0) Gecko/20100101 Firefox/31.0 Iceweasel/31.2.0';
$useragent[] = 'Mozilla/5.0 (X11; U; Linux i686; de; rv:1.8.1.4) Gecko/20070508 Iceweasel/2.0.0.4 (Debian-2.0.0.4-0etch1)';
$useragent[] = 'Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.9a3) Gecko/20070409 IceWeasel/2.0.0.3';
$useragent[] = 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.1pre) Gecko/20061122 BonEcho/2.0.0.1pre';
$useragent[] = 'Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.0.1) Gecko/2008071818 GranParadiso/3.0.1';
$useragent[] = 'Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.1.1) Gecko/20090716 Ubuntu/9.04 (jaunty) Shiretoko/3.5.1';
$useragent[] = 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2a1) Gecko/20090806 Namoroka/3.6a1';
$useragent[] = 'Mozilla/5.0 (Linux; U; Android 4.4.2; en-us; SCH-I535 Build/KOT49H) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Mobile Safari/534.30-1673357039193';
$useragent[] = 'Mozilla/5.0 (iPhone; CPU iPhone OS 10_3_1 like Mac OS X) AppleWebKit/603.1.30 (KHTML, like Gecko) Version/10.0 Mobile/14E304 Safari/602.1-1673357048753';
$useragent[] = 'Mozilla/5.0 (Linux; Android 9; LM-V409N Build/PKQ1.190202.001) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.128 Whale/1.0.0.0 Crosswalk/23.69.596.0 Mobile Safari/537.36 NAVER(inapp; search; 680; 10.12.1)';
$useragent[] = 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_5 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.5 Mobile/15E148 Safari/605.1 NAVER(inapp; search; 1010; 11.12.6; 12MINI)';
$useragent[] = 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_6 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.6 Mobile/15E148 Safari/605.1 NAVER(inapp; search; 1010; 11.17.2; 11PROMAX)';
$useragent[] = 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_3_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) AvastSecureBrowser/4.9.0 Mobile/15E148 Version/15.0 Safari/605.1.15';
$useragent[] = 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_1_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.0 Mobile/15E148/10754139712';
$useragent[] = 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_7 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Mobile/15E148 Safari Line/12.12.0';
$useragent[] = 'Dalvik/2.1.0 (Linux; U; Android 10; vivo 1805 Build/QP1A.190711.020)';
$useragent[] = 'Mozilla/5.0 (Linux; Android 9; PDBM00 Build/PPR1.180610.011; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/107.0.5304.141 Mobile Safari/537.36 XWEB/5015 MMWEBSDK/20221206 MMWEBID/318 MicroMessenger/8.0.32.2300(0x28002037) WeChat/arm64 Weixin NetType/WIFI Language/zh_CN ABI/arm64';
$useragent[] = 'Mozilla/5.0 (iPhone; CPU iPhone OS 10_3_2 like Mac OS X) AppleWebKit/603.2.4 (KHTML, like Gecko) Mobile/14F89 MicroMessenger/6.5.12 NetType/4G Language/zh_CNNULL';
$useragent[] = 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_6_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Mobile/15E148 Safari/605.1.15 GNews iOS/5.70.100';
$useragent[] = 'Mozilla/5.0 (iPad; CPU OS 15_6 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Mobile/15E148 MobileIron/2.15.2 Version/15.6 Safari/605.1.15';
$useragent[] = 'Mozilla/5.0 (Linux; Android 7.0; SM-G955F Build/NRD90M; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/98.0.4758.87 Mobile Safari/537.36 SamsungBrowser/CrossApp/0.1.126';

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