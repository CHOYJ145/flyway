document.addEventListener('DOMContentLoaded', function () {
    const firstSection = document.querySelector('.sec--1');
    if (firstSection) {
        firstSection.classList.add('act');
    }

    let lastScrollPosition = 0;
    document.addEventListener('scroll', function () {
        const header = document.querySelector('header');
        let currentScrollPosition = window.pageYOffset;
        const sections = document.querySelectorAll('section');
        const triggerHeight = window.innerHeight;

        if (currentScrollPosition > lastScrollPosition) {
            header.classList.add('act');
        } else if (currentScrollPosition < lastScrollPosition) {
            header.classList.remove('act');
        }

        lastScrollPosition = currentScrollPosition;

        sections.forEach(section => {
            const sectionTop = section.getBoundingClientRect().top;
            if (sectionTop <= 0 && sectionTop >= -triggerHeight) {
                section.classList.add('act');
            } else {
                section.classList.remove('act');
            }
        });
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

    const coverMain = document.querySelector('.cover--main');
    const sec4 = document.querySelector('.sec--4');
    const viewportHeight = window.innerHeight;

    // Observer 인스턴스 생성
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const initialPosition = window.pageYOffset;
                // 스크롤 내리는 동안 `show` 추가
                const checkScroll = () => {
                    const currentPosition = window.pageYOffset;
                    if (currentPosition >= initialPosition + viewportHeight) {
                        entry.target.classList.add('show');
                        window.removeEventListener('scroll', checkScroll);
                    }
                };
                window.addEventListener('scroll', checkScroll);
            } else {
                // 스크롤 올리는 동안 `show` 제거
                const initialPosition = window.pageYOffset;
                const checkScrollUp = () => {
                    const currentPosition = window.pageYOffset;
                    // 스크롤을 위로 올렸을 때 초기 조건 위치에 도달하면 `show` 제거
                    if (currentPosition <= initialPosition - viewportHeight) {
                        entry.target.classList.remove('show');
                        window.removeEventListener('scroll', checkScrollUp);
                    }
                };
                window.addEventListener('scroll', checkScrollUp);
            }
        });
    }, {
        root: null,
        rootMargin: `-${viewportHeight}px 0px 0px 0px`,
        threshold: 0
    });

    observer.observe(coverMain);
});

window.onbeforeunload = function () {
    window.scrollTo(0, 0);
};