<?php

namespace App\Http\Controllers;
use App\Interfaces\PatientRepositoryInterface;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    private PatientRepositoryInterface $patientRepository;

    public function __construct(PatientRepositoryInterface $patientRepository) {
        $this->patientRepository = $patientRepository;
    }
    
    public function index() {
        $patients = $this->patientRepository->getAllPatients();
        return $patients;
    }
    
    public function getPatientDetailsByExternalId(Request $request, $patientId){
        $patientDetails = $this->patientRepository->getPatientById($patientId);
        
        if (!$patientDetails) {
            return response()->json(['error' => 'Patient not found'], 404);
        }

        // Format the response according given format
        $formattedResponse = [
            'patient_id' => $patientDetails->external_patient_id,
            'first_appointment_id' => $patientDetails->appointments->min('appointment_id'),
            'invoice' => $patientDetails->invoices->pluck('invoice_no')->toArray(),
            'total_receipts' => $patientDetails->receipts->count(),
            'receipts' => $patientDetails->receipts->pluck('receipt_id')->toArray(),
            'first_receipt_date' => $patientDetails->receipts->min('receipt_date'),
            'first_invoice_date' => $patientDetails->invoices->min('date'),
            'first_appointment_date' => $patientDetails->appointments->min('appointment_date'),
            'patient_created_date' => $patientDetails->created_at->format('Y-m-d'),
        ];

        return response()->json($formattedResponse);
        
    }
    
}
