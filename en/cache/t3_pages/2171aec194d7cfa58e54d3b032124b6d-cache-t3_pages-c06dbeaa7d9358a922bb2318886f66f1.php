<?php die("Access Denied"); ?>#x#s:49035:"          1396944723<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

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
  <meta name="keywords" content="joomla 2.5 template, joomla template, event template for joomla, joomla event template, music band joomla template, joomla music band template, joomla music template, responsive joomla template, joomla responsive template, event and music template" />
  <meta name="description" content="Responsive Joomla template from JoomlArt for Music and Event sites - JA Mixmaz. Powered by T3v2 Framework, support K2 component and Virtuemart with beautiful layout and design." />
  <meta name="generator" content="Joomla! - Open Source Content Management" />
  <title>Joomla Template for Music and Event sites - JA Mixmaz</title>
  <link href="/wereach/index.php?format=feed&amp;type=rss" rel="alternate" type="application/rss+xml" title="RSS 2.0" />
  <link href="/wereach/index.php?format=feed&amp;type=atom" rel="alternate" type="application/atom+xml" title="Atom 1.0" />
  <link href="http://webdesigninbangalore.co.in/wereach/index.php?option=com_search&amp;format=opensearch" rel="search" title="Search Wereach" type="application/opensearchdescription+xml" />
  <link rel="stylesheet" href="/wereach/index.php?jat3action=gzip&amp;jat3type=css&amp;jat3file=t3-assets%2Fcss_c97e0.css" type="text/css" />
  <link rel="stylesheet" href="/wereach/index.php?jat3action=gzip&amp;jat3type=css&amp;jat3file=t3-assets%2Fcss_6d841.css" type="text/css" />
  <link rel="stylesheet" href="/wereach/index.php?jat3action=gzip&amp;jat3type=css&amp;jat3file=t3-assets%2Fcss_461fa.css" type="text/css" />
  <link rel="stylesheet" href="/wereach/index.php?jat3action=gzip&amp;jat3type=css&amp;jat3file=t3-assets%2Fcss_3232d.css" type="text/css" />
  <script src="/wereach/index.php?jat3action=gzip&amp;jat3type=js&amp;jat3file=t3-assets%2Fjs_68bf0.js" type="text/javascript"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js" type="text/javascript"></script>
  <script src="/wereach/components/com_k2/js/k2.js?v2.6.7&amp;sitepath=/wereach/" type="text/javascript"></script>
  <script src="/wereach/index.php?jat3action=gzip&amp;jat3type=js&amp;jat3file=t3-assets%2Fjs_799a5.js" type="text/javascript"></script>
  <script type="text/javascript">
window.addEvent('load', function() {
				new JCaption('img.caption');
			});	var acymailing = Array();
				acymailing['NAMECAPTION'] = 'Name';
				acymailing['NAME_MISSING'] = 'Please enter your name';
				acymailing['EMAILCAPTION'] = 'E-mail';
				acymailing['VALID_EMAIL'] = 'Please enter a valid e-mail address';
				acymailing['ACCEPT_TERMS'] = 'Please check the Terms and Conditions';
				acymailing['CAPTCHA_MISSING'] = 'Please enter the security code displayed in the image';
				acymailing['NO_LIST_SELECTED'] = 'Please select the lists you want to subscribe to';
		function refreshCaptchaModule(){
		var captchaLink = document.getElementById('captcha_picture_formAcymailing54581').src;myregexp = new RegExp('val-([0-9]+)');
		valToChange=captchaLink.match(myregexp)[1];
		document.getElementById('captcha_picture_formAcymailing54581').src = captchaLink.replace(valToChange,valToChange+'0');
	}
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
</style><link type="text/css" rel="stylesheet" href="http://webdesigninbangalore.co.in/wereach/plugins/system/japopup/fancybox/css/jquery.fancybox-1.3.4.css" />
<script type="text/javascript" src="http://webdesigninbangalore.co.in/wereach/plugins/system/japopup/fancybox/js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="http://webdesigninbangalore.co.in/wereach/plugins/system/japopup/fancybox/js/jquery.fancybox-1.3.4.js"></script>
<script type="text/javascript" src="http://webdesigninbangalore.co.in/wereach/plugins/system/japopup/fancybox/js/jquery.easing.1.3.js"></script>

</head>

