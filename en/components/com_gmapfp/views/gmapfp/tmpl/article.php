<?php
	/*
	* GMapFP Component Google Map for Joomla! 3.x
	* Version J3_9F
	* Creation date: Août 2013
	* Author: Fabrice4821 - www.gmapfp.org
	* Author email: webmaster@gmapfp.org
	* License GNU/GPL
	*/

defined('_JEXEC') or die('Restricted access'); 

$mainframe = JFactory::getApplication(); 

$height_msg = '500px';
$width_msg = '400px';

$config = JComponentHelper::getParams('com_gmapfp');
$document   = JFactory::getDocument();

foreach ($this->lieux as $lieu) { 

// insertion du lien canonique pour éviter l'indexation par les robbots des lien comporant le "tmpl=component"
    $link =JRoute::_('index.php?option=com_gmapfp&view=gmapfp&layout=article&id='.$lieu->slug, false);
    $document->addCustomTag( '<link rel="canonical" href="'.$link.'" />');


    if ($lieu->metadesc) {
        $this->document->setDescription( $lieu->metadesc );
    }
    if ($lieu->metakey) {
        $this->document->setMetadata('keywords', $lieu->metakey);
    }
    if ($mainframe->getCfg('MetaTitle') == '1') {
        $this->document->setTitle(@$lieu->ville.' : '.$lieu->nom.' ('.$lieu->title.')');
    }
?>
    <div class="gmapfp">
    	<?php
        	$this->lieu = $lieu;
			//affichage du détail d'un lieu
			$this->_layout='tmpl';
			echo JViewLegacy::Display('article');
			$this->_layout='default';
		?>
        <div class="gmapfp_message">
			<?php
			if ($config->get('gmapfp_afficher_intro_italique')==1) { ?>
				<span><em><?php echo $lieu->intro; ?></em><?php echo $lieu->message; ?></span><?php ;
			} else { ?>
				<span><?php echo $lieu->intro; echo $lieu->message; ?></span><?php ;
			}?>
        </div >
    <?php
    //insertion de JComments
      $jcomments =  JPATH_SITE.'/components/com_jcomments/jcomments.php';
      if ((file_exists($jcomments))and($this->params->get('gmapfp_jcomments'))) {
        require_once($jcomments);
        echo '<div style="clear: both;">';
        echo JComments::showComments($lieu->id, 'com_gmapfp', $lieu->nom);
        echo '</div>';
      }
	echo '</div >';
};
 ?>
