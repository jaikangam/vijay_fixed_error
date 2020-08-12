<?php die("Access Denied"); ?>#x#s:34558:"          1394269377<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html prefix="og: http://ogp.me/ns#" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb">

<head>
    <script type="text/javascript">
	var siteurl='/wereach/';
	var tmplurl='/wereach/templates/ja_mixmaz/';
	var isRTL = false;
</script>

	<script type="text/javascript" src="/wereach/templates/ja_mixmaz/plugins/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="/wereach/templates/ja_mixmaz/plugins/jquery.noconflict.js"></script>
	<script type="text/javascript" src="/wereach/templates/ja_mixmaz/plugins/jquery.masonry.min.js"></script>
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

  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="title" content="Tablets" />
  <meta name="generator" content="Joomla! - Open Source Content Management" />
  <title>Tablets</title>
  <link href="/wereach/index.php?option=com_virtuemart&view=category&virtuemart_category_id=14&Itemid=567" rel="canonical" />
  <link href="http://webdesigninbangalore.co.in/wereach/index.php?option=com_search&amp;view=category&amp;virtuemart_category_id=14&amp;categorylayout=0&amp;Itemid=567&amp;format=opensearch" rel="search" title="Search Wereach" type="application/opensearchdescription+xml" />
  <link rel="stylesheet" href="/wereach/index.php?jat3action=gzip&amp;jat3type=css&amp;jat3file=t3-assets%2Fcss_83d01.css" type="text/css" />
  <link rel="stylesheet" href="/wereach/index.php?jat3action=gzip&amp;jat3type=css&amp;jat3file=t3-assets%2Fcss_cec3b.css" type="text/css" />
  <link rel="stylesheet" href="/wereach/index.php?jat3action=gzip&amp;jat3type=css&amp;jat3file=t3-assets%2Fcss_461fa.css" type="text/css" />
  <link rel="stylesheet" href="/wereach/index.php?jat3action=gzip&amp;jat3type=css&amp;jat3file=t3-assets%2Fcss_7ba77.css" type="text/css" />
  <script src="/wereach/index.php?jat3action=gzip&amp;jat3type=js&amp;jat3file=t3-assets%2Fjs_68bf0.js" type="text/javascript"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js" type="text/javascript"></script>
  <script src="/wereach/components/com_k2/js/k2.js?v2.6.7&amp;sitepath=/wereach/" type="text/javascript"></script>
  <script src="/wereach/index.php?jat3action=gzip&amp;jat3type=js&amp;jat3file=t3-assets%2Fjs_7b2e2.js" type="text/javascript"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js" type="text/javascript"></script>
  <script src="/wereach/index.php?jat3action=gzip&amp;jat3type=js&amp;jat3file=t3-assets%2Fjs_be55f.js" type="text/javascript"></script>
  <script type="text/javascript">
//<![CDATA[ 
vmSiteurl = 'http://webdesigninbangalore.co.in/wereach/' ;
vmLang = '&amp;lang=en' ;
Virtuemart.addtocart_popup = '1' ; 
vmCartText = '%2$s x %1$s was added to your cart.' ;
vmCartError = 'There was an error while updating your cart.' ;
loadingImage = '/wereach/components/com_virtuemart/assets/images/facebox/loading.gif' ;
closeImage = '/wereach/components/com_virtuemart/assets/images/fancybox/fancy_close.png' ; 
usefancy = false;
//]]>

		window.addEvent('domready', function() {

			SqueezeBox.initialize({});
			SqueezeBox.assign($$('a.modal'), {
				parse: 'rel'
			});
		});
jQuery(document).ready(function () {
	jQuery('.orderlistcontainer').hover(
		function() { jQuery(this).find('.orderlist').stop().show()},
		function() { jQuery(this).find('.orderlist').stop().hide()}
	)
});
	var acymailing = Array();
				acymailing['NAMECAPTION'] = 'Name';
				acymailing['NAME_MISSING'] = 'Please enter your name';
				acymailing['EMAILCAPTION'] = 'E-mail';
				acymailing['VALID_EMAIL'] = 'Please enter a valid e-mail address';
				acymailing['ACCEPT_TERMS'] = 'Please check the Terms and Conditions';
				acymailing['CAPTCHA_MISSING'] = 'Please enter the security code displayed in the image';
				acymailing['NO_LIST_SELECTED'] = 'Please select the lists you want to subscribe to';
		function refreshCaptchaModule(){
		var captchaLink = document.getElementById('captcha_picture_formAcymailing43711').src;myregexp = new RegExp('val-([0-9]+)');
		valToChange=captchaLink.match(myregexp)[1];
		document.getElementById('captcha_picture_formAcymailing43711').src = captchaLink.replace(valToChange,valToChange+'0');
	}
