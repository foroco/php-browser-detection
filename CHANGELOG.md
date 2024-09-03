# Changelog

All notable changes to this `PHP Browser Detection` project documented in this file.

## [2.8] - 2024-09-03

### Changed

- Safari Mobile browser detection improved;
- Yandex App and Yandex Browser detection improved;
- Baidu Mobile Browser renamed to DU Browser;
- MIUI Browser renamed to Mi Browser;
- Naver Search App renamed to Naver App;
- 115Browser renamed to 115 Browser;
- QQBrowser renamed to QQ Browser;
- AVG Secure Browser renamed to AVG Browser;
- MxNitro renamed to Maxthon Nitro;
- WeChat App moved to cross-device detections.

### Added

- Added detection for: DuckDuckGo, Aloha Browser, Opera GX, Ghostery Browser, SmartTV Browser, Adblock Browser, Stargon, Hi Browser, JioPages, You Browser, Max Browser, Biscuit, Chromium GOST, Dashob, Dezor, Duoyu Browser, Mypal Browser, iTop Browser, Mercury, Polarity, Sielo, Roccat, Arctic Fox, Norton Browser, Avira Browser, Lenovo Browser, Sber Browser, Soul Browser, Samsung Browser TV;
- Gnome Web browser detection on Linux;
- Opera Touch on iOS detection added;
- Chromium OS detection added as Chrome OS.

### Fixed

- MacOS/iOS WKWebView detection fixed and improved;
- Desktop Mode detection fixed and improved for Android and iOS browsers;
- Possible collisions with 'iPad' string matching in User-Agent (e.g HiPad on Android device) fixed;
- Basilisk browser detection fixed;
- Chrome iOS browser detection fixed;
- Firefox iOS browser detection fixed.

## [2.7] - 2023-04-27

### Fixed

- Gecko browser engine issue fixed for Gecko versions > 109 for correct Gecko version detection (see issue: https://bugzilla.mozilla.org/show_bug.cgi?id=1806690)

## [2.6] - 2023-03-12

### Added

- About ~ 10 browsers/apps detection added;
- Added detection of rare Windows OS User-Agents.

### Changed

- iOS WebKit WebView detection improved.

### Fixed

- EdgeHTML browser engine (Edge Browser from 12 to 18 versions) no longer detects as Chromium engine based

## [2.5] - 2023-03-10

### Added

- MacOS Ventura detection added;
- About ~ 20 browsers and apps detection added;
- Added 30+ TV devices detection;
- Darwin -> MacOS/iOS versions corresponding conversion database has been updated;

### Changed

- Safari and Safari Mobile browsers detection improved.

### Fixed

- Fixed a bug with the upper browser version limit;
- Fixed a bug with Darwin -> MacOS/iOS versions corresponding conversion;
- Fixed a webview detection bug when using the getBrowser() method.

## [2.4] - 2021-09-06

### Changed

- MacOS Monterey detection improvements;
- MacOS Big Sur detection improvements: MacOS User-Agent with '10_15_7' version matching now detectable as MacOS Big Sur instead MacOS Catalina;
- New MacOS Big Sur detection feature. Since Firefox version 87 on MacOS with '10.15' version matching, this MacOS version will be considered as MacOS Big Sur (see reference: https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/User-Agent/Firefox#macintosh).

## [2.3] - 2021-09-03

### Added

- SpreadTrum based Android devices detection added.

### Changed

- Chromecast detection improvements;
- MacOS Big Sur detection improvements.

### Fixed

- Chrome OS now detectable as desktop type OS;
- Chrome OS devices now detectable as desktop types;
- Fixed previously not identified PHP Warning Notices like 'Trying to access array offset ...' which appears since PHP version 7.4.

## [2.2] - 2021-07-05

### Added

- MacOS Monterey detection added;
- Windows 11 detection added.

## [2.1] - 2021-04-06

### Changed

- Fixed PHP Warning Notices like 'Trying to access array offset ...' which appears since PHP version 7.4.

## [2.0] - 2021-03-12

### Added

- More than 40 browsers detection added;
- 64bits mode detection;
- MacOS Big Sur detection;
- Darwin OS detection and it's versions to MacOS/iOS versions corresponding detection;
- MacOS/iOS Apps detection;
- Roku OS detection;
- MAUI Platform detection;
- PlayStation Platform detection.

### Changed

- User-Agent matching performance improvements;
- Matching methods optimization;
- Mobile operation systems and devices matching improvements;
- Desktop mode matching accuracy improvements for Android browsers;
- Desktop mode matching accuracy improvements for Windows Phone;
- Android WebView detection improvements;
- Safari WebView (iOS) detection improvements;
- Console and TV devices detection improvements;
- Linux OS detection improvements;
- Safari and Safari Mobile browsers matching accuracy improvements;
- Opera browser matching optimization and improvements;
- Fixed some minor inaccuracy browser matching.

## [1.1] - 2020-06-10

### Added

- Desktop mode detection for mobile browsers (Android, iOS, Windows Phone);
- More than 20 browsers detection added.

### Changed

- Windows OS detection improvements;
- Linux OS detection improvements;
- Fixed some minor inaccuracy User-Agent matching.

## [1.0] - 2020-05-22

### First release.