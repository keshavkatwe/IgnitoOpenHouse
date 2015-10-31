<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ignito OpenHouse | Dashboard</title>

        @include ('layout.header')

    </head>


    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="../../index2.html"><b>Ignito</b>OpenHouse</a>
            </div><!-- /.login-logo -->
            <div class="login-box-body">
                <p class="login-box-msg">Sign in to start your session</p>
                <form action="<?php echo url('auth/login') ?>" method="post" >
                     {!! csrf_field() !!}
                    <div class="form-group has-feedback">
                        <input type="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="Email">
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <div class="col-xs-8">
                            <div class="checkbox icheck">
                                <label>
                                    <input type="checkbox"  name="remember"> Remember Me
                                </label>
                            </div>
                        </div><!-- /.col -->
                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                        </div><!-- /.col -->
                    </div>
                </form>

                

                <!--<a href="#">I forgot my password</a><br>-->
                <a href="{{ url('auth/register')}}" class="text-center">Register a new membership</a>

            </div><!-- /.login-box-body -->
        </div><!-- /.login-box -->





        @include ('layout.jsfooter')
        <!-- iCheck -->
        <script src="{{ url('assets/plugins/iCheck/icheck.min.js') }}"></script>
        <script>
            $(function () {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' // optional
                });
            });
        </script>

    </body>
</html>