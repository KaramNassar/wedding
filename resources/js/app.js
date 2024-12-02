import './bootstrap';

import Swiper from 'swiper/bundle';

const swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 32,
    loop: true,
    centeredSlides: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,

    },
    autoplay: {
        delay: 2500,
        disableOnInteraction: true,
    },

});
