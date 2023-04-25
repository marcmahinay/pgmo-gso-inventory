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
            $table->double('credit');
            $table->double('debit');
            $table->double('quantity');
            $table->double('balance_quantity');
            $table->decimal('unit_cost',10,2,true);
            $table->decimal('average_cost',10,2,true);
            $table->date('expiry_date')->nullable();
            $table->integer('days_to_consume')->nullable();
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
