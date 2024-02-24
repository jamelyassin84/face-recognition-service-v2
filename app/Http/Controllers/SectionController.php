<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSectionRequest;
use App\Http\Requests\UpdateSectionRequest;
use App\Models\Section;
use Illuminate\Http\Resources\Json\JsonResource;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return JsonResource::collection(Section::paginate(12));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSectionRequest $request)
    {
        $section = Section::create($request->validated());

        return JsonResource::make($section)->additional([
            'message' => 'Section created successfully',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Section $section)
    {
        return JsonResource::make($section);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSectionRequest $request, Section $section)
    {
        $section->update($request->validated());

        return JsonResource::make($section)->additional([
            'message' => 'Section updated successfully',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Section $section)
    {
        $section->delete();

        return JsonResource::make($section)->additional([
            'message' => 'Section deleted successfully',
        ]);
    }
}
