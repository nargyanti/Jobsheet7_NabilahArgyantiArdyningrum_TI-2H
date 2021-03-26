@extends('student.layout')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">Student Detail</div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Nim: </b>{{$Student->nim}}</li>
                    <li class="list-group-item"><b>Name: </b>{{$Student->name}}</li>
                    <li class="list-group-item"><b>Class: </b>{{$Student->class}}</li>
                    <li class="list-group-item"><b>Major: </b>{{$Student->major}}</li>
                </ul>
            </div>
        <a class="btn btn-success mt-3" href="{{ route('student.index') }}">Back</a>
        </div>
    </div>
</div>
@endsection