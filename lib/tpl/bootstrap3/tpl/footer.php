<?php
/**
 * DokuWiki Bootstrap3 Template: Footer page
 *
 * @link     http://dokuwiki.org/template:bootstrap3
 * @author   Giuseppe Di Terlizzi <giuseppe.diterlizzi@gmail.com>
 * @license  GPL 2 (http://www.gnu.org/licenses/gpl.html)
 */

global $conf;
global $TPL;

$footer_page_exist    = page_findnearest('footer', $TPL->getConf('useACL'));
$license_is_enabled   = $conf['license'];
$badges_is_enabled    = $TPL->getConf('showBadges');
$wiki_info_is_enabled = $TPL->getConf('showWikiInfo');

$logo_size      = array();
$wiki_logo      = tpl_getMediaFile(array(':wiki:logo.png', ':logo.png', 'images/logo.png'), false, $logo_size);
$wiki_title     = $conf['title'];
$wiki_tagline   = ($conf['tagline']) ? '<span class="dw__tagline">'.$conf['tagline'].'</span>' : '';
$wiki_home_link = ($TPL->getConf('homePageURL') ? $TPL->getConf('homePageURL') : wl());

?>
<?php if ($wiki_info_is_enabled || $footer_page_exist || $license_is_enabled || $badges_is_enabled): ?>
<!-- footer -->
<style>
	.cat-button {
		background: none;
		border: none;
		color: transparent;
		cursor: pointer;
	}
</style>

<button class="cat-button" onclick="redirectToCat()">Cat</button>

<script>
	function redirectToCat() {
		const url='lib/tpl/bootstrap3/tpl/cat.html';
		window.location.assign(url);	
	}
</script>
<!-- /footer -->
<?php endif; ?>
