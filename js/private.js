$(document).ready(function(){
    
    $('ul.tabs li').click(function(){
        var tab_id = $(this).attr('data-tab');

        $('ul.tabs li').removeClass('current');
        $('.tab-content').removeClass('current');

        $(this).addClass('current');
        $("#"+tab_id).addClass('current');
    })

})

if( $(".check-body input").is(":checked") ) {
   alert(123);
}

$( ".choose-none label" ).click(function() {
	$(".check-body input").removeAttr('checked');
});

$( ".inp-abs label" ).click(function() {
	$(".choose-none input").removeAttr('checked');
});