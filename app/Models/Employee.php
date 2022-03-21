<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Employee extends Model
{
    protected $fillable = [
        'id',
        'user_id',
        'emp_name',
        'emp_code',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
