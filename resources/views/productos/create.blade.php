@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <b>Perfil</b>
                        @include('productos.partials.back')
                    </div>
                    <div class="container">
                        @if(Session::has('message'))
                            <p class="alert alert-success">{{Session::get('message')}}</p>
                        @endif
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-2 col-lg-offset-2 toppad" style="padding:10px 0px;" >
                                <div class="panel panel-info">
                                    <div class="panel-body">
                                        {!!  Form::open(['route' => 'productos.listaproduct.store' , 'method' =>'POST', 'class' => 'form-horizontal','id' => 'editForm', 'files' => true]) !!}
                                        <div class="panel-body">
                                            <div class="row text-center">
                                                <div class="row image-here">
                                                    <img src="" id="profileImage" style="width: 200px;">
                                                </div>
                                                <div class="row"><input type="file" id="profilePicture" name="profilePicture" onchange="changeProfilePicture()" style=" padding: 5px 10px; background: #E2DFDF;    font-size: 11px;    color: #2F2F2F;     margin: 20px auto 0 auto;"></div>
                                            </div>
                                            <br>
                                            <div class="row text-center">
                                                <table class="table table-bordered table-striped table-hover">
                                                    <tbody>
                                                    <tr>
                                                        <td>Referencia</td>
                                                        <td><input type="text" id="Referencia" name="Referencia" value="" style=" border: 1px solid #E4E4E4; width:100%; "></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Marca</td>
                                                        <td><input type="text" id="Marca" name="Marca" value="" style=" border: 1px solid #E4E4E4; width:100%;"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Descripción</td>

                                                        <td><textarea name="Descripcion" id="Descripcion" class="form-control" rows="5"  style=" border: 1px solid #E4E4E4; width:100%;" ></textarea></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Precio</td>
                                                        <td><input type="text" id="Precio" name="Precio" value="" style=" border: 1px solid #E4E4E4; width:100%; "></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="panel-footer">
											<span>
												<input type="submit" data-original-title="Edit" data-toggle="tooltip" value="Guardar"class="btn btn-sm btn-success">
											</span>
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
                    if($('.name_add').text() == 'Jaime Moreno'){
                        $('.name_add').html('<i class="glyphicon glyphicon-sunglasses"></i>'+$('.name_add').html()+'</b>');
                    }
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