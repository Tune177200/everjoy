var swiper = new Swiper(".main_slide", {
    pagination: {
        el: ".swiper-pagination",
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    loop: true,
});

var swiper = new Swiper(".list_slide", {
    pagination: {
        el: ".swiper-pagination",
    },
    loop: true,
    slidesPerView: 4,
    breakpoints: {
        640: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 4,
        },
    }
});