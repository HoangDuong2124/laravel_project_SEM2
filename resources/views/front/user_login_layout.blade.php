<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Home</title>
    <link rel="stylesheet" href="{{asset('front/css/nicepage.css')}}" media="screen">
    <link rel="stylesheet" href="{{asset('front/css/Home.css')}}" media="screen">
    <link rel="stylesheet" href="{{asset('front/css/Modal.css')}}">
     <link rel="stylesheet" href="{{asset('front/css/Search.css')}}">
    <script class="u-script" type="text/javascript" src="{{asset('front/js/jquery.js')}}" "=" " defer=" "></script>
    <script class="u-script " type="text/javascript " src="{{asset('front/js/nicepage.js')}} " "="" defer=""></script>
    <script src="{{asset('front/js/bootstrap.js')}}"></script>
<script src="{{asset('front/js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('front/js/scripts.js')}}"></script>
<script src="{{asset('front/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('front/js/jquery.nicescroll.js')}}"></script>

<script src="{{asset('front/js/jquery.scrollTo.js')}}"></script>
    <meta name="generator" content="Nicepage 4.15.11, nicepage.com">

    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
     
    <script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli&display=swap">
    
    <script>
        jQuery(document).ready(function($) {

            var TopFixMenu = $("#u-nav-container-scroll");

            $(window).scroll(function() {

                if ($(this).scrollTop() > 200) {

                    TopFixMenu.show();
                } else {
                    TopFixMenu.hide();
                }
            })
        })
    </script>
     <!--SCRIPT MODAL-->
     <script>
    jQuery(document).ready(function($){
        var $btn_open= $('#btn-open'),
            $btn_closee=$('#btn-closee'),
            $modal_container=$('#modal-container') ;
        $btn_open.on('click',function(){
             $modal_container.addClass('show');
        });
        $btn_closee.on('click',function(){
             $modal_container.removeClass('show');
        });
        $('#modal-container').on('click', function(event) {
                if ($(event.target).is($modal_container) ) {
                    $modal_container.removeClass('show');
                }
            });
    });
  </script>
    <!--END SCRIPT-->
  <script>
    jQuery(document).ready(function($){
        var $btn_open= $('#btn-open'),
            $btn_closee=$('#btn-closee'),
            $modal_container=$('#modal-container') ;
        $btn_open.on('click',function(){
             $modal_container.addClass('show');
        });
        $btn_closee.on('click',function(){
             $modal_container.removeClass('show');
        });
        $('#modal-container').on('click', function(event) {
                if ($(event.target).is($modal_container) ) {
                    $modal_container.removeClass('show');
                }
            });
    });
  </script>
  <!-- SCRIPT DROPDOWN USER -->
  <script>
    jQuery(document).ready(function(){
        var $wrap_user_login= $('.wrap-user-login'),
            $dropdown_user=$('.dropdown-menu-user') ;
        $wrap_user_login.on('click',function(){
             $dropdown_user.toggleClass('show');
        });
       
    });
  </script>
  <!-- SCRIPT DROPDOWN USER END -->


    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "",
            "logo": "{{asset('front/img/default-logo.png"
        }
    </script>
     <!--Back to top -->
     <button id="myBtn" title="Back to top"><i class="fa fa-chevron-up" aria-hidden="true"></i></button>
                <script>
                    window.onscroll = function() {
                        scrollFunction()
                    };

                    function scrollFunction() {
                        if (document.body.scrollTop > 600 || document.documentElement.scrollTop > 600) {
                            document.getElementById("myBtn").style.display = "block";
                        } else {
                            document.getElementById("myBtn").style.display = "none";
                        }
                    }
                    document.getElementById('myBtn').addEventListener("click", function() {
                        document.body.scrollTop = 0;
                        document.documentElement.scrollTop = 0;
                    });
                </script>

    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
</head>

