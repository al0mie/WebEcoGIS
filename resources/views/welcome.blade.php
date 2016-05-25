<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
    <title>Max a Corporate Category Flat Bootstrap Responsive website Template | Home :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Max Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--Custom Theme files-->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/index.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="css/swipebox.css">
    <!--//Custom Theme files-->
    <!--js-->
    <script src="js/jquery-1.11.1.min.js"></script>
    <!--//js-->
    <!--web-fonts-->
    <link href='//fonts.googleapis.com/css?family=Nova+Round' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!--//web-fonts-->
    <!--start-smooth-scrolling-->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();

                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
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
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h1><a  href="index.html">MAX</a></h1>
                </div>
                <!--navbar-header-->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.html" class="active">Home</a></li>
                        <li><a href="#about" class="scroll">About</a></li>
                        <li><a href="#features" class="scroll">Features</a></li>
                        <li><a href="#team" class="scroll">Team</a></li>
                        <li><a href="#portfolio" class="scroll">Portfolio</a></li>
                        <li><a href="#contact" class="scroll">Contact Us</a></li>
                    </ul>
                    <div class="clearfix"> </div>
                </div>
            </nav>
        </div>
        <div class="cd-main-header">
            <ul class="cd-header-buttons">
                <li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
            </ul> <!-- cd-header-buttons -->
        </div>
        <div id="cd-search" class="cd-search">
            <form action="#" method="post">
                <input name="Search" type="search" placeholder="Search...">
            </form>
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
        <div  id="top" class="callbacks_container">
            <ul class="rslides" id="slider3">
                <li>
                    <h2>We Give the best solutions<br>for Improvement</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipi est.</p>
                    <a class="more hvr-bounce-to-right" href="#" data-toggle="modal" data-target="#myModal">Register Now</a>
                </li>
                <li>
                    <h3>Sollicitudin feugiat blandit<br>Quisque feugiat.</h3>
                    <p>Duis euismod massa ut sem fringilla blandit ipsum.</p>
                    <a class="more hvr-bounce-to-right" href="#" data-toggle="modal" data-target="#myModal">Register Now</a>
                </li>
                <li>
                    <h3>Nam erat purus, malesuada<br> Venenatis ut velit.</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipi est.</p>
                    <a class="more hvr-bounce-to-right" href="#" data-toggle="modal" data-target="#myModal">Register Now</a>
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
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <section>
                <div class="modal-body modal-spa">
                    <form action="#" method="post">
                        <div class="form-left">
                            <label>Name :</label>
                            <input type="text" name="Your Name" placeholder="Enter Your Name" required="">
                        </div>
                        <div class="form-right">
                            <label>Course :</label>
                            <select id="country" onchange="change_country(this.value)" class="frm-field required">
                                <option value="0">40 & 27-Mile Adults</option>
                                <option value="1">40 & 27-Mile Child</option>
                                <option value="2">8-Mile Family Ride</option>
                                <option value="3">Century</option>
                                <option value="4">Metric Century</option>
                            </select>
                        </div>
                        <div class="form-left">
                            <label>Date :</label>
                            <input type="date" name="Date" >
                        </div>
                        <div class="form-right">
                            <label>City :</label>
                            <input type="text" name="City" placeholder="Enter Your City" required="">
                        </div>
                        <div class="clearfix"> </div>
                        <label>Contact Info :</label>
                        <input type="text" name="Address" placeholder="Enter Contact Details" required="">
                        <input type="submit" value="Register Now">
                    </form>
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
            <h3>About Us </h3>
            <p>Duis euismod massa ut sem fringilla blandit. Proin vel enim nec ipsum finibus. </p>
        </div>
        <div class="about-row">
            <div class="col-md-3 about-grids">
                <span class="glyphicon glyphicon-stats effect-1" aria-hidden="true"></span>
                <h4>Best Performance</h4>
                <p>Itaque earum rerum hic tenetur a sapiente delectus
                    reiciendis maiores alias consequatur aut</p>
                <h6> </h6>
            </div>
            <div class="col-md-3 about-grids">
                <span class="glyphicon glyphicon-user effect-1" aria-hidden="true"></span>
                <h4>Online Advisors</h4>
                <p>Itaque earum rerum hic tenetur a sapiente delectus
                    reiciendis maiores alias consequatur aut</p>
                <h6> </h6>
            </div>
            <div class="col-md-3 about-grids">
                <span class="glyphicon glyphicon-list-alt effect-1" aria-hidden="true"></span>
                <h4>New Technologies</h4>
                <p>Itaque earum rerum hic tenetur a sapiente delectus
                    reiciendis maiores alias consequatur aut</p>
                <h6> </h6>
            </div>
            <div class="col-md-3 about-grids">
                <span class="glyphicon glyphicon-check effect-1" aria-hidden="true"></span>
                <h4>Security & Privacy</h4>
                <p>Itaque earum rerum hic tenetur a sapiente delectus
                    reiciendis maiores alias consequatur aut</p>
                <h6> </h6>
            </div>
            <div class="clerfix"> </div>
        </div>
    </div>
