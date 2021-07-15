document.addEventListener("DOMContentLoaded", () => {
    if (document.getElementById('sliderHome')) {
        let swiperHome = new Swiper('#sliderHome', {
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
    }

    if (document.getElementsByClassName("voessen__slider-product").length) {
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

    function setEqualHeight(elements) {
        var mainDivs = document.getElementsByClassName(elements);
        var maxHeight = 0;
        for (var i = 0; i < mainDivs.length; ++i) {
            if (maxHeight < mainDivs[i].clientHeight) {
                maxHeight = mainDivs[i].clientHeight;
            }
        }
        for (var i = 0; i < mainDivs.length; ++i) {
            mainDivs[i].style.height = maxHeight + "px";
        }
    }

    if (window.screen.width < 991) {
        let menu = new MmenuLight(
            document.querySelector('#menu'),
            'all'
        );

        let navigator = menu.navigation({
            // selectedClass: 'Selected',
            // slidingSubmenus: true,
            // theme: 'dark',
            // title: 'Menu'
        });

        let drawer = menu.offcanvas({
            // position: 'left'
        });

        //	Open the menu.
        document.querySelector('a[href="#menu"]')
            .addEventListener('click', evnt => {
                evnt.preventDefault();
                drawer.open();
            });
        document.getElementById('closeNav').addEventListener('click', evnt => {
            evnt.preventDefault();
            drawer.close();
        });
    } else {
        function getScrollMenu() {
            let el = document.getElementById('fixNav');
            if (pageYOffset > 300) {
                el.classList.add('active');
            } else {
                el.classList.remove("active");
            }
        }

        getScrollMenu();
        window.addEventListener('scroll', function () {
            getScrollMenu();
        });
    }


    var wow = new WOW(
        {
            boxClass: 'wow',      // animated element css class (default is wow)
            animateClass: 'animate__animated', // animation css class (default is animated)
            offset: 0,          // distance to the element when triggering the animation (default is 0)
            mobile: true,       // trigger animations on mobile devices (default is true)
            live: true,       // act on asynchronously loaded content (default is true)
            callback: function (box) {
                //box.classList.add("animate__animated");
            },
            scrollContainer: null,    // optional scroll container selector, otherwise use window,
            resetAnimation: true,     // reset animation on end (default is true)
        }
    );
    wow.init();


    if (document.getElementById('js-btn-clipboard')) {
        let clipboard = new ClipboardJS('#js-btn-clipboard');
        clipboard.on('success', function (e) {
            alertify.success('Скопирована');
        });
    }

    if (document.getElementById('lightgallery')) {
        lightGallery(document.getElementById('lightgallery'), {
            download: false,
            counter: false,
            selector: 'a'
        });
    }

    if (document.getElementById('jsScrollWrap')) {
        if (document.getElementById('jsScrollWrap').clientHeight > 200) {
            document.getElementById('jsScrollWrap').parentNode.style.height = '230px';
            let jsScrollbar = new MiniBar(document.getElementById("jsScrollWrap"), {});
        }
    }

    if (window.innerWidth > 768) {
        if (document.getElementsByClassName("voessen__section-box__info").length) {
            let popoverTriggerList = [].slice.call(document.querySelectorAll('.voessen__section-box__info'))
            let popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
                return new bootstrap.Popover(popoverTriggerEl)
            });
        }
    }

    if (document.getElementById('sliderImages')) {
        let sliderImages = new Swiper('#sliderImages', {
            //loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            slidesPerView: 3,
            spaceBetween: 30,
            on: {
                init: function () {
                    lightGallery(document.getElementById('sliderImages'), {
                        download: false,
                        counter: false,
                        selector: 'a'
                    });
                },
            },
        });
    }

    if (document.getElementById('sliderCertificates')) {
        let sliderImages = new Swiper('#sliderCertificates', {
            //loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            slidesPerView: 5,
            spaceBetween: 30,
            on: {
                init: function () {
                    lightGallery(document.getElementById('sliderCertificates'), {
                        download: false,
                        counter: false,
                        selector: 'a'
                    });
                },
            },
        });
    }

    if (window.screen.width < 440) {
        if (document.getElementById('mobSliderTab')) {
            new Swiper('#mobSliderTab', {
                slidesPerView: 'auto',
                spaceBetween: 15,
                slideClass: 'nav-item'
            });
        }
    }

    if (document.getElementById('loginModal')) {
        //let loginModal = document.getElementById('loginModal')

        let triggerTabList = [].slice.call(document.querySelectorAll('.js-mod-tab'))
        triggerTabList.forEach(function (triggerEl) {
            let tabTrigger = new bootstrap.Tab(triggerEl)

            triggerEl.addEventListener('click', function (event) {
                if (event.target.classList.contains("active")) {
                    event.target.classList.toggle('active');
                }
                event.preventDefault();
                tabTrigger.show();
            })
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

function orderInfo(e) {
    if (window.screen.width > 768) {

        axios({
            method: 'post',
            url: '/inc/lk/ajax-order.php',
            data: {
                orderId: e.dataset.order
            }
        }).then(function (response) {
            closeorderInfo();
            //console.log(response.data);
            e.insertAdjacentHTML('afterend', response.data);
            let listProducts = document.getElementById('listProducts');
            if (listProducts.clientHeight > 290) {
                listProducts.parentNode.style.height = '285px';
                let jsScrollbar = new MiniBar(listProducts, {});
            }
        }).catch(function (error) {
            console.log(error);
        });
    }
}

function closeorderInfo() {
    if (document.getElementById('orderInfo')) {
        let elem = document.getElementById('orderInfo');
        elem.parentNode.removeChild(elem);
    }
}