<body id="bd" class="bd fs3 com_content  body hide-content">
<a name="Top" id="Top"></a>
<div id="ja-wrapper">


                <div id="ja-absolute"
            	class="wrap ">
                   <div class="main clearfix">
           <div id="jainfo-block-top.absolute" class="jainfo-block"><div id="jainfo-pos-pos.absolute" class="jainfo-pos-modules">absolute</div></div>            </div>
                        </div>
                        <div id="ja-top-panel"
            	class="wrap ">
                   <div class="main">
                           <div class="main-inner1 clearfix">
                <div id="jainfo-block-top.top-panel" class="jainfo-block"><div id="jainfo-pos-pos.top-panel" class="jainfo-pos-modules">top-panel</div></div>                </div>
                            </div>
                        </div>
                        <div id="ja-tophead"
            	class="wrap ">
                   <div class="main">
                           <div class="main-inner1 clearfix">
                <div id="jainfo-block-top.tophead" class="jainfo-block"><div id="ja-headline">
	<div id="jainfo-pos-pos.headline" class="jainfo-pos-modules"><div class="ja-headlineswrap">
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
</script></div>
</div>

<div id="ja-topnav">
	<div id="jainfo-pos-pos.topnav" class="jainfo-pos-modules"></div>
</div></div>                </div>
                            </div>
                        </div>
                        <div id="ja-header"
            	class="wrap ">
                   <div class="main">
                           <div class="main-inner1 clearfix">
                <div id="jainfo-block-top.header" class="jainfo-block"><h1 class="logo">
    <a href="" title="Wereach"><span>Wereach</span></a>
</h1>

<div id="ja-social">
    <div id="jainfo-pos-pos.social" class="jainfo-pos-modules">

<div class="custom ja-social"  >
	<ul class="social-list">
<li class="facebook"><a href="#" title="Facebook">Facebook</a></li>
<li class="twitter"><a href="#" title="Twitter">Twitter</a></li>
<li class="flicker"><a href="#" title="Flicker">Flicker</a></li>
<li class="feed"><a href="#" title="Feed">Feed</a></li>
</ul></div>
</div>
</div>

<div id="ja-search">
    <div id="jainfo-pos-pos.search" class="jainfo-pos-modules"><form action="/wereach/index.php" method="post" class="search">
		<label for="mod-search-searchword">Search...</label><input name="searchword" id="mod-search-searchword" maxlength="20"  class="inputbox" type="text" size="20" value="Search..."  onblur="if (this.value=='') this.value='Search...';" onfocus="if (this.value=='Search...') this.value='';" />	<input type="hidden" name="task" value="search" />
	<input type="hidden" name="option" value="com_search" />
	<input type="hidden" name="Itemid" value="435" />
</form>
</div>
</div></div>                </div>
                            </div>
                        </div>
            <div id="jainfo-block-top.mainnav" class="jainfo-block"><div id="ja-mainnav"
            	class="wrap ">
                   <div class="main">
                           <div class="main-inner1 clearfix">
                
<div class="ja-megamenu clearfix" id="ja-megamenu">
<ul class="megamenu level0"><li  class="mega first active"><a href="http://webdesigninbangalore.co.in/wereach/"  class="mega first active" id="menu435" title="Home"><span class="menu-title">Home</span></a></li><li  class="mega"><a href="/wereach/index.php?option=com_content&amp;view=article&amp;id=135&amp;Itemid=468"  class="mega" id="menu468" title="About"><span class="menu-title">About</span></a></li><li  class="mega haschild"><a  class="mega haschild" id="menu534" title="Products"><span class="menu-title">Products</span></a><div class="childcontent cols1 ">
<div class="childcontent-inner-wrap">
<div class="childcontent-inner clearfix" style="width: 210px;"><div class="megacol column1 first" style="width: 210px;"><ul class="megamenu level1"><li  class="mega first haschild"><a  class="mega first haschild" id="menu535" title="Computer Accessories"><span class="menu-title">Computer Accessories</span></a><div class="childcontent cols1 ">
<div class="childcontent-inner-wrap">
<div class="childcontent-inner clearfix" style="width: 200px;"><div class="megacol column1 first" style="width: 200px;"><ul class="megamenu level2"><li  class="mega first"><a href="/wereach/index.php?option=com_virtuemart&amp;view=category&amp;virtuemart_category_id=15&amp;categorylayout=0&amp;Itemid=557"  class="mega first" id="menu557" title="External hard disks"><span class="menu-title">External hard disks</span></a></li><li  class="mega"><a href="/wereach/index.php?option=com_virtuemart&amp;view=category&amp;virtuemart_category_id=15&amp;categorylayout=0&amp;Itemid=558"  class="mega" id="menu558" title="Pen Drives"><span class="menu-title">Pen Drives</span></a></li><li  class="mega"><a href="/wereach/index.php?option=com_virtuemart&amp;view=category&amp;virtuemart_category_id=15&amp;categorylayout=0&amp;Itemid=559"  class="mega" id="menu559" title="Head Phones"><span class="menu-title">Head Phones</span></a></li><li  class="mega"><a href="/wereach/index.php?option=com_virtuemart&amp;view=category&amp;virtuemart_category_id=15&amp;categorylayout=0&amp;Itemid=564"  class="mega" id="menu564" title="Headset"><span class="menu-title">Headset</span></a></li><li  class="mega last"><a href="/wereach/index.php?option=com_virtuemart&amp;view=category&amp;virtuemart_category_id=15&amp;categorylayout=0&amp;Itemid=565"  class="mega last" id="menu565" title="Batteries"><span class="menu-title">Batteries</span></a></li></ul></div></div>
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
</ul></div><div id="jainfo-block-top.cpanel" class="jainfo-block"></div>            <div id="ja-topsl"
            	class="wrap ">
                   <div class="main">
                           <div class="main-inner1 clearfix">
                <div id="jainfo-block-top.topsl" class="jainfo-block"><!-- SPOTLIGHT -->
