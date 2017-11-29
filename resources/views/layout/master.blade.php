<!DOCTYPE html>
<!--[if IE 9]> <html lang="zxx" class="ie9"> <![endif]-->
<!--[if gt IE 9]> <html lang="zxx" class="ie"> <![endif]-->
<!--[if !IE]><!-->
<html dir="ltr" lang="zxx">
<!--<![endif]-->

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-110390109-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-110390109-2');
    </script>
    @yield('meta')
    @include('partials.meta')
</head>


<body class="front-page ">

    <!-- scrollToTop -->
    <!-- ================ -->
    <div class="scrollToTop circle"><i class="icon-up-open-big"></i>
    </div>

    <!-- page wrapper start -->
    <!-- ================ -->
    <div class="page-wrapper">
        <!-- header-container start -->
          @include('partials.top_strip')
            <!-- header-top end -->

          @include('partials.main_nav')
            <!-- header end -->
    </div>
        <!-- header-container end -->
        <!-- banner start -->
        <!-- ================ -->
        @yield('banner')
        <!-- banner end -->

        <div id="page-start"></div>

        <!-- section start -->
        <!-- ================ -->
        @yield('content')
        <!-- footer top end -->
        <!-- footer start (Add "dark" class to #footer in order to enable dark footer) -->
        <!-- ================ -->
        @include('partials.footer')
        <!-- footer end -->
    </div>
    <!-- page-wrapper end -->

    @include('partials.footer_js')

</body>

</html>
