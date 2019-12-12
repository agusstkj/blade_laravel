    <!-- Blog Listing Section -->
    <div class="container space-2 space-bottom-lg-3">
      <div class="row">
        <div class="col-md-7 col-lg-8 mb-7 mb-md-0">
        @foreach($data['blogs1'] as $blog1)
          <!-- End Blog Card -->
          <article class="card shadow mb-5">
            <img class="card-img-top" src="../../assets/img/900x450/{{$blog1->img900x450article}}" alt="Image Description">

            <div class="card-body p-5">
              <a class="d-inline-block text-secondary font-weight-medium text-uppercase small mb-2" href="#">{{$blog1->categoryarticle}}</a>

              <h2 class="h5 font-weight-medium">
                <a href="single-article.html">{{$blog1->judularticle}}</a>
              </h2>

              <p>{{$blog1->descriptionarticle}}</p>

              <div class="media align-items-center pt-5">
                <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle" data-toggle="tooltip" data-placement="top" title="{{$blog1->authorarticle}}">
                  <img class="img-fluid rounded-circle" src="../../assets/img/100x100/img1.jpg" alt="Image Description">
                </div>
                <div class="media-body d-flex justify-content-end text-muted font-size-1 ml-2">
                
                </div>
              </div>
            </div>
          </article>
          <!-- End Blog Card -->
        @endforeach

          <!-- Sticky Block End Point -->
          <div id="stickyBlockEndPoint"></div>

          <div class="space-bottom-2"></div>

          <!-- Pagination -->
          {{ $data['blogs1']->links() }}
          <!-- End Pagination -->
          
        </div>

        <div id="stickyBlockStartPoint" class="col-md-5 col-lg-4">
          <div class="js-sticky-block pl-lg-4"
               data-parent="#stickyBlockStartPoint"
               data-sticky-view="md"
               data-start-point="#stickyBlockStartPoint"
               data-end-point="#stickyBlockEndPoint"
               data-offset-top="16"
               data-offset-bottom="16">
            <h3 class="h6 font-weight-semi-bold mb-4">Useful links</h3>

            <!-- List Group -->
            <ul class="list-group list-group-flush list-group-borderless mb-5">
              <li>
                <a class="list-group-item list-group-item-action d-flex align-items-center" href="#">
                  All
                  <span class="badge bg-soft-secondary badge-pill ml-2">30+</span>
                  <small class="fas fa-angle-right ml-auto"></small>
                </a>
              </li>
              <li>
                <a class="list-group-item list-group-item-action d-flex align-items-center" href="#">
                  Top rated
                  <small class="fas fa-angle-right ml-auto"></small>
                </a>
              </li>
              <li>
                <a class="list-group-item list-group-item-action d-flex align-items-center" href="#">
                  Featured
                  <small class="fas fa-angle-right ml-auto"></small>
                </a>
              </li>
              <li>
                <a class="list-group-item list-group-item-action d-flex align-items-center" href="#">
                  Daily news
                  <span class="badge bg-soft-secondary badge-pill ml-2">18</span>
                  <small class="fas fa-angle-right ml-auto"></small>
                </a>
              </li>
              <li>
                <a class="list-group-item list-group-item-action d-flex align-items-center" href="#">
                  New
                  <small class="fas fa-angle-right ml-auto"></small>
                </a>
              </li>
            </ul>
            <!-- End List Group -->

            <div class="border-top pt-5 mt-5">
              <h3 class="h6 font-weight-semi-bold mb-4">Related stories</h3>

              <!-- Blog Card -->
              <article>
                <div class="row justify-content-between">
                  <div class="col-6">
                    <a class="d-inline-block text-muted font-weight-medium text-uppercase small" href="#">Product</a>
                    <h4 class="h6 font-weight-medium mb-0">
                      <a href="single-article.html">InVision design forward fund</a>
                    </h4>
                  </div>

                  <div class="col-5">
                    <img class="img-fluid" src="../../assets/img/500x280/img18.jpg" alt="Image Description">
                  </div>
                </div>
              </article>
              <!-- End Blog Card -->

              <!-- Blog Card -->
              <article class="border-top pt-5 mt-5">
                <div class="row justify-content-between">
                  <div class="col-6">
                    <a class="d-inline-block text-muted font-weight-medium text-uppercase small" href="#">Business</a>
                    <h4 class="h6 font-weight-medium mb-0">
                      <a href="single-article.html">What CFR really is about</a>
                    </h4>
                  </div>

                  <div class="col-5">
                    <img class="img-fluid" src="../../assets/img/500x280/img13.jpg" alt="Image Description">
                  </div>
                </div>
              </article>
              <!-- End Blog Card -->

              <!-- Blog Card -->
              <article class="border-top pt-5 mt-5">
                <div class="row justify-content-between">
                  <div class="col-6">
                    <a class="d-inline-block text-muted font-weight-medium text-uppercase small" href="#">Business</a>
                    <h4 class="h6 font-weight-medium mb-0">
                      <a href="single-article.html">Enjoy $1,000 worth of perks with Front for Business</a>
                    </h4>
                  </div>

                  <div class="col-5">
                    <img class="img-fluid" src="../../assets/img/500x280/img19.jpg" alt="Image Description">
                  </div>
                </div>
              </article>
              <!-- End Blog Card -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Blog Listing Section -->