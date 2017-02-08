@extends('layouts.admin')

@section('content')
    @include ('alerts.request')
    {!!Form::model($user, ['route' => ['usuario.update', $user->id], 'method' => 'PUT']) !!}
    @include('usuario.forms.usr')
    {!! form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
    {!!form::close() !!}
    {!!Form::open(['route' => ['usuario.update', $user->id], 'method' => 'DELETE']) !!}
    {!! form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
    {!!form::close() !!}
@stop