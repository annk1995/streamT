<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1"/>
    <title>Model Sign Up</title>
    <meta name="description" content="Add your website description here">
    <meta name="keywords" content="Add your website keywords here">
    <link href="favicon.ico" rel="icon">
    <link rel="stylesheet" href="{{ asset('assets/css/sighup/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/sighup/fontawesome/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/sighup/bootstrap-datepicker3.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/sighup/signup-form.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/sighup/signup-form-modern.css') }}" type="text/css">
<body>
@if(session('success'))
    <div>{{ session('success') }}</div>
@endif

@if($errors->any())
    <div>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="signupForm-section wrapper">
    <div class="display-table">
        <div class="display-table-cell">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-wrap clearfix">

                            <div class="col-md-6 offset-md-3">

                                <form action="{{ route('talent.register') }}" id="" name="signUpForm"
                                      data-toggle="validator" class="signUpForm"
                                      enctype="multipart/form-data" method="POST">
                                    @csrf
                                    <div class="section-wrap">
                                        <div id="section-1" class="section">
                                            <h3 class="section-title">Step 1 of 4</h3>
                                            <fieldset>
                                                <div class="form-layer-steps form-layer-tolal-steps-4">
                                                    <div class="form-layer-progress">
                                                        <div class="form-layer-progress-line" style="width: 0%;">
                                                        </div>
                                                    </div>
                                                    <div class="form-layer-step active">
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
                                                        <p>Confirm</p>
                                                    </div>
                                                </div>
                                                <h3 class="section-form-title">Account Information</h3>
                                                <div class="help-block with-errors mandatory-error"></div>
                                                <div class="form-group validuname"><input class="form-control"
                                                                                          name="username" id="uname"
                                                                                          type="text"
                                                                                          placeholder="UserName*"
                                                                                          required
                                                                                          data-error="Please enter UserName">
                                                    <div class="input-group-icon"><i class="fas fa-user"></i></div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="form-group validemail"><input class="form-control"
                                                                                          name="email" id="email"
                                                                                          type="email"
                                                                                          placeholder="Email*" required
                                                                                          data-error="Please enter valid email">
                                                    <div class="input-group-icon"><i class="fas fa-envelope"></i>
                                                    </div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="form-group validpass"><input class="form-control"
                                                                                         name="password" id="pass"
                                                                                         type="password"
                                                                                         placeholder="Password* at least 6 character"
                                                                                         required
                                                                                         data-error="Please enter password">
                                                    <div class="input-group-icon"><i class="fas fa-key"></i></div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="form-group"><input class="form-control" name="password"
                                                                               id="cpass" type="password"
                                                                               placeholder="Confirm Password*" required
                                                                               data-error="Please retype password">
                                                    <div class="input-group-icon"><i class="fas fa-key"></i></div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="form-group signUpForm-step-1">
                                                    <button class="btn btn-custom float-end"
                                                            onclick="nextStep2()" type="button">Next <span
                                                            class="fas fa-arrow-right"></span></button>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div id="section-2" class="section slide-right">
                                            <h3 class="section-title">Step 2 of 4</h3>
                                            <fieldset>
                                                <div class="form-layer-steps form-layer-tolal-steps-4">
                                                    <div class="form-layer-progress">
                                                        <div class="form-layer-progress-line"
                                                             style="width: 37.25%;"></div>
                                                    </div>
                                                    <div class="form-layer-step activated">
                                                        <div class="form-layer-step-icon"><i
                                                                class="fas fa-unlock-alt"></i></div>
                                                        <p>Account</p>
                                                    </div>
                                                    <div class="form-layer-step active">
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
                                                        <p>Confirm</p>
                                                    </div>
                                                </div>
                                                <h3 class="section-form-title">Personal Information</h3>
                                                <div class="help-block with-errors mandatory-error"></div>
                                                <div class="form-group validfname"><input class="form-control"
                                                                                          name="fname" id="fname"
                                                                                          type="text"
                                                                                          placeholder="First Name*"
                                                                                          required
                                                                                          data-error="Please enter First Name">
                                                    <div class="input-group-icon"><i class="fas fa-user"></i>
                                                    </div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="form-group validlname"><input class="form-control"
                                                                                          name="lname" id="lname"
                                                                                          type="text"
                                                                                          placeholder="Last Name*"
                                                                                          required
                                                                                          data-error="Please enter Last Name">
                                                    <div class="input-group-icon"><i class="fas fa-user"></i>
                                                    </div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="form-group validgender"><select class="form-control"
                                                                                            name="gender_id" id="gender"
                                                                                            title="" required
                                                                                            data-error="Please Select Gender">
                                                        <option disabled selected>--- Select Your Gender* ---</option>
                                                        @foreach ($genders as $gender )
                                                            <option
                                                                value="{{ $gender->id }}">{{ $gender->name }}</option>
                                                        @endforeach


                                                    </select>
                                                    <div class="input-group-icon"><i class="fas fa-venus"></i>
                                                    </div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="form-group validcountry"><select class="form-control"
                                                                                             name="country_id"
                                                                                             id="gender" title=""
                                                                                             required
                                                                                             data-error="Please Select Bodytpe">
                                                        <option disabled selected>--- Select Your Country ---</option>
                                                        @foreach ($countries as $country)
                                                            <option
                                                                value="{{ $country->id }}">{{ $country->name }}</option>
                                                        @endforeach

                                                    </select>
                                                    <div class="input-group-icon"><i class="fas fa-venus"></i>
                                                    </div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="form-group validtype"><select class="form-control"
                                                                                          name="type_id" id="gender"
                                                                                          title="" required
                                                                                          data-error="Please Select Bodytpe">
                                                        <option disabled selected>--- Select Your BodyType ---</option>
                                                        @foreach ($types as $type)
                                                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                                                        @endforeach

                                                    </select>
                                                    <div class="input-group-icon"><i class="fas fa-venus"></i>
                                                    </div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="form-group validethnicity"><select class="form-control"
                                                                                               name="ethicity_id"
                                                                                               id="gender" title=""
                                                                                               required
                                                                                               data-error="Please Select Ethnicity">
                                                        <option disabled selected>--- Select Your Ethnicity ---</option>
                                                        @foreach ($ethnicities as $ethnicity )
                                                            <option
                                                                value="{{ $ethnicity->id }}">{{ $ethnicity->name }}</option>

                                                        @endforeach


                                                    </select>
                                                    <div class="input-group-icon"><i class="fas fa-venus"></i>
                                                    </div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="form-group age"><select class="form-control"
                                                                                    name="age_id" id="gender" title=""
                                                                                    required
                                                                                    data-error="Please Select Age">
                                                        <option disabled selected="">--- Select Your Age Range* ---
                                                        </option>
                                                        @foreach ($ages as $age)
                                                            <option value="{{ $age->id }}">{{ $age->label }}</option>

                                                        @endforeach

                                                    </select>
                                                    <div class="input-group-icon"><i class="fas fa-venus"></i>
                                                    </div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div id="date-of-birth" class="form-group validbirthdate"><input
                                                        class="form-control" name="dob" id="birthdate"
                                                        type="text" placeholder="Date Of Birth*" required
                                                        data-error="Please enter Date Of Birth">
                                                    <div class="input-group-icon"><i
                                                            class="fas fa-calendar-alt"></i></div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="form-group validaddress"><input class="form-control"
                                                                                            name="address" id="address"
                                                                                            type="text"
                                                                                            placeholder="Address*"
                                                                                            required
                                                                                            data-error="Please enter address">
                                                    <div class="input-group-icon"><i
                                                            class="fas fa-map-marker-alt"></i></div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="form-group validphone"><input class="form-control"
                                                                                          name="phone" id="phone"
                                                                                          type="text"
                                                                                          data-error="Please enter valid phone">
                                                    <div class="input-group-icon"><i class="fas fa-phone"></i>
                                                    </div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="form-group signUpForm-step-2">
                                                    <button
                                                        class="btn btn-custom" type="button"
                                                        onclick="previousStep1()"><span
                                                            class="fas fa-arrow-left"></span> Back
                                                    </button>
                                                    <button
                                                        class="btn btn-custom float-end" type="button"
                                                        onclick="nextStep3()">Next <span
                                                            class="fas fa-arrow-right"></span></button>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div id="section-3" class="section slide-right">
                                            <h3 class="section-title">Step 3 of 4</h3>
                                            <fieldset>
                                                <div class="form-layer-steps form-layer-tolal-steps-4">
                                                    <div class="form-layer-progress">
                                                        <div class="form-layer-progress-line"
                                                             style="width: 62.25%;"></div>
                                                    </div>
                                                    <div class="form-layer-step activated">
                                                        <div class="form-layer-step-icon"><i
                                                                class="fas fa-unlock-alt"></i></div>
                                                        <p>Account</p>
                                                    </div>
                                                    <div class="form-layer-step activated">
                                                        <div class="form-layer-step-icon"><i
                                                                class="fas fa-user"></i></div>
                                                        <p>Personal</p>
                                                    </div>
                                                    <div class="form-layer-step active">
                                                        <div class="form-layer-step-icon"><i
                                                                class="fas fa-image"></i></div>
                                                        <p>Image</p>
                                                    </div>
                                                    <div class="form-layer-step">
                                                        <div class="form-layer-step-icon"><i
                                                                class="fas fa-check"></i></div>
                                                        <p>Confirm</p>
                                                    </div>
                                                </div>
                                                <h3 class="section-form-title">Upload Profile Image</h3>
                                                <div class="help-block with-errors mandatory-error"></div>
                                                <div class="form-group attachmentFile"><label
                                                        class="input-group-btn"> <span class="btn">
                                                                    Browse&hellip; <input name="userfile" id="userfile"
                                                                                          type="file"> </span> </label>
                                                    <input
                                                        type="text" id="attachedFile" class="form-control"
                                                        placeholder="Browse to select file" readonly>


                                                </div>

                                                <h3 class="section-form-title">Upload identification card </h3>
                                                <div class="help-block with-errors mandatory-error"></div>
                                                <div class="form-group attachmentFile"><label
                                                        class="input-group-btn"> <span class="btn">
                                                                        Browse&hellip; <input name="userfile"
                                                                                              id="userfile"
                                                                                              type="file"> </span>
                                                    </label> <input
                                                        type="text" id="attachedFile" class="form-control"
                                                        placeholder="Browse to select file" readonly>


                                                </div>

                                                <h3 class="section-form-title">Upclose face picture </h3>
                                                <div class="help-block with-errors mandatory-error"></div>
                                                <div class="form-group attachmentFile"><label
                                                        class="input-group-btn"> <span class="btn">
                                                                        Browse&hellip; <input name="userfile"
                                                                                              id="userfile"
                                                                                              type="file"> </span>
                                                    </label> <input
                                                        type="text" id="attachedFile" class="form-control"
                                                        placeholder="Browse to select file" readonly>


                                                </div>


                                                <div class="form-group validpreferedcontact"><strong>Prefered
                                                        Contact Method*: </strong> <label
                                                        class="radio-inline"><input type="radio"
                                                                                    name="preferedcontact"
                                                                                    id="preferedcontact1"
                                                                                    value="email">email</label> <label
                                                        class="radio-inline"><input type="radio"
                                                                                    name="preferedcontact"
                                                                                    id="preferedcontact2"
                                                                                    value="Phone">Phone</label>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="form-group validagree">
                                                    <div class="checkbox"><label><input name="aggre"
                                                                                        id="aggre" value="1"
                                                                                        type="checkbox">Agree with terms
                                                            &amp;
                                                            conditions</label>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group signUpForm-step-3">
                                                    <button
                                                        class="btn btn-custom" type="button"
                                                        onclick="previousStep2()"><span
                                                            class="fas fa-arrow-left"></span> Back
                                                    </button>
                                                    <button
                                                        class="btn btn-custom float-end" type="button"
                                                        onclick="nextStep4()">Next <span
                                                            class="fas fa-arrow-right"></span></button>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div id="section-4" class="section review-submit-section slide-right">
                                            <h3 class="section-title">Step 4 of 4: Review &amp; Submit</h3>
                                            <fieldset>
                                                <div class="form-layer-steps form-layer-tolal-steps-4">
                                                    <div class="form-layer-progress">
                                                        <div class="form-layer-progress-line"
                                                             style="width: 100%;"></div>
                                                    </div>
                                                    <div class="form-layer-step activated">
                                                        <div class="form-layer-step-icon"><i
                                                                class="fas fa-unlock-alt"></i></div>
                                                        <p>Account</p>
                                                    </div>
                                                    <div class="form-layer-step activated">
                                                        <div class="form-layer-step-icon"><i
                                                                class="fas fa-user"></i></div>
                                                        <p>Personal</p>
                                                    </div>
                                                    <div class="form-layer-step activated">
                                                        <div class="form-layer-step-icon"><i
                                                                class="fas fa-image"></i></div>
                                                        <p>Image</p>
                                                    </div>
                                                    <div class="form-layer-step active">
                                                        <div class="form-layer-step-icon"><i
                                                                class="fas fa-check"></i></div>
                                                        <p>Confirm</p>
                                                    </div>
                                                </div>
                                                <h3 class="section-form-title">Confirm Details</h3>
                                                <div class="row">
                                                    <div class="column col-sm-12 text-center">
                                                        <div id="profile-Image"><img id="userPhoto"
                                                                                     src="#" alt="Prifile Image"/></div>
                                                        <h3>Profile Image</h3>
                                                    </div>
                                                    <div class="column col-sm-12 text-center">
                                                        <h5>Account Information</h5>
                                                        <p id="unameData"></p>
                                                        <p id="emailData"></p>
                                                        <p id="passData"></p>
                                                    </div>
                                                    <div class="column col-sm-12 text-center">
                                                        <h5>Personal Information:</h5>
                                                        <p id="firstNameData"></p>
                                                        <p id="lastNameData"></p>
                                                        <p id="genderData"></p>
                                                        <p id="birthdateData"></p>
                                                        <p id="addressData"></p>
                                                        <p id="emailaddressData"></p>
                                                        <p id="phoneData"></p>
                                                        <p id="preferedcontactData"></p>
                                                    </div>
                                                    <div class="help-block with-errors mandatory-error"></div>
                                                    <div class="form-group col-sm-12">
                                                        {{-- <div id="humanCheckCaptchaBox"></div>
                                                        <div id="firstDigit"></div> +<div id="secondDigit"></div>
                                                        = <input name="humanCheckCaptchaInput"
                                                            id="humanCheckCaptchaInput" placeholder=""
                                                            maxlength="3" class="form-control" type="text"
                                                            required data-error="Please solve Captcha">
                                                        <div class="help-block with-errors"></div> --}}
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <div id="AggreData"><strong>Agree with terms &amp;
                                                                    conditions:</strong> <input name="aggre"
                                                                                                id="aggre" value="1"
                                                                                                checked disabled
                                                                                                type="checkbox"></div>
                                                        </div>
                                                        <div id="mgsFormSubmit" class="hidden"></div>
                                                        <div id="final-step-buttons"
                                                             class="form-group signUpForm-step-4">
                                                            <button
                                                                class="btn btn-custom" type="button"
                                                                onclick="previousStep3()"><span
                                                                    class="fas fa-arrow-left"></span> Back
                                                            </button>
                                                            <button
                                                                class="btn btn-custom float-end"
                                                                type="submit">Submit
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="footer-top col-sm-12">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('assets/js/signup/jquery-3.5.1.min.js')}}"></script>
{
<script src="{{ asset('assets/js/signup/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('assets/js/signup/validator.min.js') }}"></script>
<script src="{{ asset('assets/js/signup/signup-form.js') }}"></script>
<script>
    document.addEventListener("touchstart", function () {
    }, false);
    (function ($) {
        "use strict";
        $('span#mgsYear').html(new Date().getFullYear());
        $(function () {
            var randNumber_1 = parseInt(Math.ceil(Math.random() * 15), 10);
            var randNumber_2 = parseInt(Math.ceil(Math.random() * 15), 10);
            humanCheckCaptcha(randNumber_1, randNumber_2);
        });

        function humanCheckCaptcha(randNumber_1, randNumber_2) {
            $("#humanCheckCaptchaBox").html("Solve The Math ");
            $("#firstDigit").html('<input name="mathfirstnum" id="mathfirstnum" class="form-control" type="text" value="' + randNumber_1 + '" readonly>');
            $("#secondDigit").html('<input name="mathsecondnum" id="mathsecondnum" class="form-control" type="text" value="' + randNumber_2 + '" readonly>');
        }

        $(function () {
            $('#date-of-birth input').datepicker({
                format: "mm-dd-yyyy",
                todayBtn: "linked",
                todayHighlight: true,
                autoclose: true
            });
        });
        $("#signUpForm").validator().on("submit", function (event) {
            if (event.isDefaultPrevented()) {
                formError();
                submitMSG(false, "Please fill in the form properly!");
            } else {
                var mathPart_1 = parseInt($("#mathfirstnum").val(), 10);
                var mathPart_2 = parseInt($("#mathsecondnum").val(), 10);
                var correctMathSolution = parseInt((mathPart_1 + mathPart_2), 10);
                var inputHumanAns = $("#humanCheckCaptchaInput").val();
                if (inputHumanAns == correctMathSolution) {
                    event.preventDefault();
                    submitForm();
                } else {
                    submitMSG(false, "Please solve Human Captcha!!!");
                    return false;
                }
            }
        });

        function submitForm() {
            $("#mgsFormSubmit").html('');
            $("#final-step-buttons").html('<div class="h3 text-center text-success"> You have finished all steps of this html form successfully </div>');
        }

        $(function () {
            $(document).on('change', ':file', function () {
                var input = $(this), numFiles = input.get(0).files ? input.get(0).files.length : 1,
                    label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
                input.trigger('fileselect', [numFiles, label]);
            });
            $(':file').on('fileselect', function (event, numFiles, label) {
                var input = $(this).parents('.form-group').find(':text'),
                    log = numFiles > 1 ? numFiles + ' files selected' : label;
                if (input.length) {
                    input.val(log);
                } else {
                    if (log) alert(log);
                }
            });
        });

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#userPhoto').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#userfile").on('change', function () {
            readURL(this);
        });

        function formSuccess() {
            $("#signUpForm")[0].reset();
            submitMSG(true, "Registration Process Successfully!")
        }

        function formError() {
            $(".help-block.with-errors").removeClass('hidden');
        }

        function submitMSG(valid, msg) {
            if (valid) {
                var msgClasses = "h3 text-center text-success";
            } else {
                var msgClasses = "h3 text-center text-danger";
            }
            $("#mgsFormSubmit").removeClass().addClass(msgClasses).text(msg);
        }
    })(jQuery);
    $(function () {
        $("#signUpForm").on('focus', ':input', function () {
            $(this).attr('autocomplete', 'off');
        });
    });

    function isEmail(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    }

    function nextStep2() {
        var uname = $("#uname").val();
        var email = $("#email").val();
        var pass = $("#pass").val();
        var cpass = $("#cpass").val();
        var validemail = isEmail(email);
        if (uname)
            $(".validuname .help-block.with-errors").html(''); else
            $(".validuname .help-block.with-errors").html('<ul class="list-unstyled"><li>Please enter UserName</li></ul>');
        if (validemail)
            $(".validemail .help-block.with-errors").html(''); else
            $(".validemail .help-block.with-errors").html('<ul class="list-unstyled"><li>Please enter valid email</li></ul>');
        if (pass.length < 5)
            $(".validpass .help-block.with-errors").html('<ul class="list-unstyled"><li>Password should at least 6 character</li></ul>'); else if (pass != cpass)
            $(".validpass .help-block.with-errors").html('<ul class="list-unstyled"><li>Password and Confirm Password do not match</li></ul>'); else
            $(".validpass .help-block.with-errors").html('');
        if (uname && validemail && pass.length > 5 && pass == cpass) {
            $("#section-1 .help-block.with-errors").html('');
            $("#section-1").removeClass("open");
            $("#section-1").addClass("slide-left");
            $("#section-2").removeClass("slide-right");
            $("#section-2").addClass("open");
        } else {
            $("#section-1 .help-block.with-errors.mandatory-error").html('<ul class="list-unstyled"><li>Please Fill the Form Properly</li></ul>');
        }
    }

    function previousStep1() {
        $("#section-1").removeClass("slide-left");
        $("#section-1").addClass("open");
        $("#section-2").removeClass("open");
        $("#section-2").addClass("slide-right");
    }

    function nextStep3() {
        var fname = $("#fname").val();
        var lname = $("#lname").val();
        var gender = $("#gender").val();
        var birthdate = $("#birthdate").val();
        var address = $("#address").val();
        var phone = $("#phone").val();
        if (fname)
            $(".validfname .help-block.with-errors").html(''); else
            $(".validfname .help-block.with-errors").html('<ul class="list-unstyled"><li>Please enter First Name</li></ul>');
        if (lname)
            $(".validlname .help-block.with-errors").html(''); else
            $(".validlname .help-block.with-errors").html('<ul class="list-unstyled"><li>Please enter Last Name</li></ul>');
        if (gender)
            $(".validgender .help-block.with-errors").html(''); else
            $(".validgender .help-block.with-errors").html('<ul class="list-unstyled"><li>Please Select Gender</li></ul>');
        if (birthdate)
            $(".validbirthdate .help-block.with-errors").html(''); else
            $(".validbirthdate .help-block.with-errors").html('<ul class="list-unstyled"><li>Please Select Date Of Birth</li></ul>');
        if (address)
            $(".validaddress .help-block.with-errors").html(''); else
            $(".validaddress .help-block.with-errors").html('<ul class="list-unstyled"><li>Please enter Address</li></ul>');
        var filter = /^((\+[1-9]{1,4}[ \-]*)|(\([0-9]{2,3}\)[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9]{3,4}?[ \-]*[0-9]{3,4}?$/;
        if (filter.test(phone)) {
            $(".validphone .help-block.with-errors").html('');
            var validphone = 1;
        } else {
            $(".validphone .help-block.with-errors").html('<ul class="list-unstyled"><li>Please enter valid Phone</li></ul>');
            var validphone = 0;
        }
        if (fname.length > 0 && fname && lname.length > 0 && lname && gender && birthdate.length > 4 && birthdate && phone.length > 4 && validphone > 0 && address.length > 0 && address) {
            $("#section-2 .help-block.with-errors.mandatory-error").html('');
            $("#section-2").removeClass("open");
            $("#section-2").addClass("slide-left");
            $("#section-3").removeClass("slide-right");
            $("#section-3").addClass("open");
        } else {
            $("#section-2 .help-block.with-errors.mandatory-error").html('<ul class="list-unstyled"><li>Please Fill the Form Properly</li></ul>');
        }
    }

    function previousStep2() {
        $("#section-2").removeClass("slide-left");
        $("#section-2").addClass("open");
        $("#section-3").removeClass("open");
        $("#section-3").addClass("slide-right");
    }

    function nextStep4() {
        var uname = $("#uname").val();
        var email = $("#email").val();
        var pass = $("#pass").val();
        var fname = $("#fname").val();
        var lname = $("#lname").val();
        var gender = $("#gender").val();
        var birthdate = $("#birthdate").val();
        var address = $("#address").val();
        var phone = $("#phone").val();
        var preferedcontact = $('input[name=preferedcontact]:checked').val();
        $("#unameData").html('<strong>UserName:</strong> ' + uname);
        $("#emailData").html('<strong>email:</strong> ' + email);
        $("#passData").html('<strong>Password:</strong> *****');
        $("#firstNameData").html('<strong>First Name:</strong> ' + fname);
        $("#lastNameData").html('<strong>Last Name:</strong> ' + lname);
        $("#genderData").html('<strong>Gender:</strong> ' + gender);
        $("#birthdateData").html('<strong>Date Of Birth:</strong> ' + birthdate);
        $("#addressData").html('<strong>Address:</strong> ' + address);
        $("#phoneData").html('<strong>Phone:</strong> ' + phone);
        $("#preferedcontactData").html('<strong>Prefered Contact Method:</strong> ' + preferedcontact);
        if (preferedcontact)
            $(".validpreferedcontact .help-block.with-errors").html(''); else
            $(".validpreferedcontact .help-block.with-errors").html('<ul class="list-unstyled"><li>Please Select Prefered Contact Method</li></ul>');
        if ($('#aggre').is(":checked"))
            $(".validagree .help-block.with-errors").html(''); else
            $(".validagree .help-block.with-errors").html('<ul class="list-unstyled"><li>Please Aggre with terms &amp; conditions</li></ul>');
        if (preferedcontact && $('#aggre').is(":checked")) {
            $("#section-3 .help-block.with-errors.mandatory-error").html('');
            $("#section-3").removeClass("open");
            $("#section-3").addClass("slide-left");
            $("#section-4").removeClass("slide-right");
            $("#section-4").addClass("open");
        } else {
            $("#section-3 .help-block.with-errors.mandatory-error").html('<ul class="list-unstyled"><li>Please Fill the Form Properly</li></ul>');
        }
    }

    function previousStep3() {
        $("#section-3").removeClass("slide-left");
        $("#section-3").addClass("open");
        $("#section-4").removeClass("open");
        $("#section-4").addClass("slide-right");
    }

</script>
</body>

</html>

