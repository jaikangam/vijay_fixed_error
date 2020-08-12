<?php
/**
 * ------------------------------------------------------------------------
 * JA Mixmaz Template
 * ------------------------------------------------------------------------
 * Copyright (C) 2004-2011 J.O.O.M Solutions Co., Ltd. All Rights Reserved.
 * @license - Copyrighted Commercial Software
 * Author: J.O.O.M Solutions Co., Ltd
 * Websites:  http://www.joomlart.com -  http://www.joomlancers.com
 * This file may not be redistributed in whole or significant part.
 * ------------------------------------------------------------------------
 */

// No direct access
defined('_JEXEC') or die;
?>
<script type="text/javascript">
	var siteurl='<?php echo JURI::base(true) ?>/';
	var tmplurl='<?php echo JURI::base(true)."/templates/".T3_ACTIVE_TEMPLATE ?>/';
	var isRTL = <?php echo $this->isRTL()?'true':'false' ?>;
</script>

<?php $tmpl = T3Template::getInstance(); ?>
<?php if ($tmpl->hasBlock('right1') || $tmpl->hasBlock('right2')) : ?>
	<script type="text/javascript" src="<?php echo JURI::root(true). '/templates/ja_mixmaz/plugins/jquery-1.7.1.min.js'?>"></script>
	<script type="text/javascript" src="<?php echo JURI::root(true). '/templates/ja_mixmaz/plugins/jquery.noconflict.js'?>"></script>
	<script type="text/javascript" src="<?php echo JURI::root(true). '/templates/ja_mixmaz/plugins/jquery.masonry.min.js'?>"></script>
	<script type="text/javascript">
		var JAMHelper = {
			sid: null,
			ready: false,
			resize: function(){
				$JAM('#ja-right1, #ja-right2').masonry('reload');
			}
		};

		$JAM(document).ready(function(){
			$JAM('#ja-right1, #ja-right2').masonry({
				itemSelector: '.ja-moduletable',
				isResizable: true
			});
			
			JAMHelper.ready = true;
		});

		$JAM(window).on('orientationchange resize.masonry', function(){
			clearTimeout(JAMHelper.sid);
			if(!JAMHelper.ready) { return }
			JAMHelper.sid = setTimeout(JAMHelper.resize, navigator.userAgent.match(/Mobile/i) ? 500 : 250);
		});

		$JAM(document).on('touchend click', function(){
			$JAM(window).trigger('resize.masonry');
		});

		$JAM(window).load(function(){
			setTimeout(function(){

				window.jQuery && jQuery.ajaxSetup({
					complete: function(){
						$JAM(window).trigger('resize.masonry');		
					}
				});
				
			}, 1000);
		})

</script>
<?php endif ?>

<jdoc:include type="head" />
<!-- META FOR IOS & HANDHELD -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta name="HandheldFriendly" content="true" />

<?php if (T3Common::mobile_device_detect()=='iphone'):?>
  <meta name="apple-touch-fullscreen" content="YES" />
<?php endif;?>

<?php if (T3Common::mobile_device_detect()):?>
<meta name="HandheldFriendly" content="true" />
<?php endif;?>

<link href="<?php echo T3Path::getUrl('images/favicon.ico') ?>" rel="shortcut icon" type="image/x-icon" />

<?php JHTML::stylesheet ('', 'templates/system/css/system.css') ?>
<?php JHTML::stylesheet ('', 'templates/system/css/general.css') ?>
