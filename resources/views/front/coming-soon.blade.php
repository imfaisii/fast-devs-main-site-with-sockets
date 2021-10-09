<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <link href="images/favicon.png" rel="icon" />
    <title>{{ env('APP_NAME') }}</title>
    <meta name="description" content="Family Tracker Coming Soon">
    <meta name="author" content="revobp.com">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Web Fonts
======================== -->
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900'
        type='text/css'>

    <!-- Stylesheet
======================== -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/coming-soon/css/all.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/coming-soon/css/bootstrap.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/coming-soon/css/magnific-popup.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/coming-soon/css/stylesheet.css') }}" />
    <link id="color-switcher" rel="stylesheet" type="text/css"
        href="{{ asset('assets/coming-soon/css/color-yellow.css') }}" />
</head>

<body>

    <!-- Preloader -->
    <div class="preloader preloader-dark">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- Document Wrapper
=============================== -->
    <div id="main-wrapper" class="bg-dark">

        <!-- Header -->
        <header id="header">
            <!-- Navbar -->
            <nav class="primary-menu navbar navbar-expand-md navbar-text-light bg-transparent border-bottom-0">
                <div class="container position-relative">
                    <div class="col-auto col-lg-2">
                        <!-- Logo -->
                        <h3 style="color: white;margin-top: 4%"><strong>{{ env('APP_NAME') }}</strong></h3>
                        <!-- Logo End -->
                    </div>
                    <div class="col col-lg-8 navbar-accordion px-0">
                        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                            data-bs-target="#header-nav"><span></span><span></span><span></span></button>
                        <div id="header-nav" class="collapse navbar-collapse justify-content-center">
                            <ul class="navbar-nav">
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="modal"
                                        data-bs-target="#contact" href="#">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto col-lg-2 d-flex justify-content-end">
                        <ul class="social-icons social-icons-light">
                            <li class="social-icons-twitter"><a data-bs-toggle="tooltip"
                                    href="http://www.twitter.com/imfaisii" target="_blank" title="Twitter"><i
                                        class="fab fa-twitter"></i></a></li>
                            <li class="social-icons-facebook"><a data-bs-toggle="tooltip"
                                    href="http://www.facebook.com/faisal.ashfaq3" target="_blank" title="Facebook"><i
                                        class="fab fa-facebook"></i></a></li>
                            <li class="social-icons-instagram"><a data-bs-toggle="tooltip"
                                    href="http://www.instagram.com/imfaisii" target="_blank" title="Instagram"><i
                                        class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->
        </header>
        <!-- Header End -->

        <section class="min-vh-100 d-flex flex-column">
            <div class="container py-5 px-4 px-lg-5 my-auto">
                <div class="row py-5 py-sm-4">
                    <div class="col-12 text-center mx-auto">
                        <h1 class="text-9 bg-primary d-inline-block fw-700 rounded px-3 py-2 mb-4">Coming Soon!</h1>
                        <h2 class="text-15 text-white fw-600 mb-4">Our new website is on its way.</h2>
                    </div>
                    <div class="col-md-8 col-lg-6 col-xl-5 mx-auto text-center">
                        <p class="text-5 text-light mb-3">Get notified when we launch.</p>
                        <!-- Subscribe Form -->
                        <div class="subscribe-form">
                            <form class="form-dark" action="php/subscribe.php" role="form" method="post">
                                <div class="input-group">
                                    <input type="email" id="email_id" name="subscribe-form-email"
                                        class="form-control border-dark required" required
                                        placeholder="Enter Your Email Here..">
                                    <button id="subscribe-form-submit" name="subscribe-form-submit"
                                        class="btn btn-primary px-4 shadow-none" type="button"><span
                                            class="d-none d-sm-block">Notify Me</span><span
                                            class="text-4 d-block d-sm-none"><i
                                                class="fas fa-arrow-right"></i></span></button>
                                </div>
                            </form>
                            <div class="subscribe-form-result mt-3"></div>
                        </div>
                        <!-- Subscribe End -->
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <footer class="container text-center">
                <p class="text-muted text-2 mb-2">Copyright © 2021 <a class="fw-600"
                        href="#">{{ env('APP_NAME') }}</a>.
                    All
                    Rights Reserved.</p>
            </footer>

        </section>
    </div>

    <!-- Contact Popup
