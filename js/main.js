document.addEventListener("DOMContentLoaded", () => {

    if (document.getElementById('slHomePic')) {

        let slHomePic = new Swiper('#slHomePic', {
            loop: true,
            speed: 1000,
            effect: "coverflow",
            //effect: "cube",
            grabCursor: true,
            navigation: {
                nextEl: '#next',
                prevEl: '#prev',
            },
            coverflowEffect: {
                rotate: 2,
                stretch: 1,
                depth: 100,
                modifier: 5,
                slideShadows: true,
            },
        });

        let slHomeText = new Swiper('#slHomeText', {
            loop: true,
            effect: 'fade',
            speed: 1000,
            simulateTouch: false,
            fadeEffect: {
                crossFade: true
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });

        slHomePic.controller.control = slHomeText;
        slHomeText.controller.control = slHomePic;
    }

    if (document.getElementById('brendSlider')) {

        let slHomePic = new Swiper('#brendSlider', {
            slidesPerView: 5,
            navigation: {
                nextEl: '#brendSlider .button-next',
                prevEl: '#brendSlider .button-prev',
            },
            breakpoints: {
                300: {
                    slidesPerView: 2,
                },
                440: {
                    slidesPerView: 2,
                },
                600: {
                    slidesPerView: 3,
                },
                991: {
                    slidesPerView: 4,
                },
                1280: {
                    slidesPerView: 5,
                },
            }
        });

    }

    if (document.getElementsByClassName("music__slider-products").length) {
        let swiperCatalog = new Swiper('.music__slider-products', {
            pagination: {},
            navigation: {
                nextEl: '.button-next',
                prevEl: '.button-prev',
            },
            slidesPerView: 4,
            spaceBetween: 30,
            breakpoints: {
                300: {
                    slidesPerView: 'auto',
                    centeredSlides: true,
                    simulateTouch: true,
                },
                440: {
                    slidesPerView: 2,
                    centeredSlides: true,
                    simulateTouch: true,
                    spaceBetween: 10,
                },
                600: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
                768: {
                    slidesPerView: 2,
                },
                1280: {
                    slidesPerView: 3,
                },
            }
        });
    }




    function setEqualHeight(elements) {
        var mainDivs = document.getElementsByClassName(elements);
        var maxHeight = 0;
        for (var i = 0; i < mainDivs.length; ++i) {
            if (maxHeight < mainDivs[i].clientHeight) {
                maxHeight = mainDivs[i].clientHeight;
            }
        }
        for (var i = 0; i < mainDivs.length; ++i) {
            mainDivs[i].style.height = minHeight + "px";
        }
    }

    /**
     * баннер с акцией в шапке сайта
     */
    if(document.getElementById('actionToast')) {
        let actionToast = document.getElementById('actionToast');
        let objActionToast = new bootstrap.Toast(actionToast);
        objActionToast.show();
        actionToast.addEventListener('hidden.bs.toast', function () {
            console.log('close');
        })
    }

    /*const goTopBtn = document.getElementById('btnTop');
    goTopBtn.addEventListener('click', backToTop);

    function backToTop() {
        if (window.pageYOffset > 0) {
            window.scrollBy(0, -80);
            setTimeout(backToTop, 10);
        }
    }*/

});


function getFileName() {
    let file = document.getElementById('uploaded-file').value;
    file = file.replace(/\\/g, '/').split('/').pop();
    document.getElementById('file-name').innerHTML = 'Имя файла: ' + file;
}

function passOpen(e) {
    if (e.previousElementSibling.type == 'text') {
        e.previousElementSibling.type = 'password';
    } else {
        e.previousElementSibling.type = 'text';
    }
}
