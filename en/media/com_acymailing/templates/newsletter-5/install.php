<?php
/**
 * @copyright	Copyright (C) 2009-2012 ACYBA SARL - All rights reserved.
 * @license		http://www.gnu.org/licenses/gpl-3.0.html GNU/GPL
 */
defined('_JEXEC') or die('Restricted access');
?>
<?php
$name = 'Newspaper';
$description = '<img src="media/com_acymailing/templates/newsletter-5/newsletter-5.png" />';
$body = JFile::read(dirname(__FILE__).DS.'index.html');
$styles['tag_h1'] = 'color:#454545 !important; font-size:24px; font-weight:bold; margin:0px;';
$styles['tag_h2'] = 'color:#b20000 !important; font-size:18px; font-weight:bold; margin:0px; margin-bottom:10px; padding-bottom:4px; border-bottom: 1px solid #d6d6d6;';
$styles['tag_h3'] = 'color:#b20101 !important; font-weight:bold; font-size:18px; margin:10px 0px;';
$styles['tag_h4'] = 'color:#e52323 !important; font-weight:bold; margin:0px; padding:0px';
$styles['tag_a'] = 'cursor:pointer; color:#9d0000; text-decoration:none; border:none;';
$styles['acymailing_readmore'] = 'cursor:pointer; color:#ffffff; background-color:#9d0000; border-top:1px solid #9d0000; border-bottom:1px solid #9d0000; border-right:4px solid #9d0000; border-left:4px solid #9d0000; font-size:13px;';
$styles['acymailing_online'] = 'color:#dddddd; text-decoration:none; font-size:13px; margin:10px; text-align:center; font-family:Times New Roman, Times, serif;';
$styles['color_bg'] = '#454545';
$styles['acymailing_content'] = '';
$styles['acymailing_unsub'] = 'color:#dddddd; text-decoration:none; font-size:13px; text-align:center;';
$stylesheet = 'footer a{
	color:#454545;
}
.dark{
	color:#454545;
	font-weight:bold;
}
div,table,p{font-family:"Times New Roman", Times, serif;font-size:13px;color:#575757;}';