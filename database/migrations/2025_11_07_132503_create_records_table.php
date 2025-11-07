<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('records', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('registry');
            $table->string('gender');
            $table->string('purok')->nullable();
            $table->string('grupo')->nullable();
            $table->string('kapisanan')->nullable();
            $table->date('date_of_baptism')->nullable();
            $table->string('evangelist')->nullable();
            $table->date('date_of_entry')->nullable();
            $table->string('r2_10_eligibility')->nullable();
            $table->string('status')->nullable();
            $table->string('monthly_code')->nullable();
            $table->date('birthday')->nullable();
            $table->string('r2_10_endorsement')->nullable();
            $table->text('user_notes')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('records');
    }
};
