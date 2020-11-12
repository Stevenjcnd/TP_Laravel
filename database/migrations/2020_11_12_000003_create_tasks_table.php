<?php

//JACQUENOD Steven B2A

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    public function up()
    {
        //Création de la table 'tasks' avec ses différentes colonnes (id, title, description, state, created_at et verified_at) et récupération des clés étrangères 'category_id' et 'board_id'
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->date('due_date');
            $table->enum('state',['todo','in progress','done']);
            $table->foreignId('category_id')->unique()->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('board_id')->unique()->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
