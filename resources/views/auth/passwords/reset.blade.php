<!doctype html>
<html lang="en">


   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Server360 - Responsive Bootstrap 4 Admin Dashboard Template</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="{{asset('css/typography.css')}}">
      <!-- Style CSS -->
      <link rel="stylesheet" href="{{asset('css/style.css')}}">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
   </head>


   <body>


    <!-- loader Start -->
      <div id="loading">
         <div id="loading-center">
         </div>
      </div>
    <!-- loader END -->


    <!-- Sign in Start -->
        <section class="sign-in-page">
          <div class="container p-0" id="sign-in-page-box">
                <div class="bg-white form-container sign-in-container">
                    <div class="sign-in-page-data">
                      <div class="sign-in-from w-100 m-auto">
                          <h1 class="mb-3 text-center">Reset Password</h1>
                          <p class="text-center text-dark">Enter your new password</p>
                          <form class="mt-4" method="POST" action="{{ route('password.update') }}">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">
                              <div class="form-group">
                                  <label for="email">Email address</label>
                                  <input id="email" type="email" class="form-control mb-0 @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                                  @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                              </div>
                              <hr>
                              <div class="form-group">
                                  <label for="password">{{ __('New Password') }}</label>
                                  <input type="password" class="form-control mb-0 @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" required autocomplete="new-password">
                                  @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                          		</div>
                             <div class="form-group">
                                  <label for="password-confirm">{{ __('Confirm new Password') }}</label>
                                  <input type="password" class="form-control" name="password_confirmation" id="password-confirm" placeholder="Confirm Password" required autocomplete="new-password">
                          		</div>
                             </div>

                              <div class="sign-info">
                                  <button type="submit" class="btn btn-primary float-right">{{ __('Reset password') }}</button>
                              </div>
                          </form>


                     </div>
                  </div>
                </div>
                <div class="overlay-container">
                    <div class="overlay">
                        <div class="overlay-panel overlay-left">
                            <a class="sign-in-logo mb-5" href="#"><img src="images/logo-full.png" class="img-fluid" alt="logo"></a>
                            <p>To Keep connected with us please login with your personal info</p>
                            <button class="btn iq-border-primary mt-2" id="signIn">Sign In</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- Sign in END -->


    <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="{{asset('js/jquery.min.js')}}"></script>
      <script src="{{asset('js/popper.min.js')}}"></script>
      <script src="{{asset('js/bootstrap.min.js')}}"></script>
      <!-- Appear JavaScript -->
      <script src="{{asset('js/jquery.appear.js')}}"></script>
      <!-- Countdown JavaScript -->
      <script src="{{asset('js/countdown.min.js')}}"></script>
      <!-- Counterup JavaScript -->
      <script src="{{asset('js/waypoints.min.js')}}"></script>
      <script src="{{asset('js/jquery.counterup.min.js')}}"></script>
      <!-- Wow JavaScript -->
      <script src="{{asset('js/wow.min.js')}}"></script>
      <!-- Apexcharts JavaScript -->
      <script src="{{asset('js/apexcharts.js')}}"></script>
      <!-- lottie JavaScript -->
      <script src="{{asset('js/lottie.js')}}"></script>
      <!-- Slick JavaScript -->
      <script src="{{asset('js/slick.min.js')}}"></script>
      <!-- Select2 JavaScript -->
      <script src="{{asset('js/select2.min.js')}}"></script>
      <!-- Owl Carousel JavaScript -->
      <script src="{{asset('js/owl.carousel.min.js')}}"></script>
      <!-- Magnific Popup JavaScript -->
      <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
      <!-- Smooth Scrollbar JavaScript -->
      <script src="{{asset('js/smooth-scrollbar.js')}}"></script>
      <!-- Style Customizer -->
      <script src="{{asset('js/style-customizer.js')}}"></script>
      <!-- Chart Custom JavaScript -->
      <script src="{{asset('js/chart-custom.js')}}"></script>
      <!-- Custom JavaScript -->
      <script src="{{asset('js/custom.js')}}"></script>


   </body>
</html>