<div class="ja-box column ja-box-left" style="width: 75%;">
    <div id="jainfo-pos-pos.user1" class="jainfo-pos-modules">	<div class="ja-moduletable moduletable no-padding  clearfix" id="Mod97">
						<div class="ja-box-ct clearfix">
		
<div id="ja-ss-97" class="ja-ss no-padding ja-ss-wrap slide"  style="visibility: hidden">
	<div class="ja-ss-items">
			<div class="ja-ss-item">
			<img src="/wereach/images/resized/images/slider/slider2_720_480.jpg" alt=""/>

									<div class="ja-ss-mask"></div>
		</div>
			<div class="ja-ss-item">
			<img src="/wereach/images/resized/images/slider/slider3_720_480.jpg" alt=""/>

									<div class="ja-ss-mask"></div>
		</div>
			<div class="ja-ss-item">
			<img src="/wereach/images/resized/images/slider/slider4_720_480.jpg" alt=""/>

									<div class="ja-ss-mask"></div>
		</div>
		</div>
	
		<div class="ja-ss-thumbs-wrap">
		<div class="ja-ss-thumbs"><!--
					--><div class="ja-ss-thumb">
				<img src="/wereach/images/resized/images/slider/slider2_8_8.jpg" alt="Photo Thumbnail" />
			</div><!-- //ja-ss-thumb
					--><div class="ja-ss-thumb">
				<img src="/wereach/images/resized/images/slider/slider3_8_8.jpg" alt="Photo Thumbnail" />
			</div><!-- //ja-ss-thumb
					--><div class="ja-ss-thumb">
				<img src="/wereach/images/resized/images/slider/slider4_8_8.jpg" alt="Photo Thumbnail" />
			</div><!-- //ja-ss-thumb
				--></div>
	</div>
		</div><script type="text/javascript">
	window.addEvent('domready', function(){
		window.jassliteInst = window.jassliteInst || [];
		window.jassliteInst.push(new JASliderCSS('ja-ss-97', {
			interval: 5000,
			duration: 1000,
			
			repeat: true,
			autoplay: 1,
			
			navigation: 0,
			thumbnail: 1,
			
			urls:['','',''],
			targets:['','','']
		}));
	});
</script>
<!-- Fix animation in IE -->
<!--[if IE]>
	<script type="text/javascript">
		jassurl = '/wereach/modules/mod_jaslideshowlite/assets/'; 
	</script>
	<script type="text/javascript" src="/wereach/modules/mod_jaslideshowlite/assets/js/iefix.js"></script>
<![endif]-->

		</div>
    </div>
	</div>
</div>
<div class="ja-box column ja-box-right" style="width: 25%;">
    <div id="jainfo-pos-pos.user2" class="jainfo-pos-modules">	<div class="ja-moduletable moduletable pattern-w badge-new title-red  clearfix" id="Mod103">
		<span class="badge">&nbsp;</span>
				<div class="ja-box-ct clearfix">
		

<div class="custom pattern-w badge-new title-red"  >
	<p><img src="images/img1.jpg" border="0" alt="" /></p></div>
		</div>
    </div>
		<div class="ja-moduletable moduletable pattern-r badge-hot title-white  clearfix" id="Mod104">
		<span class="badge">&nbsp;</span>
				<div class="ja-box-ct clearfix">
		

<div class="custom pattern-r badge-hot title-white"  >
	<p><img src="images/img2.jpg" border="0" alt="" /></p></div>
		</div>
    </div>
	</div>
</div>
<!-- SPOTLIGHT -->

<script type="text/javascript">
    window.addEvent('load', function (){ equalHeight ('#ja-topsl .ja-box') });
</script></div>                </div>
                            </div>
                        </div>
                        <div id="ja-topsl1"
            	class="wrap ">
                   <div class="main">
                           <div class="main-inner1 clearfix">
                <div id="jainfo-block-top.topsl1" class="jainfo-block"><!-- SPOTLIGHT -->
<div class="ja-box column ja-box-left" style="width: 25%;">
    <div id="jainfo-pos-pos.user3" class="jainfo-pos-modules">	<div class="ja-moduletable moduletable  clearfix" id="Mod0">
						<div class="ja-box-ct clearfix">
		user3		</div>
    </div>
	</div>
