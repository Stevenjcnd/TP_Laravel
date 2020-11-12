<?php

//JACQUENOD Steven B2A

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    public function up()
    {
        //Création de la table 'comments' avec ses différentes colonnes (id, text, created_at et verified_at) et récupération des clés étrangères 'user_id' et 'task_id'
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->unique()->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('task_id')->unique()->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->string('text');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
