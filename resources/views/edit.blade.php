<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <title> : Maple International Education Consultancy</title>
    <link rel="icon" type="image/x-icon" href="Untitled-1-01.html">
    <title>
    </title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Bibhuti Solution Pvt. Ltd.">
    <meta name="subject" content="">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="index.html">
    <meta property="og:url" content="index.html">
    <meta property="og:site_name" content="Bibhuti LMS">
    <!-- Stylesheets -->
    <link href="{{asset('bootstrap/4.5.2/css/bootstrap.min.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('all.min.css')}}" />

    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100;300;400;500;700;900&amp;display=swap" rel="stylesheet">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <style>
        * {
            box-sizing: border-box;
        }

        .mb10 {
            margin-bottom: 10px;
        }

        .mb20 {
            margin-bottom: 20px;
        }

        body {
            /* background: #E7E8E9; */
        }

        header {
            background-color: #FFFFFF;
            width: 100%;
            /* padding-bottom: 40px; */
        }

        .main {
            /* background-color: #E7E8E9; */
            margin: 0;
            padding: 0;
        }

        .table {
            background-color: #FFFFFF;
        }

        .table thead {
            background: #0673bc;
            /* background: rgb(2, 0, 36);
        background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(139, 23, 26, 1) 0%, rgba(236, 31, 40, 1) 100%); */
            color: #fff;
        }

        .titlebox h2 {
            background: #0673bc;

            /* background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(139, 23, 26, 1) 0%, rgba(236, 31, 40, 1) 100%); */
            color: #fff;
            text-align: left;
            margin: 10px 0px 20px 0;
            text-transform: capitalize;
            padding: 10px 20px;
            font-size: 24px;
            font-weight: 600;
        }

        .tabletitle h2 {
            background: #0673bc;
            /* background: rgb(2, 0, 36);
        background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(139, 23, 26, 1) 0%, rgba(236, 31, 40, 1) 100%); */
            color: #fff;
            text-align: left;
            margin: 10px 0px 0px 0;
            text-transform: capitalize;
            padding: 10px 20px;
            font-size: 20px;
            font-weight: 600;
        }

        .form-box {
            display: block;
            margin: 0 auto;
            /* margin-top: 5%; */
            /* margin-bottom: 5%; */
            /* background-color: #E7E8E9; */
            width: 98%;
            /* border-radius: 5px;
  box-shadow: 10px 10px 0 0 #9c1e5b; */
        }

        .boximage {
            width: 100%;
            height: auto;

            background-size: cover;
            border-radius: 5px 5px 0 0;
        }

        .infotext {
            width: 100%;
            padding: 3%;
            text-align: center;
            color: #162c38;
            font-family: sans-serif;
        }

        h1 {
            font-family: 'Roboto Slab', serif;
            font-size: 1.1em;
            color: #162c38;
            text-transform: uppercase;
        }

        .infotext p {
            line-height: 1.5em;
            letter-spacing: 0.05em;
        }

        form {
            width: 100%;
            /* padding: 5%; */
        }

        .required-input {
            color: #f00;
        }

        input {
            display: block;
            width: 100%;
            border: solid 1px #ec1f28;
            border-radius: 5px;
            /* margin-bottom: 15px; */
            padding: 2%;
            font-size: 0.8em;
            font-family: sans-serif;
            letter-spacing: 0.1em;
            color: #888;
            text-align: left;
        }

        input[type=submit] {
            border: none;
            border-radius: 5px;
            background-color: #a82d2d;
            color: #fff;
            text-align: center;
        }

        input[type=submit]:hover {
            background-color: #711616;
            cursor: pointer;
        }

        .form-control {
            height: 30px;
            background: #fff;
            border: 1px #0673bc solid;
            padding: 0 15px;
            font-size: 16px;
            -webkit-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        .form-control:focus {
            border-color: #00bcd9;
            -webkit-box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
            -moz-box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
            box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
        }

        textarea.form-control {
            height: 160px;
            padding-top: 15px;
            resize: none;
        }


        .content-column ul li {

            list-style-type: disc;

            margin-left: 20px;

        }
    </style>
    <style>
        .sbuttons {
            bottom: 5%;
            position: fixed;
            margin: 1em;
            left: 0;
            z-index: 9999;
        }

        .sbutton {
            display: block;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            text-align: center;
            color: white;
            margin: 20px auto 0;
            box-shadow: 0px 5px 11px -2px rgba(0, 0, 0, 0.18), 0px 4px 12px -7px rgba(0, 0, 0, 0.15);
            cursor: pointer;
            -webkit-transition: all .1s ease-out;
            transition: all .1s ease-out;
            position: relative;
        }

        .sbutton>i {
            font-size: 38px;
            line-height: 60px;
            transition: all .2s ease-in-out;
            transition-delay: 2s;
        }

        .sbutton:active,
        .sbutton:focus,
        .sbutton:hover {
            box-shadow: 0 0 4px rgba(0, 0, 0, .14), 0 4px 8px rgba(0, 0, 0, .28);
        }

        .sbutton:not(:last-child) {
            width: 60px;
            height: 60px;
            margin: 20px auto 0;
            opacity: 0;
        }

        .sbutton:not(:last-child)>i {
            font-size: 25px;
            line-height: 60px;
            transition: all .3s ease-in-out;
        }

        .sbuttons:hover .sbutton:not(:last-child) {
            opacity: 1;
            width: 60px;
            height: 60px;
            margin: 15px auto 0;
        }

        .sbutton:nth-last-child(1) {
            -webkit-transition-delay: 25ms;
            transition-delay: 25ms;
        }

        .sbutton:not(:last-child):nth-last-child(2) {
            -webkit-transition-delay: 20ms;
            transition-delay: 20ms;
        }

        .sbutton:not(:last-child):nth-last-child(3) {
            -webkit-transition-delay: 40ms;
            transition-delay: 40ms;
        }

        .sbutton:not(:last-child):nth-last-child(4) {
            -webkit-transition-delay: 60ms;
            transition-delay: 60ms;
        }

        .sbutton:not(:last-child):nth-last-child(5) {
            -webkit-transition-delay: 80ms;
            transition-delay: 80ms;
        }

        .sbutton:not(:last-child):nth-last-child(6) {
            -webkit-transition-delay: 100ms;
            transition-delay: 100ms;
        }

        [tooltip]:before {
            font-family: 'Roboto';
            font-weight: 600;
            border-radius: 2px;
            background-color: #585858;
            color: #fff;
            content: attr(tooltip);
            font-size: 12px;
            visibility: hidden;
            opacity: 0;
            padding: 5px 7px;
            margin-left: 10px;
            position: absolute;
            left: 100%;
            bottom: 20%;
            white-space: nowrap;
        }

        [tooltip]:hover:before,
        [tooltip]:hover:after {
            visibility: visible;
            opacity: 1;
        }

        .sbutton.mainsbutton {
            background: #2ab1ce;
        }

        .sbutton.gplus {
            background: #F44336;
        }

        .sbutton.pinteres {
            background: #e60023;
        }

        .sbutton.twitt {
            background: #03A9F4;
        }

        .sbutton.fb {
            background: #3F51B5;
        }

        .sbutton.whatsapp {
            background: #00e676;
        }

        .sbutton.tiktok {
            background: #000000;
        }
    </style>
    <!-- Event snippet for AEN LMS Register conversion page
In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
</head>

<body class="hidden-bar-wrapper">
    <div class="sbuttons">

    </div>
    <!-- Main Header-->
    <header>
        <div class="container">
            <div class="row">
                <div class="col">
                    <img src="{{asset('assets/images/office.jpg')}}" alt="cover-image" class="img-fluid" />
                </div>
            </div>

        </div>
    </header>
    <section class="main">
        <div class="container">
            <div class="form-box">
                <form action="{{route('form.update',$formdetail->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="campaigns_id" value="1" />
                    <input type="hidden" name="qrscanned" value="" />
                    <!--<div class="titlebox">-->
                    <!--  <h2>MAPLE OFFICE</h2>-->
                    <!--</div>-->

                    <div class="titlebox">
                        <h2>
                            PERSONAL INFORMATION
                        </h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="form-row">
                                <div class="col-lg-2 col-md-3"><label for="from-name">Name:</label><span class="required-input">*</span>
                                </div>
                                <div class="col-lg-10 col-md-9">
                                    <div class="form-group">
                                        <input name="name" type="text" placeholder="Enter your Full Name" value="{{ $formdetail->name }}" required>
                                        @error('name')
                                        <p style="color: indianred;margin-top: 5px">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-row">
                                <div class="col-lg-2 col-md-3"><label for="from-name">Date of Birth:</label><span class="required-input">*</span>
                                </div>
                                <div class="col-lg-10 col-md-9">
                                    <div class="form-group">
                                        <input name="dob" type="text" placeholder="Enter your Date Of Birth" value="{{ $formdetail->dob }}" required>
                                        @error('dob')
                                        <p style="color: indianred;margin-top: 5px">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="row">
                                <div class="col-lg-4">
                                    <label for="from-name">Gender:</label>
                                    <span class="required-input">*</span>
                                </div>
                                <div class="col-lg-8">
                                    @php
                                    $genders = ['male' => 'Male', 'female' => 'Female', 'others' => 'Others'];
                                    @endphp

                                    @foreach($genders as $key => $label)
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="gender_{{ $key }}" name="gender" value="{{ $key }}" {{ $formdetail->gender == $key ? 'checked' : '' }}>
                                        <label class="form-check-label" for="gender_{{ $key }}">{{ $label }}</label>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="row">
                                <div class="col-lg-4">
                                    <label for="from-name">Marital Status:</label>
                                    <span class="required-input">*</span>
                                </div>
                                <div class="col-lg-8">
                                    @php
                                    $maritalstatus = ['married' => 'Married', 'unmarried' => 'Unmarried', 'divorced' => 'Divorced'];
                                    @endphp

                                    @foreach($maritalstatus as $key => $label)
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="marital_status_{{ $key }}" name="marital_status" value="{{ $key }}" {{ $formdetail->marital_status == $key ? 'checked' : '' }}>
                                        <label class="form-check-label" for="marital_status_{{ $key }}">{{ $label }}</label>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-12 col-md-12">
                            <div class="form-row">
                                <div class="col-lg-2 col-md-3"><label for="from-name">Tel/Mob Number</label><span class="required-input">*</span>
                                </div>
                                <div class="col-lg-10 col-md-9">
                                    <div class="form-group">
                                        <input name="mobile_number" type="text" placeholder="Enter your Mobile Number" value="{{ $formdetail->mobile_number }}" required>
                                        @error('mobile_number')
                                        <p style="color: indianred;margin-top: 5px">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-row">
                                <div class="col-lg-2 col-md-3"><label for="from-name">Email:</label><span class="required-input">*</span>
                                </div>
                                <div class="col-lg-10 col-md-9">
                                    <div class="form-group">
                                        <input name="email" type="email" placeholder="Enter your Mobile Number" value="{{ $formdetail->email }}" required>
                                        @error('email')
                                        <p style="color: indianred;margin-top: 5px">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-row">
                                <div class="col-lg-2 col-md-3"><label for="from-name">Address</label><span class="required-input">*</span>
                                </div>
                                <div class="col-lg-10 col-md-9">
                                    <div class="form-group">
                                        <input name="address" type="text" placeholder="Enter your Address" value="{{ $formdetail->address }}" required>
                                        @error('address')
                                        <p style="color: indianred;margin-top: 5px">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="form-row">
                                <div class="col-lg-2 col-md-3"><label for="from-name">Have you applied any country?</label><span class="required-input">*</span>
                                </div>
                                <div class="col-lg-10 col-md-9">
                                    <div class="form-group">
                                        <input name="applied_country" type="text" placeholder="country?" value="{{ $formdetail->applied_country }}" required>
                                        @error('applied_country')
                                        <p style="color: indianred;margin-top: 5px">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tabletitle">
                            <h2> Edit ACADEMIC DETAILS</h2>
                        </div>
                        <table class="table-bordered table">
                            <thead>
                                <tr>
                                    <th scope="col">Degree Obtained</th>
                                    <th scope="col">Major</th>
                                    <th scope="col">Institution</th>
                                    <th scope="col">Score/GPA</th>
                                    <th scope="col">Passed Year</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $academic_details = json_decode($formdetail->academic_details);
                                @endphp
                                <!-- SLC / SEE -->
                                <tr>
                                    <th scope="row">SLC / SEE</th>
                                    <td> </td>
                                    <td> <input class="form-control" type="text" id="from-address" name="see[see_school]" value="{{ $academic_details->see->see_school ?? '' }}"></td>
                                    <td> <input class="form-control" type="text" id="from-address" name="see[see_grade]" value="{{ $academic_details->see->see_grade ?? '' }}"></td>
                                    <td> <input class="form-control" type="text" id="from-address" name="see[see_year]" value="{{ $academic_details->see->see_year ?? '' }}"></td>
                                </tr>
                                <!-- 10+2/CTEVT/PCT -->
                                <tr>
                                    <th scope="row">10+2/CTEVT/PCT</th>
                                    <td> <input class="form-control" type="text" id="from-address" name="plus2[plus2_stream]" value="{{ $academic_details->plus2->plus2_stream ?? '' }}"></td>
                                    <td> <input class="form-control" type="text" id="from-address" name="plus2[plus2_college]" value="{{ $academic_details->plus2->plus2_college ?? '' }}"></td>
                                    <td> <input class="form-control" type="text" id="from-address" name="plus2[plus2_grade]" value="{{ $academic_details->plus2->plus2_grade ?? '' }}"></td>
                                    <td> <input class="form-control" type="text" id="from-address" name="plus2[plus2_year]" value="{{ $academic_details->plus2->plus2_year ?? '' }}"></td>
                                </tr>
                                <!-- Bachelor -->
                                <tr>
                                    <th scope="row">Bachelor</th>
                                    <td> <input class="form-control" type="text" id="from-address" name="bachelors[bachelors_stream]" value="{{ $academic_details->bachelors->bachelors_stream ?? '' }}"></td>
                                    <td> <input class="form-control" type="text" id="from-address" name="bachelors[bachelors_college]" value="{{ $academic_details->bachelors->bachelors_college ?? '' }}"></td>
                                    <td> <input class="form-control" type="text" id="from-address" name="bachelors[bachelors_grade]" value="{{ $academic_details->bachelors->bachelors_grade ?? '' }}"></td>
                                    <td> <input class="form-control" type="text" id="from-address" name="bachelors[bachelors_year]" value="{{ $academic_details->bachelors->bachelors_year ?? '' }}"></td>
                                </tr>
                                <!-- Master -->
                                <tr>
                                    <th scope="row">Master</th>
                                    <td> <input class="form-control" type="text" id="from-address" name="masters[highest_stream]" value="{{ $academic_details->masters->highest_stream ?? '' }}"></td>
                                    <td> <input class="form-control" type="text" id="from-address" name="masters[highest_college]" value="{{ $academic_details->masters->highest_college ?? '' }}"></td>
                                    <td> <input class="form-control" type="text" id="from-address" name="masters[highest_grade]" value="{{ $academic_details->masters->highest_grade ?? '' }}"></td>
                                    <td> <input class="form-control" type="text" id="from-address" name="masters[highest_year]" value="{{ $academic_details->masters->highest_year ?? '' }}"></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-row">
                                <div class="col-lg-2 col-md-3"><label for="from-name">Work Experience:</label><span class="required-input">*</span>
                                </div>
                                <div class="col-lg-10 col-md-9">
                                    <div class="form-group">
                                        <input name="work_experience" type="text" placeholder="experience" value="{{ $formdetail->work_experience }}" required>
                                        @error('work_experience')
                                        <p style="color: indianred;margin-top: 5px">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <label for="from-test">Test Taken:</label>
                                    <span class="required-input">*</span>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="select-group">
                                        <select name="test_taken" class="form-control field-info" required>
                                            <option value="">Test Taken</option>
                                            <option value="0" {{ $formdetail->test_taken == '0' ? 'selected' : '' }}>None</option>
                                            <option value="5" {{ $formdetail->test_taken == '5' ? 'selected' : '' }}>Duolingo</option>
                                            <option value="1" {{ $formdetail->test_taken == '1' ? 'selected' : '' }}>IELTS</option>
                                            <option value="4" {{ $formdetail->test_taken == '4' ? 'selected' : '' }}>OET</option>
                                            <option value="2" {{ $formdetail->test_taken == '2' ? 'selected' : '' }}>PTE</option>
                                            <option value="6" {{ $formdetail->test_taken == '6' ? 'selected' : '' }}>TOEFL (iBT)</option>
                                            <option value="3" {{ $formdetail->test_taken == '3' ? 'selected' : '' }}>TOEFL (pBT)</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-row">
                                <div class="col-lg-2 col-md-3"><label for="from-name">Score (0 for none):</label><span class="required-input">*</span>
                                </div>
                                <div class="col-lg-10 col-md-9">
                                    <div class="form-group">
                                        <input name="score" type="text" placeholder="score" value="{{ $formdetail->score }}" required>
                                        @error('score')
                                        <p style="color: indianred;margin-top: 5px">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="form-row">
                                <div class="col-lg-2 col-md-3"><label for="from-name">How did you know about us?:</label><span class="required-input">*</span>
                                </div>
                                <div class="col-lg-10 col-md-9">
                                    <div class="form-group">
                                        <input name="how_you_know" type="text" placeholder="country?" value="{{ $formdetail->how_you_know }}" required>
                                        @error('how_you_know')
                                        <p style="color: indianred;margin-top: 5px">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="form-row">
                                <div class="col-lg-2 col-md-3"><label for="from-name">Reference:</label><span class="required-input">*</span>
                                </div>
                                <div class="col-lg-10 col-md-9">
                                    <div class="form-group">
                                        <input name="reference" type="text" placeholder="country?" value="{{ $formdetail->reference }}" required>
                                        @error('reference')
                                        <p style="color: indianred;margin-top: 5px">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="col-lg-6 col-md-6">
                          <div class="row">
                              <div class="col-lg-6 col-md-6"> <label for="from-other">Other:</label></div>
                              <div class="col-lg-6 col-md-6">
                                  <div class="form-group">
                                      <input class="form-control" type="text" id="from-other" name="other">
                                  </div>
                              </div>
                          </div>
                      </div> -->
                    </div>
                    <!-- <div class="form-row">
                      <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                          <div class="form-group"><label for="from-calltime">FOR OFFICIAL USE</label><span class="required-input">*</span>
                              <textarea name="message" class="form-control" rows="5"></textarea>
                          </div>
                      </div>
                  </div> -->
                    <div class="form-group">
                        <div class="form-row">
                            <input type="hidden" name="g-recaptcha-response" value="">
                            <div class="col"><button class="btn btn-primary btn-block" type="submit" id="submitButton">Update
                                </button></div>
                        </div>
                    </div>
            </div>
            </form>
            <!-- <div class="button">
                <input type="submit" value="Update">
            </div> -->
        </div>
        </div>
    </section>

    <!-- End News Section -->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>
    <script src="../code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        $(document).ready(function() {
            $('#enquiry-form').submit(function(e) {
                e.preventDefault();
                var formData = $(this).serialize();
                $("#submitButton").prop("disabled", true);
                $("#submitButton").html("Please Wait...");
                $.ajax({
                    type: 'POST',
                    url: $(this).attr('action'),
                    data: formData,
                    success: function(response) {
                        if (response.status === false) {
                            // User is already registered, display a SweetAlert error message
                            swal.fire({
                                icon: 'error',
                                title: 'Registration Failed',
                                text: response.message
                            });
                            $("#submitButton").prop("disabled", false);
                            $("#submitButton").html("Submit");
                        } else {
                            // User registration successful, display a SweetAlert success message
                            swal.fire({
                                icon: 'success',
                                title: 'Form submitted successfully',
                                text: response.message
                                // text: 'Response: ' + JSON.stringify(response)
                            });
                            setTimeout(function() {
                                location.reload();
                            }, 3000);
                        }
                    },
                    error: function(xhr, status, error) {
                        // Use SweetAlert for error
                        swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'Failed to submit form. Status: ' + status + ', Error: ' + error
                        });
                        $("#submitButton").prop("disabled", false);
                        $("#submitButton").html("Submit");
                    }
                });
            });
        });
    </script>
</body>


<!-- Mirrored from maple.my-urls.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Jun 2024 09:04:24 GMT -->

</html>