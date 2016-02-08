// Handle Retina images
var pixelRatio = !!window.devicePixelRatio ? window.devicePixelRatio : 1;

$(window).on("load", function() {
    if (pixelRatio > 1) {
        $('.retinaimg').each(function() {
            // Naive replacement that assumes no dots in file names.
            $(this).attr('src', $(this).attr('src').replace(".","@2x."));
        });
    }
});

// Chinese initialization for the jQuery UI date picker plugin.
( function( factory ) {
  if ( typeof define === "function" && define.amd ) {

    // AMD. Register as an anonymous module.
    define( [ "../widgets/datepicker" ], factory );
  } else {

    // Browser globals
    factory( jQuery.datepicker );
  }
}( function( datepicker ) {

datepicker.regional[ "zh-CN" ] = {
  closeText: "关闭",
  prevText: "&#x3C;上月",
  nextText: "下月&#x3E;",
  currentText: "今天",
  monthNames: [ "一月","二月","三月","四月","五月","六月",
  "七月","八月","九月","十月","十一月","十二月" ],
  monthNamesShort: [ "一月","二月","三月","四月","五月","六月",
  "七月","八月","九月","十月","十一月","十二月" ],
  dayNames: [ "星期日","星期一","星期二","星期三","星期四","星期五","星期六" ],
  dayNamesShort: [ "周日","周一","周二","周三","周四","周五","周六" ],
  dayNamesMin: [ "日","一","二","三","四","五","六" ],
  weekHeader: "周",
  dateFormat: "yy-mm-dd",
  firstDay: 1,
  isRTL: false,
  showMonthAfterYear: true,
  yearSuffix: "年" };
datepicker.setDefaults( datepicker.regional[ "zh-CN" ] );

return datepicker.regional[ "zh-CN" ];

} ) );

