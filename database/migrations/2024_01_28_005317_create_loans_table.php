<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->decimal('amount', 10, 2);
            $table->integer('fees')->default(10);
            $table->float('taxes', 3, 2)->default(0.1);
            $table->foreignId('customer_id')->constrained();
            $table->string('state')->default('al dia');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('loans');
    }
};
