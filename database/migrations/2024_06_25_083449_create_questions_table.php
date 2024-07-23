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
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->longText('question');
            $table->text('option_1');
            $table->text('option_2');
            $table->text('option_3')->nullable();
            $table->text('option_4')->nullable();
            $table->text('option_5')->nullable();
            $table->text('option_6')->nullable();
            $table->text('option_7')->nullable();
            $table->text('option_8')->nullable();
            $table->text('option_9')->nullable();
            $table->text('option_10')->nullable();
            $table->text('option_11')->nullable();
            $table->text('option_12')->nullable();
            $table->integer('score_1');
            $table->integer('score_2');
            $table->integer('score_3')->nullable();
            $table->integer('score_4')->nullable();
            $table->integer('score_5')->nullable();
            $table->integer('score_6')->nullable();
            $table->integer('score_7')->nullable();
            $table->integer('score_8')->nullable();
            $table->integer('score_9')->nullable();
            $table->integer('score_10')->nullable();
            $table->integer('score_11')->nullable();
            $table->integer('score_12')->nullable();
            $table->enum('answer', ['option_1', 'option_2', 'option_3', 'option_4', 'option_5', 'option_6', 'option_7', 'option_8', 'option_9', 'option_10', 'option_11', 'option_12']);
            $table->integer('total_score');
            $table->foreignId('user_id')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