$(document).ready(function($){

  // Resize footer
  var resizeFooter = function() {  
        $('body').css('margin-bottom', $('#footer').outerHeight());
      },
      didResize = false;

  resizeFooter();

  $(window).resize(function() {
    didResize = true;
  });

  setInterval(function() {  
    if(didResize) {
      didResize = false;
      resizeFooter();
    }
  }, 250);

  // Prepare navigation heights and sizes
	function navPrepare() {
		clearTimeout($.data(this, 'scrollTimer'));
	    $.data(this, 'scrollTimer', setTimeout(function() {
	        if ($("#navigation").offset().top > 50) {
		        $("#navigation .navbar-brand").stop().animate({paddingTop: "10", paddingBottom: "10", backgroundSize: "40", width: "40", height: "40"}, 200);
		        $("#navigation .navbar-nav").stop().animate({paddingTop: "10", paddingBottom: "10"}, 200);
		        $("#navigation .nav > li > a").stop().animate({paddingTop: "10", paddingBottom: "10"}, 200);
		        $("#navigation .navbar-toggle").stop().animate({marginTop: "10", marginBottom: "10"}, 200);
		    } else {
		        $("#navigation .navbar-brand").stop().animate({paddingTop: "15", paddingBottom: "15", backgroundSize: "50", width: "50", height: "50"}, 200);
		        $("#navigation .navbar-nav").stop().animate({paddingTop: "15", paddingBottom: "15"}, 200);
		        $("#navigation .nav > li > a").stop().animate({paddingTop: "15", paddingBottom: "15"}, 200);
		        $("#navigation .navbar-toggle").stop().animate({marginTop: "20", marginBottom: "20"}, 200);
		    }
	    }, 50));
	    /* 
      if ($("#navigation").offset().top > 50) {
		    $("#navigation .navigation-bg").fadeTo(200, 1);
		  } else {
		    $("#navigation .navigation-bg").fadeTo(200, 0.5);
		  }
      */
	  }

	$(window).scroll(function() {
	    navPrepare();
	});

	/* Pattern Parallax */
	$window = $(window);
   	$('section[data-type="background"]').each(function(){
    	var $scroll = $(this);
                     
    	$(window).scroll(function() {
        	var yPos = -($window.scrollTop() / $scroll.data('speed')); 
         
        	var coords = '50% '+ yPos + 'px';
        	$scroll.css({ backgroundPosition: coords });    
      	});
   	});

   /* Cycle Init */
	var slideshows = $('.cycle-slideshow').on('cycle-next cycle-prev', function(e, opts) {
	    // advance the other slideshow
	    slideshows.not(this).cycle('goto', opts.currSlide);
	});

	$('#app-slideshow-pager .cycle-slide').on("click touchstart", function(){
	    var index = $('#app-slideshow-pager').data('cycle.API').getSlideIndex(this);
	    slideshows.cycle('goto', index);
	});

	/* Disable app section link default */
	$(".app-slideshow-pager span > a").on("click", function(e) {
		e.preventDefault();
	});

	/* Handle App Section Link Hover */
	$(".app-slideshow-pager span > a").hover(function() {
		var elementClass = $(this).attr("class").replace("nav-", "");
		// Find On Image
		if ($("img", this).hasClass("nav-item-on") == true) {
			$(".nav-item-on-container", this).stop().animate({opacity: 1}, 250, function() {
				// Remove Off Image
				$(this).siblings(".nav-item-off").css("display", "none");
			});
		}
		else {
			// Append On Image
			$(this).append("<div class=\"nav-item-on-container\"><img src=\"/assets/images/" + elementClass + "-on.png\" class=\"nav-item-on\" /></div>");
			$(".nav-item-on-container", this).stop().animate({opacity: 1}, 250, function() {
				// Remove Off Image
				$(this).siblings(".nav-item-off").css("display", "none");
			});
		}
		// Handle span Animation
		$("span", this).stop().animate({opacity: 1}, 250);
	}, function() {
		$(".nav-item-off", this).css("display", "inline");
		$(".nav-item-on-container", this).stop().animate({opacity: 0}, 250, function() {
			$(".nav-item-on-container", this).remove();	
		});
		$("span", this).stop().animate({opacity: 0}, 250);
	});

	$(".app-slideshow-pager span > a").height($(".app-slideshow-pager span > a").width());
	/* Window resize */
	$(window).resize(function() {
		$(".app-slideshow-pager span > a").height($(".app-slideshow-pager span > a").width());
	})

	/* Form Validation */
	function validate() {
		/* Form Input Label Handle */
		$(".master-text").each(function() {
			if ($(this).val() == "") {
				$(this).siblings(".master-text-label").stop().animate({"opacity": 1}, 200);
			}
			else {
				$(this).siblings(".master-text-label").stop().animate({"opacity": 0}, 200);
			}
		});
		$(".master-text").on("keyup change", function() {
			// Handle Label
			if ($(this).val() == "") {
				$(this).siblings(".master-text-label").stop().animate({"opacity": 1}, 200);
			}
			else {
				$(this).siblings(".master-text-label").stop().animate({"opacity": 0}, 200);
			}
		});
		$(".mailing-list-form").validate({
      focusCleanup: true,
      onkeyup: false,
			submitHandler: function(form) {
				$(".mailing-list-submission-bg").css("display", "block").animate({opacity: 0.5}, 200, function() {
					$.post("/subscribe.php", {email: $("#email").val() }, function(data) {
						$(".mailing-list-form").animate({opacity: 0}, 200, function() {
							$(this).css("display", "none");
							$(".mailing-list > div").css("opacity", "0").html(data).animate({opacity: 1}, 200, validate());
							$(".mailing-list-submission-bg").animate({opacity: 0}, 200, function() {$(this).css("display", "none"); $("#email").focus();});
						});
					});
				});
			},
			rules: {
        name: {required: true},
        phone: {required: true, digits: true, minlength: 11},
				email: {required: true, email: true},
        duedate: {required: true},
        address: {required: true},
        postcode: {required: true, digits: true, minlength: 6},
        proof: {required: true, extension: "jpg|jpeg|bmp|png|gif|tiff"},
        check: {required: true}
			}
		});
	}
	validate();

	$(".device-features-point").css("opacity", 0);
	var waypoint = new Waypoint({
	  	element: document.getElementById("section-device"),
	  	handler: function() {
	  		$(".device-features-point").each(function(index) {
			    $(this).delay(200 * index).animate({"opacity": 1}, 800);
			});
	    	this.destroy();
	  	},
	  	offset: 'bottom-in-view'
	})

  /* Beta form */
  // Due date picker
  $("#duedate").datepicker({minDate: +1, maxDate: +161,
    onSelect: function() { 
      // Handle Label
      if ($(this).val() == "") {
        $(this).siblings("#due-date-label").stop().animate({"opacity": 1}, 200);
      }
      else {
        $(this).siblings("#due-date-label").stop().animate({"opacity": 0}, 200);
      }
    }
    
  });
  
  // Country select box
  $("#country-select").selectBox();
  $(".selectBox-dropdown").css("color", "#ccc");
  $("#country-select").on("change", function() {
    if ($("#country-select").val() != "选择城市") {
      $(".selectBox-dropdown").css("color", "#999");
    }
  });
});

