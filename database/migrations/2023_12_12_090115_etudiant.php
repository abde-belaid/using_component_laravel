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
        Schema::create("etudiants",function(Blueprint $table){
            $table->engine = 'InnoDB';
            $table->id();
            $table->string("nom");
            $table->string("prenom");
            $table->date("dateNaissance")->default(now());
            $table->text("profile");
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExist('etudiants');
    
    }
};
