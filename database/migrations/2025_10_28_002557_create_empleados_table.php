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
    Schema::create('empleados', function (Blueprint $table) {
        $table->id();
        $table->string('nombre');                 // requerido
        $table->string('apellido');               // requerido
        $table->string('correo')->unique();       // único + requerido
        $table->decimal('salario', 10, 2);        // requerido
        $table->timestamps();
    });
}

};
