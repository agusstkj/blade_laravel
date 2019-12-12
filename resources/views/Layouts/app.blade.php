
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Title -->
  <title>5pilar.id - @yield('title')</title>
  
  <!-- Required Meta Tags Always Come First -->
@section('meta')
@show
  
  <!-- Favicon -->
  <link rel="shortcut icon" href="../../favicon.ico">

  <!-- Google Fonts -->
  <link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
  
  <!-- CSS Implementing Plugins -->
@section('css_implementing_plugins')
@show
  
  <!-- CSS Front Template -->
  <link rel="stylesheet" href="../../assets/css/theme.css">

  <!-- CSS Custome -->
  <link rel="stylesheet" href="../../assets/css/custom.css">
</head>
<body>
  <!-- ========== HEADER ========== -->
  @include('layouts.headers')
  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN ========== -->
  <main id="content" role="main" class="mt-10">
    <!-- Main Section 1 -->
@section('mainSection1')
@show
    <!-- END Main Section 1 -->

    <!-- Main Section 2 -->
@section('mainSection2')
@show
    <!-- END Main Section 2 -->

    <!-- Main Section 3 -->
@section('mainSection3')
@show
    <!-- END Main Section 3 -->

    <!-- Main Section 4 -->
@section('mainSection4')
@show
    <!-- END Main Section 4 -->
    
    <!-- Main Section 5 -->
@section('mainSection5')
@show
    <!-- END Main Section 5 -->

    <!-- Main Section 6 -->
@section('mainSection6')
@show
    <!-- END Main Section 6 -->

    <!-- Main Section 7 -->