================================== -->
    <div id="contact" class="modal fade" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-600 text-7 mx-auto">Contact Us</h5>
                    <button type="button" class="btn-close ms-0" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4 p-lg-5">
                    <p class="lead text-muted text-center mb-5">We launch our new website soon. For Customer Support
                        and Query, Get in touch with us.</p>
                    <div class="row">
                        <div class="col-xl-6">
                            <!-- Contact Form -->
                            <form id="contact-form" action="php/mail.php" method="post">
                                <div class="mb-3">
                                    <label class="form-label" for="name">What is Your Name:</label>
                                    <input id="name" name="name" type="text" class="form-control border-2"
                                        placeholder="Enter Your Name" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="email">Your Email Address:</label>
                                    <input id="email" name="email" type="email" class="form-control border-2"
                                        placeholder="Enter Your Email" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="form-message">How can I Help you?:</label>
                                    <textarea id="form-message" name="form-message" class="form-control border-2"
                                        rows="3" placeholder="Enter Your Query" required></textarea>
                                </div>
                                <div class="d-grid mt-4">
                                    <button id="submit-btn" class="btn btn-primary" type="submit">Send Message</button>
                                </div>
                            </form>
                            <!-- Contact Form end -->
                        </div>
                        <div class="col-xl-6 mt-5 mt-xl-0">
                            <div class="row gy-5">
                                <div class="col-md-6">
                                    <div class="featured-box text-center">
                                        <div class="featured-box-icon text-primary"> <i
                                                class="fas fa-map-marker-alt"></i></div>
                                        <h3 class="text-uppercase fw-600">Visit us</h3>
                                        <p class="mb-0">{{ env('APP_NAME') }} Near Heaven<br>
                                            Islamabad </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="featured-box text-center">
                                        <div class="featured-box-icon text-primary"> <i class="fas fa-phone-alt"></i>
                                        </div>
                                        <h3 class="text-uppercase fw-600">Call Us Now</h3>
                                        <p class="mb-0">Phone: (+92) 3351482280</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="featured-box text-center">
                                        <div class="featured-box-icon text-primary"> <i class="fas fa-envelope"></i>
                                        </div>
                                        <h3 class="text-uppercase fw-600">Inquiries</h3>
                                        <p class="mb-0"><a class="text-body"
                                                href="mailto:cfaisal009@gmail.com">cfaisal009@gmail.com</a><br>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="featured-box text-center">
                                        <div class="featured-box-icon text-primary"> <i class="fas fa-clock"></i>
                                        </div>
                                        <h3 class="text-uppercase fw-600">Business Hours</h3>
                                        <p class="mb-0">Mon to Fri<br>
                                            (9 am – 6 pm)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Popup End -->

    <!-- Script -->
    <script src="{{ asset('assets/coming-soon/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/coming-soon/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/coming-soon/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/coming-soon/js/jquery.form.min.js') }}"></script>
    <script src="{{ asset('assets/coming-soon/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/coming-soon/js/theme.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function validateEmail($email) {
            var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            return emailReg.test($email);
        }


        $("#subscribe-form-submit").click(function(e) {
            e.preventDefault();
            var email = $("#email_id").val();
            if (email == "") {
                Swal.fire(
                    'You are almost there !',
                    'Dont forget to enter email to get the latest updates from us',
                    'info'
                )
                return;
            } else if (!validateEmail(email)) {
                Swal.fire(
                    'Oops ! Stupid Computer',
                    'It says the email is invalid, dont make me wrong by agreeing 😅',
                    'info'
                )
                return;
            }
            $.ajax({
                type: "POST",
                url: "{{ route('subscriber-mail') }}",
                data: {
                    email: email,
                },
                beforeSend: function() {
                    $("#subscribe-form-submit").prop('disabled', true);
                },
                success: function(data) {
                    Swal.fire(
                        'Good job!',
                        'You Subscribed Successfully',
                        'success'
                    )
                    $("#resultarea").text(data);
                },
                error: function(data) {
                    if (data.status == 422) {
                        Swal.fire(
                            'Heyy buddy!',
                            'You have already subscribed, be ready to be annoyed by our daily notifications 😋 !',
                            'success'
                        )
                    } else
                        Swal.fire(
                            'Internal Server Error!',
                            'Mail Subscription Failed!',
                            'error'
                        )
                },
                complete: function() {
                    $("#subscribe-form-submit").prop('disabled', false);
                },
            });

        });
    </script>

</body>

</html>
