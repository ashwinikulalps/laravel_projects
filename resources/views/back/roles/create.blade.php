@extends('back.roles.template')

@section('form-open')
    <form method="post" action="{{ route('roles.store') }}">
@endsection