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
                    <div class="row justify-content-center pt-5">
                        <div class="col-lg-8">
                            <div class="card d-flex justify-content-center mb-0">
                                <div class="card-body">
                                    <h2 class="mb-2">Renitialiser le mot de passe</h2>
                                    <p>Entrer votre Nouveau mot de passe pour pouvoir vous reconnectez </p>
                                    @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif

                                    @if (session('status'))
                                        <div class="mb-4 font-medium text-sm text-success">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                    <form action="/reset-password" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="floating-label form-group">
                                                    <input type="hidden" class="form-control"  name="email"
                                                        aria-describedby="email" value="{{request()->email}}">
                                                </div>
                                                <div class="floating-label form-group">
                                                    <label for="password" class="form-label">Mot de passe</label>
                                                    <input type="password" class="form-control" name="password"
                                                        aria-describedby="password" placeholder=".........">
                                                </div>
                                                <div class="floating-label form-group">
                                                    <label for="password_confirmation" class="form-label">Confirmer le mot de passe</label>
                                                    <input type="password" class="form-control" name="password_confirmation"
                                                        aria-describedby="password_confirmation" placeholder="............." >
                                                </div>
                                                <input type="hidden" name="token" value="{{request()->route('token')}}">
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