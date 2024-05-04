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
        Schema::create('turma_corporates', function (Blueprint $table) {
            $table->id();
            $table->text('descricao');
            $table->foreignId('turma_id');
            $table->timestamps();

            $table->foreign('turma_id')->references('id')->on('turmas')->onDelete('cascade');
        });

        Schema::create('empresa_turmaCorporate', function (Blueprint $table) {
            $table->id();
            $table->foreignId('empresa_id');
            $table->foreignId('turma_corporate_id');
            $table->timestamps();

            $table->foreign('empresa_id')->references('id')->on('empresas')->onDelete('cascade');
            $table->foreign('turma_corporate_id')->references('id')->on('turma_corporates')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('turma_corporates');
        Schema::dropIfExists('empresa_turmaCorporate');
    }
};
