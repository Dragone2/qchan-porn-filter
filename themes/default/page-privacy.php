<?php

/* Deny direct visit */
if(!defined('INDEX_RUN')) {
	header('HTTP/1.1 403 Forbidden');
	exit('This file must be loaded in flow.');
}

?>

<?php load_header(); ?>

<!-- Main section -->
<section id="main">
<!-- Change This Section -->
<h1>Privacy & Condizioni</h1>
<p>Vedasi <a href="https://www.example.com/privacy-policy/" target="_blank">Privacy & Cookie Policy</a> sul sito web principale.</p>
</section>

<?php load_footer(); ?>