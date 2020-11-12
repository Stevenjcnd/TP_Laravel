<?php

//JACQUENOD Steven B2A

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaskUsersTable extends Migration
{
    public function up()
    {
        //Création de la table 'task_users' avec ses différentes colonnes (id, created_at et verified_at) et récupération des clés étrangères 'user_id' et 'task_id'
        Schema::create('task_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->unique()->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('task_id')->unique()->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('task_users');
    }
}
