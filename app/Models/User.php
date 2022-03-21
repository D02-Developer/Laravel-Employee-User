<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;

class User extends Model
{
    protected $fillable = [
        'id',
        'name', 
        'password',
    ];

    public function employees()
    {
        return $this->hasMany(Employee::class, 'user_id', 'id');
    }
    
}
