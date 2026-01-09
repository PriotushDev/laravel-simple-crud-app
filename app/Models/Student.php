<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    private static $student;

    public static function newStudent($request)
    {
        self::$student = new Student();
        self::$student->name = $request->name;
        self::$student->father_name =$request->father_name;
        self::$student->mother_name =$request->mother_name;
        self::$student->mobile =$request->mobile;
        self::$student->email =$request->email;
        self::$student->class =$request->class;
        self::$student->blood_group =$request->blood_group;
        self::$student->address =$request->address;

        self::$student->save();
    }

}
