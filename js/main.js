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

    /*if (document.getElementsByClassName("voessen__slider-product").length) {
        let swiperCatalog = new Swiper('.voessen__slider-product', {
            pagination: {},
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            slidesPerView: 4,
            lazy: true,
            observer: true,
            observeParents: true,
            //loop: true,
            //simulateTouch: false,
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
                },
                600: {
                    slidesPerView: 2,
                },
                991: {
                    slidesPerView: 3,
                },
                1280: {
                    slidesPerView: 4,
                },
            }
        });
    }
    */




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
