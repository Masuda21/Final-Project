<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $students = Student::all();
        return view("student.index", compact("students"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("student.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $valid = $request->validate([
            "name"=> "required",
            "gender"=> "required",
            "email"=> "required",
            "location"=> "required",
            "mobile"=> "required",
            "age"=> "required",
            "institute"=> "required",
        ]);
        $request->user()->students()->create($valid);
        return redirect()->route("student.index")->with("success","Successful");
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
        return view("student.edit", compact("student"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        //
        $valid = $request->validate([
            "name"=> "required",
            "gender"=> "required",
            "email"=> "required",
            "location"=> "required",
            "mobile"=> "required",
            "age"=> "required",
            "institute"=> "required",
        ]);
        $student->update($valid);
        return redirect()->route("student.index")->with("success","Successful");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('student.index')->with("success","Hizibizi");
    }
}
