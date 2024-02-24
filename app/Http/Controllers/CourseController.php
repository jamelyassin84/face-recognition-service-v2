<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use App\Models\Course;
use Illuminate\Http\Resources\Json\JsonResource;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return JsonResource::collection(Course::paginate(12));
    }


    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        return JsonResource::make($course);
    }
}
