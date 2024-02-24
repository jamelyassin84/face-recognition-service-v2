<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Models\Admin;
use App\Models\Student;
use Illuminate\Http\Resources\Json\JsonResource;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return JsonResource::collection(Student::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudentRequest $request)
    {
        $admin = Admin::where('adminable_id', auth()->id())->firstOrFail();

        $student = Student::create([
            ...$request->validated(),
            'studentable_id' => $admin->id,
            'studentable_type' => Admin::class,
        ]);

        return JsonResource::make($student)
            ->additional(['message' => 'Student created successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return JsonResource::make($student);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        $student->update($request->validated());

        return JsonResource::make($student)
            ->additional(['message' => 'Student updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();

        return response()->json(['message' => 'Student deleted successfully']);
    }
}
