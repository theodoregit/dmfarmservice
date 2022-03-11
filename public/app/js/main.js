// navbar dark on scroll
window.onscroll = function () {
  navBarSticky();
};

let topPosition = navbar.offsetTop;

// navbar fixed on scroll
function navBarSticky() {
  const navbar = document.getElementById("navbar");

  let navbarStyle = navbar.style;
  if (window.pageYOffset >= topPosition) {
    navbarStyle.position = "fixed";
    navbarStyle.top = "0";
    navbarStyle.background = "rgba(51,51,51,1.0)";
    if (window.location.pathname === "/blogDetail.html") {
      progress.style.top = "73px";
    }
  } else {
    navbarStyle.position = "absolute";
    navbarStyle.top = "30px";
    navbarStyle.background = "rgba(51,51,51,0.6)";
    if (window.location.pathname === "/blogDetail.html") {
      progress.style.top = "103px";
    }
  }
}

if (window.location.pathname === "/blogDetail.html") {
  document.addEventListener("scroll", function () {
    scroll = ((h[st] || b[st]) / ((h[sh] || b[sh]) - h.clientHeight)) * 100;
    progress.style.setProperty("--scroll", scroll + "%");
  });
  // progressbar
  var h = document.documentElement,
    b = document.body,
    st = "scrollTop",
    sh = "scrollHeight",
    progress = document.querySelector(".progress"),
    scroll;
}

// youtube video popup plugin
$(".youtubeVideo").modalVideo();

//Stats counter up plugin
$(".animationCountUp").counterUp({
  delay: 10,
  time: 1000,
});

// Recent Work Gallery
$("#work").imagesLoaded(function () {
  $(".galary_item").isotope({
    itemSelector: ".singal_item",
    layoutMode: "fitRows",
  });
  // Filter work -Isotope plugin
  $(".portfolio-filter li").on("click", function () {
    $(".portfolio-filter li").removeClass("active");
    $(this).addClass("active");

    var selector = $(this).attr("data-filter");
    $(".galary_item").isotope({
      filter: selector,
      animationOptions: {
        duration: 750,
        easing: "linear",
        queue: 1,
      },
    });
    return false;
  });
});

// testnomial carousel - OwlCarousel Plugin
$(".testmonial_active").owlCarousel({
  loop: true,
  margin: 20,
  nav: false,
  autoplay: true,
  mouseDrag: true,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 2,
    },
    1000: {
      items: 2,
    },
  },
});

// brand slide autoplay
$(".brand_slide_active").owlCarousel({
  loop: true,
  margin: 20,
  nav: false,
  autoplay: true,
  mouseDrag: true,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 4,
    },
    1000: {
      items: 6,
    },
  },
});

//button to scroll the the top
$("#scroll_top").on("click", function () {
  $("html,body").animate(
    {
      scrollTop: 0,
    },
    2000
  );
});

// bootstrap spy scroll
$("body").scrollspy({ target: "#navbar", offset: 50 });
$("#scroll_spy_nav li a").on("click", function (event) {
  if (this.hash !== "") {
    event.preventDefault();
    var hash = this.hash;
    $("html, body").animate(
      {
        scrollTop: $(hash).offset().top,
      },
      890,
      function () {
        window.location.hash = hash;
      }
    );
  }
});

// add active class to nav links when scrolled
$(window).scroll(function () {
  $(".nav-item").removeClass("active");
  $(".active").parent().addClass("active");
});

// hide collapsed navbar when clicked outside, for the small devices
$(function () {
  $(document).click(function (event) {
    $(".navbar-collapse").collapse("hide");
  });
});

// adds "out" class to remove the pageload innimation
$(window).on("load", function () {
  $(".loader").addClass("out");
});

$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
});