<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.front._head')
</head>

<body>

<!-- Preloader -->
<div class="preloader">
    <div class="preload-img">
        <div class="spinnerBounce">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
</div>
<!-- End of Preloader -->

<!-- Nav Search Box -->
<div class="nav-search-box">
    <form>
        <div class="input-group">
            <input type="text" class="form-control" placeholder="eg. feel the love and …">
            <span class="b-line"></span>
            <span class="b-line-under"></span>
            <div class="input-group-append">
                <button type="button" class="btn">
                    <img src="{{ asset('assets/images/search-icon.svg') }}" alt="" class="img-fluid svg">
                </button>
            </div>
        </div>
    </form>
</div>
<!-- End of Nav Search Box -->

<!-- Header -->
<header class="header">
    @include('layouts.front.mainnav')
</header>
<!-- End of Header -->

<!-- Banner -->

<!-- End of Banner -->

<!-- Trending Posts-->
{{--<section class="pt-20 pb-10">
    <div class="container">

    </div>
</section>--}}
<!-- End of Trending Posts-->

<!-- post with sidebar -->
<div class="container pt-40 pb-90">
    @yield('content')
</div>
<!-- end of post with sidebar -->

@include('layouts.front._footer')
<!-- End of Footer -->

<!-- Back to Top Button -->
<div class="back-to-top d-flex align-items-center justify-content-center">
    <span><i class="fa fa-long-arrow-up"></i></span>
</div>
<!-- End of Back to Top Button -->

<!-- JS Files -->

@include('layouts.front._script')

</body>
</html>
