<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;

class ClassModel extends Model
{
    use HasFactory;
    protected $table='class'; // define that this model is relate to class table

    public function student() 
    {
        return $this->hasMany(Student::class);
    }
}
