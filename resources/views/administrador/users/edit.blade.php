@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">
					<b style="display:inline-block;">Editar Usuario: {{$user->name}}</b>
					@include('administrador.partials.back')
				</div>
				
				<div class="panel-body">
					<div class="col-md-12">
					{!! Form::model($user,['route' => ['administrador.users.update', $user], 'method' =>'PUT'])!!}
						@include('administrador.partials.forms')
				  		<button type="submit" class=" pull-left btn btn-info">Editar registro</button>								
					{!! Form::close()!!}
					@include('administrador.partials.delete')
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
