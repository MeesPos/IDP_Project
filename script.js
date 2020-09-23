
$(document).ready(function () {
  $('#fullpage').fullpage({
    navigation: true,
    navigationPosition: 'right',
    navigationTooltips: ['section1', 'section2', 'section3', 'section4', 'section5'],
    anchors: ['home', 'producten', 'team', 'contact', 'footer'],
    showActiveTooltip: true,
    keyboardScrolling: true,
    slidesNavigation: true,
    slidesNavPosition: 'bottom',
    controlArrows: false,
  });

});

var owl = $('.owl-team');
owl.owlCarousel({
  loop: true,
  nav: true,
  autoplay: true,
  autoplayTimeout: 5000,
  autoplayHoverPause: true,
  items: 4,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 2
    },
    1000: {
      items: 3
    },
    1650: {
      items: 4
    }
  }
});

var owlPak = $('.owl-paketten');
owlPak.owlCarousel({
  loop: true,
  nav: true,
  items: 3,
  responsive: {
    0: {
      items: 1
    },
    500: {
      items: 1
    },
    900: {
      items: 2
    },
    1650: {
      items: 3
    }
  }
});

window.addEventListener('hashchange',()=>{ 
  let url = window.location.href;
  console.log('hoi');
  if (n = url.includes("home")) {
      document.getElementById("naarBoven").style.display = "none";
      console.log("url = home")
    } else {
      document.getElementById("naarBoven").style.display = "block";
      console.log('niet home');
    }
});
