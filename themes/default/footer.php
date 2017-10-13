<?php

/* Deny direct visit */
if(!defined('INDEX_RUN')) {
	header('HTTP/1.1 403 Forbidden');
	exit('This file must be loaded in flow.');
}

?>

<!-- Footer -->
<footer id="main_footer">
<p class="hide_mobile"><?=COPYRIGHT ?></p>
<p class="hide_mobile"><?=__('Image Hosting - Powered by <a target="_blank" href="%s">Qchan</a>', QCHAN_URL) ?></p>
<p><a href="?page=agreement" target="_blank"><?=__('Agreement') ?></a>&nbsp;|&nbsp;<a href="?page=privacy" target="_blank"><?=__('Privacy') ?></a></p>
<?=format_main_site() ?>
</footer>
</body>
</html>
