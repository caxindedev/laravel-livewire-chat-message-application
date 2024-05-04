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
        Schema::create('turma_retalhos', function (Blueprint $table) {
            $table->id();
            $table->text('descricao');
            $table->foreignId('turma_id');
            $table->timestamps();

            $table->foreign('turma_id')->references('id')->on('turmas')->onDelete('cascade');
        });

        Schema::create('aluno_retalho', function (Blueprint $table) {
            $table->id();
            $table->foreignId('aluno_id');
            $table->foreignId('turma_retalho_id');
            $table->timestamps();

            $table->foreign('aluno_id')->references('id')->on('alunos')->onDelete('cascade');
            $table->foreign('turma_retalho_id')->references('id')->on('turma_retalhos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('turma_retalhos');
    }
};
