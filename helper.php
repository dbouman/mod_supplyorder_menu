<?php
/**
 * Helper class for supply order menu module
 * @version 1.5.0
 * @author Howard County Library
 * @package mod_supplyorder_menu
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 **/

JLoader::import('joomla.application.component.model');


class ModSupplyOrderMenuHelper
{
    /**
     * Retrieves the role id of current logged in joomla user
     */    
    function getRoleId( )
    {
    	if(!class_exists('SupplyOrderModelUser')) {
    		JLoader::import( 'user', 'components' . DS . 'com_supplyorder' . DS . 'models' );
    	}
    	
    	$userModel = JModel::getInstance( 'User', 'SupplyOrderModel' );
    	 
        if(!$userModel) {
        	JError::raiseError('', JText::_('COMPONENT_NOT_FOUND'));
        	return false;
        }
		
        $current_user = $userModel->getUserInfo();
		$role_id = $current_user['role_id'];
		
		return $role_id;
    }
    
    static public function genLink($link) {
    	return JRoute::_($link.'&amp;Itemid='.JRequest::getint( 'Itemid' ));
    }
}
?>
