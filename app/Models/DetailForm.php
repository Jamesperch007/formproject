<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailForm extends Model
{
    use HasFactory;
    protected $table='detail_forms';
    protected $fillable = [
        'username',
        'email',
        'gender',
        'address',
        'password',
        'status'
    ];
}
