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
	<link rel="stylesheet" href="//AayLith.github.io/style/font-awesome.css?0.7291461594522834" />
	<link rel="stylesheet" href="//showdownaaylithserver.herokuapp.com/theme/panels.css?0.10659089035402647" />
	<link rel="stylesheet" href="//showdownaaylithserver.herokuapp.com/theme/main.css?0.8421227291506943" />
	<link rel="stylesheet" href="//AayLith.github.io/style/battle.css?0.9925406215690109" />
	<link rel="stylesheet" href="//AayLith.github.io/style/replay.css?0.5292980289131688" />
	<link rel="stylesheet" href="//AayLith.github.io/style/utilichart.css?0.08547346874295436" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//showdownaaylithserver.herokuapp.com/?0.6006425673303584"><img src="//showdownaaylithserver.herokuapp.com/images/pokemonshowdownbeta.png?0.3554197358292819" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7519854324582425">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.17772480426678627">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//showdownaaylithserver.herokuapp.com/ladder/?0.7401885169125053">Ladder</a></li>
				<li><a class="button nav-last" href="//showdownaaylithserver.herokuapp.com/forums/?0.7684213317491759">Forum</a></li>
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
	<script src="//AayLith.github.io/js/lib/jquery-1.11.0.min.js?0.5910605110770817"></script>
	<script src="//AayLith.github.io/js/lib/lodash.core.js?0.27857757576574116"></script>
	<script src="//AayLith.github.io/js/lib/backbone.js?0.3910007123042085"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.15130055227917394"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//AayLith.github.io/js/lib/jquery-cookie.js?0.23520284825165128"></script>
	<script src="//AayLith.github.io/js/lib/html-sanitizer-minified.js?0.20551516770737432"></script>
	<script src="//AayLith.github.io/js/battle-sound.js?0.53447896264241"></script>
	<script src="//AayLith.github.io/config/config.js?0.9036133713604209"></script>
	<script src="//AayLith.github.io/js/battledata.js?0.8832400504554365"></script>
	<script src="//AayLith.github.io/data/pokedex-mini.js?0.8264422225156849"></script>
	<script src="//AayLith.github.io/data/pokedex-mini-bw.js?0.10265459669284427"></script>
	<script src="//AayLith.github.io/data/graphics.js?0.8208052050141186"></script>
	<script src="//AayLith.github.io/data/pokedex.js?0.14422797250815989"></script>
	<script src="//AayLith.github.io/data/items.js?0.2439368705937217"></script>
	<script src="//AayLith.github.io/data/moves.js?0.5204129962503301"></script>
	<script src="//AayLith.github.io/data/abilities.js?0.44836757029957197"></script>
	<script src="//AayLith.github.io/data/teambuilder-tables.js?0.4173379676197757"></script>
	<script src="//AayLith.github.io/js/battle-tooltips.js?0.15134444768785293"></script>
	<script src="//AayLith.github.io/js/battle.js?0.8584365358882615"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
