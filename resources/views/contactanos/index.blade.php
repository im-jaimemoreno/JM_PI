@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <b>Contacto</b>
                    </div>
                    @if(Session::has('message'))
                        <p class="alert alert-success">{{Session::get('message')}}</p>
                    @endif
                    @foreach($contactanos as $contacto)
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-2 col-lg-offset-2 toppad" style="padding:10px 0px;" >
                            <div class="panel panel-info">
                                <div class="panel-body">
                                    <div class="row text-center">
                                        <table class="table table-bordered table-striped table-hover">
                                            <tbody>
                                            <tr>
                                                <td><i class="fa fa-map-marker" style="font-size:30px;"></i></td>
                                                <td>{!! $contacto->adress !!}</td>
                                            </tr>
                                            <tr>
                                                <td><i class="fa fa-mobile" style="font-size:30px;"></i></td>
                                                <td>{!! $contacto->mobile !!}</td>
                                            </tr>
                                            <tr>
                                                <td><i class="fa fa-phone-square" style="font-size:30px;"></i></td>
                                                <td>{!! $contacto->phone !!}</td>
                                            </tr>
                                            <tr>
                                                <td><i class="fa fa-facebook" style="font-size:30px;"></i></td>
                                                <td>{!! $contacto->mail !!}</td>
                                            </tr>
                                            <tr>
                                                <td><i class="fa fa-twitter" style="font-size:30px;"></i></td>
                                                <td>{!! $contacto->twitter !!}</td>
                                            </tr>
                                            <tr>
                                                <td><i class="fa fa-pinterest" style="font-size:30px;"></i></td>
                                                <td>{!! $contacto->pinterest !!}</td>
                                            </tr>


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="btn-edit" style="text-align:right;">
                                    <a class="btn btn-info" style="margin:20px;" href="{{Route('administrador.contactanos.edit', $contacto)}}">Editar</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        $(document).ready(function(){
            $('.btn-delete').click(function(){
                var row = $(this).parents('tr');
                var id = row.data('id');
                var form =$('#form-delete');
                var url = form.attr('action').replace(':USERS_ID',id);
                var data = form.serialize();
                //alert(url);
                //alert(row);
                //console.log(id);
                row.fadeOut();

                $.post(url, data, function(result){
                    //alert(result.message);
                }).fail(function(){
                    //alert('El usuario no fue eliminado');
                    row.show();
                });


            });

        });
    </script>
@endsection