@section('mainSection7')
@show
    <!-- END Main Section 7 -->

  </main>
  <!-- ========== END MAIN ========== -->

  <!-- ========== FOOTER ========== -->
  @include('layouts.footers')
  <!-- ========== END FOOTER ========== -->

  <!-- ========== SECONDARY CONTENTS ========== -->
  <!-- Account Sidebar Navigation -->
  <aside id="sidebarContent" class="u-sidebar" aria-labelledby="sidebarNavToggler">
    <div class="u-sidebar__scroller">
      <div class="u-sidebar__container">
        <div class="u-header-sidebar__footer-offset">
          <!-- Toggle Button -->
          <div class="d-flex align-items-center pt-4 px-7">
            <button type="button" class="close ml-auto"
                    aria-controls="sidebarContent"
                    aria-haspopup="true"
                    aria-expanded="false"
                    data-unfold-event="click"
                    data-unfold-hide-on-scroll="false"
                    data-unfold-target="#sidebarContent"
                    data-unfold-type="css-animation"
                    data-unfold-animation-in="fadeInRight"
                    data-unfold-animation-out="fadeOutRight"
                    data-unfold-duration="500">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <!-- End Toggle Button -->

          <!-- Content -->
          <div class="js-scrollbar u-sidebar__body">
            <div class="u-sidebar__content u-header-sidebar__content">
              <form class="js-validate">
                <!-- Login -->
                <div id="login" data-target-group="idForm">
                  <!-- Title -->
                  <header class="text-center mb-7">
                    <h2 class="h4 mb-0">Welcome Back!</h2>
                    <p>Login to manage your account.</p>
                  </header>
                  <!-- End Title -->

                  <!-- Form Group -->
                  <div class="form-group">
                    <div class="js-form-message js-focus-state">
                      <label class="sr-only" for="signinEmail">Email</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="signinEmailLabel">
                            <span class="fas fa-user"></span>
                          </span>
                        </div>
                        <input type="email" class="form-control" name="email" id="signinEmail" placeholder="Email" aria-label="Email" aria-describedby="signinEmailLabel" required
                               data-msg="Please enter a valid email address."
                               data-error-class="u-has-error"
                               data-success-class="u-has-success">
                      </div>
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <!-- Form Group -->
                  <div class="form-group">
                    <div class="js-form-message js-focus-state">
                      <label class="sr-only" for="signinPassword">Password</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="signinPasswordLabel">
                            <span class="fas fa-lock"></span>
                          </span>
                        </div>
                        <input type="password" class="form-control" name="password" id="signinPassword" placeholder="Password" aria-label="Password" aria-describedby="signinPasswordLabel" required
                               data-msg="Your password is invalid. Please try again."
                               data-error-class="u-has-error"
                               data-success-class="u-has-success">
                      </div>
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <div class="d-flex justify-content-end mb-4">
                    <a class="js-animation-link small link-muted" href="javascript:;"
                       data-target="#forgotPassword"
                       data-link-group="idForm"
                       data-animation-in="slideInUp">Forgot Password?</a>
                  </div>

                  <div class="mb-2">
                    <button type="submit" class="btn btn-block btn-sm btn-primary transition-3d-hover">Login</button>
                  </div>

                  <div class="text-center mb-4">
                    <span class="small text-muted">Do not have an account?</span>
                    <a class="js-animation-link small" href="javascript:;"
                       data-target="#signup"
                       data-link-group="idForm"
                       data-animation-in="slideInUp">Signup
                    </a>
                  </div>

                  <div class="text-center">
                    <span class="u-divider u-divider--xs u-divider--text mb-4">OR</span>
                  </div>

                  <!-- Login Buttons -->
                  <div class="d-flex">
                    <a class="btn btn-block btn-sm btn-soft-facebook transition-3d-hover mr-1" href="#">
                      <span class="fab fa-facebook-square mr-1"></span>
                      Facebook
                    </a>
                    <a class="btn btn-block btn-sm btn-soft-google transition-3d-hover ml-1 mt-0" href="#">
                      <span class="fab fa-google mr-1"></span>
                      Google
                    </a>
                  </div>
                  <!-- End Login Buttons -->
                </div>

                <!-- Signup -->
                <div id="signup" style="display: none; opacity: 0;" data-target-group="idForm">
                  <!-- Title -->
                  <header class="text-center mb-7">
                    <h2 class="h4 mb-0">Welcome to Front.</h2>
                    <p>Fill out the form to get started.</p>
                  </header>
                  <!-- End Title -->

                  <!-- Form Group -->
                  <div class="form-group">
                    <div class="js-form-message js-focus-state">
                      <label class="sr-only" for="signupEmail">Email</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="signupEmailLabel">
                            <span class="fas fa-user"></span>
                          </span>
                        </div>
                        <input type="email" class="form-control" name="email" id="signupEmail" placeholder="Email" aria-label="Email" aria-describedby="signupEmailLabel" required
                               data-msg="Please enter a valid email address."
                               data-error-class="u-has-error"
                               data-success-class="u-has-success">
                      </div>
                    </div>
                  </div>
                  <!-- End Input -->

                  <!-- Form Group -->
                  <div class="form-group">
                    <div class="js-form-message js-focus-state">
                      <label class="sr-only" for="signupPassword">Password</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="signupPasswordLabel">
                            <span class="fas fa-lock"></span>
                          </span>
                        </div>
                        <input type="password" class="form-control" name="password" id="signupPassword" placeholder="Password" aria-label="Password" aria-describedby="signupPasswordLabel" required
                               data-msg="Your password is invalid. Please try again."
                               data-error-class="u-has-error"
                               data-success-class="u-has-success">
                      </div>
                    </div>
                  </div>
                  <!-- End Input -->

                  <!-- Form Group -->
                  <div class="form-group">
                    <div class="js-form-message js-focus-state">
                      <label class="sr-only" for="signupConfirmPassword">Confirm Password</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="signupConfirmPasswordLabel">
                            <span class="fas fa-key"></span>
                          </span>
                        </div>
                        <input type="password" class="form-control" name="confirmPassword" id="signupConfirmPassword" placeholder="Confirm Password" aria-label="Confirm Password" aria-describedby="signupConfirmPasswordLabel" required
                               data-msg="Password does not match the confirm password."
                               data-error-class="u-has-error"
                               data-success-class="u-has-success">
                      </div>
                    </div>
                  </div>
                  <!-- End Input -->

                  <div class="mb-2">
                    <button type="submit" class="btn btn-block btn-sm btn-primary transition-3d-hover">Get Started</button>
                  </div>

                  <div class="text-center mb-4">
                    <span class="small text-muted">Already have an account?</span>
                    <a class="js-animation-link small" href="javascript:;"
                       data-target="#login"
                       data-link-group="idForm"
                       data-animation-in="slideInUp">Login
                    </a>
                  </div>

                  <div class="text-center">
                    <span class="u-divider u-divider--xs u-divider--text mb-4">OR</span>
                  </div>

                  <!-- Login Buttons -->
                  <div class="d-flex">
                    <a class="btn btn-block btn-sm btn-soft-facebook transition-3d-hover mr-1" href="#">
                      <span class="fab fa-facebook-square mr-1"></span>
                      Facebook
                    </a>
                    <a class="btn btn-block btn-sm btn-soft-google transition-3d-hover ml-1 mt-0" href="#">
                      <span class="fab fa-google mr-1"></span>
                      Google
                    </a>
                  </div>
                  <!-- End Login Buttons -->
                </div>
                <!-- End Signup -->

                <!-- Forgot Password -->
                <div id="forgotPassword" style="display: none; opacity: 0;" data-target-group="idForm">
                  <!-- Title -->
                  <header class="text-center mb-7">
                    <h2 class="h4 mb-0">Recover Password.</h2>
                    <p>Enter your email address and an email with instructions will be sent to you.</p>
                  </header>
                  <!-- End Title -->

                  <!-- Form Group -->
                  <div class="form-group">
                    <div class="js-form-message js-focus-state">
                      <label class="sr-only" for="recoverEmail">Your email</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="recoverEmailLabel">
                            <span class="fas fa-user"></span>
                          </span>
                        </div>
                        <input type="email" class="form-control" name="email" id="recoverEmail" placeholder="Your email" aria-label="Your email" aria-describedby="recoverEmailLabel" required
                               data-msg="Please enter a valid email address."
                               data-error-class="u-has-error"
                               data-success-class="u-has-success">
                      </div>
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <div class="mb-2">
                    <button type="submit" class="btn btn-block btn-sm btn-primary transition-3d-hover">Recover Password</button>
                  </div>

                  <div class="text-center mb-4">
                    <span class="small text-muted">Remember your password?</span>
                    <a class="js-animation-link small" href="javascript:;"
                       data-target="#login"
                       data-link-group="idForm"
                       data-animation-in="slideInUp">Login
                    </a>
                  </div>
                </div>
                <!-- End Forgot Password -->
              </form>
            </div>
          </div>
          <!-- End Content -->
        </div>

        <!-- Footer -->
        <footer id="SVGwaveWithDots" class="svg-preloader u-sidebar__footer u-sidebar__footer--account">
          <ul class="list-inline mb-0">
            <li class="list-inline-item pr-3">
              <a class="u-sidebar__footer--account__text" href="../pages/privacy.html">Privacy</a>
            </li>
            <li class="list-inline-item pr-3">
              <a class="u-sidebar__footer--account__text" href="../pages/terms.html">Terms</a>
            </li>
            <li class="list-inline-item">
              <a class="u-sidebar__footer--account__text" href="../pages/help.html">
                <i class="fas fa-info-circle"></i>
              </a>
            </li>
          </ul>

          <!-- SVG Background Shape -->
          <div class="position-absolute right-0 bottom-0 left-0">
            <img class="js-svg-injector" src="../../assets/svg/components/wave-bottom-with-dots.svg" alt="Image Description"
                   data-parent="#SVGwaveWithDots">
          </div>
          <!-- End SVG Background Shape -->
        </footer>
        <!-- End Footer -->
      </div>
    </div>
  </aside>
  <!-- End Account Sidebar Navigation -->
  <!-- ========== END SECONDARY CONTENTS ========== -->

  <!-- Go to Top -->
  <a class="js-go-to u-go-to" href="#"
    data-position='{"bottom": 15, "right": 15 }'
    data-type="fixed"
    data-offset-top="400"
    data-compensation="#header"
    data-show-effect="slideInUp"
    data-hide-effect="slideOutDown">
    <span class="fas fa-arrow-up u-go-to__inner"></span>
  </a>
  <!-- End Go to Top -->

  <!-- JS Global Compulsory -->
