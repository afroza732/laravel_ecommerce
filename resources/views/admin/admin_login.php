<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>SB Admin - Login</title>

        <!-- Custom fonts for this template-->
        <link href="{{asset('public/admin_assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

        <!-- Custom styles for this template-->
        <link href="{{asset('public/admin_assets/css/sb-admin.css')}}" rel="stylesheet">

    </head>

    <body class="bg-dark">

        <div class="container">
            <div class="card card-login mx-auto mt-5">
                <div class="card-header">Login</div>
                <h3 align ="center" style="color: red; font-size: 13px">
                    <?php
                    $message = Session::get('exception');
                    if (isset($message)) {
                        echo $message;
                        Session::put('exception', '');
                    }
                    ?> 
                </h3>

                <div class="card-body">
                    {!! Form::open(array('url'=>'/dashboard','method'=>'post')) !!}
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="email" name="admin_email" id="inputEmail" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
                            <label for="inputEmail">Email address</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
                            <label for="inputPassword">Password</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="remember-me">
                                Remember Password
                            </label>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-primary px-4" value="Log in" />
                    </form>
                    <div class="text-center">
                        <a class="d-block small mt-3" href="register.html">Register an Account</a>
                        <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="{{asset('public/admin_assets/vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('public/admin_assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

        <!-- Core plugin JavaScript-->
        <script src="{{asset('public/admin_assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    </body>

</html>
