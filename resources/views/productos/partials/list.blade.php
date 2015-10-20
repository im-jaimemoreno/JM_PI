<table class="table table-striped">
	<tr>
		<td>#</td>
		<td>Referencia</td>
		<td>Marca</td>
		<td>Descripción</td>
		<td>Thumbail</td>
		<td></td>
	</tr>
	@foreach($productos as $producto)
	<tr data-id={{$producto->id}}>
		<td>{{$producto->id}}</td>
		<td>{{$producto->Referencia}}</td>
		<td>{{$producto->Marca}}</td>
		<td>{{$producto->Descripcion}}</td>
		<td>{{$producto->Descripcion}}</td>
		<td>
			<a href="{{route('administrador.users.edit',$producto)}}">Editar</a>
			<a href="#" class="btn-delete" style="color:red;">Borrar</a>
		</td>
	</tr>
	@endforeach						
</table>
