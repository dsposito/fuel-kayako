<?php

require_once __DIR__ . DS . 'vendor' . DS . 'kayako-sdk' . DS . 'kyHelpers.php';

function kayakoLoader($class) {
	if (preg_match('/ky/', $class)) {
		require_once __DIR__ . DS . 'vendor' . DS . 'kayako-sdk' . DS . $class . '.php';
	}
}

spl_autoload_register('kayakoLoader');

Config::load('kayako', true);

$api_url    = Config::get('kayako.url') . Config::get('kayako.api_path');
$api_key    = Config::get('kayako.api_key');
$secret_key = Config::get('kayako.secret_key');

kyConfig::set(new kyConfig($api_url, $api_key, $secret_key));
