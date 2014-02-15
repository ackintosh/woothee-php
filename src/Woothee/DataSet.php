<?php
namespace Woothee;

// GENERATED from dataset.yml at Sat Feb 15 23:24:42 JST 2014 by yuya
class DataSet
{
    const DATASET_KEY_LABEL            = 'label';
    const DATASET_KEY_NAME             = 'name';
    const DATASET_KEY_TYPE             = 'type';
    const DATASET_KEY_CATEGORY         = 'category';
    const DATASET_KEY_OS               = 'os';
    const DATASET_KEY_VENDOR           = 'vendor';
    const DATASET_KEY_VERSION          = 'version';

    const DATASET_TYPE_BROWSER         = 'browser';
    const DATASET_TYPE_OS              = 'os';
    const DATASET_TYPE_FULL            = 'full';

    const DATASET_CATEGORY_PC          = 'pc';
    const DATASET_CATEGORY_SMARTPHONE  = 'smartphone';
    const DATASET_CATEGORY_MOBILEPHONE = 'mobilephone';
    const DATASET_CATEGORY_CRAWLER     = 'crawler';
    const DATASET_CATEGORY_APPLIANCE   = 'appliance';
    const DATASET_CATEGORY_MISC        = 'misc';

    const ATTRIBUTE_NAME               = 'name';
    const ATTRIBUTE_CATEGORY           = 'category';
    const ATTRIBUTE_OS                 = 'os';
    const ATTRIBUTE_VENDOR             = 'vendor';
    const ATTRIBUTE_VERSION            = 'version';
    const VALUE_UNKNOWN                = 'UNKNOWN';

    public static $CATEGORY_LIST = [
        self::DATASET_CATEGORY_PC,
        self::DATASET_CATEGORY_SMARTPHONE,
        self::DATASET_CATEGORY_MOBILEPHONE,
        self::DATASET_CATEGORY_CRAWLER,
        self::DATASET_CATEGORY_APPLIANCE,
        self::DATASET_CATEGORY_MISC,
        self::VALUE_UNKNOWN,
    ];

    public static $ATTRIBUTE_LIST = [
        self::ATTRIBUTE_NAME,
        self::ATTRIBUTE_CATEGORY,
        self::ATTRIBUTE_OS,
        self::ATTRIBUTE_VENDOR,
        self::ATTRIBUTE_VERSION,
    ];

