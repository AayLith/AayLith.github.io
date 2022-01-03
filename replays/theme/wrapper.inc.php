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
	<link rel="stylesheet" href="//AayLith.github.io/style/font-awesome.css?0.11845067541228738" />
	<link rel="stylesheet" href="//AayLith.github.io/theme/panels.css?0.8836777887750822" />
	<link rel="stylesheet" href="//AayLith.github.io/theme/main.css?0.9129893881394051" />
	<link rel="stylesheet" href="//AayLith.github.io/style/battle.css?0.6181631785565134" />
	<link rel="stylesheet" href="//AayLith.github.io/style/replay.css?0.7392599334821557" />
	<link rel="stylesheet" href="//AayLith.github.io/style/utilichart.css?0.06848742951052089" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//AayLith.github.io/?0.24442071577194247"><img src="//AayLith.github.io/images/pokemonshowdownbeta.png?0.49329368086607683" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6653239627060978">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9327014958821076">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//AayLith.github.io/ladder/?0.35394836871151303">Ladder</a></li>
				<li><a class="button nav-last" href="//AayLith.github.io/forums/?0.32482515624404384">Forum</a></li>
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
	<script src="//AayLith.github.io/js/lib/jquery-1.11.0.min.js?0.10289681885586144"></script>
	<script src="//AayLith.github.io/js/lib/lodash.core.js?0.4095188535990322"></script>
	<script src="//AayLith.github.io/js/lib/backbone.js?0.5577850324544809"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4917919170014047"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//AayLith.github.io/js/lib/jquery-cookie.js?0.10524259967082061"></script>
	<script src="//AayLith.github.io/js/lib/html-sanitizer-minified.js?0.7269353703875567"></script>
	<script src="//AayLith.github.io/js/battle-sound.js?0.08025034721205304"></script>
	<script src="//AayLith.github.io/config/config.js?0.9812130134736718"></script>
	<script src="//AayLith.github.io/js/battledata.js?0.7035792300707482"></script>
	<script src="//AayLith.github.io/data/pokedex-mini.js?0.9579543741735592"></script>
	<script src="//AayLith.github.io/data/pokedex-mini-bw.js?0.9950090346855096"></script>
	<script src="//AayLith.github.io/data/graphics.js?0.846910217448626"></script>
	<script src="//AayLith.github.io/data/pokedex.js?0.8522003872170398"></script>
	<script src="//AayLith.github.io/data/items.js?0.09185100598070894"></script>
	<script src="//AayLith.github.io/data/moves.js?0.31287582111421997"></script>
	<script src="//AayLith.github.io/data/abilities.js?0.6936753941986007"></script>
	<script src="//AayLith.github.io/data/teambuilder-tables.js?0.5414200327775582"></script>
	<script src="//AayLith.github.io/js/battle-tooltips.js?0.43063739928840183"></script>
	<script src="//AayLith.github.io/js/battle.js?0.15938160401408408"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
