/* jQuery(document).ready(function ($) {
    // Set initial background
    $('.frontpage-container').css('background-image', 'url(' + day_night_params.day_image + ')');

    $(window).scroll(function () {
        // Change background on scroll
        var scroll = $(window).scrollTop();
        var windowHeight = $(window).height();
        var documentHeight = $(document).height();
        var percentage = (scroll / (documentHeight - windowHeight)) * 100;

        // Adjust the percentage based on your desired transition point
        if (percentage < 50) {
            $('.frontpage-container').css('background-image', 'url(' + day_night_params.day_image + ')');
        } else {
            $('.frontpage-container').css('background-image', 'url(' + day_night_params.night_image + ')');
        }
    });
});
 */
