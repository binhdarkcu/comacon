var mod_pagespeed_7fm1$BErDG = "jQuery(function($){$(\".siteorigin-panels-stretch.panel-row-style\").each(function(){var $$=$(this);var onResize=function(){$$.css({\"margin-left\":0,\"margin-right\":0,\"padding-left\":0,\"padding-right\":0});var leftSpace=$$.offset().left;var rightSpace=$(window).outerWidth()-$$.offset().left-$$.parent().outerWidth();$$.css({\"margin-left\":-leftSpace,\"margin-right\":-rightSpace,\"padding-left\":$$.data(\"stretch-type\")===\"full\"?leftSpace:0,\"padding-right\":$$.data(\"stretch-type\")===\"full\"?rightSpace:0});var cells=$$.find(\"> .panel-grid-cell\");if($$.data(\"stretch-type\")===\"full-stretched\"&&cells.length===1){cells.css({\"padding-left\":0,\"padding-right\":0})}};$(window).resize(onResize);onResize();$$.css({\"border-left\":0,\"border-right\":0})})});";
var mod_pagespeed_5r4ixg3PQk = ";window.Modernizr=function(a,b,c){function B(a){j.cssText=a}function C(a,b){return B(m.join(a+\";\")+(b||\"\"))}function D(a,b){return typeof a===b}function E(a,b){return!!~(\"\"+a).indexOf(b)}function F(a,b){for(var d in a){var e=a[d];if(!E(e,\"-\")&&j[e]!==c)return b==\"pfx\"?e:!0}return!1}function G(a,b,d){for(var e in a){var f=b[a[e]];if(f!==c)return d===!1?a[e]:D(f,\"function\")?f.bind(d||b):f}return!1}function H(a,b,c){var d=a.charAt(0).toUpperCase()+a.slice(1),e=(a+\" \"+o.join(d+\" \")+d).split(\" \");return D(b,\"string\")||D(b,\"undefined\")?F(e,b):(e=(a+\" \"+p.join(d+\" \")+d).split(\" \"),G(e,b,c))}var d=\"2.8.3\",e={},f=!0,g=b.documentElement,h=\"modernizr\",i=b.createElement(h),j=i.style,k,l={}.toString,m=\" -webkit- -moz- -o- -ms- \".split(\" \"),n=\"Webkit Moz O ms\",o=n.split(\" \"),p=n.toLowerCase().split(\" \"),q={},r={},s={},t=[],u=t.slice,v,w=function(a,c,d,e){var f,i,j,k,l=b.createElement(\"div\"),m=b.body,n=m||b.createElement(\"body\");if(parseInt(d,10))while(d--)j=b.createElement(\"div\"),j.id=e?e[d]:h+(d+1),l.appendChild(j);return f=[\"&#173;\",'<style id=\"s',h,'\">',a,\"</style>\"].join(\"\"),l.id=h,(m?l:n).innerHTML+=f,n.appendChild(l),m||(n.style.background=\"\",n.style.overflow=\"hidden\",k=g.style.overflow,g.style.overflow=\"hidden\",g.appendChild(n)),i=c(l,a),m?l.parentNode.removeChild(l):(n.parentNode.removeChild(n),g.style.overflow=k),!!i},x=function(b){var c=a.matchMedia||a.msMatchMedia;if(c)return c(b)&&c(b).matches||!1;var d;return w(\"@media \"+b+\" { #\"+h+\" { position: absolute; } }\",function(b){d=(a.getComputedStyle?getComputedStyle(b,null):b.currentStyle)[\"position\"]==\"absolute\"}),d},y=function(){function d(d,e){e=e||b.createElement(a[d]||\"div\"),d=\"on\"+d;var f=d in e;return f||(e.setAttribute||(e=b.createElement(\"div\")),e.setAttribute&&e.removeAttribute&&(e.setAttribute(d,\"\"),f=D(e[d],\"function\"),D(e[d],\"undefined\")||(e[d]=c),e.removeAttribute(d))),e=null,f}var a={select:\"input\",change:\"input\",submit:\"form\",reset:\"form\",error:\"img\",load:\"img\",abort:\"img\"};return d}(),z={}.hasOwnProperty,A;!D(z,\"undefined\")&&!D(z.call,\"undefined\")?A=function(a,b){return z.call(a,b)}:A=function(a,b){return b in a&&D(a.constructor.prototype[b],\"undefined\")},Function.prototype.bind||(Function.prototype.bind=function(b){var c=this;if(typeof c!=\"function\")throw new TypeError;var d=u.call(arguments,1),e=function(){if(this instanceof e){var a=function(){};a.prototype=c.prototype;var f=new a,g=c.apply(f,d.concat(u.call(arguments)));return Object(g)===g?g:f}return c.apply(b,d.concat(u.call(arguments)))};return e}),q.flexbox=function(){return H(\"flexWrap\")};for(var I in q)A(q,I)&&(v=I.toLowerCase(),e[v]=q[I](),t.push((e[v]?\"\":\"no-\")+v));return e.addTest=function(a,b){if(typeof a==\"object\")for(var d in a)A(a,d)&&e.addTest(d,a[d]);else{a=a.toLowerCase();if(e[a]!==c)return e;b=typeof b==\"function\"?b():b,typeof f!=\"undefined\"&&f&&(g.className+=\" \"+(b?\"\":\"no-\")+a),e[a]=b}return e},B(\"\"),i=k=null,e._version=d,e._prefixes=m,e._domPrefixes=p,e._cssomPrefixes=o,e.mq=x,e.hasEvent=y,e.testProp=function(a){return F([a])},e.testAllProps=H,e.testStyles=w,e.prefixed=function(a,b,c){return b?H(a,b,c):H(a,\"pfx\")},g.className=g.className.replace(/(^|\\s)no-js(\\s|$)/,\"$1$2\")+(f?\" js \"+t.join(\" \"):\"\"),e}(this,this.document);";
var mod_pagespeed_tnKaezVk5o = "!function(a,b,c){\"use strict\";function d(a){return a.trim?a.trim():a.replace(/^\\s+|\\s+$/g,\"\")}function e(){var b;R=!1,W=a.devicePixelRatio,U={},V={},b=(W||1)*E.xQuant,E.uT||(E.maxX=Math.max(1.3,E.maxX),b=Math.min(b,E.maxX),w.DPR=b),X.width=Math.max(a.innerWidth||0,C.clientWidth),X.height=Math.max(a.innerHeight||0,C.clientHeight),X.vw=X.width/100,X.vh=X.height/100,X.em=w.getEmValue(),X.rem=X.em,r=E.lazyFactor/2,r=r*b+r,s=.1*b,o=.5+.2*b,p=.5+.25*b,(q=X.width>X.height)||(r*=.9),I&&(r*=.9)}function f(a){if(!(a in T)){var b=[1,\"x\"],c=d(a||\"\");c&&(c=c.replace(N,\"\"),b=c.match(M)?[1*RegExp.$1,RegExp.$2]:!1),T[a]=b}return T[a]}function g(a,b,c){var d=b*Math.pow(a,2);return q||(d/=1.6),a+=d,a>c}function h(a){if(!a.getBoundingClientRect)return!0;var b,c,d,e,f=a.getBoundingClientRect();return!!((b=f.bottom)>=-9&&(e=f.top)<=X.height+9&&(c=f.right)>=-9&&(d=f.left)<=X.height+9&&(b||c||d||e))}function i(a){var b,c=w.getSet(a),d=!1;\"pending\"!=c&&(d=!0,c&&(b=w.setRes(c),d=w.applySetCandidate(b,a))),a[w.ns].evaled=d}function j(a,b){return a.res-b.res}function k(a,b,c){var d;return!c&&b&&(c=a[w.ns].sets,c=c&&c[c.length-1]),d=l(b,c),d&&(b=w.makeUrl(b),a[w.ns].curSrc=b,a[w.ns].curCan=d,d.res||bb(d,d.set.sizes)),d}function l(a,b){var c,d,e;if(a&&b)for(e=w.parseSet(b),a=w.makeUrl(a),c=0;c<e.length;c++)if(a==w.makeUrl(e[c].url)){d=e[c];break}return d}function m(a,b){var c,d,e,f,g=a.getElementsByTagName(\"source\");for(c=0,d=g.length;d>c;c++)e=g[c],e[w.ns]=!0,f=e.getAttribute(\"srcset\"),f&&b.push({srcset:f,media:e.getAttribute(\"media\"),type:e.getAttribute(\"type\"),sizes:e.getAttribute(\"sizes\")})}function n(a){var b,c,d;if(a)for(d=w.parseSet(a),b=0;b<d.length;b++)if(1==d[b].x){c=!0;break}return c}b.createElement(\"picture\");var o,p,q,r,s,t,u,v,w={},x=function(){},y=b.createElement(\"img\"),z=y.getAttribute,A=y.setAttribute,B=y.removeAttribute,C=b.documentElement,D={},E={xQuant:1,lazyFactor:.4,maxX:2},F=\"data-risrc\",G=F+\"set\",H=navigator.userAgent,I=/rident/.test(H)||/ecko/.test(H)&&H.match(/rv\\:(\\d+)/)&&RegExp.$1>35,J=\"currentSrc\",K=/\\s+\\+?\\d+(e\\d+)?w/,L=/(\\([^)]+\\))?\\s*(.+)/,M=/^([\\+eE\\d\\.]+)(w|x)$/,N=/\\s*\\d+h\\s*/,O=a.respimgCFG,P=(\"https:\"==location.protocol,\"position:absolute;left:0;visibility:hidden;display:block;padding:0;border:none;font-size:1em;width:1em;overflow:hidden;clip:rect(0px, 0px, 0px, 0px)\"),Q=\"font-size:100%!important;\",R=!0,S={},T={},U={},V={},W=a.devicePixelRatio,X={px:1,\"in\":96},Y=b.createElement(\"a\"),Z=!1,$=function(a,b,c,d){a.addEventListener?a.addEventListener(b,c,d||!1):a.attachEvent&&a.attachEvent(\"on\"+b,c)},_=function(a,b,c,d){a.removeEventListener?a.removeEventListener(b,c,d||!1):a.detachEvent&&a.detachEvent(\"on\"+b,c)},ab=function(){var a={},b=/^([\\d\\.]+)(em|vw|px)$/,c=function(){for(var a=arguments,b=0,c=a[0];++b in a;)c=c.replace(a[b],a[++b]);return c},d=function(b){return a[b]||(a[b]=\"return \"+c((b||\"\").toLowerCase(),/\\band\\b/g,\"&&\",/,/g,\"||\",/min-([a-z-\\s]+):/g,\"e.$1>=\",/max-([a-z-\\s]+):/g,\"e.$1<=\",/calc([^)]+)/g,\"($1)\",/(\\d+[\\.]*[\\d]*)([a-z]+)/g,\"($1 * e.$2)\",/^(?!(e.[a-z]|[0-9\\.&=|><\\+\\-\\*\\(\\)\\/])).*/gi,\"\")+\";\"),a[b]};return function(a,c){var e;if(!(a in U))if(U[a]=!1,c&&(e=a.match(b)))U[a]=e[1]*X[e[2]];else try{U[a]=new Function(\"e\",d(a))(X)}catch(f){}return U[a]}}(),bb=function(a,b){return a.w?(a.cWidth=w.calcListLength(b||\"100vw\"),a.res=a.w/a.cWidth):a.res=a.x,a},cb=function(a){var c,d,e,f=a||{};if(f.elements&&1==f.elements.nodeType&&(\"IMG\"==f.elements.nodeName.toUpperCase()?f.elements=[f.elements]:(f.context=f.elements,f.elements=null)),c=f.elements||w.qsa(f.context||b,f.reevaluate||f.reparse?w.sel:w.selShort),e=c.length){for(w.setupRun(f),Z=!0,d=0;e>d;d++)w.fillImg(c[d],f);w.teardownRun(f)}},db=function(){var a=function(){_(this,\"load\",a),_(this,\"error\",a),w.fillImgs({elements:[this]})};return function(b){_(b,\"load\",a),_(b,\"error\",a),$(b,\"error\",a),$(b,\"load\",a)}}();J in y||(J=\"src\"),D[\"image/jpeg\"]=!0,D[\"image/gif\"]=!0,D[\"image/png\"]=!0,D[\"image/svg+xml\"]=b.implementation.hasFeature(\"http://wwwindow.w3.org/TR/SVG11/feature#Image\",\"1.1\"),w.ns=(\"ri\"+(new Date).getTime()).substr(0,9),w.supSrcset=\"srcset\"in y,w.supSizes=\"sizes\"in y,w.selShort=\"picture>img,img[srcset]\",w.sel=w.selShort,w.cfg=E,w.supSrcset&&(w.sel+=\",img[\"+G+\"]\"),w.DPR=W||1,w.u=X,w.types=D,u=w.supSrcset&&!w.supSizes,w.setSize=x,w.makeUrl=function(a){return Y.href=a,Y.href},w.qsa=function(a,b){return a.querySelectorAll(b)},w.matchesMedia=function(){return w.matchesMedia=a.matchMedia&&(matchMedia(\"(min-width: 0.1em)\")||{}).matches?function(a){return!a||matchMedia(a).matches}:w.mMQ,w.matchesMedia.apply(this,arguments)},w.mMQ=function(a){return a?ab(a):!0},w.calcLength=function(a){var b=ab(a,!0)||!1;return 0>b&&(b=!1),b},w.supportsType=function(a){return a?D[a]:!0},w.parseSize=function(a){var b;return S[a]||(b=(a||\"\").match(L),S[a]={media:b&&b[1],length:b&&b[2]}),S[a]},w.parseSet=function(a){if(!a.cands){var b,c,d,e,g,h,i=a.srcset;for(a.cands=[];i;)i=i.replace(/^\\s+/g,\"\"),b=i.search(/\\s/g),d=null,-1!=b?(c=i.slice(0,b),e=c.charAt(c.length-1),\",\"!=e&&c||(c=c.replace(/,+$/,\"\"),d=\"\"),i=i.slice(b+1),null==d&&(g=i.indexOf(\",\"),-1!=g?(d=i.slice(0,g),i=i.slice(g+1)):(d=i,i=\"\"))):(c=i,i=\"\"),c&&(d=f(d))&&(h={url:c.replace(/^,+/,\"\"),set:a},h[d[1]]=d[0],a.cands.push(h))}return a.cands},w.getEmValue=function(){var a;if(!t&&(a=b.body)){var c=b.createElement(\"div\"),d=C.style.cssText,e=a.style.cssText;c.style.cssText=P,C.style.cssText=Q,a.style.cssText=Q,a.appendChild(c),t=c.offsetWidth,a.removeChild(c),t=parseFloat(t,10),C.style.cssText=d,a.style.cssText=e}return t||16},w.calcListLength=function(a){if(!(a in V)||E.uT){var b,c,e,f,g,h,i=d(a).split(/\\s*,\\s*/),j=!1;for(g=0,h=i.length;h>g&&(b=i[g],c=w.parseSize(b),e=c.length,f=c.media,!e||!w.matchesMedia(f)||(j=w.calcLength(e))===!1);g++);V[a]=j?j:X.width}return V[a]},w.setRes=function(a){var b;if(a){b=w.parseSet(a);for(var c=0,d=b.length;d>c;c++)bb(b[c],a.sizes)}return b},w.setRes.res=bb,w.applySetCandidate=function(a,b){if(a.length){var c,d,e,f,i,l,m,n,q,t,u,v,x=b[w.ns],y=!0,A=r,B=s;if(n=x.curSrc||b[J],q=x.curCan||k(b,n,a[0].set),d=w.DPR,n&&(q&&q.res<d&&q.res>o&&(v=q.res,q.res<p&&(A*=.87,B+=.04*d),q.res+=A*Math.pow(q.res-B,2)),t=!x.pic||q&&q.set==a[0].set,q&&t&&q.res>=d?m=q:I||b.complete||!z.call(b,\"src\")||b.lazyload||(t||!h(b))&&(m=q,u=n,y=\"L\",db(b))),!m)for(v&&(q.res=q.res-(q.res-v)/2),a.sort(j),l=a.length,m=a[l-1],e=0;l>e;e++)if(c=a[e],c.res>=d){f=e-1,m=a[f]&&(i=c.res-d)&&n!=w.makeUrl(c.url)&&g(a[f].res,i,d)?a[f]:c;break}return v&&(q.res=v),m&&(u=w.makeUrl(m.url),x.curSrc=u,x.curCan=m,u!=n&&w.setSrc(b,m),w.setSize(b)),y}},w.setSrc=function(a,b){var c;a.src=b.url,\"image/svg+xml\"==b.set.type&&(c=a.style.width,a.style.width=a.offsetWidth+1+\"px\",a.offsetWidth+1&&(a.style.width=c))},w.getSet=function(a){var b,c,d,e=!1,f=a[w.ns].sets;for(b=0;b<f.length&&!e;b++)if(c=f[b],c.srcset&&w.matchesMedia(c.media)&&(d=w.supportsType(c.type))){\"pending\"==d&&(c=d),e=c;break}return e},w.parseSets=function(a,b){var d,e,f,g,h=\"PICTURE\"==b.nodeName.toUpperCase(),i=a[w.ns];i.src===c&&(i.src=z.call(a,\"src\"),i.src?A.call(a,F,i.src):B.call(a,F)),i.srcset===c&&(d=z.call(a,\"srcset\"),i.srcset=d,g=!0),i.sets=[],h&&(i.pic=!0,m(b,i.sets)),i.srcset?(e={srcset:i.srcset,sizes:z.call(a,\"sizes\")},i.sets.push(e),f=(u||i.src)&&K.test(i.srcset||\"\"),f||!i.src||l(i.src,e)||n(e)||(e.srcset+=\", \"+i.src,e.cands.push({url:i.src,x:1,set:e}))):i.src&&i.sets.push({srcset:i.src,sizes:null}),i.curCan=null,i.supported=!(h||e&&!w.supSrcset||f),g&&w.supSrcset&&!i.supported&&(d?(A.call(a,G,d),a.srcset=\"\"):B.call(a,G)),i.supported&&!i.srcset&&(!i.src&&a.src||a.src!=w.makeUrl(i.src))&&(null==i.src?a.removeAttribute(\"src\"):a.src=i.src),i.parsed=!0},w.fillImg=function(a,b){var c,d,e=b.reparse||b.reevaluate;if(a[w.ns]||(a[w.ns]={}),d=a[w.ns],\"L\"==d.evaled&&a.complete&&(d.evaled=!1),e||!d.evaled){if(!d.parsed||b.reparse){if(c=a.parentNode,!c)return;w.parseSets(a,c,b)}d.supported?d.evaled=!0:i(a)}},w.setupRun=function(a){(!Z||a.reevaluate||R)&&(e(),a.elements||a.context||clearTimeout(v))},a.HTMLPictureElement?(cb=x,w.fillImg=x):!function(){var c=function(){var d=b.readyState||\"\";clearTimeout(f),f=setTimeout(c,\"loading\"==d?200:a.attachEvent?999:5e3),b.body&&(/d$|^c/.test(d)&&(clearTimeout(f),_(b,\"readystatechange\",c)),w.fillImgs())},d=function(){w.fillImgs({reevaluate:!0})},e=function(){clearTimeout(v),R=!0,v=setTimeout(d,99)},f=setTimeout(c,b.body?9:99);$(a,\"resize\",e),$(b,\"readystatechange\",c)}(),w.respimage=cb,w.fillImgs=cb,w.teardownRun=x,cb._=w,a.respimage=cb,a.respimgCFG={ri:w,push:function(a){var b=a.shift();\"function\"==typeof w[b]?w[b].apply(w,a):(E[b]=a[0],Z&&w.fillImgs({reevaluate:!0}))}};for(;O&&O.length;)a.respimgCFG.push(O.shift())}(window,document);";