//<![CDATA[
jQuery(document).ready(function() {
		jQuery('#VMmenu77_37113 li.VmClose ul').hide();
		jQuery('#VMmenu77_37113 li .VmArrowdown').click(
		function() {

			if (jQuery(this).parent().next('ul').is(':hidden')) {
				jQuery('#VMmenu77_37113 ul:visible').delay(500).slideUp(500,'linear').parents('li').addClass('VmClose').removeClass('VmOpen');
				jQuery(this).parent().next('ul').slideDown(500,'linear');
				jQuery(this).parents('li').addClass('VmOpen').removeClass('VmClose');
			}
		});
	});
//]]>

  </script>

<!--[if ie]><link href="/wereach/plugins/system/jat3/jat3/base-themes/default/css/template-ie.css" type="text/css" rel="stylesheet" /><![endif]--> 
<!--[if ie]><link href="/wereach/templates/ja_mixmaz/css/template-ie.css" type="text/css" rel="stylesheet" /><![endif]--> 
<!--[if ie 7]><link href="/wereach/plugins/system/jat3/jat3/base-themes/default/css/template-ie7.css" type="text/css" rel="stylesheet" /><![endif]--> 
<!--[if ie 7]><link href="/wereach/templates/ja_mixmaz/css/template-ie7.css" type="text/css" rel="stylesheet" /><![endif]--> 
<!--[if ie 8]><link href="/wereach/templates/ja_mixmaz/css/template-ie8.css" type="text/css" rel="stylesheet" /><![endif]--> 

<!-- META FOR IOS & HANDHELD -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta name="HandheldFriendly" content="true" />



<link href="/wereach/plugins/system/jat3/jat3/base-themes/default/images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    
    <style type="text/css">
/*dynamic css*/

    body.bd .main {width: 1020px;}
    body.bd #ja-wrapper {min-width: 1020px;}
</style></head>

<body id="bd" class="bd fs3 com_virtuemart">
<a name="Top" id="Top"></a>
<div id="ja-wrapper">


                <div id="ja-tophead"
            	class="wrap ">
                   <div class="main">
                           <div class="main-inner1 clearfix">
                <div id="ja-headline">
	<div class="ja-headlineswrap">
		<em>Headlines:</em>
	<div   id="jalh-modid125" class="ja-headlines ">
		<div style="white-space:nowrap; " id="jahl-wapper-items-jalh-modid125">
		<!-- HEADLINE CONTENT -->
								<div class="ja-headlines-item jahl-horizontal" style="visibility:visible">
					<a  title="What information do we collect?
We collect information from you when you fill out a form. When ordering or registering on our site, as appropriate, you may be asked to enter your: name, e-mail address or phone number.
What do we use your information for?
Any of the information we collect from you..."  href="/wereach/index.php?option=com_content&amp;view=article&amp;id=165:privacy-policy&amp;catid=88:content&amp;Itemid=529"><span>Privacy Policy</span>
					</a> 
				</div>
						<div class="ja-headlines-item jahl-horizontal" style="visibility:hidden">
					<a  title="WeReach Infotech
#205, 1st Floor,1st Main, 7th Block,Near forum mall,Behind Bosch Company, Koramangala, Bangalore.- 560095 
  Phone num:- 080 - 25701102, 9902002788 Fax:- 080-25705602  Mobile:- 9902002788, 9741346119  Email:- info@wereachindia.com

View Larger Map"  href="/wereach/index.php?option=com_content&amp;view=article&amp;id=164:contact-us&amp;catid=88:content&amp;Itemid=531"><span>Contact Us</span>
					</a> 
				</div>
						<div class="ja-headlines-item jahl-horizontal" style="visibility:hidden">
					<a  title="REVA ELECTRIC CAR COMPANY LTD 
CAPCO IT SERVICES LTD 
AVASARALA AUTOMATION LTD
 SAFINA HOTELS LTD 
