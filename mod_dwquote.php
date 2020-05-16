<?php
/**
 * @copyright	Copyright © 2019 - All rights reserved.
 * @license		GNU General Public License v2.0
 */
 
defined('_JEXEC') or die;

require_once __DIR__ . '/helper.php';

$doc = JFactory::getDocument();

// Include assets
$doc->addStyleSheet(JURI::root()."modules/mod_dwquote/assets/css/style.css");
$doc->addScript(JURI::root()."modules/mod_dwquote/assets/js/script.js");

require JModuleHelper::getLayoutPath('mod_dwquote', $params->get('layout', 'default'));