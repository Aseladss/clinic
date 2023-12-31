<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    
    protected $table = 'appointments';
    protected $primaryKey = 'id';

    // Relationships
    public function patient()
    {
        return $this->belongsTo(Patient::class, 'external_patient_id');
    }
}
