﻿<!DOCTYPE html>
<html lang="en">
  <head>
    <title>{{$title}}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="/fonts/icomoon/style.css">

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/magnific-popup.css">
    <link rel="stylesheet" href="/css/jquery-ui.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="/css/aos.css">

    <link rel="stylesheet" href="/css/style.css">
    
    <body>
      
      <div class="site-wrap">
      </head>

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    <div class="border-bottom top-bar py-2">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <p class="mb-0">
              <span class="mr-3"><strong>Phone:</strong> <a href="tel://#">+99890 433-36-99</a></span>
              <span><strong>Email:</strong> <a href="#">murodbek.0338@gmail.com</a></span>
            </p>
          </div>
        </div>
      </div> 
    </div>
    <header class="site-navbar py-4 bg-white" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-11 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="{{route('home')}}" class="text-black h2 mb-0">Devcenter.uz</a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active"><a href="{{route('home')}}">Bosh sahifa</a></li>
                <li class="has-children">
                  <a href="{{route('services')}}">Xizmatlar</a>
                  <ul class="dropdown">
                    <li><a href="{{route('services')}}">Web Applications</a></li>
                    <li><a href="{{route('services')}}">WordPress Dev</a></li>
                    <li><a href="{{route('services')}}">Mobile Applications</a></li>
                    <li><a href="{{route('services')}}">eCommerce</a></li>
                  </ul>
                </li>
                <li><a href="about.html">Haqida</a></li>
                <li><a href="{{route('news')}}">Yangiliklar</a></li>
                <li><a href="{{route('contact')}}">Aloqa</a></li>
              </ul>
            </nav>
          </div>


          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
      
    </header>


    @yield('content')



    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="row">
              <div class="col-md-5">
                <h2 class="footer-heading mb-4">Biz haqimizda</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque facere laudantium magnam voluptatum autem. Amet aliquid nesciunt veritatis aliquam.</p>
              </div>
              <div class="col-md-3 ml-auto">
                <h2 class="footer-heading mb-4">Bo'limlar</h2>
                <ul class="list-unstyled">
                  <li><a href="#">Haqida</a></li>
                  <li><a href="#">Xizmatlar</a></li>
                  <li><a href="{{route('contact')}}">Aloqa</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script>  <i class="icon-heart" aria-hidden="true"></i> by <a href="https://devcenter.uz" target="_blank" >Devcenter.uz</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
          </div>
          
        </div>
      </div>
    </footer>
  </div>

  <script src="/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="/js/jquery-ui.js"></script>
  <script src="/js/popper.min.js"></script>
  <script src="/js/jquery-3.3.1.min.js"></script>
  <script src="/js/owl.carousel.min.js"></script>
  <script src="/js/jquery.stellar.min.js"></script>
  <script src="/js/jquery.countdown.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/jquery.magnific-popup.min.js"></script>
  <script src="/js/bootstrap-datepicker.min.js"></script>
  <script src="/js/aos.js"></script>

  <script src="/js/typed.js"></script>
            <script>
            var typed = new Typed('.typed-words', {
            strings: ["Web Apps"," WordPress"," Mobile Apps"],
            typeSpeed: 80,
            backSpeed: 80,
            backDelay: 4000,
            startDelay: 1000,
            loop: true,
            showCursor: true
            });
            </script>

  <script src="/js/main.js"></script>
    
  </body>
</html>