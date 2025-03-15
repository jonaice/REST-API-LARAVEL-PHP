<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        /*Inicio configuración*/

        Schema::create('roles', function (Blueprint $table) {
            $table->id(); // Auto Increment y Primary Key
            $table->string('nombre', 255); // VARCHAR(255)
            $table->timestamps(); // Crea columnas created_at y updated_at
        });

        /*Fin Configuración*/
    }


    public function down(): void
    {
        /*Inicio configuracion*/

        Schema::dropIfExists('roles'); // Elimina la tabla si existe

        /*Fin Configuracion */
    }
};
