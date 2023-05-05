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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('reference_id')->constrained();
            $table->string('notes',500)->nullable();
            $table->string('funds',20)->nullable();
            $table->foreignId('transaction_type_id')->constrained();
            $table->morphs('transactable');
            $table->timestamp('transaction_date');
            $table->foreignId('user_id')->constrained('users')->onDelete('no action')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
