<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSubjectRequest;
use App\Http\Requests\UpdateSubjectRequest;
use App\Models\Subject;
use Illuminate\Http\Resources\Json\JsonResource;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return JsonResource::collection(Subject::paginate(12));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSubjectRequest $request)
    {
        $subject = Subject::create($request->validated());

        return JsonResource::make($subject)
            ->additional(['message' => 'Subject created successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Subject $subject)
    {
        return JsonResource::make($subject);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubjectRequest $request, Subject $subject)
    {
        $subject->update($request->validated());

        return JsonResource::make($subject)
            ->additional(['message' => 'Subject updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subject $subject)
    {
        $subject->delete();

        return response()->json(['message' => 'Subject deleted successfully']);
    }
}
