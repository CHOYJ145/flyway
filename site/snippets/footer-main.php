<?= snippet('nav-footer') ?>

<?= js('assets/js/jquery-3.7.1.min.js') ?>
<?= js('assets/js/swiper-bundle.min.js') ?>
<?= js('assets/js/common.js') ?>
<?= js('assets/js/main.js') ?>

<script type="module">
    document.addEventListener('DOMContentLoaded', function() {
        function onIntersection(entries, observer) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    setTimeout(function() {
                        let s3Touch = false;

                        let swiperSec3 = new Swiper(".sec3-swiper", {
                            slidesPerView: "auto",
                            loop: true,
                            speed: 5000,
                            autoplay: {
                                delay: 0,
                                disableOnInteraction: false,
                            },
                            freeMode: true, // freeMode 활성화
                            touchReleaseOnEdges: true, // 터치가 끝날 때 가장자리에서 탄성 효과 제거
                            on: {
                                touchMove: function () {
                                    s3Touch = true;
                                },
                                touchEnd: function () {
                                    if (s3Touch) {
                                        s3Touch = false;
                                        this.params.speed = 200;
                                    }
                                },
                                transitionEnd: function () {
                                    this.params.speed = 5000;
                                }
                            }
                        });
                        console.log('Swiper initialized');
                        swiperSec3.update();
                    }, 1000); // 3초 딜레이
                    observer.unobserve(entry.target);
                }
            });
        }

        const options = {
            root: null, // viewport
            rootMargin: '0px 0px -100% 0px',
            threshold: 0 // threshold를 0으로 설정
        };

        // Intersection Observer 생성
        const observer = new IntersectionObserver(onIntersection, options);
        const target = document.querySelector('.sec--3');
        observer.observe(target);
    });
</script>
</body>
</html>