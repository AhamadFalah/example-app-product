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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('payment_by');
            $table->date('payment_date');
            $table->decimal('amount', 10, 2);
            $table->string('payment_method');
            $table->enum('currency', ['LKR', 'USD', 'EUR', 'RUB']);
            $table->enum('status', ['pending', 'completed', 'failed']);
            $table->string('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
