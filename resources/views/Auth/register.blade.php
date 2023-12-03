<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title data-rightJoin="Fr">
        Register</title>
    <meta name="description"
        content="BlogIA is a revolutionary Bootstrap Admin Dashboard Template and UI Components Library. The Admin Dashboard Template and UI Component features 8 modules.">
    <meta name="keywords"
        content="premium, admin, dashboard, , bootstrap 5, clean ui, qompac-ui, admin dashboard,responsive dashboard, optimized dashboard, simple auth">
    <meta name="author" content="Iqonic Design">
    <meta name="DC.title" content="Blog IA meta | BlogIA">

    <!-- Library / Plugin Css Build -->
    <link rel="stylesheet" href="{{URL::asset('assets/css/core/libs.min.css') }}">


    <!-- Flatpickr css -->
    <link rel="stylesheet" href="{{URL::asset('assets/vendor/flatpickr/dist/flatpickr.min.css') }}">


    <!-- qompac-ui Design System Css -->
    <link rel="stylesheet" href="{{URL::asset('assets/css/qompac-ui.min.css?v=1.0.1 ') }}">

    <!-- Custom Css -->
    <link rel="stylesheet" href="{{URL::asset('assets/css/custom.min.css?v=1.0.1 ') }}">
    <!-- Dark Css -->
    <link rel="stylesheet" href="{{URL::asset('assets/css/dark.min.css?v=1.0.1 ') }}">

    <!-- Customizer Css -->
    <link rel="stylesheet" href="{{URL::asset('assets/css/customizer.min.css?v=1.0.1 ') }}">

    <!-- RTL Css -->
    <link rel="stylesheet" href="{{URL::asset('assets/css/rtl.min.css?v=1.0.1 ') }}">


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
                <img src="../../assets/images/loader.webp" alt="loader" class="image-loader img-fluid ">
            </div>
        </div>
    </div>
    <!-- loader END -->
    <div class="wrapper">
        <section class="login-content overflow-hidden">
            <div class="row no-gutters align-items-center ">
                <div class="col-md-12 col-lg-6 align-self-center mx-auto">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="card auth-card  d-flex justify-content-center mb-0">
                                <div class="card-body">
                                    <h2 class="mb-2 text-center">Inscription</h2>
                                    <p class="text-center">Creer votre profil de blogeur</p>
                                    <!-- <span class="text-danger">l'un des champs n'est pas correctement remplie</span>  -->
                                    @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                    <form action="/register" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="nom" class="form-label">Nom</label>
                                                    <input type="text" class="form-control" name="nom"
                                                        placeholder="Entrer un nom">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="prenom" class="form-label">Prenom</label>
                                                    <input type="text" class="form-control" name="prenoms"
                                                        placeholder="Entrer un prenom">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="email" class="form-label">Email</label>
                                                    <input type="email" class="form-control" name="email"
                                                        placeholder="example@gmail.com">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="Contact" class="form-label">Contact</label>
                                                    <input type="text" class="form-control" name="contact"
                                                        placeholder="........">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="password" class="form-label">Password</label>
                                                    <input type="password" class="form-control" name="password"
                                                        placeholder=" ">
                                                    @error('password')
                                                    <ul>
                                                        <p> le mot de passe doit contenir : </p>
                                                        <li>- de 8 à 15 caractères </li>
                                                        <li>- au moins une lettre minuscule</li>
                                                        <li>- au moins une lettre majuscule</li>
                                                        <li>- au moins un chiffre</li>
                                                        <li>- au moins un de ces caractères spéciaux: $ @ % * + - _ !
                                                        </li>
                                                    </ul>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="confirmation_password" class="form-label">Confirm
                                                        Password</label>
                                                    <input type="password" class="form-control"
                                                        name="confirmation_password" placeholder=" ">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 d-flex justify-content-center">
                                                <div class="form-check mb-3">
                                                    <input type="checkbox" required class="form-check-input"
                                                        id="customCheck1">
                                                    <label class="form-check-label" for="customCheck1">J'ai lu et
                                                        j'acces les termes et conditions</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                {!! NoCaptcha::renderJs() !!}
                                                {!! NoCaptcha::display() !!}
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <button type="submit" class="btn btn-primary">Inscription</button>
                                        </div>
                                        <p class="text-center my-3">ou connectez-vous avec un compte suivant ?</p>
                                        <div class="d-flex justify-content-center">
                                            <ul class="list-group list-group-horizontal list-group-flush">
                                                <li class="list-group-item border-0 pb-0">
                                                    <a href="#"><img src="../../assets/images/brands/gm.svg" alt="gm"
                                                            loading="lazy"></a>
                                                </li>
                                                <li class="list-group-item border-0 pb-0">
                                                    <a href="#"><img src="../../assets/images/brands/fb.svg" alt="fb"
                                                            loading="lazy"></a>
                                                </li>
                                                <li class="list-group-item border-0 pb-0">
                                                    <a href="#"><img src="../../assets/images/brands/im.svg" alt="im"
                                                            loading="lazy"></a>
                                                </li>
                                                <li class="list-group-item border-0 pb-0">
                                                    <a href="#"><img src="../../assets/images/brands/li.svg" alt="li"
                                                            loading="lazy"></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <p class="mt-3 text-center">
                                            deja un compte <a href="/" class="text-underline">Connexion
                                            </a>
                                        </p>
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