@section('js_global_compulsory')
@show

  <!-- JS Implementing Plugins -->
@section('js_implementing_plugins')
@show

  <!-- JS Front -->
@section('js_front')
@show

  <!-- JS Plugins Init. -->
  <script>
    $(window).on('load', function () {
      // initialization of HSMegaMenu component
      $('.js-mega-menu').HSMegaMenu({
        event: 'hover',
        pageContainer: $('.container'),
        breakpoint: 767.98,
        hideTimeOut: 0
      });

      // initialization of svg injector module
      $.HSCore.components.HSSVGIngector.init('.js-svg-injector');
    });

    $(document).on('ready', function () {
      // initialization of header
      $.HSCore.components.HSHeader.init($('#header'));

      // initialization of unfold component
      $.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
        afterOpen: function () {
          $(this).find('input[type="search"]').focus();
        }
      });

      // initialization of fancybox
      $.HSCore.components.HSFancyBox.init('.js-fancybox');

      // initialization of malihu scrollbar
      $.HSCore.components.HSMalihuScrollBar.init($('.js-scrollbar'));

      // initialization of show animations
      $.HSCore.components.HSShowAnimation.init('.js-animation-link');


      // initialization of text animation (typing)
      var typed = new Typed(".u-text-animation.u-text-animation--typing", {
        strings: [" <i class=\"fa fa-quote-left fa-sm\"></i> Ayah terlibat, anak jadi hebat, rejeki manfaat dunia dan akhirat. <i class=\"fa fa-quote-right fa-sm\"></i> "],
        typeSpeed: 60,
        loop: true,
        backSpeed: 25,
        backDelay: 1500
      });

      // initialization of slick carousel
      $.HSCore.components.HSSlickCarousel.init('.js-slick-carousel');


      // initialization of form validation
      $.HSCore.components.HSValidation.init('.js-validate', {
        rules: {
          confirmPassword: {
            equalTo: '#signupPassword'
          }
        }
      });

      // initialization of forms
      $.HSCore.components.HSFocusState.init();

      // initialization of cubeportfolio
      $.HSCore.components.HSCubeportfolio.init('.cbp');
      
      // initialization of sticky blocks
      $.HSCore.components.HSStickyBlock.init('.js-sticky-block');

      // initialization of go to
      $.HSCore.components.HSGoTo.init('.js-go-to');
    });
  </script>

</body>
</html>