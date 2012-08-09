<?php
/**
 * Supply Order Menu Module for Joomla! 1.5
 * Provides a menu for easily navigating the supply order component.
 * @version 1.5.0
 * @author Howard County Library
 * @package mod_supplyorder_menu
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 **/
 
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
 
// Include the syndicate functions only once
require_once( dirname(__FILE__).DS.'helper.php' );
 
$role_id = ModSupplyOrderMenuHelper::getRoleId();

require( JModuleHelper::getLayoutPath( 'mod_supplyorder_menu' ) );
?>