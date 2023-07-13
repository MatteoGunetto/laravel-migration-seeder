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
        Schema::create('train', function (Blueprint $table) {
            $table->id();
            $table ->string('azienda');
            $table ->string('stazione di partenza');
            $table ->string('stazione di arrivo');
            $table ->integer('orario di partenza');
            $table ->integer('orario di arrivo');
            $table ->string('codice treno');
            $table ->integer('numero carrozze');
            $table ->boolean('in_orario') -> default(true);
            $table ->boolean('cancellato') -> default(false);

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
        Schema::dropIfExists('train');
    }
};
