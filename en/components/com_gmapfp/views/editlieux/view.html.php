<?php
	/*
	* GMapFP Component Google Map for Joomla! 3.0.x
	* Version J3/0
	* Creation date: Mars 2013
	* Author: Fabrice4821 - www.gmapfp.org
	* Author email: webmaster@gmapfp.org
	* License GNU/GPL
	*/

defined('_JEXEC') or die();

jimport( 'joomla.application.component.view' );

class GMapFPsViewEditLieux extends JViewLegacy
{
    public function display($cachable = false, $urlparams = false)
	{
		$mainframe = JFactory::getApplication();
		$input = $mainframe->input;
		$option = $input->get('option'); 
		$this->Itemid = $input->get('Itemid', 0, 'INT'); 
		$layout = $input->get('layout',  0, '', 'string');
		$doc 	= JFactory::getDocument();

		//only registered user can add events
		$user		= JFactory::getUser();
		$userId		= $user->get('id');

		$config_media = JComponentHelper::getParams('com_media');
		if ($config_media->get('enable_flash', 0)) {
			//JHTML::_('behavior.uploader', 'file-upload', array('onAllComplete' => 'function(){ MediaManager.refreshFrame(); }'));
		}

		$params = clone($mainframe->getParams('com_gmapfp'));

		//dectection si android pour affichage de léditeur par défaut ou d'une zone textearea
		$user_agent = $_SERVER['HTTP_USER_AGENT'];
		define('GMAPFP_ANDROID', stristr($user_agent,'iPhone') || stristr($user_agent,'iPod') || stristr($user_agent,'android'));

		$lang = JFactory::getLanguage(); 
		$tag_lang=(substr($lang->getTag(),0,2)); 
		
		if (!defined( '_JOS_GMAPFP_APIV3' ))
		{
			/** verifi que la fonction n'est défini qu'une faois */
			define( '_JOS_GMAPFP_APIV3', 1 );
		
			$doc->addCustomTag( '<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />'); 
			$doc->addCustomTag( '<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true&language='.$tag_lang.'"></script>'); 
		}

        if (!defined( '_JOS_GMAPFP_LIGHTBOX' ))
        {
            /** verifi que la fonction n'est défini qu'une faois */
            define( '_JOS_GMAPFP_LIGHTBOX', 1 );    
            
            $doc->addCustomTag( '<link rel="stylesheet" type="text/css" href="'.JURI::base().'components/com_gmapfp/floatbox/floatbox.css" />');
            $doc->addCustomTag( '<script type="text/javascript" src="'.JURI::base().'components/com_gmapfp/floatbox/floatbox.js"></script>');
        }
        
		 /**
		  * Affichage de la barre de menu
		   **/
		$doc->addCustomTag ('<link rel="stylesheet" href="'.$this->baseurl.'/components/com_gmapfp/views/editlieux/css/icon.css" type="text/css" media="screen" />');
		$doc->addCustomTag ('<link rel="stylesheet" href="'.$this->baseurl.'/components/com_gmapfp/views/editlieux/css/general.css" type="text/css" media="screen" />');
		$doc->addCustomTag ('<link rel="stylesheet" href="'.$this->baseurl.'/components/com_gmapfp/views/editlieux/css/medialist-thumbs.css" type="text/css" media="screen" />');

		$items		= $this->get('Data');
		$marqueurs	= $this->get('Marqueurs');
		$custom		= $this->get('Custom');
        $images     = $this->get('images');
		$isNew		= ($items->id < 1);

		// build the html select list for ordering
		$query = 'SELECT ordering AS value, nom AS text'
			. ' FROM #__gmapfp'
			. ' ORDER BY ordering';

		$lists['ordering'] 			= JHTML::_('list.ordering',  'ordering', $query, '', $items->id, 1 );

		// build list of categories
		$select[] = JHtml::_('select.option', '', '-- '.JText::_( 'GMAPFP_SELECT_ITEM' ).' --' );
		$catids = JHtml::_('category.options', 'com_gmapfp');
		$catids = array_merge($select, $catids);
		$lists['catid'] = JHtml::_('select.genericlist', $catids, 'catid', 'size="1" class="inputbox required"', 'value', 'text', intval( $items->catid ) );

		$this->config_media = $config_media;
		$this->custom = $custom;
		$this->items = $items;
		$this->marqueurs = $marqueurs;
		$this->params = $params;
		$this->lists = $lists;
		$this->images = $images;
		parent::display();
	}

    function setImage($index = 0)
    {
        if (isset($this->images[$index])) {
            $this->_tmp_img = &$this->images[$index];
        } else {
            $this->_tmp_img = new JObject;
        }
    }

}
