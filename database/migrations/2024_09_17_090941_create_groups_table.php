<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            $table->string('offer_theme')->nullable();
            $table->string('referral_system')->default(false);
            $table->string('crypto_acceptance')->default(false);
            $table->string('processing_primary_traffic')->nullable();
            $table->string('holding_and_rolling')->nullable();
            $table->string('withdrawal_deadlines')->nullable();
            $table->string('geosolutionsinput')->nullable();
            $table->string('project')->default(false);
            $table->string('contact')->default(false);
            $table->string('deposit_or_kyc')->default(false);
            $table->string('mass_viplati')->nullable();
            $table->string('resseler')->nullable();
            $table->string('status')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('geo_data')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('groups');
    }
};
