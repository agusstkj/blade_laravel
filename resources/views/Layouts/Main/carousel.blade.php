    <div class="u-hero-v1">
      <!-- Hero Carousel Main -->
      <div id="heroNav" class="js-slick-carousel u-slick"
           data-autoplay="true"
           data-speed="10000"
           data-adaptive-height="true"
           data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-classic u-slick__arrow-centered--y rounded-circle"
           data-arrow-left-classes="fas fa-arrow-left u-slick__arrow-classic-inner u-slick__arrow-classic-inner--left ml-lg-2 ml-xl-4"
           data-arrow-right-classes="fas fa-arrow-right u-slick__arrow-classic-inner u-slick__arrow-classic-inner--right mr-lg-2 mr-xl-4"
           data-numbered-pagination="#slickPaging"
           data-nav-for="#heroNavThumb">
        <?php foreach($carousels as $carousel) {?>
        <div class="js-slide">
          <!-- Slide #1 -->
          <div class="d-lg-flex align-items-lg-center u-hero-v1__main" style="background-image: url(../../assets/img/1920x800/{{$carousel->img_carousel}});">
            <div class="container space-3 space-top-md-5 space-top-lg-3">
              <div class="row">
                <div class="col-md-12 col-lg-12 position-relative">
                  <?php echo $carousel->text1_carousel;?>
                  <?php echo $carousel->text2_carousel;?>
                </div>
              </div>
            </div>
          </div>
          <!-- End Slide #1 -->
        </div>
        <?php } ?>
      </div>
      <!-- End Hero Carousel Main -->

      <!-- Slick Paging -->
      <div class="container position-relative">
        <div id="slickPaging" class="u-slick__paging"></div>
      </div>
      <!-- End Slick Paging -->

      <!-- Hero Carousel Secondary -->
      <div id="heroNavThumb" class="js-slick-carousel u-slick"
           data-autoplay="true"
           data-speed="10000"
           data-is-thumbs="true"
           data-nav-for="#heroNav">
        
      </div>
      <!-- End Hero Carousel Secondary -->
    </div>
    <!-- End Hero v1 Section -->

    <hr class="my-0">