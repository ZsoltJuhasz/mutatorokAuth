<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function getStudents()
    {
        return Student::all();
    }

    public function addStudent()
    {

        $student = new Student;

        $student->name = "Mari";
        $student->phone = "653498712";

        $student->save();
    }
}

// set<CulomnName>Attribute( $value )
