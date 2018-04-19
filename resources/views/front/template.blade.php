<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hello World</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/frontTheme/css/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="/frontTheme/css/font-awesome.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="/frontTheme/css/swiper.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="/frontTheme/style.css">
</head>
<body>
<div class="outer-container">
    <header class="site-header">
        <div class="top-header-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 flex align-items-center">
                        <div class="header-bar-text d-none d-lg-block">
                            <p>Blog de ensayo curso Lravel 5.6</p>
                        </div><!-- .header-bar-text -->

                        <div class="header-bar-email d-none d-lg-block">
                            <a href="#">Contactme@email.com</a>
                        </div><!-- .header-bar-email -->
                    </div><!-- .col -->

                    <div class="col-12 col-lg-6 flex justify-content-between justify-content-lg-end align-items-center">
                        <div class="header-bar-social d-none d-md-block">
                            <ul class="flex align-items-center">
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div><!-- .header-bar-social -->

                        <div class="header-bar-search d-none d-md-block">
                            <form>
                                <input type="search" placeholder="Search">
                            </form>
                        </div><!-- .header-bar-search -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container-fluid -->
        </div><!-- .top-header-bar -->

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="site-branding flex flex-column align-items-center">
                        <h1 class="site-title"><a href="index.html" rel="home">Blanca</a></h1>
                        <p class="site-description">Personal Blog</p>
                    </div><!-- .site-branding -->

                    <nav class="site-navigation">
                        <div class="hamburger-menu d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- .hamburger-menu -->

                        <ul class="flex-lg flex-lg-row justify-content-lg-center align-content-lg-center">
                            <li class="current-menu-item"><a href="/">Inicio</a></li>
                            <li><a href="#">Nosotros</a></li>
                            <li><a href="#">blog</a></li>
                            <li><a href="#">Contactanos</a></li>
                            <li><a href="login">Admin</a></li>
                        </ul>
                    </nav><!-- .site-navigation -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </header><!-- .site-header -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                @yield('banner')
            </div><!-- .col -->
        </div><!-- .row -->

        <div class="container">
            <div class="row">
                <div class="offset-lg-9 col-12 col-lg-3">
                    <a href="#">
                        <div class="yt-subscribe">
                            <img src="/frontTheme/images/yt-subscribe.png" alt="Youtube Subscribe">
                            <h3>Subscribe</h3>
                            <p>To my Youtube Channel</p>
                        </div><!-- .yt-subscribe -->
                    </a>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .hero-section -->

    <div class="container single-page">
        <div class="row">
            <div class="col-12 col-lg-9">
               
               @yield('blog')

                

                <div class="pagination">
                    <ul class="flex align-items-center">
                        <li class="active"><a href="#">01.</a></li>
                        <li><a href="#">02.</a></li>
                        <li><a href="#">03.</a></li>
                    </ul>
                </div>
            </div><!-- .col -->

            
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .outer-container -->

