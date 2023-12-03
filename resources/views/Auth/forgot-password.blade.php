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
            <div class="row m-0 align-items-center bg-white vh-100">
                <div class="col-md-12 col-lg-6 align-self-center mx-auto">
                    <a href="../../dashboard/index.html"
                        class="navbar-brand d-flex align-items-center mb-3 justify-content-center text-primary">
                        <div class="logo-normal">
                            <svg class="" viewBox="0 0 32 32" width="80px" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M7.25333 2H22.0444L29.7244 15.2103L22.0444 28.1333H7.25333L0 15.2103L7.25333 2ZM11.2356 9.32316H18.0622L21.3334 15.2103L18.0622 20.9539H11.2356L8.10669 15.2103L11.2356 9.32316Z"
                                    fill="currentColor" />
                                <path d="M23.751 30L13.2266 15.2103H21.4755L31.9999 30H23.751Z" fill="#3FF0B9" />
                            </svg>
                        </div>
                        <h2 class="logo-title ms-3 mb-0" data-setting="app_name">Qompac UI</h2>
                    </a>
                    <div class="row justify-content-center pt-5">
                        <div class="col-lg-8">
                            <div class="card d-flex justify-content-center mb-0">
                                <div class="card-body">
                                    <h2 class="mb-2">Reset Password</h2>
                                    <p>Entrer votre adresse email et vous recevrez un lien de renitialisation de mot de
                                        passe</p>
                                    @if (session('status'))
                                    <div class="mb-4 text-success">
                                        {{ session('status') }}
                                    </div>
                                    @endif

                                    @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                    <form action="/forgot-password" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="floating-label form-group">
                                                    <label for="email" class="form-label">Email</label>
                                                    <input type="email" class="form-control" name="email"
                                                        aria-describedby="email" value="{{ old('email') }}">
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Renitialiser</button>
                                    </form>
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