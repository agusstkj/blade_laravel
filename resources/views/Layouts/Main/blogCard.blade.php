<?php
use App\Model\Article;
?>    
    <div class="container space-2 space-bottom-lg-3">
      <div class="row">
      <?php foreach($articles as $article): ?>
        <div class="col-md-6 col-lg-4 mb-5">
          
          <!-- Blog Card -->
          <article class="card shadow h-100">
            <a href="<?php echo  Article::getCategory($article->cate_article) . '/' .$article->slug_article; ?>">
              <img class="card-img-top" src="../../assets/img/380x250/{{$article->img380x250_article}}" alt="{{$article->slug_article}}">
            </a>
            <div class="card-body p-5">
              <a class="d-inline-block text-muted font-weight-medium text-uppercase small mb-2" href="#"><?php echo  Article::getCategory($article->cate_article);?></a>
              <h2 class="h5 font-weight-medium">
              <a href="<?php echo  Article::getCategory($article->cate_article) . '/' .$article->slug_article; ?>">
              {{$article->title_article}}
              </a>
              </h2>
              <p>{{$article->descript_article}}</p>              
            </div>

            <div class="card-footer border-0 pt-0 pb-5 px-0 mx-5">
              <div class="media align-items-center">
                <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle" data-toggle="tooltip" data-placement="top" title="{{$article->author_article}}">
                  <img class="img-fluid rounded-circle" src="../../assets/img/100x100/img1.jpg" alt="Image Description">
                </div>
                <div class="media-body d-flex justify-content-end text-muted font-size-1 ml-2">
                  {{$article->created_at->format('d M Y')}}
                </div>
              </div>
            </div>
          </article>
          <!-- End Blog Card -->
          
        </div>
        <?php endforeach;?>

      </div>

      <div class="space-bottom-2"></div>

      <!-- Pagination -->
      {{ $articles->links() }}
      <!-- End Pagination -->
    </div>