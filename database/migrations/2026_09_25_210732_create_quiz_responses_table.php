<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('quiz_responses', function (Blueprint $table) {
            $table->id();

            $table->text('answer_1');
            $table->text('answer_2');
            $table->text('answer_3');
            $table->text('answer_4');
            $table->text('answer_5');
            $table->text('answer_6');
            $table->text('answer_7');
            $table->text('answer_8');
            $table->text('answer_9');
            $table->text('answer_10');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('quiz_responses');
    }
};