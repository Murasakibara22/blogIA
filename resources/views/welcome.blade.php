<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title data-rightJoin="Fr">BlogIA
        BlogIA</title>
    <meta name="description"
        content="BlogIA is a revolutionary Bootstrap Admin Dashboard Template and UI Components Library. The Admin Dashboard Template and UI Component features 8 modules.">
    <meta name="keywords"
        content="premium, admin, dashboard, , bootstrap 5, clean ui, qompac-ui, admin dashboard,responsive dashboard, optimized dashboard, simple auth">
    <meta name="author" content="Iqonic Design">
    <meta name="DC.title" content="Blog IA meta | BlogIA">
    <!-- Favicon -->
    <link rel="shortcut icon" href="../../assets/images/favicon.ico">

    <!-- Library / Plugin Css Build -->
    <link rel="stylesheet" href="../../assets/css/core/libs.min.css">

    <!-- qompac-ui Design System Css -->
    <link rel="stylesheet" href="../../assets/css/qompac-ui.min.css?v=1.0.1">

    <!-- Custom Css -->
    <link rel="stylesheet" href="../../assets/css/custom.min.css?v=1.0.1">
    <!-- Dark Css -->
    <link rel="stylesheet" href="../../assets/css/dark.min.css?v=1.0.1">

    <!-- Customizer Css -->
    <link rel="stylesheet" href="../../assets/css/customizer.min.css?v=1.0.1">

    <!-- RTL Css -->
    <link rel="stylesheet" href="../../assets/css/rtl.min.css?v=1.0.1">

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
</head>

<body class=" ">
    <!-- loader Start -->
    <div id="loading">
        <div class="loader simple-loader">
            <div class="loader-body ">
                <img src="{{URL::asset('assets/images/loader.webp') }}" alt="loader" class="image-loader img-fluid ">
            </div>
        </div>
    </div>
    <!-- loader END -->
    <div class="wrapper">
        <section class="login-content overflow-hidden">
            <div class="row no-gutters align-items-center ">
                <div class="col-md-12 col-lg-6 align-self-center mx-auto">
                    <a href="../../dashboard/index.html"
                        class="navbar-brand d-flex align-items-center mb-3 justify-content-center text-primary">
                    </a>
                    
                    <livewire:login />
                </div>
                <!-- <div class="col-lg-6 d-lg-block d-none bg-primary p-0  overflow-hidden">
                    <img src="{{URL::asset('assets/images/auth/01.png ') }}" class="img-fluid gradient-main" alt="images" loading="lazy">
                </div> -->
            </div>
        </section>
    </div>
    <!-- Library Bundle Script -->
    <script src="{{URL::asset('assets/js/core/libs.min.js') }}"></script>
    <!-- Plugin Scripts -->

    <!-- Slider-tab Script -->
    <script src="{{URL::asset('assets/js/plugins/slider-tabs.js') }}"></script>

    <!-- Lodash Utility -->
    <script src="{{URL::asset('assets/vendor/lodash/lodash.min.js') }}"></script>
    <!-- Utilities Functions -->
    <script src="{{URL::asset('assets/js/iqonic-script/utility.min.js') }}"></script>
    <!-- Settings Script -->
    <script src="{{URL::asset('assets/js/iqonic-script/setting.min.js') }}"></script>
    <!-- Settings Init Script -->
    <script src="{{URL::asset('assets/js/setting-init.js') }}"></script>
    <!-- External Library Bundle Script -->
    <script src="{{URL::asset('assets/js/core/external.min.js') }}"></script>
    <!-- Widgetchart Script -->
    <script src="{{URL::asset('assets/js/charts/widgetcharts.js?v=1.0.1') }}" defer></script>
    <!-- Dashboard Script -->
    <script src="{{URL::asset('assets/js/charts/dashboard.js?v=1.0.1') }}" defer></script>
    <!-- qompacui Script -->
    <script src="{{URL::asset('assets/js/qompac-ui.js?v=1.0.1') }}" defer></script>
    <script src="{{URL::asset('assets/js/sidebar.js?v=1.0.1') }}" defer></script>

</body>

</html>