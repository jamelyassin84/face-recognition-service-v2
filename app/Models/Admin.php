<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $fillable = ['full_name'];

    public function adminable()
    {
        return $this->morphTo();
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'adminable_id');
    }
}
