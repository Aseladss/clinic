<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    use HasFactory;
    
    protected $table = 'receipt';

    // Relationships
    public function patient()
    {
        return $this->belongsTo(Patient::class, 'external_patient_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
