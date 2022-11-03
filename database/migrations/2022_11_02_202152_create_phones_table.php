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
        Schema::create('phones', function (Blueprint $table) {
            $table->id();
            $table->string('imei', 15);
            $table->text('descripcion');
            $table->timestamps();

            $table->unsignedBigInteger('funcionario_id')->nullable();
            $table->foreign('funcionario_id')
                ->reference('id')
                ->on('funcionarios')
                ->onDelete('cascade');

            $table->unsignedBigInteger('marca_id')->nullable();
            $table->foreign('marca_id')
                ->reference('id')
                ->on('marcas')
                ->onDelete('cascade');

            $table->string('linea',25)->nullable();
            $table->foreign('linea')
                ->reference('linea')
                ->on('abonados')
                ->onDelete('cascade');

            $table->unsignedBigInteger('numero_acta')->nullable();
            $table->foreign('numero_acta')
                ->reference('numero_acta')
                ->on('actas')
                ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phones');
    }
};
