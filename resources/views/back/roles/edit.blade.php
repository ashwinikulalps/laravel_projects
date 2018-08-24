@extends('back.roles.template')

@section('form-open')
    <form method="post" action="{{ route('roles.update', [$role->id]) }}">
        {{ method_field('PUT') }}
@endsection
