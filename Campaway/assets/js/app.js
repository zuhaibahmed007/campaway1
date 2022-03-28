$(document).ready(function() {
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll > 100) {
            $(".main_app_navbar_container .navbar").addClass("stickyHeader");
            $(".sticky_logo").css("display", "block");
            $(".main_logo").css("display", "none");

            //MOBILE STICKY
            $(".header_mobile_navbar_container").addClass("stickyHeader");
        } else {
            $(".main_app_navbar_container .navbar").removeClass("stickyHeader");
            $(".sticky_logo").css("display", "none");
            $(".main_logo").css("display", "block");

            //MOBILE STICKY
            $(".header_mobile_navbar_container").removeClass("stickyHeader");
        }
    });

    // $(".card_header img").on("click", function(e){
    //     e.preventDefault();
    //     // alert("JJJ");
    //     $(".card_header_setting_actions").css("display", "flex");
    // });
    $('.card_setting_icon').on('click', function(e) {
        e.preventDefault();
        if ($(this).parent().parent().find(".card_header_setting_actions").hasClass("card_setting_icon_active")) {
            //alert("WO");
            $(this).parent().parent().find(".card_header_setting_actions").removeClass("card_setting_icon_active");
        }
          // Else, the element doesn't have the card_setting_icon_active class, so we remove it from every element before applying it to the element that was clicked
        else {
           // $(".card_header_setting_actions").removeClass("card_setting_icon_active");
            $(this).parent().parent().find(".card_header_setting_actions").addClass("card_setting_icon_active");
        }
    });


});

// jQuery(document).ready(function() {
//     // Hide Header on on scroll down
//     var didScroll;
//     var lastScrollTop = 0;
//     var delta = 50;
//     var navbarHeight = jQuery('.navbar').outerHeight();

//     jQuery(window).scroll(function(event) {
//         didScroll = true;
//     });

//     setInterval(function() {
//         if (didScroll) {
//             hasScrolled();
//             didScroll = false;
//         }
//     }, 250);

//     function hasScrolled() {
//         var st = jQuery(this).scrollTop();
//         // Make sure they scroll more than delta
//         if (Math.abs(lastScrollTop - st) <= delta)
//             return;

//         // If they scrolled down and are past the navbar, add class .nav-up.
//         // This is necessary so you never see what is "behind" the navbar.
//         if (st > lastScrollTop && st > navbarHeight) {
//             // Scroll Down
//             //console.log("DOWN");
//             $(".main_app_navbar_container .navbar").removeClass("stickyHeader").css("top", "0px");


//         } else if (st <= 180) {
//             console.log("CHOTA");

//         } else {
//             // Scroll Up
//             if (st + jQuery(window).height() < jQuery(document).height()) {

//                 console.log("UP");
//                 $(".main_app_navbar_container .navbar").addClass("stickyHeader").css("top", "0px");

//             }
//         }
//         lastScrollTop = st;
//     }

// });