jQuery( document ).ready(function() {
    //styleButtons();
    styleNav();
    styleFpBanner();
});

// function styleButtons() {
//     jQuery(".wp-block-button__link").each(function() {
//         var verticalDecoration = "<div class='button_ornament button_ornament--vertical'><div class='button_ornament-top-bottom'></div><div class='button_ornament-left-right'></div></div>";
//         var horizontalDecoration = "<div class='button_ornament button_ornament--horizontal'><div class='button_ornament-top-bottom'></div><div class='button_ornament-left-right'></div></div>";

//         jQuery(this).wrapInner("<span class='button_label'></span>").addClass('button');

//         jQuery(this).prepend(horizontalDecoration);
//         jQuery(this).prepend(verticalDecoration);
//     })
// }

function styleNav() {
    jQuery(window).scroll(function() {
        var hT = jQuery('.fp-location').offset().top,
            hH = jQuery('.fp-location').outerHeight(),
            wH = jQuery(window).height(),
            wS = jQuery(this).scrollTop();
        if (wS > (hT+hH-wH)){
            jQuery('#site-navigation').addClass('sticky');
        }
        else {
            jQuery('#site-navigation').removeClass('sticky');
        }
     });

    jQuery("li.with-logo").on("click", function() {
        window.location.href = "/";
    })
}

function styleFpBanner() {
    setTimeout(function() {
        jQuery(".fp-banner .kt-inside-inner-col").addClass('start-transition')
    }, 1500);
}