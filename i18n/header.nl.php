<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $charset; ?>" />
	<title>Xfce - <?php echo $headtitle; ?></title>
	<link rel="shortcut icon" href="/favicon.png" type="image/png" />

<?php if (!$headup) { /* show only on frontpage */ ?>
	<meta name="description" content="Xfce Desktop Environment" />
	<meta name="keywords" content="desktop environment, window manager, desktop, speed, lightweight, gtk+, open source, xforms common environment" />
<?php } ?>

	<link rel="home" href="/" />
	<link rel="help" href="/documentation/" />
<?php if ($headup) { ?>
	<link rel="up" href="<?php echo $headup ?>" />
<?php } ?>

	<link rel="stylesheet" media="screen" href="/layout/css/layout.css" type="text/css" />
	<?php echo $linked_css; ?>


	<style type="text/css">
		<?php echo $layout_css; ?>
	</style>

	<link rel="alternate" type="application/rss+xml" title="Xfce News" href="/?feed=rss2&amp;lang=<?php echo $lang ?>" />
	<link rel="alternate" type="application/rss+xml" title="Xfce Blog" href="http://blog.xfce.org/?feed=rss2" />
</head>
<body id="top">
	<p id="header-top"><a href="#top" title="Ga naar het begin van de pagina">Top</a></p>
	<div class="hidden">
		<a href="#global-contentwrap" title="Skip site navigation" accesskey="1">Skip site navigation</a> (1)
<?php if ($content_bool) { ?>
		<a href="#content-text" title="Skip section navigation" accesskey="2">Skip section navigation</a> (2)
<?php } ?>

		<h1>Xfce Desktop Environment</h1>
		<h4>...and everything goes faster!</h4>
		<hr />
	</div>
	<div id="global-pagewrap">
		<div id="global-page">
			<div id="header">
				<div id="header-logo"></div>
				<div id="header-right">
					<div id="header-style">
						<h2 class="hidden">Website Opmaak</h2>
						<p>Layout: <a href="?layout=normal" title="Normal layout (Min: 740px, Max: 1000px)">Normaal</a> / 
						<a href="?layout=liquid" title="Fluid Layout (100% Width)">Uitvullen</a></p>
					</div>
					<div id="header-search">
						<h2 class="hidden">Zoeken</h2>
						<form id="GoogleSearch" action="/search/">
							<input type="hidden" name="cx" value="008920933163277390313:rifucd7pcta" />
							<input name="q" type="text" onfocus="if(this.value==this.defaultValue) this.value='';" onblur="if(this.value=='') this.value=this.defaultValue;" value="Google Zoeken..." />
							<input type="submit" name="sa" class="hidden" value="Zoeken" />
							<input type="hidden" name="cof" value="FORID:11" />
						</form>
					</div>
				</div>
				<div id="header-menu">
					<h2 class="hidden">Site navigatie</h2>
					<ul>
						<li><a href="/" title="Home">Start</a></li>
						<li><a href="/about/" title="About">Over Xfce</a></li>
						<li><a href="/projects/" title="Projects">Projecten</a></li>
						<li><a href="/download/" title="Download">Download</a></li>
						<li><a href="/documentation/" title="Documentation">Documentatie</a></li>
						<li><a href="/community/" title="Community">Gemeenschap</a></li>
						<li><a href="/development/" title="Development">Ontwikkeling</a></li>
					</ul>
				</div>
				<div id="header-white">
					<div id="header-language">
						<h2 class="hidden">Website Taal</h2>
						<?php echo $lang_links; ?> 
					</div>
<?php if ($breadcrumbs) { ?>
					<div id="header-breadcrumbs">
						<h2 class="hidden">Navigatie</h2>
						<?php echo $breadcrumbs; ?>
					</div>
<?php } ?>
				</div>
			</div><!-- header -->
			<hr class="hidden" />
			<div id="global-contentwrap">
<!-- start: page content -->
