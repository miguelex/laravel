<div class="form-group">
    {!!form::label('Nombre: ')!!}
    {!!form::text('name',null, ['class' => 'form-control', 'placeholder' => 'Ingresa el nombre del usuario'])!!}
</div>
<div class="form-group">
    {!!form::label('Correo: ')!!}
    {!!form::text('email',null, ['class' => 'form-control', 'placeholder' => 'Ingresa el correo del usuario'])!!}
</div>
<div class="form-group">
    {!!form::label('Password: ')!!}
    {!!form::password('password', ['class' => 'form-control', 'placeholder' => 'Clave del usuario'])!!}
</div>