@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <b>Usuarios</b>
                    </div>
                    @if(Session::has('message'))
                        <p class="alert alert-success">{{Session::get('message')}}</p>
                    @endif
                    <p class="alert alert-success"></p>
                    <div class="panel-body">

                        <p>
                            <a href="{{ route('administrador.users.create')}}" style="float: right; margin: 10px;" class="btn btn-info" role="button">Nuevo Usuario</a>
                        </p>
                        @include('administrador.partials.list')
                        {!! $users->render()!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    {!!Form::open(['route'=>['administrador.users.destroy', ':USERS_ID'], 'method'=>'DELETE', 'id' =>'form-delete'])!!}
    {!!Form::close()!!}
@endsection

@section('scripts')
    <script>
        $(document).ready(function(){
            $('.alert-success').hide();
            $('.btn-delete').click(function(){
                var row = $(this).parents('tr');
                var id = row.data('id');
                if( id != 1){

                    var form =$('#form-delete');
                    var url = form.attr('action').replace(':USERS_ID',id);
                    var data = form.serialize();

                    row.fadeOut();

                    $.post(url, data, function(result){
                        $('.alert-success').text('El usuario no fue eliminado');
                        $(".alert-success").show().delay(2000).fadeOut();
                    }).fail(function(){
                        alert('El usuario no fue eliminado');
                        row.show();
                    });
                }
                else{

                    $('.alert-success').text('Este usuario no debe ser borrado');
                    $(".alert-success").show().delay(2000).fadeOut();

                }

            });

        });
    </script>
@endsection
