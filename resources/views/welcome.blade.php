@extends('layouts.master')

@section('content')

<h1>Welcome to TO-DO List Application</h1>
<p>
    This is a To-Do List Application for ultimate productivity.
</p>
{{-- Output the $name variable. --}}
<p>You last visited {{ $name }} on {{ $date }}.</p>

@endsection