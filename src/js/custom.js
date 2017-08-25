(function ($) {
  $(window).scroll(function() {
      var scroll = $(window).scrollTop();

      if (scroll >= 1) {
          $("#wrapper-navbar").addClass("");
      } else {
          $("#wrapper-navbar").removeClass("");
      }
  });
})(jQuery);
