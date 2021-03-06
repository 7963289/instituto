<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignToMateriamatriculadaTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('materiasmatriculadas', function (Blueprint $table) {
            $table->foreign('alumno')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('grupo')->references('id')->on('grupos')->onDelete('cascade');
            $table->foreign('materia')->references('id')->on('materias')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down() {
       Schema::table('materiasmatriculadas', function (Blueprint $table) {
            $table->dropForeign('materiasmatriculadas_alumno_foreign');
            $table->dropForeign('materiasmatriculadas_grupo_foreign');
            $table->dropForeign('materiasmatriculadas_materia_foreign');
        });

    }
}
