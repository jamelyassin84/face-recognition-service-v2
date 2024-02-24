<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRoomRequest;
use App\Http\Requests\UpdateRoomRequest;
use App\Models\Room;
use Illuminate\Http\Resources\Json\JsonResource;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return JsonResource::collection(Room::paginate(12));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRoomRequest $request)
    {
        $room = Room::create($request->validated());

        return JsonResource::make($room)
            ->additional(['message' => 'room created successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Room $room)
    {
        return JsonResource::make($room);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRoomRequest $request, Room $room)
    {
        $room->update($request->validated());

        return JsonResource::make($room)
            ->additional(['message' => 'room updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Room $room)
    {
        $room->delete();

        return response()->json(['message' => 'room deleted successfully']);
    }
}
