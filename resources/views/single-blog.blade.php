<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from baha.malyarchuk.space/single-blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Aug 2019 19:54:11 GMT -->
<head>

    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Title -->
    <title>Baha - Personal Portfolio Template</title>

    <!-- CSS Plugins -->
    <link rel="stylesheet" href="{{asset('css/plugins/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/plugins/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('css/plugins/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/plugins/simplebar.css')}}">
    <link rel="stylesheet" href="{{asset('css/plugins/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/plugins/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/plugins/jquery.animatedheadline.css')}}">

    <!-- CSS Base -->
    <link rel="stylesheet" class="back-color" href="{{asset('css/style-dark.css')}}">
    <link rel="stylesheet" href="{{asset('css/style-demo.css')}}">

    <!-- Settings Style -->
    <link rel="stylesheet" class="posit-nav" href="{{asset('css/settings/left-nav.css')}}" />
    <link rel="stylesheet" class="theme-color" href="{{asset('css/settings/green-color.css')}}" />

</head>
<body>

<!--Theme Options Start-->
<div class="style-options">
    <div class="toggle-btn">
        <span><i class="fas fa-cog"></i></span>
    </div>
    <div class="style-menu">
        <div class="style-nav">
            <h4 class="mt-15 mb-10">Menu Position</h4>
            <ul>
                <li><a href="{{asset('css/settings/top-nav.css')}}"><i class="fas fa-caret-up"></i> Top</a></li>
                <li><a href="{{asset('css/settings/left-nav.css')}}"><i class="fas fa-caret-left"></i> Left</a></li>
                <li><a href="{{asset('css/settings/right-nav.css')}}"><i class="fas fa-caret-right"></i> Right</a></li>
                <li><a href="{{asset('css/settings/bottom-nav.css')}}"><i class="fas fa-caret-down"></i> Bottom</a></li>
            </ul>
        </div>
        <div class="style-back">
            <h4 class="mt-85 mb-10">Style Color</h4>
            <ul>
                <li><a href="{{asset('css/style-dark.css')}}"><i class="fas fa-moon"></i> Dark</a></li>
                <li><a href="{{asset('css/style-light.css')}}"><i class="far fa-lightbulb"></i> Light</a></li>
            </ul>
        </div>
        <div class="style-color">
            <h4 class="mt-55 mb-10">Theme Color</h4>
            <ul>
                <li><a href="{{asset('css/settings/green-color.css')}}" style="background-color: #25ca7f;"></a></li>
                <li><a href="{{asset('css/settings/blue-color.css')}}" style="background-color: #00a3e1;"></a></li>
                <li><a href="{{asset('css/settings/red-color.css')}}" style="background-color: #d94c48;"></a></li>
                <li><a href="{{asset('css/settings/purple-color.css')}}" style="background-color: #bb68c8;"></a></li>
                <li><a href="{{asset('css/settings/purple-color.css')}}" style="background-color: #0dcdbd;"></a></li>
                <li><a href="{{asset('css/settings/purple-color.css')}}" style="background-color: #eae328;"></a></li>
            </ul>
        </div>
    </div>
</div>

<!-- Preloader -->
<div id="preloader">
    <div class="loading-area">
        <div class="circle"></div>
    </div>
    <div class="left-side"></div>
    <div class="right-side"></div>
</div>

<div class="header-mobile">
    <a class="header-toggle"><i class="fas fa-bars"></i></a>
    <h2>Baha</h2>
</div>

<!-- Left Block -->
<nav class="header-main" data-simplebar>

    <!-- Logo -->
    <div class="logo">
        <img src="img/logo.png" alt="">
    </div>

    <ul>
        <li data-tooltip="home" data-position="top">
            <a href="/" class="fas fa-house-damage"></a>
        </li>
        <li>
            <span class="active fas fa-receipt"></span>
        </li>
    </ul>

    <!-- Sound wave -->
    <a class="music-bg">
        <div class="lines">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
        <p> Sound </p>
    </a>
</nav>

