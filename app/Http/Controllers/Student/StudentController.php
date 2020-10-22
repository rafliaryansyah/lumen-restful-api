<?php

namespace App\Http\Controllers\Student;

use App\Models\Student;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class StudentController extends  Controller {

    public  function create(Request $request)
    {
        $this->validate($request, [
            'firstName' => 'required|max:32',
            'lastName' => 'required|max:32',
            'class' => 'required|max:24',
            'exSchool' => 'required|max:32'
        ]);

        $student = Student::create([
            'id'        => Str::uuid(),
            'firstName' => $request->input('firstName'),
            'lastName'  => $request->input('lastName'),
            'class'     => $request->input('class'),
            'exSchool'  => $request->input('exSchool'),
            'schoolOrigin' => $request->input('schoolOrigin')
        ]);

        return response()->json([
            'status' => 200,
            'message' => 'Success',
            'data' => $student
        ], 200);
    }

}
