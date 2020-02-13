 

 <!-- Swiper -->
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="<?= base_url('assets/');?>img/img_1.jpg"></div>
      <div class="swiper-slide"><img src="<?= base_url('assets/');?>img/img_2.jpg"></div>
      <div class="swiper-slide"><img src="<?= base_url('assets/');?>img/img_3.jpg"></div>
		
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>

  <h1 style="text-align: center; padding-top: 10px;">Well Come To Lentera Residance</h1>

  <script src="<?= base_url('assets/');?>js/swiper.min.js"></script>

  <script>
    var swiper = new Swiper('.swiper-container', {
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>