ALLWELD ENGINEERSPVT.LTD 
S R NOVA PRIVATE LTD 
CAFÉ COFFEE DAY
 BANGALORE CLUB
 SINDHU CARGO SERVICES LTD
 TRANS WORLD ICT SOLUTIONS LTD
 RITTAL INDIA PVT.LTD
 DIRECTORATE OF FACTORIES &am..."  href="/wereach/index.php?option=com_content&amp;view=article&amp;id=163:clients&amp;catid=88:content&amp;Itemid=528"><span>Clients</span>
					</a> 
				</div>
						<div class="ja-headlines-item jahl-horizontal" style="visibility:hidden">
					<a  title="What brand laptop do you service?We repair all makes and models of laptops and notebooks. Major brands such as HP, DELL, IBM, Lenova, ACER, HCL, Sony, Toshiba, etc. to lesser known brands such as Fujitsu, Zenith, Alienware, Northstar, ECS, Hyperdata, etc.
What kind of repairs can you perform?We hav..."  href="/wereach/index.php?option=com_content&amp;view=article&amp;id=162:faq-s&amp;catid=88:content&amp;Itemid=527"><span>Faq's</span>
					</a> 
				</div>
						<div class="ja-headlines-item jahl-horizontal" style="visibility:hidden">
					<a  title="I am extremely pleased with the quality that WeReach has provided me. The company has also kept its promise of quality and state-of-the-art set up in every aspect. It’s easy to assure quality in every service provided but it takes real excellence and commitment to keep up that assurance. I congrat..."  href="/wereach/index.php?option=com_content&amp;view=article&amp;id=161:testimonial&amp;catid=88:content&amp;Itemid=526"><span>Testimonial</span>
					</a> 
				</div>
						<div class="ja-headlines-item jahl-horizontal" style="visibility:hidden">
					<a  title="We render set of process that detail best practices based on standards to enable and optimize IT services in order to satisfy business requirements and manage the IT infrastructure both tactically and strategically. ."  href="/wereach/index.php?option=com_content&amp;view=article&amp;id=160:product-range-services&amp;catid=88:content&amp;Itemid=670"><span>Product Range services </span>
					</a> 
				</div>
						<div class="ja-headlines-item jahl-horizontal" style="visibility:hidden">
					<a  title="We render set of process that detail best practices based on standards to enable and optimize IT services in order to satisfy business requirements and manage the IT infrastructure both tactically and strategically. ."  href="/wereach/index.php?option=com_content&amp;view=article&amp;id=159:product-accessories-services&amp;catid=14:sample-data-articles&amp;Itemid=669"><span>Product Accessories services</span>
					</a> 
				</div>
						<div class="ja-headlines-item jahl-horizontal" style="visibility:hidden">
					<a  title="We render set of process that detail best practices based on standards to enable and optimize IT services in order to satisfy business requirements and manage the IT infrastructure both tactically and strategically. ."  href="/wereach/index.php?option=com_content&amp;view=article&amp;id=158:it-services&amp;catid=88:content&amp;Itemid=668"><span>IT Services</span>
					</a> 
				</div>
						<div class="ja-headlines-item jahl-horizontal" style="visibility:hidden">
					<a  title="Services"  href="/wereach/index.php?option=com_content&amp;view=article&amp;id=157:services&amp;catid=88:content&amp;Itemid=667"><span>Services</span>
					</a> 
				</div>
						<div class="ja-headlines-item jahl-horizontal" style="visibility:hidden">
					<a  title=" 
SAMSUNG GALAXY STAR PRO S7262 (MIDNIGHT BLACK) PRICE: RS.6799
Key Features

Dual Standby SIM (GSM + GSM)
Android (Jelly Bean) OS
Wi-Fi Enabled
2 MP Primary Camera
Expandable Storage Capacity of 32 GB
4-inch TFT Touchscreen
1 GHz Cortex-A5 Processor

Another addition to Samsung’s lon..."  href="/wereach/index.php?option=com_content&amp;view=article&amp;id=150:bolg-8&amp;catid=89:blog&amp;Itemid=663"><span>Bolg-8</span>
					</a> 
				</div>
						<!-- //HEADLINE CONTENT -->
		</div>	
	</div>
	
</div>
<script type="text/javascript">
	//<![CDATA[
	var options = { 
		box:$('jalh-modid125'),
		items: $$('#jalh-modid125 .ja-headlines-item'),
		mode: 'horizontal',
		wrapper:$('jahl-wapper-items-jalh-modid125'),
		buttons:{next: $$('.ja-headelines-next'), previous: $$('.ja-headelines-pre')},
		interval:3000,
		fxOptions : { 
			duration: 1000,
			transition: Fx.Transitions.linear ,
			wait: false,
			link: 'cancel' 
		}	
	};

	var jahl = new JANewSticker( options );
	//]]>
