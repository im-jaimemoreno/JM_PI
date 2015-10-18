<?php
/**
 * Created by PhpStorm.
 * User: JaimeMoreno
 * Date: 19/10/2015
 * Time: 10:35 AM
 */
?>
@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">

                    <div class="panel-heading">
                        <b style="display:inline-block;">Nuevo Usuario</b>
                        @include('administrador.partials.back')
                    </div>


                    <div class="panel-body">
                        {!! Form::open(['route' => 'administrador.users.store' , 'method' =>'POST'])!!}
                        <div class="col-md-12">
                            @include('administrador.partials.forms')
                            <button type="submit" class="btn btn-info">Crear registro</button>
                        </div>
                        {!! Form::close()!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
