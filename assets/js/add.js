$('.story-button').on('click', function() {
//    let selectedButton = 'all';
//    selectedButton = $(this).data('tab');
    $('.story-button').removeClass('on');
    $(this).addClass('on');
});

$('.expand-button').on('click', function() {
        $('.story-item.off').removeClass('off');
        $('.expand-button').addClass('off');
    });