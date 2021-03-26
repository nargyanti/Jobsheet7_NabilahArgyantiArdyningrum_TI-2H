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
        'Nim',
        'Name',
        'Class',
        'Major',
    ];
}
