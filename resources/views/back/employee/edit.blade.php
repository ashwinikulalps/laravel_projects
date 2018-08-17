@extends('back.employee.template')

@section('form-open')
    <form method="post" action="{{ route('employees.update', [$employee->id]) }}">
        {{ method_field('PUT') }}
@endsection
