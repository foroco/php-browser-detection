<?php

error_reporting(E_ALL);

require_once('../src/BrowserDetection.php');
$Browser = new foroco\BrowserDetection();

// Testing some rare and unusual User-Agents

$useragent[] = 'Mozilla/5.0 (X11; Linux; ko-KR) AppleWebKit/534.26+ (KHTML, like Gecko) Version/5.0 Safari/534.26+';
$useragent[] = 'Mozilla/5.0 (Android; Mobile) Gecko/68.0 Firefox/68.0 QwantMobile/3.5';
$useragent[] = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:68.9) Gecko/20100101 Goanna/4.6 Firefox/68.9 Basilisk/20200911';
$useragent[] = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:68.9) Gecko/20100101 Goanna/4.6 Firefox/68.9 PaleMoon/28.10.0';
$useragent[] = 'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:20.3) Gecko/20130809 Firefox/20.3 PaleMoon/20.3';
$useragent[] = 'Mozilla/5.0 (Windows; U; Windows NT 6.2; en-US; rv:1.9.2.15) Gecko/20110303 Firefox/3.6.15';
$useragent[] = 'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:2.0) Gecko/20100101 Firefox/4.0';
$useragent[] = 'Opera/9.80 (Windows NT 6.2; U; en) Presto/2.9.168 Version/11.51';
$useragent[] = 'QwantMobile/2.0 (iPad; CPU OS 11_2_6 like Mac OS X) AppleWebKit/604.5.6 (KHTML, like Gecko) QwantiOS/2.0.2b2 Mobile/15D100 Safari/604.5.6';
$useragent[] = 'Mozilla/5.0 (Linux; Android 9; SM-J810F Build/PPR1.180610.011) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.93 Mobile Safari/537.36 YaApp_Android/9.50 YaSearchBrowser/9.50';
$useragent[] = 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.26 Safari/537.36 Core/1.63.5408.400 QQBrowser/E4502ADBD6D35';
$useragent[] = 'Mozilla/5.0 (Linux; Android 9; Mi A1 Build/PKQ1.180917.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.157 Mobile Safari/537.36 Instagram 93.1.0.19.102 Android (28/9; 480dpi; 1080x1920; Xiaomi/xiaomi; Mi A1; tissot_sprout; qcom; ru_RU; 154400383)';
$useragent[] = 'Mozilla/5.0 (Linux; Android 9; SAMSUNG SM-A202F/A202FXXU3ASL4) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/11.1 Chrome/75.0.3770.143 Mobile Safari/537.36';
$useragent[] = 'Opera/9.80 (Android; Opera Mini/7.6.35766/93.131; U; id) Presto/2.12.423 Version/12.16';
$useragent[] = 'Mozilla/5.0 (Linux; Android 10; Pixel 3 XL Build/QQ1A.200205.002; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/80.0.3987.87 Mobile Safari/537.36 GSA/10.95.6.21.arm64';
$useragent[] = 'Mozilla/5.0 (Windows; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0';
$useragent[] = 'Mozilla/5.0 (Android; Mobile; rv:52.7.3) Gecko/52.7.3 Firefox/52.7.3';
$useragent[] = 'Opera/9.80 (Macintosh; Intel Mac OS X; U; en) Presto/2.2.15 Version/10.00';
$useragent[] = 'Opera/9.02 (Windows; U; nl)';
$useragent[] = 'Opera/9.80 (Windows NT 6.1; WOW64) Presto/2.12.388 Version/12.18';
$useragent[] = 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36 OPR/43.0.2442.991';
$useragent[] = 'Opera/9.80 (Linux armv7l) Presto/2.12.407 Version/12.51 , D50u-D1-UHD/V1.5.16-UHD (Vizio, D50u-D1, Wireless)';
$useragent[] = 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; en) Opera 8.50';
$useragent[] = 'Opera/9.00 (Windows NT 5.1; U; en)';
$useragent[] = 'Mozilla/5.0 (Windows NT 5.1; U; en) Opera 8.01';
$useragent[] = 'Opera/9.80 (SpreadTrum; Opera Mini/4.4.33961/191.233; U; ru) Presto/2.12.423 Version/12.16';
$useragent[] = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.61 Safari/537.36';
$useragent[] = 'Mozilla/5.0 (Linux; Android 4.4.4; en-us; SAMSUNG SM-N910C Build/KTU84P) AppleWebKit/537.36 (KHTML, like Gecko) Version/2.0 Chrome/34.0.1847.76 Mobile Safari/537.36';
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
$useragent[] = 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:60.9) ArtisReader/28.7.2 ArtisBrowser/28.7.2';
$useragent[] = 'Mozilla/5.0 (X11; Linux x86_64) KHTML/5.55.0 (like Gecko) Konqueror/5 KIO/5.55';
$useragent[] = 'Qwant/2.5 (Android 8.0.0; Mobile; rv:63.0) Gecko/63.0 Firefox/59.0 QwantBrowser/63.0.1';
$useragent[] = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) QtWebEngine/5.9.5 Chrome/56.0.2924.122 Safari/537.36 Konqueror (WebEnginePart)';
$useragent[] = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/534.34 (KHTML, like Gecko) konqueror/4.14.26 Safari/534.34';
$useragent[] = 'Mozilla/5.0 (compatible; Konqueror/3.0-rc6; i686 Linux; 20020613)';
$useragent[] = 'Mozilla/5.0 (X11; Linux x86_64) KHTML/5.55.0 (like Gecko) Konqueror/5 KIO/5.55';
$useragent[] = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_4) AppleWebKit/600.7.12 (KHTML, like Gecko) Version/8.0.7 Safari/600.7.12 (000154)';
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
$useragent[] = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.16; rv:85.0) Gecko/20100101 Firefox/85.0';
$useragent[] = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.2 Safari/605.1.15';
$useragent[] = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.16.4) AppleWebKit/604.5.8 (KHTML, like Gecko) Chrome/59.0.3061.40 Safari/604.5.8';
$useragent[] = 'Mozilla/5.0 (Windows NT 6.2; Win64; x64) AppleWebKit/538.1 (KHTML, like Gecko) Google Earth Pro/7.3.2.5776 Safari/538.1';
$useragent[] = 'Mozilla/5.0 (Windows; N; Windows NT 6.1; de-DE) AppleWebKit/532.4 (KHTML, like Gecko) Google Earth/7.1.5.1557 Safari/532.4';
$useragent[] = 'Mozilla/5.0 (i686) AppleWebKit/537.6+ (KHTML, like Gecko) WebKitGTK+/1.10.2 luakit/039e319';
$useragent[] = 'Mozilla/5.0 (x86_64) AppleWebKit/538.15+ (KHTML, like Gecko) WebKitGTK+/2.4.9 luakit';
$useragent[] = 'Mozilla/5.0 (Android; Mobile; rv:52.7.3) Gecko/52.7.3 Firefox/52.7.3';
$useragent[] = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.87 Safari/537.36 Brave/18';
$useragent[] = 'Mozilla/5.0 (Linux; Android 7.1.1; Moto E (4) Plus Build/NMA26.42-113; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/44.0.2403.119 Mobile Safari/537.36 ACHEETAHI/1';
$useragent[] = 'Mozilla/5.0 (SMART-TV; X11; Linux armv7l) AppleWebkit/537.42 (KHTML, like Gecko) Chromium/25.0.1349.2 Chrome/25.0.1349.2 Safari/537.42';
$useragent[] = 'Mozilla/5.0 (X11; Gentoo; rv:75.1) Gecko/20100101 Firefox/75.1';
$useragent[] = 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Maxthon/4.9.5.1000 Chrome/39.0.2146.0 Safari/537.36';
$useragent[] = 'Opera/9.80 (Android 4.1.1; Linux; Opera Tablet/ADY-1111101223; U; ru) Presto/2.9.201 Version/11.50';
$useragent[] = 'Opera/9.80 (J2ME/MIDP; Opera Mini/4.0.10247/191.212; U; ru) Presto/2.12.423 Version/12.16';
$useragent[] = 'Opera/9.80 (Android; Opera Mini/36.2.2254/189.67; U; ru) Presto/2.12.423 Version/12.16';
$useragent[] = 'Mozilla/5.0 (iPhone; CPU iPhone OS 6_0 like Mac OS X) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Mobile Safari/537.36';
$useragent[] = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_4) AppleWebKit/600.7.12 (KHTML, like Gecko) Version/8.0.7 Safari/600.7.12 (000154)';
$useragent[] = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 11_1_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36';
$useragent[] = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 11_0_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Safari/537.36 Edg/86.0.622.69';
$useragent[] = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 12_0_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36';
$useragent[] = 'Mozilla/5.0 (iPhone; CPU iPhone OS 12 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Mobile/15E148 Safari/604.1';
$useragent[] = 'Mozilla/5.0 (Windows NT 10.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36';
$useragent[] = 'Mozilla/5.0 (Windows NT 11.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36';

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