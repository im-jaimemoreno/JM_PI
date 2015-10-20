@extends('app')

<style>
    html, body {
        height: 100%;
    }

    body {
        margin: 0;
        padding: 0;
        width: 100%;
        color: #B0BEC5;
        display: table;
        font-weight: 100;

    }

    .container {
        /*text-align: center;*/
        display: table-cell;
        vertical-align: middle;
    }

    .content {
        /*text-align: center;*/
        display: inline-block;
    }

    .title {
        font-size: 36px;
        margin-bottom: 40px;
        font-family: 'Lato';
    }
    .msg{

    }
</style>

@section('content')
    <div class="content" style="float:right; padding: 20px; background: #E4E4E4; box-shadow: rgba(0, 0, 0, 0.19) 3px 5px 18px 1px;">
        <div class="title">Bienvenido {{ Auth::user()->name }} {{ Auth::user()->last }},</div>
        <div class="msg">
            Esta es una prueba, tienes un rol de <b>{{ Auth::user()->type }}</b> puedes:
            <lo>
                <li>Editar tu perfil</li>
                <li>Insertar, editar y eliminar a otros usuarios</li>
                <li>Editar perfiles de otros usuarios</li>
                <li>Insertar, editar y eliminar a productos en el sistema</li>
                <li>Insertar, editar y eliminar la información de contacto</li>
            </lo>
        </div>
    </div>
@endsection
@section('scripts')
@endsection