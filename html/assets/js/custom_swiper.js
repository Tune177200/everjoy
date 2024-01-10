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

var swiper = new Swiper(".benefit_slide", {
  pagination: {
      el: ".swiper-pagination",
  },
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
  },
  spaceBetween: 10,
  centeredSlides: true,
  loop: true,
});

var swiper = new Swiper(".bestchoice_slide", {
  pagination: {
      el: ".swiper-pagination",
  },
  breakpoints: {
    640: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 3,
    },
    1024: {
      slidesPerView: 6,
    },
  },
  spaceBetween: 10,
  centeredSlides: true,
  loop: true,
});