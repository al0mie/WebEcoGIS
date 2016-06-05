<!DOCTYPE html>
<html>
<head>
    <title>EcoGIS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);
        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <!--Custom Theme files-->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/index.css" rel="stylesheet" type="text/css" media="all"/>
    <link rel="stylesheet" href="css/swipebox.css">
    <!--//Custom Theme files-->
    <!--js-->
    <script src="js/jquery-1.11.1.min.js"></script>
    <!--//js-->
    <!--web-fonts-->
    <link href='//fonts.googleapis.com/css?family=Nova+Round' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic'
          rel='stylesheet' type='text/css'>
    <!--//web-fonts-->
    <!--start-smooth-scrolling-->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
            });
        });
    </script>
    <!--//end-smooth-scrolling-->
</head>
<body>
<!--banner-->

<div class="banner">
    <div class="header"><!--header-->
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h1><a href="index.html">EcoGIS</a></h1>
                </div>

                <!--navbar-header-->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/home" class="active">{!!  trans('welcome.home') !!}</a></li>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    {{ \Config::get('language')[App::getLocale()] }}
                                </a>

                                <ul class="dropdown-menu">
                                    @foreach (\Config::get('language') as $lang => $language)
                                        @if ($lang != \App::getLocale())
                                            <li>
                                                <a href="{{ route('lang.switch', $lang) }}">{{$language}}</a>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </li>

                            <li>@if (\Auth::user()) <a href="#">{!! \Auth::user()->name !!} </a>
                                @else <a href="/login">{!!  trans('welcome.login') !!}</a>
                                @endif
                            </li>
                        </ul>

                        <li><a href="#features" class="scroll">{{ trans('welcome.features') }}</a></li>
                        <li><a href="#contact" class="scroll">{{ trans('welcome.contact_us') }}</a></li>

                    </ul>
                    <div class="clearfix"></div>
                </div>
            </nav>
        </div>

        <div class="cd-main-header">
            <ul class="cd-header-buttons">

            </ul> <!-- cd-header-buttons -->
        </div>

    </div>
    <!--//header-->
    <!--banner-text-->
    <div class="banner-text">
        <!--banner Slider starts Here-->
        <script src="js/responsiveslides.min.js"></script>
        <script>
            // You can also use "$(window).load(function() {"
            $(function () {
                // Slideshow 3
                $("#slider3").responsiveSlides({
                    auto: true,
                    pager: true,
                    nav: false,
                    speed: 500,
                    namespace: "callbacks",
                    before: function () {
                        $('.events').append("<li>before event fired.</li>");
                    },
                    after: function () {
                        $('.events').append("<li>after event fired.</li>");
                    }
                });

            });
        </script>
        <!--//End-slider-script-->
        <div id="top" class="callbacks_container">
            <ul class="rslides" id="slider3">
                <li>
                    <h2>{!! trans('welcome.we_give_the_best_solutions') !!}</h2>
                    <p>{!! trans('welcome.try_to_start') !!}</p>
                    @if (!\Auth::user())
                        <a class="more hvr-bounce-to-right" href="#" data-toggle="modal" data-target="#myModal">{{ trans('welcome.register_now') }}</a>
                    @endif
                </li>
                <li>
                    <h3>Powerfull. Great. Amazing</h3>
                    <p>{!! trans('welcome.try_to_start') !!}</p>
                    <a class="more hvr-bounce-to-right" href="#" data-toggle="modal" data-target="#myModal">{{ trans('welcome.features') }}</a>
                </li>
            </ul>
        </div>
    </div>
    <!--//banner-text-->
</div>
<!--//banner-->
<!--modal-sign-->
<div class="modal bnr-modal fade" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
            </div>
            <section>
                <div class="modal-body modal-spa">
                    @include('auth.register')
                </div>
            </section>
        </div>
    </div>
</div>
<!--//modal-sign-->
<!--about-->
<div id="about" class="about">
    <div class="container">
        <div class="title">
            <h3>{!! trans('welcome.about_us') !!} </h3>
            <p> </p>
        </div>
        <div class="about-row">
            <div class="col-md-3 about-grids">
                <span class="glyphicon glyphicon-stats effect-1" aria-hidden="true"></span>
                <h4>{!! trans('welcome.best_performance') !!}</h4>
                <h6></h6>
            </div>
            <div class="col-md-3 about-grids">
                <span class="glyphicon glyphicon-user effect-1" aria-hidden="true"></span>
                <h4>{!! trans('welcome.online_advisors') !!}</h4>
                <h6></h6>
            </div>
            <div class="col-md-3 about-grids">
                <span class="glyphicon glyphicon-list-alt effect-1" aria-hidden="true"></span>
                <h4>{!! trans('welcome.new_technologies') !!}</h4>
                <h6></h6>
            </div>
            <div class="col-md-3 about-grids">
                <span class="glyphicon glyphicon-check effect-1" aria-hidden="true"></span>
                <h4>{!! trans('welcome.security_privacy') !!}</h4>
                <h6></h6>
            </div>
            <div class="clerfix"></div>
        </div>
    </div>
</div>
<!--//about-->
<!--features-->
<div id="features" class="features">
    <div class="container">
        <div class="title">
            <h3>{!! trans('welcome.features') !!}</h3>
            <p>Duis euismod massa ut sem fringilla blandit. Proin vel enim nec ipsum finibus. </p>
        </div>
        <div class="features-row">
            <div class="col-md-4 features-grids">
                <div class="features-left">
                    <h4>{!! trans('welcome.projects_done') !!}</h4>
                    <h5>5200 </h5>
                </div>
                <div class="features-right">
                    <span class="glyphicon glyphicon-check" aria-hidden="true"></span>
                </div>
                <div class="clerfix"></div>
            </div>
            <div class="col-md-4 features-grids features-grids-mdl">
                <div class="features-left">
                    <h4>{!! trans('welcome.visitors') !!}</h4>
                    <h5>6000 </h5>
                </div>
                <div class="features-right">
                    <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                </div>
                <div class="clerfix"></div>
            </div>
            <div class="col-md-4 features-grids">
                <div class="features-left">
                    <h4>{!! trans('welcome.partners') !!}</h4>
                    <h5>100 </h5>
                </div>
                <div class="features-right">
                    <span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>
                </div>
                <div class="clerfix"></div>
            </div>
            <div class="clerfix"></div>
        </div>
    </div>
