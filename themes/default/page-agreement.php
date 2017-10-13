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
<h1>Condizioni di Utilizzo</h1>
<p>Da scrivere...</p>
</section>

<?php load_footer(); ?>