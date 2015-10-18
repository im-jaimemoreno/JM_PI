@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">
					<b>Perfil</b>
					@include('admin.partials.back')
				</div>
				@if(Session::has('message'))
					<p class="alert alert-success">{{Session::get('message')}}</p>
				@endif
				<div class="panel-body">
					<div class="profile-pic" style=" padding:20px;">
						<img src="{{asset($profile->photo)}}" alt="" style="width: 150px;  border: 1px solid black;">
					</div>
					
					<div class="name">
						<div class="col-md-4">Nombre:</div>
						<p class="col-md-6">{{$user->name}} {{$user->last}}</p>
					</div>
					<div class="bio">
						<div class="col-md-4">Biografía:</div>
						<p class="col-md-6">{{$profile->bio}}</p>
					</div>
					<div class="twitter">
						<div class="col-md-4">Twitter:</div>
						<p class="col-md-6">{{$profile->tweeter}}</p>
					</div>
					<div class="facebook">
						<div class="col-md-4">Facebook:</div>
						<p class="col-md-6">{{$profile->facebook}}</p>
					</div>
					<div class="website">
						<div class="col-md-4">Website:</div>
						<p class="col-md-6">{{$profile->website}}</p>
					</div>
				</div>
				<div class="btn-edit" style="text-align:right;">
					<a class="btn btn-info" style="margin:20px;" href="{{Route('admin.users.profile.edit', $profile->id)}}">Editar</a>
				</div>
				
			</div>
		</div>
	</div>
</div>
@endsection

