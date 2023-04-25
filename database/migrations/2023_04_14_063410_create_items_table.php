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
            $table->string('description',500);
            $table->string('uom');
            $table->foreignId('category_id')->constrained();
            $table->string('images')->nullable();
            $table->double('reorder_point')->default(0);
            $table->double('current_quantity')->default(0);
            $table->decimal('average_cost',10,2,true)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
