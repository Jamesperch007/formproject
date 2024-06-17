<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;
    protected $table='forms';
    protected $fillable = [
        'name',
        'dob',
        'gender',
        'marital_status',
        'mobile_number',
        'email',
        'address',
        'applied_country',
        'academic_details',
        'work_experience',
        'test_taken',
        'score',
        'how_you_know',
        'reference'
    ];
}
