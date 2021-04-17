@extends('student.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
            </div>
            <div class="float-right my-2">
                <a class="btn btn-success" href="{{ route('student.create') }}"> Input Student Data</a>
            </div>            
            <form class="form-inline" action="{{ route('student.index') }}" method="GET">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" name="search" aria-label="Search" style="width:500px">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    
    <table class="table table-bordered">
    <tr>
        <th>Nim</th>
        <th>Name</th>
        <th>Class</th>
        <th>Major</th>
        <th>Date of Birth</th>
        <th>Address</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($student as $mhs)
    <tr>
        <td>{{ $mhs ->nim }}</td>
        <td>{{ $mhs ->name }}</td>
        <td>{{ $mhs ->class->class_name }}</td>
        <td>{{ $mhs ->major }}</td>
        <td>{{ $mhs ->date_of_birth }}</td>
        <td>{{ $mhs ->address }}</td>
        <td>
        <form action="{{ route('student.destroy',['student'=>$mhs->nim]) }}" method="POST">
            <a class="btn btn-info" href="{{ route('student.show',$mhs->nim) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('student.edit',$mhs->nim) }}">Edit</a>
            
       
            @csrf
            @method('DELETE')
            
            <button type="submit" class="btn btn-danger">Delete</button>
            <a class="btn btn-warning" href="{{ route('student.value',$mhs->nim) }}">Value</a>
        </form>
        </td>
    </tr>
    @endforeach
    </table>
    <div class="d-flex">
        {{ $student->links('pagination::bootstrap-4') }}
    </div>
@endsection