<?php
/**
 * Created by PhpStorm.
 * User: JaimeMoreno
 * Date: 18/10/2015
 * Time: 11:15 AM
 */
?>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Dashboard</a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">

            @if (Auth::guest())
            <li><a href="{{ url('/auth/login') }}">Login</a></li>
            <li><a href="{{ url('/auth/register') }}">Register</a></li>
            @else
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{ Auth::user()->name}}  {{Auth::user()->last     }} <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{route('administrador.users.profile', Auth::user()->id)}}"><i class="fa fa-fw fa-user"></i>Profile</a>
                    </li>
                    <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
                </ul>

            </li>
            @endif
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li class="active">
                    <i class="fa fa-fw fa-dashboard"></i> Dashboard
                </li>
                <li>
                    <a href="{{route('administrador.users.profile', Auth::user()->id)}}"><i class="glyphicon glyphicon-user"></i> Perfil</a>
                </li>
                <li>
                    <a href="{{route('administrador.users.index', Auth::user()->id)}}"><i class="fa fa-fw fa-users"></i> Usuarios</a>
                </li>
                <li>
                    <a href="{{route('productos.listaproduct')}}"><i class="glyphicon glyphicon-list-alt"></i> Productos</a>
                </li>
                <li>
                    <a href="{{route('administrador.contactanos.index')}}"><i class="glyphicon glyphicon-envelope"></i>Contactanos</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper"  style=" padding: 20px;  min-height: 90vh;">

        <div class="container-fluid">

            @yield('content')
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->