</div>
<div class="ja-box column ja-box-center" style="width: 25%;">
    <div id="jainfo-pos-pos.user4" class="jainfo-pos-modules">	<div class="ja-moduletable moduletable  clearfix" id="Mod0">
						<div class="ja-box-ct clearfix">
		user4		</div>
    </div>
	</div>
</div>
<div class="ja-box column ja-box-center" style="width: 25%;">
    <div id="jainfo-pos-pos.user5" class="jainfo-pos-modules">	<div class="ja-moduletable moduletable  clearfix" id="Mod0">
						<div class="ja-box-ct clearfix">
		user5		</div>
    </div>
	</div>
</div>
<div class="ja-box column ja-box-right" style="width: 25%;">
    <div id="jainfo-pos-pos.user6" class="jainfo-pos-modules">	<div class="ja-moduletable moduletable  clearfix" id="Mod0">
						<div class="ja-box-ct clearfix">
		user6		</div>
    </div>
	</div>
</div>
<!-- SPOTLIGHT -->

<script type="text/javascript">
    window.addEvent('load', function (){ equalHeight ('#ja-topsl1 .ja-box') });
</script></div>                </div>
                            </div>
                        </div>
                        <div id="ja-topsl2"
            	class="wrap ">
                   <div class="main">
                           <div class="main-inner1 clearfix">
                <div id="jainfo-block-top.topsl2" class="jainfo-block"><!-- SPOTLIGHT -->
<div class="ja-box column ja-box-left" style="width: 25%;">
    <div id="jainfo-pos-pos.user7" class="jainfo-pos-modules">	<div class="ja-moduletable moduletable  clearfix" id="Mod0">
						<div class="ja-box-ct clearfix">
		user7		</div>
    </div>
	</div>
</div>
<div class="ja-box column ja-box-center" style="width: 25%;">
    <div id="jainfo-pos-pos.user8" class="jainfo-pos-modules">	<div class="ja-moduletable moduletable  clearfix" id="Mod0">
						<div class="ja-box-ct clearfix">
		user8		</div>
    </div>
	</div>
</div>
<div class="ja-box column ja-box-center" style="width: 25%;">
    <div id="jainfo-pos-pos.user9" class="jainfo-pos-modules">	<div class="ja-moduletable moduletable  clearfix" id="Mod0">
						<div class="ja-box-ct clearfix">
		user9		</div>
    </div>
	</div>
</div>
<div class="ja-box column ja-box-right" style="width: 25%;">
    <div id="jainfo-pos-pos.user10" class="jainfo-pos-modules">	<div class="ja-moduletable moduletable  clearfix" id="Mod0">
						<div class="ja-box-ct clearfix">
		user10		</div>
    </div>
	</div>
</div>
<!-- SPOTLIGHT -->

<script type="text/javascript">
    window.addEvent('load', function (){ equalHeight ('#ja-topsl2 .ja-box') });
</script></div>                </div>
                            </div>
                        </div>
            
    <!-- MAIN CONTAINER -->
    <div id="ja-container" class="wrap ja-r1">
               <div class="main">
                           <div class="main-inner1 clearfix">
                        <div id="ja-mainbody" style="width:75%">
            <!-- CONTENT -->
            <div id="ja-main" style="width:100%">
            <div class="inner clearfix">

                <div id="jainfo-pos-message." class="jainfo-pos-message">
<div id="system-message-container">
</div></div>
                                <div id="ja-content-mass-top" class="ja-mass ja-mass-top clearfix">
                    <div id="jainfo-block-middle.content-mass-top" class="jainfo-block"><div id="jainfo-pos-pos.content-mass-top" class="jainfo-pos-modules">		<div class="moduletable">
					content-mass-top		</div>
	</div></div>
                      </div>
                
                <div id="ja-contentwrap" class="clearfix ">
                    <div id="ja-content" class="column" style="width:100%">
                        <div id="ja-current-content" class="column" style="width:100%">
                            
                                                        <div id="ja-content-main" class="ja-content-main clearfix">
                                <div id="jainfo-pos-content" class="jainfo-pos-component">

<div class="blog-featured hide-content">





</div>

</div>                            </div>
                            
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
                    <div id="jainfo-block-middle.right1" class="jainfo-block"><div id="jainfo-pos-pos.left" class="jainfo-pos-modules">	<div class="ja-moduletable moduletable  clearfix" id="Mod0">
						<div class="ja-box-ct clearfix">
		left		</div>
    </div>
	</div>
        <div id="jainfo-pos-pos.right" class="jainfo-pos-modules">	<div class="ja-moduletable moduletable  clearfix" id="Mod0">
						<div class="ja-box-ct clearfix">
		right		</div>
    </div>
	</div></div>                </div>
                
                            </div>
                                </div>
        <!-- //RIGHT COLUMN-->
                            </div>
                            </div>
                </div>
        <!-- //MAIN CONTAINER -->

                <div id="ja-botsl"
            	class="wrap ">
                   <div class="main">
                           <div class="main-inner1 clearfix">
                <div id="jainfo-block-bottom.botsl" class="jainfo-block"><!-- SPOTLIGHT -->
