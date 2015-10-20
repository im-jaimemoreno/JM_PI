<?php
/**
 * Created by PhpStorm.
 * User: JaimeMoreno
 * Date: 18/10/2015
 * Time: 10:36 AM
 */
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8_spanish_ci" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    {!! Html::style('assets/css/bootstrap.css') !!}
    {!! Html::style('assets/css/sb-admin.css') !!}
    {!! Html::style('assets/css/plugins/morris.css') !!}
    {!! Html::style('assets/font-awesome/css/font-awesome.min.css') !!}


            <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
@include('dashboard.dashboard')


        <!-- Scripts -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>


{!! Html::script('assets/js/morris/raphael.min.js')!!}
{!! Html::script('assets/js/morris/morris.min.js')!!}
{!! Html::script('assets/js/morris/morris-data.js')!!}
@yield('scripts')

</body>
</html>
