<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    
    protected $table = 'patients';
    protected $primaryKey = 'external_patient_id';

    // Relationships
    public function appointments()
    {
        return $this->hasMany(Appointment::class, 'external_patient_id');
    }

    public function invoices()
    {
        return $this->hasMany(Invoice::class, 'external_patient_id');
    }

    public function receipts()
    {
        return $this->hasMany(Receipt::class, 'external_patient_id');
    }

}