<div class="ja-box column ja-box-left" style="width: 25%;">
    <div id="jainfo-pos-pos.user11" class="jainfo-pos-modules">	<div class="ja-moduletable moduletable pattern-w  clearfix" id="Mod102">
						<h3><span>News</span></h3>
				<div class="ja-box-ct clearfix">
		<div class="ja-sidenews-list clearfix">
			<div class="ja-slidenews-item">

						
			<div class="ja-item-content">
									<span class="ja-createdate">2012-09-12</span>
				
				<h4 class="item-title">
					<a class="ja-title" href="/wereach/index.php?option=com_content&amp;view=article&amp;id=112:rob-zombie-s-rock-advice-lose-the-tude-trust-thyself&amp;catid=87:news">Rob Zombie's Rock Advice: Lose the 'Tude, Trust Thyself</a>
				</h4>

					
					<p class="item-desc">
Phasellus pretium laoreet est, interdum bibendum leo auctor ut. Suspendisse ac diam felis, et facilisis diam....</p>
				
									<a class="readon" href="/wereach/index.php?option=com_content&amp;view=article&amp;id=112:rob-zombie-s-rock-advice-lose-the-tude-trust-thyself&amp;catid=87:news"> More detail</a>
				
			</div>
		</div>
  </div>		</div>
    </div>
	</div>
</div>
<div class="ja-box column ja-box-center" style="width: 25%;">
    <div id="jainfo-pos-pos.user12" class="jainfo-pos-modules">	<div class="ja-moduletable moduletable pattern-w  clearfix" id="Mod105">
						<h3><span>Testimonial</span></h3>
				<div class="ja-box-ct clearfix">
		

<div class="custom pattern-w"  >
	<div class="img-photo clearfix"><span class="highslide-img"> <a  rel ="jagrouppopupgroup" class="fancyboxpopupgroup"  href="images/Tsetimonial-img/image1.jpg" title="Sample Images" >
	<span>	
		<img src="images/Tsetimonial-img/image1.jpg" border="0" alt="" />	</span>
</a>

<script language="javascript" type="text/javascript">
/* <![CDATA[ */
	jQuery(document).ready(function() {
		(window.japuQuery || window.jQuery)("a.fancyboxpopupgroup").fancybox({
			imageScale:1,
			overlayShow: 1,
			overlayOpacity: 0.7,
									centerOnScroll: 1		});
	});
/* ]]> */
</script></span> <span class="highslide-img"> <a  rel ="jagrouppopupgroup" class="fancyboxpopupgroup"  href="images/demo/gallery/thumb-2.jpg" title="Sample Images" >
	<span>	
		<img src="images/Tsetimonial-img/image2.jpg" border="0" alt="" />	</span>
</a>

<script language="javascript" type="text/javascript">
/* <![CDATA[ */
	jQuery(document).ready(function() {
		(window.japuQuery || window.jQuery)("a.fancyboxpopupgroup").fancybox({
			imageScale:1,
			overlayShow: 1,
			overlayOpacity: 0.7,
									centerOnScroll: 1		});
	});
/* ]]> */
</script></span> <span class="highslide-img"> <a  rel ="jagrouppopupgroup" class="fancyboxpopupgroup"  href="images/demo/gallery/thumb-3.jpg" title="Sample Images" >
	<span>	
		 <img src="images/Tsetimonial-img/image3.jpg" border="0" alt="" />	</span>
</a>

<script language="javascript" type="text/javascript">
/* <![CDATA[ */
	jQuery(document).ready(function() {
		(window.japuQuery || window.jQuery)("a.fancyboxpopupgroup").fancybox({
			imageScale:1,
			overlayShow: 1,
			overlayOpacity: 0.7,
									centerOnScroll: 1		});
	});
/* ]]> */
</script></span> <span class="highslide-img"> <a  rel ="jagrouppopupgroup" class="fancyboxpopupgroup"  href="images/demo/gallery/thumb-4.jpg" title="Sample Images" >
	<span>	
		 <img src="images/Tsetimonial-img/image4.jpg" border="0" alt="" />	</span>
</a>

<script language="javascript" type="text/javascript">
/* <![CDATA[ */
	jQuery(document).ready(function() {
		(window.japuQuery || window.jQuery)("a.fancyboxpopupgroup").fancybox({
			imageScale:1,
			overlayShow: 1,
			overlayOpacity: 0.7,
									centerOnScroll: 1		});
	});
