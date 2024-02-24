<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreScheduleRequest;
use App\Http\Requests\UpdateScheduleRequest;
use App\Models\Schedule;
use Illuminate\Database\Eloquent\Casts\Json;
use Illuminate\Http\Resources\Json\JsonResource;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return JsonResource::collection(Schedule::paginate(12));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreScheduleRequest $request)
    {
        $schedule = Schedule::create($request->validated());

        return JsonResource::make($schedule)->additional([
            'message' => 'Schedule created successfully',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Schedule $schedule)
    {
        return JsonResource::make($schedule);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateScheduleRequest $request, Schedule $schedule)
    {
        $schedule->update($request->validated());

        return JsonResource::make($schedule)->additional([
            'message' => 'Schedule updated successfully',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Schedule $schedule)
    {
        $schedule->delete();

        return response()->json([
            'message' => 'Schedule deleted successfully',
        ]);
    }
}
