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
        Schema::create('requisition_issue_slips', function (Blueprint $table) {
            $table->id();
            $table->string('ris_no');
            $table->date('date_prepared');
            $table->string('sai_no')->nullable();
            $table->date('sai_date')->nullable();

            $table->foreignId('requested_by')->constrained('employees'); // from requisitioning office
            $table->date('requested_date')->nullable();

            $table->foreignId('approved_by')->constrained('employees'); // from GSO
            $table->date('approved_date')->nullable();

            $table->foreignId('issued_by')->constrained('employees'); // from GSO Employee
            $table->date('issued_date')->nullable();

            $table->foreignId('received_by')->constrained('employees'); // from Employee
            $table->date('received_date')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requisition_issue_slips');
    }
};
