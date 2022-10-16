<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Home</title>
    <link rel="stylesheet" href="front/css/nicepage.css" media="screen">
    <link rel="stylesheet" href="front/css/Home.css" media="screen">
    <link rel="stylesheet" href="front/css/Modal.css">
    <script class="u-script" type="text/javascript" src="front/js/jquery.js" "=" " defer=" "></script>
    <script class="u-script " type="text/javascript " src="front/js/nicepage.js " "="" defer=""></script>
    <meta name="generator" content="Nicepage 4.15.11, nicepage.com">

    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
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

<script>
        jQuery(document).ready(function($) {
            var $form_modal = $('.cd-user-modal'),
                $form_login = $form_modal.find('#cd-login'),
                $form_signup = $form_modal.find('#cd-signup'),
                $form_forgot_password = $form_modal.find('#cd-reset-password'),
                $form_modal_tab = $('.cd-switcher'),
                $tab_login = $form_modal_tab.children('li').eq(0).children('a'),
                $tab_signup = $form_modal_tab.children('li').eq(1).children('a'),
                $forgot_password_link = $form_login.find('.cd-form-bottom-message a'),
                $back_to_login_link = $form_forgot_password.find('.cd-form-bottom-message a'),
                $wrap_user = $('.wrap-user');
            //open modalwrap_user
            $wrap_user.on('click', function(event) {
                if ($(event.target).is($wrap_user)) {
                    // on mobile open the submenu
                    $(this).children('a').toggleClass('is-visible');
                } else {
                    // on mobile close submenu
                    $wrap_user.children('a').removeClass('is-visible');
                    //show modal layer
                    $form_modal.addClass('is-visible');
                    //show the selected form
                    ($(event.target).is('.cd-signup')) ? signup_selected(): login_selected();
                }
            });
            //close modal
            $('.cd-user-modal').on('click', function(event) {
                if ($(event.target).is($form_modal) || $(event.target).is('.cd-close-form')) {
                    $form_modal.removeClass('is-visible');
                }
            });
            //close modal when clicking the esc keyboard button
            $(document).keyup(function(event) {
                if (event.which == '27') {
                    $form_modal.removeClass('is-visible');
                }
            });
            //switch from a tab to another
            $form_modal_tab.on('click', function(event) {
                event.preventDefault();
                ($(event.target).is($tab_login)) ? login_selected(): signup_selected();
            });
            //hide or show password
            $('.hide-password').on('click', function() {
                var $this = $(this),
                    $password_field = $this.prev('input');
                ('password' == $password_field.attr('type')) ? $password_field.attr('type', 'text'): $password_field.attr('type', 'password');
                ('Hide' == $this.text()) ? $this.text('Show'): $this.text('Hide');
                //focus and move cursor to the end of input field
                $password_field.putCursorAtEnd();
            });
            //show forgot-password form 
            $forgot_password_link.on('click', function(event) {
                event.preventDefault();
                forgot_password_selected();
            });
            //back to login from the forgot-password form
            $back_to_login_link.on('click', function(event) {
                event.preventDefault();
                login_selected();
            });

            function login_selected() {
                $form_login.addClass('is-selected');
                $form_signup.removeClass('is-selected');
                $form_forgot_password.removeClass('is-selected');
                $tab_login.addClass('selected');
                $tab_signup.removeClass('selected');
            }

            function signup_selected() {
                $form_login.removeClass('is-selected');
                $form_signup.addClass('is-selected');
                $form_forgot_password.removeClass('is-selected');
                $tab_login.removeClass('selected');
                $tab_signup.addClass('selected');
            }

            function forgot_password_selected() {
                $form_login.removeClass('is-selected');
                $form_signup.removeClass('is-selected');
                $form_forgot_password.addClass('is-selected');
            }
            //Kiểm tra form hợp lệ 
            $form_login.find('input[type="submit"]').on('click', function(event) {
                event.preventDefault();
                if ($('#signin-email').val() == '') {
                    $form_login.find('input[type="email"]').toggleClass('has-error').next('span').toggleClass('is-visible');
                }
            });
            //IE9 placeholder fallback
            //credits http://www.hagenburger.net/BLOG/HTML5-Input-Placeholder-Fix-With-jQuery.html
            if (!Modernizr.input.placeholder) {
                $('[placeholder]').focus(function() {
                    var input = $(this);
                    if (input.val() == input.attr('placeholder')) {
                        input.val('');
                    }
                }).blur(function() {
                    var input = $(this);
                    if (input.val() == '' || input.val() == input.attr('placeholder')) {
                        input.val(input.attr('placeholder'));
                    }
                }).blur();
                $('[placeholder]').parents('form').submit(function() {
                    $(this).find('[placeholder]').each(function() {
                        var input = $(this);
                        if (input.val() == input.attr('placeholder')) {
                            input.val('');
                        }
                    })
                });
            }
        });
        //credits https://css-tricks.com/snippets/jquery/move-cursor-to-end-of-textarea-or-input/
        jQuery.fn.putCursorAtEnd = function() {
            return this.each(function() {
                // If this function exists...
                if (this.setSelectionRange) {
                    // ... then use it (Doesn't work in IE)
                    // Double the length because Opera is inconsistent about whether a carriage return is one character or two. Sigh.
                    var len = $(this).val().length * 2;
                    this.setSelectionRange(len, len);
                } else {
                    // ... otherwise replace the contents with itself
                    // (Doesn't work in Google Chrome)
                    $(this).val($(this).val());
                }
            });
        };
        jQuery('#cody-info ul li').eq(1).on('click', function() {
            $('#cody-info').hide();
        });
    </script>

    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "",
            "logo": "front/img/default-logo.png"
        }
    </script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
</head>