</div>
<!--//about-->

<!--testimonial-->
<div class="testimonial">
    <div class="col-md-6 testi-left">
        <div class="testi-left-info">
            <h4>HAPPY CUSTOMERS</h4>
            <script>
                // You can also use "$(window).load(function() {"
                $(function () {
                    // Slideshow 2
                    $("#slider2").responsiveSlides({
                        auto: true,
                        pager: true,
                        nav: false,
                        speed: 500,
                        namespace: "callbacks",
                        before: function () {
                            $('.events').append("<li>before event fired.</li>");
                        },
                        after: function () {
                            $('.events').append("<li>after event fired.</li>");
                        }
                    });

                });
            </script>
            <!--//End-slider-script-->
            <div id="top2" class="callbacks_container">
                <ul class="rslides" id="slider2">
                    <li>
                        <p><span> </span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt lorem
                            sed velit fermentum lobortis. Fusce eu semper lacus eget placerat mauris, Sed lectus tellus.<span
                                    class="last"> </span></p>
                        <h6>Patrick - </h6>
                        <img src="images/img6.png" alt=""/>
                    </li>
                    <li>
                        <p><span> </span>Fusce eu semper lacus eget placerat mauris lorem ipsum dolor sit amet, Sed
                            tincidunt lorem sed velit fermentum lobortis. consectetur adipiscing elit. Sed lectus
                            tellus.<span class="last"> </span></p>
                        <h6>Thomson - </h6>
                        <img src="images/img7.png" alt=""/>
                    </li>
                    <li>
                        <p><span> </span>Sed tincidunt lorem sed velit fermentum lobortis. Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit. Fusce eu semper lacus eget placerat mauris, Sed lectus
                            tellus.<span class="last"> </span></p>
                        <h6>Federica - </h6>
                        <img src="images/img8.png" alt=""/>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-6 testi-left testi-right">
        <div class="testi-right-info">
            <h4>{!! trans('welcome.subscribe') !!}</h4>
            <form action="#" method="post">
                <input type="text" name="Email" placeholder="Enter Your Email" required="">
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<!--//testimonial-->
<!--contact-->
<div class="contact" id="contact">
    <div class="container">
        <div class="title">
            <h3>{!! trans('welcome.contact') !!}</h3>
            <p>Duis euismod massa ut sem fringilla blandit. Proin vel enim nec ipsum finibus. </p>
        </div>
        <div class="contact-grids">
            <div class="col-md-5 address">
                <h4>Contact Info</h4>
                <div class="address-row">
                    <div class="col-md-2 address-left">
                        <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                    </div>
                    <div class="col-md-10 address-right">
                        <h5>Mail Us</h5>
                        <p><a href="mailto:info@example.com">alex.mokrencko@yandex.ru</a></p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="address-row">
                    <div class="col-md-2 address-left">
                        <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
                    </div>
                    <div class="col-md-10 address-right">
                        <h5>{!! trans('welcome.call_us') !!}</h5>
                        <p>+77 777 77 7777</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-7 contact-form">
                <form action="#" method="post">
                    <input type="text" name="First Name" placeholder="{!! trans('welcome.first_name') !!}" required="">
                    <input class="email" name="Last Name" type="text" placeholder="{!! trans('welcome.surname') !!}" required="">
                    <input type="text" name="Number" placeholder="{!! trans('welcome.phone') !!}" required="">
                    <input class="email" name="Email" type="text" placeholder="Email" required="">
                    <textarea name="Message" placeholder="{!! trans('welcome.message') !!}" required=""></textarea>
                    <input type="submit" value="SUBMIT">
                </form>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--//contact-->
<!--footer-->
<div class="footer">
    <div class="container">
        <div class="footer-left">
            <p>© 2016 EcoGIS. {!! trans('welcome.all_rights_reserved') !!}</p>
        </div>
        <div class="footer-right social-icons">
            <ul>
                <li><a href="#"> </a></li>
                <li><a href="#" class="fb"> </a></li>
                <li><a href="#" class="gp"> </a></li>
                <li><a href="#" class="drb"> </a></li>
            </ul>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

<!--//footer-->
<!--smooth-scrolling-of-move-up-->
<script type="text/javascript">
    $(document).ready(function () {
        /*
         var defaults = {
         containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear'
         };
         */

        $().UItoTop({easingType: 'easeOutQuart'});

    });
</script>
<!--//smooth-scrolling-of-move-up-->
<!-- Include jQuery & Filterizr -->
<script src="js/jquery.filterizr.js"></script>
<script src="js/controls.js"></script>
<!-- Kick off Filterizr -->
<script type="text/javascript">
    $(function () {
        //Initialize filterizr with default options
        $('.filtr-container').filterizr();
    });
</script>
<!--//gallery-->
<!-- swipe box js -->
<script src="js/jquery.swipebox.min.js"></script>
<script type="text/javascript">
    jQuery(function ($) {
        $(".swipebox").swipebox();
    });
</script>
<!-- //swipe box js -->
<!--search jQuery-->
<script src="js/main.js"></script>
<!--//search jQuery-->
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/bootstrap.js"></script>
</body>
</html>