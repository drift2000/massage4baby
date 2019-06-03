<?php
/**
 * J!Blank Template for Joomla by JBlank.pro (JBZoo.com)
 *
 * @package    JBlank
 * @author     SmetDenis <admin@jbzoo.com>
 * @copyright  Copyright (c) JBlank.pro
 * @license    http://www.gnu.org/licenses/gpl.html GNU/GPL
 * @link       http://jblank.pro/ JBlank project page
 */

defined( '_JEXEC' )or die;


// init $tpl helper
require dirname( __FILE__ ) . '/php/init.php';

?>
<?php echo $tpl->renderHTML(); ?>
<head>
	<jdoc:include type="head"/>
</head>
<?php
$pageClassSuffix = JFactory::getApplication()->getMenu()->getActive() ? JFactory::getApplication()->getMenu()->getActive()->params->get( 'pageclass_sfx', '-default' ) : '-default';
?>
<body class="<?php echo $tpl->getBodyClasses(); ?> <?php echo $pageClassSuffix ?>" style="background: url(../templates/<?php echo $this->template ?>/images/background.webp);">

	<!--[if lt IE 7]><p class="browsehappy">
        You are using an <strong>outdated</strong> browser. Please
        <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience. </p><![endif]-->

	<header class="header">
		<div class="container pt-2">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="row">
					<div class="col-lg-12 col-10">
						<a href="/">
							<div class="logo">
								<img class="img-fluid" src="../templates/<?php echo $this->template ?>/images/logo.webp" alt="<?php echo $this->params->get('sitetitle'); ?>"/>
							</div>
						</a>
					</div>
					<button class="navbar-toggler col-2 menu-style" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse text-uppercase font-weight-bold col-lg-12" id="navbarSupportedContent" style="background: url(../templates/<?php echo $this->template ?>/images/top_menu_bg.png) repeat-x;">
						<jdoc:include type="modules" name="main-menu"/>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<main>
		<?php if ($this->countModules('slider')): ?>
		<section class="carousel">
			<div class="container">
				<div class="col-lg-12 slider d-none d-sm-block">
					<jdoc:include type="modules" name="slider"/>
				</div>
			</div>
		</section>
		<?php endif; ?>
		<?php
		if ( $this->countModules( 'right-menu' ) ) {
			$maincol = 'col-lg-9 col-12';
		} else {
			$maincol = 'col-lg-12';
		}
		?>
		<section class="main-container">
			<div class="container pb-1">
				<div class="row">
					<div class="<?php echo $maincol; ?>">
						<jdoc:include type="message"/>
						<jdoc:include type="component"/>
					</div>
					<?php if ($this->countModules('right-menu')): ?>
					<div class="right-menu col-lg-3 d-none d-sm-block">
						<jdoc:include type="modules" name="right-menu" style="xhtml" headerLevel="3"/>
					</div>
					<?php endif; ?>
				</div>
			</div>
		</section>
	</main>
	<footer class="footer">
		<div class="container">
			<jdoc:include type="modules" name="footer" style="xhtml" headerlevel="3"/>
			<br clear="all"/>
		</div>
	</footer>
	<div class="component-wrapper">
		<!-- debug messages -->
		<?php if ($tpl->isError()) : ?>
		<jdoc:include type="message"/>
		<?php endif; ?>

		<?php if ($tpl->isDebug()) : ?>
		<jdoc:include type="modules" name="debug"/>
		<?php endif; ?>
	</div>
</body>
</html>