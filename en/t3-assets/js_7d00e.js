/* js_0a9f84eb8fc2e7ffa76deff63c9af275.jquery.noConflict.js */
jQuery.noConflict();;;

/* js_eccc5d1e25b40111e8cf2e8d719c31f3.vmsite.js */
(function($){var undefined,methods={list:function(options){var dest=options.dest;var ids=options.ids;var prefix=options.prefiks;methods.update(this,dest,ids,prefix);$(this).change(function(){methods.update(this,dest,ids,prefix)});},update:function(org,dest,ids,prefix){var opt=$(org),optValues=opt.val()||[],byAjax=[];if(!$.isArray(optValues))optValues=jQuery.makeArray(optValues);if(typeof oldValues!=="undefined"){$.each(oldValues,function(key,oldValue){if(($.inArray(oldValue,optValues))<0)$("#"+prefix+"group"+oldValue).remove();});}
$.each(optValues,function(optkey,optValue){if(opt.data('d'+optValue)===undefined)byAjax.push(optValue);});if(byAjax.length>0){$.getJSON('index.php?option=com_virtuemart&view=state&format=json&virtuemart_country_id='+byAjax,function(result){var virtuemart_state_id=$('#'+prefix+'virtuemart_state_id');var status=virtuemart_state_id.attr('required');if(status=='required'){if(result[byAjax].length>0){virtuemart_state_id.attr('required','required');}else{virtuemart_state_id.removeAttr('required');}}
$.each(result,function(key,value){if(value.length>0){opt.data('d'+key,value);}else{opt.data('d'+key,0);}});methods.addToList(opt,optValues,dest,prefix);if(typeof ids!=="undefined"){var states=ids.length?ids.split(','):[];$.each(states,function(k,id){$(dest).find('[value='+id+']').attr("selected","selected");});}
$(dest).trigger("liszt:updated");});}else{methods.addToList(opt,optValues,dest,prefix)
$(dest).trigger("liszt:updated");}
oldValues=optValues;},addToList:function(opt,values,dest,prefix){$.each(values,function(dataKey,dataValue){var groupExist=$("#"+prefix+"group"+dataValue+"").size();if(!groupExist){var datas=opt.data('d'+dataValue);if(datas.length>0){var label=opt.find("option[value='"+dataValue+"']").text();var group='<optgroup id="'+prefix+'group'+dataValue+'" label="'+label+'">';$.each(datas,function(key,value){if(value)group+='<option value="'+value.virtuemart_state_id+'">'+value.state_name+'</option>';});group+='</optgroup>';$(dest).append(group);}}});}};$.fn.vm2front=function(method){if(methods[method]){return methods[method].apply(this,Array.prototype.slice.call(arguments,1));}else if(typeof method==='object'||!method){return methods.init.apply(this,arguments);}else{$.error('Method '+method+' does not exist on Vm2 front jQuery library');}};})(jQuery);;

