<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GroupResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'offer_theme' => $this->offer_theme,
            'referral_system' => $this->referral_system ? 'Yes' : 'No',
            'crypto_acceptance' => $this->crypto_acceptance ? 'Yes' : 'No',
            'processing_primary_traffic' => $this->processing_primary_traffic,
            'holding_and_rolling' => $this->holding_and_rolling,
            'withdrawal_deadlines' => $this->withdrawal_deadlines,
            'geosolutionsinput' => $this->geosolutionsinput,
            'project' => $this->project ? 'Yes' : 'No',
            'contact' => $this->contact ? 'Yes' : 'No',
            'deposit_or_kyc' => $this->deposit_or_kyc ? 'Yes' : 'No',
            'mass_viplati' => $this->mass_viplati,
            'resseler' => $this->resseler,
            'geo_data' => $this->geo_data,
            'user_id' => $this->user_id,
            'status' => $this->status,
            'created_at' => $this->created_at->toDateTimeString(),
            'updated_at' => $this->updated_at->toDateTimeString(),
        ];
    }
}
