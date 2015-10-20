<table class="table table-striped">
	<tr>
		<td>#</td>
		<td>Nombre Completo</td>
		<td></td>
		<td>Email</td>
		<td>Teléfono</td>
		<td>Fecha Nacimiento</td>
		<td></td>
	</tr>
	@foreach($users as $user)
		<tr data-id={{$user->id}}>
			<td>{{$user->id}}</td>
			<td>{{$user->name}} {{$user->last}}</td>
			<td><a href="{{route('administrador.users.profile', $user->id)}}"style="font-size:10px; color:white; padding:5px; background: green;">perfil</a></td>
			<td>{{$user->email}}</td>
			<td>{{$user->phone}}</td>
			<td>{{$user->birthday}}</td>
			<td>
				<a href="{{route('administrador.users.edit',$user->id)}}">Editar</a>
				<a href="#" class="btn-delete" style="color:red;">Borrar</a>
			</td>
		</tr>
	@endforeach
</table>
