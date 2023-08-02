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
        Schema::create('acceptance_inspection_reports', function (Blueprint $table) {
            $table->id();
            $table->string('air_no');
            $table->foreignId('po_id')->constrained('purchase_orders');
            $table->string('invoice_no')->nullable();
            $table->date('invoice_date')->nullable();
            $table->date('received_date')->nullable();
            $table->tinyInteger('delivery_type')->default(0);
            $table->date('inspected_date')->nullable();
            $table->foreignId('inspected_by')->constrained('employees');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('acceptance_inspection_reports');
    }
};
