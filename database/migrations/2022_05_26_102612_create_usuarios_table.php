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
        Schema::create       ('usuarios', function (Blueprint $table) {
            $table ->id();
            $table -> string ('ID_TOKEN',50);
            $table -> string ('PROCEDENCIA',30) ->nullable();
            $table -> string ('IDIOMA',30) ->nullable();
            $table -> string ('USERLOCATION',500) ->nullable();
            $table -> text   ('POIVISITED') ->nullable();
            $table -> integer('OPINION') ->nullable();
            $table -> foreignId ('APP_ID') ->nullable() ;
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
        Schema::dropIfExists('usuarios');
    }
};
