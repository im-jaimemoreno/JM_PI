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
                    <div class="panel-body">
                        @foreach($contactanos as $contacto)
                            <div>{!! $contacto->adress !!}</div>
                            <div>{!! $contacto->mobile !!}</div>
                            <div>{!! $contacto->phone !!}</div>
                            <div>{!! $contacto->mail !!}</div>
                            <div>{!! $contacto->facebook !!}</div>
                            <div>{!! $contacto->twitter !!}</div>
                            <div>{!! $contacto->pinterest !!}</div>
                        @endforeach
                        {!! $contactanos->render()!!}
                    </div>
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
