<?php
	/*
	* GMapFP Component Google Map for Joomla! 3.0.x
	* Version J3/0
	* Creation date: Mars 2013
	* Author: Fabrice4821 - www.gmapfp.org
	* Author email: webmaster@gmapfp.org
	* License GNU/GPL
	*/

defined('_JEXEC') or die('Restricted access');
define('COM_GMAPFP_PRO',    0);
define('DS', '/');

require_once (JPATH_COMPONENT.DS.'controller.php');
if($controller = JRequest::getWord('controller')) {
	$path = JPATH_COMPONENT.DS.'controllers'.DS.$controller.'.php';
	if (file_exists($path)) {
		require_once $path;
	} else {
		$controller = '';
	}
}
$classname	= 'GMapFPsController'.ucfirst($controller);
$controller = new $classname( );

$controller->execute(JRequest::getCmd('task'));

$controller->redirect();

?>