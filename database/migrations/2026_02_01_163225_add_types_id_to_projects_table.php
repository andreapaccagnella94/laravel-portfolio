<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            // non devo rimuovere niente perchè prima non c'era questa colonna 
            // importante o definisco che valore avrà questa colonna o dico nullable
            $table->foreignId("types_id")->nullable()->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            // elimino prima la constrain
            $table->dropForeign("types_id");

            // elimino la colonna
            $table->dropColumn("types_id");
        });
    }
};