<body class="u-body u-xl-mode" data-lang="en">
   <!--TOP Section Begin-->
   <div id="topp">
        <div class="justify-content">
            <div class="wrap-link-test">
                <div class="hotline">
                    <span class="text-hotline">Hotline đặt khám: </span>
                    <span class="link-hotline">
                        <a href="#">0912345678</a>
                    </span>
                </div>
                <div class="support">
                    <a href="#">Trung tâm trợ giúp</a>
                </div>
            </div>
            <div class="wrap-user">
                <div class="cd-signup">
                    <a href="#0">Đăng kí</a>
                </div>
                <div class="space"></div>
                <div class="cd-signin">
                    <a  href="#0">Đăng nhập</a>
                </div>
            </div>
        </div>
    </div>
   <!--TOP Section End-->
   <!-----POPUP FORM SIGNIN SIGNUP SECTION BEGIN------->
   <div class="cd-user-modal">
        <!-- this is the entire modal form, including the background -->
        <div class="cd-user-modal-container">
            <!-- this is the container wrapper -->
            <ul class="cd-switcher">
                <li>
                    <a href="#0">Đăng nhập
            </a>
                </li>
                <li>
                    <a href="#0">Tạo tài khoản
            </a>
                </li>
            </ul>
            <div id="cd-login">
                <!-- log in form -->
                <form class="cd-form">
                    <p class="fieldset">
                        <label class="image-replace cd-email" for="signin-email">Email
              </label>
                        <input class="full-width has-padding has-border" id="signin-email" type="email" placeholder="E-mail">
                        <span class="cd-error-message">Email không được bỏ trống!
              </span>
                    </p>
                    <p class="fieldset">
                        <label class="image-replace cd-password" for="signin-password">Password
              </label>
                        <input class="full-width has-padding has-border" id="signin-password" type="text" placeholder="Password">
                        <a href="#0" class="hide-password">Hide
              </a>
                        <span class="cd-error-message">Password không được bỏ trống!
              </span>
                    </p>
                    <p class="fieldset">
                        <input type="checkbox" id="remember-me" checked>
                        <label for="remember-me">Nhớ đăng nhập
              </label>
                    </p>
                    <p class="fieldset">
                        <input class="full-width" type="submit" value="Đăng nhập">
                    </p>
                </form>
                <p class="cd-form-bottom-message">
                    <a href="#0">Quên mật khẩu?
            </a>
                </p>
                <!-- <a href="#0" class="cd-close-form">Close</a> -->
            </div>
            <!-- cd-login -->
            <div id="cd-signup">
                <!-- sign up form -->
                <form class="cd-form">
                    <p class="fieldset">
                        <label class="image-replace cd-username" for="signup-username">Username
              </label>
                        <input class="full-width has-padding has-border" id="signup-username" type="text" placeholder="Username">
                        <span class="cd-error-message">Username không được bỏ trống!
              </span>
                    </p>
                    <p class="fieldset">
                        <label class="image-replace cd-email" for="signup-email">Email
              </label>
                        <input class="full-width has-padding has-border" id="signup-email" type="email" placeholder="E-mail">
                        <span class="cd-error-message">Email không được bỏ trống!
              </span>
                    </p>
                    <p class="fieldset">
                        <label class="image-replace cd-password" for="signup-password">Password
              </label>
                        <input class="full-width has-padding has-border" id="signup-password" type="text" placeholder="Password">
                        <a href="#0" class="hide-password">Hide
              </a>
                        <span class="cd-error-message">Password không được bỏ trống!
              </span>
                    </p>
                    <p class="fieldset">
                        <input type="checkbox" id="accept-terms">
                        <label for="accept-terms">Tôi đồng ý với 
                <a href="#0">Điều khoản & Chính sách
                </a>
              </label>
                    </p>
                    <p class="fieldset">
                        <input class="full-width has-padding" type="submit" value="Tạo tài khoản">
                    </p>
                </form>
                <!-- <a href="#0" class="cd-close-form">Close</a> -->
            </div>
            <!-- cd-signup -->
            <div id="cd-reset-password">
                <!-- reset password form -->
                <p class="cd-form-message">Bạn quên mật khẩu? Vui lòng nhập email của bạn và chúng tôi sẽ gửi cho bạn một email có đường dẫn để thay đổi mật khẩu.
                </p>
                <form class="cd-form">
                    <p class="fieldset">
                        <label class="image-replace cd-email" for="reset-email">Email
              </label>
                        <input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
                        <span class="cd-error-message">Email không được bỏ trống!
              </span>
                    </p>
                    <p class="fieldset">
                        <input class="full-width has-padding" type="submit" value="Reset password">
                    </p>
                </form>
                <p class="cd-form-bottom-message">
                    <a href="#0">Quay lại đăng nhập
            </a>
                </p>
            </div>
            <!-- cd-reset-password -->
            <a href="#0" class="cd-close-form">Close
        </a>
        </div>
        <!-- cd-user-modal-container -->
    </div>
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
                        <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="About.html" style="padding: 10px 20px;">About</a>
                        </li>
                        <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Contact.html" style="padding: 10px 20px;">Contact</a>
                        </li>
                    </ul>
                </div>
                <!--SCROLLLL -->

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

                <div class="u-nav-container-collapse">
                    <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                        <div class="u-inner-container-layout u-sidenav-overflow">
                            <div class="u-menu-close"></div>
                            <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.html">Home</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="#">Booking</a>

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
    <section class="u-clearfix u-image u-section-1" id="carousel_3112">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div class="u-container-style u-expand-resize u-layout-cell u-left-cell u-size-32 u-layout-cell-1" src="">
                            <div class="u-container-layout u-valign-bottom">
                                <img class="u-image u-image-contain u-image-1" src="front/img/6158b984e0fd04ce18f390ab2b6eab25.png" data-animation-name="customAnimationIn" data-animation-duration="2000" alt="">
                            </div>
                        </div>
                        <div class="u-align-left u-container-style u-expand-resize u-layout-cell u-right-cell u-size-28 u-layout-cell-2">
                            <div class="u-container-layout u-valign-middle u-container-layout-2">
                                <h1 class="u-text u-text-body-alt-color u-text-1">We're Always <br>Ready To Help
                                </h1>
                                <p class="u-text u-text-body-alt-color u-text-2">The Clinic provides diagnosis and management of pain in the head, face, mouth and teeth</p>
                                <button id="btn-open" class="u-border-none u-btn u-btn-round u-button-style u-palette-3-base u-radius-50 u-text-body-alt-color u-btn-1">Book An Appointment</button>
                            </div>
                             <!--MODAL-->
                             <div id="modal-container" class="">
                                <div id="modal" class="modal-demo">
                                    <div id="closee">
                                        <button id="btn-closee"><i class="fa-solid fa-xmark"></i></button>
                                    </div>
                                    <div class="modal-headerr">
                                        <p>Đặt lịch khám nhanh</p>
                                        <span>Vui lòng để lại thông tin, chúng tôi sẽ liên hệ với bạn để tư vấn.</span>
                                    </div>
                                    <div class="modal-bodyy">
                                        <form action="Home.html" method="post">
                                            <div class="mb-3">
                                                <label for="book-name" class="form-label">Name<span style="color:green;">*</span></label>
                                                <input type="text" class="book-name" id="book-name" placeholder="Ex:Nguyen Van A">
                                            </div>
                                            <div class="mb-3">
                                                <label for="phonenumber" class="form-label">Phone Number<span style="color:green;">*</span></label>
                                                <input type="text" class="phonenumber" id="phonenumber" placeholder="Ex:0912345678">
                                            </div>
                                            <div class="mb-3">
                                                <label for="email_address" class="form-label">Email Address<span style="color:green;">*</span></label>
                                                <input type="email" class="email_address" id="email_address" placeholder="Ex:abc@gmail.com">
                                            </div>
                                            <div class="mb-3">
                                                <label for="text-area" class="form-label">Examination needs</label>
                                                <textarea class="form-control" id="text-area" rows="3" placeholder="Nhập nhu cầu khám chữa bệnh của bạn, ví dụ: Khu vực cần tìm phòng khám. Chi phí có thể đáp ứng;...."></textarea>
                                            </div>
                                            <button type="button" class="btn btn-secondary"><i class="fa-solid fa-paper-plane"></i> Send Require</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--END_MODAL-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-align-left u-clearfix u-palette-4-base u-section-2" id="carousel_e168">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h5 class="u-text u-text-default u-text-1"> Why Choose Us</h5>
            <h2 class="u-text u-text-2"> We Have Patients Being Monitored by Doctors!</h2>
            <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div class="u-container-style u-layout-cell u-size-28 u-layout-cell-1">
                            <div class="u-container-layout u-valign-top u-container-layout-1">
                                <h3 class="u-text u-text-default u-text-3"> How it work?</h3>
                                <div class="u-image u-image-circle u-image-1" alt="" data-image-width="720" data-image-height="1080" data-animation-name="customAnimationIn" data-animation-duration="2000"></div>
                            </div>
                        </div>
                        <div class="u-container-style u-layout-cell u-size-32 u-layout-cell-2">
                            <div class="u-container-layout u-valign-middle u-container-layout-2">
                                <ul class="u-custom-font u-custom-list u-heading-font u-spacing-14 u-text u-text-default u-text-4">
                                    <li>
                                        <div class="u-list-icon u-text-palette-3-base u-list-icon-1">
                                            <svg class="u-svg-content" viewBox="0 0 512 512" id="svg-4065"><path d="m506.88 244.288-137.856-128c-2.944-2.752-6.848-4.288-10.88-4.288h-342.144c-8.832 0-16 7.168-16 16v256c0 8.832 7.168 16 16 16h342.144c4.032 0 7.936-1.536 10.88-4.288l137.856-128c3.264-3.008 5.12-7.264 5.12-11.712s-1.856-8.704-5.12-11.712z" fill="currentColor"></path></svg>
                                        </div> Fitness Guidance to Patient
                                    </li>
                                    <li>
                                        <div class="u-list-icon u-text-palette-3-base u-list-icon-2">
                                            <svg class="u-svg-content" viewBox="0 0 512 512" id="svg-4065"><path d="m506.88 244.288-137.856-128c-2.944-2.752-6.848-4.288-10.88-4.288h-342.144c-8.832 0-16 7.168-16 16v256c0 8.832 7.168 16 16 16h342.144c4.032 0 7.936-1.536 10.88-4.288l137.856-128c3.264-3.008 5.12-7.264 5.12-11.712s-1.856-8.704-5.12-11.712z" fill="currentColor"></path></svg>
                                        </div>Building a healthy environment.
                                    </li>
                                    <li>
                                        <div class="u-list-icon u-text-palette-3-base u-list-icon-3">
                                            <svg class="u-svg-content" viewBox="0 0 512 512" id="svg-4065"><path d="m506.88 244.288-137.856-128c-2.944-2.752-6.848-4.288-10.88-4.288h-342.144c-8.832 0-16 7.168-16 16v256c0 8.832 7.168 16 16 16h342.144c4.032 0 7.936-1.536 10.88-4.288l137.856-128c3.264-3.008 5.12-7.264 5.12-11.712s-1.856-8.704-5.12-11.712z" fill="currentColor"></path></svg>
                                        </div>Diabetes &amp; blood pressor check up.
                                    </li>
                                    <li>
                                        <div class="u-list-icon u-text-palette-3-base u-list-icon-4">
                                            <svg class="u-svg-content" viewBox="0 0 512 512" id="svg-4065"><path d="m506.88 244.288-137.856-128c-2.944-2.752-6.848-4.288-10.88-4.288h-342.144c-8.832 0-16 7.168-16 16v256c0 8.832 7.168 16 16 16h342.144c4.032 0 7.936-1.536 10.88-4.288l137.856-128c3.264-3.008 5.12-7.264 5.12-11.712s-1.856-8.704-5.12-11.712z" fill="currentColor"></path></svg>
                                        </div>Handle patient body in MRI.
                                    </li>
                                    <li>
                                        <div class="u-list-icon u-text-palette-3-base u-list-icon-5">
                                            <svg class="u-svg-content" viewBox="0 0 512 512" id="svg-4065"><path d="m506.88 244.288-137.856-128c-2.944-2.752-6.848-4.288-10.88-4.288h-342.144c-8.832 0-16 7.168-16 16v256c0 8.832 7.168 16 16 16h342.144c4.032 0 7.936-1.536 10.88-4.288l137.856-128c3.264-3.008 5.12-7.264 5.12-11.712s-1.856-8.704-5.12-11.712z" fill="currentColor"></path></svg>
                                        </div>Excellence in Healthcare every.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-clearfix u-section-3" id="carousel_aa3d">
        <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-sheet-1">
            <h5 class="u-text u-text-default u-text-1"> Departments</h5>
            <h2 class="u-text u-text-default u-text-palette-4-base u-text-2"> Dentists are Specialists</h2>
            <p class="u-heading-font u-text u-text-default u-text-3"> We have gathered only qualified specialists with extensive rience you for free you with any problem!</p>
            <div class="u-expanded-width u-list u-list-1">
                <div class="u-repeater u-repeater-1">
                    <div class="u-align-left u-container-style u-grey-5 u-list-item u-repeater-item u-list-item-1">
                        <div class="u-container-layout u-similar-container u-container-layout-1"><span class="u-file-icon u-icon u-icon-circle u-palette-3-base u-icon-1" data-animation-name="customAnimationIn" data-animation-duration="2000"><img src="front/img/1828743.png" alt=""></span>
                            <h5 class="u-text u-text-4"> Large network of clinics</h5>
                            <p class="u-heading-font u-text u-text-5">Sample text. Click to select the Text Element.</p>
                        </div>
                    </div>
                    <div class="u-align-left u-container-style u-grey-5 u-list-item u-repeater-item u-list-item-2">
                        <div class="u-container-layout u-similar-container u-container-layout-2"><span class="u-file-icon u-icon u-icon-circle u-palette-3-base u-icon-2" data-animation-name="customAnimationIn" data-animation-duration="2000"><img src="front/img/1828743.png" alt=""></span>
                            <h5 class="u-text u-text-6"> Professional dentists</h5>
                            <p class="u-heading-font u-text u-text-7">Sample text. Click to select the Text Element.</p>
                        </div>
                    </div>
                    <div class="u-align-left u-container-style u-grey-5 u-list-item u-repeater-item u-list-item-3">
                        <div class="u-container-layout u-similar-container u-container-layout-3"><span class="u-file-icon u-icon u-icon-circle u-palette-3-base u-icon-3" data-animation-name="customAnimationIn" data-animation-duration="2000"><img src="front/img/1828743.png" alt=""></span>
                            <h5 class="u-text u-text-8"> Durable materials</h5>
                            <p class="u-heading-font u-text u-text-9">Sample text. Click to select the Text Element.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-clearfix u-section-4" id="carousel_96ea">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h4 class="u-text u-text-default u-text-1"> Faq</h4>
            <h2 class="u-text u-text-default u-text-palette-4-base u-text-2"> Frequently Asked Questions</h2>
            <div class="u-accordion u-faq u-accordion-1">
                <div class="u-accordion-item">
                    <a class="active u-accordion-link u-button-style u-custom-font u-heading-font u-text-active-palette-4-base u-text-body-color u-accordion-link-1" id="link-" aria-controls="" aria-selected="true">
                        <span class="u-accordion-link-text"> 01. You need a medical services?</span>
                    </a>
                    <div class="u-accordion-active u-accordion-pane u-container-style u-accordion-pane-1" aria-labelledby="link-">
                        <div class="u-container-layout u-container-layout-1">
                            <div class="u-clearfix u-rich-text u-text">
                                <p>Answer. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id suscipit ex. Suspendisse rhoncus laoreet purus quis elementum. Phasellus sed efficitur dolor, et ultricies sapien. Quisque fringilla sit amet
                                    dolor commodo efficitur. Aliquam et sem odio. In ullamcorper nisi nunc, et molestie ipsum iaculis sit amet.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="u-accordion-item">
                    <a class="u-accordion-link u-button-style u-custom-font u-heading-font u-text-active-palette-4-base u-text-body-color u-accordion-link-2" id="link-" aria-controls="" aria-selected="false">
                        <span class="u-accordion-link-text"> 02. Medical services a scam?</span>
                    </a>
                    <div class="u-accordion-pane u-container-style u-accordion-pane-2" id="" aria-labelledby="link-">
                        <div class="u-container-layout u-container-layout-2">
                            <div class="u-clearfix u-rich-text u-text">
                                <p>Answer. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id suscipit ex. Suspendisse rhoncus laoreet purus quis elementum. Phasellus sed efficitur dolor, et ultricies sapien. Quisque fringilla sit amet
                                    dolor commodo efficitur. Aliquam et sem odio. In ullamcorper nisi nunc, et molestie ipsum iaculis sit amet.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="u-accordion-item">
                    <a class="u-accordion-link u-button-style u-custom-font u-heading-font u-text-active-palette-4-base u-text-body-color u-accordion-link-3" id="link-" aria-controls="" aria-selected="false">
                        <span class="u-accordion-link-text"> 03. Out of your medical services?</span>
                    </a>
                    <div class="u-accordion-pane u-container-style u-accordion-pane-3" aria-labelledby="link-">
                        <div class="u-container-layout u-container-layout-3">
                            <div class="u-clearfix u-rich-text u-text">
                                <p>Answer. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id suscipit ex. Suspendisse rhoncus laoreet purus quis elementum. Phasellus sed efficitur dolor, et ultricies sapien. Quisque fringilla sit amet
                                    dolor commodo efficitur. Aliquam et sem odio. In ullamcorper nisi nunc, et molestie ipsum iaculis sit amet.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img class="u-image u-image-default u-image-1" src="front/img/pexels-karolina-grabowska-4386504.jpg" alt="" data-image-width="1280" data-image-height="853" data-animation-name="customAnimationIn" data-animation-duration="2000">
        </div>
    </section>
    <section class="u-clearfix u-section-5" id="carousel_b39d">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-expanded-width u-list u-list-1">
                <div class="u-repeater u-repeater-1">
                    <div class="u-container-style u-list-item u-repeater-item">
                        <div class="u-container-layout u-similar-container u-container-layout-1">
                            <img class="u-expanded-width u-image u-image-default u-image-1" src="front/img/pexels-chokniti-khongchum-2280571.jpg" alt="" data-image-width="1619" data-image-height="1080"><span class="u-file-icon u-icon u-icon-rounded u-radius-20 u-text-palette-1-base u-white u-icon-1"
                                data-animation-name="customAnimationIn" data-animation-duration="2000"><img src="front/img/883407.png" alt=""></span>
                            <div class="u-container-style u-expanded-width u-group u-white u-group-1">
                                <div class="u-container-layout u-valign-bottom u-container-layout-2">
                                    <h5 class="u-custom-font u-font-montserrat u-text u-text-1"> Laboratory Analysis</h5>
                                    <p class="u-text u-text-2">Sample text. Click to select the Text Element.</p>
                                    <a href="https://nicepage.cloud" class="u-btn u-btn-round u-button-style u-palette-3-base u-radius-50 u-text-body-alt-color u-btn-1" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="u-container-style u-list-item u-repeater-item">
                        <div class="u-container-layout u-similar-container u-container-layout-3">
                            <img class="u-expanded-width u-image u-image-default u-image-2" src="front/img/2378359_medium2000.jpg" alt="" data-image-width="150" data-image-height="100"><span class="u-file-icon u-icon u-icon-rounded u-radius-20 u-text-palette-1-base u-white u-icon-2"
                                data-animation-name="customAnimationIn" data-animation-duration="2000"><img src="front/img/31792.png" alt=""></span>
                            <div class="u-container-style u-expanded-width u-group u-white u-group-2">
                                <div class="u-container-layout u-valign-bottom u-container-layout-4">
                                    <h5 class="u-custom-font u-font-montserrat u-text u-text-default u-text-3"> Heart of Surgery</h5>
                                    <p class="u-text u-text-4">Sample text. Click to select the Text Element.</p>
                                    <a href="https://nicepage.com/website-design" class="u-btn u-btn-round u-button-style u-palette-3-base u-radius-50 u-text-body-alt-color u-btn-2" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""> read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="u-container-style u-list-item u-repeater-item">
                        <div class="u-container-layout u-similar-container u-container-layout-5">
                            <img class="u-expanded-width u-image u-image-default u-image-3" src="front/img/1773337_medium2000.jpg" alt="" data-image-width="1348" data-image-height="1000"><span class="u-file-icon u-icon u-icon-rounded u-radius-20 u-text-palette-1-base u-white u-icon-3"
                                data-animation-name="customAnimationIn" data-animation-duration="2000"><img src="front/img/2966334.png" alt=""></span>
                            <div class="u-container-style u-expanded-width u-group u-white u-group-3">
                                <div class="u-container-layout u-valign-bottom u-container-layout-6">
                                    <h5 class="u-custom-font u-font-montserrat u-text u-text-default u-text-5"> Pediatric Clinic</h5>
                                    <p class="u-text u-text-6">Sample text. Click to select the Text Element.</p>
                                    <a href="https://nicepage.best" class="u-btn u-btn-round u-button-style u-palette-3-base u-radius-50 u-text-body-alt-color u-btn-3" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""> read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="u-container-style u-list-item u-repeater-item">
                        <div class="u-container-layout u-similar-container u-container-layout-7">
                            <img class="u-expanded-width u-image u-image-default u-image-4" src="front/img/2062048_medium2000.jpg" alt="" data-image-width="150" data-image-height="90"><span class="u-file-icon u-icon u-icon-rounded u-radius-20 u-text-palette-1-base u-white u-icon-4"
                                data-animation-name="customAnimationIn" data-animation-duration="2000"><img src="front/img/1719695.png" alt=""></span>
                            <div class="u-container-style u-expanded-width u-group u-white u-group-4">
                                <div class="u-container-layout u-valign-bottom u-container-layout-8">
                                    <h5 class="u-custom-font u-font-montserrat u-text u-text-default u-text-7"> Neurology Clinic</h5>
                                    <p class="u-text u-text-8">Sample text. Click to select the Text Element.</p>
                                    <a href="https://nicepage.one" class="u-btn u-btn-round u-button-style u-palette-3-base u-radius-50 u-text-body-alt-color u-btn-4" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""> read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="u-container-style u-list-item u-repeater-item">
                        <div class="u-container-layout u-similar-container u-container-layout-9">
                            <img class="u-expanded-width u-image u-image-default u-image-5" src="front/img/2302047_medium2000.jpg" alt="" data-image-width="150" data-image-height="102"><span class="u-file-icon u-icon u-icon-rounded u-radius-20 u-text-palette-1-base u-white u-icon-5"
                                data-animation-name="customAnimationIn" data-animation-duration="2000"><img src="front/img/3700547.png" alt=""></span>
                            <div class="u-container-style u-expanded-width u-group u-white u-group-5">
                                <div class="u-container-layout u-valign-bottom u-container-layout-10">
                                    <h5 class="u-custom-font u-font-montserrat u-text u-text-default u-text-9"> Pathology Clinic</h5>
                                    <p class="u-text u-text-10">Sample text. Click to select the Text Element.</p>
                                    <a href="https://nicepage.review" class="u-btn u-btn-round u-button-style u-palette-3-base u-radius-50 u-text-body-alt-color u-btn-5" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""> read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="u-container-style u-list-item u-repeater-item">
                        <div class="u-container-layout u-similar-container u-container-layout-11">
                            <img class="u-expanded-width u-image u-image-default u-image-6" src="front/img/931111_medium2000.jpg" alt="" data-image-width="150" data-image-height="85"><span class="u-file-icon u-icon u-icon-rounded u-radius-20 u-text-palette-1-base u-white u-icon-6"
                                data-animation-name="customAnimationIn" data-animation-duration="2000"><img src="front/img/991921.png" alt=""></span>
                            <div class="u-container-style u-expanded-width u-group u-white u-group-6">
                                <div class="u-container-layout u-valign-bottom u-container-layout-12">
                                    <h5 class="u-custom-font u-font-montserrat u-text u-text-default u-text-11"> Tablet Paralysis</h5>
                                    <p class="u-text u-text-12">Sample text. Click to select the Text Element.</p>
                                    <a href="https://nicepage.com/static-site-generator" class="u-btn u-btn-round u-button-style u-palette-3-base u-radius-50 u-text-body-alt-color u-btn-6" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""> read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-align-center u-clearfix u-palette-4-base u-section-6" id="carousel_7c33">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h5 class="u-text u-text-default u-text-1"> Working Process</h5>
            <h2 class="u-text u-text-default u-text-2"> How We Work?</h2>
            <p class="u-text u-text-3"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <div class="u-expanded-width u-list u-list-1">
                <div class="u-repeater u-repeater-1">
                    <div class="u-align-center u-container-style u-list-item u-repeater-item">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
                            <div class="u-image u-image-circle u-image-1" alt="" data-image-width="720" data-image-height="1080" data-animation-name="customAnimationIn" data-animation-duration="2000"></div>
                            <h5 class="u-text u-text-default u-text-4"> Appointment</h5>
                            <p class="u-text u-text-default u-text-5">Sample text. Click to select the Text Element.</p>
                        </div>
                    </div>
                    <div class="u-align-center u-container-style u-list-item u-repeater-item">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2">
                            <div class="u-image u-image-circle u-image-2" alt="" data-image-width="1667" data-image-height="1000" data-animation-name="customAnimationIn" data-animation-duration="2000"></div>
                            <h5 class="u-text u-text-default u-text-6"> Expert Doctor</h5>
                            <p class="u-text u-text-default u-text-7">Sample text. Click to select the Text Element.</p>
                        </div>
                    </div>
                    <div class="u-align-center u-container-style u-list-item u-repeater-item">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
                            <div class="u-image u-image-circle u-image-3" alt="" data-image-width="1500" data-image-height="1000" data-animation-name="customAnimationIn" data-animation-duration="2000"></div>
                            <h5 class="u-text u-text-default u-text-8"> Consultation</h5>
                            <p class="u-text u-text-default u-text-9">Sample text. Click to select the Text Element.</p>
                        </div>
                    </div>
                    <div class="u-align-center u-container-style u-list-item u-repeater-item">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-4">
                            <div class="u-image u-image-circle u-image-4" alt="" data-image-width="1348" data-image-height="1000" data-animation-name="customAnimationIn" data-animation-duration="2000"></div>
                            <h5 class="u-text u-text-default u-text-10"> Enjoy Life</h5>
                            <p class="u-text u-text-default u-text-11">Sample text. Click to select the Text Element.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-clearfix u-section-7" id="carousel_f0f9">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div class="u-align-center u-container-style u-layout-cell u-shape-rectangle u-size-15 u-layout-cell-1">
                            <div class="u-container-layout u-valign-middle u-container-layout-1"><span class="u-icon u-icon-circle u-palette-3-base u-text-black u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 60 60" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-279e"></use></svg><svg class="u-svg-content" viewBox="0 0 60 60" x="0px" y="0px" id="svg-279e" style="enable-background:new 0 0 60 60;"><g><path d="M57,4h-7V1c0-0.553-0.447-1-1-1h-7c-0.553,0-1,0.447-1,1v3H19V1c0-0.553-0.447-1-1-1h-7c-0.553,0-1,0.447-1,1v3H3
		C2.447,4,2,4.447,2,5v11v43c0,0.553,0.447,1,1,1h54c0.553,0,1-0.447,1-1V16V5C58,4.447,57.553,4,57,4z M43,2h5v3v3h-5V5V2z M12,2h5
		v3v3h-5V5V2z M4,6h6v3c0,0.553,0.447,1,1,1h7c0.553,0,1-0.447,1-1V6h22v3c0,0.553,0.447,1,1,1h7c0.553,0,1-0.447,1-1V6h6v9H4V6z
		 M4,58V17h52v41H4z"></path><path d="M38,23h-7h-2h-7h-2h-9v9v2v7v2v9h9h2h7h2h7h2h9v-9v-2v-7v-2v-9h-9H38z M31,25h7v7h-7V25z M38,41h-7v-7h7V41z M22,34h7v7h-7
		V34z M22,25h7v7h-7V25z M13,25h7v7h-7V25z M13,34h7v7h-7V34z M20,50h-7v-7h7V50z M29,50h-7v-7h7V50z M38,50h-7v-7h7V50z M47,50h-7
		v-7h7V50z M47,41h-7v-7h7V41z M47,25v7h-7v-7H47z"></path>
