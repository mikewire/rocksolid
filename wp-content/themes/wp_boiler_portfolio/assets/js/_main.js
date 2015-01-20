// Modified http://paulirish.com/2009/markup-based-unobtrusive-comprehensive-dom-ready-execution/
// Only fires on body class (working off strictly WordPress body_class)

var ExampleSite = {
  // All pages
  common: {
    init: function() {    
     
      $(".vert-text").delay(10000).css("display","table-cell");

      $(window).scroll(function() {
        if (!mobile) {
          $('#top.home-header').css({ 'background-position' : "center "+-($(this).scrollTop()/4)+"px" }); 
        }
        if($(this).scrollTop() < 500) {
          $("#main-nav .active").removeClass("active");
        } else if ($(this).scrollTop() > 600 && $(this).scrollTop() < 700) {
          $("#main-nav li:first-child").addClass("active");
        }
      });
  
       $('a[href*=#]:not([href=#])').click(function() {
         if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') || location.hostname === this.hostname) {

           var target = $(this.hash);
           target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
           if (target.length) {
             $('html,body').animate({
               scrollTop: target.offset().top-30
             }, 1000);
             return false;
           }
         }
       });
       if (mobile) {
        $(".navbar-inverse #menu-primary-navigation a").click(function() {
            $(".navbar-collapse").removeClass("in").addClass("collapse");
        });
       }
   },
    finalize: function() { }
  },
  // Home page
  home: {
    init: function() {
 
    }
  },
  // About page
  about: {
    init: function() {
      // JS here
    }
  }
};

var UTIL = {
  fire: function(func, funcname, args) {
    var namespace = ExampleSite;
    funcname = (funcname === undefined) ? 'init' : funcname;
    if (func !== '' && namespace[func] && typeof namespace[func][funcname] === 'function') {
      namespace[func][funcname](args);
    }
  },
  loadEvents: function() {

    UTIL.fire('common');

    $.each(document.body.className.replace(/-/g, '_').split(/\s+/),function(i,classnm) {
      UTIL.fire(classnm);
    });

    UTIL.fire('common', 'finalize');
  }
};

$(document).ready(UTIL.loadEvents);