<!--Blog Page-->
<div class="blog-page " data-simplebar>
    <nav class="blog-nav">
        <a href="#" data-tooltip="prev" data-position="left">
            <i class="fas fa-long-arrow-alt-left"></i>
        </a>
        <a href="index.html#blog">
            <i class="fas fa-bars"></i>
        </a>
        <a href="/nextBlog/{{$blog->id}}" data-tooltip="next" data-position="right">
            <i class="fas fa-long-arrow-alt-right"></i>
        </a>
    </nav>
    <div class="blog-image">
        <img style="width: 1213px; height: 442.23px;" src="{{asset('images/'.$blog->image)}}" alt="">
    </div>



    <div class="row blog-container" style="width: 1000px;">
        <div class="col-md-10 offset-md-1">

            <!-- Heading -->
            <div class="blog-heading pt-70 pb-100">
                <h2>Road to success</h2>
                <span><i class="fas fa-home"></i><a href="#">{{$blog->cat}}</a></span>
                <span><i class="fas fa-calendar-alt"></i>January 06, 2019</span>
            </div>

            <!-- Content -->
            <div class="blog-content">

                <p>{!! $blog->contenu!!}</p>


            </div>

            <!-- Comments
            <div class="blog-comments mt-100 mb-100">
                <div class="header-box mb-50">
                    <h3>Comments</h3>
                </div>
                <ul>
                    <li>
                        <div class="author-img">
                            <img src="{{asset('img/blog/authors/author-1.png')}}" alt="">
                        </div>
                        <div class="comment-text">
                            <a href="#"><i class="fas fa-reply"></i>Reply</a>
                            <h4>Alex Doe</h4>
                            <span>Aug 15, 2018 at 8:11 am</span>
                            <p>Morbi ut faucibus nulla, at fringilla est. Morbi lacinia sagittis purus.</p>
                        </div>
                        <ul>
                            <li>
                                <div class="author-img">
                                    <img src="{{asset('img/blog/authors/author-2.png')}}" alt="">
                                </div>
                                <div class="comment-text">
                                    <h4>Kriss Doe</h4>
                                    <span>Aug 15, 2018 at 8:11 am</span>
                                    <p>Morbi ut faucibus nulla, at fringilla est. Morbi lacinia sagittis purus, nec dapibus felis tempus in. Quisque eget elementum sem, cursus tristique orci.</p>
                                </div>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <div class="author-img">
                            <img src="img/blog/authors/author-3.png" alt="">
                        </div>
                        <div class="comment-text">
                            <a href="#"><i class="fas fa-reply"></i>Reply</a>
                            <h4>Emma Doe</h4>
                            <span>Aug 15, 2018 at 8:11 am</span>
                            <p>Morbi ut faucibus nulla, at fringilla est. Morbi lacinia sagittis purus.</p>
                        </div>
                    </li>
                </ul>
            </div>
             -->
            <!--Blog Form-->
            <!--
            <div class="header-box mb-50">
                <h3>Leave a comment</h3>
            </div>

            <div class="contact-form mb-100">
                <form method="post" class="box contact-valid" id="contact-form">
                    <div class="row">
                        <div class="col-lg-6 col-sm-12">
                            <input type="text" name="name" id="name" class="form-control" placeholder="Name *">
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email *">
                        </div>
                        <div class="col-lg-12 col-sm-12">
                            <textarea class="form-control" name="note"  id="note" placeholder="Your Message"></textarea>
                        </div>
                        <div class="col-lg-12 col-sm-12 text-center">
                            <button type="submit" class="btn-st">Send Message</button>
                            <div id="loader">
                                <i class="fas fa-sync"></i>
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-12">
                            <div class="error-messages">
                                <div id="success">
                                    <i class="far fa-check-circle"></i>Thank you, your message has been sent.
                                </div>
                                <div id="error">
                                    <i class="far fa-times-circle"></i>Error occurred while sending email. Please try again later.
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                -->
            </div>
        </div>
    </div>

</div>

<!-- All Script -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/simplebar.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/jquery.animatedheadline.min.js')}}"></script>
<script src="{{asset('js/jquery.easypiechart.js')}}"></script>
<script src="{{asset('js/jquery.validation.js')}}"></script>
<script src="{{asset('js/tilt.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/main-demo.js')}}"></script>
<script src="https://maps.google.com/maps/api/js?sensor=false"></script>
</body>

<!-- Mirrored from baha.malyarchuk.space/single-blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Aug 2019 19:54:29 GMT -->
</html>
