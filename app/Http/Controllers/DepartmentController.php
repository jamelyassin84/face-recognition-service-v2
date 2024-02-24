<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDepartmentRequest;
use App\Http\Requests\UpdateDepartmentRequest;
use App\Models\Department;
use Illuminate\Http\Resources\Json\JsonResource;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return JsonResource::collection(Department::paginate(12));
    }


    /**
     * Display the specified resource.
     */
    public function show(Department $department)
    {
        return JsonResource::make($department);
    }
}
