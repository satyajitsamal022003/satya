<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>
    
    <meta charset="utf-8" />
    <title>Odicon</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- Layout config Js -->
    <script src="{{ asset('assets/js/layout.js') }}"></script>

    <!-- Bootstrap Css -->

    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" defer/>
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" defer/>
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" defer/>
    <link href="{{ asset('assets/css/custom.min.css') }}" rel="stylesheet" type="text/css"defer/>

</head>

<body>

    <!-- auth-page wrapper -->
    <div class="auth-page-wrapper auth-bg-cover py-5 d-flex justify-content-center align-items-center min-vh-100" style="background: linear-gradient(312deg,#5abb4c 50%,#0c2343);">
        <div class="bg-overlay"></div>
        <!-- auth-page content -->
        <div class="auth-page-content overflow-hidden pt-lg-5">
            <div class="container" style="max-width: 1000px;">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card overflow-hidden" style="border-radius: 30px;padding: 20px;">
                            <div class="row g-0">
                              
                                <!-- end col -->

                                <div class="col-lg-6">
                                    <img src="{{url('/')}}/images/adminfront.svg" alt="svg" style="height: 438px;padding: 29px;align-items: center;margin-left: 30px;">
                                </div>

                                <div class="col-lg-6">
                                    <div class="p-lg-5 p-4">
                                        <div>
                                        <a href="#" class="d-block">
                                                    <img src="{{url('/')}}/images/admin/blackversion.png" alt="" style="height:43px;">
                                                </a>
                                            <h5 class="text-primary">Welcome Back !</h5>
                                            <p class="text-muted">Admin Login.</p>
                                        </div>

                                        <div class="mt-4">
                                        
                                        <form  action="{{ route('login') }}" method="post">
                                         @csrf
                                        <div class="mb-3">
                                            <label for="username" class="form-label">Email ID</label>
                                            <input type="text" class="form-control" name="email" id="email" placeholder="Enter username" required autofocus autocomplete="username">
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />

                                        </div> 

                                        <div class="mb-3">
                                            <label class="form-label" for="password-input">Password</label>
                                            <div class="position-relative auth-pass-inputgroup mb-3">
                                                <input type="password" name="password" class="form-control pe-5 password-input" placeholder="Enter password" id="password-input" required autocomplete="current-password">
                                                <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                            </div>
                                         </div> 
                                      
                                        <div class="form-check">
                                            <input class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" type="checkbox" id="auth-remember-check" name='remember' >
                                            <label class="form-check-label" for="auth-remember-check">Remember me</label>
                                        </div>
                                           <br>
                                        <div class="mb-3">
                                        @if (Route::has('password.request'))
                                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                                {{ __('Forgot your password?') }}
                                            </a>
                                        @endif
                                        </div>
                                       

                                        
                                        <div class="mt-4"> 
                                            <button class="btn btn-success w-100" style="background:#3f8335;" type="submit">Sign In</button>
                                        </div>
                                    </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->

                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->

        <!-- footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <p class="mb-0">&copy;
                            <script>
                                document.write(new Date().getFullYear())
                            </script> Divya Digital. All rights reserved. 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->
    </div>
    <!-- end auth-page-wrapper -->

    <script type='text/javascript'>document.addEventListener('DOMContentLoaded', function () {window.setTimeout(document.querySelector('svg').classList.add('animated'),1000);})</script>
    

    <!-- JAVASCRIPT -->
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>

    <!-- password-addon init -->
    <script src="{{ asset('assets/js/pages/password-addon.init.js') }}"></script>
</body>

</html>