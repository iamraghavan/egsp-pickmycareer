<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormDataTable extends Migration
{
    public function up()
    {
        Schema::create('form_data', function (Blueprint $table) {
            $table->id();
            $table->string('student_name');
            $table->string('email')->nullable();
            $table->string('whatsapp_number');
            $table->string('education_level');
            $table->string('board_of_studies');
            $table->text('queries')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('form_data');
    }
}
