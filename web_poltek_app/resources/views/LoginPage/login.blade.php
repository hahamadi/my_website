<!DOCTYPE html>
<html lang="en">

<head>
    <title>Poltek Nuklir - Login</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Elite Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, Elite Able, Elite Able bootstrap admin template">
    <meta name="author" content="Codedthemes" />

    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('LoginPageAssets/assets/images/POLTEK NUKLIR 4.png') }}" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="{{ asset('LoginPageAssets/assets/fonts/fontawesome/css/fontawesome-all.min.css') }}">
    <!-- animation css -->
    <link rel="stylesheet" href="{{ asset('LoginPageAssets/assets/plugins/animation/css/animate.min.css') }}">
    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset('LoginPageAssets/assets/css/style.css') }}">

</head>

<body>
    <div class="auth-wrapper">
        <div class="auth-content container">
            <div class="card">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="card-body">
                            <img src="{{ asset('LoginPageAssets/assets/images/POLTEK NUKLIR 4_resize_2.png') }}" alt="" class="img-fluid mb-4">
                            
                            <h4 class="mb-3 f-w-400">Login into your account</h4>
                            @if ($errors->has('captcha'))
                                <div class="input-group mb-2">
                                    <span class="error" style="color:red">Invalid captcha result</span>
                                </div>
                            @endif
                            @if(Session::has('success'))
                                <div class="input-group mb-2">
                                    <span class="alert alert-success" style="color:red">
                                      {{ Session::get('success') }}
                                    </span>
                                </div>
                            @endif
                            @if(Session::has('error'))
                                <div class="input-group mb-2">
                                     <span class="alert alert-success" style="color:red">
                                        {{ Session::get('error') }}
                                    </span>
                                </div>
                            @endif
                            <form action="{{ route('login') }}" class="signin" method="POST">
                                @csrf
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="feather icon-mail"></i></span>
                                    </div>
                                    <input type="email" name="email" class="form-control" placeholder="Email address" required>
                                </div>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="feather icon-lock"></i></span>
                                    </div>
                                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                                </div>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span id="captcha_span">{!! captcha_img() !!}</span>
                                        <a id="reload" href="#">&#x21bb;</a>
                                    </div>                             
                                </div>
                                <div class="input-group mb-2">
                                    <input type="text" name="captcha" placeholder="Answer" required>
                                </div>
                            
                            <button type="Submit" class="btn btn-primary shadow-2 mb-4">Sign in</button>
                            <p class="mb-2">back to home <a href="/" class="f-w-400">home</a></p>
                        </div>
                    </div>
                    </form>
                    <div class="col-md-6 d-none d-md-block">
                        <img src="https://lh3.googleusercontent.com/drive-viewer/AEYmBYRCPyVejM_CgUnREzz_PUyeipC9Z3ziyMu__bCRm_WN9DhXOjVnD9385OnjKTyVl7vldPc6CvNzTSqcuKs8c0hFS-i6jw=s1600" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="footer mt-5">
                <p class="text-center">Made with <i class="fas fa-heart"></i> by <a href="" target="_blank">UPT TIK</a></p>
            </div>
        </div>
    </div>

    <!-- Required Js -->
    <script src="{{ asset('LoginPageAssets/assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('LoginPageAssets/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('LoginPageAssets/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script>
        $('#reload').click(function(){
            $.ajax({
               type:'GET',
               url:'reload-captcha',
               success:function(data){
                //console.log(data.captcha);
                $("#captcha_span").html(data.captcha);
                }
                  //
               });
        });
    </script>
</body>

</html>
