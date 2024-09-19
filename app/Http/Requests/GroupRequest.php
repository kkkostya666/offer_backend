<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GroupRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'offer_theme' => 'nullable',
            'referral_system' => 'required',
            'crypto_acceptance' => 'required',
            'processing_primary_traffic' => 'nullable',
            'holding_and_rolling' => 'nullable',
            'withdrawal_deadlines' => 'nullable',
            'geosolutionsinput' => 'nullable',
            'project' => 'required',
            'contact' => 'required',
            'deposit_or_kyc' => 'required',
            'mass_viplati' => 'nullable',
            'resseler' => 'nullable',
            'user_id' => 'required|integer',
            'status' =>'required',
            'geo_data' => 'nullable',
        ];
    }
}