</div>
<!--//about-->
<!--features-->
<div id="features" class="features">
    <div class="container">
        <div class="title">
            <h3>Features</h3>
            <p>Duis euismod massa ut sem fringilla blandit. Proin vel enim nec ipsum finibus. </p>
        </div>
        <div class="features-row">
            <div class="col-md-4 features-grids">
                <div class="features-left">
                    <h4>Projects Done</h4>
                    <h5>5200 </h5>
                </div>
                <div class="features-right">
                    <span class="glyphicon glyphicon-check" aria-hidden="true"></span>
                </div>
                <div class="clerfix"> </div>
            </div>
            <div class="col-md-4 features-grids features-grids-mdl">
                <div class="features-left">
                    <h4>Visitors</h4>
                    <h5>6000 </h5>
                </div>
                <div class="features-right">
                    <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                </div>
                <div class="clerfix"> </div>
            </div>
            <div class="col-md-4 features-grids">
                <div class="features-left">
                    <h4>Business Donor</h4>
                    <h5>500 </h5>
                </div>
                <div class="features-right">
                    <span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>
                </div>
                <div class="clerfix"> </div>
            </div>
            <div class="clerfix"> </div>
        </div>
    </div>
</div>
<!--//about-->
<!--team-->
<div class="team" id="team">
    <div class="container">
        <div class="title">
            <h3>Our Team</h3>
            <p>Duis euismod massa ut sem fringilla blandit. Proin vel enim nec ipsum finibus. </p>
        </div>
        <div class="team-row">
            <div class="col-md-3 team-grids">
                <img class="img-responsive" src="images/img1.jpg" alt="">
                <div class="captn">
                    <h4>Edwards Doe</h4>
                    <p>Founder</p>
                    <div class="social-icons">
                        <ul>
                            <li><a href="#"> </a></li>
                            <li><a href="#" class="fb"> </a></li>
                            <li><a href="#" class="gp"> </a></li>
                            <li><a href="#" class="drb"> </a></li>
                        </ul>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 team-grids">
                <img class="img-responsive" src="images/img2.jpg" alt="">
                <div class="captn">
                    <h4>Laura Hill</h4>
                    <p>Lead Manager</p>
                    <div class="social-icons">
                        <ul>
                            <li><a href="#"> </a></li>
                            <li><a href="#" class="fb"> </a></li>
                            <li><a href="#" class="gp"> </a></li>
                            <li><a href="#" class="drb"> </a></li>
                        </ul>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 team-grids">
                <img class="img-responsive" src="images/img3.jpg" alt="">
                <div class="captn">
                    <h4>Christopher</h4>
                    <p>Lead Manager</p>
                    <div class="social-icons">
                        <ul>
                            <li><a href="#"> </a></li>
                            <li><a href="#" class="fb"> </a></li>
                            <li><a href="#" class="gp"> </a></li>
                            <li><a href="#" class="drb"> </a></li>
                        </ul>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 team-grids">
                <img class="img-responsive" src="images/img4.jpg" alt="">
                <div class="captn">
                    <h4>Mark Sophia</h4>
                    <p>Lead Manager</p>
                    <div class="social-icons">
                        <ul>
                            <li><a href="#"> </a></li>
                            <li><a href="#" class="fb"> </a></li>
                            <li><a href="#" class="gp"> </a></li>
                            <li><a href="#" class="drb"> </a></li>
                        </ul>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!--//team-->