/* js_1bc293135f3a0faec22169b74731dc3a.facebox.js */
(function($){$.facebox=function(data,klass){$.facebox.loading()
if(data.ajax)fillFaceboxFromAjax(data.ajax,klass)
else if(data.iframe)fillFaceboxFromHref(data.iframe,klass,data.rev)
else if(data.image)fillFaceboxFromImage(data.image,klass)
else if(data.div)fillFaceboxFromHref(data.div,klass,data.rev)
else if(data.text)fillFaceboxFromText(data.text,klass)
else if($.isFunction(data))data.call($)
else $.facebox.reveal(data,klass)}
$.extend($.facebox,{settings:{opacity:0.2,overlay:true,loadingImage:'components/com_virtuemart/assets/images/facebox/loading.gif',closeImage:'components/com_virtuemart/assets/images/facebox/closelabel.png',imageTypes:['png','jpg','jpeg','gif'],faceboxHtml:'\
    <div id="facebox" style="display:none;"> \
      <div class="popup"> \
        <div class="content"> \
        </div> \
        <a href="#" class="close"></a> \
      </div> \
    </div>'},loading:function(){init()
if($('#facebox .loading').length==1)return true
showOverlay()
$('#facebox .content').empty()
$('#facebox .body').children().hide().end().append('<div class="loading"><img src="'+$.facebox.settings.loadingImage+'"/></div>')
$('#facebox').css({top:getPageScroll()[1]+($(window).height()/10),left:($(window).width()-$('#facebox').width())/2}).show()
$(document).bind('keydown.facebox',function(e){if(e.keyCode==27)$.facebox.close()
return true})
$(document).trigger('loading.facebox')},reveal:function(data,klass){$(document).trigger('beforeReveal.facebox')
if(klass)$('#facebox .content').addClass(klass)
$('#facebox .content').append(data)
$('#facebox .loading').remove()
$('#facebox .body').children().fadeIn('normal')
$('#facebox').css('left',$(window).width()/2-($('#facebox .popup').width()/2))
$(document).trigger('reveal.facebox').trigger('afterReveal.facebox')},close:function(){$(document).trigger('close.facebox')
return false}})
$.fn.facebox=function(settings){if($(this).length==0)return
init(settings)
function clickHandler(){$.facebox.loading(true)
var klass=this.rel.match(/facebox\[?\.(\w+)\]?/)
if(klass)klass=klass[1]
fillFaceboxFromHref(this.href,klass,this.rev)
return false}
return this.bind('click.facebox',clickHandler)}
function init(settings){if($.facebox.settings.inited)return true
else $.facebox.settings.inited=true
$(document).trigger('init.facebox')
makeCompatible()
var imageTypes=$.facebox.settings.imageTypes.join('|')
$.facebox.settings.imageTypesRegexp=new RegExp('\.('+imageTypes+')$','i')
if(settings)$.extend($.facebox.settings,settings)
$('body').append($.facebox.settings.faceboxHtml)
var preload=[new Image(),new Image()]
preload[0].src=$.facebox.settings.closeImage
preload[1].src=$.facebox.settings.loadingImage
$('#facebox').find('.b:first, .bl').each(function(){preload.push(new Image())
preload.slice(-1).src=$(this).css('background-image').replace(/url\((.+)\)/,'$1')})
$('#facebox .close').click($.facebox.close)
$('#facebox .close_image').attr('src',$.facebox.settings.closeImage)}
function getPageScroll(){var xScroll,yScroll;if(self.pageYOffset){yScroll=self.pageYOffset;xScroll=self.pageXOffset;}else if(document.documentElement&&document.documentElement.scrollTop){yScroll=document.documentElement.scrollTop;xScroll=document.documentElement.scrollLeft;}else if(document.body){yScroll=document.body.scrollTop;xScroll=document.body.scrollLeft;}
return new Array(xScroll,yScroll)}
function getPageHeight(){var windowHeight
if(self.innerHeight){windowHeight=self.innerHeight;}else if(document.documentElement&&document.documentElement.clientHeight){windowHeight=document.documentElement.clientHeight;}else if(document.body){windowHeight=document.body.clientHeight;}
return windowHeight}
function makeCompatible(){var $s=$.facebox.settings
$s.loadingImage=$s.loading_image||$s.loadingImage
$s.closeImage=$s.close_image||$s.closeImage
$s.imageTypes=$s.image_types||$s.imageTypes
$s.faceboxHtml=$s.facebox_html||$s.faceboxHtml}
function fillFaceboxFromHref(href,klass,rev){if(href.match(/#/)){var url=window.location.href.split('#')[0]
var target=href.replace(url,'')
if(target=='#')return
$.facebox.reveal($(target).html(),klass)}else if(rev.split('|')[0]=='iframe'){fillFaceboxFromIframe(href,klass,rev.split('|')[1],rev.split('|')[2])}else if(href.match($.facebox.settings.imageTypesRegexp)){fillFaceboxFromImage(href,klass)}else{fillFaceboxFromAjax(href,klass)}}
function fillFaceboxFromIframe(href,klass,height,width){$.facebox.reveal('<iframe scrolling="auto" marginwidth="0" width="'+width+'" height="'+height+'" frameborder="0" src="'+href+'" marginheight="0"></iframe>',klass)}
function fillFaceboxFromImage(href,klass){var image=new Image()
image.onload=function(){$.facebox.reveal('<div class="image"><img src="'+image.src+'" /></div>',klass)}
image.src=href}
function fillFaceboxFromText(text,klass){$.facebox.reveal('<div>'+text+'</div>',klass)}
function fillFaceboxFromAjax(href,klass){$.get(href,function(data){$.facebox.reveal(data,klass)})}
function skipOverlay(){return $.facebox.settings.overlay==false||$.facebox.settings.opacity===null}
function showOverlay(){if(skipOverlay())return
if($('#facebox_overlay').length==0)
$("body").append('<div id="facebox_overlay" class="facebox_hide"></div>')
$('#facebox_overlay').hide().addClass("facebox_overlayBG").css('opacity',$.facebox.settings.opacity).click(function(){$(document).trigger('close.facebox')}).fadeIn(200)
return false}
function hideOverlay(){if(skipOverlay())return
$('#facebox_overlay').fadeOut(200,function(){$("#facebox_overlay").removeClass("facebox_overlayBG")
$("#facebox_overlay").addClass("facebox_hide")
$("#facebox_overlay").remove()})
return false}
$(document).bind('close.facebox',function(){$(document).unbind('keydown.facebox')
$('#facebox').fadeOut(function(){$('#facebox .content').removeClass().addClass('content')
$('#facebox .loading').remove()
$(document).trigger('afterClose.facebox')})
hideOverlay()})
$(document).bind('afterReveal.facebox',function(){var windowHeight=$(window).height();var faceboxHeight=$('#facebox').height();if(faceboxHeight<windowHeight){var scrolltop=$(window).scrollTop();var top=Math.floor((windowHeight-faceboxHeight)/2)+scrolltop;$('#facebox').css('top',(top));}
else{$('#facebox').css('top',$(window).scrollTop());}});})(jQuery);;;

/* validate.js */
/*
		GNU General Public License version 2 or later; see LICENSE.txt
*/
Object.append(Browser.Features,{inputemail:function(){var a=document.createElement("input");a.setAttribute("type","email");return a.type!=="text"}()});
var JFormValidator=new Class({initialize:function(){this.handlers={};this.custom={};this.setHandler("username",function(a){regex=/[<|>|"|'|%|;|(|)|&]/i;return!regex.test(a)});this.setHandler("password",function(a){regex=/^\S[\S ]{2,98}\S$/;return regex.test(a)});this.setHandler("numeric",function(a){regex=/^(\d|-)?(\d|,)*\.?\d*$/;return regex.test(a)});this.setHandler("email",function(a){regex=/^[a-zA-Z0-9._-]+(\+[a-zA-Z0-9._-]+)*@([a-zA-Z0-9.-]+\.)+[a-zA-Z0-9.-]{2,4}$/;return regex.test(a)});$$("form.form-validate").each(function(a){this.attachToForm(a)},
this)},setHandler:function(a,b,c){this.handlers[a]={enabled:c==""?!0:c,exec:b}},attachToForm:function(a){a.getElements("input,textarea,select,button").each(function(a){a.hasClass("required")&&(a.set("aria-required","true"),a.set("required","required"));if((document.id(a).get("tag")=="input"||document.id(a).get("tag")=="button")&&document.id(a).get("type")=="submit"){if(a.hasClass("validate"))a.onclick=function(){return document.formvalidator.isValid(this.form)}}else if(a.addEvent("blur",function(){return document.formvalidator.validate(this)}),
a.hasClass("validate-email")&&Browser.Features.inputemail)a.type="email"})},validate:function(a){a=document.id(a);if(a.get("disabled")&&!(a.hasClass('required')))return this.handleResponse(!0,a),!0;if(a.hasClass("required"))if(a.get("tag")=="fieldset"&&(a.hasClass("radio")||a.hasClass("checkboxes")))for(var b=0;;b++)if(document.id(a.get("id")+b)){if(document.id(a.get("id")+b).checked)break}else return this.handleResponse(!1,a),!1;else if(!a.get("value"))return this.handleResponse(!1,a),!1;b=a.className&&a.className.search(/validate-([a-zA-Z0-9\_\-]+)/)!=
-1?a.className.match(/validate-([a-zA-Z0-9\_\-]+)/)[1]:"";if(b=="")return this.handleResponse(!0,a),!0;if(b&&b!="none"&&this.handlers[b]&&a.get("value")&&this.handlers[b].exec(a.get("value"))!=!0)return this.handleResponse(!1,a),!1;this.handleResponse(!0,a);return!0},isValid:function(a){for(var b=!0,a=a.getElements("fieldset").concat(Array.from(a.elements)),c=0;c<a.length;c++)this.validate(a[c])==!1&&(b=!1);(new Hash(this.custom)).each(function(a){a.exec()!=!0&&(b=!1)});return b},handleResponse:function(a,
b){b.labelref||$$("label").each(function(a){if(a.get("for")==b.get("id"))b.labelref=a});a==!1?(b.addClass("invalid"),b.set("aria-invalid","true"),b.labelref&&(document.id(b.labelref).addClass("invalid"),document.id(b.labelref).set("aria-invalid","true"))):(b.removeClass("invalid"),b.set("aria-invalid","false"),b.labelref&&(document.id(b.labelref).removeClass("invalid"),document.id(b.labelref).set("aria-invalid","false")))}});document.formvalidator=null;
window.addEvent("domready",function(){document.formvalidator=new JFormValidator});;

/* modal.js */
/*
		MIT-style license
 @author		Harald Kirschner <mail [at] digitarald.de>
 @author		Rouven Weßling <me [at] rouvenwessling.de>
 @copyright	Author
*/
var SqueezeBox={presets:{onOpen:function(){},onClose:function(){},onUpdate:function(){},onResize:function(){},onMove:function(){},onShow:function(){},onHide:function(){},size:{x:600,y:450},sizeLoading:{x:200,y:150},marginInner:{x:20,y:20},marginImage:{x:50,y:75},handler:!1,target:null,closable:!0,closeBtn:!0,zIndex:65555,overlayOpacity:0.7,classWindow:"",classOverlay:"",overlayFx:{},resizeFx:{},contentFx:{},parse:!1,parseSecure:!1,shadow:!0,overlay:!0,document:null,ajaxOptions:{}},initialize:function(a){if(this.options)return this;
this.presets=Object.merge(this.presets,a);this.doc=this.presets.document||document;this.options={};this.setOptions(this.presets).build();this.bound={window:this.reposition.bind(this,[null]),scroll:this.checkTarget.bind(this),close:this.close.bind(this),key:this.onKey.bind(this)};this.isOpen=this.isLoading=!1;return this},build:function(){this.overlay=new Element("div",{id:"sbox-overlay","aria-hidden":"true",styles:{zIndex:this.options.zIndex},tabindex:-1});this.win=new Element("div",{id:"sbox-window",
role:"dialog","aria-hidden":"true",styles:{zIndex:this.options.zIndex+2}});if(this.options.shadow)if(Browser.chrome||Browser.safari&&3<=Browser.version||Browser.opera&&10.5<=Browser.version||Browser.firefox&&3.5<=Browser.version||Browser.ie&&9<=Browser.version)this.win.addClass("shadow");else if(!Browser.ie6){var a=(new Element("div",{"class":"sbox-bg-wrap"})).inject(this.win),b=function(a){this.overlay.fireEvent("click",[a])}.bind(this);"n,ne,e,se,s,sw,w,nw".split(",").each(function(c){(new Element("div",
{"class":"sbox-bg sbox-bg-"+c})).inject(a).addEvent("click",b)})}this.content=(new Element("div",{id:"sbox-content"})).inject(this.win);this.closeBtn=(new Element("a",{id:"sbox-btn-close",href:"#",role:"button"})).inject(this.win);this.closeBtn.setProperty("aria-controls","sbox-window");this.fx={overlay:(new Fx.Tween(this.overlay,Object.merge({property:"opacity",onStart:Events.prototype.clearChain,duration:250,link:"cancel"},this.options.overlayFx))).set(0),win:new Fx.Morph(this.win,Object.merge({onStart:Events.prototype.clearChain,
unit:"px",duration:750,transition:Fx.Transitions.Quint.easeOut,link:"cancel",unit:"px"},this.options.resizeFx)),content:(new Fx.Tween(this.content,Object.merge({property:"opacity",duration:250,link:"cancel"},this.options.contentFx))).set(0)};document.id(this.doc.body).adopt(this.overlay,this.win)},assign:function(a,b){return(document.id(a)||$$(a)).addEvent("click",function(){return!SqueezeBox.fromElement(this,b)})},open:function(a,b){this.initialize();null!=this.element&&this.trash();this.element=
document.id(a)||!1;this.setOptions(Object.merge(this.presets,b||{}));if(this.element&&this.options.parse){var c=this.element.getProperty(this.options.parse);c&&(c=JSON.decode(c,this.options.parseSecure))&&this.setOptions(c)}this.url=(this.element?this.element.get("href"):a)||this.options.url||"";this.assignOptions();var d=d||this.options.handler;return d?this.setContent(d,this.parsers[d].call(this,!0)):this.parsers.some(function(a,b){var c=a.call(this);return c?(this.setContent(b,c),!0):!1},this)},
fromElement:function(a,b){return this.open(a,b)},assignOptions:function(){this.overlay.addClass(this.options.classOverlay);this.win.addClass(this.options.classWindow)},close:function(a){var b="domevent"==typeOf(a);b&&a.stop();if(!this.isOpen||b&&!Function.from(this.options.closable).call(this,a))return this;this.fx.overlay.start(0).chain(this.toggleOverlay.bind(this));this.win.setProperty("aria-hidden","true");this.fireEvent("onClose",[this.content]);this.trash();this.toggleListeners();this.isOpen=
!1;return this},trash:function(){this.element=this.asset=null;this.content.empty();this.options={};this.removeEvents().setOptions(this.presets).callChain()},onError:function(){this.asset=null;this.setContent("string",this.options.errorMsg||"An error occurred")},setContent:function(a,b){if(!this.handlers[a])return!1;this.content.className="sbox-content-"+a;this.applyTimer=this.applyContent.delay(this.fx.overlay.options.duration,this,this.handlers[a].call(this,b));if(this.overlay.retrieve("opacity"))return this;
this.toggleOverlay(!0);this.fx.overlay.start(this.options.overlayOpacity);return this.reposition()},applyContent:function(a,b){if(this.isOpen||this.applyTimer)this.applyTimer=clearTimeout(this.applyTimer),this.hideContent(),a?(this.isLoading&&this.toggleLoading(!1),this.fireEvent("onUpdate",[this.content],20)):this.toggleLoading(!0),a&&(["string","array"].contains(typeOf(a))?this.content.set("html",a):a!==this.content&&this.content.contains(a)||this.content.adopt(a)),this.callChain(),this.isOpen?
this.resize(b):(this.toggleListeners(!0),this.resize(b,!0),this.isOpen=!0,this.win.setProperty("aria-hidden","false"),this.fireEvent("onOpen",[this.content]))},resize:function(a,b){this.showTimer=clearTimeout(this.showTimer||null);var c=this.doc.getSize(),d=this.doc.getScroll();this.size=Object.merge(this.isLoading?this.options.sizeLoading:this.options.size,a);this.size.x==self.getSize().x&&(this.size.y-=50,this.size.x-=20);c={width:this.size.x,height:this.size.y,left:(d.x+(c.x-this.size.x-this.options.marginInner.x)/
2).toInt(),top:(d.y+(c.y-this.size.y-this.options.marginInner.y)/2).toInt()};this.hideContent();b?(this.win.setStyles(c),this.showTimer=this.showContent.delay(50,this)):this.fx.win.start(c).chain(this.showContent.bind(this));return this.reposition()},toggleListeners:function(a){a=a?"addEvent":"removeEvent";this.closeBtn[a]("click",this.bound.close);this.overlay[a]("click",this.bound.close);this.doc[a]("keydown",this.bound.key)[a]("mousewheel",this.bound.scroll);this.doc.getWindow()[a]("resize",this.bound.window)[a]("scroll",
this.bound.window)},toggleLoading:function(a){this.isLoading=a;this.win[a?"addClass":"removeClass"]("sbox-loading");a&&(this.win.setProperty("aria-busy",a),this.fireEvent("onLoading",[this.win]))},toggleOverlay:function(a){if(this.options.overlay){var b=this.doc.getSize().x;this.overlay.set("aria-hidden",a?"false":"true");this.doc.body[a?"addClass":"removeClass"]("body-overlayed");a?this.scrollOffset=this.doc.getWindow().getSize().x-b:this.doc.body.setStyle("margin-right","")}},showContent:function(){this.content.get("opacity")&&
this.fireEvent("onShow",[this.win]);this.fx.content.start(1)},hideContent:function(){this.content.get("opacity")||this.fireEvent("onHide",[this.win]);this.fx.content.cancel().set(0)},onKey:function(a){switch(a.key){case "esc":this.close(a);case "up":case "down":return!1}},checkTarget:function(a){return a.target!==this.content&&this.content.contains(a.target)},reposition:function(){var a=this.doc.getSize(),b=this.doc.getScroll(),c=this.doc.getScrollSize(),d=this.overlay.getStyles("height"),d=parseInt(d.height);
c.y>d&&a.y>=d&&(this.overlay.setStyles({width:c.x+"px",height:c.y+"px"}),this.win.setStyles({left:(b.x+(a.x-this.win.offsetWidth)/2-this.scrollOffset).toInt()+"px",top:(b.y+(a.y-this.win.offsetHeight)/2).toInt()+"px"}));return this.fireEvent("onMove",[this.overlay,this.win])},removeEvents:function(a){if(!this.$events)return this;a?this.$events[a]&&(this.$events[a]=null):this.$events=null;return this},extend:function(a){return Object.append(this,a)},handlers:new Hash,parsers:new Hash};SqueezeBox.extend(new Events(function(){})).extend(new Options(function(){})).extend(new Chain(function(){}));
SqueezeBox.parsers.extend({image:function(a){return a||/\.(?:jpg|png|gif)$/i.test(this.url)?this.url:!1},clone:function(a){if(document.id(this.options.target))return document.id(this.options.target);if(this.element&&!this.element.parentNode)return this.element;var b=this.url.match(/#([\w-]+)$/);return b?document.id(b[1]):a?this.element:!1},ajax:function(a){return a||this.url&&!/^(?:javascript|#)/i.test(this.url)?this.url:!1},iframe:function(a){return a||this.url?this.url:!1},string:function(){return!0}});
SqueezeBox.handlers.extend({image:function(a){var b,c=new Image;this.asset=null;c.onload=c.onabort=c.onerror=function(){c.onload=c.onabort=c.onerror=null;if(c.width){var a=this.doc.getSize();a.x-=this.options.marginImage.x;a.y-=this.options.marginImage.y;b={x:c.width,y:c.height};for(var e=2;e--;)if(b.x>a.x)b.y*=a.x/b.x,b.x=a.x;else if(b.y>a.y)b.x*=a.y/b.y,b.y=a.y;b.x=b.x.toInt();b.y=b.y.toInt();this.asset=document.id(c);c=null;this.asset.width=b.x;this.asset.height=b.y;this.applyContent(this.asset,
b)}else this.onError.delay(10,this)}.bind(this);c.src=a;if(c&&c.onload&&c.complete)c.onload();return this.asset?[this.asset,b]:null},clone:function(a){return a?a.clone():this.onError()},adopt:function(a){return a?a:this.onError()},ajax:function(a){var b=this.options.ajaxOptions||{};this.asset=(new Request.HTML(Object.merge({method:"get",evalScripts:!1},this.options.ajaxOptions))).addEvents({onSuccess:function(a){this.applyContent(a);null!==b.evalScripts&&!b.evalScripts&&Browser.exec(this.asset.response.javascript);
this.fireEvent("onAjax",[a,this.asset]);this.asset=null}.bind(this),onFailure:this.onError.bind(this)});this.asset.send.delay(10,this.asset,[{url:a}])},iframe:function(a){this.asset=new Element("iframe",Object.merge({src:a,frameBorder:0,width:this.options.size.x,height:this.options.size.y},this.options.iframeOptions));return this.options.iframePreload?(this.asset.addEvent("load",function(){this.applyContent(this.asset.setStyle("display",""))}.bind(this)),this.asset.setStyle("display","none").inject(this.content),
!1):this.asset},string:function(a){return a}});SqueezeBox.handlers.url=SqueezeBox.handlers.ajax;SqueezeBox.parsers.url=SqueezeBox.parsers.ajax;SqueezeBox.parsers.adopt=SqueezeBox.parsers.clone;;

/* js_e9268d224e2b21720c125dd9c4b57ca1.core.js */
function switchFontSize(ckname,val){var bd=document.getElementsByTagName('body');if(!bd||!bd.length)return;bd=bd[0];switch(val){case'inc':if(CurrentFontSize+1<7){CurrentFontSize++;}
break;case'dec':if(CurrentFontSize-1>0){CurrentFontSize--;}
break;case'reset':default:CurrentFontSize=DefaultFontSize;}
var newclass='fs'+CurrentFontSize;bd.className=bd.className.replace(new RegExp('fs.?','g'),'');bd.className=trim(bd.className);bd.className+=(bd.className?' ':'')+newclass;createCookie(ckname,CurrentFontSize,365);}
function switchTool(ckname,val){createCookie(ckname,val,365);window.location.reload();}
function cpanel_reset(){var matches=document.cookie.match(new RegExp('(?:^|;)\\s*'+tmpl_name.escapeRegExp()+'_([^=]*)=([^;]*)','g'));if(!matches)return;for(var i=0;i<matches.length;i++){var ck=matches[i].match(new RegExp('(?:^|;)\\s*'+tmpl_name.escapeRegExp()+'_([^=]*)=([^;]*)'));if(ck){createCookie(tmpl_name+'_'+ck[1],'',-1);}}
if(window.location.href.indexOf('?')>-1){window.location.href=window.location.href.substr(0,window.location.href.indexOf('?'));}else{window.location.reload(true);}}
function cpanel_apply(){var elems=document.getElementById('ja-cpanel-main').getElementsByTagName('*');var usersetting={};for(var i=0;i<elems.length;i++){var el=elems[i];if(el.name&&(match=el.name.match(/^user_(.*)$/))){var name=match[1];var value='';if(el.tagName.toLowerCase()=='input'&&(el.type.toLowerCase()=='radio'||el.type.toLowerCase()=='checkbox')){if(el.checked)value=el.value;}else{value=el.value;}
if(usersetting[name]){if(value)usersetting[name]=value+','+usersetting[name];}else{usersetting[name]=value;}}}
for(var k in usersetting){name=tmpl_name+'_'+k;value=usersetting[k].trim();if(value.length>0){createCookie(name,value,365);}}
if(window.location.href.indexOf('?')>-1){window.location.href=window.location.href.substr(0,window.location.href.indexOf('?'));}else{window.location.reload(true);}}
function createCookie(name,value,days){if(days){var date=new Date();date.setTime(date.getTime()+(days*24*60*60*1000));var expires="; expires="+date.toGMTString();}else{expires="";}
document.cookie=name+"="+value+expires+"; path=/";}
function trim(str,chars){return ltrim(rtrim(str,chars),chars);}
function ltrim(str,chars){chars=chars||"\\s";return str.replace(new RegExp("^["+chars+"]+","g"),"");}
function rtrim(str,chars){chars=chars||"\\s";return str.replace(new RegExp("["+chars+"]+$","g"),"");}
function getScreenWidth(){var x=0;if(self.innerHeight){x=self.innerWidth;}else if(document.documentElement&&document.documentElement.clientHeight){x=document.documentElement.clientWidth;}else if(document.body){x=document.body.clientWidth;}
return x;}
function equalHeight(els){els=$$_(els);if(!els||els.length<2)return;var maxh=0;var els_=[];els.each(function(el,i){if(!el)return;els_[i]=el;var ch=els_[i].getCoordinates().height;maxh=(maxh<ch)?ch:maxh;},this);els_.each(function(el,i){if(!el)return;if(el.getStyle('padding-top')!=null&&el.getStyle('padding-bottom')!=null){if(maxh-el.getStyle('padding-top').toInt()-el.getStyle('padding-bottom').toInt()>0){el.setStyle('min-height',maxh-el.getStyle('padding-top').toInt()-el.getStyle('padding-bottom').toInt());}}else{if(maxh>0)el.setStyle('min-height',maxh);}},this);}
function getDeepestWrapper(el){while(el.getChildren().length==1){el=el.getChildren()[0];}
return el;}
function fixHeight(els,group1,group2){els=$$_(els);group1=$$_(group1);group2=$$_(group2);if(!els||!group1)return;var height=0;group1.each(function(el){if(!el)return;height+=el.getCoordinates().height;});if(group2){group2.each(function(el){if(!el)return;height-=el.getCoordinates().height;});}
els.each(function(el,i){if(!el)return;if(el.getStyle('padding-top')!=null&&el.getStyle('padding-bottom')!=null){if(height-el.getStyle('padding-top').toInt()-el.getStyle('padding-bottom').toInt()>0){el.setStyle('min-height',height-el.getStyle('padding-top').toInt()-el.getStyle('padding-bottom').toInt());}}else{if(height>0){el.setStyle('min-height',height);}}});}
function addFirstLastItem(el){el=$(el);if(!el||!el.getChildren()||!el.getChildren().length)return;el.getChildren()[0].addClass('first-item');el.getChildren()[el.getChildren().length-1].addClass('last-item');}
function $$_(els){if(typeOf(els)=='string')return $$(els);var els_=[];els.each(function(el){el=$(el);if(el)els_.push(el);});return els_;}
$(document).addEvent('domready',function(){$$('[data-dismiss="alert"]').each(function(el){el.addEvent('click',function(){el.getParent().destroy();if($('system-message').getChildren().length==0){Joomla.removeMessages();}});});});;;

/* js_86838e8180ccb78c3fda5bf45de8dd9f.mega.js */
var JRMenu=window.JRMenu||{};var jaMegaMenuMoo=new Class({Implements:Options,options:{slide:0,duration:300,fading:0,bgopacity:0.9,delayHide:500,direction:'down',action:'mouseenter',hidestyle:'normal',offset:-5,fixArrow:false},toElement:function(){return this.menu;},initialize:function(menu,options){this.menu=$(menu);if(!this.menu){return;}
this.setOptions(options);if(!this.options.slide&&!this.options.fading){this.options.delayHide=10;}
JRMenu.inst=this;this.menu.addClass('mm-enable');this.childopen=[];this.imgloaded=false;this.loaded=false;this.addnavbtn();this.prepare();},addnavbtn:function(){if(!(Browser.ie&&Browser.version<9)){var jlevel0=this.menu.getElement('ul.level0');if(jlevel0){var jmega=this.menu,jbutton=new Element('div',{id:'ja-menu-button',html:'Navigation',styles:{display:'none'}}).inject(jmega,'before');jbutton.addEvent('click',function(e){e.stop();if(jmega.getStyle('display')=='block'){jmega.removeClass('active').setStyle('display','none');jbutton.removeClass('active');}else{jmega.addClass('active').setStyle('display','block');jbutton.addClass('active');}});$(document).addEvent('click',function(){if(!jmega.hasClass('mm-enable')){jmega.removeClass('active').setStyle('display','none');}
jbutton.removeClass('active');});}
JRMenu.mmenuid=null;window.addEvent('resize',function(){clearTimeout(JRMenu.mmenuid);JRMenu.mmenuid=setTimeout(function(){JRMenu.inst.start();},100);});}},prepare:function(){var imgElms=this.menu.getElements('img');if(imgElms.length&&!this.imgloaded){var imgSrcs=[];imgElms.each(function(image){imgSrcs.push(image.src)});new Asset.images(imgSrcs,{onComplete:function(){this.imgloaded=true;this.start();}.bind(this)});setTimeout(function(){this.imgloaded=true;this.start();}.bind(this),3000);}else{window.addEvent('load',function(){this.imgloaded=true;this.start();}.bind(this));}},detect:function(){var jbutton=$('ja-menu-button'),rs=true;if(jbutton){rs=jbutton.getComputedStyle('display')=='none';if(rs!=this.menu.hasClass('mm-enable')){this.menu[rs?'addClass':'removeClass']('mm-enable');this.menu.setStyle('display',rs?'block':'none');}}
return rs;},start:function(){if(!this.detect()||!this.imgloaded||this.loaded){return;}
this.loaded=true;this.zindex=1000;var pw=this.menu;while(pw=pw.getParent()){if(pw.hasClass('main')||pw.hasClass('wrap')){this.wrapper=pw;break;}}
this.items=this.menu.getElements('li.mega');this.items.each(function(li){var link=li.getChildren('a.mega')[0],child=li.getChildren('.childcontent')[0],level0=li.getParent().hasClass('level0'),parent=this.getParent(li),item={stimer:null,direction:((level0&&this.options.direction=='up')?0:1)};if(child){var childwrap=child.getElement('.childcontent-inner-wrap'),childinner=child.getElement('.childcontent-inner'),width=childinner.getWidth(),height=childinner.getHeight(),padding=childwrap.getStyle('padding-left').toInt()+childwrap.getStyle('padding-right').toInt(),overflow=false;child.setStyles({width:width+20,height:height+20});childwrap.setStyle('width',width);if(['auto','scroll'].contains(childinner.getStyle('overflow'))){overflow=true;if(Browser.ie){if(Browser.version<=7){childinner.setStyle('position','relative');}
if(Browser.version==6){childinner.setStyle('height',childinner.getStyle('max-height')||400);}}}
if(this.options.direction=='up'){if(level0){child.setStyle('top',-child.getHeight());}else{child.setStyle('bottom',0);}}}
if(child&&this.options.bgopacity){new Element('div',{'class':'childcontent-bg',styles:{width:'100%',height:height,opacity:this.options.bgopacity,position:'absolute',top:0,left:0,zIndex:1,background:child.getStyle('background'),backgroundImage:child.getStyle('background-image'),backgroundRepeat:child.getStyle('background-repeat'),backgroundColor:child.getStyle('background-color')}}).inject(childwrap,'top');child.setStyle('background','none');childwrap.setStyles({position:'relative',zIndex:2});}
if(child&&(this.options.slide||this.options.fading)){if(child.hasClass('right')){child.setStyle('right',0);}
var fx=new Fx.Morph(childwrap,{duration:this.options.duration,transition:Fx.Transitions.linear,onComplete:this.itemAnimDone.bind(this,item),link:'cancel'}),stylesOn={};if(this.options.slide){if(level0){stylesOn[item.direction==1?'margin-top':'bottom']=0;}else{stylesOn[window.isRTL?'margin-right':'margin-left']=0;}}
if(this.options.fading){stylesOn['opacity']=1;}}
if(child&&this.options.action=='click'){li.addEvent('click',function(e){e.stopPropagation();if(li.hasClass('group')){return;}
if(item.status=='open'){if(this.cursorIn(li,e)){this.itemHide(item);}else{this.hideOthers(li);}}else{this.itemShow(item);}}.bind(this));}
if(this.options.action=='mouseover'||this.options.action=='mouseenter'){li.addEvent('mouseover',function(e){if(li.hasClass('group')){return;}
e.stop();clearTimeout(item.stimer);clearTimeout(this.atimer);this.intent(item,'open');this.itemShow(item);}.bind(this)).addEvent('mouseleave',function(e){if(li.hasClass('group')){return;}
clearTimeout(item.stimer);this.intent(item,'close');if(child){item.stimer=this.itemHide.delay(this.options.delayHide,this,item);}else{this.itemHide(item);}}.bind(this));if(link&&child){link.addEvent('click',function(e){if(!item.clickable){e.stop();}});}
li.addEvent('click',function(e){e.stopPropagation()});if(child){child.addEvent('mouseover',function(){clearTimeout(item.stimer);clearTimeout(this.atimer);this.intent(item,'open');this.itemShow(item);}.bind(this)).addEvent('mouseleave',function(e){e.stop();this.intent(item,'close');clearTimeout(item.stimer);if(!this.cursorIn(item.el,e)){this.atimer=this.hideAlls.delay(this.options.delayHide,this);}}.bind(this))}}
if(link&&!child){link.addEvent('click',function(e){e.stopPropagation();this.hideOthers(null);this.menu.getElements('.active').removeClass('active');var p=li;while(p){var idata=p.retrieve('item');p.addClass('active');idata.link.addClass('active');p=idata.parent;}}.bind(this));}
Object.append(item,{el:li,parent:parent,link:link,child:child,childwrap:childwrap,childinner:childinner,width:width,height:height,padding:padding,level0:level0,fx:fx,stylesOn:stylesOn,overflow:overflow,clickable:!(link&&child)});li.store('item',item);},this);var container=$('ja-wrapper');if(!container){container=document.body;}
container.addEvent('click',function(e){this.hideAlls();}.bind(this));this.menu.getElements('.childcontent').setStyle('display','none');},getParent:function(el){var p=el;while((p=p.getParent())){if(this.items.contains(p)&&!p.hasClass('group')){return p;}
if(!p||p==this.menu){return null;}}},intent:function(item,action){item.intent=action;while(item.parent&&(item=item.parent.retrieve('item'))){item.intent=action;}},cursorIn:function(el,event){if(!el||!event){return false;}
var pos=el.getPosition(),cursor=event.page;return(cursor.x>pos.x&&cursor.x<pos.x+el.getWidth()&&cursor.y>pos.y&&cursor.y<pos.y+el.getHeight());},itemOver:function(item){item.el.addClass('over');if(item.el.hasClass('haschild')){item.el.removeClass('haschild').addClass('haschild-over');}
if(item.link){item.link.addClass('over');}},itemOut:function(item){item.el.removeClass('over');if(item.el.hasClass('haschild-over')){item.el.removeClass('haschild-over').addClass('haschild');}
if(item.link){item.link.removeClass('over');}},itemShow:function(item){if(!this.menu.hasClass('mm-enable')){return;}
if(this.childopen.indexOf(item)<this.childopen.length-1){this.hideOthers(item.el);}
if(item.status=='open'){return;}
this.itemOver(item);if(item.level0){this.childopen.length=0;}
if(item.child){this.childopen.push(item);}
item.intent='open';item.status='open';this.enableclick.delay(100,this,item);if(item.child){this.positionSubmenu(item);if(item.fx&&!item.stylesOff){item.stylesOff={};if(this.options.slide){if(item.level0){item.stylesOff[item.direction==1?'margin-top':'bottom']=-item.height;}else{item.stylesOff[window.isRTL?'margin-right':'margin-left']=(item.direction==1?-item.width:item.width);}}
if(this.options.fading){item.stylesOff['opacity']=0;}
item.fx.set(item.stylesOff);}
clearTimeout(item.sid);item.child.setStyles({display:'block',zIndex:this.zindex++});}
if(!item.fx||!item.child){return;}
item.child.setStyle('overflow','hidden');if(item.overflow){item.childinner.setStyle('overflow','hidden');}
item.fx.start(item.stylesOn);},itemHide:function(item){if(!this.menu.hasClass('mm-enable')){return;}
clearTimeout(item.stimer);item.status='close';item.intent='close';this.itemOut(item);this.childopen.erase(item);if(!item.fx&&item.child){clearTimeout(item.sid);item.sid=setTimeout(function(){item.child.setStyle('display','none');},this.options.delayHide);}
if(!item.fx||!item.child||item.child.getStyle('opacity')=='0'){return;}
item.child.setStyle('overflow','hidden');if(item.overflow){item.childinner.setStyle('overflow','hidden');}
switch(this.options.hidestyle){case'fast':item.fx.options.duration=100;item.fx.start(item.stylesOff);break;case'fastwhenshow':item.fx.start(Object.merge(item.stylesOff,{'opacity':0}));break;case'normal':default:item.fx.start(item.stylesOff);break;}},itemAnimDone:function(item){if(item.status=='close'){if(this.options.hidestyle.test(/fast/)){item.fx.options.duration=this.options.duration;if(!this.options.fading){item.childwrap.setStyle('opacity',1);}}
item.child.setStyle('display','none');this.disableclick.delay(100,this,item);var pitem=item.parent?item.parent.retrieve('item'):null;if(pitem&&pitem.intent=='close'){this.itemHide(pitem);}}
if(item.status=='open'){item.child.setStyle('overflow','');if(item.overflow){item.childinner.setStyle('overflow-y','auto');}
item.childwrap.setStyle('opacity',1);item.child.setStyle('display','block');}},hideOthers:function(el){this.childopen.each(function(item){if(!el||(item.el!=el&&!item.el.contains(el))){item.intent='close';}});if(this.options.slide||this.options.fading){var last=this.childopen.getLast();if(last&&last.intent=='close'){this.itemHide(last);}}else{this.childopen.each(function(item){if(item.intent=='close'){this.itemHide(item);}},this);}},hideAlls:function(el){this.childopen.flatten().each(function(item){if(!item.fx){this.itemHide(item);}else{item.intent='close';}},this);if(this.options.slide||this.options.fading){var last=this.childopen.getLast();if(last&&last.intent=='close'){this.itemHide(last);}}},enableclick:function(item){if(item.link&&item.child){item.clickable=true;}},disableclick:function(item){item.clickable=false;},positionSubmenu:function(item){var options=this.options,offsleft,offstop,left,top,stylesOff={},icoord=item.el.getCoordinates(),bodySize=$(document.body).getScrollSize(),winRect={top:window.getScrollTop(),left:window.getScrollLeft(),width:window.getWidth(),height:window.getHeight()},wrapRect=this.wrapper?this.wrapper.getCoordinates():{top:0,left:0,width:winRect.width,height:winRect.height};winRect.top=Math.max(winRect.top,wrapRect.top);winRect.left=Math.max(winRect.left,wrapRect.left);winRect.width=Math.min(winRect.width,wrapRect.width);winRect.height=Math.min(winRect.height,$(document.body).getScrollHeight());winRect.right=winRect.left+winRect.width;winRect.bottom=winRect.top+winRect.height;if(!item.level0){var pitem=item.parent.retrieve('item'),offsety=parseFloat(pitem.child.getFirst().getStyle('margin-top')),offsetx=parseFloat(pitem.child.getFirst().getStyle(window.isRTL?'margin-right':'margin-left'));item.direction=pitem.direction;window.isRTL&&(offsetx=0-offsetx);icoord.top-=offsety;icoord.bottom-=offsety;icoord.left-=offsetx;icoord.right-=offsetx;}
if(item.level0){if(window.isRTL){offsleft=Math.max(winRect.left,icoord.right-item.width-20);left=Math.max(0,offsleft-winRect.left);}else{offsleft=Math.max(winRect.left,Math.min(winRect.right-item.width,icoord.left));left=Math.max(0,Math.min(winRect.right-item.width,icoord.left)-winRect.left);}}else{if(window.isRTL){if(item.direction==1){offsleft=icoord.left-item.width-20+options.offset;left=-icoord.width-20;if(offsleft<winRect.left){item.direction=0;offsleft=Math.min(winRect.right,Math.max(winRect.left,icoord.right+item.padding-20-options.offset));left=icoord.width-20;stylesOff['margin-right']=item.width;}}else{offsleft=icoord.right+item.padding-20;left=icoord.width-20;if(offsleft+item.width>winRect.right){item.direction=1;offsleft=Math.max(winRect.left,icoord.left-item.width-20);left=-icoord.width-20;stylesOff['margin-right']=-item.width;}}}else{if(item.direction==1){offsleft=icoord.right-options.offset;left=icoord.width;if(offsleft+item.width>winRect.right){item.direction=0;offsleft=Math.max(winRect.left,icoord.left-item.width-item.padding+options.offset);left=-icoord.width;stylesOff['margin-left']=item.width;}}else{offsleft=icoord.left-item.width-item.padding+options.offset;left=-icoord.width;if(offsleft<winRect.left){item.direction=1;offsleft=Math.max(winRect.left,Math.min(winRect.right-item.width,icoord.right-options.offset));left=icoord.width;stylesOff['margin-left']=-item.width;}}}}
if(options.slide&&item.fx&&Object.getLength(stylesOff)){item.fx.set(stylesOff);}
if(options.fixArrow&&item.childinner){item.childinner.setStyle('background-position',(icoord.left-offsleft+(icoord.width/2-4.5))+'px top');}
var oldp=item.child.getStyle('display');item.child.setStyle('display','block');if(item.child.getOffsetParent()){left=offsleft-item.child.getOffsetParent().getCoordinates().left;}
item.child.setStyles({'margin-left':0,'left':left,'display':oldp});}});;;

/* js_7aac2e3f504ec99f11ebce3e67a1da90.acymailing_module.js */
function submitacymailingform(task,formName){var varform=eval('document.'+formName);var filterEmail=/^([a-z0-9_'&\.\-\+=])+\@(([a-z0-9\-])+\.)+([a-z0-9]{2,10})+$/i;if(!varform.elements){if(varform[0].elements['user[email]']&&varform[0].elements['user[email]'].value&&filterEmail.test(varform[0].elements['user[email]'].value)){varform=varform[0];}else{varform=varform[varform.length-1];}}
if(task!='optout'){nameField=varform.elements['user[name]'];if(nameField&&((typeof acymailing!='undefined'&&nameField.value==acymailing['NAMECAPTION'])||nameField.value.length<2)){if(typeof acymailing!='undefined'){alert(acymailing['NAME_MISSING']);}
nameField.className=nameField.className+' invalid';return false;}}
var emailField=varform.elements['user[email]'];if(emailField){if(typeof acymailing=='undefined'||emailField.value!=acymailing['EMAILCAPTION'])emailField.value=emailField.value.replace(/ /g,"");if(!emailField||(typeof acymailing!='undefined'&&emailField.value==acymailing['EMAILCAPTION'])||!filterEmail.test(emailField.value)){if(typeof acymailing!='undefined'){alert(acymailing['VALID_EMAIL']);}
emailField.className=emailField.className+' invalid';return false;}}
if(varform.elements['hiddenlists'].value.length<1){var listschecked=false;var alllists=varform.elements['subscription[]'];if(alllists&&typeof alllists.value=='undefined'){for(b=0;b<alllists.length;b++){if(alllists[b].checked)listschecked=true;}
if(!listschecked){alert(acymailing['NO_LIST_SELECTED']);return false;}}}
if(task!='optout'&&typeof acymailing!='undefined'&&typeof acymailing['reqFields'+formName]!='undefined'&&acymailing['reqFields'+formName].length>0){for(var i=0;i<acymailing['reqFields'+formName].length;i++){elementName='user['+acymailing['reqFields'+formName][i]+']';elementToCheck=varform.elements[elementName];if(elementToCheck){var isValid=false;if(typeof elementToCheck.value!='undefined'){if(elementToCheck.value==' '&&typeof varform[elementName+'[]']!='undefined'){if(varform[elementName+'[]'].checked){isValid=true;}else{for(var a=0;a<varform[elementName+'[]'].length;a++){if((varform[elementName+'[]'][a].checked||varform[elementName+'[]'][a].selected)&&varform[elementName+'[]'][a].value.length>0)isValid=true;}}}else{if(elementToCheck.value.length>0){if(typeof acymailing['excludeValues'+formName]=='undefined'||typeof acymailing['excludeValues'+formName][acymailing['reqFields'+formName][i]]=='undefined'||acymailing['excludeValues'+formName][acymailing['reqFields'+formName][i]]!=elementToCheck.value)isValid=true;}}}else{for(var a=0;a<elementToCheck.length;a++){if(elementToCheck[a].checked&&elementToCheck[a].value.length>0)isValid=true;}}
if(!isValid){elementToCheck.className=elementToCheck.className+' invalid';alert(acymailing['validFields'+formName][i]);return false;}}else{if((varform.elements[elementName+'[day]']&&varform.elements[elementName+'[day]'].value<1)||(varform.elements[elementName+'[month]']&&varform.elements[elementName+'[month]'].value<1)||(varform.elements[elementName+'[year]']&&varform.elements[elementName+'[year]'].value<1902)){if(varform.elements[elementName+'[day]']&&varform.elements[elementName+'[day]'].value<1)varform.elements[elementName+'[day]'].className=varform.elements[elementName+'[day]'].className+' invalid';if(varform.elements[elementName+'[month]']&&varform.elements[elementName+'[month]'].value<1)varform.elements[elementName+'[month]'].className=varform.elements[elementName+'[month]'].className+' invalid';if(varform.elements[elementName+'[year]']&&varform.elements[elementName+'[year]'].value<1902)varform.elements[elementName+'[year]'].className=varform.elements[elementName+'[year]'].className+' invalid';alert(acymailing['validFields'+formName][i]);return false;}
if((varform.elements[elementName+'[country]']&&varform.elements[elementName+'[country]'].value<1)||(varform.elements[elementName+'[num]']&&varform.elements[elementName+'[num]'].value<3)){if(varform.elements[elementName+'[country]']&&varform.elements[elementName+'[country]'].value<1)varform.elements[elementName+'[country]'].className=varform.elements[elementName+'[country]'].className+' invalid';if(varform.elements[elementName+'[num]']&&varform.elements[elementName+'[num]'].value<3)varform.elements[elementName+'[num]'].className=varform.elements[elementName+'[num]'].className+' invalid';alert(acymailing['validFields'+formName][i]);return false;}}}}
var captchaField=varform.elements['acycaptcha'];if(captchaField){if(captchaField.value.length<1){if(typeof acymailing!='undefined'){alert(acymailing['CAPTCHA_MISSING']);}
captchaField.className=captchaField.className+' invalid';return false;}}
if(task!='optout'){var termsandconditions=varform.terms;if(termsandconditions&&!termsandconditions.checked){if(typeof acymailing!='undefined'){alert(acymailing['ACCEPT_TERMS']);}
termsandconditions.className=termsandconditions.className+' invalid';return false;}}
taskField=varform.task;taskField.value=task;if(!varform.elements['ajax']||!varform.elements['ajax'].value||varform.elements['ajax'].value=='0'){varform.submit();return false;}
var form=$(formName);data=form.toQueryString();if(typeof Ajax=='function'){new Ajax(form.action,{data:data,method:'post',onRequest:function()
{form.addClass('acymailing_module_loading');form.setStyle("filter:","alpha(opacity=50)");form.setStyle("-moz-opacity","0.5");form.setStyle("-khtml-opacity","0.5");form.setStyle("opacity","0.5");},onSuccess:function(response)
{response=Json.evaluate(response);acymailingDisplayAjaxResponse(unescape(response.message),response.type,formName);},onFailure:function(){acymailingDisplayAjaxResponse('Ajax Request Failure','error',formName);}}).request();}else{new Request.JSON({url:$(formName).action,data:data,method:'post',onRequest:function()
{form.addClass('acymailing_module_loading');form.setStyle("filter:","alpha(opacity=50)");form.setStyle("-moz-opacity","0.5");form.setStyle("-khtml-opacity","0.5");form.setStyle("opacity","0.5");},onSuccess:function(response)
{acymailingDisplayAjaxResponse(unescape(response.message),response.type,formName);},onFailure:function(){acymailingDisplayAjaxResponse('Ajax Request Failure','error',formName);}}).send();}
return false;}
function acymailingDisplayAjaxResponse(message,type,formName)
{var toggleButton=$('acymailing_togglemodule_'+formName);if(toggleButton&&toggleButton.hasClass('acyactive')){var wrapper=toggleButton.getParent().getParent().getChildren()[1];wrapper.setStyle('height','');};var responseContainer=$$('#acymailing_fulldiv_'+formName+' .responseContainer')[0];if(typeof responseContainer=='undefined'){responseContainer=new Element('div');responseContainer.inject($('acymailing_fulldiv_'+formName),'top');oldContainerHeight='0px';}else{oldContainerHeight=responseContainer.getStyle('height');}
responseContainer.className='responseContainer';$(formName).removeClass('acymailing_module_loading');responseContainer.innerHTML=message;var form=$(formName);if(type=='success'){responseContainer.addClass('acymailing_module_success');}else{responseContainer.addClass('acymailing_module_error');form.setStyle("filter:","alpha(opacity=100)");form.setStyle("-moz-opacity","1");form.setStyle("-khtml-opacity","1");form.setStyle("opacity","1");}
newContainerHeight=responseContainer.getStyle('height');if(typeof Ajax=='function')
{if(type=='success'){var myEffect=new Fx.Styles(form,{duration:500,transition:Fx.Transitions.linear});myEffect.start({'height':[form.getSize().size.y,0],'opacity':[1,0]});}
try{responseContainer.setStyle('height',oldContainerHeight+'px');responseContainer.setStyle("filter:","alpha(opacity=0)");responseContainer.setStyle("-moz-opacity","0");responseContainer.setStyle("-khtml-opacity","0");responseContainer.setStyle("opacity","0");}
catch(e){}
var myEffect2=new Fx.Styles(responseContainer,{duration:500,transition:Fx.Transitions.linear});myEffect2.start({'height':[oldContainerHeight,newContainerHeight],'opacity':[0,1]});}
else
{if(type=='success'){form.set('morph');form.morph({'height':'0px','opacity':0});}
responseContainer.setStyles({'height':oldContainerHeight,'opacity':0});responseContainer.set('morph');responseContainer.morph({'height':newContainerHeight,'opacity':1});}};;

/* js_18e9337fa17264af378986011c1cd7fe.script.js */
JANewSticker=new Class({initialize:function(_options){this.options=Object.append({modes:{horizontal:['left','width'],horizontal_right:['left','width'],verticald:['top','height'],vertical:['top','height']},size:240,mode:'horizontal',buttonEvent:'click',handlerEvent:'click',interval:5000,autoRun:true,previousIndex:null,nextIndex:null,currentIndex:0,startItem:0,onRunning:null},_options||{});this.fx=new Array();this.fx2=new Array();$$(this.options.items).each(function(item){if(item.getStyle('visibility')=='hidden'){item.setStyles({visibility:'visible',opacity:0});}});if(this.options.mode=='horizontal_stripe'){}else{this.onRunning=this.options.onRunning;if(isNaN(this.options.startItem)||(this.options.startItem>this.options.items.length||this.options.startItem<0)){this.options.startItem=0;}
var maxWidth=0;this.options.items.each(function(_item,index){_item.setStyle('z-index',this.options.items.length-index);_item.setStyle('width',_item.offsetWidth);if(_item.offsetWidth>maxWidth){maxWidth=_item.offsetWidth;}
this.fx2[index]=new Fx.Tween(_item,_options.fxOptions);this.fx2[index].offsetWidth=_item.offsetWidth;if(this.options.mode!='opacity'){this.fx[index]=new Fx.Tween(_item,_options.fxOptions||{duration:500,wait:false});}}.bind(this));if(this.options.box.offsetWidth<=0){this.options.box.setStyle('width',maxWidth);}
if(this.options.mode=='vertical'||this.options.mode=='verticald'){this.options.size=this.options.box.offsetHeight;}else{this.options.size=this.options.box.offsetWidth;}
this.buttons={previous:[],next:[],play:[],playback:[],stop:[]};this.options.autoRun=true;if(_options.buttons){for(var action in _options.buttons){this.bindingButtonsEvent(action,typeOf(_options.buttons[action])=='array'?_options.buttons[action]:[_options.buttons[action]]);}}
if(this.options.autoRun){this.play(this.options.interval,'next',true);}
var wrapper2=this.options.wrapper;wrapper2.addEvent("mouseenter",function(){this.stop();}.bind(this));wrapper2.addEvent("mouseleave",function(){this.play(this.options.interval,'next',true);}.bind(this));}},previous:function(manual){this.options.currentIndex+=this.options.currentIndex>0?-1:this.options.items.length-1;this.running(null,manual,'previous');},next:function(manual){this.options.currentIndex+=(this.options.currentIndex<this.options.items.length-1)?1:(1-this.options.items.length);this.running(null,manual,'next');},play:function(delay,direction,wait){this.stop();if(!wait){this[direction](false);}
this.options.autoRun=this[direction].periodical(delay,this,false);},stop:function(){clearTimeout(this.options.autoRun);},running:function(item,manual,runningMode){this.options.previousIndex=this.options.currentIndex+(this.options.currentIndex>0?-1:this.options.items.length-1);this.options.nextIndex=this.options.currentIndex+(this.options.currentIndex<this.options.items.length-1?1:1-this.options.items.length);if(this.options.mode!='opacity'){var size1;var size2;if(this.options.mode=='horizontal_right'||this.options.mode=='verticald'){size1=-(this.options.size);size2=(this.options.size);}else{size1=(this.options.size);size2=-(this.options.size);}
if(runningMode=='next'){this.fx2[this.options.previousIndex].start('opacity',1,0);this.fx[this.options.previousIndex].start(this.options.modes[this.options.mode][0],0,size1);this.fx2[this.options.currentIndex].start('opacity',0,1);this.fx[this.options.currentIndex].start(this.options.modes[this.options.mode][0],+size2,0);}else if(runningMode=='previous'){this.fx2[this.options.nextIndex].start('opacity',1,0);this.fx[this.options.nextIndex].start(this.options.modes[this.options.mode][0],0,-(this.options.size));this.fx2[this.options.currentIndex].start('opacity',0,1);this.fx[this.options.currentIndex].start(this.options.modes[this.options.mode][0],+(this.options.size),0);}}else{if(runningMode=='next'){this.fx2[this.options.previousIndex].start('opacity',1,0);this.fx2[this.options.currentIndex].start('opacity',0,1);this.options.items[this.options.previousIndex].setStyle('zIndex',1);this.options.items[this.options.currentIndex].setStyle('zIndex',this.options.items.length+10);}else{this.fx2[this.options.nextIndex].start('opacity',1,0);this.fx2[this.options.currentIndex].start('opacity',0,1);this.options.items[this.options.nextIndex].setStyle('zIndex',1);this.options.items[this.options.currentIndex].setStyle('zIndex',this.options.items.length+10);}}
if(manual){this.stop();}
if(this.onRunning){this.onRunning(this.options.items[this.options.currentIndex],(this.buttons?this.buttons[this.options.currentIndex]:null));}
if(manual&&this.options.autoRun){this.play(this.options.interval,'next',true);}},bindingButtonsEvent:function(action,buttons){for(var i=0;i<buttons.length;i++){switch(action){case'previous':buttons[i].addEvent(this.options.buttonEvent,this.previous.bind(this,true));break;case'next':buttons[i].addEvent(this.options.buttonEvent,this.next.bind(this,true));break;case'play':buttons[i].addEvent(this.options.buttonEvent,this.play.bind(this,[this.options.interval,'next',false]));break;case'playback':buttons[i].addEvent(this.options.buttonEvent,this.play.bind(this,[this.options.interval,'previous',false]));break;case'stop':buttons[i].addEvent(this.options.buttonEvent,this.stop.bind(this));break;}
this.buttons[action].push(buttons[i]);}}});;;