</script>
</div>

<div id="ja-topnav">
	
</div>                </div>
                            </div>
                        </div>
                        <div id="ja-header"
            	class="wrap ">
                   <div class="main">
                           <div class="main-inner1 clearfix">
                <h1 class="logo">
    <a href="" title="Wereach"><span>Wereach</span></a>
</h1>

<div id="ja-social">
    

<div class="custom ja-social"  >
	<ul class="social-list">
<li class="facebook"><a href="#" title="Facebook">Facebook</a></li>
<li class="twitter"><a href="#" title="Twitter">Twitter</a></li>
<li class="flicker"><a href="#" title="Flicker">Flicker</a></li>
<li class="feed"><a href="#" title="Feed">Feed</a></li>
</ul></div>

</div>

<div id="ja-search">
    <form action="/wereach/index.php?option=com_virtuemart&amp;view=category&amp;virtuemart_category_id=14&amp;categorylayout=0&amp;Itemid=567" method="post" class="search">
		<label for="mod-search-searchword">Search...</label><input name="searchword" id="mod-search-searchword" maxlength="20"  class="inputbox" type="text" size="20" value="Search..."  onblur="if (this.value=='') this.value='Search...';" onfocus="if (this.value=='Search...') this.value='';" />	<input type="hidden" name="task" value="search" />
	<input type="hidden" name="option" value="com_search" />
	<input type="hidden" name="Itemid" value="567" />
</form>

</div>                </div>
                            </div>
                        </div>
            <div id="ja-mainnav"
            	class="wrap ">
                   <div class="main">
                           <div class="main-inner1 clearfix">
                
