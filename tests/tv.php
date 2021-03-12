<?php

require_once('../src/BrowserDetection.php');
$Browser = new foroco\BrowserDetection();

// Testing some TV User-Agent strings

$useragent[] = 'Mozilla/5.0 (CrKey armv7l 1.5.16041) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.0 Safari/537.36';
$useragent[] = 'Mozilla/5.0 (X11; Linux aarch64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/52.0.2743.84 Safari/537.36 CrKey/1.21a.76178';
$useragent[] = 'Mozilla/5.0 (X11; Linux armv7l) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.90 Safari/537.36 CrKey/1.17.46278';
$useragent[] = 'Mozilla/5.0 (Linux; Android 5.1.1; AFTT Build/LVY48F; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/49.0.2623.10';
$useragent[] = 'Dalvik/2.1.0 (Linux; U; Android 5.1; AFTM Build/LMY47O)';
$useragent[] = 'Mozilla/5.0 (Linux; U; Android 4.2.2; en-us; AFTM Build/JDQ39) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Safari/534.30';
$useragent[] = 'Mozilla/5.0 (compatible; U; NETFLIX) AppleWebKit/533.3 (KHTML, like Gecko) Qt/4.7.0 Safari/533.3 Netflix/3.2 (DEVTYPE=RKU-42XXX-; CERTVER=0) QtWebKit/2.2, Roku 3/7.0 (Roku, 4200X, Wireless)';
$useragent[] = 'Mozilla/5.0 (Linux; Tizen 2.3) AppleWebKit/538.1 (KHTML, like Gecko)Version/2.3 TV Safari/538.1';
$useragent[] = 'Mozilla/5.0 (Linux; Tizen 2.3; SmartHub; SMART-TV; SmartTV; U; Maple2012) AppleWebKit/538.1+ (KHTML, like Gecko) TV Safari/538.1+';
$useragent[] = 'Mozilla/5.0 (Web0S; Linux/SmartTV) AppleWebKit/538.2 (KHTML, like Gecko) Large Screen Safari/538.2 LG Browser/7.00.00(LGE; 24LF4820-BU; 03.20.14; 1; DTV_W15L); webOS.TV-2015; LG NetCast.TV-2013 Compatible (LGE, 24LF4820-BU, wireless)';
$useragent[] = 'Mozilla/5.0 (Web0S; Linux/SmartTV) AppleWebKit/537.36 (KHTML, like Gecko) QtWebEngine/5.2.1 Chr0me/38.0.2125.122 Safari/537.36 LG Browser/8.00.00(LGE; 60UH6550-UB; 03.00.15; 1; DTV_W16N); webOS.TV-2016; LG NetCast.TV-2013 Compatible (LGE, 60UH6550-UB, wireless)';
$useragent[] = 'Mozilla/5.0 (Web0S; Linux/SmartTV) AppleWebKit/538.2 (KHTML, like Gecko) Large Screen Safari/538.2 LG Browser/7.00.00(LGE; 65LF6300-UA; 04.00.30; 1; DTV_W15M); webOS.TV-2015; LG NetCast.TV-2013 Compatible (LGE, 65LF6300-UA, wireless)';
$useragent[] = 'Mozilla/5.0 (Linux; BRAVIA 4K 2015 Build/LMY48E.S265) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.101 Safari/537.36 OPR/28.0.1754.0';
$useragent[] = 'Opera/9.80 (Linux armv7l; Opera TV Store/6222) Presto/2.12.407 Version/12.50 Model/Sony-KJ-48W700C SonyCEBrowser/1.0 (KJ-48W700C; CTV/PKG2.401JPA; JPN)';
$useragent[] = 'Mozilla/5.0 (Linux; U; Linux; ja-jp; DTV; TSBNetTV/T3E01CD.0203.DDD) AppleWebKit/536(KHTML, like Gecko) NX/3.0 (DTV; HTML; R1.0;) DTVNetBrowser/2.2 (000039;T3E01CD;0203;DDD) InettvBrowser/2.2 (000039;T3E01CD;0203;DDD)';
$useragent[] = 'Opera/9.80 (Linux armv7l; HbbTV/1.2.1 (; Philips; 40HFL5010T12; ; PHILIPSTV; CE-HTML/1.0 NETTV/4.4.1 SmartTvA/3.0.0 Firmware/004.002.036.135 (PhilipsTV, 3.1.1,)en) ) Presto/2.12.407 Version/12.50';
$useragent[] = 'Mozilla/5.0 (SMART-TV; X11; Linux i686) AppleWebKit/534.7 (KHTML, like Gecko) Version/5.0 Safari/534.7';
$useragent[] = 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.2) Gecko/20100222 Firefox/3.6 Kylo/0.6.1.70394';
$useragent[] = 'Opera/9.80 (Linux armv7l; Opera TV Store/5581) Presto/2.12.362 Version/12.11';
$useragent[] = 'Mozilla/5.0 (CrKey armv7l 1.4.15250) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.0 Safari/537.36';
$useragent[] = 'Mozilla/5.0 (X11; U; Linux i686; en-US) AppleWebKit/534.1 (KHTML, like Gecko) HbbTV/1.1.1 (+PVR;Mstar;OWB;;;)';
$useragent[] = 'Opera/9.80 (Linux sh4; U; ; en; CreNova Build) AppleWebKit/533.1 (KHTML like Gecko) Version/4.0 Mobile Safari/533.1 HbbTV/1.1';
$useragent[] = 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.4 (KHTML, like Gecko) MWB/1.0 Safari/537.4 HbbTV/1.2.1 (; Mstar; MWB;;;)';
$useragent[] = 'Mozilla/5.0 (Linux mips; U;HbbTV/1.1.1 (+RTSP;DMM;Dreambox;0.1a;1.0;) CE-HTML/1.0; en) AppleWebKit/535.19 no/Volksbox QtWebkit/2.2';
$useragent[] = 'Mozilla/5.0 (DirectFB; U; Linux 35230; en) AppleWebKit/531.2+ (KHTML, like Gecko) Safari/531.2+ LG Browser/4.1.4(+3D+SCREEN+TUNER; LGE; 42LW5700-SA; 04.02.28; 0x00000001;); LG NetCast.TV-2011';
$useragent[] = 'Mozilla/5.0 (DirectFB; Linux armv7l) AppleWebKit/534.26+ (KHTML, like Gecko) Version/5.0 Safari/534.26+ HbbTV/1.1.1 ( ;LGE ;NetCast 3.0 ;1.0 ;1.0M ;)';
$useragent[] = 'Mozilla/5.0 (Linux; U; Android 3.2; en-us; GTV100 Build/MASTER) AppleWebKit/534.13 (KHTML, like Gecko) Version/4.0 Safari/534.13';
$useragent[] = 'Mozilla/5.0 (FreeBSD; U; Viera; fr-FR) AppleWebKit/535.1 (KHTML, like Gecko) Viera/1.5.2 Chrome/14.0.835.202 Safari/535.1';
$useragent[] = 'Opera/9.70 (Linux armv6l ; U; CE-HTML/1.0 NETTV/2.0.2; en) Presto/2.2.1';
$useragent[] = 'Opera/9.80 (Linux armv6l ; U; CE-HTML/1.0 NETTV/3.0.1;; en) Presto/2.6.33 Version/10.60';
$useragent[] = 'Mozilla/5.0 (Linux; U; Android 4.1.1; en-gb; POV_TV-HDMI-KB-01 Build/JRO03H) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Safari/534.30';
$useragent[] = 'Roku/DVP-5.2 (025.02E03197A)';
$useragent[] = 'Mozilla/5.0 (SmartHub; SMART-TV; U; Linux/SmartTV) AppleWebKit/531.2+ (KHTML, like Gecko) WebBrowser/1.0 SmartTV Safari/531.2+';
$useragent[] = 'Mozilla/5.0 (SMART-TV; X11; Linux i686) AppleWebKit/535.20+ (KHTML, like Gecko) Version/5.0 Safari/535.20+';
$useragent[] = 'Mozilla/5.0 (SmartHub; SMART-TV; U; Linux/SmartTV; Maple2012) AppleWebKit/534.7 (KHTML, like Gecko) SmartTV Safari/534.7';
$useragent[] = 'Mozilla/5.0 (DTV) AppleWebKit/531.2+ (KHTML, like Gecko) Espial/6.1.5 AQUOSBrowser/2.0 (US01DTV;V;0001;0001)';
$useragent[] = 'Opera/9.80 (Linux armv7l; InettvBrowser/2.2 (00014A;SonyDTV115;0002;0100) KDL42W650A; CC/GRC) Presto/2.12.362 Version/12.11';
$useragent[] = 'Opera/9.80 (Linux sh4; U; HbbTV/1.1.1 (;;;;;); CE-HTML; TechniSat Digit ISIO S; de) Presto/2.9.167 Version/11.50';
$useragent[] = 'Mozilla/5.0 (Linux; GoogleTV 3.2; VAP430 Build/MASTER) AppleWebKit/534.24 (KHTML, like Gecko) Chrome/11.0.696.77 Safari/534.24';
$useragent[] = 'Mozilla/5.0 (SMART-TV; Linux; Tizen 2.4.0) AppleWebkit/538.1 (KHTML, like Gecko) SamsungBrowser/1.1 TV Safari/538.1';
$useragent[] = 'Mozilla/5.0 (SMART-TV; X11; Linux armv7l) AppleWebKit/537.42 (KHTML, like Gecko) Chromium/25.0.1349.2 Chrome/25.0.1349.2 Safari/537.42';
$useragent[] = 'Mozilla/5.0 (Linux; NetCast; U) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/34.0.1847.137 Safari/537.31 SmartTV/6.0';
$useragent[] = 'Mozilla/5.0 (SMART-TV; LINUX; Tizen 3.0) AppleWebKit/538.1 (KHTML, like Gecko) Version/3.0 TV Safari/538.1';
$useragent[] = 'Mozilla/5.0 (Web0S; Linux/SmartTV) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.0.2785.34 Safari/537.36 DMOST/1.0.1 (; LGE; webOSTV; WEBOS4.1.0 04.10.40; W4_lm18a;)';
$useragent[] = 'Mozilla/5.0 (Web0S; Linux/SmartTV) AppleWebKit/537.36 (KHTML, like Gecko) QtWebEngine/5.2.1 Chrome/38.0.2125.122 Safari/537.36 WebAppManager';
$useragent[] = 'Mozilla/5.0 (Web0S; Linux/SmartTV) AppleWebKit/538.2 (KHTML, like Gecko) Large Screen WebAppManager Safari/538.2';
$useragent[] = 'Mozilla/4.0 WebTV/2.6 (compatible; MSIE 4.0)';
$useragent[] = 'Mozilla/5.0 (Linux; Android 6.0; SmartTV Build/MRA58K; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/48.0.2542.0 Safari/537.36';
$useragent[] = 'Mozilla/5.0 (Linux; Viera; rv:34.0) Gecko/20100101 Firefox/34.0 SmartTV';
$useragent[] = 'Mozilla/5.0 (compatible; U; NETFLIX) AppleWebKit/533.3 (KHTML, like Gecko) Qt/4.7.0 Safari/533.3 Netflix/3.2 (DEVTYPE=RKU-42XXX-; CERTVER=0) QtWebKit/3.0, Roku 3/8.0 (Roku, 4200X, Wireless)';
$useragent[] = 'Mozilla/5.0 (Linux armv7l) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/38.0.2125.122 Safari/537.36 OPR/25.0.1620.0 OMI/4.3.18.7.Dominik.0 VSTVB MB100 HbbTV/1.2.1 (; PANASONIC; MB100; 0.1.34.20; ;) SmartTvA/3.0.0 UID(00:09:DF:C6:44:B0/MB100/PANASONIC/0.1.34.20)';
$useragent[] = 'Opera/9.80 (Linux mips; ) Presto/2.12.407 Version/12.51 MB97/0.0.39.5 (JVC, Mxl661LG32, wireless) VSTVB_MB97 SmartTvA/3.0.0';
$useragent[] = 'Mozilla/5.0 (Web0S 100.0; Linux/SmartTV) AppleWebKit/606 (KHTML, like Gecko) Safari/606 Maxthon/6.0';
$useragent[] = 'Mozilla/5.0 (Linux; Android) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.125 Safari/537.36 CrKey/1.50.229149';
$useragent[] = 'Mozilla/5.0 (Windows NT 6.0; Changhong Andr0id TV Build/MRA58K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36 SMART-TV';
$useragent[] = 'ZingoTvFire/ZINGOTV_Roku_2.2 (Linux;Android 5.1.1) AmznExoPlayerLib/2.9.6';
$useragent[] = 'appletv/7.4 ios/8.4.3 appletv/7.4 model/appletv3\,2 build/12h876 (3; dt:12)';
$useragent[] = 'Mozilla/5.0 (Linux; olleh tv; U; ko-kr; CT1101) AppleWebKit/538.37 (KHTML, like Gecko) AltiBrowser/4.20.0 (olleh tv; Large Screen) Safari/538.37';
$useragent[] = 'Mozilla/5.0 (Linux; U; Android 4.1.1; nl-nl; POV_TV-HDMI-200BT Build/JRO03H) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Safari/534.30';
$useragent[] = 'LG-BDP Linux/2.6.35 UPnP/1.0 DLNADOC/1.50 LGE_DLNA_SDK/1.5.0';
$useragent[] = 'Mozilla/5.0 (SMART-TV; X11; Linux i686) AppleWebKit/535.20+ (KHTML, like Gecko) Version/5.0 Safari/535.20+';
$useragent[] = 'mwb-db-client Opera/9.80 (Linux armv7l ; U; HbbTV/1.1.1 (; TOSHIBA; 32SL863; 19.2.39.208; 3; ) ; ToshibaTP/1.1.1 () ; en) Presto/2.6.33 Version/10.60';
$useragent[] = 'Mozilla/5.0 (Linux; GoogleTV 3.2; NSZ-GS7/GX70 Build/MASTER) AppleWebKit/534.24 (KHTML, like Gecko) Chrome/11.0.696.77 Safari/534.24';
$useragent[] = 'Mozilla/5.0 (Linux; U; Android 4.1.1; ru-ru; iconBIT Build/JRO03H) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Safari/534.30';
$useragent[] = 'Mozilla/5.0 (SmartHub; SMART-TV; U; Linux/SmartTV) AppleWebKit/531.2+ (KHTML, like Gecko) WebBrowser/1.0 SmartTV Safari/531.2+';
$useragent[] = 'iTunes-AppleTV/4.1';
$useragent[] = 'Mozilla/5.0 (X11; Linux EVOLVEO Smart TV box Q4 Build/JDQ39; rv:34.0) Gecko/20100101 Firefox/34.';
$useragent[] = 'Mozilla/5.0 (X11; Ubuntu; Linux EVOLVEO Smart TV box Q4 Build/JDQ39) AppleWebKit/534.30 (KHTML, like Gecko) Version/7.0 Safari/534.30';
$useragent[] = 'Mozilla/5.0 (Windows NT 6.3; EVOLVEO Smart TV box Q4 Build/JDQ39; rv:34.0) Gecko/20100101 Firefox/34.0';
$useragent[] = 'Mozilla/5.0 (Linux; Tizen 2.3; SmartHub; SMART-TV; SmartTV; U; Maple2012) AppleWebKit/538.1+ (KHTML, like Gecko) TV Safari/538.1+';
$useragent[] = 'Mozilla/5.0 (Linux; U; Android 5.1; SHIELD Android TV Build/LMY47D) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 UCBrowser/10.5.2.582 U3/0.8.0 Mobile Safari/534.30';
$useragent[] = 'Mozilla/5.0 (Linux; U; Android 5.1; en-US; SHIELD Android TV Build/LMY47D) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 UCBrowser/10.8.0.718 U3/0.8.0 Mobile Safari/534.30';
$useragent[] = 'UPnP/1.0 DLNADOC/1.50';
$useragent[] = 'Mozilla/5.0 (SMART-TV; Linux; Tizen 2.4.0) AppleWebkit/538.1 (KHTML, like Gecko) SamsungBrowser/1.1 TV Safari/538.1';
$useragent[] = 'Windows2000/0.0 UPnP/1.0 PhilipsIntelSDK/1.4 DLNADOC/1.50';
$useragent[] = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36 Roku/DVP-8.1 (047.00E09044A)';
$useragent[] = 'Mozilla/5.0 (Web0S; Linux/SmartTV) AppleWebKit/537.36 (KHTML, like Gecko) QtWebEngine/5.2.1 Chr0me/38.0.2125.122 Safari/537.36 LG Browser/8.00.00(LGE; 60UH6550-UB; 03.00.15; 1; DTV_W16N); webOS.TV-2016; LG NetCast.TV-2013 Compatible (LGE, 60UH6550-UB, wir';
$useragent[] = 'Mozilla/5.0 (Linux; Android 4.2.2; AFTB Build/JDQ39) AppleWebKit/537.22 (KHTML, like Gecko) Chrome/25.0.1364.173 Mobile Safari/537.22';
$useragent[] = 'Mozilla/5.0 (SMART-TV; Linux; Tizen 4.0.0.7) AppleWebkit/605.1.15 (KHTML, like Gecko) SamsungBrowser/9.2 TV Safari/605.1.15';
$useragent[] = 'AppleCoreMedia/1.0.0.12B466 (Apple TV; U; CPU OS 8_1_3 like Mac OS X; en_us)';
$useragent[] = 'AppleTV/tvOS/9.1.1';
$useragent[] = 'Haystack TV/20 (Apple TV; iOS 10.1; Scale/1.00)';

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