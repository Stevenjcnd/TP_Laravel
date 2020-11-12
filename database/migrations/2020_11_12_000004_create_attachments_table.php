<?php

//JACQUENOD Steven B2A

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttachmentsTable extends Migration
{
    public function up()
    {
        //Création de la table 'attachments' avec ses différentes colonnes (id, file, filename, size, type, created_at et verified_at) et récupération des clés étrangères 'user_id' et 'task_id'
        Schema::create('attachments', function (Blueprint $table) {
            $table->id();
            $table->string('file');
            $table->string('filename');
            $table->integer("size");
            $table->string('type'); 
            $table->timestamps();
            $table->foreignId('user_id')->unique()->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('task_id')->unique()->constrained()->onDelete('cascade')->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('attachments');
    }
}
