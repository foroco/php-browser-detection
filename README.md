# PHP Browser Detection

A PHP library to detect browser, OS, platform and device type by User-Agent parsing.\
This library focused on high performance and low memory usage HTTP client parsing.\
Uses a simple and fast algorithm to accurately detect more than 200 browsers/apps and over 60 OS.\
For most commonly browsers parsing process took less than 0.0005 second even on low-level shared hosting.\
In the case of rare User-Agents recognized time is less than 0.0008 second for the same conditioned hosting environment.\
The library supports only really actual Browsers and OS without support for outdated environments that are actually not used now.\
Newest MacOS Monterey, MacOS Ventura and Windows 11 User-Agents detection included.\
Works by use only one library file and without any third-party libraries dependency.

## Requirements

This library requires PHP 5.3 or higher.

## Manual installation

1. Simply upload library file `BrowserDetection.php` (placed in the `src` directory) to your project;
2. Connect PHP library file by using `require_once`:

```php
<?php

require_once('BrowserDetection.php');

?>
```

## Installation by using Composer

Install this library using Composer:

`
composer require foroco/php-browser-detection
`

Update library package by running a command:

`
composer update foroco/php-browser-detection
`

The first step requires the Composer autoloader:

```php
<?php

require ('vendor/autoload.php');

// If you use PHP in Windows OS use another path style:
// require ('vendor\autoload.php');
?>
```

## Usage

The library will try to get environment data from the `HTTP_USER_AGENT` header sent by the HTTP client.
Library PHP Class `BrowserDetection` contains four public methods which return Array or JSON string of recognized data from `HTTP_USER_AGENT`:

* `getAll();`
* `getOS();`
* `getBrowser();`
* `getDevice();`

First argument should contain User-Agent string from the `HTTP_USER_AGENT` header or your custom User-Agent string.\
Second argument (optional) may contain 'JSON' if you want to get returned result as JSON format.

```php
<?php

$Browser = new foroco\BrowserDetection();

$useragent = $_SERVER['HTTP_USER_AGENT'];

// Get all possible environment data (array):
$result = $Browser->getAll($useragent);

// Get OS data (array):
$result = $Browser->getOS($useragent);

// Get Browser data (array):
$result = $Browser->getBrowser($useragent);

// Get Device type data (array):
$result = $Browser->getDevice($useragent);

/*
Also methods may returned result as JSON string
Just use second argument of methods as 'JSON'
*/

// Get all possible environment data (JSON):
$result = $Browser->getAll($useragent, 'JSON');

print_r($result);

// ... etc
?>
```

The library class `BrowserDetection` also contains special method `setTouchSupport()` (optional, available from version 1.1).\
This method is necessary to detect mobile browsers in `Desktop Mode` condition (Android and iOS).\
For `Desktop Mode` detection `setTouchSupport()` method should call if browser supports Touch events.\
Touch events detection is performed by client-side JavaScript code in the target browser. Example:

```javascript
if (('ontouchstart' in window) || window.DocumentTouch && document instanceof DocumentTouch) {
// Touch Event detected
}
```

## Description for returned variables

**OS Type** (`os_type`)\
Returns type of operating system (OS).\
All possible values:
* desktop
* mobile
* mixed
* unknown

**OS Family** (`os_family`)\
Returns operating system (OS) family or `unknown` in cases of unable OS family recognition.\
Example: `windows`, `linux`, `unix` etc.

**OS Name** (`os_name`)\
Returns operating system (OS) name or `unknown` in cases of unable OS name recognition.\
Example: `Windows`, `Android`, `macOS`, `iOS` etc.

**OS Version** (`os_version`)\
Returns operating system (OS) version or `0` in cases of unable OS version recognition.\
May contains numeric, string or mixed types OS versions.\
In case of numeric OS version (e.g. `Android`) contains major and minor version parts values, e.g. `4.4`, `8.1`, `10` etc.\
In case of string OS version (e.g. `macOS`) contains string version name values, e.g. `Mavericks`, `Mojave`, `Catalina` etc.\
For `Windows` may contains mixed version types values: `10`, `Vista`, `XP` etc.

**OS Title** (`os_title`)\
Returns operating system (OS) title which contains OS name and OS version together.\
Also returns `unknown` if OS name is not recognized.