<!--portfolio-->
<div id="portfolio" class="portfolio">
    <div class="container">
        <div class="title">
            <h3>Portfolio</h3>
            <p>Duis euismod massa ut sem fringilla blandit. Proin vel enim nec ipsum finibus. </p>
        </div>
        <div class="gallery_gds">
            <ul class="simplefilter">
                <li class="active" data-filter="all">All</li>
                <li data-filter="1">Category 1</li>
                <li data-filter="2">Category 2</li>
                <li data-filter="3">Category 3</li>
            </ul>
            <div class="filtr-container">
                <div class="col-md-4 filtr-item" data-category="1, 4" data-sort="Busy streets">
                    <div class="hover ehover14">
                        <a href="images/g1.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
                            <img src="images/g1.jpg" alt="" class="img-responsive" />
                            <div class="overlay">
                                <h4>Portfolio</h4>
                                <div class="info nullbutton button" data-toggle="modal" data-target="#modal14">Show More</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 filtr-item" data-category="2, 3" data-sort="Luminous night">
                    <div class="hover ehover14">
                        <a href="images/g2.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
                            <img src="images/g2.jpg" alt="" class="img-responsive" />
                            <div class="overlay">
                                <h4>Portfolio</h4>
                                <div class="info nullbutton button" data-toggle="modal" data-target="#modal14">Show More</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 filtr-item" data-category="1, 4" data-sort="City wonders">
                    <div class="hover ehover14">
                        <a href="images/g3.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
                            <img src="images/g3.jpg" alt="" class="img-responsive" />
                            <div class="overlay">
                                <h4>Portfolio</h4>
                                <div class="info nullbutton button" data-toggle="modal" data-target="#modal14">Show More</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 filtr-item" data-category="3, 4" data-sort="Industrial site">
                    <div class="hover ehover14">
                        <a href="images/g4.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
                            <img src="images/g4.jpg" alt="" class="img-responsive" />
                            <div class="overlay">
                                <h4>Portfolio</h4>
                                <div class="info nullbutton button" data-toggle="modal" data-target="#modal14">Show More</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 filtr-item" data-category="3" data-sort="In production">
                    <div class="hover ehover14">
                        <a href="images/g5.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
                            <img src="images/g5.jpg" alt="" class="img-responsive" />
                            <div class="overlay">
                                <h4>Portfolio</h4>
                                <div class="info nullbutton button" data-toggle="modal" data-target="#modal14">Show More</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 filtr-item" data-category="2, 4" data-sort="Peaceful lake">
                    <div class="hover ehover14">
                        <a href="images/g6.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
                            <img src="images/g6.jpg" alt="" class="img-responsive" />
                            <div class="overlay">
                                <h4>Portfolio</h4>
                                <div class="info nullbutton button" data-toggle="modal" data-target="#modal14">Show More</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
<!--//portfolio-->
<!--skills-->
<div class="skills">
    <div class="container">
        <div class="title">
            <h3>Skills</h3>
            <p>Duis euismod massa ut sem fringilla blandit. Proin vel enim nec ipsum finibus. </p>
        </div>
        <div class="skills-row">
            <div class="col-md-6 skills-left">
                <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                    <ul id="myTab" class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">History</a></li>
                        <li role="presentation"><a href="#carl" role="tab" id="carl-tab" data-toggle="tab" aria-controls="carl">Our Goal</a></li>
                        <li role="presentation"><a href="#james" role="tab" id="james-tab" data-toggle="tab" aria-controls="james">Achievements</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                            <div class="tabcontent-grids">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt lorem sed velit fermentum lobortis. Fusce eu semper lacus, eget placerat mauris. Sed lectus tellus, sodales id elit a, feugiat porttitor nulla. Sed porta magna vitae nisl vulputate lacinia. Morbi malesuada sollicitudin tortor, vitae pharetra nunc lacinia eget. Nulla ornare purus nunc, ut dapibus leo sodales adipiscing. Praesent sit amet justo diam. Quisque sagittis egestas sem vitae vestibulum. Quisque nec lacus ornare, volutpat arcu in, lacinia dolor.</p>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="carl" aria-labelledby="carl-tab">
                            <div class="tabcontent-grids">
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                                    cupidatat non proident, sunt in culpa qui officia deserunt mollit
                                    anim id est laborum.</p>
                                <ul>
                                    <li><span class="glyphicon glyphicon-menu-right"></span> Sed tincidunt lorem sed </li>
                                    <li><span class="glyphicon glyphicon-menu-right"></span> Excepteur sint occaecat </li>
                                    <li><span class="glyphicon glyphicon-menu-right"></span> Duis aute irure dolor in </li>
                                </ul>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="james" aria-labelledby="james-tab">
                            <div class="tabcontent-grids">
                                <p>Excepteur sint occaecat
                                    cupidatat non proident, sunt in culpa qui officia deserunt mollit
                                    anim id est laborum. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. </p>
                                <ul>
                                    <li><span class="glyphicon glyphicon-menu-right"></span> Sed tincidunt lorem sed </li>
                                    <li><span class="glyphicon glyphicon-menu-right"></span> Excepteur sint occaecat </li>
                                    <li><span class="glyphicon glyphicon-menu-right"></span> Duis aute irure dolor in </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 skills-right bar_group">
                <div class='bar_group__bar thin' label='Lorem ipsum &nbsp;&nbsp; 80%' value='200'></div>
                <div class='bar_group__bar thin' label='Quis nostrud &nbsp;&nbsp; 100%' value='250'></div>
                <div class='bar_group__bar thin' label='Sed do eiusmod &nbsp;&nbsp; 72%' value='180'></div>
                <div class='bar_group__bar thin' label='Ut enim adnim &nbsp;&nbsp; 88%' value='220'></div>
            </div>
            <!--bar-js-->
            <script src="js/bars.js"></script>
            <!--bar-js-->
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!--//skills-->
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
            <div  id="top2" class="callbacks_container">
                <ul class="rslides" id="slider2">
                    <li>
                        <p><span> </span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt lorem sed velit fermentum lobortis. Fusce eu semper lacus eget placerat mauris, Sed lectus tellus.<span class="last"> </span></p>
                        <h6>Patrick - </h6>
                        <img src="images/img6.png" alt=""/>
                    </li>
                    <li>
                        <p><span> </span>Fusce eu semper lacus eget placerat mauris lorem ipsum dolor sit amet, Sed tincidunt lorem sed velit fermentum lobortis. consectetur adipiscing elit. Sed lectus tellus.<span class="last"> </span></p>
                        <h6>Thomson - </h6>
                        <img src="images/img7.png" alt=""/>
                    </li>
                    <li>
                        <p><span> </span>Sed tincidunt lorem sed velit fermentum lobortis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eu semper lacus eget placerat mauris, Sed lectus tellus.<span class="last"> </span></p>
                        <h6>Federica - </h6>
                        <img src="images/img8.png" alt=""/>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-6 testi-left testi-right">
        <div class="testi-right-info">
            <h4>SUBSCRIBE</h4>
            <form action="#" method="post">
                <input type="text" name="Email" placeholder="Enter Your Email" required="">
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
    <div class="clearfix"> </div>
