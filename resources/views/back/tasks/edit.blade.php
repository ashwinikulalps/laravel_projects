@extends('back.tasks.template')

@section('form-open')
    <form method="post" action="{{ route('tasks.update', [$task->id]) }}">
        {{ method_field('PUT') }}
@endsection
