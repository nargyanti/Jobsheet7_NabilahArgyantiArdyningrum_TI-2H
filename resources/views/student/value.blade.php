@extends('student.layout')

@section('content')

<!-- Title -->
<div class="container">
    <h2 class="text-center">JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2><br>
    <h1 class="text-center">KARTU HASIL STUDI (KHS)</h1>
</div>

<!-- Biodata -->
<div class="container">
    <p><b>Name:</b> {{ $Student->name }}</p>
    <p><b>NIM:</b> {{ $Student->nim }}</p>
    <p><b>Class:</b> {{ $Student->class->class_name }}</p>
</div>

<!-- Score -->
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Course</th>
            <th>SKS</th>
            <th>Semester</th>
            <th>Value</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($Student->course as $course)
        <tr>
            <td>{{ $course->course_name }}</td>
            <td>{{ $course->sks }}</td>
            <td>{{ $course->semester }}</td>
            <td>{{ $course->pivot->value }}</td>
        </tr>
    @endforeach    
    </tbody>
</table>

@endsection