!function(e){"function"==typeof define&&define.amd?define(["jquery"],e):e("object"==typeof exports?require("jquery"):jQuery)}(function(e){var t,n=navigator.userAgent,a=/iphone/i.test(n),r=/chrome/i.test(n),i=/android/i.test(n);e.mask={definitions:{9:"[0-9]",a:"[A-Za-z]","*":"[A-Za-z0-9]"},autoclear:!0,dataName:"rawMaskFn",placeholder:"_"},e.fn.extend({caret:function(e,t){var n;if(0!==this.length&&!this.is(":hidden"))return"number"==typeof e?(t="number"==typeof t?t:e,this.each(function(){this.setSelectionRange?this.setSelectionRange(e,t):this.createTextRange&&((n=this.createTextRange()).collapse(!0),n.moveEnd("character",t),n.moveStart("character",e),n.select())})):(this[0].setSelectionRange?(e=this[0].selectionStart,t=this[0].selectionEnd):document.selection&&document.selection.createRange&&(n=document.selection.createRange(),e=0-n.duplicate().moveStart("character",-1e5),t=e+n.text.length),{begin:e,end:t})},unmask:function(){return this.trigger("unmask")},mask:function(n,o){var c,l,u,s,f,h,g;if(!n&&this.length>0){var m=e(this[0]).data(e.mask.dataName);return m?m():void 0}return o=e.extend({autoclear:e.mask.autoclear,placeholder:e.mask.placeholder,completed:null},o),c=e.mask.definitions,l=[],u=h=n.length,s=null,e.each(n.split(""),function(e,t){"?"==t?(h--,u=e):c[t]?(l.push(new RegExp(c[t])),null===s&&(s=l.length-1),u>e&&(f=l.length-1)):l.push(null)}),this.trigger("unmask").each(function(){function m(){if(o.completed){for(var e=s;f>=e;e++)if(l[e]&&R[e]===d(e))return;o.completed.call(j)}}function d(e){return o.placeholder.charAt(e<o.placeholder.length?e:0)}function p(e){for(;++e<h&&!l[e];);return e}function v(e,t){var n,a;if(!(0>e)){for(n=e,a=p(t);h>n;n++)if(l[n]){if(!(h>a&&l[n].test(R[a])))break;R[n]=R[a],R[a]=d(a),a=p(a)}y(),j.caret(Math.max(s,e))}}function b(){x(),j.val()!=A&&j.change()}function k(e,t){var n;for(n=e;t>n&&h>n;n++)l[n]&&(R[n]=d(n))}function y(){j.val(R.join(""))}function x(e){var t,n,a,r=j.val(),i=-1;for(t=0,a=0;h>t;t++)if(l[t]){for(R[t]=d(t);a++<r.length;)if(n=r.charAt(a-1),l[t].test(n)){R[t]=n,i=t;break}if(a>r.length){k(t+1,h);break}}else R[t]===r.charAt(a)&&a++,u>t&&(i=t);return e?y():u>i+1?o.autoclear||R.join("")===S?(j.val()&&j.val(""),k(0,h)):y():(y(),j.val(j.val().substring(0,i+1))),u?t:s}var j=e(this),R=e.map(n.split(""),function(e,t){return"?"!=e?c[e]?d(t):e:void 0}),S=R.join(""),A=j.val();j.data(e.mask.dataName,function(){return e.map(R,function(e,t){return l[t]&&e!=d(t)?e:null}).join("")}),j.one("unmask",function(){j.off(".mask").removeData(e.mask.dataName)}).on("focus.mask",function(){var e;j.prop("readonly")||(clearTimeout(t),A=j.val(),e=x(),t=setTimeout(function(){j.get(0)===document.activeElement&&(y(),e==n.replace("?","").length?j.caret(0,e):j.caret(e))},10));j.focusout(function(){x()>5?j.parent().addClass("shas-error"):j.parent().removeClass("is-completed")})}).on("blur.mask",b).on("keydown.mask",function(e){if(!j.prop("readonly")){var t,n,r,i=e.which||e.keyCode;g=j.val(),8===i||46===i||a&&127===i?(n=(t=j.caret()).begin,(r=t.end)-n==0&&(n=46!==i?function(e){for(;--e>=0&&!l[e];);return e}(n):r=p(n-1),r=46===i?p(r):r),k(n,r),v(n,r-1),e.preventDefault()):13===i?b.call(this,e):27===i&&(j.val(A),j.caret(0,x()),e.preventDefault())}}).on("keypress.mask",function(t){if(!j.prop("readonly")){var n,a,r,o=t.which||t.keyCode,c=j.caret();t.ctrlKey||t.altKey||t.metaKey||32>o||!o||13===o||(c.end-c.begin!=0&&(k(c.begin,c.end),v(c.begin,c.end-1)),n=p(c.begin-1),h>n&&(a=String.fromCharCode(o),l[n].test(a))&&(function(e){var t,n,a,r;for(t=e,n=d(e);h>t;t++)if(l[t]){if(a=p(t),r=R[t],R[t]=n,!(h>a&&l[a].test(r)))break;n=r}}(n),R[n]=a,y(),r=p(n),i?setTimeout(function(){e.proxy(e.fn.caret,j,r)()},0):j.caret(r),c.begin<=f&&m()),t.preventDefault())}}).on("input.mask paste.mask",function(){j.prop("readonly")||setTimeout(function(){var e=x(!0);j.caret(e),m()},0)}),r&&i&&j.off("input.mask").on("input.mask",function(){var e=j.val(),t=j.caret();if(g&&g.length&&g.length>e.length){for(x(!0);t.begin>0&&!l[t.begin-1];)t.begin--;if(0===t.begin)for(;t.begin<s&&!l[t.begin];)t.begin++;j.caret(t.begin,t.begin)}else{for(x(!0);t.begin<h&&!l[t.begin];)t.begin++;j.caret(t.begin,t.begin)}m()}),x()})}})});