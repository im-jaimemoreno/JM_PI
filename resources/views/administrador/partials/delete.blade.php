{!!Form::open(['route'=>['administrador.users.update',$user], 'method'=>'DELETE'])!!}
	<button type="submit" onclick="return confirm('Estas seguro de eliminar el usuario?')" class="btn btn-danger">Eliminar Usuario</button>
{!!Form::close()!!}

