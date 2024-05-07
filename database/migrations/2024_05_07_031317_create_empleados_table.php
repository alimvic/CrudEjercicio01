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
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('cedula');
            $table->string('provincia');
            $table->date('fechanacimiento');
            $table->string('correo');
            $table->string('observaciones')->nullable();
            $table->string('fotos')->nullable();
            $table->string('estcivil');
            $table->string('tipsangre');
            $table->date('fecha_ingreso');
            $table->string('cargo');
            $table->string('departamento');
            $table->string('provempleo');
            $table->integer('sueldo');
            $table->string('jornada');
            $table->string('estado');
            $table->string('observlab')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
