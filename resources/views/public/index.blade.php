<?php
    header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Document</title>
    {!! Html::style('assets/css/bootstrap.css') !!}
    {!! Html::style('assets/css/app.css') !!}
    {!! Html::style('assets/css/style.css') !!}
    {!! Html::style('assets/font-awesome/css/font-awesome.min.css') !!}
    {!! Html::script('assets/js/jquery.js')!!}
    {!! Html::script('assets/js/masonry.pkgd.min.js')!!}
    {!! Html::script('assets/js/app.js')!!}

</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <nav class="navbar  navbar-fixed-top">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header page-scroll">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#contact">Jaime Moreno</a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="hidden">
                                <a href="#home"></a>
                            </li>
                            <li class="page-scroll">
                                <a href="#home">Home</a>
                            </li>
                            <li class="page-scroll">
                                <a href="#productos">productos</a>
                            </li>
                            <li class="page-scroll">
                                <a href="#contact">Contacto</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>
        </div>
    </div>
</div>
<section class="primary" id="home">
    <header id="page-top">

        <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">


            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#bs-carousel" data-slide-to="1"></li>
                <li data-target="#bs-carousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item slides active">
                    <div class="hero">
                        <hgroup>
                            <h1>{{$pagemaster[0]->Title}}</h1>
                            <h3>{{$pagemaster[0]->content}}</h3>
                        </hgroup>
                        <button class="btn btn-hero btn-lg" role="button">Boton dummy</button>
                    </div>
                    <!-- Overlay -->
                    <div class="overlay"></div>
                    <img src="{{route('photohero', $pagemaster[0]->id)}}">
                </div>
                <div class="item slides ">
                    <div class="hero">
                        <hgroup>
                            <h1>{{$pagemaster[1]->Title}}</h1>
                            <h3>{{$pagemaster[1]->content}}</h3>
                        </hgroup>
                        <button class="btn btn-hero btn-lg" role="button">Boton dummy</button>
                    </div>
                    <!-- Overlay -->
                    <div class="overlay"></div>
                    <img src="{{route('photohero', $pagemaster[1]->id)}}">
                </div>
                <div class="item slides ">
                    <div class="hero">
                        <hgroup>
                            <h1>{{$pagemaster[2]->Title}}</h1>
                            <h3>{{$pagemaster[2]->content}}</h3>
                        </hgroup>
                        <button class="btn btn-hero btn-lg" role="button">Boton dummy</button>
                    </div>
                    <!-- Overlay -->
                    <div class="overlay"></div>
                    <img src="{{route('photohero', $pagemaster[2]->id)}}">
                </div>

            </div>
        </div>

    </header>
</section>
<div class="content-wrapper">
    <section class="primary" id="productos">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>PRODUCTOS</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="grid">
                    <div class="col-md-12">
                        @foreach($productos as $producto)
                        <div class="grid-sizer">
                        <div class="col-sm-6 col-md-4">
                            <div class="thumbnail" >
                                <h4 class="text-center"><span class="label label-info">{{$producto->Marca}}</span></h4>
                                <img src="{{route('productos.listaproduct.photo', $producto->Thumbnail)}}" id="profileImage" class="img-responsive  style="width: 200px;">
                                <div class="caption">
                                    <div class="row">
                                        <div class="col-md-6 col-xs-6">
                                            <h3>{{$producto->Referencia}}</h3>
                                        </div>
                                        <div class="col-md-6 col-xs-6 price">
                                            <h3>
                                                <label>${{$producto->Precio}}</label></h3>
                                        </div>
                                    </div>
                                    <p class="descripcion">{{$producto->Descripcion}}</p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <a class="btn btn-primary btn-product"><span class="glyphicon glyphicon-thumbs-up"></span> Like</a>
                                        </div>
                                        <div class="col-md-6">
                                            <a href="#" class="btn btn-success btn-product"><span class="glyphicon glyphicon-shopping-cart"></span> Buy</a></div>
                                    </div>

                                    <p> </p>
                                </div>
                            </div>
                        </div>
                        </div>
                        @endforeach


                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>About</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p>Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional LESS stylesheets for easy customization.</p>
                </div>
                <div class="col-lg-4">
                    <p>Whether you're a student looking to showcase your work, a professional looking to attract clients, or a graphic artist looking to share your projects, this template is the perfect starting point!</p>
                </div>
            </div>
        </div>
    </section>
    <section class="primary" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>CONTACTANOS</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="well well-sm">
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">
                                                Nombre</label>
                                            <input type="text" class="form-control" id="name" placeholder="Nombre" required="required" />
                                        </div>
                                        <div class="form-group">
                                            <label for="email">
                                                Email</label>
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                                </span>
                                                <input type="email" class="form-control" id="email" placeholder="Email" required="required" /></div>
                                        </div>
                                        <div class="form-group">
                                            <label for="subject">
                                                Asunto</label>
                                            <select id="subject" name="subject" class="form-control" required="required">
                                                <option value="na" selected="">Seleccione:</option>
                                                <option value="service">General</option>
                                                <option value="suggestions">Sugerencias</option>
                                                <option value="product">Soporte</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">
                                                Mensaje</label>
                                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                                      placeholder="Mensaje"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                                            Enviar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <form>
                            @foreach($contactanos as $contacto)
                            <legend><span class="glyphicon glyphicon-globe"></span>Mis datos</legend>
                            <address>
                                <strong>{{$contacto->adress}}</strong><br>
                                {{$contacto->phone}}<br>
                                {{$contacto->mobile}}<br>
                                <abbr title="Phone">{{$contacto->facebook}}</abbr>
                            </address>
                            <address>
                                <strong>Email</strong><br>
                                <a href="mailto:#">{{$contacto->mail}}</a>
                            </address>
                            @endforeach
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <footer  style="min-height: 50px; background-color:#353C3A;color:#fff;text-align:center;padding: 20px 0px;">
        JAIME MORENO - INGENIERO EN MULTIMEDIA - DEV BACKEND - 2015
    </footer>
</div>
{!! Html::script('assets/js/bootstrap.min.js')!!}
</body>
</html>

