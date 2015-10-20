@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Register</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					{!! Form::open(['url' => 'auth/register', 'role' => 'form' , 'method' =>'POST'])!!}
						<div class="col-md-12">
						@include('admin.partials.forms')
				  		<button type="submit" class="btn btn-info">Crear registro</button>		
						</div>
					{!! Form::close()!!}

					<!--form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}" enctype="multipart/form-data">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">Nombre</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="name" value="{{ old('name') }}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Apellido</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="last" value="{{ old('last') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Teléfono</label>
							<div class="col-md-6">
								<input type="number" class="form-control" name="phone" value="{{ old('phone') }}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Fecha de Nacimiento</label>
							<div class="col-md-6">
								<input type="date" class="form-control" name="birthday" value="{{ old('birthday') }}">
							</div>
						</div>	

						<div class="form-group">
							<label class="col-md-4 control-label">Foto de perfil</label>
							<div class="col-md-6">
								<input type="file" class="form-control" name="photo" value="{{ old('photo') }}">
							</div>
						</div>						

						<div class="form-group">
							<label class="col-md-4 control-label">Dirección E-Mail</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Contraseña</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Confirmar Contraseña</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password_confirmation">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Registarse
								</button>
							</div>
						</div>
					</form-->
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
