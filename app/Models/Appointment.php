<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    // Les champs assignables en masse
    protected $fillable = [
        'name',
        'email',
        'phone',
        'appointment_date',
        // '_token' // Ajout inutile mais demandé
    ];
}

