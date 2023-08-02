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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('stock_no',)->unique()->nullable();
            $table->string('description',500);
            $table->foreignId('uom_id')->constrained();
            $table->foreignId('category_id')->constrained();
            $table->double('monthly_average_consumption')->default(0);
            $table->double('reorder')->default(0);
            $table->double('current_quantity')->default(0);
            $table->decimal('average_unit_cost',10,2,true)->default(0);
            $table->decimal('current_total_cost',10,2,true)->default(0);
            $table->tinyInteger('status')->default(1);
            $table->string('images')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
