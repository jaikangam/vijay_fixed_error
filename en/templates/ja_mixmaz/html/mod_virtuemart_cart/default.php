<?php // no direct access
defined('_JEXEC') or die('Restricted access');

//dump ($cart,'mod cart');
// Ajax is displayed in vm_cart_products
// ALL THE DISPLAY IS Done by Ajax using "hiddencontainer" ?>

<!-- Virtuemart 2 Ajax Card -->
<div class="vmCartModule <?php echo $params->get('moduleclass_sfx'); ?>" id="vmCartModule">
<?php if ($show_product_list) : ?>

	<div id="hiddencontainer" style=" display: none; ">
		<div class="container">
			<div class="product_row">
			
				<?php if ($show_price) : ?>
				 <div class="prices" style="float: right;"></div>
				<?php endif ?>
				
				<span class="quantity"></span>&nbsp;x&nbsp;<span class="product_name"></span>
				
				<div class="product_attributes"></div>
				
			</div>
			
		</div>
	</div>
	
	<div class="vm_cart_products">
	
		<div class="container">
		
		<?php foreach ($data->products as $product): ?>
			
			<div class="product_row">
		
				<?php if ($show_price): ?>
				<div class="prices" style="float: right;"><?php echo  $product['prices'] ?></div>
				<?php endif ?>
			
				<span class="quantity"><?php echo  $product['quantity'] ?></span>&nbsp;x&nbsp;<span class="product_name"><?php echo  $product['product_name'] ?></span>
				
				<?php if ( !empty($product['product_attributes']) ): ?>
				<div class="product_attributes"><?php echo $product['product_attributes'] ?></div>
				<?php endif ?>
				
			</div>
			
		<?php endforeach ?>
		
		</div>
	</div>
	<?php endif ?>
	
	<div class="ja-vm-total">
		<div class="total">
			<?php if ($data->totalProduct and $show_price) echo  $data->billTotal; ?>
		</div>
	</div>

	<div class="show_cart">
		<?php if ($data->totalProduct and $show_price) echo  $data->cart_show; ?>
	</div>
	<div style="clear:both;"></div>

	<noscript>
	<?php echo JText::_('MOD_VIRTUEMART_CART_AJAX_CART_PLZ_JAVASCRIPT') ?>
	</noscript>
</div>

