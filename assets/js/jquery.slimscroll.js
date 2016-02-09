(function(e){jQuery.fn.extend({slimScroll:function(n){var r={width:"auto",height:"250px",size:"7px",color:"#000",position:"right",distance:"1px",start:"top",opacity:.4,alwaysVisible:false,disableFadeOut:false,railVisible:false,railColor:"#333",railOpacity:.2,railDraggable:true,railClass:"slimScrollRail",barClass:"slimScrollBar",wrapperClass:"slimScrollDiv",allowPageScroll:false,wheelStep:20,touchScrollStep:200,borderRadius:"7px",railBorderRadius:"7px"};var i=e.extend(r,n);this.each(function(){function x(t){if(!r){return}var t=t||window.event;var n=0;if(t.wheelDelta){n=-t.wheelDelta/120}if(t.detail){n=t.detail/3}var s=t.target||t.srcTarget||t.srcElement;if(e(s).closest("."+i.wrapperClass).is(m.parent())){T(n,true)}if(t.preventDefault&&!v){t.preventDefault()}if(!v){t.returnValue=false}}function T(e,t,n){v=false;var r=e;var s=m.outerHeight()-E.outerHeight();if(t){r=parseInt(E.css("top"))+e*parseInt(i.wheelStep)/100*E.outerHeight();r=Math.min(Math.max(r,0),s);r=e>0?Math.ceil(r):Math.floor(r);E.css({top:r+"px"})}c=parseInt(E.css("top"))/(m.outerHeight()-E.outerHeight());r=c*(m[0].scrollHeight-m.outerHeight());if(n){r=e;var u=r/m[0].scrollHeight*m.outerHeight();u=Math.min(Math.max(u,0),s);E.css({top:u+"px"})}m.scrollTop(r);m.trigger("slimscrolling",~~r);k();L()}function N(){if(window.addEventListener){this.addEventListener("DOMMouseScroll",x,false);this.addEventListener("mousewheel",x,false);this.addEventListener("MozMousePixelScroll",x,false)}else{document.attachEvent("onmousewheel",x)}}function C(){l=Math.max(m.outerHeight()/m[0].scrollHeight*m.outerHeight(),d);E.css({height:l+"px"});var e=l==m.outerHeight()?"none":"block";E.css({display:e})}function k(){C();clearTimeout(a);if(c==~~c){v=i.allowPageScroll;if(h!=c){var e=~~c==0?"top":"bottom";m.trigger("slimscroll",e)}}else{v=false}h=c;if(l>=m.outerHeight()){v=true;return}E.stop(true,true).fadeIn("fast");if(i.railVisible){w.stop(true,true).fadeIn("fast")}}function L(){if(!i.alwaysVisible){a=setTimeout(function(){if(!(i.disableFadeOut&&r)&&!s&&!u){E.fadeOut("slow");w.fadeOut("slow")}},1e3)}}var r,s,u,a,f,l,c,h,p="<div></div>",d=30,v=false;var m=e(this);if(m.parent().hasClass(i.wrapperClass)){var g=m.scrollTop();E=m.parent().find("."+i.barClass);w=m.parent().find("."+i.railClass);C();if(e.isPlainObject(n)){if("height"in n&&n.height=="auto"){m.parent().css("height","auto");m.css("height","auto");var y=m.parent().parent().height();m.parent().css("height",y);m.css("height",y)}if("scrollTo"in n){g=parseInt(i.scrollTo)}else if("scrollBy"in n){g+=parseInt(i.scrollBy)}else if("destroy"in n){E.remove();w.remove();m.unwrap();return}T(g,false,true)}return}i.height=i.height=="auto"?m.parent().height():i.height;var b=e(p).addClass(i.wrapperClass).css({position:"relative",overflow:"hidden",width:i.width,height:i.height});m.css({overflow:"hidden",width:i.width,height:i.height});var w=e(p).addClass(i.railClass).css({width:i.size,height:"100%",position:"absolute",top:0,display:i.alwaysVisible&&i.railVisible?"block":"none","border-radius":i.railBorderRadius,background:i.railColor,opacity:i.railOpacity,zIndex:90});var E=e(p).addClass(i.barClass).css({background:i.color,width:i.size,position:"absolute",top:0,opacity:i.opacity,display:i.alwaysVisible?"block":"none","border-radius":i.borderRadius,BorderRadius:i.borderRadius,MozBorderRadius:i.borderRadius,WebkitBorderRadius:i.borderRadius,zIndex:99});var S=i.position=="right"?{right:i.distance}:{left:i.distance};w.css(S);E.css(S);m.wrap(b);m.parent().append(E);m.parent().append(w);if(i.railDraggable){E.bind("mousedown",function(n){var r=e(document);u=true;t=parseFloat(E.css("top"));pageY=n.pageY;r.bind("mousemove.slimscroll",function(e){currTop=t+e.pageY-pageY;E.css("top",currTop);T(0,E.position().top,false)});r.bind("mouseup.slimscroll",function(e){u=false;L();r.unbind(".slimscroll")});return false}).bind("selectstart.slimscroll",function(e){e.stopPropagation();e.preventDefault();return false})}w.hover(function(){k()},function(){L()});E.hover(function(){s=true},function(){s=false});m.hover(function(){r=true;k();L()},function(){r=false;L()});m.bind("touchstart",function(e,t){if(e.originalEvent.touches.length){f=e.originalEvent.touches[0].pageY}});m.bind("touchmove",function(e){if(!v){e.originalEvent.preventDefault()}if(e.originalEvent.touches.length){var t=(f-e.originalEvent.touches[0].pageY)/i.touchScrollStep;T(t,true);f=e.originalEvent.touches[0].pageY}});C();if(i.start==="bottom"){E.css({top:m.outerHeight()-E.outerHeight()});T(0,true)}else if(i.start!=="top"){T(e(i.start).position().top,null,true);if(!i.alwaysVisible){E.hide()}}N()});return this}});jQuery.fn.extend({slimscroll:jQuery.fn.slimScroll})})(jQuery);



