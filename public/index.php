<?php
date_default_timezone_set("America/Chicago");

define('WEB_ROOT', __DIR__ . '/../');

require_once WEB_ROOT . '/vendor/autoload.php';

$applicationAspectKernel = \Application\Aop\Kernel::getInstance();
$applicationAspectKernel->init(
	[
		'debug' => true,
		'cacheDir' => WEB_ROOT . '/data/go-aop',
		'includePaths' => [
			WEB_ROOT . '/src/'
		]
	]
);

(new \Application\Service\User())->findAll(['super' => 'duper']);
