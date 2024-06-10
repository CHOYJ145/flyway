document.addEventListener('DOMContentLoaded', function () {
    const sections = document.querySelectorAll('.main-sec');
    let currentIndex = 0;
    let isThrottled = false;

    function showSection(index) {
        sections.forEach((section, idx) => {
            if (idx === index) {
                if (idx == 1) {
                    setTimeout(() => {
                        section.style.display = 'block';
                        section.classList.add('on');
                        setTimeout(() => {
                            section.classList.add('view');
                        }, 250);
                    }, 900);

                    document.body.classList.remove('main-header--w');
                }

                if (idx == 0) {
                    setTimeout(() => {
                        document.body.classList.add('main-header--w');
                        section.style.display = 'block';
                        section.classList.add('on');
                        setTimeout(() => {
                            section.classList.add('view');
                            section.classList.remove('step');
                        }, 250);
                    }, 250);
                }
            } else {
                if (idx == 0) {
                    section.classList.add('step');
                    setTimeout(() => {
                        section.style.display = 'none';
                        section.classList.remove('on');
                        setTimeout(() => {
                            section.classList.remove('view');
                        }, 250);
                    }, 900);
                }
                if (idx == 1) {
                    section.classList.remove('view');
                    setTimeout(() => {
                        section.style.display = 'none';
                        section.classList.remove('on');
                    }, 250);
                }
            }
        });
    }

    function handleScroll(event) {
        if (document.body.classList.contains('scroll--p') || isThrottled) return;

        const currentSection = sections[currentIndex];
        const ms3Container = currentSection.querySelector('.ms3-container');

        if (currentIndex === 1 && ms3Container) {
            if (event.deltaY > 0 && ms3Container.scrollTop + ms3Container.clientHeight < ms3Container.scrollHeight) {
                return;
            } else if (event.deltaY < 0 && ms3Container.scrollTop > 0) {
                return;
            }
        }

        if (event.deltaY > 0) {
            currentIndex = Math.min(currentIndex + 1, sections.length - 1);
        } else {
            currentIndex = Math.max(currentIndex - 1, 0);
        }

        showSection(currentIndex);
        isThrottled = true;

        setTimeout(() => {
            isThrottled = false;
        }, 1200); // 휠 감도
    }

    function handleSwipe(deltaY) {
        if (document.body.classList.contains('scroll--p')) return;

        const currentSection = sections[currentIndex];
        const ms3Container = currentSection.querySelector('.ms3-container');

        if (currentIndex === 1 && ms3Container) {
            if (deltaY > 0 && ms3Container.scrollTop + ms3Container.clientHeight < ms3Container.scrollHeight) {
                return;
            } else if (deltaY < 0 && ms3Container.scrollTop > 0) {
                return;
            }
        }

        if (deltaY > 0) {
            currentIndex = Math.min(currentIndex + 1, sections.length - 1);
        } else {
            currentIndex = Math.max(currentIndex - 1, 0);
        }

        showSection(currentIndex);
    }

    let touchStartY = 0;

    function handleTouchStart(event) {
        if (document.body.classList.contains('scroll--p')) return;
        touchStartY = event.touches[0].clientY;
    }

    function handleTouchMove(event) {
        if (document.body.classList.contains('scroll--p')) return;
        if (!touchStartY) return;

        const touchEndY = event.touches[0].clientY;
        const deltaY = touchStartY - touchEndY;

        if (Math.abs(deltaY) > 50) {
            handleSwipe(deltaY);
            touchStartY = 0;
        }
    }

    window.addEventListener('wheel', handleScroll);
    window.addEventListener('touchstart', handleTouchStart);
    window.addEventListener('touchmove', handleTouchMove);

    const videoMainWrap = document.querySelector('.video--main-wrap');

    document.querySelector('.ms3-container').addEventListener('scroll', function () {
        const scrollTop = this.scrollTop;
        const scrollHeight = this.scrollHeight - this.clientHeight;
        const startChange = scrollHeight / 3;
        const endChange = scrollHeight * 2 / 3;
        const changeRange = endChange - startChange;

        const rect = videoMainWrap.getBoundingClientRect();
        const topOffset = rect.top;

        if (scrollTop > startChange && scrollTop < endChange) {
            const progress = (scrollTop - startChange) / changeRange;
            videoMainWrap.style.transform = `scale(${0.6 + 0.4 * progress})`;
            videoMainWrap.style.borderRadius = `${32 - 32 * progress}px`;
        } else if (scrollTop <= startChange) {
            videoMainWrap.style.transform = 'scale(0.6)';
            videoMainWrap.style.borderRadius = '32px';
        } else if (scrollTop >= endChange) {
            videoMainWrap.style.transform = 'scale(1)';
            videoMainWrap.style.borderRadius = '0px';
        }

        if (topOffset <= 0) {
            videoMainWrap.classList.add('show');
        } else {
            videoMainWrap.classList.remove('show');
        }
    });
});

let previousWidth = window.innerWidth;

window.addEventListener('resize', function() {
    const currentWidth = window.innerWidth;
    if (currentWidth !== previousWidth) {
        previousWidth = currentWidth;
        window.location.reload();
    }
});
