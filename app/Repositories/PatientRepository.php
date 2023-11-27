<?php

namespace App\Repositories;

use App\Models\Patient;
use App\Interfaces\PatientRepositoryInterface;

/**
 * Class PatientRepository.
 */
class PatientRepository implements PatientRepositoryInterface {

    /**
     * @return string
     *  Return the model
     */
    public function createPatient(array $patientDetails) {
        return Patient::create($patientDetails);
    }

    public function deletePatient($patientId) {
        Patient::destroy($patientId);
    }

    public function getAllPatients() {
        return Patient::all();
    }

    public function getPatientById($patientId) {
        return Patient::with('invoices', 'receipts', 'appointments')
                        ->where('external_patient_id', $patientId)
                        ->first();
    }

    public function updatePatient($patientId, array $newDetails) {
        return Patient::whereId($patientId)->update($newDetails);
    }

}
