<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'description',
        'department_id',
    ];

    public function department()
    {
        return $this->hasOne(Department::class, 'id', 'department_id');
    }
}
