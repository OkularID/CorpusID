$(function() {
    var $tabButtonItem = $('#tab-button li'),
        $tabSelect = $('#tab-select'),
        $tabContents = $('.tab-contents'),
        activeClass = 'is-active';

    $tabButtonItem.first().addClass(activeClass);
    $tabContents.not(':first').hide();

    $tabButtonItem.find('a').on('click', function(e) {
        var target = $(this).attr('href');

        $tabButtonItem.removeClass(activeClass);
        $(this).parent().addClass(activeClass);
        $tabSelect.val(target);
        $tabContents.hide();
        $(target).show();
        e.preventDefault();
    });

    $tabSelect.on('change', function() {
        var target = $(this).val(),
            targetSelectNum = $(this).prop('selectedIndex');

        $tabButtonItem.removeClass(activeClass);
        $tabButtonItem.eq(targetSelectNum).addClass(activeClass);
        $tabContents.hide();
        $(target).show();
    });
});


$(document).ready(function(){
    $(window).scroll(function() {
        if ($(this).scrollTop() > 500) {

            // $('#navbarcorpus').fadeOut();
            // $('#navbarcorpus').addClass('hiddennav');
            // $('#navbarcorpus').removeClass('shownav');

            $('#homemotif-1').fadeOut();
            $('#homemotif-2').fadeOut();
            $('#homemotif-3').fadeOut();
            $('.nav-corpus2').addClass('solid');
        } else {

            // $('#navbarcorpus').fadeIn();
            // $('#navbarcorpus').removeClass('hiddennav');
            // $('#navbarcorpus').addClass('shownav');
            $('.nav-corpus2').removeClass('solid');

            $('#homemotif-1').fadeIn();
            $('#homemotif-2').fadeIn();
            $('#homemotif-3').fadeIn();
        }
    });
});