**Device Type** (`device_type`)\
Returns device type based on some User-Agent data.\
All possible values:
* desktop
* mobile
* tv
* console
* mediaplayer
* car
* watch
* unknown

**Browser Name** (`browser_name`)\
Returns browser name or `unknown` in cases of unable browser name recognition.\
Example: `Chrome`, `Firefox`, `UC Browser`, `Huawei Browser`, `Vivaldi` etc.

**Browser Version** (`browser_version`)\
Returns browser version number or `0` in cases of unable browser version recognition.\
Always contains numeric values (integer or float numbers).\
Returns float number (e.g. `3.5`, `10.5`, `13.1`) for some browsers which should contains both major and minor browser version parts (`Safari`, `Vivaldi`, `PaleMoon` etc).\
Returns only major decimal browser version (e.g. `15`, `37`, `81`) for other browsers which has a lot of major versions (`Chrome`, `Firefox`, `Opera` etc).

**Browser Title** (`browser_title`)\
Returns browser title which contains browser name and browser version together.\
Also returns `unknown` if browser name is not recognized.

**Browser Chrome Original** (`browser_chrome_original`)\
Returns `1` number if browser recognized as original Google Chrome browser or returns `0` if it's not.

**Browser Firefox Original** (`browser_firefox_original`)\
Returns `1` number if browser recognized as original Mozilla Firefox browser or returns `0` if it's not.

**Browser Safari Original** (`browser_safari_original`)\
Returns `1` number if browser recognized as original Apple Safari browser or returns `0` if it's not.

**Browser Chromium Version** (`browser_chromium_version`)\
Returns Chromium major engine version number if browser based on Chromium engine or returns `0` if it's not.

**Browser Gecko Version** (`browser_gecko_version`)\
Returns Gecko major engine version number if browser based on Gecko engine or returns `0` if it's not.

**Browser WebKit Version** (`browser_webkit_version`)\
Returns WebKit version engine number if browser based on WebKit engine or returns `0` if it's not.\
Always float number value.

**Browser Android Webview** (`browser_android_webview`)\
Returns `1` number if Android Webview mode detected or returns `0` if it's not.

**Browser iOS Webview** (`browser_ios_webview`)\
Returns `1` number if iOS Webview mode detected or returns `0` if it's not.

**Browser Desktop Mode** (`browser_desktop_mode`)\
Returns `1` number if mobile browser works in `Desktop Mode` or returns `0` if it's not detected.\
`setTouchSupport()` method should call for `Desktop Mode` detection if browser supports Touch events.

**64 Bits Mode** (`64bits_mode`)\
Returns `1` number if operating system (OS) and browser work together in 64-bit mode or returns `0` if 64-bit mode not detected.\
Available only for `getAll();` and `getOS();` methods.

## Usage Examples

See follow examples to understand library usage use cases.

### Detect All

To detect all possible environment data use:

```php
<?php

$Browser = new foroco\BrowserDetection();

$useragent = 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.4150.0 Iron Safari/537.36';
$result = $Browser->getAll($useragent);
print_r($result);

?>
```

Returns:

```
Array
(
    [os_type] => desktop
    [os_family] => windows
    [os_name] => Windows
    [os_version] => 7
    [os_title] => Windows 7
    [device_type] => desktop
    [browser_name] => Iron
    [browser_version] => 80
    [browser_title] => Iron 80
    [browser_chrome_original] => 0
    [browser_firefox_original] => 0
    [browser_safari_original] => 0
    [browser_chromium_version] => 80
    [browser_gecko_version] => 0
    [browser_webkit_version] => 0
    [browser_android_webview] => 0
    [browser_ios_webview] => 0
    [browser_desktop_mode] => 0
    [64bits_mode] => 1
)
```

### OS Detection

To parse only OS data use:

```php
<?php

$Browser = new foroco\BrowserDetection();

$useragent = 'Mozilla/5.0 (Linux; arm_64; Android 9; LLD-L31) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.136 YaBrowser/20.2.4.153.00 Mobile Safari/537.36';
$result = $Browser->getOS($useragent);
print_r($result);

?>
```

Returns:

```
Array
(
    [os_type] => mobile
    [os_family] => android
    [os_name] => Android
    [os_version] => 9
    [os_title] => Android 9
    [64bits_mode] => 1
)
```

### Browser Detection

To parse only browser data use:

```php
<?php

$Browser = new foroco\BrowserDetection();

$useragent = 'Mozilla/5.0 (iPad; CPU OS 9_3_4 like Mac OS X) AppleWebKit/601.1 (KHTML, like Gecko) CriOS/80.0.3987.122 Mobile/13G35 Safari/601.1.46';
$result = $Browser->getBrowser($useragent);
print_r($result);

?>
```

Returns:

```
Array
(
    [browser_name] => Chrome
    [browser_version] => 80
    [browser_title] => Chrome 80
    [browser_chrome_original] => 1
    [browser_firefox_original] => 0
    [browser_safari_original] => 0
    [browser_chromium_version] => 80
    [browser_gecko_version] => 0
    [browser_webkit_version] => 0
    [browser_android_webview] => 0
    [browser_ios_webview] => 0
    [browser_desktop_mode] => 0
)
```

### Device Detection

To parse only device type data use:

```php
<?php

$Browser = new foroco\BrowserDetection();

$useragent = 'Mozilla/5.0 (SMART-TV; Linux; Tizen 5.0) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/2.2 Chrome/63.0.3239.84 TV Safari/537.36';
$result = $Browser->getDevice($useragent);
print_r($result);

?>
```

Returns:

```
Array
(
    [device_type] => tv
)
```

### Desktop Mode Detection

To detect if mobile browser works in `Desktop Mode` use:

```php
<?php

$Browser = new foroco\BrowserDetection();

$useragent = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36';
$Browser->setTouchSupport(); // Call if Touch events detected in browser by JavaScript code ('ontouchstart' in window)
$result = $Browser->getAll($useragent);
print_r($result);

?>
```

Returns:

```
Array
(
    [os_type] => mobile
    [os_family] => android
    [os_name] => Android
    [os_version] => 0
    [os_title] => Android
    [device_type] => mobile
    [browser_name] => Chrome
    [browser_version] => 81
    [browser_title] => Chrome 81
    [browser_chrome_original] => 1
    [browser_firefox_original] => 0
    [browser_safari_original] => 0
    [browser_chromium_version] => 81
    [browser_gecko_version] => 0
    [browser_webkit_version] => 0
    [browser_android_webview] => 0
    [browser_ios_webview] => 0
    [browser_desktop_mode] => 1
    [64bits_mode] => 0
)
```

### Detect All (JSON)

To pasre all possible environment data and returns JSON format string:

```php
<?php

$Browser = new foroco\BrowserDetection();

$useragent = 'Mozilla/5.0 (iPhone; CPU iPhone OS 6_0 like Mac OS X) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Mobile Safari/537.36';
$result = $Browser->getAll($useragent);
print_r($result);

?>
```

Returns:

```
{"os_type":"mobile","os_family":"macintosh","os_name":"iOS","os_version":6,"os_title":"iOS 6","device_type":"mobile","browser_name":"Chrome","browser_version":78,"browser_title":"Chrome 78","browser_chrome_original":1,"browser_firefox_original":0,"browser_safari_original":0,"browser_chromium_version":78,"browser_gecko_version":0,"browser_webkit_version":0,"browser_android_webview":0,"browser_ios_webview":0,"browser_desktop_mode":0,"64bits_mode":0}
```

## Benchmarking Test

Benchmarking was performed on a low-level shared hosting.\
Test server configuration: RedHat Linux + LiteSpeed + PHP Extension.\
Test conditions based on collection of random ~446000 non repeated real life User-Agent strings.

User-Agent recognition performance in PHP 7.3 (requests per second):

```
getAll: ~ 31000 rps
getOS: ~ 120000 rps
getBrowser: ~ 43000 rps
getDevice: ~ 70000 rps
```

## License

The MIT License (MIT)

Copyright (c) 2020-2023 Artem Murugov

Permission is hereby granted, free of charge, to any person obtaining a copy of
this software and associated documentation files (the "Software"), to deal in
the Software without restriction, including without limitation the rights to
use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of
the Software, and to permit persons to whom the Software is furnished to do so,
subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS
FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER
IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.