<footer class="sit-footer">
    <div class="outer-container">
        <div class="container-fluid">
            <div class="row footer-recent-posts">
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="footer-post-wrap flex justify-content-between">
                        <figure>
                            <a href="#"><img src="/frontTheme/images/foot-1.jpg" alt=""></a>
                        </figure>

                        <div class="footer-post-cont flex flex-column justify-content-between">
                            <header class="entry-header">
                                <div class="posted-date">
                                    January 30, 2018
                                </div><!-- .entry-header -->

                                <h3><a href="#">My fall in love story</a></h3>

                                <div class="tags-links">
                                    <a href="#">#winter</a>
                                    <a href="#">#love</a>
                                    <a href="#">#snow</a>
                                    <a href="#">#january</a>
                                </div><!-- .tags-links -->
                            </header><!-- .entry-header -->

                            <footer class="entry-footer">
                                <a class="read-more" href="#">read more</a>
                            </footer><!-- .entry-footer -->
                        </div><!-- .footer-post-cont -->
                    </div><!-- .footer-post-wrap -->
                </div><!-- .col -->

                <div class="col-12 col-md-6 col-xl-3">
                    <div class="footer-post-wrap flex justify-content-between">
                        <figure>
                            <a href="#"><img src="/frontTheme/images/foot-2.jpg" alt=""></a>
                        </figure>

                        <div class="footer-post-cont flex flex-column justify-content-between">
                            <header class="entry-header">
                                <div class="posted-date">
                                    January 30, 2018
                                </div><!-- .entry-header -->

                                <h3><a href="#">Man’s best friend</a></h3>

                                <div class="tags-links">
                                    <a href="#">#winter</a>
                                    <a href="#">#love</a>
                                    <a href="#">#snow</a>
                                    <a href="#">#january</a>
                                </div><!-- .tags-links -->
                            </header><!-- .entry-header -->

                            <footer class="entry-footer">
                                <a class="read-more" href="#">read more</a>
                            </footer><!-- .entry-footer -->
                        </div><!-- .footer-post-cont -->
                    </div><!-- .footer-post-wrap -->
                </div><!-- .col -->

                <div class="col-12 col-md-6 col-xl-3">
                    <div class="footer-post-wrap flex justify-content-between">
                        <figure>
                            <a href="#"><img src="/frontTheme/images/foot-3.jpg" alt=""></a>
                        </figure>

                        <div class="footer-post-cont flex flex-column justify-content-between">
                            <header class="entry-header">
                                <div class="posted-date">
                                    January 30, 2018
                                </div><!-- .entry-header -->

                                <h3><a href="#">Writing on a budget</a></h3>

                                <div class="tags-links">
                                    <a href="#">#winter</a>
                                    <a href="#">#love</a>
                                    <a href="#">#snow</a>
                                    <a href="#">#january</a>
                                </div><!-- .tags-links -->
                            </header><!-- .entry-header -->

                            <footer class="entry-footer">
                                <a class="read-more" href="#">read more</a>
                            </footer><!-- .entry-footer -->
                        </div><!-- .footer-post-cont -->
                    </div><!-- .footer-post-wrap -->
                </div><!-- .col -->

                <div class="col-12 col-md-6 col-xl-3">
                    <div class="footer-post-wrap flex justify-content-between">
                        <figure>
                            <a href="#"><img src="/frontTheme/images/foot-4.jpg" alt=""></a>
                        </figure>

                        <div class="footer-post-cont flex flex-column justify-content-between">
                            <header class="entry-header">
                                <div class="posted-date">
                                    January 30, 2018
                                </div><!-- .entry-header -->

                                <h3><a href="#">My fall in love story</a></h3>

                                <div class="tags-links">
                                    <a href="#">#winter</a>
                                    <a href="#">#love</a>
                                    <a href="#">#snow</a>
                                    <a href="#">#january</a>
                                </div><!-- .tags-links -->
                            </header><!-- .entry-header -->

                            <footer class="entry-footer">
                                <a class="read-more" href="#">read more</a>
                            </footer><!-- .entry-footer -->
                        </div><!-- .footer-post-cont -->
                    </div><!-- .footer-post-wrap -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container-fluid -->
    </div><!-- .outer-container -->

    <div class="container-fluid">
        <div class="row">
            <div class="footer-instagram flex flex-wrap flex-lg-nowrap">
                <figure>
                    <a href="#"><img src="/frontTheme/images/a.jpg" alt=""></a>
                </figure>

                <figure>
                    <a href="#"><img src="/frontTheme/images/b.jpg" alt=""></a>
                </figure>

                <figure>
                    <a href="#"><img src="/frontTheme/images/c.jpg" alt=""></a>
                </figure>

                <figure>
                        <a href="#"><img src="/frontTheme/images/d.jpg" alt=""></a>
                </figure>

                <figure>
                    <a href="#"><img src="/frontTheme/images/e.jpg" alt=""></a>
                </figure>

                <figure>
                    <a href="#"><img src="/frontTheme/images/f.jpg" alt=""></a>
                </figure>

                <figure>
                    <a href="#"><img src="/frontTheme/images/g.jpg" alt=""></a>
                </figure>
            </div>
        </div><!-- .row -->
    </div><!-- .container -->

    <div class="footer-bar">
        <div class="outer-container">
            <div class="container-fluid">
                <div class="row justify-content-between">
                    <div class="col-12 col-md-6">
                        <div class="footer-copyright">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div><!-- .footer-copyright -->
                    </div><!-- .col-xl-4 -->

                    <div class="col-12 col-md-6">
                        <div class="footer-social">
                            <ul class="flex justify-content-center justify-content-md-end align-items-center">
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div><!-- .footer-social -->
                    </div><!-- .col-xl-4 -->
                </div><!-- .row -->
            </div><!-- .container-fluid -->
        </div><!-- .outer-container -->
    </div><!-- .footer-bar -->
</footer><!-- .sit-footer -->

<script type='text/javascript' src='/frontTheme/js/jquery.js'></script>
<script type='text/javascript' src='/frontTheme/js/swiper.min.js'></script>
<script type='text/javascript' src='/frontTheme/js/custom.js'></script>

</body>
</html>