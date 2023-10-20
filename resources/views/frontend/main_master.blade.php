<!doctype html>
<html class="no-js" lang="en">

@include('frontend.body.head')

    <body>

        <!-- preloader-start -->
        <div id="preloader">
            <div class="rasalina-spin-box"></div>
        </div>
        <!-- preloader-end -->

		<!-- Scroll-top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>
        <!-- Scroll-top-end-->

        <!-- header-area -->
       @include('frontend.body.header')
        <!-- header-area-end -->

        <!-- main-area -->
        <main>
            @yield('content')
        </main>
        <!-- main-area-end -->

         

        @include('frontend.body.footer')
       

		@include('frontend.body.script')
    </body>
</html>