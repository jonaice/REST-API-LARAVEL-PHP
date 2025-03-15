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
        /*Inicio configuración*/

        Schema::create('users', function (Blueprint $table) {
            
            $table->id(); 
            $table->string('nombre', 100); // VARCHAR(100)
            $table->string('email', 255)->unique(); // VARCHAR(255) y Unique
            $table->string('password', 500); // VARCHAR(500)
            $table->timestamps(); // Crea columnas created_at y updated_at

            
            // Relación con la tabla roles
            $table->unsignedBigInteger('rol_id'); // Campo para la relación
            $table->foreign('rol_id')->references('id')->on('roles'); 

        });

        /*Fin Configuración*/
    }


    public function down(): void
    {
        /*Inicio configuracion*/

        Schema::dropIfExists('users'); // Elimina la tabla si existe

        /*Fin Configuracion */
    }
};
