<?php die("Access Denied"); ?>#x#s:39262:"          1394269008<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

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
  <meta name="title" content="Computer Accessories" />
  <meta name="generator" content="Joomla! - Open Source Content Management" />
  <title>Computer Accessories : Computer Accessories</title>
  <link href="/wereach/index.php?option=com_virtuemart&view=productdetails&virtuemart_product_id=42&virtuemart_category_id=15&Itemid=557" rel="canonical" />
  <link href="http://webdesigninbangalore.co.in/wereach/index.php?option=com_search&amp;view=productdetails&amp;virtuemart_product_id=42&amp;virtuemart_category_id=15&amp;Itemid=557&amp;format=opensearch" rel="search" title="Search Wereach" type="application/opensearchdescription+xml" />
  <link rel="stylesheet" href="/wereach/index.php?jat3action=gzip&amp;jat3type=css&amp;jat3file=t3-assets%2Fcss_7e237.css" type="text/css" />
  <link rel="stylesheet" href="/wereach/index.php?jat3action=gzip&amp;jat3type=css&amp;jat3file=t3-assets%2Fcss_cec3b.css" type="text/css" />
  <link rel="stylesheet" href="/wereach/index.php?jat3action=gzip&amp;jat3type=css&amp;jat3file=t3-assets%2Fcss_461fa.css" type="text/css" />
  <link rel="stylesheet" href="/wereach/index.php?jat3action=gzip&amp;jat3type=css&amp;jat3file=t3-assets%2Fcss_7ba77.css" type="text/css" />
  <script src="/wereach/index.php?jat3action=gzip&amp;jat3type=js&amp;jat3file=t3-assets%2Fjs_68bf0.js" type="text/javascript"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js" type="text/javascript"></script>
  <script src="/wereach/components/com_k2/js/k2.js?v2.6.7&amp;sitepath=/wereach/" type="text/javascript"></script>
  <script src="/wereach/index.php?jat3action=gzip&amp;jat3type=js&amp;jat3file=t3-assets%2Fjs_7b2e2.js" type="text/javascript"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js" type="text/javascript"></script>
  <script src="/wereach/index.php?jat3action=gzip&amp;jat3type=js&amp;jat3file=t3-assets%2Fjs_11fdd.js" type="text/javascript"></script>
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
//<![CDATA[
	jQuery(document).ready(function($) {
		jQuery('a.recommened-to-friend').click( function(){
					jQuery.facebox({
				iframe: 'index.php?option=com_virtuemart&view=productdetails&task=recommend&virtuemart_product_id=42&virtuemart_category_id=15&tmpl=component',
				rev: 'iframe|550|550'
			});
			return false ;
		});
		
	/*	$('.additional-images a').mouseover(function() {
			var himg = this.href ;
			var extension=himg.substring(himg.lastIndexOf('.')+1);
			if (extension =='png' || extension =='jpg' || extension =='gif') {
				$('.main-image img').attr('src',himg );
			}
			console.log(extension)
		});*/
	});
//]]>

