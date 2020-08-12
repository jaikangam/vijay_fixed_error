<?php
	/*
	* GMapFP Component Google Map for Joomla! 3.0.x
	* Version J3/0
	* Creation date: Mars 2013
	* Author: Fabrice4821 - www.gmapfp.org
	* Author email: webmaster@gmapfp.org
	* License GNU/GPL
	*/

// No direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

class GMapFPsModelAccueil extends JModelLegacy
{
	function getPublishedTabs() {
	
		$config = JComponentHelper::getParams('com_gmapfp');

		$tabs = array();

		$onglet = new stdClass();
		$onglet->title = 'Donation';
		$onglet->name = 'Donation';
		$onglet->alert = false;
		$tabs[] = $onglet;

		if ($config->get('gmapfp_news')) {
			$onglet = new stdClass();
			$onglet->title = 'News';
			$onglet->name = 'News';
			$onglet->alert = false;
			$tabs[] = $onglet;
		}

		return $tabs;
	}




}
?>