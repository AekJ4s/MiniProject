(function(){function _vwo_err(e){var vwo_e=new Image;vwo_e.src="https://dev.visualwebsiteoptimizer.com/ee.gif?a=679492&s=j.php&e="+encodeURIComponent(e&&e.message&&e.message.substring(0,1e3)+"&vn=")}try{(function(){var aC=window._vwo_code;if(aC){window._vwo_j_e=window._vwo_j_e||0;if(window._vwo_j_e==1){window._vwo_mt="dupCode";clearTimeout(window._vwo_settings_timer);if(window.VWO&&window.VWO._&&window.VWO._.bIE){window._vwo_code.finish()}return}if(window._vwo_j_e==-1){window._vwo_j_e=1}}window._vwo_mt="live";var localPreviewObject={};var previewKey="_vis_preview_"+776494;var wL=window.location;try{localPreviewObject[previewKey]=window.localStorage.getItem(previewKey);JSON.parse(localPreviewObject[previewKey])}catch(e){localPreviewObject[previewKey]=""}try{window._vwo_tm="";var getMode=function(e){var n;if(window.name.indexOf(e)>-1){n=window.name}else{n=wL.search.match("_vwo_m=([^&]*)");n=n&&n[1]}return n&&JSON.parse(decodeURIComponent(n))};var ccMode=getMode("_vwo_cc");if(window.name.indexOf("_vis_heatmap")>-1||window.name.indexOf("_vis_editor")>-1||ccMode||window.name.indexOf("_vis_preview")>-1){try{if(window.name&&JSON.parse(window.name)){window._vwo_mt=window.name}else if(ccMode){window._vwo_mt=decodeURIComponent(wL.search.match("_vwo_m=([^&]*)")[1])}}catch(e){if(window._vwo_tm)window._vwo_mt=window._vwo_tm}}else if(window._vwo_tm.length){window._vwo_mt=window._vwo_tm}else if(location.href.indexOf("_vis_opt_preview_combination")!==-1&&location.href.indexOf("_vis_test_id")!==-1){window._vwo_mt="sharedPreview"}else if(localPreviewObject[previewKey]){window._vwo_mt=JSON.stringify(localPreviewObject)}if(window._vwo_mt!=="live"){if(!getMode("_vwo_cc")){_vwo_code.load('https://dev.visualwebsiteoptimizer.com/j.php?mode=' + encodeURIComponent(window._vwo_mt) + '&a=776494&f=1&u=' + encodeURIComponent(window._vis_opt_url||document.URL)+'&eventArch=true');}else{(function(){window._vwo_code&&window._vwo_code.finish();_vwo_ccc={u:"/j.php?a=776494&u=https%3A%2F%2Fgiphy.com%2Fgifs%2Fpink-infinite-road-QrU69LU0LIuYJ9OQ4C&vn=2"};var s=document.createElement("script");s.src="https://app.vwo.com/visitor-behavior-analysis/dist/codechecker/cc.min.js?r="+Math.random();document.head.appendChild(s)})()}}}catch(e){var vwo_e=new Image;vwo_e.src="https://dev.visualwebsiteoptimizer.com/ee.gif?s=mode_det&e="+encodeURIComponent(e&&e.stack&&e.stack.substring(0,1e3)+"&vn=");aC&&window._vwo_code.finish()}})();
;window._vwo_cookieDomain="giphy.com";if(window._vwo_mt==="live"){window._vwo_acc_id=776494;const shouldSampleApm=false;if(shouldSampleApm){window.VWO=window.VWO||[];VWO.load_co=function(a){var b=document.createElement("script");b.src=a;b.crossOrigin="anonymous";b.type="text/javascript";b.fetchPriority="high";b.innerText;b.onerror=function(){_vwo_code.finish()};document.getElementsByTagName("head")[0].appendChild(b)};setTimeout((function(){VWO.load_co("https://dev.visualwebsiteoptimizer.com/apmLib-1a26510c371d0c1d1b699cc111a66c3b.js")}),0)}_vwo_code.sT=_vwo_code.finished();(function(c,a,e,d,b,z,g){function f(a,b,d){e.cookie=a+"="+b+"; expires="+new Date(864e5*d+ +new Date).toGMTString()+"; domain="+g+"; path=/"}-1==e.cookie.indexOf("_vis_opt_out")&&-1==d.location.href.indexOf("vwo_opt_out=1")&&(a=e.cookie.replace(/(?:(?:^|.*;\s*)_vwo_uuid_v2\s*=\s*([^;]*).*$)|^.*$/,"$1")||a,a=a.split("|"),b=new Image,c=d.location.hostname.replace(/^www\./,"")||c,g=window._vis_opt_domain||c||d.location.hostname.replace(/^www\./,""),b.src="https://dev.visualwebsiteoptimizer.com/v.gif?cd="+(window._vis_opt_cookieDays||0)+"&a=776494&d="+encodeURIComponent(c)+"&u="+a[0]+"&h="+a[1]+"&t="+z,d.vwo_iehack_queue=[b],f("_vwo_uuid_v2",a.join("|"),366))})("giphy.com","D0F9E3274ACD1AD70995C12F064507BA3|ed88d6c0e25dfb575aa5c213eba899d5",document,window,0,_vwo_code.sT);
;;window.VWO=window.VWO||[];for(var e=0;e<window.VWO.length;e++){exC(window.VWO[e])}window.VWO.push=function(){exC(arguments[0])};function exC(a){if(Array.isArray(a)&&(a[0]==="onVWOLoaded"||a[0]==="onVWOCampaignsLoaded")&&typeof a[1]==="function"){if(a[0]==="onVWOCampaignsLoaded")return a[1].call(this,{bucketed_campaigns:[]});var p=[];p[0]={};p[1]=[];a[1].call(this,p)}}function tCC(v){return v.replace(/[^\w\s-.][\w]/g,(function(x){return x.toUpperCase()})).replace(/[^\w\s-.]/g,"").replace(/ [\w]/g,(function(x){return x.toUpperCase()})).replace(/ /g,"")}function fPN(v){var c=tCC(v.slice(v.search(/[\w-.]/g)));c=c.replace(/^(_|vwo_|\.|v_|i_|-)*/g,"");if(c==="props"){return""}return c}function fEN(v){var c=tCC(v.slice(v.search(/[\w-.]/g)));c=c.replace(/^(_|vwo_|\.|v_|i_|-)*/g,"");if(c.toLowerCase()==="visitors"){c+="_1"}return c}function fAO(d){if(typeof d!=="object"||Array.isArray(d)){return lwE("Invalid attribute type: attribute can only be an object!")}var mO={};for(var k in d){if(Object.prototype.hasOwnProperty.call(d,k)){var pN=fPN(k);if(!pN.trim()){return lwE("Invalid attribute name:' + k + 'is not allowed as an attribute name!")}if(pN.length>40){pN=pN.slice(0,40);console.warn("Attribute name should not be greater than 40 characters!")}mO[pN]=isObject(d[k])||isArray(d[k])?JSON.stringify(d[k]):d[k]}}return mO}function isObject(v){return toString.call(v)==="[object Object]"}function isArray(v){return toString.call(v)==="[object Array]"}function lgE(s=-1,e=""){switch(s){case 0:return lwE("Event name cannot be empty!");case 1:return console.warn("Event name should not be greater than 40 characters!");case 2:return lwE("Invalid event name:"+e+"is not allowed as an event name!");default:return lwE("Invalid event name: event name can only be a string!")}}function lwE(e){console.log("%cVWO Event API Error:","font-weight:bold;",e);_vwo_err({message:e})}VWO.event=function(){var data={d:{event:{}}};var n=arguments[0];if(typeof n!=="string"){return lgE()}n=n.trim();if(!n){return lgE(0)}var ufE=e;n=fEN(n);if(!n){return lgE(2,ufE)}if(n.length>40){lgE(1);n=n.slice(0,40)}var fo=fAO(arguments[1]||{});if(!fo){return}data.d.event["props"]=fo;data.d.event["name"]=n;data.d.event["time"]=Date.now();const url="https://dev.visualwebsiteoptimizer.com/events/t?en="+n+"&a="+window._vwo_acc_id+"&_cu="+encodeURIComponent(document.URL);navigator.sendBeacon(url,JSON.stringify(data))};
;_vwo_code.finish()}}catch(e){_vwo_code.finish();var vwo_e=new Image;_vwo_err(e);window.VWO.caE=1}})();
