<?php
/**
 * @version     1.7
 * @package     mod_bootstrapnav
 * @copyright   Copyright (C) 2014. All rights reserved.
 * @license     http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @author      Brad Traversy <support@bootstrapjoomla.com> - http://www.bootstrapjoomla.com
 */
//No Direct Access
defined('_JEXEC') or die;

// Include the syndicate functions only once
require_once __DIR__ . '/helper.php';

$list		= mod_butterfliesnavbar::getList($params);
$base		= mod_butterfliesnavbar::getBase($params);
$active		= mod_butterfliesnavbar::getActive($params);
$active_id 	= $active->id;

$html = mod_butterfliesnavbar::getHTML($params);
require JModuleHelper::getLayoutPath('mod_butterfliesnavbar');
