$(document).ready(function(){

    setTimeout(function(){
        $('.line-load').addClass('active');
    }, 200);
    setTimeout(function(){
        $('.line-load.active').addClass('hide');
    }, 1200);
    
    $('ul.tabs li').click(function(){
        var tab_id = $(this).attr('data-tab');

        $('ul.tabs li').removeClass('current');
        $('.tab-content').removeClass('current');

        $(this).addClass('current');
        $("#"+tab_id).addClass('current');
    })

    $( ".choose-none label" ).click(function() {
        $(".check-body input").removeAttr('checked');
    });

    $( ".inp-abs label" ).click(function() {
        $(".choose-none input").removeAttr('checked');
    });

    $( ".clc-chart" ).click(function() {
        $(".box-char-typ, .box-typical").addClass('active');
    });

    $( ".btn-meat" ).click(function() {
        $(".box-step-meat, .box-processing").addClass('active');

        $('.count').each(function () {
            $(this).prop('Counter',0).animate({
                Counter: $(this).text()
            }, {
                duration: 4000,
                easing: 'swing',
                step: function (now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
        setTimeout(function(){
            $('.box-processing').removeClass('active');
            $('.box-mail').addClass('active');
        }, 5000);

    });

    $('.answ').hide();
    $( ".title-quess" ).click(function() {
        $(this).toggleClass('active');
        $(this).next().slideToggle('400');
    });

})