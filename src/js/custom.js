// Custom JavaScript File
new WOW().init();

( function( $ ) {

  $(".carousel-item").first().addClass( "active" );

  // Click toggle Accordion
  var $link = $('.card h5 a');
  var $collapsed = $('.card h5 a.collapsed');
  $link.on('click', function() {
    $(this).children('.plus-minus').find('i.fa').toggleClass('fa-minus');
  });
} )( jQuery );


( function( $ ) {

  $('.counter').counterUp({
    delay: 10,
    time: 5000,
    offset: 100,
    // beginAt: 100,
    // formatter: function (n) {
    //   return n.replace(/,/g, '.');
    // }
});

} )( jQuery );
