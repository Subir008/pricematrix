<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Fastkart admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Fastkart admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../../assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../../assets/images/favicon.png" type="image/x-icon">
    <title>PriceMatrix - Login</title>

    <!-- Google font-->
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">

    <!-- Linear Icon css -->
    <link rel="stylesheet" href="../../assets/css/linearicon.css">

    <!-- fontawesome css -->
    <link rel="stylesheet" type="text/css" href="../../assets/css/vendors/font-awesome.css">

    <!-- Themify icon css-->
    <link rel="stylesheet" type="text/css" href="../../assets/css/vendors/themify.css">

    <!-- ratio css -->
    <link rel="stylesheet" type="text/css" href="../../assets/css/ratio.css">

    <!-- remixicon css -->
    <link rel="stylesheet" type="text/css" href="../../assets/css/remixicon.css">

    <!-- Feather icon css-->
    <link rel="stylesheet" type="text/css" href="../../assets/css/vendors/feather-icon.css">

    <!-- Plugins css -->
    <link rel="stylesheet" type="text/css" href="../../assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/vendors/animate.css">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="../../assets/css/vendors/bootstrap.css">

    <!-- vector map css -->
    <link rel="stylesheet" type="text/css" href="../../assets/css/vector-map.css">

    <!-- Slick Slider Css -->
    <link rel="stylesheet" href="../../assets/css/vendors/slick.css">

    <!-- App css -->
    <link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
</head>

<body>
    <!-- log in section start -->
    <section class="log-in-section background-image-2 section-b-space">
        <div class="container-fluid-lg w-100">
            
            @if (session('name') || session('password'))
            
            <div class="alert alert-danger alert-dismissible fade show m-4" role="alert">
                <strong>Holy guacamole!</strong> {{ session('name') }}<br>{{ session('password') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            @if (session('failed'))
                <div class="alert alert-danger alert-dismissible fade show m-4" role="alert">
                    <strong class="fw-bold fs-5 "> {{ session('failed') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>            
            @endif

            <!-- @if (session('logout')) -->

            <!-- @endif -->

            <div class="row m-0">

                <div class="col-xxl-6 col-xl-5 col-lg-6 d-lg-block d-none ms-auto">
                    <div class="image-contain">
                        <img src="../assets/images/log-in.png" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-xxl-4 col-xl-5 col-lg-6 col-sm-8 mx-auto">
                    <div class="log-in-box">
                        <div class="log-in-title">
                            <h3>Welcome To PriceMatrix</h3>
                            <h4>Log In Your Account</h4>
                        </div>

                        <div class="input-box">
                            <form class="row g-4" method="post" action="login">
                                @csrf
                                <div class="col-12">
                                    <div class="form-floating theme-form-floating log-in-form">
                                        <input type="email" class="form-control" name="email" id="email"
                                            placeholder="Email Address" 
                                             value="{{ old('email') ?? '' }}"
                                            >
                                        <label for="email">Email Address / Contact Number</label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-floating theme-form-floating log-in-form">
                                        <input type="password" class="form-control" name="password" id="password"
                                            placeholder="Password" value="{{ old('password')  }}">
                                        <label for="password">Password</label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button class="btn btn-animation w-100 justify-content-center">Log
                                        In</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- log in section end -->


    <!-- latest js -->
    <script src="../assets/js/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap js -->
    <script src="../assets/js/bootstrap/bootstrap.bundle.min.js"></script>

    <!-- feather icon js -->
    <script src="../assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="../assets/js/icons/feather-icon/feather-icon.js"></script>

    <!-- Theme js -->
    <script src="../assets/js/script.js"></script>
</body>

</html>