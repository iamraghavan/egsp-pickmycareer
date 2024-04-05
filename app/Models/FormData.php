<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormData extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_name',
        'email',
        'whatsapp_number',
        'education_level',
        'board_of_studies',
        'queries',
    ];
}
