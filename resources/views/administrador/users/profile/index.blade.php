@extends('app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">
						<b>Perfil</b>
						@include('administrador.partials.back')
					</div>
					<div class="container">
						@if(Session::has('message'))
							<p class="alert alert-success">{{Session::get('message')}}</p>
						@endif
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-2 col-lg-offset-2 toppad" style="padding:10px 0px;" >
								<div class="panel panel-info">
									<div class="panel-body">
										<div class="row text-center">
											<div class="col-md-4">
												<img src="{{route('administrador.users.profile.photo', $profile->photo)}}" alt="" class="img-circle" style="width: 100px; ">
											</div>
											<div class="name_add col-md-8" style="font-family: sans-serif; text-transform: uppercase; "><h3>{{$user->name}} {{$user->last}}</h3></div>
										</div>
										<br>
										<div class="row text-center">
											<table class="table table-bordered table-striped table-hover">
												<tbody>
												<tr>
													<td>Fecha de Nacimiento:</td>
													<td>{{$user->birthday}}</td>
												</tr>
												<tr>
													<td>Biografía:</td>
													<td>{{$profile->bio}}</td>
												</tr>
												<tr>
													<td>Twitter</td>
													<td>{{$profile->tweeter}}</td>
												</tr>
												<tr>
													<td>Facebook</td>
													<td>{{$profile->facebook}}</td>
												</tr>
												<tr>
													<td>Website</td>
													<td>{{$profile->website}}</td>
												</tr>
												<tr>
													<td>Email</td>
													<td><a href="{{$user->email}}">{{$user->email}}</a></td>
												</tr>
												<td>Phone Number</td>
												<td>
													<ul class="phone">
														<li>{{$user->phone}}</li>
													</ul>
												</td>

												</tr>

												</tbody>
											</table>
										</div>
									</div>
									<div class="panel-footer">
										<a href="{{Route('administrador.users.profile.edit', $profile->id)}}" data-original-title="Edit" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
									</div>

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
		$(document).ready(function(){
			if($('.name_add').text() == 'Jaime Moreno'){
				$('.name_add').html('<i class="glyphicon glyphicon-sunglasses"></i>'+$('.name_add').html()+'</b>');
			}
		});
	</script>
@endsection