/* ]]> */
</script></span> <span class="highslide-img"> <a  rel ="jagrouppopupgroup" class="fancyboxpopupgroup"  href="images/demo/gallery/thumb-5.jpg" title="Sample Images" >
	<span>	
		 <img src="images/Tsetimonial-img/image5.jpg" border="0" alt="" />	</span>
</a>

<script language="javascript" type="text/javascript">
/* <![CDATA[ */
	jQuery(document).ready(function() {
		(window.japuQuery || window.jQuery)("a.fancyboxpopupgroup").fancybox({
			imageScale:1,
			overlayShow: 1,
			overlayOpacity: 0.7,
									centerOnScroll: 1		});
	});
/* ]]> */
</script></span> <span class="highslide-img"> <a  rel ="jagrouppopupgroup" class="fancyboxpopupgroup"  href="images/demo/gallery/thumb-6.jpg" title="Sample Images" >
	<span>	
		 <img src="images/Tsetimonial-img/image6.jpg" border="0" alt="" />	</span>
</a>

<script language="javascript" type="text/javascript">
/* <![CDATA[ */
	jQuery(document).ready(function() {
		(window.japuQuery || window.jQuery)("a.fancyboxpopupgroup").fancybox({
			imageScale:1,
			overlayShow: 1,
			overlayOpacity: 0.7,
									centerOnScroll: 1		});
	});
/* ]]> */
</script></span></div>
<p class="desc">Lorem ipsum dolor sit amet, quaerat ipsum, a libero. Fringilla wisi.</p>
<p><a class="readon" href="#">View More</a></p></div>
		</div>
    </div>
	</div>
</div>
<div class="ja-box column ja-box-center" style="width: 25%;">
    <div id="jainfo-pos-pos.user13" class="jainfo-pos-modules">	<div class="ja-moduletable moduletable pattern-w  clearfix" id="Mod109">
						<h3><span>Short Video</span></h3>
				<div class="ja-box-ct clearfix">
		

<div class="custom pattern-w"  >
	<p><img src="images/video.jpg" border="0" alt="" /></p>
<p class="wrap-ja-title"><a class="ja-title" href="#">Best Of You After The Anthems</a></p>
<p class="desc">Etiam malesuada mauris ac erat ulputate ornare. Nam viverra quam in est. Donec mollis, erat adipiscing rhoncus euismod, lectus dui condimentum metus.</p>
<p><a class="readon" href="#">Watch Now</a></p></div>
		</div>
    </div>
	</div>
</div>
<div class="ja-box column ja-box-right" style="width: 25%;">
    <div id="jainfo-pos-pos.user14" class="jainfo-pos-modules">	<div class="ja-moduletable moduletable pattern-r  clearfix" id="Mod110">
						<div class="ja-box-ct clearfix">
		

<div class="custom pattern-r"  >
	<p><img src="images/img4.jpg" border="0" alt="" /></p></div>
		</div>
    </div>
	</div>
</div>
<!-- SPOTLIGHT -->

<script type="text/javascript">
    window.addEvent('load', function (){ equalHeight ('#ja-botsl .ja-box') });
</script></div>                </div>
                            </div>
                        </div>
                        <div id="ja-navhelper"
            	class="wrap ">
                   <div class="main">
                           <div class="main-inner1 clearfix">
                <div id="jainfo-block-bottom.navhelper" class="jainfo-block"><div class="ja-breadcrums">
    <div id="jainfo-pos-mod.breadcrumbs" class="jainfo-pos-module"></div>
</div>

<ul class="no-display">
    <li><a href="#ja-content" title="Skip to content">Skip to content</a></li>
</ul></div>                </div>
                            </div>
                        </div>
                        <div id="ja-full-bg"
            	class="wrap  clearfix">
        <div id="jainfo-block-bottom.full-bg" class="jainfo-block"><div id="jainfo-pos-pos.fullbg" class="jainfo-pos-modules">

<div class="custom"  >
	<div class="main-background">&nbsp;</div></div>
</div></div>            </div>
                        <div id="ja-botsl1"
            	class="wrap ">
                   <div class="main">
                           <div class="main-inner1 clearfix">
                <div id="jainfo-block-bottom.botsl1" class="jainfo-block"><!-- SPOTLIGHT -->
<div class="ja-box column ja-box-left" style="width: 50%;">
    <div id="jainfo-pos-pos.user15" class="jainfo-pos-modules">	<div class="ja-moduletable moduletable big-title  clearfix" id="Mod101">
						<div class="ja-box-ct clearfix">
		

<div class="custom big-title"  >
	<p style="text-align: justify; font-size: 14px; color: #030303;">We provide quick repair and parts replacement service for all your advertising and editorial systems. We also have parts available for purchase and have the fastest turn-around time in the industry. </p></div>
		</div>
    </div>
	</div>
</div>
<div class="ja-box column ja-box-center" style="width: 25%;">
    <div id="jainfo-pos-pos.user16" class="jainfo-pos-modules">	<div class="ja-moduletable moduletable  clearfix" id="Mod100">
						<h3><span>Navigations</span></h3>
				<div class="ja-box-ct clearfix">
		
