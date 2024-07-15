<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // Specify the fillable attributes
    protected $fillable = ['studname', 'course', 'fee'];

    // Optionally, you can add relationships or other model methods here
}
