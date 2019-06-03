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

defined('_JEXEC') or die;


// load libs
!version_compare(PHP_VERSION, '5.3.10', '=>') or die('Your host needs to use PHP 5.3.10 or higher to run JBlank Template');
require_once dirname(__FILE__) . '/libs/template.php';

JHtml::_('jquery.framework'); // Add jQuery from Joomla

/************************* runtime configurations *********************************************************************/
$tpl = JBlankTemplate::getInstance();
$tpl
    // enable or disable debug mode. Default in Joomla configuration.php
    //->debug(true)
    ->css(array(
        'template.css', // from jblank/css folder
		'bootstrap.min.css',
		'jquery.fancybox.min.css',
    ))
    // include JavaScript files
    ->js(array(
        'template.js',
		'jquery-3.4.1.min.js',
		'popper.min.js',
		'bootstrap.min.js',
		'jquery.fancybox.min.js',
    ))

    // exclude css files from system or components (experimental!)
    ->excludeCSS(array( ))

    // exclude JS files from system or components (experimental!)
    ->excludeJS(array( ))

    // set custom generator
    ->generator('null')// null for disable

    // set HTML5 mode (for <head> tag)
    ->html5(true)

    // add custom meta tags
    ->meta(array(
        // template customization
        '<meta http-equiv="X-UA-Compatible" content="IE=edge">',
        '<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">',

        // site verification examples
        // '<meta name="google-site-verification" content="... google verification hash ..." />',
        // '<meta name="yandex-verification" content="... yandex verification hash ..." />',
    ));