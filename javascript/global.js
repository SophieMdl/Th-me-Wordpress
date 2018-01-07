jQuery(document).ready(function($) {
    var $iconMenu = $("#icon-menu");
    var $mainMenu = $("#main-menu");

    var $windowsHeight = $(window).height();
    $('#home-intro').css('height', $windowsHeight);

    //fonction d'animation pour un scroll dynamique
    $('.scroll-to').on('click', function(e) {
        var page = $(this).attr('href');
        $('html, body').animate({ scrollTop: $(page).offset().top }, 1000); // Go
        return false;
    });

    //Menu burger
    $iconMenu.click(function(e) {
        $mainMenu.toggleClass('menu-open');
        $iconMenu.toggleClass('icon-menu-hamburger');
        $iconMenu.toggleClass('icon-menu-hamburger-close');
        return false;
    });

    //Sous-menu déroulants en responsive
    $(".icon-collapsible").click(function(e) {
        var $that = $(this);
        var $submenu = $that.next('.sub-menu');
        $that.find('.icon-arrow-bottom').toggleClass('rotate-icon');

        if ($submenu.hasClass('sub-menu-open')) {
            close($submenu);
        } else {
            close($mainMenu.find('.sub-menu-open'));
            open($submenu);
        }
        return false;
    });

    function close($target) {
        $target.prev(".icon-arrow-bottom").removeClass('rotate-icon');
        $target.slideUp(250, function() {
            $target.removeClass('sub-menu-open').addClass('sub-menu-close');
        });
    }

    function open($target) {
        $target.slideUp(250, function() {
            $target.addClass('sub-menu-open');
            $target.slideDown(250);
            $target.removeClass('sub-menu-close');
        });
    }
});