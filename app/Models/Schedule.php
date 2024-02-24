<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'faculty_id',
        'course_id',
        'room_id',
        'subject_id',
        'day',
        'start_time',
        'end_time',
        'students',
    ];

    protected $casts = [
        'students' => 'array',
    ];

    protected $with = ['course.department', 'room', 'faculty', 'subject'];

    public function faculty()
    {
        return $this->hasOne(Faculty::class, 'id', 'faculty_id');
    }

    public function course()
    {
        return $this->hasOne(Course::class, 'id', 'course_id');
    }

    public function room()
    {
        return $this->hasOne(Room::class, 'id', 'room_id');
    }

    public function subject()
    {
        return $this->hasOne(Subject::class, 'id', 'subject_id');
    }
}
