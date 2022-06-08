<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Migraciones iniciales de la tabla usuarios que es la que recoge los usuarios de la base de datos
     *
     * @return void
     */
    public function up()
    {
        Schema::create       ('usuarios', function (Blueprint $table) {
            $table ->id();
            $table -> string ('id_token',50);
            $table -> string ('procedencia',30) ->nullable();
            $table -> integer ('idioma') ->nullable();
            $table -> string ('userlocation',500) ->nullable();
            $table -> text   ('poivisited') ->nullable();
            $table -> integer('opinion') ->nullable();
            $table -> foreignId ('app_id') ->nullable() ;
            $table->timestamps();

        });
    }

    /**
     * Para revertir la migracion de la tabla de usuarios
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
};