<ul class="menu">
<li class="item-526"><a href="/wereach/index.php?option=com_content&amp;view=article&amp;id=161&amp;Itemid=526" >Testimonial</a></li><li class="item-527"><a href="/wereach/index.php?option=com_content&amp;view=article&amp;id=162&amp;Itemid=527" >Faq's</a></li><li class="item-528"><a href="/wereach/index.php?option=com_content&amp;view=article&amp;id=163&amp;Itemid=528" >Clients</a></li><li class="item-529"><a href="/wereach/index.php?option=com_content&amp;view=article&amp;id=165&amp;Itemid=529" >Privacy Policy</a></li><li class="item-531"><a href="/wereach/index.php?option=com_content&amp;view=article&amp;id=164&amp;Itemid=531" >Contact Us</a></li></ul>
		</div>
    </div>
	</div>
</div>
<div class="ja-box column ja-box-right" style="width: 25%;">
    <div id="jainfo-pos-pos.user17" class="jainfo-pos-modules">	<div class="ja-moduletable moduletable  clearfix" id="Mod99">
						<h3><span>Newsletter</span></h3>
				<div class="ja-box-ct clearfix">
		<div class="acymailing_module" id="acymailing_module_formAcymailing54581">
	<div class="acymailing_fulldiv" id="acymailing_fulldiv_formAcymailing54581"  >
		<form id="formAcymailing54581" action="/wereach/index.php" onsubmit="return submitacymailingform('optin','formAcymailing54581')" method="post" name="formAcymailing54581"  >
		<div class="acymailing_module_form" >
			<div class="acymailing_introtext"><span style="color:#000;font-size:12px;text-align:justify;">Make sure you dont miss interesting happenings by joining our newsletter program. We don't do spam. Ever. Because that sucks.</span></div>						<div class="acymailing_form">
					<p class="onefield fieldacyemail" id="field_email_formAcymailing54581">								<span class="acyfield_email"><input id="user_email_formAcymailing54581" placeholder="E-mail" class="inputbox" type="text" name="user[email]" style="width:80%" value="" /></span>
							</p>
					
					<p class="acysubbuttons">
												<input class="button subbutton btn btn-primary" type="submit" value="Subscribe" name="Submit" onclick="try{ return submitacymailingform('optin','formAcymailing54581'); }catch(err){alert('The form could not be submitted '+err);return false;}"/>
											</p>
				</div>
						<input type="hidden" name="ajax" value="0"/>
			<input type="hidden" name="ctrl" value="sub"/>
			<input type="hidden" name="task" value="notask"/>
			<input type="hidden" name="redirect" value="http%3A%2F%2Fwebdesigninbangalore.co.in%2Fwereach%2F%3Ftp%3D1"/>
			<input type="hidden" name="redirectunsub" value="http%3A%2F%2Fwebdesigninbangalore.co.in%2Fwereach%2F%3Ftp%3D1"/>
			<input type="hidden" name="option" value="com_acymailing"/>
						<input type="hidden" name="hiddenlists" value="1"/>
			<input type="hidden" name="acyformname" value="formAcymailing54581" />
									</div>
		</form>
	</div>
	</div>
		</div>
    </div>
	</div>
</div>
<!-- SPOTLIGHT -->

<script type="text/javascript">
    window.addEvent('load', function (){ equalHeight ('#ja-botsl1 .ja-box') });
</script></div>                </div>
                            </div>
                        </div>
                        <div id="ja-footer"
            	class="wrap ">
                   <div class="main clearfix">
           <div id="jainfo-block-bottom.footer" class="jainfo-block"><div class="ja-copyright">
    <div id="jainfo-pos-pos.footer" class="jainfo-pos-modules">

<div class="custom"  >
	<p style="text-align: center;">© 2014 WeReach Infotech. All rights reserved.| Designed and Developed By: <a href="http://www.lensinteractive.com/" target="_blank">Lens Interactive</a></p></div>
</div>
</div>

<div class="ja-footnav">
    <div id="jainfo-pos-pos.footnav" class="jainfo-pos-modules">footnav</div>
</div></div>            </div>
                        </div>
            
</div>


