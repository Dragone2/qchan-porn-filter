<?php

// Set display language
define('UI_LANG','it-IT');
define('UI_THEME','default');

// Site information
define('SITE_TITLE', 'Image Hosting - Qchan');
define('SITE_DESCRIPTION', 'Carica qua le tue immagini, funziona da qualsiasi dispositivo!');
define('SITE_KEYWORDS', 'images, photos, image hosting, photo hosting, free image hosting, immagini, hosting, gratuito, gratis');
define('ADMIN_EMAIL', 'info@example.com');
// Main site is set for parent site
define('MAIN_SITE', false);
define('MAIN_SITE_NAME', 'Example');
define('MAIN_SITE_LOGO', '');
define('MAIN_SITE_URL', 'http://example.com');

// Upload settings
define('SIZE_LIMIT', '8M');
define('UPLOAD_DIR', 'uploads');
define('THUMB_DIR', 'thumbs');
define('DUPLICATE_FILE_CHECK', false); // Warning: setting to true will cause quantity of file increasing double times.

// Management Settings
define('MANAGE_NAME','Admin');
define('MANAGE_PASSWORD','SuperSecretPassword');

// CDN list settings
define('CDN_ENABLED', false); // use CDN in image URL if true
define('CDN_LIST', 'a.example.com,b.example.com,c.example.com'); // list of CDN domain name or IP address to use, separate by comma, not support IDN, use punycode domain name (start with "xn--") instead
define('CDN_HTTPS', 'both'); // true if CDN uses HTTPS, false for not, or a string separate by comma to set for each domain in CDN_LIST
define('CDN_PORTS_HTTP', ''); // TCP port that CDN uses, leave blank for default, or a string separate by comma to set for each domain in CDN_LIST
define('CDN_PORTS_HTTPS', ''); // familiar to above, but only work on HTTPS

// Copyright statement
define('COPYRIGHT', 'Ogni immagine caricata deve essere sotto licenza <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">Creative Commons Attribution-NonCommercial-ShareAlike 4.0 International License</a>.');

// Watermark settings
define('WATERMARK', false);
define('WATERMARK_MIN_SIZE', '200x200'); // Only mark images those are larger than
define('WATERMARK_POS', '10,10'); //Watermark position coordinates, positive refer to left-top of image, negative refer to right-bottom