</g></svg></span>
                                <h4 class="u-text u-text-1"> Request Appointment</h4>
                                <a href="https://nicepage.cloud" class="u-active-none u-border-2 u-border-active-black u-border-black u-border-hover-black u-btn u-button-style u-hover-none u-none u-text-black u-text-hover-black u-btn-1" data-animation-name="" data-animation-duration="0"
                                    data-animation-delay="0" data-animation-direction="">booking now</a>
                            </div>
                        </div>
                        <div class="u-container-style u-image u-layout-cell u-size-15 u-image-1" data-image-width="150" data-image-height="100">
                            <div class="u-container-layout u-container-layout-2"></div>
                        </div>
                        <div class="u-align-center u-container-style u-layout-cell u-shape-rectangle u-size-15 u-layout-cell-3">
                            <div class="u-container-layout u-valign-middle u-container-layout-3"><span class="u-icon u-icon-circle u-palette-3-base u-text-black u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 52.966 52.966" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-48d8"></use></svg><svg class="u-svg-content" viewBox="0 0 52.966 52.966" x="0px" y="0px" id="svg-48d8" style="enable-background:new 0 0 52.966 52.966;"><path d="M51.704,51.273L36.845,35.82c3.79-3.801,6.138-9.041,6.138-14.82c0-11.58-9.42-21-21-21s-21,9.42-21,21s9.42,21,21,21
	c5.083,0,9.748-1.817,13.384-4.832l14.895,15.491c0.196,0.205,0.458,0.307,0.721,0.307c0.25,0,0.499-0.093,0.693-0.279
	C52.074,52.304,52.086,51.671,51.704,51.273z M21.983,40c-10.477,0-19-8.523-19-19s8.523-19,19-19s19,8.523,19,19
	S32.459,40,21.983,40z"></path></svg></span>
                                <h4 class="u-text u-text-2"> Find The Best Doctors</h4>
                                <a href="https://nicepage.cloud" class="u-active-none u-border-2 u-border-active-black u-border-black u-border-hover-black u-btn u-button-style u-hover-none u-none u-text-black u-text-hover-black u-btn-2">booking now</a>
                            </div>
                        </div>
                        <div class="u-container-style u-image u-layout-cell u-size-15 u-image-2" data-image-width="150" data-image-height="111">
                            <div class="u-container-layout u-container-layout-4"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-align-center u-clearfix u-section-8" id="carousel_f41d">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div class="u-align-left u-container-style u-layout-cell u-size-30 u-layout-cell-1">
                            <div class="u-container-layout u-container-layout-1">
                                <div class="u-image u-image-circle u-image-1" alt="" data-image-width="984" data-image-height="648" data-animation-name="customAnimationIn" data-animation-duration="2000"></div>
                                <h2 class="u-text u-text-palette-4-base u-text-1"> A full-term pregnancy has three trimesters and lasts around 40 weeks</h2>
                                <p class="u-text u-text-2">Etiam erat velit scelerisque in dictum non consectetur. Nisl purus in mollis nunc sed id semper. Cras fermentum odio eu feugiat pretium nibh ipsum.</p>
                                <a href="https://nicepage.com/k/competition-website-templates" class="u-btn u-btn-round u-button-style u-palette-3-base u-radius-50 u-text-body-alt-color u-btn-1" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">read more</a>
                                <p class="u-text u-text-3">front/img from <a href="https://www.freepik.com/photos/people" class="u-active-none u-border-1 u-border-grey-75 u-btn u-button-link u-button-style u-hover-none u-none u-text-body-color u-btn-2" target="_blank">Freepik</a>
                                </p>
                            </div>
                        </div>
                        <div class="u-container-style u-layout-cell u-shape-rectangle u-size-30 u-layout-cell-2">
                            <div class="u-container-layout u-valign-top u-container-layout-2">
                                <div class="u-accordion u-expanded-width u-spacing-2 u-accordion-1">
                                    <div class="u-accordion-item u-accordion-item-1">
                                        <a class="active u-accordion-link u-button-style u-text-palette-4-base u-accordion-link-1" id="link-accordion-7c0e" aria-controls="accordion-7c0e" aria-selected="true">
                                            <span class="u-accordion-link-text"> When do pregnancy cravings start?</span><span class="u-accordion-link-icon u-active-palette-4-light-1 u-hover-palette-4-light-1 u-icon u-icon-circle u-palette-4-base u-text-active-white u-text-hover-white u-text-white u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 426.66667 426.66667" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-347e"></use></svg><svg class="u-svg-content" viewBox="0 0 426.66667 426.66667" id="svg-347e"><path d="m405.332031 192h-170.664062v-170.667969c0-11.773437-9.558594-21.332031-21.335938-21.332031-11.773437 0-21.332031 9.558594-21.332031 21.332031v170.667969h-170.667969c-11.773437 0-21.332031 9.558594-21.332031 21.332031 0 11.777344 9.558594 21.335938 21.332031 21.335938h170.667969v170.664062c0 11.777344 9.558594 21.335938 21.332031 21.335938 11.777344 0 21.335938-9.558594 21.335938-21.335938v-170.664062h170.664062c11.777344 0 21.335938-9.558594 21.335938-21.335938 0-11.773437-9.558594-21.332031-21.335938-21.332031zm0 0"></path></svg></span>
                                        </a>
                                        <div class="u-accordion-active u-accordion-pane u-align-left u-container-style u-palette-4-light-2 u-accordion-pane-1" id="accordion-7c0e" aria-labelledby="link-accordion-7c0e">
                                            <div class="u-container-layout u-valign-top u-container-layout-3">
                                                <p class="u-text u-text-4">Interdum velit euismod in pellentesque massa placerat duis. Tristique et egestas quis ipsum suspendisse ultrices gravida dictum fusce. Nibh nisl condimentum.</p>
                                                <ul class="u-custom-list u-text u-text-5">
                                                    <li>
                                                        <div class="u-list-icon">
                                                            <div xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content">–</div>
                                                        </div>Mattis nunc sed blandit libero volutpat.
                                                    </li>
                                                    <li>
                                                        <div class="u-list-icon">
                                                            <div xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content">–</div>
                                                        </div>Tortor at risus viverra adipiscing at in tellus.
                                                    </li>
                                                    <li>
                                                        <div class="u-list-icon">
                                                            <div xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content">–</div>
                                                        </div>Purus ut faucibus pulvinar elementum.
                                                    </li>
                                                    <li>
                                                        <div class="u-list-icon">
                                                            <div xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content">–</div>
                                                        </div>Blandit turpis cursus in hac habitasse.
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="u-accordion-item u-accordion-item-2">
                                        <a class="u-accordion-link u-button-style u-text-palette-4-base u-accordion-link-2" id="link-accordion-05cb" aria-controls="accordion-05cb" aria-selected="false">
                                            <span class="u-accordion-link-text"> How should I sleep in pregnancy?</span><span class="u-accordion-link-icon u-active-palette-4-light-1 u-hover-palette-4-light-1 u-icon u-icon-circle u-palette-4-base u-text-active-white u-text-hover-white u-text-white u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 426.66667 426.66667" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-ae03"></use></svg><svg class="u-svg-content" viewBox="0 0 426.66667 426.66667" id="svg-ae03"><path d="m405.332031 192h-170.664062v-170.667969c0-11.773437-9.558594-21.332031-21.335938-21.332031-11.773437 0-21.332031 9.558594-21.332031 21.332031v170.667969h-170.667969c-11.773437 0-21.332031 9.558594-21.332031 21.332031 0 11.777344 9.558594 21.335938 21.332031 21.335938h170.667969v170.664062c0 11.777344 9.558594 21.335938 21.332031 21.335938 11.777344 0 21.335938-9.558594 21.335938-21.335938v-170.664062h170.664062c11.777344 0 21.335938-9.558594 21.335938-21.335938 0-11.773437-9.558594-21.332031-21.335938-21.332031zm0 0"></path></svg></span>
                                        </a>
                                        <div class="u-accordion-pane u-container-style u-palette-4-light-2 u-accordion-pane-2" id="accordion-05cb" aria-labelledby="link-accordion-05cb">
                                            <div class="u-container-layout u-valign-top u-container-layout-4">
                                                <ul class="u-custom-list u-text u-text-6">
                                                    <li>
                                                        <div class="u-list-icon">
                                                            <div xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content">–</div>
                                                        </div>Interdum velit euismod in pellentesque massa.
                                                    </li>
                                                    <li>
                                                        <div class="u-list-icon">
                                                            <div xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content">–</div>
                                                        </div>Tristique et egestas quis ipsum suspendisse ultrices gravidae.
                                                    </li>
                                                    <li>
                                                        <div class="u-list-icon">
                                                            <div xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content">–</div>
                                                        </div>Nibh nisl condimentum id venenatis a condimentum.
                                                    </li>
                                                    <li>
                                                        <div class="u-list-icon">
                                                            <div xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content">–</div>
                                                        </div>Diam volutpat commodo sed egestas egestas fringilla.
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="u-accordion-item u-accordion-item-3">
                                        <a class="u-accordion-link u-button-style u-text-palette-4-base u-accordion-link-3" id="link-accordion-a6bb" aria-controls="accordion-a6bb" aria-selected="false">
                                            <span class="u-accordion-link-text"> What is a birth plan?</span><span class="u-accordion-link-icon u-active-palette-4-light-1 u-hover-palette-4-light-1 u-icon u-icon-circle u-palette-4-base u-text-active-white u-text-hover-white u-text-white u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 426.66667 426.66667" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-a4a8"></use></svg><svg class="u-svg-content" viewBox="0 0 426.66667 426.66667" id="svg-a4a8"><path d="m405.332031 192h-170.664062v-170.667969c0-11.773437-9.558594-21.332031-21.335938-21.332031-11.773437 0-21.332031 9.558594-21.332031 21.332031v170.667969h-170.667969c-11.773437 0-21.332031 9.558594-21.332031 21.332031 0 11.777344 9.558594 21.335938 21.332031 21.335938h170.667969v170.664062c0 11.777344 9.558594 21.335938 21.332031 21.335938 11.777344 0 21.335938-9.558594 21.335938-21.335938v-170.664062h170.664062c11.777344 0 21.335938-9.558594 21.335938-21.335938 0-11.773437-9.558594-21.332031-21.335938-21.332031zm0 0"></path></svg></span>
                                        </a>
                                        <div class="u-accordion-pane u-container-style u-palette-4-light-2 u-accordion-pane-3" id="accordion-a6bb" aria-labelledby="link-accordion-a6bb">
                                            <div class="u-container-layout u-valign-top u-container-layout-5">
                                                <ul class="u-custom-list u-text u-text-7">
                                                    <li>
                                                        <div class="u-list-icon">
                                                            <div xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content">–</div>
                                                        </div>Mattis nunc sed blandit libero volutpat.
                                                    </li>
                                                    <li>
                                                        <div class="u-list-icon">
                                                            <div xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content">–</div>
                                                        </div>Tortor at risus viverra adipiscing at in tellus.
                                                    </li>
                                                    <li>
                                                        <div class="u-list-icon">
                                                            <div xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content">–</div>
                                                        </div>Purus ut faucibus pulvinar elementum.
                                                    </li>
                                                    <li>
                                                        <div class="u-list-icon">
                                                            <div xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content">–</div>
                                                        </div>Blandit turpis cursus in hac habitasse.e.
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="u-accordion-item u-accordion-item-4">
                                        <a class="u-accordion-link u-button-style u-text-palette-4-base u-accordion-link-4" id="link-accordion-a6bb" aria-controls="accordion-a6bb" aria-selected="false">
                                            <span class="u-accordion-link-text"> Should I have the flu vaccine?</span><span class="u-accordion-link-icon u-active-palette-4-light-1 u-hover-palette-4-light-1 u-icon u-icon-circle u-palette-4-base u-text-active-white u-text-hover-white u-text-white u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 426.66667 426.66667" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-f384"></use></svg><svg class="u-svg-content" viewBox="0 0 426.66667 426.66667" id="svg-f384"><path d="m405.332031 192h-170.664062v-170.667969c0-11.773437-9.558594-21.332031-21.335938-21.332031-11.773437 0-21.332031 9.558594-21.332031 21.332031v170.667969h-170.667969c-11.773437 0-21.332031 9.558594-21.332031 21.332031 0 11.777344 9.558594 21.335938 21.332031 21.335938h170.667969v170.664062c0 11.777344 9.558594 21.335938 21.332031 21.335938 11.777344 0 21.335938-9.558594 21.335938-21.335938v-170.664062h170.664062c11.777344 0 21.335938-9.558594 21.335938-21.335938 0-11.773437-9.558594-21.332031-21.335938-21.332031zm0 0"></path></svg></span>
                                        </a>
                                        <div class="u-accordion-pane u-container-style u-palette-4-light-2 u-accordion-pane-4" id="accordion-a6bb" aria-labelledby="link-accordion-a6bb">
                                            <div class="u-container-layout u-valign-top u-container-layout-6">
                                                <ul class="u-custom-list u-text u-text-8">
                                                    <li>
                                                        <div class="u-list-icon">
                                                            <div xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content">–</div>
                                                        </div>Mattis nunc sed blandit libero volutpat.
                                                    </li>
                                                    <li>
                                                        <div class="u-list-icon">
                                                            <div xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content">–</div>
                                                        </div>Tortor at risus viverra adipiscing at in tellus.
                                                    </li>
                                                    <li>
                                                        <div class="u-list-icon">
                                                            <div xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content">–</div>
                                                        </div>Purus ut faucibus pulvinar elementum.
                                                    </li>
                                                    <li>
                                                        <div class="u-list-icon">
                                                            <div xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content">–</div>
                                                        </div>Blandit turpis cursus in hac habitasse.e.
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-clearfix u-image u-section-9" id="carousel_aca8" data-image-width="1619" data-image-height="1080">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <div class="u-align-center u-container-style u-group u-white u-group-1" data-animation-name="customAnimationIn" data-animation-duration="2000">
                <div class="u-container-layout u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-valign-top-lg u-valign-top-xl u-container-layout-1">
                    <h3 class="u-text u-text-palette-4-base u-text-1">Contacts</h3>
                    <h2 class="u-text u-text-2">monday — friday<br><b>8.00 </b>am —&nbsp;<b>8.00 </b>pm<br>call us <b>(111) 252 3366</b>
                    </h2>
                </div>
            </div>
        </div>
    </section>
    <section class="u-align-center u-clearfix u-image u-shading u-section-10" src="" data-image-width="256" data-image-height="256" id="sec-923e">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <h1 class="u-text u-text-default u-title u-text-1">INTUITIVE</h1>
            <p class="u-large-text u-text u-text-default u-text-variant u-text-2">Sample text. Lorem ipsum dolor sit amet, consectetur adipiscing elit nullam nunc justo sagittis suscipit ultrices.</p>
            <a href="#" class="u-btn u-button-style u-palette-2-base u-btn-1">Read More</a>
        </div>
    </section>


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