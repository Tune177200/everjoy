$(document).ready(function() {
    let lastScrollTop = 0;
    const bottomNav = $('.bottom_nav');

    $(window).scroll(function() {
        let scrollTop = $(this).scrollTop();
        let windowHeight = $(this).height();
        let documentHeight = $(document).height();

        if (scrollTop > lastScrollTop) {
            // Scrolling down
            bottomNav.addClass('bottom_nav_hide');
        } else {
            // Scrolling up
            bottomNav.removeClass('bottom_nav_hide');
        }

        // Show the div when scrolled to the bottom
        if (scrollTop + windowHeight >= documentHeight) {
            bottomNav.removeClass('bottom_nav_hide');
        }

        // Hide the div when scrolled to the top
        if (scrollTop === 0) {
            bottomNav.addClass('bottom_nav_hide');
        }

        lastScrollTop = scrollTop;
    });


    $(".block_footer .title").click(function() {
        $(this).parent().toggleClass("selected");
        $(this).next(".contents").toggleClass("active");
        $(this).parent().siblings().find(".contents").removeClass("active");
        $(this).parent().siblings().removeClass("selected");
    });

    // Check screen width on page load
    checkScreenWidth();

    // Check screen width on window resize
    $(window).resize(function() {
        checkScreenWidth();
    });

    function checkScreenWidth() {
        if ($(window).width() <= 1024) {
            $(".block_footer .contents").removeClass("active");
            $(".block_footer .title").removeClass("selected");
        } else {
            $(".block_footer .contents").addClass("active");
            $(".block_footer .title").addClass("selected");
        }
    }

    $('.minus').click(function () {
        var $input = $(this).parent().find('input');
        var count = parseInt($input.val()) - 1;
        count = count < 1 ? 1 : count;
        $input.val(count);
        $input.change();
        return false;
    });
    $('.plus').click(function () {
        var $input = $(this).parent().find('input');
        $input.val(parseInt($input.val()) + 1);
        $input.change();
        return false;
    });


    $('.toggle-button').on('click', function () {
        // Toggle the "selected" class on the closest '.card-header' element
        $(this).closest('.card-header').toggleClass('selected');
    });
});