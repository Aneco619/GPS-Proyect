// Inicializar el Swiper
var swiper = new Swiper('.swiper.sliderFeaturedPosts', {
    loop: true,
    navigation: {
      nextEl: '.custom-swiper-button-next',
      prevEl: '.custom-swiper-button-prev',
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  });
  
  // Desplazamiento automático cada 5 segundos (5000 ms)
  setInterval(function() {
    swiper.slideNext();
  }, 5000);
  