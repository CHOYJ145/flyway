window.onbeforeunload = function () {
    window.scrollTo(0, 0);
};

document.addEventListener("DOMContentLoaded", function() {
    let previousWidth = window.innerWidth;
    function setScreenSize() {
        let vh = window.innerHeight * 0.01;
        document.documentElement.style.setProperty('--vh', `${vh}px`);
    }
    function handleResize() {
        const currentWidth = window.innerWidth;
        if (currentWidth !== previousWidth) {
            previousWidth = currentWidth;
            setScreenSize();
        }
    }
    window.addEventListener('resize', handleResize);
    setScreenSize();
});

$('.nav-btn').on('click', function () {
    $(this).toggleClass('chk');
    if ($(this).hasClass('chk')) {
        $('body').addClass('panel-active');
        $('.panel').fadeIn(300, 'linear');
    } else {
        $('body').removeClass('panel-active');
        $('.panel').fadeOut(300, 'linear');
    }
});

$('.benefit-btn-list .benefit-btn').on('click', function () {
    const thisIdx = $(this).index();
    if (!$(this).hasClass('on')) {
        $('.benefit-btn-list .benefit-btn').not($(this)).removeClass('on');
        $(this).addClass('on');
        $('.benefit-cont').removeClass('on');
        $('.benefit-cont').eq(thisIdx).addClass('on');
        $('.benefit-btn.m').removeClass('on');
        $('.benefit-cont').eq(thisIdx).find('.benefit-btn.m').addClass('on');
    }
});

$('.benefit-btn.m').on('click', function () {
    const $this = $(this);
    const itemParent = $this.parents('.benefit-cont');
    const thisIdx = itemParent.index();
    if (!$this.hasClass('on')) {
        $('.benefit-btn.m').not($this).removeClass('on');
        $this.addClass('on');
        $('.benefit-btn.m').not($this).siblings('.benefit-info').slideUp();

        $this.siblings('.benefit-info').slideDown(300, function () {
            $('html, body').animate({
                scrollTop: itemParent.offset().top - 72
            }, 300);
        });

        $('.benefit-cont').removeClass('on');
        $('.benefit-cont').eq(thisIdx).addClass('on');
        $('.benefit-btn-list .benefit-btn').removeClass('on');
        $('.benefit-btn-list .benefit-btn').eq(thisIdx).addClass('on');
    }
});

$('.recruit-tab').on('click', function () {
    $('.recruit-tab').not($(this)).removeClass('on');
    $(this).addClass('on');
    $('.recruit-filter').removeClass('on');
    $('.recruit-filter--all').addClass('on');
});

$(document).ready(function() {
    function handleFilterClick(filterList) {
        filterList.on('click', '.recruit-filter', function() {
            let $this = $(this);

            if ($this.hasClass('recruit-filter--all')) {
                $this.closest('.recruit-filter-list').find('.recruit-filter').removeClass('on');
                $this.addClass('on');
            } else {
                $this.toggleClass('on');
                $this.closest('.recruit-filter-list').find('.recruit-filter--all').removeClass('on');
            }
        });
    }

    $('.recruit-filter-list').each(function() {
        handleFilterClick($(this));
    });
});

$('.panel-btn').on('click', function () {
    $('body').removeClass('panel-active');
    $('.recruit-filter-wrapper').fadeOut(300, 'linear');
});

$('.filter-panel-btn').on('click', function () {
    $('body').removeClass('panel-active');
    $('.recruit-filter-wrapper').fadeOut(300, 'linear');
});

$('.filter-btn').on('click', function () {
    $('body').addClass('panel-active');
    $('.recruit-filter-wrapper').fadeIn(300, 'linear');
});