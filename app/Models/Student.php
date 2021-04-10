<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Mahasiswa as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model; //Model Eloquent

class Student extends Model
{
    protected $table = 'student'; 
    protected $primaryKey = 'nim';    
    protected $fillable = [
        'nim',
        'name',
        'class_id',
        'major',
        'Date_Of_Birth',
        'Address',
    ];

    public function class() 
    {
        return $this->belongsTo(ClassModel::class);
    }

    public function course() 
    {
        return $this->belongsToMany(Course::class);
    }

}