    private static $dataset = [
        'MSIE' => array(
            'label'    => 'MSIE',
            'name'     => 'Internet Explorer',
            'type'     => 'browser',
            'vendor'   => 'Microsoft',
        ),
        'Chrome' => array(
            'label'    => 'Chrome',
            'name'     => 'Chrome',
            'type'     => 'browser',
            'vendor'   => 'Google',
        ),
        'Safari' => array(
            'label'    => 'Safari',
            'name'     => 'Safari',
            'type'     => 'browser',
            'vendor'   => 'Apple',
        ),
        'Firefox' => array(
            'label'    => 'Firefox',
            'name'     => 'Firefox',
            'type'     => 'browser',
            'vendor'   => 'Mozilla',
        ),
        'Opera' => array(
            'label'    => 'Opera',
            'name'     => 'Opera',
            'type'     => 'browser',
            'vendor'   => 'Opera',
        ),
        'Sleipnir' => array(
            'label'    => 'Sleipnir',
            'name'     => 'Sleipnir',
            'type'     => 'browser',
            'vendor'   => 'Fenrir Inc.',
        ),
        'Win' => array(
            'label'    => 'Win',
            'name'     => 'Windows UNKNOWN Ver',
            'type'     => 'os',
            'cotegory' => 'pc',
        ),
        'Win8.1' => array(
            'label'    => 'Win8.1',
            'name'     => 'Windows 8.1',
            'type'     => 'os',
            'cotegory' => 'pc',
        ),
        'Win8' => array(
            'label'    => 'Win8',
            'name'     => 'Windows 8',
            'type'     => 'os',
            'cotegory' => 'pc',
        ),
        'Win7' => array(
            'label'    => 'Win7',
            'name'     => 'Windows 7',
            'type'     => 'os',
            'cotegory' => 'pc',
        ),
        'WinVista' => array(
            'label'    => 'WinVista',
            'name'     => 'Windows Vista',
            'type'     => 'os',
            'cotegory' => 'pc',
        ),
        'WinXP' => array(
            'label'    => 'WinXP',
            'name'     => 'Windows XP',
            'type'     => 'os',
            'cotegory' => 'pc',
        ),
        'Win2000' => array(
            'label'    => 'Win2000',
            'name'     => 'Windows 2000',
            'type'     => 'os',
            'cotegory' => 'pc',
        ),
        'WinNT4' => array(
            'label'    => 'WinNT4',
            'name'     => 'Windows NT 4.0',
            'type'     => 'os',
            'cotegory' => 'pc',
        ),
        'WinMe' => array(
            'label'    => 'WinMe',
            'name'     => 'Windows Me',
            'type'     => 'os',
            'cotegory' => 'pc',
        ),
        'Win98' => array(
            'label'    => 'Win98',
            'name'     => 'Windows 98',
            'type'     => 'os',
            'cotegory' => 'pc',
        ),
        'Win95' => array(
            'label'    => 'Win95',
            'name'     => 'Windows 95',
            'type'     => 'os',
            'cotegory' => 'pc',
        ),
        'WinPhone' => array(
            'label'    => 'WinPhone',
            'name'     => 'Windows Phone OS',
            'type'     => 'os',
            'cotegory' => 'smartphone',
        ),
        'WinCE' => array(
            'label'    => 'WinCE',
            'name'     => 'Windows CE',
            'type'     => 'os',
            'cotegory' => 'smartphone',
        ),
        'OSX' => array(
            'label'    => 'OSX',
            'name'     => 'Mac OSX',
            'type'     => 'os',
            'cotegory' => 'pc',
        ),
        'MacOS' => array(
            'label'    => 'MacOS',
            'name'     => 'Mac OS Classic',
            'type'     => 'os',
            'cotegory' => 'pc',
        ),
        'Linux' => array(
            'label'    => 'Linux',
            'name'     => 'Linux',
            'type'     => 'os',
            'cotegory' => 'pc',
        ),
        'BSD' => array(
            'label'    => 'BSD',
            'name'     => 'BSD',
            'type'     => 'os',
            'cotegory' => 'pc',
        ),
        'Android' => array(
            'label'    => 'Android',
            'name'     => 'Android',
            'type'     => 'os',
            'cotegory' => 'smartphone',
        ),
        'iPhone' => array(
            'label'    => 'iPhone',
            'name'     => 'iPhone',
            'type'     => 'os',
            'cotegory' => 'smartphone',
        ),
        'iPad' => array(
            'label'    => 'iPad',
            'name'     => 'iPad',
            'type'     => 'os',
            'cotegory' => 'smartphone',
        ),
        'iPod' => array(
            'label'    => 'iPod',
            'name'     => 'iPod',
            'type'     => 'os',
            'cotegory' => 'smartphone',
        ),
        'iOS' => array(
            'label'    => 'iOS',
            'name'     => 'iOS',
            'type'     => 'os',
            'cotegory' => 'smartphone',
        ),
        'FirefoxOS' => array(
            'label'    => 'FirefoxOS',
            'name'     => 'Firefox OS',
            'type'     => 'os',
            'cotegory' => 'smartphone',
        ),
        'BlackBerry' => array(
            'label'    => 'BlackBerry',
            'name'     => 'BlackBerry',
            'type'     => 'os',
            'cotegory' => 'smartphone',
        ),
        'docomo' => array(
            'label'    => 'docomo',
            'name'     => 'docomo',
            'type'     => 'full',
            'cotegory' => 'mobilephone',
            'vendor'   => 'docomo',
        ),
        'au' => array(
            'label'    => 'au',
            'name'     => 'au by KDDI',
            'type'     => 'full',
            'cotegory' => 'mobilephone',
            'vendor'   => 'au',
        ),
        'SoftBank' => array(
            'label'    => 'SoftBank',
            'name'     => 'SoftBank Mobile',
            'type'     => 'full',
            'cotegory' => 'mobilephone',
            'vendor'   => 'SoftBank',
        ),
        'willcom' => array(
            'label'    => 'willcom',
            'name'     => 'WILLCOM',
            'type'     => 'full',
            'cotegory' => 'mobilephone',
            'vendor'   => 'WILLCOM',
        ),
        'jig' => array(
            'label'    => 'jig',
            'name'     => 'jig browser',
            'type'     => 'full',
            'cotegory' => 'mobilephone',
        ),
        'emobile' => array(
            'label'    => 'emobile',
            'name'     => 'emobile',
            'type'     => 'full',
            'cotegory' => 'mobilephone',
        ),
        'SymbianOS' => array(
            'label'    => 'SymbianOS',
            'name'     => 'SymbianOS',
            'type'     => 'full',
            'cotegory' => 'mobilephone',
        ),
        'MobileTranscoder' => array(
            'label'    => 'MobileTranscoder',
            'name'     => 'Mobile Transcoder',
            'type'     => 'full',
            'cotegory' => 'mobilephone',
        ),
        'Nintendo3DS' => array(
            'label'    => 'Nintendo3DS',
            'name'     => 'Nintendo 3DS',
            'type'     => 'full',
            'cotegory' => 'appliance',
            'vendor'   => 'Nintendo',
        ),
        'NintendoDSi' => array(
            'label'    => 'NintendoDSi',
            'name'     => 'Nintendo DSi',
            'type'     => 'full',
            'cotegory' => 'appliance',
            'vendor'   => 'Nintendo',
        ),
        'NintendoWii' => array(
            'label'    => 'NintendoWii',
            'name'     => 'Nintendo Wii',
            'type'     => 'full',
            'cotegory' => 'appliance',
            'vendor'   => 'Nintendo',
        ),
        'NintendoWiiU' => array(
            'label'    => 'NintendoWiiU',
            'name'     => 'Nintendo Wii U',
            'type'     => 'full',
            'cotegory' => 'appliance',
            'vendor'   => 'Nintendo',
        ),
        'PSP' => array(
            'label'    => 'PSP',
            'name'     => 'PlayStation Portable',
            'type'     => 'full',
            'cotegory' => 'appliance',
            'vendor'   => 'Sony',
        ),
        'PSVita' => array(
            'label'    => 'PSVita',
            'name'     => 'PlayStation Vita',
            'type'     => 'full',
            'cotegory' => 'appliance',
            'vendor'   => 'Sony',
        ),
        'PS3' => array(
            'label'    => 'PS3',
            'name'     => 'PlayStation 3',
            'type'     => 'full',
            'cotegory' => 'appliance',
            'vendor'   => 'Sony',
        ),
        'PS4' => array(
            'label'    => 'PS4',
            'name'     => 'PlayStation 4',
            'type'     => 'full',
            'cotegory' => 'appliance',
            'vendor'   => 'Sony',
        ),
        'Xbox360' => array(
            'label'    => 'Xbox360',
            'name'     => 'Xbox 360',
            'type'     => 'full',
            'cotegory' => 'appliance',
            'vendor'   => 'Microsoft',
        ),
        'XboxOne' => array(
            'label'    => 'XboxOne',
            'name'     => 'Xbox One',
            'type'     => 'full',
            'cotegory' => 'appliance',
            'vendor'   => 'Microsoft',
        ),
        'DigitalTV' => array(
            'label'    => 'DigitalTV',
            'name'     => 'InternetTVBrowser',
            'type'     => 'full',
            'cotegory' => 'appliance',
        ),
        'SafariRSSReader' => array(
            'label'    => 'SafariRSSReader',
            'name'     => 'Safari RSSReader',
            'type'     => 'full',
            'cotegory' => 'misc',
            'vendor'   => 'Apple',
        ),
        'GoogleDesktop' => array(
            'label'    => 'GoogleDesktop',
            'name'     => 'Google Desktop',
            'type'     => 'full',
            'cotegory' => 'misc',
            'vendor'   => 'Google',
        ),
        'WindowsRSSReader' => array(
            'label'    => 'WindowsRSSReader',
            'name'     => 'Windows RSSReader',
            'type'     => 'full',
            'cotegory' => 'misc',
            'vendor'   => 'Microsoft',
        ),
        'VariousRSSReader' => array(
            'label'    => 'VariousRSSReader',
            'name'     => 'RSSReader',
            'type'     => 'full',
            'cotegory' => 'misc',
        ),
        'HTTPLibrary' => array(
            'label'    => 'HTTPLibrary',
            'name'     => 'HTTP Library',
            'type'     => 'full',
            'cotegory' => 'misc',
        ),
        'GoogleBot' => array(
            'label'    => 'GoogleBot',
            'name'     => 'Googlebot',
            'type'     => 'full',
            'cotegory' => 'crawler',
        ),
        'GoogleBotMobile' => array(
            'label'    => 'GoogleBotMobile',
            'name'     => 'Googlebot Mobile',
            'type'     => 'full',
            'cotegory' => 'crawler',
        ),
        'GoogleMediaPartners' => array(
            'label'    => 'GoogleMediaPartners',
            'name'     => 'Google Mediapartners',
            'type'     => 'full',
            'cotegory' => 'crawler',
        ),
        'GoogleFeedFetcher' => array(
            'label'    => 'GoogleFeedFetcher',
            'name'     => 'Google Feedfetcher',
            'type'     => 'full',
            'cotegory' => 'crawler',
        ),
        'GoogleAppEngine' => array(
            'label'    => 'GoogleAppEngine',
            'name'     => 'Google AppEngine',
            'type'     => 'full',
            'cotegory' => 'crawler',
        ),
        'GoogleWebPreview' => array(
            'label'    => 'GoogleWebPreview',
            'name'     => 'Google Web Preview',
            'type'     => 'full',
            'cotegory' => 'crawler',
        ),
        'YahooSlurp' => array(
            'label'    => 'YahooSlurp',
            'name'     => 'Yahoo! Slurp',
            'type'     => 'full',
            'cotegory' => 'crawler',
        ),
        'YahooJP' => array(
            'label'    => 'YahooJP',
            'name'     => 'Yahoo! Japan',
            'type'     => 'full',
            'cotegory' => 'crawler',
        ),
        'YahooPipes' => array(
            'label'    => 'YahooPipes',
            'name'     => 'Yahoo! Pipes',
            'type'     => 'full',
            'cotegory' => 'crawler',
        ),
        'Baiduspider' => array(
            'label'    => 'Baiduspider',
            'name'     => 'Baiduspider',
            'type'     => 'full',
            'cotegory' => 'crawler',
        ),
        'msnbot' => array(
            'label'    => 'msnbot',
            'name'     => 'msnbot',
            'type'     => 'full',
            'cotegory' => 'crawler',
        ),
        'bingbot' => array(
            'label'    => 'bingbot',
            'name'     => 'bingbot',
            'type'     => 'full',
            'cotegory' => 'crawler',
        ),
        'Yeti' => array(
            'label'    => 'Yeti',
            'name'     => 'Naver Yeti',
            'type'     => 'full',
            'cotegory' => 'crawler',
        ),
        'FeedBurner' => array(
            'label'    => 'FeedBurner',
            'name'     => 'Google FeedBurner',
            'type'     => 'full',
            'cotegory' => 'crawler',
        ),
        'facebook' => array(
            'label'    => 'facebook',
            'name'     => 'facebook',
            'type'     => 'full',
            'cotegory' => 'crawler',
        ),
        'mixi' => array(
            'label'    => 'mixi',
            'name'     => 'mixi',
            'type'     => 'full',
            'cotegory' => 'crawler',
        ),
        'IndyLibrary' => array(
            'label'    => 'IndyLibrary',
            'name'     => 'Indy Library',
            'type'     => 'full',
            'cotegory' => 'crawler',
        ),
        'ApplePubSub' => array(
            'label'    => 'ApplePubSub',
            'name'     => 'Apple iCloud',
            'type'     => 'full',
            'cotegory' => 'crawler',
        ),
        'Genieo' => array(
            'label'    => 'Genieo',
            'name'     => 'Genieo Web Filter',
            'type'     => 'full',
            'cotegory' => 'crawler',
        ),
        'topsyButterfly' => array(
            'label'    => 'topsyButterfly',
            'name'     => 'topsy Butterfly',
            'type'     => 'full',
            'cotegory' => 'crawler',
        ),
        'rogerbot' => array(
            'label'    => 'rogerbot',
            'name'     => 'SeoMoz rogerbot',
            'type'     => 'full',
            'cotegory' => 'crawler',
        ),
        'AhrefsBot' => array(
            'label'    => 'AhrefsBot',
            'name'     => 'ahref AhrefsBot',
            'type'     => 'full',
            'cotegory' => 'crawler',
        ),
        'radian6' => array(
            'label'    => 'radian6',
            'name'     => 'salesforce radian6',
            'type'     => 'full',
            'cotegory' => 'crawler',
        ),
        'Hatena' => array(
            'label'    => 'Hatena',
            'name'     => 'Hatena',
            'type'     => 'full',
            'cotegory' => 'crawler',
        ),
        'goo' => array(
            'label'    => 'goo',
            'name'     => 'goo',
            'type'     => 'full',
            'cotegory' => 'crawler',
        ),
        'livedoorFeedFetcher' => array(
            'label'    => 'livedoorFeedFetcher',
            'name'     => 'livedoor FeedFetcher',
            'type'     => 'full',
            'cotegory' => 'crawler',
        ),
        'VariousCrawler' => array(
            'label'    => 'VariousCrawler',
            'name'     => 'misc crawler',
            'type'     => 'full',
            'cotegory' => 'crawler',
        )
    ];

    public static function get($label)
    {
        return static::$dataset[$label];
    }
}
