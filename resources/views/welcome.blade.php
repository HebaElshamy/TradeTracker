<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Welcome | Admin </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('backend/') }}/assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="{{ asset('backend/') }}/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('backend/') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('backend/') }}/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body class="auth-body-bg">
        <div class="bg-overlay"></div>
        <div class="my-5 pt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">

                                <div class="ex-page-content text-center">
                                    <h1 style="font-size: 90px">Justock</h1>


                                    {{-- <a class="btn btn-info mb-5 waves-effect waves-light" href="index.html">Back to Dashboard</a> --}}
                                    @if (Route::has('login'))
                                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                        @auth
                                            <a href="{{ url('/dashboard') }}" class="btn btn-info mb-5 waves-effect waves-light">Dashboard</a>
                                        @else
                                            <a href="{{ route('login') }}" class="btn btn-info mb-5 waves-effect waves-light">Log in</a>


                                        @endauth
                                    </div>
                                @endif
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
        </div>

        <!-- JAVASCRIPT -->
        <script src="{{ asset('backend/') }}/assets/libs/jquery/jquery.min.js"></script>
        <script src="{{ asset('backend/') }}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('backend/') }}/assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="{{ asset('backend/') }}/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="{{ asset('backend/') }}/assets/libs/node-waves/waves.min.js"></script>

        <script src="{{ asset('backend/') }}/assets/js/main.js"></script>

    </body>
</html>
