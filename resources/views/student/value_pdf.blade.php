<html>
    <head>
        <title>Student Information System</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <!-- Title -->
            <p class="text-center"><b>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</b></p>
            <h1 class="text-center">KARTU HASIL STUDI (KHS)</h1><br>

            <!-- Biodata -->
            <p><b>Name:</b> {{ $Student->name }}</p>
            <p><b>NIM:</b> {{ $Student->nim }}</p>
            <p><b>Class:</b> {{ $Student->class->class_name }}</p>

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
        </div>
    </body>
</html>
