@extends('student.layout')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">Add Student</div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="{{ route('student.store') }}" id="myForm">
                    @csrf
                    <div class="form-group">
                        <label for="Nim">Nim</label>
                        <input type="text" name="Nim" class="form-control" id="Nim" aria-describedby="Nim" >
                    </div>
                    <div class="form-group">
                        <label for="Name">Name</label>
                        <input type="Name" name="Name" class="form-control" id="Name" ariadescribedby="Name" >
                    </div>
                    <div class="form-group">
                        <label for="Class">Class</label>
                        <input type="Class" name="Class" class="form-control" id="Class" ariadescribedby="Class" >
                    </div>
                    <div class="form-group">
                        <label for="Major">Major</label>
                        <input type="Major" name="Major" class="form-control" id="Major" ariadescribedby="Major" >
                    </div>
                    <div class="form-group">
                        <label for="Date_Of_Birth">Date of Birth</label>
                        <input type="Date_Of_Birth" name="Date_Of_Birth" class="form-control" id="Date_Of_Birth" ariadescribedby="Date_Of_Birth" >
                    </div>
                    <div class="form-group">
                        <label for="Address">Address</label>
                        <input type="Address" name="Address" class="form-control" id="Address" ariadescribedby="Address" >
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection