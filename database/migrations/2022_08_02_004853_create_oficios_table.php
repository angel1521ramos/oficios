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
        Schema::create('oficios', function (Blueprint $table) {
            $table->id();
            $table->string('folio')->nullable();
            $table->string('fecha')->nullable();
            $table->string('hora')->nullable();
            $table->string('noOficio')->nullable();
            $table->string('dependencia')->nullable();
            $table->string('remitente')->nullable();
            $table->longText('asunto')->nullable();
            $table->string('telefono')->nullable();
            $table->string('observacion')->nullable();
            $table->string('recibe')->nullable();
            $table->string('documento')->nullable();
            $table->string('documentoNombre')->nullable();
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
        Schema::dropIfExists('oficios');
    }
};
