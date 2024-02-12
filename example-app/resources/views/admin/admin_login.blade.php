<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Rethouse - Real Estate HTML Template">
    <meta name="keywords" content="Real Estate, Property, Directory Listing, Marketing, Agency" />
    <meta name="author" content="mardianto - retenvi.com">
    <title>Riley's Real Estate</title>

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link rel="manifest" href="site.webmanifest">
    <!-- favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="icon.png">
    <meta name="theme-color" content="#3454d1">
    <link href="{{ asset('site/assets/css/styles.css') }}" rel="stylesheet">
</head>

<body>
    <!-- HEADER -->

    <div class="clearfix"></div>

    <!-- LISTING LIST -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Form Login -->
                    <div class="card mx-auto" style="max-width: 380px;">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Sign in</h4>
                            <form method="POST" action="{{  route('login')  }}">
                                @csrf
                                <a href="#" class="btn btn-facebook btn-block mb-2 text-white"> <i
                                        class="fa fa-facebook"></i> &nbsp; Sign
                                    in
                                    with
                                    Facebook</a>
                                <a href="#" class="btn btn-primary btn-block mb-4"> <i
                                        class="fa fa-google"></i> &nbsp;
                                    Sign in with
                                    Google</a>
                                <div class="form-group">

                                    <input type="text" class="form-control" name="login" id="login" placeholder="Email">
                                </div> <!-- form-group// -->
                                <div class="form-group">


                        <input type="password" class="form-control" id="password" name='password'autocomplete="current-password" placeholder="Password">
                                </div> <!-- form-group// -->

                                <div class="form-group">
                                    {{-- <a href="#" class="float-right">Forgot password?</a> --}}
                                    <label class="float-left custom-control custom-checkbox">
                                         <input type="checkbox"
                                            class="custom-control-input" checked="" id="authCheck">
                                        <span class="custom-control-label" for="authCheck"> Remember Me </span>
                                    </label>
                                </div> <!-- form-group form-check .// -->
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block"> Login </button>
                                </div> <!-- form-group// -->
                            </form>
                        </div> <!-- card-body.// -->
                    </div> <!-- card .// -->

                    <p class="text-center mt-4">Don't have account? <a href="#">Sign up</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- END LISTING LIST -->



    <!-- CALL TO ACTION -->

    <!-- END CALL TO ACTION -->

    <!-- Footer  -->
 @include('body.footer')






    <!-- SCROLL TO TOP -->
    <a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up"></i></a>
    <!-- END SCROLL TO TOP -->
    <script src="./js/index.bundle.js?8918068d71def746395d"></script>
</body>

</html>