<div class="ja-megamenu clearfix" id="ja-megamenu">
<ul class="megamenu level0"><li  class="mega first"><a href="http://webdesigninbangalore.co.in/wereach/"  class="mega first" id="menu435" title="Home"><span class="menu-title">Home</span></a></li><li  class="mega"><a href="/wereach/index.php?option=com_content&amp;view=article&amp;id=135&amp;Itemid=468"  class="mega" id="menu468" title="About"><span class="menu-title">About</span></a></li><li  class="mega haschild active"><a  class="mega haschild active" id="menu534" title="Products"><span class="menu-title">Products</span></a><div class="childcontent cols1 ">
<div class="childcontent-inner-wrap">
<div class="childcontent-inner clearfix" style="width: 210px;"><div class="megacol column1 first" style="width: 210px;"><ul class="megamenu level1"><li  class="mega first haschild"><a  class="mega first haschild" id="menu535" title="Computer Accessories"><span class="menu-title">Computer Accessories</span></a><div class="childcontent cols1 ">
<div class="childcontent-inner-wrap">
<div class="childcontent-inner clearfix" style="width: 200px;"><div class="megacol column1 first" style="width: 200px;"><ul class="megamenu level2"><li  class="mega first"><a href="/wereach/index.php?option=com_virtuemart&amp;view=category&amp;virtuemart_category_id=15&amp;categorylayout=0&amp;Itemid=557"  class="mega first" id="menu557" title="External hard disks"><span class="menu-title">External hard disks</span></a></li><li  class="mega"><a href="/wereach/index.php?option=com_virtuemart&amp;view=category&amp;virtuemart_category_id=15&amp;categorylayout=0&amp;Itemid=558"  class="mega" id="menu558" title="Pen Drives"><span class="menu-title">Pen Drives</span></a></li><li  class="mega"><a href="/wereach/index.php?option=com_virtuemart&amp;view=category&amp;virtuemart_category_id=15&amp;categorylayout=0&amp;Itemid=559"  class="mega" id="menu559" title="Head Phones"><span class="menu-title">Head Phones</span></a></li><li  class="mega"><a href="/wereach/index.php?option=com_virtuemart&amp;view=category&amp;virtuemart_category_id=15&amp;categorylayout=0&amp;Itemid=564"  class="mega" id="menu564" title="Headset"><span class="menu-title">Headset</span></a></li><li  class="mega last"><a href="/wereach/index.php?option=com_virtuemart&amp;view=category&amp;virtuemart_category_id=15&amp;categorylayout=0&amp;Itemid=565"  class="mega last" id="menu565" title="Batteries"><span class="menu-title">Batteries</span></a></li></ul></div></div>
</div></div></li><li  class="mega haschild active"><a  class="mega haschild active" id="menu566" title="Tablets"><span class="menu-title">Tablets</span></a><div class="childcontent cols1 ">
<div class="childcontent-inner-wrap">
<div class="childcontent-inner clearfix" style="width: 200px;"><div class="megacol column1 first" style="width: 200px;"><ul class="megamenu level2"><li  class="mega first active"><a href="/wereach/index.php?option=com_virtuemart&amp;view=category&amp;virtuemart_category_id=14&amp;categorylayout=0&amp;Itemid=567"  class="mega first active" id="menu567" title="IPad"><span class="menu-title">IPad</span></a></li><li  class="mega last"><a href="/wereach/index.php?option=com_virtuemart&amp;view=category&amp;virtuemart_category_id=14&amp;categorylayout=0&amp;Itemid=568"  class="mega last" id="menu568" title="Nexus 7"><span class="menu-title">Nexus 7</span></a></li></ul></div></div>
</div></div></li><li  class="mega last haschild"><a  class="mega last haschild" id="menu536" title="Laptops"><span class="menu-title">Laptops</span></a><div class="childcontent cols1 ">
<div class="childcontent-inner-wrap">
<div class="childcontent-inner clearfix" style="width: 200px;"><div class="megacol column1 first" style="width: 200px;"><ul class="megamenu level2"><li  class="mega first"><a href="/wereach/index.php?option=com_virtuemart&amp;view=category&amp;virtuemart_category_id=13&amp;categorylayout=0&amp;Itemid=537"  class="mega first" id="menu537" title="Apple"><span class="menu-title">Apple</span></a></li><li  class="mega"><a href="/wereach/index.php?option=com_virtuemart&amp;view=category&amp;virtuemart_category_id=13&amp;categorylayout=0&amp;Itemid=664"  class="mega" id="menu664" title="Hp"><span class="menu-title">Hp</span></a></li><li  class="mega last"><a href="/wereach/index.php?option=com_virtuemart&amp;view=category&amp;virtuemart_category_id=13&amp;categorylayout=0&amp;Itemid=665"  class="mega last" id="menu665" title="Dell"><span class="menu-title">Dell</span></a></li></ul></div></div>
</div></div></li></ul></div></div>
</div></div></li><li  class="mega haschild"><a href="/wereach/index.php?option=com_content&amp;view=article&amp;id=157&amp;Itemid=667"  class="mega haschild" id="menu667" title="Services"><span class="menu-title">Services</span></a><div class="childcontent cols1 ">
<div class="childcontent-inner-wrap">
<div class="childcontent-inner clearfix" style="width: 200px;"><div class="megacol column1 first" style="width: 200px;"><ul class="megamenu level1"><li  class="mega first"><a href="/wereach/index.php?option=com_content&amp;view=article&amp;id=158&amp;Itemid=668"  class="mega first" id="menu668" title="IT Services"><span class="menu-title">IT Services</span></a></li><li  class="mega"><a href="/wereach/index.php?option=com_content&amp;view=article&amp;id=159&amp;Itemid=669"  class="mega" id="menu669" title="Product Accessories services"><span class="menu-title">Product Accessories services</span></a></li><li  class="mega last"><a href="/wereach/index.php?option=com_content&amp;view=article&amp;id=160&amp;Itemid=670"  class="mega last" id="menu670" title="Product Range services "><span class="menu-title">Product Range services </span></a></li></ul></div></div>
</div></div></li><li  class="mega"><a href="/wereach/index.php?option=com_content&amp;view=category&amp;layout=blog&amp;id=89&amp;Itemid=663"  class="mega" id="menu663" title="Blog"><span class="menu-title">Blog</span></a></li><li  class="mega"><a href="/wereach/index.php?option=com_content&amp;view=article&amp;id=147&amp;Itemid=666"  class="mega" id="menu666" title="Forum"><span class="menu-title">Forum</span></a></li><li  class="mega last"><a href="/wereach/index.php?option=com_contact&amp;view=contact&amp;id=1&amp;Itemid=497"  class="mega last" id="menu497" title="Contact us"><span class="menu-title">Contact us</span></a></li></ul>
</div>            <script type="text/javascript">
                var megamenu = new jaMegaMenuMoo ('ja-megamenu', {
                    'bgopacity': 0,
                    'delayHide': 300,
                    'slide'    : 0,
                    'fading'   : 0,
                    'direction': 'down',
                    'action'   : 'mouseover',
                    'tips'     : false,
                    'duration' : 300,
                    'hidestyle': 'fastwhenshow'
                });
            </script>
            <!-- jdoc:include type="menu" level="0" / -->

                </div>
                            </div>
                        </div>
            



