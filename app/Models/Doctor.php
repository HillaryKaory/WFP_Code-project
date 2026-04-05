<?php

namespace App\Models;

use Database\Factories\DoctorFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Doctor extends Model
{
    /** @use HasFactory<DoctorFactory> */
    use HasFactory, Notifiable;

    //
    protected $fillable = [
        'name',
        'specialization',
        'email',
        'phone',
    ];

}
