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
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 45);
            $table->unsignedBigInteger('grado_id')->nullable();

            $table->foreign('grado_id')
                ->references('id')
                ->on('grados')
                ->onDelete('set null');

            $table->string('apellido_paterno', 45);
            $table->string('apellido_materno', 45);
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
        Schema::dropIfExists('funcionarios');
    }
};
