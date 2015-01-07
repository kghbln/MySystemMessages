<?php
/**
 * An extension to MediaWiki that allows to add wiki specifiy system messages.
 *
 * @file
 * @ingroup Extensions
 * @package MediaWiki
 *
 * @version 1.0.1 2015-01-07
 *
 * @links https://github.com/kghbln/MySystemMessages/blob/master/README.md Documentation
 * @links https://www.mediawiki.org/wiki/Extension_talk:MySystemMessages Support
 * @links https://github.com/kghbln/MySystemMessages/issues Bug tracker
 * @links https://github.com/kghbln/MySystemMessages Source code
 *
 * @copyright Copyright (c) 2014, Karsten Hoffmeyer (Kghbln)
 * @author Karsten Hoffmeyer (Kghbln) <kontakt@wikihoster.net>
 *
 * @license https://www.gnu.org/licenses/gpl-2.0 GNU General Public License 2.0
 */

/* Ensure that the script cannot be executed outside of MediaWiki. */
if ( !defined( 'MEDIAWIKI' ) ) {
	die( 'This file is part of a MediaWiki extension and cannot be run standalone!' );
	}

/* Display extension properties on MediaWiki. */
$wgExtensionCredits['other'][] = array(
	'path'           => __FILE__,
	'name'           => 'MySystemMessages',
	'url'            => 'https://www.mediawiki.org/wiki/Extension:MySystemMessages',
	'author'         => array(
		'[https://www.wikihoster.net Karsten Hoffmeyer]'
		 ),
	'descriptionmsg' => 'mysystemmessages-desc',
	'version' => '1.0.1',
	'license-name' => 'GPL-2.0'
	);

/* Register extension messages. */
$wgMessagesDirs['MySystemMessages'] = __DIR__ . '/i18n';
$wgExtensionMessagesFiles['MySystemMessages'] = __DIR__ . '/MySystemMessages.i18n.php';
