$( document ).ready(function() {
    $('.mouse').on('click', function(e){
        $('html,body').stop().animate({ scrollTop: $('#services').offset().top }, 1000);
        e.preventDefault();
    });
});