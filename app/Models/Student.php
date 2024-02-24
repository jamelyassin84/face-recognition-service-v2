<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'middle_name',
        'suffix',
        'course_id',
        'studentable_id',
        'studentable_type',
    ];

    protected $with = ['admin', 'course.department'];

    public function admin()
    {
        return $this->hasOne(Admin::class, 'id', 'studentable_id');
    }

    public function course()
    {
        return $this->hasOne(Course::class, 'id', 'course_id');
    }
}
