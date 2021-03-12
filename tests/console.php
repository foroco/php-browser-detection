<?php

require_once('../src/BrowserDetection.php');
$Browser = new foroco\BrowserDetection();

// Testing some new User-Agent strings

$useragent[] = 'Mozilla/5.0 (Linux; Android 4.1.1; ARCHOS GAMEPAD Build/JRO03H) AppleWebKit/535.19 (KHTML, like Gecko) Chrome/18.0.1025.166 Safari/535.19';
$useragent[] = 'Mozilla/5.0 (Linux; U; Android 4.2.2; fr-fr; ARCHOS GAMEPAD2 Build/JDQ39) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Safari/534.30';
$useragent[] = 'Mozilla/5.0 (Nintendo WiiU) AppleWebKit/534.52 (KHTML, like Gecko) NX/2.1.0.8.21 NintendoBrowser/1.0.0.7494.US';
$useragent[] = 'Mozilla/5.0 (Nintendo 3DS; U; ; en) Version/1.7552.EU';
$useragent[] = 'Opera/9.50 (Nintendo DSi; Opera/507; U; en-GB)';
$useragent[] = 'Opera/9.00 (Nintendo Wii; U; ; 1309-9; en)';
$useragent[] = 'Mozilla/5.0 (Linux; Android 4.3; SHIELD Build/JSS15J) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/32.0.1700.99 Mobile Safari/537.36';
$useragent[] = 'Mozilla/5.0 (Playstation Vita 1.61) AppleWebKit/531.22.8 (KHTML, like Gecko) Silk/3.2';
$useragent[] = 'Mozilla/4.0 (PSP (PlayStation Portable); 2.00)';
$useragent[] = 'Mozilla/5.0 (Linux; U; Android OUYA 4.1.2; en-us; OUYA Build/JZO54L-OUYA) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Safari/534.30';
$useragent[] = 'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0; Xbox)';
$useragent[] = 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; Trident/6.0; Xbox; Xbox One)';
$useragent[] = 'Mozilla/5.0 (PlayStation 4 4.71) AppleWebKit/601.2 (KHTML, like Gecko)';
$useragent[] = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; Xbox; Xbox One) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36 Edge/16.16299';
$useragent[] = 'Mozilla/5.0 (compatible; MSIE 9.0; Windows Phone OS 7.5; Trident/5.0; IEMobile/9.0; Xbox)';
$useragent[] = 'Mozilla/5.0 (PLAYSTATION 3; 1.00)';
$useragent[] = 'Mozilla/5.0 (PlayStation; PlayStation 4/8.03) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.0 Safari/605.1.15';
$useragent[] = 'Mozilla/5.0 (Windows Phone 10.0; Android 6.0.1; Xbox; Xbox One) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Mobile Safari/537.36 Edge/16.16295';
$useragent[] = 'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0; Xbox) Gecko/20101104 Netscape/9.1.0285';

$time_start = microtime(true);

foreach ($useragent as $u)
{

	//$Browser->setTouchSupport();
	
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