<ul class="no-display">
    <li><a href="#ja-content" title="Skip to content">Skip to content</a></li>
</ul>
    <!-- MAIN CONTAINER -->
    <div id="ja-container" class="wrap ja-r1">
               <div class="main">
                           <div class="main-inner1 clearfix">
                        <div id="ja-mainbody" style="width:75%">
            <!-- CONTENT -->
            <div id="ja-main" style="width:100%">
            <div class="inner clearfix">

                
<div id="system-message-container">
</div>
                
                <div id="ja-contentwrap" class="clearfix ">
                    <div id="ja-content" class="column" style="width:100%">
                        <div id="ja-current-content" class="column" style="width:100%">
                            
                                                        <div id="ja-content-main" class="ja-content-main clearfix">
                                
<h1 class="category-name">Tablets</h1>

<div class="category_description">
	</div>


<div class="browse-view">
	
	
	
	<div class="orderby-displaynumber clearfix">
		<div class="width70 floatleft">
			<div class="orderlistcontainer"><div class="title">Sort by</div><div class="activeOrder"><a title=" +/-" href="/wereach/index.php?option=com_virtuemart&view=category&virtuemart_category_id=14&Itemid=567&dir=DESC">Product ID  +/-</a></div><div class="orderlist"><div><a title="Product Name" href="/wereach/index.php?option=com_virtuemart&view=category&virtuemart_category_id=14&Itemid=567&orderby=product_name">Product Name</a></div><div><a title="Product SKU" href="/wereach/index.php?option=com_virtuemart&view=category&virtuemart_category_id=14&Itemid=567&orderby=product_sku">Product SKU</a></div><div><a title="Manufacturer name" href="/wereach/index.php?option=com_virtuemart&view=category&virtuemart_category_id=14&Itemid=567&orderby=mf_name">Manufacturer name</a></div></div></div>					</div>
		
		<div class="width30 floatright display-number">
			<div class="title">
				
Results 1 - 1 of 1			</div>
			<select name="" class="inputbox" size="1" onchange="window.top.location.href=this.options[this.selectedIndex].value">
	<option value="/wereach/index.php?option=com_virtuemart&amp;view=category&amp;virtuemart_category_id=14&amp;categorylayout=0&amp;Itemid=567&amp;filter_product=&amp;keyword=&amp;limit=6" selected="selected">6</option>
	<option value="/wereach/index.php?option=com_virtuemart&amp;view=category&amp;virtuemart_category_id=14&amp;categorylayout=0&amp;Itemid=567&amp;filter_product=&amp;keyword=&amp;limit=12">12</option>
	<option value="/wereach/index.php?option=com_virtuemart&amp;view=category&amp;virtuemart_category_id=14&amp;categorylayout=0&amp;Itemid=567&amp;filter_product=&amp;keyword=&amp;limit=18">18</option>
	<option value="/wereach/index.php?option=com_virtuemart&amp;view=category&amp;virtuemart_category_id=14&amp;categorylayout=0&amp;Itemid=567&amp;filter_product=&amp;keyword=&amp;limit=24">24</option>
