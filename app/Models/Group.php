<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $fillable = [
        'offer_theme',
        'referral_system',
        'crypto_acceptance',
        'processing_primary_traffic',
        'holding_and_rolling',
        'withdrawal_deadlines',
        'geosolutionsinput',
        'project',
        'contact',
        'deposit_or_kyc',
        'mass_viplati',
        'resseler',
        'user_id',
        'status',
        'geo_data',
    ];
}
