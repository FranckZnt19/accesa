<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',50);
            $table->string('alias',50);
            $table->string('correo',100);
            $table->date('nacimiento');
            $table->string('domicilio',150);
            $table->string('telefono',10);
            $table->date('ingreso');
            $table->decimal('salario',10,2);
            $table->string('password',30);
            $table->foreignId('id_area')->constrained('areas')->onUpdate('cascade')->onDelete('restrict');
            $table->foreignId('id_perfil')->constrained('perfils')->onUpdate('cascade')->onDelete('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
};
