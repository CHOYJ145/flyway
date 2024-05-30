document.addEventListener('DOMContentLoaded', function () {
    window.scrollTo(0, 0);
    document.body.classList.add('scroll--p');

    let lastScrollPosition = 0;
    document.addEventListener('scroll', function () {
        const header = document.querySelector('header');
        let currentScrollPosition = window.pageYOffset;
        const sections = document.querySelectorAll('.sec--chk');
        const sec2Section = document.querySelector('.sec--2.sec--chk'); // 타겟 섹션 선택
        const sec3Section = document.querySelector('.sec--3.sec--chk'); // 타겟 섹션 선택
        const sec4Section = document.querySelector('.sec--4.sec--chk'); // 타겟 섹션 선택
        const triggerHeight = window.innerHeight;
        const videoWrap = document.querySelector('.video--main-wrap');
        const screenHeightFifth = window.innerHeight / 2;

        if (currentScrollPosition > lastScrollPosition) {
            header.classList.add('act');
        } else if (currentScrollPosition < lastScrollPosition) {
            header.classList.remove('act');
        }

        lastScrollPosition = currentScrollPosition;

        sections.forEach(section => {
            const sectionTop = section.getBoundingClientRect().top;
            const sectionBottom = section.getBoundingClientRect().bottom;

            if (sectionTop <= 0 && sectionBottom > 0) {
                section.classList.add('act');
                if(section.classList.contains('sec--3')){
                    section.classList.add('act--s');
                }else{
                    section.classList.add('act');
                }
            } else {
                section.classList.remove('act');
            }
        });

        // sec--3 섹션에 대한 조건
        const sec3Top = sec3Section.getBoundingClientRect().top;
        const sec3Bottom = sec3Section.getBoundingClientRect().bottom;

        if (sec3Top <= triggerHeight && sec3Bottom >= triggerHeight) {
            sec3Section.classList.add('etc');
            sec2Section.classList.add('act--f');
        } else {
            sec3Section.classList.remove('etc');
            sec2Section.classList.remove('act--f');
        }

        // sec--4 섹션에 대한 조건
        const sec4Top = sec4Section.getBoundingClientRect().top;
        const sec4Bottom = sec4Section.getBoundingClientRect().bottom;

        if (sec4Top <= triggerHeight && sec4Bottom >= triggerHeight) {
            sec4Section.classList.add('etc');
        } else {
            sec4Section.classList.remove('etc');
        }

        // .video--main-wrap의 transform: scale 조정
        const videoWrapTop = videoWrap.getBoundingClientRect().top;
        const videoWrapBottom = videoWrap.getBoundingClientRect().bottom;

        if (videoWrapBottom >= window.innerHeight && videoWrapTop <= window.innerHeight) {
            const scrollProgress = (window.innerHeight - videoWrapTop) / screenHeightFifth;
            const scaleValue = Math.min(Math.max(0.6 + (1 - 0.6) * scrollProgress, 0.6), 1);
            videoWrap.style.transform = `scale(${scaleValue})`;
        }
    });

    document.addEventListener('mousemove', function (e) {
        const container = document.querySelector('.float-img-wrapper');
        const range = 2;

        const centerX = window.innerWidth / 2;
        const centerY = window.innerHeight / 2;

        const moveX = (e.clientX - centerX) * range / centerX;
        const moveY = (e.clientY - centerY) * range / centerY;

        container.style.transform = `translate(${moveX}px, ${moveY}px)`;
    });
});

window.onbeforeunload = function () {
    window.scrollTo(0, 0);
    document.body.classList.add('scroll--p');
};