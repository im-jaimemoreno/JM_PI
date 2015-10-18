@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">
					<b>Editando Perfil</b>
					<a class="pull-right" href="{{route('admin.users.profile', $user->id)}}"><img src="{{asset('images/btn-back.png')}}" alt="" style="  width: 25px;"></a>
				</div>
				@if(Session::has('message'))
					<p class="alert alert-success">{{Session::get('message')}}</p>
				@endif
				<div class="panel-body">
					  <div class="container">
					    <div class="col-lg-8">
					    <br>
					        <img src="{{asset($profile->photo)}}" id="profileImage" class="col-lg-3">
					        <div class="col-lg-9">
						        <input type="file" id="profilePicture" name="profilePicture" onchange="changeProfilePicture()">
						        <br>
						        <label for="bio"> Biografía </label>
						        <textarea id="bio" name="bio" rows=5 cols=80 >{{$profile->bio}}</textarea>
						        <label for="twetter"> Twitter </label>
						        <textarea id="twetter" name="tweeter" rows=2 cols=80 >{{$profile->tweeter}}</textarea>
						        <label for="facebook"> Facebook </label>
						        <textarea id="facebook" name="facebook" rows=2 cols=80 >{{$profile->facebook}}</textarea>		
						        <label for="website"> Website </label>
						        <textarea id="website" name="website" rows=2 cols=80 >{{$profile->website}}</textarea>				
						        <div id="mediaProgress" class="progress progress-striped active" style="display: none">
						            <div id="progressBar" class="progress-bar progress-bar-primary"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
						                <span class="sr-only">45% Complete</span>
						            </div>
						        </div>						        		        

						        <button type="button" id="uploadButton" class="btn btn-primary disabled pull-right" onclick="uploadProfilePicture()">Upload</button>
					        </div>
					    </div>
					    <div class="col-lg-6">
					    	
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
</script>
@endsection
