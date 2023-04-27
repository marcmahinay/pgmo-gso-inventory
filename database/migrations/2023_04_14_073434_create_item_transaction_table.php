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
        Schema::create('item_transaction', function (Blueprint $table) {
            $table->id();
            $table->foreignId('item_id')->constrained();
            $table->foreignId('transaction_id')->constrained();
            $table->double('quantity')->nullable();
            $table->decimal('unit_cost',10,2,true)->nullable();
            $table->decimal('total_cost',10,2,true)->nullable();
            $table->double('balance_quantity');
            $table->decimal('balance_unit_cost',10,2,true);
            $table->decimal('balance_total_cost',10,2,true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item_transaction');
    }
};
