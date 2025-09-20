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
        Schema::create('return_details', function (Blueprint $table) {
            $table->id();
            $table->integer('cantidad');
            $table->decimal('monto_devuelto', 10, 2);
            $table->foreignId('devolucion_id')->constrained('returns')->cascadeOnDelete();
            $table->foreignId('detalle_venta_id')->constrained('sales_details')->restrictOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('return_details');
    }
};
