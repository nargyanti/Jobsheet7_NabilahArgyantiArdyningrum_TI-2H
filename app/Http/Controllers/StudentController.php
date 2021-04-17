<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\ClassModel;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // eloquent for display data
        // $student = DB::table('student')->paginate(3);
        // return view('student.index', compact('student'));
        
        // $student =  Student::where([
        //     ['name', '!=', Null],
        //     [function ($query) use ($request) {
        //         if(($name = $request->name)) {
        //             $query->orWhere('name', 'LIKE', "%{$name}%")->get();
        //         }
        //     }]
        // ])
        //     ->paginate(3);
        //     return view('student.index', compact('student'));

        $search = request()->query('search');
        if($search) {
            $student = Student::with('class')
                    ->where('name', "like", "%{$search}%")
                    ->paginate(3);
        } else {
            $student = Student::with('class')
                    ->paginate(3);
        }
        return view('student.index', ['student' => $student]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $class = ClassModel::all(); // get data from class table
        return view('student.create', ['class' => $class]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate
        $request->validate([
            'Nim' => 'required',
            'Name' => 'required',
            'Class' => 'required',
            'Major' => 'required',
            'Date_Of_Birth' => 'required',
            'Address' => 'required',
        ]);

        $student = new Student;
        $student->nim = $request->get('Nim');
        $student->name = $request->get('Name');
        $student->major = $request->get('Major');
        $student->date_of_birth = $request->get('Date_Of_Birth');
        $student->address = $request->get('Address');
        
        $class = new ClassModel;
        $class->id = $request->get('Class');

        // eloquent function to add data using belongsTo relation
        $student->class()->associate($class);
        $student->save();

        // redirect after add data
        return redirect()->route('student.index')
            ->with('success', 'Student Successfully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($Nim)
    {
        // find by NIM
        $student = Student::with('class')->where('nim', $Nim)->first();
        return view('student.detail', ['Student' => $student]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($Nim)
    {
        // display by nim
        $student = Student::with('class')->where('nim', $Nim)->first();
        $class = ClassModel::all(); //get data from class table
        return view('student.edit', compact('student', 'class'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Nim)
    {
        // validate
        $request->validate([
            'Nim' => 'required',
            'Name' => 'required',
            'Class' => 'required',
            'Major' => 'required',
            'Date_Of_Birth' => 'required',
            'Address' => 'required',
        ]);

        $student = Student::with('class')->where('nim', $Nim)->first();
        $student->nim = $request->get('Nim');
        $student->name = $request->get('Name');
        $student->major = $request->get('Major');
        $student->date_of_birth = $request->get('Date_Of_Birth');
        $student->address = $request->get('Address');

        $class = new ClassModel;
        $class->id = $request->get('Class');

        $student->class()->associate($class);
        $student->save();

        // redirect after add data
        return redirect()->route('student.index')
            ->with('success', 'Student Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Nim)
    {
        // delete data
        Student::find($Nim)->delete();
        return redirect()->route('student.index')
            ->with('success', 'Student Successfully Deleted');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function value($Nim)
    {
        $student = Student::with('course')->where('nim', $Nim)->first();
        return view('student.value', ['Student' => $student]);
    }

}
