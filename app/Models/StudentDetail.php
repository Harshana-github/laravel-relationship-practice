<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentDetail extends Model
{
    use HasFactory;

    protected $table = 'students_details';

    protected $fillable = [
        'student_id',
        'alter_phone',
        'course',
        'roll_no'
    ];
}
