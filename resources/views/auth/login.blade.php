<?php
/**
 * Created by PhpStorm.
 * User: JaimeMoreno
 * Date: 18/10/2015
 * Time: 11:26 AM
 */
?>
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LOGIN</title>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../assets/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../assets/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/login.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class='col-md-3'></div>
        <div class="col-md-6">
            <div class="login-box well">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <legend>Sign In</legend>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="input-group">
                        <div class="checkbox">
                            <label>
                                <input id="login-remember" type="checkbox" name="remember" value="1"> Recordarme
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-default btn-login-submit btn-block m-t-md" value="Login" />
                    </div>
                    <span class='text-center'><a href="/resetting/request" class="text-sm">Olvidaste la contraseña?</a></span>
                </form>

            </div>
        </div>
        <div class='col-md-3'></div>
    </div>
</div>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="../assets/js/plugins/morris/raphael.min.js"></script>
<script src="../assets/js/plugins/morris/morris.min.js"></script>
<script src="../assets/js/plugins/morris/morris-data.js"></script>


</body>

</html>
