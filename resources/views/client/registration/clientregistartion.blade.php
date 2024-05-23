@extends('client.components.main')
@section('content')
    <!DOCTYPE html>
    <html lang="en-US">

    <head>
        <meta charset="utf-8">
        <meta content="IE=edge" http-equiv="X-UA-Compatible">
        <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1" />
        <title>SignupForm - Multi Step Signup HTML5 Ajax Form</title>
        <meta name="description" content="Add your website description here">
        <meta name="keywords" content="Add your website keywords here">
        <link href="favicon.ico" rel="icon">
        <link rel="stylesheet" href="{{ asset('assets/css/sighup/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/sighup/fontawesome/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/sighup/bootstrap-datepicker3.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/sighup/signup-form.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('assets/css/sighup/signup-form-modern.css') }}" type="text/css">

    </head>

    <body>
        <div class="signupForm-section wrapper">
            <div class="display-table">
                <div class="display-table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-wrap clearfix">

                                    <div class="col-md-6 offset-md-3">
                                        <form id="signUpForm" name="signUpForm" data-toggle="validator" class="signUpForm"
                                            enctype="multipart/form-data">
                                            <div class="section-wrap">
                                                <div id="section-1" class="section">

                                                    <fieldset>
                                                        {{-- <div class="form-layer-steps form-layer-tolal-steps-4">
                                                            <div class="form-layer-progress">
                                                                <div class="form-layer-progress-line"style="width: 0%;">
                                                                </div>
                                                            </div> --}}
                                                            {{-- <div class="form-layer-step active">
                                                                <div class="form-layer-step-icon"><i
                                                                        class="fas fa-unlock-alt"></i></div>
                                                                <p>Account</p>
                                                            </div>
                                                            <div class="form-layer-step">
                                                                <div class="form-layer-step-icon"><i
                                                                        class="fas fa-user"></i></div>
                                                                <p>Personal</p>
                                                            </div>
                                                            <div class="form-layer-step">
                                                                <div class="form-layer-step-icon"><i
                                                                        class="fas fa-image"></i></div>
                                                                <p>Image</p>
                                                            </div>
                                                            <div class="form-layer-step">
                                                                <div class="form-layer-step-icon"><i
                                                                        class="fas fa-check"></i></div>
                                                                <p>Confirm</p> --}}
                                                            </div>
                                                        </div>
                                                        <h3 class="section-form-title">Register</h3>
                                                        <div class="help-block with-errors mandatory-error"></div>
                                                        <div class="form-group validuname"> <input class="form-control"
                                                                name="uname" id="uname" type="text"
                                                                placeholder="UserName*" required
                                                                data-error="Please enter UserName">
                                                            <div class="input-group-icon"><i class="fas fa-user"></i></div>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                        <div class="form-group validemail"> <input class="form-control"
                                                                name="email" id="email" type="email"
                                                                placeholder="Email*" required
                                                                data-error="Please enter valid email">
                                                            <div class="input-group-icon"><i class="fas fa-envelope"></i>
                                                            </div>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                        <div class="form-group validpass"> <input class="form-control"
                                                                name="pass" id="pass" type="password"
                                                                placeholder="Password* at least 6 character" required
                                                                data-error="Please enter password">
                                                            <div class="input-group-icon"><i class="fas fa-key"></i></div>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                        <div class="form-group"> <input class="form-control" name="cpass"
                                                                id="cpass" type="password"
                                                                placeholder="Confirm Password*" required
                                                                data-error="Please retype password">
                                                            <div class="input-group-icon"><i class="fas fa-key"></i></div>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                        <div class="form-group signUpForm-step-1"> <button class="btn btn-custom float-start"
                                                                onclick="nextStep2()" type="button">Register<span
                                                                    class="fas fa-arrow-right"></span></button></div>
                                                    </fieldset>
                                                </div>



                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/bootstrap-datepicker.min.js"></script>
        <script src="js/validator.min.js"></script>
        <script src="js/signup-form.js"></script>
        <script>
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function() {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o), m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-93541536-2', 'auto');
            ga('send', 'pageview');
        </script>
    </body>

    </html>
@endsection
