<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentId extends Controller
{
    public function index() {
        $students = Student::all();
        return view('student.index')->with(['students'=> $students]);
    }
    public function store(Request $request) {
        Student::create([
            'id' => $request->id,
            'name' => $request->name,
            'surname' => $request->age
        ]);
        return back();
    }

public function stud_id($id) {
$students = Student::find($id);

if($students ==null)
return response(404);
return view('student.index')->with(['student' => $students]);
}
}
