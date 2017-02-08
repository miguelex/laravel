@extends('layouts.admin')

@section('content')
    @include ('alerts.request')
    {!!Form::open(['route' => 'usuario.store', 'method' => 'POST']) !!}
    @include('usuario.forms.usr')
    {!! form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
    {!!form::close() !!}
@stop