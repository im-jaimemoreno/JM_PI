@extends('app')

@section('content')
    <div class="container">
        <h1>Editar Contenido Página</h1>
        <div class="row text-center">
            <div class="col-md-4">
                <img src="{{route('masterpagehero', $masterpage[0]->id)}}" id="profileImage" style="width: 300px;">
                <div><input type="file" id="profilePicture" name="profilePicture" onchange="changeProfilePicture()" style="float: right; padding: 5px 10px; background: #E2DFDF; margin: 0px 10px;    font-size: 11px;    color: #2F2F2F;"></div>
            </div>
            <div class="col-md-4">
                <img src="{{route('masterpagehero', $masterpage[1]->id)}}" id="profileImage"  style="width: 300px;">
                <div><input type="file" id="profilePicture" name="profilePicture" onchange="changeProfilePicture()" style="float: right; padding: 5px 10px; background: #E2DFDF; margin: 0px 10px;    font-size: 11px;    color: #2F2F2F;"></div>
            </div>
            <div class="col-md-4">
                <img src="{{route('masterpagehero', $masterpage[2]->id)}}" id="profileImage"  style="width: 300px;">
                <div><input type="file" id="profilePicture" name="profilePicture" onchange="changeProfilePicture()" style="float: right; padding: 5px 10px; background: #E2DFDF; margin: 0px 10px;    font-size: 11px;    color: #2F2F2F;"></div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-4">

            </div>
        </div>

    </div>
@endsection
@@section('scripts')
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