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
                ->references('id')
                ->on('funcionarios')
                ->onDelete('cascade');

            $table->unsignedBigInteger('marca_id')->nullable();
            $table->foreign('marca_id')
                ->references('id')
                ->on('marcas')
                ->onDelete('cascade');

            $table->string('abonado', 9);
            $table->foreign('abonado')
                ->references('linea')
                ->on('abonados');

            $table->integer('acta')->nullable();
            $table->foreign('acta')
                ->references('numero_acta')
                ->on('actas');

            $table->unsignedBigInteger('altasrep_id')->nullable();
            $table->foreign('altasrep_id')
            ->references('id')->on('altasreps')
            ->onDelete('set null')->onUpdate('cascade');

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
