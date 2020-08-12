<?php
/**
*
* Error Layout for the add to cart popup
*
* @package	VirtueMart
* @subpackage Cart
* @author Max Milbers
*
* @link http://www.virtuemart.net
* @copyright Copyright (c) 2013 VirtueMart Team. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* @version $Id: cart.php 2551 2010-09-30 18:52:40Z milbo $
*/

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die('Restricted access');

echo '<div class="cart-mess">' . $this->cart->getError() . '</div>';
echo '<div class="cart-mess">'.$this->errorMsg.'</div>';
echo '<a class="continue" href="' . $this->ontinue_link . '" >' . JText::_('COM_VIRTUEMART_CONTINUE_SHOPPING') . '</a>';
?>
