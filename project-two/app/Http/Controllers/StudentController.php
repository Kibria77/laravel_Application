<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    protected $student;
    protected $students;

    public function index()
    {
        return view('add-student');
    }

    public function create(Request $request)
    {
        $this->student = new Student();
        $this->student->name    = $request->name;
        $this->student->email   = $request->email;
        $this->student->mobile  = $request->mobile;
        $this->student->save();

        return redirect()->back()->with('massage', 'Student Info Save Successfully');
    }

    public function manege()
    {
        $this->students = Student::orderBy('id', 'desc')->get();
        return view('manege-student', ['students' => $this->students]);
    }

    public function edite($id)
    {
        $this->student = Student::find($id);
        return view('edite-data', ['student' => $this->student]);
    }
}