<div id="jainfo-pos-pos.debug" class="jainfo-pos-modules">debug</div>

    <script type="text/javascript">
    var jalayout={"name":"layout","data":"\n\t\n\t\n\t\n\t\n\t\n\t\n","attributes":{"name":"desktop"},"children":[{"name":"stylesheets","data":"\n\t\t\n\t\t\n\t\t\n\t\t\n\t\t\n\t","attributes":[],"children":[{"name":"file","data":"css\/layout.css","attributes":[],"children":[],"index":0},{"name":"file","data":"css\/template.css","attributes":[],"children":[]},{"name":"file","data":"css\/layout-mobile.css","attributes":{"media":"only screen and (max-width:719px)"},"children":[]},{"name":"file","data":"css\/layout-mobile-port.css","attributes":{"media":"only screen and (max-width:479px)"},"children":[]},{"name":"file","data":"css\/layout-tablet.css","attributes":{"media":"only screen and (min-width:720px) and (max-width: 985px)"},"children":[]},{"name":"file","data":"css\/layout.css","attributes":[],"children":[]},{"name":"file","data":"css\/template.css","attributes":[],"children":[]},{"name":"file","data":"css\/template-ie.css","attributes":{"condition":"ie"},"children":[]},{"name":"file","data":"css\/template-ie7.css","attributes":{"condition":"ie 7"},"children":[]},{"name":"file","data":"css\/template-ie8.css","attributes":{"condition":"ie 8"},"children":[]},{"name":"file","data":"css\/template-ie9.css","attributes":{"condition":"ie 9"},"children":[]},{"name":"file","data":"css\/color.css","attributes":[],"children":[]},{"name":"file","data":"css\/usertools.css","attributes":[],"children":[]},{"name":"file","data":"css\/css3.css","attributes":[],"children":[]},{"name":"file","data":"\/media\/jui\/css\/icomoon.css","attributes":{"compatible":"3.0"},"children":[]}],"index":0},{"name":"scripts","data":"\n\t","attributes":[],"children":[]},{"name":"blocks","data":"\n\t\t\n\t\t\n\t\t\n\t\t\n\t\t\n\t\t\n\t\t\n\t\t\t\n\t\t\n\t","attributes":{"name":"top","style":"xhtml"},"children":[{"name":"block","data":"absolute","attributes":{"name":"absolute","type":"modules","style":"raw","parent":"top"},"children":[],"index":0},{"name":"block","data":"top-panel","attributes":{"name":"top-panel","type":"modules","style":"raw","main-inner":"1","parent":"top"},"children":[],"index":1},{"name":"block","data":"","attributes":{"name":"tophead","type":"tophead","main-inner":"1","parent":"top"},"children":[],"index":2},{"name":"block","data":"","attributes":{"name":"header","type":"header","main-inner":"1","parent":"top"},"children":[],"index":3},{"name":"block","data":"","attributes":{"name":"mainnav","type":"mainnav","main-inner":"1","parent":"top"},"children":[],"index":4},{"name":"block","data":"","attributes":{"name":"cpanel","type":"usertools\/cpanel","parent":"top","no-wrap":1,"no-main":1},"children":[],"index":5},{"name":"block","data":"user1,user2","attributes":{"name":"topsl","type":"spotlight","main-inner":"1","special":"left","specialwidth":"75","parent":"top"},"children":[]},{"name":"block","data":"user3,user4,user5,user6","attributes":{"name":"topsl1","type":"spotlight","main-inner":"1","parent":"top"},"children":[]},{"name":"block","data":"user7,user8,user9,user10","attributes":{"name":"topsl2","type":"spotlight","main-inner":"1","parent":"top"},"children":[]}],"index":2},{"name":"blocks","data":"\n\t\t\n\t\t\n\t","attributes":{"name":"middle","colwidth":"25","main-inner":"1"},"children":[{"name":"block","data":"content-mass-top","attributes":{"name":"content-mass-top","type":"modules","style":"xhtml","parent":"middle"},"children":[],"index":0},{"name":"block","data":"","attributes":{"name":"footer","type":"footer","parent":"bottom"},"children":[]}],"index":3},{"name":"blocks","data":"\n\t\t\n\t\t\n\t\t\n\t\t\n\t\t\n\t","attributes":{"name":"bottom","style":"xhtml"},"children":[{"name":"block","data":"user11,user12,user13,user14","attributes":{"name":"botsl","type":"spotlight","main-inner":"1","parent":"bottom"},"children":[]},{"name":"block","data":"","attributes":{"name":"navhelper","type":"navhelper","main-inner":"1","parent":"bottom"},"children":[]},{"name":"block","data":"fullbg","attributes":{"name":"full-bg","type":"modules","no-main":"1","style":"raw","parent":"bottom"},"children":[]},{"name":"block","data":"user15,user16,user17","attributes":{"name":"botsl1","type":"spotlight","main-inner":"1","special":"left","specialwidth":"50","parent":"bottom"},"children":[]},{"name":"block","data":"","attributes":{"name":"footer","type":"footer","parent":"bottom"},"children":[]}],"index":4}]};
    var t3info='1';
    </script>
                    <link type="text/css" rel="stylesheet" href="/wereach/plugins/system/jat3/jat3/base-themes/default/layoutinfo/style.css" />
        <script type="text/javascript" src="/wereach/plugins/system/jat3/jat3/base-themes/default/layoutinfo/script.js"></script>
</body>

</html>";