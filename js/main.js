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
    if (document.getElementById('slMobInst')) {

        let slHomePic = new Swiper('#slMobInst', {
            loop: true,
            navigation: {
                nextEl: '#slMobInstNext',
                prevEl: '#slMobInstPrev',
            },
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
                    slidesPerView: 1,
                    scrollbar: {
                        el: '.swiper-scrollbar',
                        draggable: true,
                    },
                },
                440: {
                    slidesPerView: 2,
                    spaceBetween: 15,
                    scrollbar: {
                        el: '.swiper-scrollbar',
                        draggable: true,
                    },
                },
                600: {
                    slidesPerView: 2,
                    spaceBetween: 20,
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
            mainDivs[i].style.minHeight = maxHeight + "px";
        }
    }

    /**
     * баннер с акцией в шапке сайта
     */
    if (document.getElementById('actionToast')) {
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

    if (document.getElementById('priceRange')) {
        let priceRange = document.getElementById('priceRange');

        noUiSlider.create(priceRange, {
            start: [0, parseInt(priceRange.dataset.maxPrice)],
            step: 1000,
            connect: true,
            format: wNumb({
                decimals: 0,
                thousand: ' ',
                suffix: ' ₽'
            }),
            range: {
                'min': 0,
                'max': parseInt(priceRange.dataset.maxPrice)
            }
        });

        let priceMin = document.getElementById('priceMin'),
            priceMax = document.getElementById('priceMax');


        priceRange.noUiSlider.on('update', function (values, handle) {
            //priceValue[handle].value = values[handle];
            if (handle == 0) {
                priceMin.value = values[handle];
            } else {
                priceMax.value = values[handle];
            }
        });
    }


    function activeSlideCompare() {
        let compareSlider = new Swiper('#compareSlider', {

            navigation: {
                nextEl: '#compareSlider .button-next',
                prevEl: '#compareSlider .button-prev',
            },
            slidesPerView: 3,
            spaceBetween: 30,
            //loop: true,
            breakpoints: {
                200: {
                    slidesPerView: 1,
                    spaceBetween: 0,
                    pagination: {
                        el: "#compareSlider .pagination",
                        type: "fraction",
                    },
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                1280: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
            },
            on: {
                init: function () {
                    sinfroCompareRow();
                },
                resize: function () {
                    sinfroCompareRow();
                }
            },

        });


    }

    function sinfroCompareRow() {
        let rowCompare = [].slice.call(document.querySelectorAll('.js-compare-props li'))
        rowCompare.forEach(function (e) {
            setEqualHeight(e.dataset.sinhro);
        });
    }


    if (document.getElementById('compareSlider')) {
        activeSlideCompare();

        let compareSlider2 = new Swiper('#compareSlider2', {

            navigation: {
                nextEl: '#compareSlider2 .button-next',
                prevEl: '#compareSlider2 .button-prev',
            },
            slidesPerView: 1,
            pagination: {
                el: "#compareSlider2 .pagination",
                type: "fraction",
            },
            on: {
                init: function () {

                },
            }
        });

        compareSlider2.slideTo(1);
    }

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


function passOpen(e) {
    if (e.previousElementSibling.type == 'text') {
        e.previousElementSibling.type = 'password';
    } else {
        e.previousElementSibling.type = 'text';
    }
}

function countProduct(action, input) {
    if (document.getElementById(input)) {
        let count = parseInt(document.getElementById(input).value);
        if (action == 'plus') {
            document.getElementById(input).value = count + 1;
        }
        if (action == 'minus' && count > 1) {
            document.getElementById(input).value = count * 1 - 1;
        }
    }
}
