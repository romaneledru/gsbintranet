<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicamentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicaments', function (Blueprint $table) {
            $table->id();
            $table->string('nomCommercial',80);
            $table->string('composition', 500);
            $table->string('effets',500);
            $table->string('contreIndications',500);
            $table->timestamps();

            $table->unsignedBigInteger('idFamille');
            $table->foreign('idFamille')->references('id')->on('medicaments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medicaments');
    }
}
