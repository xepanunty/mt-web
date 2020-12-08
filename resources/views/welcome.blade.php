<?php
$jobs = \App\Models\Company::orderBy('start_date', 'DESC')->get()->all();
$countryFlag = new \Stidges\CountryFlags\CountryFlag();
?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="software services">
    <meta name="og:title" property="og:title" content="my-profile">
    <meta name="author" content="marcelo.teixeira">
    <meta name="robots" content="index,follow">
    <link rel="canonical" href="https://marceloteixeira.pt/">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="andremarcelo, marcelo teixeira, eida sa, marcelo, teixeira, maia, fcporto, programador, designer, programmer porto, portugal, luxembourg
    , xepanunty, maia, porto, portugal, desenvolvimento para o estado, engenharia, base de dados, software maia, factory, energy, porto, php, ract, node-js, node, desenvolvimento web, web, xepanunty.com, xepannunty,HTML, CSS, JavaScript">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>MyProfile - MARCELO TEIXEIRA</title>

    <!-- favicon -->
    <link href="favicon.png" rel=icon>

    <!-- web-fonts -->
    <link href="https://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- font-awesome -->
    <link href="{{ asset("assets/css/font-awesome.min.css") }}" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="{{ asset("assets/css/bootstrap.min.css") }}" rel="stylesheet">

    <!-- owl carousal -->
    <link href="{{ asset("assets/css/owl.carousel.css")}}" rel="stylesheet">

    <!-- Style CSS -->
    <link href="{{ asset("assets/css/style.css")}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div id="main-wrapper">
    <!-- Page Preloader -->
    <div id="preloader">
        <div id="status">
            <div class="status-mes"></div>
        </div>
    </div>
    @include('flash::message')
    <header class="header">
        <div class="container">
            <div style="text-align: right">
                <a href="/setlocale/en" >{{ $countryFlag->get('GB') }}</a>
                <a href="/setlocale/pt">{{ $countryFlag->get('PT') }}</a>
                <a href="/setlocale/es">{{ $countryFlag->get('ES') }}</a>
                <a href="/setlocale/de" >{{ $countryFlag->get('DE') }}</a>
                <a href="/setlocale/fr">{{ $countryFlag->get('FR') }}</a>
                <a href="/setlocale/lu">{{ $countryFlag->get('LU') }}</a>

            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="profile-img">
                        <img src="{{ asset("assets/img/img-profile.jpg")}}" class="img-responsive" alt=""/>
                    </div>
                    <!-- Profile Image -->
                </div>
                <div class="col-md-9">
                    <div class="name-wrapper">
                        <h1 class="name">Marcelo Teixeira</h1>
                        <span>{{ trans('site.role') }}</span>
                    </div>
                    <p>
                        {{ trans('site.intro') }}
                    </p>


                    <div class="row">
                        <div class="col-md-3">
                            <div class="personal-details">
                                <strong>{{ trans('site.dateb') }}</strong>
                                <small>{{ trans('site.BIRTH') }}</small>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="personal-details">
                                <strong>{{ trans('site.NAT') }}</strong>
                                <small>{{ trans('site.NATIONALITY') }}</small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="personal-details">
                                @foreach (explode(",",trans('site.lang')) as $lang)
                                    <strong>{{ $lang }}</strong>
                                @endforeach
                                <small>{{ trans('site.LANGUAGE') }}</small>
                            </div>
                        </div>
                    </div>

                    <ul class="social-icon">
                        <li><a href="https://www.facebook.com/andremarcelo.teixeira/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.instagram.com/andremarcelo.t80/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.linkedin.com/in/andremarcelo/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="https://itxepanuntyworkspace.slack.com" target="_blank"><i class="fa fa-slack" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- .header-->

    <section class="section-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="section-title">
                        <h2>{{ trans('site.MyActivity') }}</h2>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="item-stats">
                                <div class="item-stats-value">100%</div>
                                <div class="item-stats-name">{{ trans('site.JobsSuccess') }}</div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="item-stats">
                                <div class="item-stats-value">96%</div>
                                <div class="item-stats-name">{{ trans('site.OnBudget') }}</div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="item-stats">
                                <div class="item-stats-value">99%</div>
                                <div class="item-stats-name">{{ trans('site.OnTime') }}</div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="item-stats">
                                <div class="item-stats-value">89%</div>
                                <div class="item-stats-name">{{ trans('site.RepeatHireRate') }} </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- .activity-wrapper -->

    <section class="work-history-wrapper section-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="section-title">
                        <h2>{{ trans('site.WorkHistory') }}</h2>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="item-stats">
                                <div class="item-stats-value">21120</div>
                                <div class="item-stats-name">{{ trans('site.hoursworked') }}</div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="item-stats">
                                <div class="item-stats-value">731</div>
                                <div class="item-stats-name">{{ trans('site.WorkDone') }}</div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="item-stats">
                                <div class="item-stats-value">40</div>
                                <div class="item-stats-name">{{ trans('site.HoursweeklyAvailable') }}</div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="item-stats">
                                <div class="item-stats-value">24</div>
                                <div class="item-stats-name">{{ trans('site.HourResponseTime') }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- .work-history-wrapper -->

    <section class="expertise-wrapper section-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="section-title">
                        <h2>{{ trans('site.MySpecialities') }}</h2>
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="expertise-item">
                                <h3>{{ trans('site.phpframeworks') }}</h3>

                                <p>
                                    {{ trans('site.phpframeworks-desc') }}
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="expertise-item">
                                <h3>{{ trans('site.databses') }}</h3>

                                <p>
                                    {{ trans('site.databses-desc') }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="expertise-item">
                                <h3>{{ trans('site.edifact') }}</h3>

                                <p>
                                    {{ trans('site.edifact-desc') }}
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="expertise-item">
                                <h3>{{ trans('site.others') }}</h3>

                                <p>
                                    {{ trans('site.others-desc') }}</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- .row -->
        </div>
    </section>
    <!-- .expertise-wrapper -->

    <section class="section-wrapper skills-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="section-title">
                        <h2>{{ trans('site.Skills') }}</h2>
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="progress-wrapper">

                                <h3>{{ trans('site.CODINGSKILLS') }}</h3>

                                <div class="progress-item">
                                    <span class="progress-title">LINUX BASH</span>

                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                             aria-valuemax="100" style="width: 75%"><span
                                                    class="progress-percent"> 75%</span>
                                        </div>
                                    </div>
                                    <!-- .progress -->
                                </div>
                                <div class="progress-item">
                                    <span class="progress-title">HTML5</span>

                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                             aria-valuemax="100" style="width: 75%"><span
                                                    class="progress-percent"> 75%</span>
                                        </div>
                                    </div>
                                    <!-- .progress -->
                                </div>
                                <!-- .skill-progress -->

                                <div class="progress-item">
                                    <span class="progress-title">CSS3</span>

                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0"
                                             aria-valuemax="100" style="width: 95%"><span
                                                    class="progress-percent"> 95%</span>
                                        </div>
                                    </div>
                                    <!-- /.progress -->
                                </div>
                                <!-- /.skill-progress -->

                                <div class="progress-item">
                                    <span class="progress-title">PHP / Java / Python</span>

                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                             aria-valuemax="100" style="width: 90%;"><span
                                                    class="progress-percent"> 90%</span>
                                        </div>
                                    </div>
                                    <!-- /.progress -->
                                </div>
                                <!-- /.skill-progress -->

                                <div class="progress-item">
                                    <span class="progress-title">JavaScript / Jquery / Node.js / React</span>

                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0"
                                             aria-valuemax="100" style="width: 55%;"><span
                                                    class="progress-percent"> 55%</span>
                                        </div>
                                    </div>
                                    <!-- /.progress -->
                                </div>
                                <!-- /.skill-progress -->


                            </div>
                            <!-- /.progress-wrapper -->
                        </div>
                        <div class="col-md-6">
                            <div class="progress-wrapper">
                                <h3>{{ trans('site.PROJECTMANAGERSKILLS') }}</h3>

                                <div class="progress-item">
                                    <span class="progress-title">Scrum</span>

                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="62" aria-valuemin="0"
                                             aria-valuemax="100" style="width: 90%"><span
                                                    class="progress-percent"> 90%</span>
                                        </div>
                                    </div>
                                    <!-- .progress -->
                                </div>
                                <!-- .skill-progress -->

                                <div class="progress-item">
                                    <span class="progress-title">Kanban</span>

                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                             aria-valuemax="100" style="width: 90%"><span
                                                    class="progress-percent"> 90%</span>
                                        </div>
                                    </div>
                                    <!-- /.progress -->
                                </div>
                                <!-- /.skill-progress -->

                                <div class="progress-item">
                                    <span class="progress-title">Project Manager methodologies</span>

                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                             aria-valuemax="100" style="width: 75%;"><span
                                                    class="progress-percent"> 75%</span>
                                        </div>
                                    </div>
                                    <!-- /.progress -->
                                </div>
                                <!-- /.skill-progress -->

                                <div class="progress-item">
                                    <span class="progress-title">Continuous integration and Continuous delivery tools</span>

                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                             aria-valuemax="100" style="width: 90%;"><span
                                                    class="progress-percent"> 90%</span>
                                        </div>
                                    </div>
                                    <!-- /.progress -->
                                </div>
                                <!-- /.skill-progress -->

                            </div>
                            <!-- /.progress-wrapper -->
                        </div>
                    </div>
                    <!--.row -->
                </div>
            </div>

        </div>
        <!-- .container-fluid -->
    </section>
    <!-- .skills-wrapper -->

    <section class="section-wrapper section-experience">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="section-title"><h2>{{ trans('site.WorkExperience') }}</h2></div>
                </div>
                <div class="col-md-9">
                    @foreach ($jobs as $key => $job)
                        <div class="row">
                            <div class="col-md-6">
                                <div class="content-item">
                                    <small>{{$job->year}}</small>
                                    <h3>{{$job->role}}</h3>
                                    <h4><a target="_blank" href="{{$job->site_url}}">{{$job->name}}</a></h4>
                                    <p>{{$job->country}},{{$job->city}} </p>
                                </div>
                                <!-- .experience-item -->
                            </div>
                        </div>
                    @endforeach
                </div>
                <!--.row-->
            </div>
        </div>
        <!-- .container -->
    </section>
    <!-- .section-experience -->

    <section class="section-education section-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="section-title"><h2>{{ trans('site.Education') }}</h2></div>
                </div>

                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="content-item">
                                <small>2007 - 2011</small>
                                <h3>Bachelor's Degree and Master -  Computer & Information Sciences</h3>
                                <h4>IPP</h4>
                                <p>PORTO, PORTUGAL</p>
                            </div>
                            <!-- .experience-item -->
                            <div class="content-item">
                                <small>1995 – 2007</small>
                                <h3>Study Technological computer and Junior Programmer</h3>
                                <h4>Escola EB2,3 /S de Celorico de Basto</h4>
                                <p>Celorico - Braga, PORTUGAL</p>
                            </div>
                        </div>
                    </div>
                    <!--.row-->
                </div>

            </div>
            <!--.row-->
        </div>
        <!-- .container -->
    </section>
    <!-- .section-education -->

    <section class="section-contact section-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="section-title">
                        <h2>{{ trans('site.Contact') }}</h2>
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-3">
                            <address>
                                <strong>Address</strong><br>
                                29A Rue de Michelbouch<br>
                                9170 Mertzig, Luxemburg
                            </address>
                        </div>
                        <div class="col-md-3">
                            <address>
                                <strong>{{ trans('site.PhoneNumber') }}</strong><br>
                                +352 621 662 689
                            </address>
                        </div>
                        <div class="col-md-3">
                            <address>
                                <strong>{{ trans('site.MobileNumber') }}</strong><br>
                                +351 926 608 440
                            </address>
                        </div>
                        <div class="col-md-3">
                            <address>
                                <strong>{{ trans('site.email') }}</strong><br>
                                <a href="mailto:marcelo.t80@gmail.com">marcelo.t80@gmail.com</a>
                            </address>
                        </div>

                    </div>
                    <!--.row-->

                    <div class="feedback-form">
                        <h3>{{ trans('site.GETINTOUCH') }}</h3>
                        <form id="contactForm" action="/send-email" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="name" required="" class="form-control" id="InputName"
                                       placeholder="{{ trans('site.FullName') }}">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" required="" class="form-control" id="InputEmail"
                                       placeholder="{{ trans('site.email') }}">
                            </div>
                            <div class="form-group">
                                <input type="text" name="subject" class="form-control" id="InputSubject"
                                       placeholder="{{ trans('site.Subject') }}">
                            </div>
                            <div class="form-group">
                            <textarea class="form-control" rows="4" required="" name="message" id="message-text"
                                      placeholder="{{ trans('site.WriteMessage') }}"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">{{ trans('site.submit') }}</button>
                        </form>
                    </div>
                    <!-- .feedback-form -->
                </div>
            </div>
            <!--.row-->

        </div>
        <!--.container-fluid-->
    </section>
    <!--.section-contact-->

    <footer class="footer">
        <div class="copyright-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copytext">&copy; MyProfile - Marcelo Teixeira, All rights reserved | Designed By me</div>
                    </div>
                </div>
                <!--.row-->
            </div>
            <!-- .container-fluid -->
        </div>
        <!-- .copyright-section -->
    </footer>
    <!-- .footer -->

</div>
<!-- #main-wrapper -->

<!-- jquery -->
<script src="{{ asset("assets/js/jquery-2.1.4.min.js")}}"></script>
<!-- Bootstrap -->
<script src="{{ asset("assets/js/bootstrap.min.js")}}"></script>
<!--owl carousal-->
<script src="{{ asset("assets/js/owl.carousel.min.js")}}"></script>
<!--theme script-->
<script src="{{ asset("assets/js/scripts.js")}}"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script>
    $('#flash-overlay-modal').modal();
</script>
<script>
    $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
</script>
</body>
</html>}