</select>
		</div>

	</div> <!-- end of orderby-displaynumber -->

		<div class="row">
				
		<div class="product floatleft width33 vertical-separator">
			<div class="spacer">
				<div class="product-top">
					<div class="product-images">
						<a title="Tablet" rel="vm-additional-images" href="/wereach/index.php?option=com_virtuemart&view=productdetails&virtuemart_product_id=41&virtuemart_category_id=14&Itemid=567">
							<img src="/wereach/images/stories/virtuemart/product/resized/slider44_200x200.jpg" alt="slider44" class="browseProductImage" />					  </a>
					</div>
						
					<div class="product-name">
						<h2><a href="/wereach/index.php?option=com_virtuemart&view=productdetails&virtuemart_product_id=41&virtuemart_category_id=14&Itemid=567" >Tablet</a></h2>
					</div>
					
					<!-- The "Average Customer Rating" Part -->
									</div>
				

				<div class="product-info">
										<p class="product_s_desc">
						Keep your boredom at bay with the...					</p>
					 
					
					
					<div class="product-price marginbottom12" id="productPrice41">
						<div class="PricevariantModification" style="display : none;" >Variant price modifier: <span class="PricevariantModification" ></span></div><div class="price-crossed" ><div class="PricebasePriceWithTax" style="display : block;" >Base price with tax: <span class="PricebasePriceWithTax" >471849,14 ₨</span></div></div><div class="PricesalesPriceWithDiscount" style="display : none;" >Salesprice with discount: <span class="PricesalesPriceWithDiscount" ></span></div><div class="PricesalesPrice" style="display : block;" >Sales price: <span class="PricesalesPrice" >471849,14 ₨</span></div><div class="PricepriceWithoutTax" style="display : block;" >Sales price without tax: <span class="PricepriceWithoutTax" >428953,76 ₨</span></div><div class="PricediscountAmount" style="display : none;" >Discount: <span class="PricediscountAmount" ></span></div><div class="PricetaxAmount" style="display : block;" >Tax amount: <span class="PricetaxAmount" >42895,38 ₨</span></div><div class="PriceunitPrice" style="display : none;" >Price / KG: <span class="PriceunitPrice" ></span></div>					</div>

					<p class="link-view-items">
						<a href="/wereach/index.php?option=com_virtuemart&view=productdetails&virtuemart_product_id=41&virtuemart_category_id=14&Itemid=567" title="Tablet" class="product-details">Product details</a>					</p>

				</div>
			</div>
			<!-- end of spacer -->
		</div> <!-- end of product -->
		
				<div class="clear"></div>
  </div> <!-- end of row -->
	
	
	<div class="vm-pagination">
				<span style="float:right"></span>
	</div>

	</div><!-- end browse-view -->                            </div>
                            
                                                    </div>

                                            </div>

                    
                </div>

                            </div>
            </div>
            <!-- //CONTENT -->
            
        </div>
                <!-- RIGHT COLUMN-->
        <div id="ja-right" class="column sidebar" style="width:25%">

            
                        <div class="ja-colswrap clearfix ja-r1">
                                <div id="ja-right1" class="ja-col  column" style="width:100%">
                    	<div class="ja-moduletable moduletable pattern-d vm-category  clearfix" id="Mod119">
						<h3><span>VM - Category</span></h3>
				<div class="ja-box-ct clearfix">
		
<ul class="VMmenu" id="VMmenu77_37113" >

<li class="VmClose">
	<div>
		<a href="/wereach/index.php?option=com_virtuemart&amp;view=category&amp;virtuemart_category_id=15&amp;Itemid=567" >Computer Accessories</a>	</div>
</li>

<li class="VmClose">
	<div>
		<a href="/wereach/index.php?option=com_virtuemart&amp;view=category&amp;virtuemart_category_id=13&amp;Itemid=567" >Laptops</a>	</div>
</li>

<li class="VmOpen">
	<div>
		<a href="/wereach/index.php?option=com_virtuemart&amp;view=category&amp;virtuemart_category_id=14&amp;Itemid=567" >Tablets</a>	</div>
</li>
</ul>
		</div>
    </div>
	                </div>
                
                            </div>
                                </div>
        <!-- //RIGHT COLUMN-->
                            </div>
                            </div>
                </div>
        <!-- //MAIN CONTAINER -->

                <div id="ja-navhelper"
            	class="wrap ">
                   <div class="main">
                           <div class="main-inner1 clearfix">
                <div class="ja-breadcrums">
    
</div>

<ul class="no-display">
    <li><a href="#ja-content" title="Skip to content">Skip to content</a></li>
</ul>                </div>
                            </div>
                        </div>
                        <div id="ja-full-bg"
            	class="wrap  clearfix">
        

<div class="custom"  >
	<div class="main-background">&nbsp;</div></div>
            </div>
                        <div id="ja-botsl1"
            	class="wrap ">
                   <div class="main">
                           <div class="main-inner1 clearfix">
                <!-- SPOTLIGHT -->
<div class="ja-box column ja-box-left" style="width: 50%;">
    	<div class="ja-moduletable moduletable big-title  clearfix" id="Mod101">
						<div class="ja-box-ct clearfix">
		

<div class="custom big-title"  >
	<p style="text-align: justify; font-size: 14px; color: #030303;">We provide quick repair and parts replacement service for all your advertising and editorial systems. We also have parts available for purchase and have the fastest turn-around time in the industry. </p></div>
		</div>
    </div>
	
