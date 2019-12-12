@extends('layouts.app')

@section('title', 'Front')

@section('meta')
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="5pilar.id adalah website yang menyediakan artikel mengenai permasalahan pranikah, keluarga, pendidikan anak, kebugaran tubuh, makanan sehat dan wirausaha, guna mewujudkan keluarga anda menuju kehidupan yang lebih baik dimasa depan." />
  <meta property="og:type" content="article" />
  <meta property="og:site_name" content="5pilar.id" />
  <meta property="og:title" content="5pilar.id - Transform The We Live For Better Future" />
  <meta property="og:image" content="https://5pilar.id/images/logo_5pilar_tagnile.png" />
  <meta property="og:description" content="5pilar.id adalah website yang menyediakan artikel mengenai permasalahan pranikah, keluarga, pendidikan anak, kebugaran tubuh, makanan sehat dan wirausaha, guna mewujudkan keluarga anda menuju kehidupan yang lebih baik dimasa depan." />
  <meta property="og:url" content="https://www.5pilar.id" />
@endsection

@section('css_implementing_plugins')
  <link rel="stylesheet" href="../../assets/vendor/font-awesome/css/fontawesome-all.min.css">
  <link rel="stylesheet" href="../../assets/vendor/animate.css/animate.min.css">
  <link rel="stylesheet" href="../../assets/vendor/hs-megamenu/src/hs.megamenu.css">
  <link rel="stylesheet" href="../../assets/vendor/fancybox/jquery.fancybox.css">
  <link rel="stylesheet" href="../../assets/vendor/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="../../assets/vendor/cubeportfolio/css/cubeportfolio.min.css">
  <link rel="stylesheet" href="../../assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
@endsection

@section('search')
    <!-- This Section Not Added -->
@endsection

@section('topbar')
    <!-- This Section Not Added -->
@endsection

@section('nav')
        @include('layouts.header.nav')
@endsection

@section('mainSection1')
    @include('layouts.main.carousel')
@endsection

@section('mainSection2')
    @include('layouts.main.quote')
@endsection

@section('mainSection3')
    @include('layouts.main.menu5pilar')
@endsection

@section('mainSection4')
    @include('layouts.main.front-listarticle')
@endsection

@section('mainSection5')
    @include('layouts.main.subscribe1')
@endsection

@section('mainSection6')
    @include('layouts.main.contributor')
@endsection

@section('mainSection7')
    @include('layouts.main.partner')
@endsection

@section('js_global_compulsory')
  <script src="../../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../../assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
  <script src="../../assets/vendor/popper.js/dist/umd/popper.min.js"></script>
  <script src="../../assets/vendor/bootstrap/bootstrap.min.js"></script>
@endsection

@section('js_implementing_plugins')
  <script src="../../assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
  <script src="../../assets/vendor/svg-injector/dist/svg-injector.min.js"></script>
  <script src="../../assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="../../assets/vendor/fancybox/jquery.fancybox.min.js"></script>
  <script src="../../assets/vendor/slick-carousel/slick/slick.js"></script>
  <script src="../../assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
  <script src="../../assets/vendor/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
  <script src="../../assets/vendor/custombox/dist/custombox.min.js"></script>
  <script src="../../assets/vendor/custombox/dist/custombox.legacy.min.js"></script>
  <script src="../../assets/vendor/typed.js/lib/typed.min.js"></script>

@endsection

@section('js_front')
  <script src="../../assets/js/hs.core.js"></script>
  <script src="../../assets/js/components/hs.header.js"></script>
  <script src="../../assets/js/components/hs.unfold.js"></script>
  <script src="../../assets/js/components/hs.malihu-scrollbar.js"></script>
  <script src="../../assets/js/components/hs.slick-carousel.js"></script>
  <script src="../../assets/js/components/hs.validation.js"></script>
  <script src="../../assets/js/components/hs.focus-state.js"></script>
  <script src="../../assets/js/components/hs.cubeportfolio.js"></script>
  <script src="../../assets/js/components/hs.show-animation.js"></script>
  <script src="../../assets/js/components/hs.svg-injector.js"></script>
  <script src="../../assets/js/components/hs.go-to.js"></script>
  <script src="../../assets/js/components/hs.slick-carousel.js"></script>
  <script src="../../assets/js/components/hs.fancybox.js"></script>
  <script src="../../assets/js/components/hs.modal-window.js"></script>
@endsection