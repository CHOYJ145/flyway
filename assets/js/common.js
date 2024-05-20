window.onbeforeunload = function () {
    window.scrollTo(0, 0);
};

$('.nav-btn').on('click', function(){
    $(this).toggleClass('chk');
    if ($(this).hasClass('chk')){
        $('body').addClass('panel-active');
        $('.panel').fadeIn(300, 'linear');
    }else{
        $('body').removeClass('panel-active');
        $('.panel').fadeOut(300, 'linear');
    }
});