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
            $table->morphs('referenceable');
            $table->string('notes',800)->nullable();
            $table->foreignId('fund_id')->constrained()->nullable();
            $table->string('transaction_type',30);
            $table->timestamp('transaction_date');
            $table->morphs('transactable');
            $table->foreignId('user_id')->constrained('users')->onDelete('no action')->onUpdate('cascade');
            $table->foreignId('requisitioning_office')->constrained('offices')->onDelete('no action')->onUpdate('cascade');
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
