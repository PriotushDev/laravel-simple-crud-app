<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        return view('website.student.index');
    }
    public function add()
    {
        return view('website.student.add');
    }
    public function create(Request $request)
    {
        Student::newStudent($request);
        return back()->with('message','student create successfully.');
    }
    public function manage()
    {
        return view('website.student.manage', ['students' => Student::all()]);
    }

    public function edit()
    {
        return view('website.student.edit');
    }

    public function update()
    {

    }



}
