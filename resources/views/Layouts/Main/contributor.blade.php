    <!-- Contributors Section -->
    <div class="container">
      <!-- Title -->
      <div class="w-md-100 w-lg-60 text-center mx-md-auto mb-9">
        <span class="btn btn-xs btn-soft-primary btn-pill mb-2">Our Contributor</span>
        <h2 class="text-primary font-weight-normal">Kontributor<span class="font-weight-semi-bold"> 5pilar.id</span></h2>
        <p>Kami siap membantu menggapai kehidupan yang lebih baik dimasa depan</p>
      </div>
      <!-- End Title -->

      <!-- Contributors Carousel -->
      <div class="js-slick-carousel u-slick u-slick-zoom u-slick--gutters-3"
             data-slides-show="3"
             data-center-mode="true"
             data-autoplay="true"
             data-speed="5000"
             data-pagi-classes="text-center u-slick__pagination mt-7 mb-0"
             data-responsive='[{
               "breakpoint": 992,
               "settings": {
                 "slidesToShow": 2
               }
             }, {
               "breakpoint": 768,
               "settings": {
                 "slidesToShow": 1
               }
             }]'>
        <?php foreach($contributors as $contributor): ?>
        <div class="js-slide pb-4">
          <!-- Contributors -->
          <div class="u-slick-zoom__slide text-center">
          <img class="img-fluid w-100 rounded" src="../../assets/img/350x400/{{$contributor->img_contributor}}" alt="Image Description">
          <div class="card border-0 shadow-sm mt-n6 mx-3">
            <div class="card-body text-center p-4">
              <h3 class="h6 mb-1">{{$contributor->name_contributor}}</h3>
              <p class="font-size-1 mb-0">{{$contributor->title_contributor}}</p>
            </div>
          </div>
          </div>
          <!-- End Contributors -->
        </div>
        <?php endforeach ?>
      </div>
      <!-- End Contributors Carousel -->
    </div>
    <!-- End Contributors Section -->
    <hr class="my-4"> 