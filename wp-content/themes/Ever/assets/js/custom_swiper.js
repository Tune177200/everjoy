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
  slidesPerView: 2,
  breakpoints: {
    768: {
      slidesPerView: 3,
    },
    1024: {
      slidesPerView: 6,
    },
  },
  spaceBetween: 10,
  loop: true,
});


var swiper = new Swiper(".thumb_slide", {
  spaceBetween: 10,
  slidesPerView: 4,
  freeMode: true,
  watchSlidesProgress: true,
});
var swiper2 = new Swiper(".preview_slide", {
  spaceBetween: 10,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  thumbs: {
    swiper: swiper,
  },
  loop:true,
});


var swiper = new Swiper(".voucher_slider", {
  slidesPerView: 1,
  loop: true,
  autoplay:true,
  pagination: {
    el: ".swiper-pagination",
  },
});