<body class="u-body u-xl-mode" data-lang="en">
   <!--TOP Section Begin-->
   <div id="topp">
        <div class="justify-content-user">
            <div class="wrap-link-test">
                <div class="hotline">
                    <span class="text-hotline">Hotline đặt khám: </span>
                    <span class="link-hotline">
                        <a style="text-decoration: none;" href="#">0912345678</a>
                    </span>
                </div>
                <div class="support">
                    <a style="text-decoration: none;" href="#">Trung tâm trợ giúp</a>
                </div>
            </div>
            <div class="wrap-user-login">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="dashboard/img/2.png">
                <span class="username">
                   Hoàng Dương
                </span> 
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu-user extended logout ">
                <li><a href="#"><i style="margin-right:3px;color:blueviolet" class=" fa-solid fa-user"></i> Profile</a></li>
                <li><a href="#"><i style="margin-right:3px;color:blueviolet" class="fa-regular fa-calendar-days"></i> Booking History</a></li>
                <li><a href="#"><i style="margin-right:3px;color:#8b8e9e;" class="fa fa-cog"></i>  Settings</a></li>
                <li><a href="{{URL::to('/logout')}}"><i style="margin-right:3px;color:#8b8e9e" class="fa fa-key"></i> Log Out</a></li>
            </ul>
            </div>
        </div>
    </div>
   <!--TOP Section End-->
   <!-----POPUP FORM SIGNIN SIGNUP SECTION BEGIN------->
  
   <!-----POPUP FORM SIGNIN SIGNUP SECTION END------->
    <header class="u-clearfix u-header u-header" id="sec-b139">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <a href="/" class="u-image u-logo u-image-1">
                <img src="front/img/logo.png" class="u-logo-image u-logo-image-1" alt="">
            </a>
            <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
                <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
                    <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
                        <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
                        <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
                    </a>
                </div>
                <div class="u-nav-container">
                    <ul class="u-nav u-unstyled u-nav-1">
                        <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="/" style="padding: 10px 20px;">Home</a>
                        </li>
                        <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#" style="padding: 10px 20px;">Booking</a>
                            <ul class="drop-down">
                                <li><a href="/search-hospital" class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base">Hospital</a></li>
                                <li><a href="/search-doctor" class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base">Doctor</a></li>
                                <li><a href="/search-service" class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base">Service</a></li>
                            </ul>
                        </li>
                        <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="/handbook" style="padding: 10px 20px;">HandBook</a>
                        </li>
                        <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="/doi-tac" style="padding: 15px 20px;width:170px;height:70px;">Trở thành đối tác của<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; HEALTH PLUS</a>
                        </li>
                    </ul>
                </div>
                <!--SCROLLLL -->

               
                <div class="u-nav-container-collapse">
                    <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                        <div class="u-inner-container-layout u-sidenav-overflow">
                            <div class="u-menu-close"></div>
                            <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.html">Home</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="form.html">Booking</a>

                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="About.html">About</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contact.html">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
                </div>
            </nav>
        </div>
    </header>

<!------Main Section Begin-------->
       @yield('main_content')
<!------Main Section End-------->

<div class="d-flex flex-column h-100">


        <!-- FOOTER -->
        <footer class="w-100 py-4 flex-shrink-0">
            <div class="container py-4">
                <div class="row gy-4 gx-5">
                    <div class="col-lg-4 col-md-6">
                        <h5 class="h1 text-white">FB.</h5>
                        <p class="small text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                        <p class="small text-muted mb-0">&copy; Copyrights. All rights reserved. <a class="text-primary" href="#">Bootstrapious.com</a></p>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <h5 class="text-white mb-3">Quick links</h5>
                        <ul class="list-unstyled text-muted">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Get started</a></li>
                            <li><a href="#">FAQ</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <h5 class="text-white mb-3">Quick links</h5>
                        <ul class="list-unstyled text-muted">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Get started</a></li>
                            <li><a href="#">FAQ</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <h5 class="text-white mb-3">Newsletter</h5>
                        <p class="small text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                        <form action="#">
                            <div class="input-group mb-3">
                                <input class="form-control" type="text" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                                <button class="btn btn-primary" id="button-addon2" type="button"><i class="fas fa-paper-plane"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </footer>
    </div>
  
</body>

</html>