<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentAssesment extends Model
{
    /** @use HasFactory<\Database\Factories\StudentAssesmentFactory> */
    use HasFactory;

    protected $fillable = [
        'student_id',
        'assessment_id',
        'score',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }

    public function assessment()
    {
        return $this->belongsTo(Assesment::class);
    }
}
