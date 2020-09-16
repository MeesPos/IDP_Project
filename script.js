$(document).ready(function() {
    $('#fullpage').fullpage({
      navigation: true,
      navigationPosition: 'right',
      navigationTooltips: ['section1', 'section2','section3','section4','section5'],
      anchors: ['home', 'producten', 'team', 'contact', 'footer'],
      showActiveTooltip: true,
      keyboardScrolling: true,
      slidesNavigation: true,
        slidesNavPosition: 'bottom',
      controlArrows:false,
    });
});
