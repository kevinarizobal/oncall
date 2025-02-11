const containerSwiper = new Swiper(".container", {
    spaceBetween: 30,
    effect: "fade",
    loop: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false
    },
});

const homeServicesSwiper = new Swiper(".homeservices", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: false,
    loop: true,
    slidesPerView: "5",
    coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 0,
        modifier: 0,
        slideShadows: false,
    },
    pagination: {
        el: ".swiper-pagination",
    },
});


const promo = new Swiper(".promo", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    loop: true,
    spaceBetween: 15,
    slidesPerView: "2",
    coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 0,
        modifier: 0,
        slideShadows: false,
    },
    autoplay: {
        delay: 3000, // Delay between slides in milliseconds
        disableOnInteraction: false, // Continue autoplay even after user interactions
    },
});

var swiper = new Swiper(".freelancer", {
    loop: true,
    spaceBetween: 10,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        dynamicBullets: true, // Enables dynamic pagination bullets
    },
});


var reviews = new Swiper(".reviews", {
    loop: true,
    spaceBetween: 30,
    pagination: {
        el: ".swiper-pagination",
        dynamicBullets: true,
      },
    });


// var reviews = new Swiper(".reviews", {
//     effect: "coverflow",
//     grabCursor: true,
//     centeredSlides: false,
//     loop: true,
//     slidesPerView: 1,
//     coverflowEffect: {
//       rotate: 0,
//       stretch: 0,
//       depth: 0,
//       modifier: 0,
//       slideShadows: true,
//     },
//     pagination: {
//       el: ".swiper-pagination",
//     },
//   });
  







