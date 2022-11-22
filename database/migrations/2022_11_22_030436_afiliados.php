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
        //
        Schema::create('afiliados', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('apellidos');
            $table->date('fecha de nacimiento');
            $table->integer('peso');
            $table->string('suscripcion');
            $table->string('objetivo');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();

            $table->bigInteger('sede_id')->unsigned();
            $table->bigInteger('entrenador_id')->unsigned();

            $table->foreign('sede_id')->references('id')->on('sede');
            $table->foreign('entrenador_id')->references('id')->on('entrenadores');

        });

        


            

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
