require(['jquery','myowl'],function($){
    $(document).ready(function(){

        // the below must be as per your requirement

        $("#owlslider").owlCarousel({
            navigation : true,
            autoplay: true,
            autoplayHoverPause: false,
            autoplaySpeed: 2000,
            loop: true,
            smartSpeed: 450
          });
    });
});