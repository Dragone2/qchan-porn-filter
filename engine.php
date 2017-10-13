<?php

/* Deny direct visit */
if (!defined('INDEX_RUN') && !defined('API_RUN') &&  !defined('MANAGE_RUN')) {
	header('HTTP/1.1 403 Forbidden');
	exit('This file must be loaded in flow.');
}

if (version_compare(phpversion(), '5.3.0', '<')) {
	exit('This program need PHP > 5.3.0');
}

define('QCHAN_VER', '1.0pre build 20150126 edit by Dragone2');
define('QCHAN_URL', 'https://github.com/Dragone2/qchan-porn-filter/');
date_default_timezone_set('UTC');
define('ABSPATH', __DIR__);

/* load core functions */
require_once ABSPATH.'/includes/functions.common.php';

if(!is_writable(ABSPATH . '/')) {
	exit(ABSPATH.' is not writable.');
}

/* Load Configurations or start installation */
if(file_exists( ABSPATH.'/config.php')) {
	require_once  ABSPATH.'/config.php';
}else {
	header("Location: install.php");
	exit();
}

// Check config.php if it is correct
$config_timestamp = 0;
$config_timestamp_now = filemtime(ABSPATH.'/config.php');
if(file_exists(ABSPATH.'/config.timestamp')) {
	$config_timestamp = file_get_contents(ABSPATH.'/config.timestamp');
}
if($config_timestamp != $config_timestamp_now) {
	check_config();
	file_put_contents(ABSPATH.'/config.timestamp', $config_timestamp_now);
}

define('SUPPORT_TYPE', 'jpg|jpeg|jpe|jfif|jfi|jif|gif|png|svg');

/* Load functions */
require_once ABSPATH.'/includes/functions.language.php';
require_once ABSPATH.'/includes/functions.theme.php';
require_once ABSPATH.'/includes/functions.upload.php';

$lang = load_lang(defined('MANAGE_RUN'));

