<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title data-rightJoin="Fr">
        Email verify</title>
    <meta name="description"
        content="BlogIA is a revolutionary Bootstrap Admin Dashboard Template and UI Components Library. The Admin Dashboard Template and UI Component features 8 modules.">
    <meta name="keywords"
        content="premium, admin, dashboard, , bootstrap 5, clean ui, qompac-ui, admin dashboard,responsive dashboard, optimized dashboard, simple auth">
    <meta name="author" content="Iqonic Design">
    <meta name="DC.title" content="Blog IA meta | BlogIA">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.ico ') }}">

    <!-- Library / Plugin Css Build -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/core/libs.min.css ') }}">

    <!-- qompac-ui Design System Css -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/qompac-ui.min.css?v=1.0.1 ') }}">

    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/custom.min.css?v=1.0.1 ') }}">
    <!-- Dark Css -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/dark.min.css?v=1.0.1 ') }}">

    <!-- Customizer Css -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/customizer.min.css?v=1.0.1 ') }}">

    <!-- RTL Css -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/rtl.min.css?v=1.0.1 ') }}">



    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
</head>

<body class=" ">

    <div class="wrapper">
        <section class="login-content overflow-hidden">
            <div class="row no-gutters align-items-center bg-white">
                <div class="col-md-12 col-lg-8 mx-auto align-self-center">

                    @if (session('status') == 'verification-link-sent')
                    <div class="mb-4 font-medium text-sm text-green-600">
                        A new email verification link has been emailed to you!
                    </div>
                    @endif
                    <div class="row justify-content-center pt-5">
                        <div class="col-md-8">
                            <div class="card  d-flex justify-content-center mb-0">
                                <div class="card-body">
                                    <h2 class="mt-3 mb-4">Success !</h2>
                                    <p class="cnf-mail mb-1">A email has been send to youremail@domain.com. Please check
                                        for an
                                        email from company and click
                                        on the included link to reset your password.</p>
                                    <div class="d-inline-block w-100">
                                        <a href="/dashboard" class="btn btn-primary mt-3">Back Home</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
    </div>
    <!-- Library Bundle Script -->
    <script src="{{URL::asset('assets/js/core/libs.min.js') }}"></script>
    <!-- Plugin Scripts -->

    <!-- Slider-tab Script -->
    <script src="{{URL::asset('assets/js/plugins/slider-tabs.js') }}"></script>

    <!-- Lodash Utility -->
    <script src="../../assets/vendor/lodash/lodash.min.js') }}"></script>
    <!-- Utilities Functions -->
    <script src="{{URL::asset('assets/js/iqonic-script/utility.min.js') }}"></script>
    <!-- Settings Script -->
    <script src="{{URL::asset('assets/js/iqonic-script/setting.min.js') }}"></script>
    <!-- Settings Init Script -->
    <script src="{{URL::asset('assets/js/setting-init.js') }}"></script>
    <!-- External Library Bundle Script -->
    <script src="{{URL::asset('assets/js/core/external.min.js') }}"></script>
    <!-- Widgetchart Script -->
    <script src="{{URL::asset('assets/js/charts/widgetcharts.js?v=1.0.1 ') }}" defer></script>
    <!-- Dashboard Script -->
    <script src="{{URL::asset('assets/js/charts/dashboard.js?v=1.0.1 ') }}" defer></script>
    <!-- qompacui Script -->
    <script src="{{URL::asset('assets/js/qompac-ui.js?v=1.0.1 ') }}" defer></script>
    <script src="{{URL::asset('assets/js/sidebar.js?v=1.0.1 ') }}" defer></script>

</body>

</html>