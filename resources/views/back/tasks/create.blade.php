@extends('back.tasks.template')

@section('form-open')
    <form method="post" action="{{ route('tasks.store') }}">
@endsection