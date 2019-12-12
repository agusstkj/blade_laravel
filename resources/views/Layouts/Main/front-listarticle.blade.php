	<!-- Blog News Section -->
		<!-- <div class="gradient-half-primary-v2"> -->
		<div class="container space-2 space-md-0 px-lg-3">
        <!-- Title -->
			<div class="w-md-80 w-lg-50 text-center mx-md-auto mb-5">
				<h2 class="text-primary">Hari ini <span class="font-weight-semi-bold">5pilar.id</span></h2>
				<span class="u-label u-label--sm u-label--success mb-2"><h5 class="text-primary">Artikel</h5></span>
			</div>
        <!-- End Title -->

		<!-- Article Blok -->
		<div class="card-deck d-block d-sm-flex card-sm-gutters-3 mb-sm-1">
        <div class="row">
		<?php
		use App\Model\Article;
		?>
        <?php  foreach($articles as $article): ?>  
            <div class="col-md-6 col-lg-4 mb-5">      
        <!-- News Classic -->
        <article class="card border-0">
			<div class="card-body p-0">
				<div class="mb-3">
					<a href="<?php echo  Article::getCategory($article->cate_article) . '/' .$article->slug_article; ?>">
					<img class="img-fluid w-100 rounded" src="../../assets/img/380x250/<?php echo $article->img_article; ?>" alt="Image Description">
				    </a>
				</div>
				<small class="d-block text-secondary mb-1"><?php echo $article->author_article .' | '. date('d M Y', strtotime($article->date_article)); ?></small>
				<a href="<?php echo  Article::getCategory($article->cate_article) . '/' .$article->slug_article; ?>">
				<h2 class="h5"><?php echo $article->title_article; ?></h2>
				</a>
			</div>
        </article>
        </div>
		<?php endforeach ?>
		</div>
        </div>
      <!-- End Article Blok -->	  

      <a class="btn btn-sm btn-primary btn-wide transition-3d-hover" href="articles/">Lebih banyak artikel <span class="fas fa-angle-right ml-2"></span></a>
      
      <!-- <hr class="my-5">  -->	  
      </div>
    <!-- </div> -->
    <!-- End Blog News Section -->	
	</div>
    <hr class="my-4"> 