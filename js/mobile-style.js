function mobileStyle(x) {
    if (x.matches) { // If media query matches
        document.getElementById("mobile-sticky-navbar").className = "navbar-fixed";
        document.getElementById("home-carousel-1").className = "carousel carousel-slider";
        document.getElementById("home-mobile-widget-1").className = "carousel-item";
        document.getElementById("home-mobile-widget-2").className = "carousel-item";
        document.getElementById("home-widget-row-1-col-1").classList.remove('col', 's12', 'm12', 'l12');
        document.getElementById("home-widget-row-1-container").classList.remove('container');
        document.getElementById("home-mobile-widget-row-1").classList.remove('row');
        document.getElementById("home-carousel-2").className = "carousel carousel-slider";
        document.getElementById("home-mobile-widget-3").className = "carousel-item";
        document.getElementById("home-mobile-widget-4").className = "carousel-item";
        document.getElementById("home-widget-row-2-col-1").classList.remove('col', 's12', 'm12', 'l12');
        document.getElementById("home-widget-row-2-container").classList.remove('container');
        document.getElementById("home-mobile-widget-row-2").classList.remove('row');
        document.getElementById("green-ny").classList.remove('right');
        document.getElementById("mobile-vendor-row").classList.remove('hide');
        document.getElementById("contact-carousel-1").className = "carousel carousel-slider center";
        document.getElementById("vendor-carousel-1").className = "carousel-item";
        document.getElementById("vendor-carousel-2").className = "carousel-item";
        document.getElementById("vendor-carousel-3").className = "carousel-item";
        document.getElementById("vendor-carousel-4").className = "carousel-item";
        document.getElementById("vendor-carousel-5").className = "carousel-item";
        document.getElementById("vendor-carousel-6").className = "carousel-item";
    } 
  }
  
  var x = window.matchMedia("(max-width: 600px)")
  mobileStyle(x) // Call listener function at run time
  x.addListener(mobileStyle) // Attach listener function on state changes