jQuery(document).ready(function() {
	jQuery("a[rel=vm-additional-images]").fancybox({
		"titlePosition" 	: "inside",
		"transitionIn"	:	"elastic",
		"transitionOut"	:	"elastic"
	});
	jQuery(".additional-images .product-image").click(function() {
		jQuery(".main-image img").attr("src",this.src );
		jQuery(".main-image img").attr("alt",this.alt );
		jQuery(".main-image a").attr("href",this.src );
		jQuery(".main-image a").attr("title",this.alt );
	}); 
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
		var captchaLink = document.getElementById('captcha_picture_formAcymailing65611').src;myregexp = new RegExp('val-([0-9]+)');
		valToChange=captchaLink.match(myregexp)[1];
		document.getElementById('captcha_picture_formAcymailing65611').src = captchaLink.replace(valToChange,valToChange+'0');
	}
//<![CDATA[
jQuery(document).ready(function() {
		jQuery('#VMmenu007_7902 li.VmClose ul').hide();
		jQuery('#VMmenu007_7902 li .VmArrowdown').click(
		function() {

			if (jQuery(this).parent().next('ul').is(':hidden')) {
				jQuery('#VMmenu007_7902 ul:visible').delay(500).slideUp(500,'linear').parents('li').addClass('VmClose').removeClass('VmOpen');
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
    <form action="/wereach/index.php?option=com_virtuemart&amp;view=category&amp;virtuemart_category_id=15&amp;categorylayout=0&amp;Itemid=557" method="post" class="search">
		<label for="mod-search-searchword">Search...</label><input name="searchword" id="mod-search-searchword" maxlength="20"  class="inputbox" type="text" size="20" value="Search..."  onblur="if (this.value=='') this.value='Search...';" onfocus="if (this.value=='Search...') this.value='';" />	<input type="hidden" name="task" value="search" />
	<input type="hidden" name="option" value="com_search" />
	<input type="hidden" name="Itemid" value="557" />
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
<div class="childcontent-inner clearfix" style="width: 210px;"><div class="megacol column1 first" style="width: 210px;"><ul class="megamenu level1"><li  class="mega first haschild active"><a  class="mega first haschild active" id="menu535" title="Computer Accessories"><span class="menu-title">Computer Accessories</span></a><div class="childcontent cols1 ">
<div class="childcontent-inner-wrap">
<div class="childcontent-inner clearfix" style="width: 200px;"><div class="megacol column1 first" style="width: 200px;"><ul class="megamenu level2"><li  class="mega first active"><a href="/wereach/index.php?option=com_virtuemart&amp;view=category&amp;virtuemart_category_id=15&amp;categorylayout=0&amp;Itemid=557"  class="mega first active" id="menu557" title="External hard disks"><span class="menu-title">External hard disks</span></a></li><li  class="mega"><a href="/wereach/index.php?option=com_virtuemart&amp;view=category&amp;virtuemart_category_id=15&amp;categorylayout=0&amp;Itemid=558"  class="mega" id="menu558" title="Pen Drives"><span class="menu-title">Pen Drives</span></a></li><li  class="mega"><a href="/wereach/index.php?option=com_virtuemart&amp;view=category&amp;virtuemart_category_id=15&amp;categorylayout=0&amp;Itemid=559"  class="mega" id="menu559" title="Head Phones"><span class="menu-title">Head Phones</span></a></li><li  class="mega"><a href="/wereach/index.php?option=com_virtuemart&amp;view=category&amp;virtuemart_category_id=15&amp;categorylayout=0&amp;Itemid=564"  class="mega" id="menu564" title="Headset"><span class="menu-title">Headset</span></a></li><li  class="mega last"><a href="/wereach/index.php?option=com_virtuemart&amp;view=category&amp;virtuemart_category_id=15&amp;categorylayout=0&amp;Itemid=565"  class="mega last" id="menu565" title="Batteries"><span class="menu-title">Batteries</span></a></li></ul></div></div>
</div></div></li><li  class="mega haschild"><a  class="mega haschild" id="menu566" title="Tablets"><span class="menu-title">Tablets</span></a><div class="childcontent cols1 ">
<div class="childcontent-inner-wrap">
<div class="childcontent-inner clearfix" style="width: 200px;"><div class="megacol column1 first" style="width: 200px;"><ul class="megamenu level2"><li  class="mega first"><a href="/wereach/index.php?option=com_virtuemart&amp;view=category&amp;virtuemart_category_id=14&amp;categorylayout=0&amp;Itemid=567"  class="mega first" id="menu567" title="IPad"><span class="menu-title">IPad</span></a></li><li  class="mega last"><a href="/wereach/index.php?option=com_virtuemart&amp;view=category&amp;virtuemart_category_id=14&amp;categorylayout=0&amp;Itemid=568"  class="mega last" id="menu568" title="Nexus 7"><span class="menu-title">Nexus 7</span></a></li></ul></div></div>
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
                                
<div class="productdetails-view productdetails">

        <div class="product-neighbours">
						<div class="clear"></div>
    </div>
    
		<div class="back-to-category">
		<a href="/wereach/index.php?option=com_virtuemart&view=category&virtuemart_category_id=15&Itemid=557" class="product-details" title="Computer Accessories">Back to: Computer Accessories</a>
	</div>
	
	<div class="product-heading">
				<h1 class="product-name">Computer Accessories</h1>
		
    
    
        <div class="icons">
	    <a class="recommened-to-friend" title="Email" href="/wereach/index.php?option=com_virtuemart&view=productdetails&task=recommend&virtuemart_product_id=42&virtuemart_category_id=15&tmpl=component&Itemid=557"><img src="/wereach/media/system/images/emailButton.png" alt="Email"  /></a>    	<div class="clear"></div>
		</div>
    	</div>
		
		
	<div class="product-info clearfix">
        <div class="product-short-description">
	    SPECIFICATIONS OF AUDIO TECHNICA ATH-SJ11 BGR ON-THE-EAR HEADPHONE (BLACK & GREEN, ON-THE-EAR)<br />
<br />
GENERAL		</div>
				
		<div class="width50 floatleft">
			<div class="main-image">

	<a  rel='vm-additional-images' href="http://webdesigninbangalore.co.in/wereach/images/stories/virtuemart/product/1.jpg"><img src="/wereach/images/stories/virtuemart/product/1.jpg" alt=""  /></a>
	 <div class="clear"></div>
</div>
		</div>
		
		<div class="width50 floatright">
			<div class="spacer-buy-area">
									<span class="vote">Rating:  Not Rated Yet</span>
					<div class="product-price" id="productPrice42">
	<strong>Price: </strong><div class="PricevariantModification" style="display : none;" >Variant price modifier: <span class="PricevariantModification" ></span></div><span class="price-crossed" ><div class="PricebasePriceWithTax" style="display : block;" >Base price with tax: <span class="PricebasePriceWithTax" >34994,08 ₨</span></div></span><div class="PricesalesPriceWithDiscount" style="display : none;" >Salesprice with discount: <span class="PricesalesPriceWithDiscount" ></span></div><div class="PricepriceWithoutTax" style="display : block;" >Sales price without tax: <span class="PricepriceWithoutTax" >31812,80 ₨</span></div><div class="PricediscountAmount" style="display : none;" >Discount: <span class="PricediscountAmount" ></span></div><div class="PricetaxAmount" style="display : block;" >Tax amount: <span class="PricetaxAmount" >3181,28 ₨</span></div><div class="PriceunitPrice" style="display : none;" >Price / kg: <span class="PriceunitPrice" ></span></div><div class="PricesalesPrice" style="display : block;" >Sales price: <span class="PricesalesPrice" >34994,08 ₨</span></div></div>

				
<div class="addtocart-area">
	<form method="post" class="product js-recalculate" action="/wereach/index.php?option=com_virtuemart&view=category&virtuemart_category_id=15&categorylayout=0&Itemid=557">
		<input name="quantity" type="hidden" value="1" />
		
		<div class="addtocart-bar">

			<script type="text/javascript">
				function check(obj) {
				// use the modulus operator '%' to see if there is a remainder
				remainder=obj.value % 1;
				quantity=obj.value;
				if (remainder  != 0) {
					alert('You can buy this product only in multiples of 1 pieces!!');
					obj.value = quantity-remainder;
					return false;
					}
				return true;
				}
			</script> 

								<!-- <label for="quantity42" class="quantity_box">Quantity: </label> -->
					<span class="quantity-box">
						<input type="text" class="quantity-input js-recalculate" name="quantity[]" onblur="check(this);"
							   value="1"/>
					</span>
					<span class="quantity-controls js-recalculate">
					<input type="button" class="quantity-controls quantity-plus"/>
					<input type="button" class="quantity-controls quantity-minus"/>
					</span>
										<span class="addtocart-button">
						<input type="submit" name="addtocart" class="addtocart-button" rel="nofollow" value="Add to Cart" title="Add to Cart" />					</span>
					<input type="hidden" class="pname" value="Computer Accessories"/>
					<input type="hidden" name="view" value="cart"/>
					<noscript><input type="hidden" name="task" value="add"/></noscript>
					<input type="hidden" name="virtuemart_product_id[]" value="42"/>
										<div class="clear"></div>
		</div>
				<input type="hidden" name="option" value="com_virtuemart"/>
	</form>
</div>

					
						<div class="availability">
							<img src="http://webdesigninbangalore.co.in/wereach/components/com_virtuemart/assets/images/availability/24h.gif" alt="24h.gif" class="availability" />						</div>
						
				
							</div>
		</div>
	</div>

	
		<div class="product-description">
				<span class="title">Description</span>
		<p><strong>KEY FEATURES OF AUDIO TECHNICA ATH-SJ11 BGR ON-THE-EAR HEADPHONE (BLACK &amp; GREEN, ON-THE-EAR)</strong></p>
<ul>
<li><span style="line-height: 1.3em;">Wired Connectivity</span></li>
<li><span style="line-height: 1.3em;">On-the-ear Headphones</span></li>
<li><span style="line-height: 1.3em;">Supra-aural Closed Headphones</span></li>
<li><span style="line-height: 1.3em;">36 mm Headphone Driver Units</span></li>
<li><span style="line-height: 1.3em;">Over-the-head Design</span></li>
<li><span style="line-height: 1.3em;">500 mW of Max Power Input</span></li>
<li><span style="line-height: 1.3em;">15 Hz - 22000 Hz Headphone Frequency Response</span></li>
</ul>
<p><strong>SPECIFICATIONS OF AUDIO TECHNICA ATH-SJ11 BGR ON-THE-EAR HEADPHONE (BLACK &amp; GREEN, ON-THE-EAR)</strong></p>
<p>GENERAL</p>	</div>
	
	
	
	
<div class="customer-reviews">
	<form method="post" action="/wereach/index.php?option=com_virtuemart&view=productdetails&virtuemart_product_id=42&virtuemart_category_id=15&Itemid=557" name="reviewForm" id="reviewform">

				
		
			</form>
</div>
</div>
                            </div>
                            
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
                    	<div class="ja-moduletable moduletable  clearfix" id="Mod116">
						<h3><span>VM - Search in Shop</span></h3>
				<div class="ja-box-ct clearfix">
		<!--BEGIN Search Box -->
<form action="/wereach/index.php?option=com_virtuemart&amp;view=category&amp;search=true&amp;limitstart=0&amp;virtuemart_category_id=0&amp;Itemid=557" method="get">
<div class="search">
<input style="height:16px;vertical-align :middle;" name="keyword" id="mod_virtuemart_search" maxlength="20" alt="Search" class="inputbox" type="text" size="20" value="Search..."  onblur="if(this.value=='') this.value='Search...';" onfocus="if(this.value=='Search...') this.value='';" /></div>
		<input type="hidden" name="limitstart" value="0" />
		<input type="hidden" name="option" value="com_virtuemart" />
		<input type="hidden" name="view" value="category" />

	  </form>

<!-- End Search Box -->
		</div>
    </div>
		<div class="ja-moduletable moduletable  clearfix" id="Mod118">
						<h3><span>VM - Shopping cart</span></h3>
				<div class="ja-box-ct clearfix">
		
<!-- Virtuemart 2 Ajax Card -->
<div class="vmCartModule " id="vmCartModule">

	<div id="hiddencontainer" style=" display: none; ">
		<div class="container">
			<div class="product_row">
			
								 <div class="prices" style="float: right;"></div>
								
				<span class="quantity"></span>&nbsp;x&nbsp;<span class="product_name"></span>
				
				<div class="product_attributes"></div>
				
			</div>
			
		</div>
	</div>
	
	<div class="vm_cart_products">
	
		<div class="container">
		
				
		</div>
	</div>
		
	<div class="ja-vm-total">
		<div class="total">
					</div>
	</div>

	<div class="show_cart">
			</div>
	<div style="clear:both;"></div>

	<noscript>
	Please wait	</noscript>
</div>

		</div>
    </div>
		<div class="ja-moduletable moduletable pattern-d vm-category  clearfix" id="Mod119">
						<h3><span>VM - Category</span></h3>
				<div class="ja-box-ct clearfix">
		
<ul class="VMmenu" id="VMmenu007_7902" >

<li class="VmOpen">
	<div>
		<a href="/wereach/index.php?option=com_virtuemart&amp;view=category&amp;virtuemart_category_id=15&amp;Itemid=557" >Computer Accessories</a>	</div>
</li>

<li class="VmClose">
	<div>
		<a href="/wereach/index.php?option=com_virtuemart&amp;view=category&amp;virtuemart_category_id=13&amp;Itemid=557" >Laptops</a>	</div>
</li>

<li class="VmClose">
	<div>
		<a href="/wereach/index.php?option=com_virtuemart&amp;view=category&amp;virtuemart_category_id=14&amp;Itemid=557" >Tablets</a>	</div>
</li>
</ul>
		</div>
    </div>
		<div class="ja-moduletable moduletable  clearfix" id="Mod113">
						<h3><span>VM - Currencies Selector</span></h3>
				<div class="ja-box-ct clearfix">
		
<!-- Currency Selector Module -->

<form action="http://webdesigninbangalore.co.in/wereach/index.php?option=com_virtuemart&view=productdetails&virtuemart_product_id=42&virtuemart_category_id=15&Itemid=557&showall=1" method="post">
	<select id="virtuemart_currency_id" name="virtuemart_currency_id" class="inputbox vm-chzn-select">
	<option value="52">British pound &pound;</option>
	<option value="26">Canadian dollar $</option>
	<option value="47">Euro &euro;</option>
	<option value="68" selected="selected">Indian rupee ₨</option>
	<option value="144">United States dollar $</option>
</select>
  <input class="button" type="submit" name="submit" value="Change Currency" />
</form>
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
		<div class="acymailing_module" id="acymailing_module_formAcymailing65611">
	<div class="acymailing_fulldiv" id="acymailing_fulldiv_formAcymailing65611"  >
		<form id="formAcymailing65611" action="/wereach/index.php?option=com_virtuemart&amp;view=category&amp;virtuemart_category_id=15&amp;categorylayout=0&amp;Itemid=557" onsubmit="return submitacymailingform('optin','formAcymailing65611')" method="post" name="formAcymailing65611"  >
		<div class="acymailing_module_form" >
			<div class="acymailing_introtext"><span style="color:#000;font-size:12px;text-align:justify;">Make sure you dont miss interesting happenings by joining our newsletter program. We don't do spam. Ever. Because that sucks.</span></div>						<div class="acymailing_form">
					<p class="onefield fieldacyemail" id="field_email_formAcymailing65611">								<span class="acyfield_email"><input id="user_email_formAcymailing65611" placeholder="E-mail" class="inputbox" type="text" name="user[email]" style="width:80%" value="" /></span>
							</p>
					
					<p class="acysubbuttons">
												<input class="button subbutton btn btn-primary" type="submit" value="Subscribe" name="Submit" onclick="try{ return submitacymailingform('optin','formAcymailing65611'); }catch(err){alert('The form could not be submitted '+err);return false;}"/>
											</p>
				</div>
						<input type="hidden" name="ajax" value="0"/>
			<input type="hidden" name="ctrl" value="sub"/>
			<input type="hidden" name="task" value="notask"/>
			<input type="hidden" name="redirect" value="http%3A%2F%2Fwebdesigninbangalore.co.in%2Fwereach%2Findex.php%3Foption%3Dcom_virtuemart%26view%3Dproductdetails%26virtuemart_product_id%3D42%26virtuemart_category_id%3D15%26Itemid%3D557"/>
			<input type="hidden" name="redirectunsub" value="http%3A%2F%2Fwebdesigninbangalore.co.in%2Fwereach%2Findex.php%3Foption%3Dcom_virtuemart%26view%3Dproductdetails%26virtuemart_product_id%3D42%26virtuemart_category_id%3D15%26Itemid%3D557"/>
			<input type="hidden" name="option" value="com_acymailing"/>
						<input type="hidden" name="hiddenlists" value="1"/>
			<input type="hidden" name="acyformname" value="formAcymailing65611" />
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