/* NProgress, (c) 2013, 2014 Rico Sta. Cruz - http://ricostacruz.com/nprogress
 * @license MIT */

;(function(root, factory) {

  if (typeof define === 'function' && define.amd) {
    define(factory);
  } else if (typeof exports === 'object') {
    module.exports = factory();
  } else {
    root.NProgress = factory();
  }

})(this, function() {
  var NProgress = {};

  NProgress.version = '0.1.6';

  var Settings = NProgress.settings = {
    minimum: 0.08,
    easing: 'ease',
    positionUsing: '',
    speed: 200,
    trickle: true,
    trickleRate: 0.02,
    trickleSpeed: 800,
    showSpinner: true,
    barSelector: '[role="bar"]',
    spinnerSelector: '[role="spinner"]',
    parent: 'body',
    template: '<div class="bar" role="bar"><div class="peg"></div></div><div class="spinner" role="spinner"><div class="spinner-icon"></div></div>'
  };

  /**
   * Updates configuration.
   *
   *     NProgress.configure({
   *       minimum: 0.1
   *     });
   */
  NProgress.configure = function(options) {
    var key, value;
    for (key in options) {
      value = options[key];
      if (value !== undefined && options.hasOwnProperty(key)) Settings[key] = value;
    }

    return this;
  };

  /**
   * Last number.
   */

  NProgress.status = null;

  /**
   * Sets the progress bar status, where `n` is a number from `0.0` to `1.0`.
   *
   *     NProgress.set(0.4);
   *     NProgress.set(1.0);
   */

  NProgress.set = function(n) {
    var started = NProgress.isStarted();

    n = clamp(n, Settings.minimum, 1);
    NProgress.status = (n === 1 ? null : n);

    var progress = NProgress.render(!started),
        bar      = progress.querySelector(Settings.barSelector),
        speed    = Settings.speed,
        ease     = Settings.easing;

    progress.offsetWidth; /* Repaint */

    queue(function(next) {
      // Set positionUsing if it hasn't already been set
      if (Settings.positionUsing === '') Settings.positionUsing = NProgress.getPositioningCSS();

      // Add transition
      css(bar, barPositionCSS(n, speed, ease));

      if (n === 1) {
        // Fade out
        css(progress, { 
          transition: 'none', 
          opacity: 1 
        });
        progress.offsetWidth; /* Repaint */

        setTimeout(function() {
          css(progress, { 
            transition: 'all ' + speed + 'ms linear', 
            opacity: 0 
          });
          setTimeout(function() {
            NProgress.remove();
            next();
          }, speed);
        }, speed);
      } else {
        setTimeout(next, speed);
      }
    });

    return this;
  };

  NProgress.isStarted = function() {
    return typeof NProgress.status === 'number';
  };

  /**
   * Shows the progress bar.
   * This is the same as setting the status to 0%, except that it doesn't go backwards.
   *
   *     NProgress.start();
   *
   */
  NProgress.start = function() {
    if (!NProgress.status) NProgress.set(0);

    var work = function() {
      setTimeout(function() {
        if (!NProgress.status) return;
        NProgress.trickle();
        work();
      }, Settings.trickleSpeed);
    };

    if (Settings.trickle) work();

    return this;
  };

  /**
   * Hides the progress bar.
   * This is the *sort of* the same as setting the status to 100%, with the
   * difference being `done()` makes some placebo effect of some realistic motion.
   *
   *     NProgress.done();
   *
   * If `true` is passed, it will show the progress bar even if its hidden.
   *
   *     NProgress.done(true);
   */

  NProgress.done = function(force) {
    if (!force && !NProgress.status) return this;

    return NProgress.inc(0.3 + 0.5 * Math.random()).set(1);
  };

  /**
   * Increments by a random amount.
   */

  NProgress.inc = function(amount) {
    var n = NProgress.status;

    if (!n) {
      return NProgress.start();
    } else {
      if (typeof amount !== 'number') {
        amount = (1 - n) * clamp(Math.random() * n, 0.1, 0.95);
      }

      n = clamp(n + amount, 0, 0.994);
      return NProgress.set(n);
    }
  };

  NProgress.trickle = function() {
    return NProgress.inc(Math.random() * Settings.trickleRate);
  };

  /**
   * Waits for all supplied jQuery promises and
   * increases the progress as the promises resolve.
   * 
   * @param $promise jQUery Promise
   */
  (function() {
    var initial = 0, current = 0;
    
    NProgress.promise = function($promise) {
      if (!$promise || $promise.state() == "resolved") {
        return this;
      }
      
      if (current == 0) {
        NProgress.start();
      }
      
      initial++;
      current++;
      
      $promise.always(function() {
        current--;
        if (current == 0) {
            initial = 0;
            NProgress.done();
        } else {
            NProgress.set((initial - current) / initial);
        }
      });
      
      return this;
    };
    
  })();

  /**
   * (Internal) renders the progress bar markup based on the `template`
   * setting.
   */

  NProgress.render = function(fromStart) {
    if (NProgress.isRendered()) return document.getElementById('nprogress');

    addClass(document.documentElement, 'nprogress-busy');
    
    var progress = document.createElement('div');
    progress.id = 'nprogress';
    progress.innerHTML = Settings.template;

    var bar      = progress.querySelector(Settings.barSelector),
        perc     = fromStart ? '-100' : toBarPerc(NProgress.status || 0),
        parent   = document.querySelector(Settings.parent),
        spinner;
    
    css(bar, {
      transition: 'all 0 linear',
      transform: 'translate3d(' + perc + '%,0,0)'
    });

    if (!Settings.showSpinner) {
      spinner = progress.querySelector(Settings.spinnerSelector);
      spinner && removeElement(spinner);
    }

    if (parent != document.body) {
      addClass(parent, 'nprogress-custom-parent');
    }

    parent.appendChild(progress);
    return progress;
  };

  /**
   * Removes the element. Opposite of render().
   */

  NProgress.remove = function() {
    removeClass(document.documentElement, 'nprogress-busy');
    removeClass(document.querySelector(Settings.parent), 'nprogress-custom-parent')
    var progress = document.getElementById('nprogress');
    progress && removeElement(progress);
  };

  /**
   * Checks if the progress bar is rendered.
   */

  NProgress.isRendered = function() {
    return !!document.getElementById('nprogress');
  };

  /**
   * Determine which positioning CSS rule to use.
   */

  NProgress.getPositioningCSS = function() {
    // Sniff on document.body.style
    var bodyStyle = document.body.style;

    // Sniff prefixes
    var vendorPrefix = ('WebkitTransform' in bodyStyle) ? 'Webkit' :
                       ('MozTransform' in bodyStyle) ? 'Moz' :
                       ('msTransform' in bodyStyle) ? 'ms' :
                       ('OTransform' in bodyStyle) ? 'O' : '';

    if (vendorPrefix + 'Perspective' in bodyStyle) {
      // Modern browsers with 3D support, e.g. Webkit, IE10
      return 'translate3d';
    } else if (vendorPrefix + 'Transform' in bodyStyle) {
      // Browsers without 3D support, e.g. IE9
      return 'translate';
    } else {
      // Browsers without translate() support, e.g. IE7-8
      return 'margin';
    }
  };

  /**
   * Helpers
   */

  function clamp(n, min, max) {
    if (n < min) return min;
    if (n > max) return max;
    return n;
  }

  /**
   * (Internal) converts a percentage (`0..1`) to a bar translateX
   * percentage (`-100%..0%`).
   */

  function toBarPerc(n) {
    return (-1 + n) * 100;
  }


  /**
   * (Internal) returns the correct CSS for changing the bar's
   * position given an n percentage, and speed and ease from Settings
   */

  function barPositionCSS(n, speed, ease) {
    var barCSS;

    if (Settings.positionUsing === 'translate3d') {
      barCSS = { transform: 'translate3d('+toBarPerc(n)+'%,0,0)' };
    } else if (Settings.positionUsing === 'translate') {
      barCSS = { transform: 'translate('+toBarPerc(n)+'%,0)' };
    } else {
      barCSS = { 'margin-left': toBarPerc(n)+'%' };
    }

    barCSS.transition = 'all '+speed+'ms '+ease;

    return barCSS;
  }

  /**
   * (Internal) Queues a function to be executed.
   */

  var queue = (function() {
    var pending = [];
    
    function next() {
      var fn = pending.shift();
      if (fn) {
        fn(next);
      }
    }

    return function(fn) {
      pending.push(fn);
      if (pending.length == 1) next();
    };
  })();

  /**
   * (Internal) Applies css properties to an element, similar to the jQuery 
   * css method.
   *
   * While this helper does assist with vendor prefixed property names, it 
   * does not perform any manipulation of values prior to setting styles.
   */

  var css = (function() {
    var cssPrefixes = [ 'Webkit', 'O', 'Moz', 'ms' ],
        cssProps    = {};

    function camelCase(string) {
      return string.replace(/^-ms-/, 'ms-').replace(/-([\da-z])/gi, function(match, letter) {
        return letter.toUpperCase();
      });
    }

    function getVendorProp(name) {
      var style = document.body.style;
      if (name in style) return name;

      var i = cssPrefixes.length,
          capName = name.charAt(0).toUpperCase() + name.slice(1),
          vendorName;
      while (i--) {
        vendorName = cssPrefixes[i] + capName;
        if (vendorName in style) return vendorName;
      }

      return name;
    }

    function getStyleProp(name) {
      name = camelCase(name);
      return cssProps[name] || (cssProps[name] = getVendorProp(name));
    }

    function applyCss(element, prop, value) {
      prop = getStyleProp(prop);
      element.style[prop] = value;
    }

    return function(element, properties) {
      var args = arguments,
          prop, 
          value;

      if (args.length == 2) {
        for (prop in properties) {
          value = properties[prop];
          if (value !== undefined && properties.hasOwnProperty(prop)) applyCss(element, prop, value);
        }
      } else {
        applyCss(element, args[1], args[2]);
      }
    }
  })();

  /**
   * (Internal) Determines if an element or space separated list of class names contains a class name.
   */

  function hasClass(element, name) {
    var list = typeof element == 'string' ? element : classList(element);
    return list.indexOf(' ' + name + ' ') >= 0;
  }

  /**
   * (Internal) Adds a class to an element.
   */

  function addClass(element, name) {
    var oldList = classList(element),
        newList = oldList + name;

    if (hasClass(oldList, name)) return; 

    // Trim the opening space.
    element.className = newList.substring(1);
  }

  /**
   * (Internal) Removes a class from an element.
   */

  function removeClass(element, name) {
    var oldList = classList(element),
        newList;

    if (!hasClass(element, name)) return;

    // Replace the class name.
    newList = oldList.replace(' ' + name + ' ', ' ');

    // Trim the opening and closing spaces.
    element.className = newList.substring(1, newList.length - 1);
  }

  /**
   * (Internal) Gets a space separated list of the class names on the element. 
   * The list is wrapped with a single space on each end to facilitate finding 
   * matches within the list.
   */

  function classList(element) {
    return (' ' + (element.className || '') + ' ').replace(/\s+/gi, ' ');
  }

  /**
   * (Internal) Removes an element from the DOM.
   */

  function removeElement(element) {
    element && element.parentNode && element.parentNode.removeChild(element);
  }

  return NProgress;
});

