(window).scroll(function () {
    "use strict";
    if ((this).scrollTop()) {
        ('#toTop').fadeIn();
    } else {
        ('#toTop').fadeOut();
    }
});

("#toTop").click(function () {
    "use strict";
    ("html, body").animate({scrollTop: 0}, 1000);
});