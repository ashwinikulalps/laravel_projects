@extends('back.employee.template')

@section('form-open')
    <form method="post" action="{{ route('employees.store') }}">
@endsection