</div>
<!--//testimonial-->
<!--contact-->
<div class="contact" id="contact">
    <div class="container">
        <div class="title">
            <h3>Contact</h3>
            <p>Duis euismod massa ut sem fringilla blandit. Proin vel enim nec ipsum finibus. </p>
        </div>
        <div class="contact-grids">
            <div class="col-md-5 address">
                <h4>Contact Info</h4>
                <div class="address-row">
                    <div class="col-md-2 address-left">
                        <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                    </div>
                    <div class="col-md-10 address-right">
                        <h5>Visit Us</h5>
                        <p>123 Fourth Avenue, SEATTLE WA 98104, USA </p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="address-row">
                    <div class="col-md-2 address-left">
                        <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                    </div>
                    <div class="col-md-10 address-right">
                        <h5>Mail Us</h5>
                        <p><a href="mailto:info@example.com"> mail@example.com</a></p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="address-row">
                    <div class="col-md-2 address-left">
                        <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
                    </div>
                    <div class="col-md-10 address-right">
                        <h5>Call Us</h5>
                        <p>+11 222 333 4444</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-7 contact-form">
                <form action="#" method="post">
                    <input type="text" name="First Name" placeholder="First Name" required="">
                    <input class="email" name="Last Name" type="text" placeholder="Last Name" required="">
                    <input type="text" name="Number" placeholder="Mobile Number" required="">
                    <input class="email" name="Email" type="text" placeholder="Email" required="">
                    <textarea name="Message" placeholder="Message" required=""></textarea>
                    <input type="submit" value="SUBMIT">
                </form>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!--//contact-->
<!--map-->
<div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d343829.1271629402!2d-122.61489066225299!3d47.681214398164556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54906aba3648f20b%3A0xc5c4dedaafcead17!2sSeattle%2C+WA+98104!5e0!3m2!1sen!2sin!4v1461914461629"></iframe>
</div>
<!--//map-->
<!--footer-->
<div class="footer">
    <div class="container">
        <div class="footer-left">
            <p>© 2016 Max . All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
        </div>
        <div class="footer-right social-icons">
            <ul>
                <li><a href="#"> </a></li>
                <li><a href="#" class="fb"> </a></li>
                <li><a href="#" class="gp"> </a></li>
                <li><a href="#" class="drb"> </a></li>
            </ul>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!--//footer-->
<!--smooth-scrolling-of-move-up-->
<script type="text/javascript">
    $(document).ready(function() {
        /*
         var defaults = {
         containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear'
         };
         */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!--//smooth-scrolling-of-move-up-->
<!-- Include jQuery & Filterizr -->
<script src="js/jquery.filterizr.js"></script>
<script src="js/controls.js"></script>
<!-- Kick off Filterizr -->
<script type="text/javascript">
    $(function() {
        //Initialize filterizr with default options
        $('.filtr-container').filterizr();
    });
</script>
<!--//gallery-->
<!-- swipe box js -->
<script src="js/jquery.swipebox.min.js"></script>
<script type="text/javascript">
    jQuery(function($) {
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