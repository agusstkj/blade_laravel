<?php
use App\Model\Article;
?>
    <!-- Blog Listing Section -->
    <div class="container space-2 space-bottom-lg-3">
      <div class="row">
        <div class="col-md-7 col-lg-8 mb-7 mb-md-0">          
          <!-- End Blog Card -->
          <article class="card shadow mb-5">
            <img class="card-img-top" src="../../assets/img/1920x800/{{$slug->img1920x800_article}}" alt="{{$slug->slug_article}}">
            <!-- Author -->
            <div class="card-body p-5 border-top border-bottom py-4">
              <div class="row align-items-md-center">
                <div class="col-md-7  mb-md-0">
                  <div class="media align-items-center">
                    <div class="u-avatar">
                      <img class="img-fluid rounded-circle" src="../../assets/img/logo_5pilar_lagline.png" alt="Image Description">
                    </div>
                    <div class="media-body font-size-1 ml-3">
                      <span class="h6 font-weight-medium"><a href="blog-profile.html">{{$slug->author_article}}</a> <button type="button" class="btn btn-xs btn-soft-primary font-weight-medium transition-3d-hover py-1 px-2 ml-1">Follow</button></span>
                      <span class="d-block text-muted">{{$slug->created_at->format('d M Y')}}</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="d-md-flex justify-content-md-end align-items-md-center">
                    <h2 class="text-secondary font-size-1 font-weight-medium text-uppercase mb-0">Share:</h2>

                    <a class="btn btn-sm btn-icon btn-soft-secondary btn-bg-transparent rounded-circle ml-2" href="#">
                      <span class="fab fa-facebook-f btn-icon__inner"></span>
                    </a>
                    <a class="btn btn-sm btn-icon btn-soft-secondary btn-bg-transparent rounded-circle ml-2" href="#">
                      <span class="fab fa-twitter btn-icon__inner"></span>
                    </a>
                    <a class="btn btn-sm btn-icon btn-soft-secondary btn-bg-transparent rounded-circle ml-2" href="#">
                      <span class="fab fa-instagram btn-icon__inner"></span>
                    </a>
                    <a class="btn btn-sm btn-icon btn-soft-secondary btn-bg-transparent rounded-circle ml-2" href="#">
                      <span class="fab fa-telegram btn-icon__inner"></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Author -->

            <div class="card-body p-5">
              <a class="d-inline-block text-secondary font-weight-medium text-uppercase small mb-2" href="#"><?php echo  Article::getCategory($slug->cate_article);?></a>

              <h2 class="h5 font-weight-medium">
                <a href="single-article.html">{{$slug->title_article}}</a>
              </h2>
              <?php echo $slug->content_article;?>              
            </div>
          </article>
          <!-- End Blog Card -->

          <!-- Sticky Block End Point -->
          <div id="stickyBlockEndPoint"></div>

          <div class="space-bottom-2"></div>
        </div>

        <div id="stickyBlockStartPoint" class="col-md-5 col-lg-4">
          <div class="js-sticky-block pl-lg-4"
               data-parent="#stickyBlockStartPoint"
               data-sticky-view="md"
               data-start-point="#stickyBlockStartPoint"
               data-end-point="#stickyBlockEndPoint"
               data-offset-top="120"
               data-offset-bottom="16">
            <h3 class="h6 font-weight-semi-bold mb-4">Kategori Lainnya</h3>

            <!-- List Group -->
            <ul class="list-group list-group-flush list-group-borderless mb-5">
              <li>
                <a class="list-group-item list-group-item-action d-flex align-items-center" href="<?php echo url("/articles");?>">
                  All
                  <span class="badge bg-soft-secondary badge-pill ml-2">{{$all_count}}</span>
                  <small class="fas fa-angle-right ml-auto"></small>
                </a>
              </li>
              <li>
                <a class="list-group-item list-group-item-action d-flex align-items-center" href="<?php echo url("/emariage");?>">
                  e-Mariage
                  <span class="badge bg-soft-secondary badge-pill ml-2">{{$emariage_count}}</span>
                  <small class="fas fa-angle-right ml-auto"></small>
                </a>
              </li>
              <li>
                <a class="list-group-item list-group-item-action d-flex align-items-center" href="<?php echo url("/eparenting");?>">
                  e-Parenting
                  <span class="badge bg-soft-secondary badge-pill ml-2">{{$eparenting_count}}</span>
                  <small class="fas fa-angle-right ml-auto"></small>
                </a>
              </li>
              <li>
                <a class="list-group-item list-group-item-action d-flex align-items-center" href="<?php echo url("/edukids");?>">
                  e-Dukids
                  <span class="badge bg-soft-secondary badge-pill ml-2">{{$edukids_count}}</span>
                  <small class="fas fa-angle-right ml-auto"></small>
                </a>
              </li>
              <li>
                <a class="list-group-item list-group-item-action d-flex align-items-center" href="<?php echo url("/efit");?>">
                  e-Fit
                  <span class="badge bg-soft-secondary badge-pill ml-2">{{$efit_count}}</span>
                  <small class="fas fa-angle-right ml-auto"></small>
                </a>
              </li>
              <li>
                <a class="list-group-item list-group-item-action d-flex align-items-center" href="<?php echo url("/ebusiness");?>">
                  e-Business
                  <span class="badge bg-soft-secondary badge-pill ml-2">{{$ebizniz_count}}</span>
                  <small class="fas fa-angle-right ml-auto"></small>
                </a>
              </li>
            </ul>
            <!-- End List Group -->

            <div class="border-top pt-5 mt-5">
              <h3 class="h6 font-weight-semi-bold mb-4">Related stories</h3>
              <?php
              $relateds = Article::where('cate_article', $slug->cate_article)
                                    ->inRandomOrder()
                                    ->orderBy('created_at', 'desc')
                                    ->take(3)
                                    ->get();
              foreach ($relateds as $related){
              ?>
              <!-- Blog Card -->
              <article class="border-top pt-5 mt-5">
                <div class="row justify-content-between">
                  <div class="col-6">
                    <a class="d-inline-block text-muted font-weight-medium text-uppercase small" href="#"><?php echo  Article::getCategory($related->cate_article);?></a>
                    <h4 class="h6 font-weight-medium mb-0">
                      <a href="<?php echo url(Article::getCategory($related->cate_article) .'/'. $related->slug_article)?>"><?php echo $related->title_article;?></a>
                    </h4>
                  </div>

                  <div class="col-5">
                    <img class="img-fluid" src="../../assets/img/380x250/{{$related->img380x250_article}}" alt="Image Description">
                  </div>
                </div>
              </article>
              <!-- End Blog Card -->
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Blog Listing Section -->