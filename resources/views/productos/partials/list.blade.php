<table class="table table-striped">
	<tr>
		<td>#</td>
		<td>Thumbail</td>
		<td>Referencia</td>
		<td>Marca</td>
		<td>Descripción</td>
		<td></td>
		<td></td>
	</tr>
	@foreach($productos as $producto)
	<tr data-id={{$producto->id}}>

		<td>{{$producto->id}}</td>
		<td><img src="{{route('productos.listaproduct.photo', $producto->Thumbnail)}}" id="profileImage"  style="width: 60px;"></td>
		<td>{{$producto->Referencia}}</td>
		<td>{{$producto->Marca}}</td>
		<td>{{$producto->Descripcion}}</td>

		<td>
			<a href="{{route('productos.listaproduct.edit',$producto->id)}}">Editar</a>
		</td>
		<td>
			<a href="{{route('productos.listaproduct.destroy',$producto->id)}}" class="btn-delete" style="color:red;">Borrar</a>
		</td>
	</tr>
	@endforeach						
</table>