</div>
<div class="ja-box column ja-box-center" style="width: 25%;">
    	<div class="ja-moduletable moduletable  clearfix" id="Mod100">
						<h3><span>Navigations</span></h3>
				<div class="ja-box-ct clearfix">
		
<ul class="menu">
<li class="item-526"><a href="/wereach/index.php?option=com_content&amp;view=article&amp;id=161&amp;Itemid=526" >Testimonial</a></li><li class="item-527"><a href="/wereach/index.php?option=com_content&amp;view=article&amp;id=162&amp;Itemid=527" >Faq's</a></li><li class="item-528"><a href="/wereach/index.php?option=com_content&amp;view=article&amp;id=163&amp;Itemid=528" >Clients</a></li><li class="item-529"><a href="/wereach/index.php?option=com_content&amp;view=article&amp;id=165&amp;Itemid=529" >Privacy Policy</a></li><li class="item-531"><a href="/wereach/index.php?option=com_content&amp;view=article&amp;id=164&amp;Itemid=531" >Contact Us</a></li></ul>
		</div>
    </div>
	
</div>
<div class="ja-box column ja-box-right" style="width: 25%;">
    	<div class="ja-moduletable moduletable  clearfix" id="Mod99">
						<h3><span>Newsletter</span></h3>
				<div class="ja-box-ct clearfix">
		<div class="acymailing_module" id="acymailing_module_formAcymailing43711">
	<div class="acymailing_fulldiv" id="acymailing_fulldiv_formAcymailing43711"  >
		<form id="formAcymailing43711" action="/wereach/index.php?option=com_virtuemart&amp;view=category&amp;virtuemart_category_id=14&amp;categorylayout=0&amp;Itemid=567" onsubmit="return submitacymailingform('optin','formAcymailing43711')" method="post" name="formAcymailing43711"  >
		<div class="acymailing_module_form" >
			<div class="acymailing_introtext"><span style="color:#000;font-size:12px;text-align:justify;">Make sure you dont miss interesting happenings by joining our newsletter program. We don't do spam. Ever. Because that sucks.</span></div>						<div class="acymailing_form">
					<p class="onefield fieldacyemail" id="field_email_formAcymailing43711">								<span class="acyfield_email"><input id="user_email_formAcymailing43711" placeholder="E-mail" class="inputbox" type="text" name="user[email]" style="width:80%" value="" /></span>
							</p>
					
					<p class="acysubbuttons">
												<input class="button subbutton btn btn-primary" type="submit" value="Subscribe" name="Submit" onclick="try{ return submitacymailingform('optin','formAcymailing43711'); }catch(err){alert('The form could not be submitted '+err);return false;}"/>
											</p>
				</div>
						<input type="hidden" name="ajax" value="0"/>
			<input type="hidden" name="ctrl" value="sub"/>
			<input type="hidden" name="task" value="notask"/>
			<input type="hidden" name="redirect" value="http%3A%2F%2Fwebdesigninbangalore.co.in%2Fwereach%2Findex.php%3Foption%3Dcom_virtuemart%26view%3Dcategory%26virtuemart_category_id%3D14%26categorylayout%3D0%26Itemid%3D567"/>
			<input type="hidden" name="redirectunsub" value="http%3A%2F%2Fwebdesigninbangalore.co.in%2Fwereach%2Findex.php%3Foption%3Dcom_virtuemart%26view%3Dcategory%26virtuemart_category_id%3D14%26categorylayout%3D0%26Itemid%3D567"/>
			<input type="hidden" name="option" value="com_acymailing"/>
						<input type="hidden" name="hiddenlists" value="1"/>
			<input type="hidden" name="acyformname" value="formAcymailing43711" />
									</div>
		</form>
	</div>
	</div>
		</div>
    </div>
	
</div>
<!-- SPOTLIGHT -->

<script type="text/javascript">
    window.addEvent('load', function (){ equalHeight ('#ja-botsl1 .ja-box') });
</script>                </div>
                            </div>
                        </div>
                        <div id="ja-footer"
            	class="wrap ">
                   <div class="main clearfix">
           <div class="ja-copyright">
    

<div class="custom"  >
	<p style="text-align: center;">© 2014 WeReach Infotech. All rights reserved.| Designed and Developed By: <a href="http://www.lensinteractive.com/" target="_blank">Lens Interactive</a></p></div>

</div>            </div>
                        </div>
            
</div>



</body>

</html>";