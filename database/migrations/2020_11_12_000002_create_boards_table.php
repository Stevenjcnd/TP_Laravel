<?php

//JACQUENOD Steven B2A

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoardsTable extends Migration
{
    public function up()
    {
        //Création de la table 'boards' avec ses différentes colonnes (id, title, description, created_at et verified_at) et récupération de la clé étrangère 'user_id'
        Schema::create('boards', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->unique()->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->string('title');
            $table->text('description');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('boards');
    }
}