/**
 *
 * SoundManager 2 Demo: Play MP3 links "in-place"
 * ----------------------------------------------
 *
 * http://schillmania.com/projects/soundmanager2/
 *
 * A simple demo making MP3s playable "inline"
 * and easily styled/customizable via CSS.
 *
 * Requires SoundManager 2 Javascript API.
 *
 */

function InlinePlayer() {
  var self = this;
  var pl = this;
  var sm = soundManager; // soundManager instance
  var isIE = (navigator.userAgent.match(/msie/i));
  this.playableClass = 'inline-playable'; // CSS class for forcing a link to be playable (eg. doesn't have .MP3 in it)
  this.excludeClass = 'inline-exclude'; // CSS class for ignoring MP3 links
  this.links = [];
  this.sounds = [];
  this.soundsByURL = [];
  this.indexByURL = [];
  this.lastSound = null;
  this.soundCount = 0;

  this.config = {
    playNext: false, // stop after one sound, or play through list until end
    autoPlay: false  // start playing the first sound right away
  }

  this.css = {
    // CSS class names appended to link during various states
    sDefault: 'sm2_link', // default state
    sLoading: 'sm2_loading',
    sPlaying: 'sm2_playing',
    sPaused: 'sm2_paused'
  }

  this.addEventHandler = (typeof window.addEventListener !== 'undefined' ? function(o, evtName, evtHandler) {
    return o.addEventListener(evtName,evtHandler,false);
  } : function(o, evtName, evtHandler) {
    o.attachEvent('on'+evtName,evtHandler);
  });

  this.removeEventHandler = (typeof window.removeEventListener !== 'undefined' ? function(o, evtName, evtHandler) {
    return o.removeEventListener(evtName,evtHandler,false);
  } : function(o, evtName, evtHandler) {
    return o.detachEvent('on'+evtName,evtHandler);
  });

  this.classContains = function(o,cStr) {
	return (typeof(o.className)!='undefined'?o.className.match(new RegExp('(\\s|^)'+cStr+'(\\s|$)')):false);
  }

  this.addClass = function(o,cStr) {
    if (!o || !cStr || self.classContains(o,cStr)) return false;
    o.className = (o.className?o.className+' ':'')+cStr;
  }

  this.removeClass = function(o,cStr) {
    if (!o || !cStr || !self.classContains(o,cStr)) return false;
    o.className = o.className.replace(new RegExp('( '+cStr+')|('+cStr+')','g'),'');
  }

  this.getSoundByURL = function(sURL) {
    return (typeof self.soundsByURL[sURL] != 'undefined'?self.soundsByURL[sURL]:null);
  }

  this.isChildOfNode = function(o,sNodeName) {
    if (!o || !o.parentNode) {
      return false;
    }
    sNodeName = sNodeName.toLowerCase();
    do {
      o = o.parentNode;
    } while (o && o.parentNode && o.nodeName.toLowerCase() != sNodeName);
    return (o.nodeName.toLowerCase() == sNodeName?o:null);
  }

  this.events = {

    // handlers for sound events as they're started/stopped/played

    play: function() {
      pl.removeClass(this._data.oLink,this._data.className);
      this._data.className = pl.css.sPlaying;
      pl.addClass(this._data.oLink,this._data.className);
    },

    stop: function() {
      pl.removeClass(this._data.oLink,this._data.className);
      this._data.className = '';
    },

    pause: function() {
      pl.removeClass(this._data.oLink,this._data.className);
      this._data.className = pl.css.sPaused;
      pl.addClass(this._data.oLink,this._data.className);
    },

    resume: function() {
      pl.removeClass(this._data.oLink,this._data.className);
      this._data.className = pl.css.sPlaying;
      pl.addClass(this._data.oLink,this._data.className);      
    },

    finish: function() {
      pl.removeClass(this._data.oLink,this._data.className);
      this._data.className = '';
      if (pl.config.playNext) {
        var nextLink = (pl.indexByURL[this._data.oLink.href]+1);
        if (nextLink<pl.links.length) {
          pl.handleClick({'target':pl.links[nextLink]});
        }
      }
    }

  }

  this.stopEvent = function(e) {
   if (typeof e != 'undefined' && typeof e.preventDefault != 'undefined') {
      e.preventDefault();
    } else if (typeof event != 'undefined' && typeof event.returnValue != 'undefined') {
      event.returnValue = false;
    }
    return false;
  }

  this.getTheDamnLink = (isIE)?function(e) {
    // I really didn't want to have to do this.
    return (e && e.target?e.target:window.event.srcElement);
  }:function(e) {
    return e.target;
  }

  this.handleClick = function(e) {
    // a sound link was clicked
    if (typeof e.button != 'undefined' && e.button>1) {
      // ignore right-click
      return true;
    }
    var o = self.getTheDamnLink(e);
    if (o.nodeName.toLowerCase() != 'a') {
      o = self.isChildOfNode(o,'a');
      if (!o) return true;
    }
    var sURL = o.getAttribute('href');
    if (!o.href || (!sm.canPlayLink(o) && !self.classContains(o,self.playableClass)) || self.classContains(o,self.excludeClass)) {
      return true; // pass-thru for non-MP3/non-links
    }
    var soundURL = (o.href);
    var thisSound = self.getSoundByURL(soundURL);
    if (thisSound) {
      // already exists
      if (thisSound == self.lastSound) {
        // and was playing (or paused)
        thisSound.togglePause();
      } else {
        // different sound
        sm._writeDebug('sound different than last sound: '+self.lastSound.id);
        if (self.lastSound) {
          self.stopSound(self.lastSound);
        }
        thisSound.togglePause(); // start playing current
      }
    } else {
      // stop last sound
      if (self.lastSound) {
        self.stopSound(self.lastSound);
      }
      // create sound
      thisSound = sm.createSound({
       id:'inlineMP3Sound'+(self.soundCount++),
       url:soundURL,
       onplay:self.events.play,
       onstop:self.events.stop,
       onpause:self.events.pause,
       onresume:self.events.resume,
       onfinish:self.events.finish,
       type:(o.type||null)
      });
      // tack on some custom data
      thisSound._data = {
        oLink: o, // DOM node for reference within SM2 object event handlers
        className: self.css.sPlaying
      };
      self.soundsByURL[soundURL] = thisSound;
      self.sounds.push(thisSound);
      thisSound.play();
    }

    self.lastSound = thisSound; // reference for next call

    if (typeof e != 'undefined' && typeof e.preventDefault != 'undefined') {
      e.preventDefault();
    } else {
      event.returnValue = false;
    }
    return false;
  }

  this.stopSound = function(oSound) {
    soundManager.stop(oSound.id);
    soundManager.unload(oSound.id);
  }

  this.init = function() {
    sm._writeDebug('inlinePlayer.init()');
    var oLinks = document.getElementsByTagName('a');
    // grab all links, look for .mp3
    var foundItems = 0;
    for (var i=0, j=oLinks.length; i<j; i++) {
      if ((sm.canPlayLink(oLinks[i]) || self.classContains(oLinks[i],self.playableClass)) && !self.classContains(oLinks[i],self.excludeClass)) {
        self.addClass(oLinks[i],self.css.sDefault); // add default CSS decoration
        self.links[foundItems] = (oLinks[i]);
        self.indexByURL[oLinks[i].href] = foundItems; // hack for indexing
        foundItems++;
      }
    }
    if (foundItems>0) {
      self.addEventHandler(document,'click',self.handleClick);
      if (self.config.autoPlay) {
        self.handleClick({target:self.links[0],preventDefault:function(){}});
      }
    }
    sm._writeDebug('inlinePlayer.init(): Found '+foundItems+' relevant items.');
  }

  this.init();

}

var inlinePlayer = null;

soundManager.setup({
  debugMode: true,
  // use HTML5 audio for MP3/MP4, if available
  preferFlash: false,
  useFlashBlock: true,
  // path to directory containing SM2 SWF
  url: '../../swf/',
  // optional: enable MPEG-4/AAC support (requires flash 9)
  flashVersion: 9
});

// ----

soundManager.onready(function() {
  // soundManager.createSound() etc. may now be called
  inlinePlayer = new InlinePlayer();
});