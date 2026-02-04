<?php

namespace App\Services;

use App\Models\Prescription;

class PrescriptionService
{
    public function store(array $payload): Prescription
    {
        return Prescription::create([
            'user_id' => $payload['user_id'] ?? 1,
            'order_id' => $payload['order_id'] ?? null,
            'file_path' => $payload['file_path'] ?? 'storage/prescriptions/sample.pdf',
            'mime_type' => $payload['mime_type'] ?? 'application/pdf',
            'status' => 'uploaded',
            'notes' => $payload['notes'] ?? null,
        ]);
    }
}
