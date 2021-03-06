<?php

require dirname(__DIR__).'/vendor/autoload.php';

error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);

use Ivmelo\StoreScraper\Scraper;

date_default_timezone_set('America/Fortaleza');

$play_store_urls = [];
array_push($play_store_urls, 'https://play.google.com/store/apps/details?id=com.ultimateguitar.tabs');
array_push($play_store_urls, 'https://play.google.com/store/apps/details?id=com.outfit7.mytalkingtomfree');

$app_store_urls = [];
array_push($app_store_urls, 'https://itunes.apple.com/us/app/tabs-chords-by-ultimate-guitar-learn-and-play/id357828853?mt=8');
array_push($app_store_urls, 'https://itunes.apple.com/us/app/my-talking-tom/id657500465?mt=8');

$scraper = new Scraper();
// print_r($appstore->getAppStoreAppData($app_store_urls[0]));
// print_r($appstore->getPlayStoreAppData($play_store_urls[0]));

// print_r($scraper->getAppStoreTopFree());
// print_r($scraper->getAppStoreTopPaid());

// print_r($scraper->getPlayStoreTopFree());
// print_r($scraper->getPlayStoreAppData($scraper->getPlayStoreTopPaid()[0]['url']));

// var_dump($scraper->getAppStoreTopFree());
//
// var_dump($scraper->getAppStoreAppData($scraper->getAppStoreTopFree()[30]['url']));

// var_dump($scraper->getPlayStoreTopPaid());

// var_dump($scraper->getPlayStoreAppData('https://play.google.com/store/apps/details?id=com.explodingkittens.projectbombsquad'));

var_dump($scraper->getAppStoreAppData('https://itunes.apple.com/us/app/instagram/id389801252?mt=8'));

// print_r($appstore->getAppStoreAppData($app_store_urls[0]));
