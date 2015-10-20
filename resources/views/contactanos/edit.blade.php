@extends('app')
@section('styles')
    input {
        padding: 10px;
        margin: 5px 5px;
    }
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <b>Editando Contacto</b>
                        <a class="pull-right" href="{{route('administrador.contactanos.index')}}"><img src="{{asset('images/btn-back.png')}}" alt="" style="  width: 25px;"></a>
                    </div>
                    @if(Session::has('message'))
                        <p class="alert alert-success">{{Session::get('message')}}</p>
                    @endif
                    <div class="panel-body">
                        <div class="container">
                            <div class="col-lg-8">
                                <br>

                                <div class="col-lg-9">
                                    {!!  Form::model($contacto, ['method' => 'PUT', 'route' => ['administrador.contactanos.update', $user_id], 'class' => 'form-horizontal','id' => 'editForm', 'files' => true]) !!}
                                    <br>
                                    <div class="adress">
                                        <label for="adress" class="col-md-4"> Dirección </label>
                                        <input id="adress" name="adress" class="col-md-5" rows=5 cols=80 value="{{$contacto->adress}}">
                                    </div>
                                    <div class="adress">
                                        <label for="mobile" class="col-md-4"> Movíl </label>
                                        <input id="mobile" name="mobile"  class="col-md-5"rows=5 cols=80 value="{{$contacto->mobile}}">
                                    </div>
                                    <div class="phone">
                                        <label for="phone" class="col-md-4"> Teléfono </label>
                                        <input id="phone" name="phone" class="col-md-5" rows=5 cols=80 value="{{$contacto->phone}}">
                                    </div>
                                    <div class="mail">
                                        <label for="mail" class="col-md-4"> Correo </label>
                                        <input id="mail" name="mail" class="col-md-5" rows=5 cols=80 value="{{$contacto->mail}}">
                                    </div>
                                    <div class="facebook">
                                        <label for="facebook" class="col-md-4"> Facebook </label>
                                        <input id="facebook" name="facebook" class="col-md-5" rows=5 cols=80 value="{{$contacto->facebook}}">
                                    </div>
                                    <div class="twitter">
                                        <label for="twitter" class="col-md-4"> Twitter </label>
                                        <input id="twitter" name="twitter" class="col-md-5" rows=5 cols=80 value="{{$contacto->twitter}}">
                                    </div>

                                    <div class="pinterest">
                                        <label for="pinterest" class="col-md-4"> Pinterest </label>
                                        <input id="pinterest" name="pinterest" class="col-md-5" rows=5 cols=80 value="{{$contacto->pinterest}}">
                                    </div>
                                    <div class="guardar">
                                        <input class="btn btn-info" style="margin:20px; float:right;" type="submit" value="Guardar")>
                                    </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        var Pgb =  function(elem) {
            this.elem = elem;

            var _this = this;
            this.progressHandler = function(event) {
                _this.elem.value = event.loaded/event.total * 100;
            }
        }
        function changeProfilePicture(){
            var selectImg = $('#profilePicture')[0].files[0];
            if(selectImg){
                var previewID = document.getElementById('profileImage');
                previewID.src = ' ';

                var oReader = new FileReader();
                oReader.onload = function (e)
                {
                    previewID.src=e.target.result;
                }
                oReader.readAsDataURL(selectImg);

                $('#uploadButton').removeClass('disabled');
            }
        }
        function uploadProfilePicture(){
            var file2 = document.getElementById('profilePicture').files[0];
            var ext = file2.type;
            var bio = $('#bio').val();
            var facebook = $('#facebook').val();
            var twetter = $('#twetter').val();
            var website = $('#website').val();

            var formdata = new FormData();
            formdata.append("photo", file2);
            formdata.append("ext", ext);
            formdata.append("bio", bio);
            formdata.append("twetter", twetter);
            formdata.append("facebook", facebook);
            formdata.append("website", website);

            var pgb1 = new Pgb(document.getElementById("progressBa"));

            var ajax = new XMLHttpRequest();
            //ajax.upload.addEventListener("progress", pgb1.progressHandler, false);
            //ajax.addEventListener("load", completeHandler, false);
            ajax.open("POST", "../../../../images");
            ajax.send(formdata);
        }
        $("document").ready(function() {

            /*$('form#frm button[type=submit]').click(function(e){
             e.preventDefault();
             var form = $(this).parents("form:first");
             var dataString = form.serialize();
             var base_url = 'http://localhost';
             //var username = $("input#test").val();
             //var token = $("input[name=_token]").val();

             //console.log(form);
             $.ajax({
             type: "POST",
             url: base_url + "/users/profile/update",
             data: dataString,
             success: function (data) {
             console.log(data);
             }
             });
             });*/
            $('.update').click(function(e) {
                e.preventDefault();

                var url             = "http://localhost/users/profile/update";
                var $post             = {};
                $post.test            = $(this).attr('test');


                $.ajax({
                    type: "POST",
                    url: url,
                    data: $post,
                    cache: false,
                    success: function(data){
                        return data;
                    }
                });
                return false;
            });
        });
    </script>
@endsection
