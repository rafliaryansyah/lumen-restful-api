<?php

namespace App\Http\Controllers\Student;

use App\Models\Student;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use app\Http\Resources\DetailStudentResource;

class StudentController extends  Controller {

    public function create(Request $request)
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

    public function detailStudent($id)
    {
        $student = Student::find($id);

        return response()->json([
            'status' => 200,
            'message' => 'success',
            'data' => [
                'id' => $student->id,
                'firstName' => $student->firstName,
                'lastName' => $student->lastName,
                'class' => $student->class,
                'exSchool' => $student->exSchool,
                'schoolOrigin' => $student->schoolOrigin,
                'created_at' => $student->created_at->format('d, F Y')
            ]
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'firstName' => 'required|max:32',
            'lastName' => 'required|max:32',
            'class' => 'required|max:24',
            'exSchool' => 'required|max:32'
        ]);

        $student = Student::findOrFail($id);
        $student->update([
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

    public function students(Student $student)
    {
        $per_page = \request('per_page') ? : 10;
        $student = Student::latest()->paginate($per_page);
        $student->appends(compact('per_page'));

        return response()->json([
            'status' => 200,
            'message' => 'Success',
            'data' => $student
        ]);
    }

}
