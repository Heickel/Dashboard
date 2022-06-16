<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('program')->nullable();
            $table->string('program_categorie')->nullable();
            $table->string('program_sub_categorie')->nullable();
            $table->integer('code');
            $table->string('name');
            $table->string('type')->nullable();
            $table->string('purchasing_officer')->nullable();
            $table->string('requesting_part')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
