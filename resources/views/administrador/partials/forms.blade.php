
<div class="form-group">
	<div class="col-md-4">
	{!!Form::label('name', 'Nombre') !!}
	</div>
	<div class="col-md-7">
	{!!Form::text('name', null, ['class'=>'form-control', 'required' =>'required']) !!}
	</div>
</div>

<div class="form-group">
	<div class="col-md-4">
	{!!Form::label('last', 'Apellido') !!}
	</div>
	<div class="col-md-7">
	{!!Form::text('last', null, ['class'=>'form-control', 'required' =>'required']) !!}
	</div>

</div>

<div class="form-group">
	<div class='col-md-4'>
	{!!Form::label('phone', 'Teléfono') !!}
	</div>
	<div class="col-md-7">
	{!!Form::input('number', 'phone', null, ['class'=>'form-control', 'required' =>'required']) !!}
	</div>
</div>


<div class="form-group">
	<div class='col-md-4'>
	{!!Form::label('birthday', 'Fecha de cumpleaños') !!}
	</div>
	<div class="col-md-7">
	{!!Form::input('date', 'birthday', null, ['class'=>'form-control', 'required' =>'required']) !!}
	</div>
</div>

<!--div class="form-group">
	<label class="col-md-4 control-label">Foto de perfil</label>
	<div class="col-md-6">
		<input type="file" class="form-control" name="photo" value="{{ old('photo') }}">
	</div>
</div-->	
<div class="form-group">
	<div class='col-md-4'>
	{!!Form::label('email', 'Correo Eléctronico') !!}
	</div>
	<div class="col-md-7">
	{!!Form::input('email', 'email', null, ['class'=>'form-control', 'required' =>'required']) !!}
	</div>
</div>			

<div class="form-group">
	<div class="col-md-4">
	{!!Form::label('password', 'Contraseña') !!}
	</div>
	<div class="col-md-7">
	{!!Form::password('password',['class'=>'form-control', 'required' =>'required', 'placeholder' => '********']) !!}
	</div>
</div>	

<div class="form-group">
	<div class="col-md-4">
	{!!Form::label('password', 'Repetir Contraseña') !!}
	</div>
	<div class="col-md-7">
	{!!Form::input('password', 'password_confirmation', null, ['class'=>'form-control', 'required' =>'required', 'placeholder' => '********']) !!}
	</div>
</div>						


