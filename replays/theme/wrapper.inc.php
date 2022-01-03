<?php

if ((substr($_SERVER['REMOTE_ADDR'],0,11) === '69.164.163.') ||
		(substr(@$_SERVER['HTTP_X_FORWARDED_FOR'],0,11) === '69.164.163.')) {
	die('website disabled');
}

/********************************************************************
 * Header
 ********************************************************************/

function ThemeHeaderTemplate() {
	global $panels;
?>
<!DOCTYPE html>
<html><head>

	<meta charset="utf-8" />

	<title><?php if ($panels->pagetitle) echo htmlspecialchars($panels->pagetitle).' - '; ?>Pok&eacute;mon Showdown</title>

<?php if ($panels->pagedescription) { ?>
	<meta name="description" content="<?php echo htmlspecialchars($panels->pagedescription); ?>" />
<?php } ?>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=IE8" />
	<link rel="stylesheet" href="//AayLith.github.io/style/font-awesome.css?0.1237891732916987" />
	<link rel="stylesheet" href="//showdownaaylithserver.herokuapp.com/theme/panels.css?0.3647999177436265" />
	<link rel="stylesheet" href="//showdownaaylithserver.herokuapp.com/theme/main.css?0.9118450487688861" />
	<link rel="stylesheet" href="//AayLith.github.io/style/battle.css?0.7624242860534629" />
	<link rel="stylesheet" href="//AayLith.github.io/style/replay.css?0.5378806162372023" />
	<link rel="stylesheet" href="//AayLith.github.io/style/utilichart.css?0.6061392807012238" />

	<!-- Workarounds for IE bugs to display trees correctly. -->
	<!--[if lte IE 6]><style> li.tree { height: 1px; } </style><![endif]-->
	<!--[if IE 7]><style> li.tree { zoom: 1; } </style><![endif]-->

	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-26211653-1']);
		_gaq.push(['_setDomainName', 'pokemonshowdown.com']);
		_gaq.push(['_setAllowLinker', true]);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
</head><body>

	<div class="pfx-topbar">
		<div class="header">
			<ul class="nav">
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//showdownaaylithserver.herokuapp.com/?0.33086791921721925"><img src="//showdownaaylithserver.herokuapp.com/images/pokemonshowdownbeta.png?0.41315861342553517" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7791782589904881">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6576870711915308">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//showdownaaylithserver.herokuapp.com/ladder/?0.07804971787334636">Ladder</a></li>
				<li><a class="button nav-last" href="//showdownaaylithserver.herokuapp.com/forums/?0.8238331569661592">Forum</a></li>
			</ul>
			<ul class="nav nav-play">
				<li><a class="button greenbutton nav-first nav-last" href="http://play.pokemonshowdown.com/">Play</a></li>
			</ul>
			<div style="clear:both"></div>
		</div>
	</div>
<?php
}

/********************************************************************
 * Footer
 ********************************************************************/

function ThemeScriptsTemplate() {
?>
	<script src="//AayLith.github.io/js/lib/jquery-1.11.0.min.js?0.6730204137690683"></script>
	<script src="//AayLith.github.io/js/lib/lodash.core.js?0.6642595327602752"></script>
	<script src="//AayLith.github.io/js/lib/backbone.js?0.7189349822217892"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5019432988476982"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//AayLith.github.io/js/lib/jquery-cookie.js?0.4886418904152008"></script>
	<script src="//AayLith.github.io/js/lib/html-sanitizer-minified.js?0.9820048837212527"></script>
	<script src="//AayLith.github.io/js/battle-sound.js?0.32302723301589364"></script>
	<script src="//AayLith.github.io/config/config.js?0.47328887180700696"></script>
	<script src="//AayLith.github.io/js/battledata.js?0.7340937333448847"></script>
	<script src="//AayLith.github.io/data/pokedex-mini.js?0.5121608087074299"></script>
	<script src="//AayLith.github.io/data/pokedex-mini-bw.js?0.9530287734392318"></script>
	<script src="//AayLith.github.io/data/graphics.js?0.16051344291572822"></script>
	<script src="//AayLith.github.io/data/pokedex.js?0.6346256102413481"></script>
	<script src="//AayLith.github.io/data/items.js?0.7463672405284831"></script>
	<script src="//AayLith.github.io/data/moves.js?0.8964115344497965"></script>
	<script src="//AayLith.github.io/data/abilities.js?0.20195202988151273"></script>
	<script src="//AayLith.github.io/data/teambuilder-tables.js?0.30046589399563195"></script>
	<script src="//AayLith.github.io/js/battle-tooltips.js?0.5039259187633691"></script>
	<script src="//AayLith.github.io/js/battle.js?0.5015783671061236"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
